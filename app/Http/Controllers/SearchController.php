<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\SearchService;
use App\Services\UserValidator;

// ============================================================
// SearchController
// ============================================================
class SearchController extends Controller
{
    protected SearchService $searchService;

    public function __construct(SearchService $searchService)
    {
        $this->searchService = $searchService;
    }

    public function search(Request $request)
    {
        $query   = strip_tags(trim($request->get('q', '')));
        $results = [];

        if (strlen($query) >= 2) {
            $results = $this->searchService->search($query);
        }

        return view('pages.search', compact('query', 'results'));
    }
}

// ============================================================
// ContactController
// ============================================================
class ContactController extends Controller
{
    public function show()
    {
        return view('pages.contacto');
    }

    public function send(Request $request)
    {
        // Validación CAPTCHA (usuario humano)
        if (!$request->boolean('captcha')) {
            return back()
                ->withInput()
                ->withErrors(['captcha' => 'Por favor confirma que no eres un robot.']);
        }

        // Validación backend OOP
        $validator = new UserValidator($request->all());
        $validator
            ->required('name', 'Nombre')
            ->noScript('name', 'Nombre')
            ->maxLength('name', 100, 'Nombre')
            ->required('email', 'Correo')
            ->email('email')
            ->required('message', 'Mensaje')
            ->minLength('message', 10, 'Mensaje')
            ->noScript('message', 'Mensaje');

        // Teléfono: solo si se proporcionó
        if ($request->filled('phone')) {
            $validator->phone('phone');
        }

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->getErrors());
        }

        // Aquí se enviaría el correo con Mail::send() o un Job
        // Mail::to('contacto@devagency.com')->send(new ContactMail($request->all()));

        return redirect()->route('contacto')
            ->with('success', 'Mensaje enviado correctamente. Nos pondremos en contacto pronto.');
    }
}
