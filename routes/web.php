<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ContactController;

// ── Inicio ──────────────────────────────────────────────────────────────────
Route::get('/', [HomeController::class, 'index'])->name('home');

// ── Catálogo ─────────────────────────────────────────────────────────────────
Route::get('/catalogo',               [HomeController::class, 'catalogo'])->name('catalogo');
Route::get('/catalogo/12-cuerdas',    [HomeController::class, 'catalogo12'])->name('catalogo.12cuerdas');
Route::get('/catalogo/6-cuerdas',     [HomeController::class, 'catalogo6'])->name('catalogo.6cuerdas');
Route::get('/catalogo/accesorios',    [HomeController::class, 'accesorios'])->name('catalogo.accesorios');

// ── Regional Mexicano ─────────────────────────────────────────────────────────
Route::get('/regional',               [HomeController::class, 'regional'])->name('regional');
Route::get('/regional/norteno',       [HomeController::class, 'norteno'])->name('regional.norteno');
Route::get('/regional/banda',         [HomeController::class, 'banda'])->name('regional.banda');
Route::get('/regional/ranchero',      [HomeController::class, 'ranchero'])->name('regional.ranchero');

// ── Empresa ───────────────────────────────────────────────────────────────────
Route::get('/nosotros',               [HomeController::class, 'nosotros'])->name('nosotros');
Route::get('/blog',                   [HomeController::class, 'blog'])->name('blog');
Route::get('/sitemap',                [HomeController::class, 'sitemap'])->name('sitemap');
Route::get('/ayuda',                  [HomeController::class, 'ayuda'])->name('ayuda');

// ── Buzón (requiere login) ────────────────────────────────────────────────────
Route::get('/buzon', [HomeController::class, 'buzon'])->name('buzon')->middleware('auth');
Route::get('/perfil', function () { return view('pages.perfil'); })->name('perfil')->middleware('auth');

// ── Búsqueda ──────────────────────────────────────────────────────────────────
Route::get('/buscar', [SearchController::class, 'search'])->name('search');

// ── Contacto ──────────────────────────────────────────────────────────────────
Route::get('/contacto',  [ContactController::class, 'show'])->name('contacto');
Route::post('/contacto', [ContactController::class, 'send'])->name('contacto.send');

// ── Autenticación ─────────────────────────────────────────────────────────────
Route::middleware('guest')->group(function () {
    Route::get('/registro',             [AuthController::class, 'showRegister'])->name('register');
    Route::post('/registro',            [AuthController::class, 'register']);

    Route::get('/iniciar-sesion',       [AuthController::class, 'showLogin'])->name('login');
    Route::post('/iniciar-sesion',      [AuthController::class, 'login']);

    Route::get('/recuperar-contrasena', fn() => view('auth.forgot-password'))->name('password.request');
    Route::post('/recuperar-contrasena', function (\Illuminate\Http\Request $req) {
        $status = \Illuminate\Support\Facades\Password::sendResetLink($req->only('email'));
        return $status === \Illuminate\Support\Facades\Password::RESET_LINK_SENT
            ? back()->with('status', __($status))
            : back()->withErrors(['email' => __($status)]);
    })->name('password.email');
});

Route::post('/cerrar-sesion', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
