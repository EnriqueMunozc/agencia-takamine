<?php

namespace App\Services;

/**
 * Clase SearchService — motor de búsqueda para Agencia Takamine.
 * Paradigma OOP: encapsula el índice y la lógica de relevancia.
 */
class SearchService
{
    protected array $index;

    public function __construct()
    {
        $this->index = $this->buildIndex();
    }

    public function search(string $query, int $limit = 10): array
    {
        $query  = strtolower(trim($query));
        if (strlen($query) < 2) return [];

        $terms  = explode(' ', $query);
        $scored = [];

        foreach ($this->index as $page) {
            $score = $this->scoreEntry($page, $terms);
            if ($score > 0) $scored[] = array_merge($page, ['score' => $score]);
        }

        usort($scored, fn($a, $b) => $b['score'] <=> $a['score']);
        return array_slice($scored, 0, $limit);
    }

    protected function scoreEntry(array $page, array $terms): int
    {
        $score   = 0;
        $title   = strtolower($page['title']);
        $excerpt = strtolower($page['excerpt']);

        foreach ($terms as $term) {
            if (str_contains($title, $term))   $score += 3;
            if (str_contains($excerpt, $term)) $score += 1;
        }
        return $score;
    }

    protected function buildIndex(): array
    {
        return [
            ['title' => 'Inicio — Agencia Takamine',         'url' => '/',                       'excerpt' => 'Especialistas en guitarras Takamine de 12 cuerdas para norteño, banda y ranchero.'],
            ['title' => 'Guitarras de 12 cuerdas Takamine',  'url' => '/catalogo/12-cuerdas',     'excerpt' => 'Modelos GJ72CE, EF381SC y más. Perfectas para el regional mexicano. Tapa de abeto sólido.'],
            ['title' => 'Guitarras de 6 cuerdas Takamine',   'url' => '/catalogo/6-cuerdas',      'excerpt' => 'Serie G, P y EF para todos los estilos y presupuestos.'],
            ['title' => 'Accesorios para guitarra',          'url' => '/catalogo/accesorios',     'excerpt' => 'Cuerdas Elixir, correas, afinadores, estuches rígidos y más.'],
            ['title' => 'Guitarras para norteño',            'url' => '/regional/norteno',        'excerpt' => 'Las mejores Takamine de 12 cuerdas para el género norteño. GJ72CE recomendada.'],
            ['title' => 'Guitarras para banda sinaloense',   'url' => '/regional/banda',          'excerpt' => 'Modelos con gran proyección acústica para cortar los metales en la banda.'],
            ['title' => 'Guitarras para ranchero',           'url' => '/regional/ranchero',       'excerpt' => 'Caoba en aros y fondo para ese tono gordo y melancólico del corrido ranchero.'],
            ['title' => 'Catálogo completo',                 'url' => '/catalogo',                'excerpt' => 'Todos los modelos Takamine disponibles: 12 cuerdas, 6 cuerdas y accesorios.'],
            ['title' => 'Nosotros — Agencia Takamine',       'url' => '/nosotros',                'excerpt' => 'Somos distribuidores especializados en guitarras Takamine para el regional mexicano.'],
            ['title' => 'Blog de guitarras y regional',      'url' => '/blog',                    'excerpt' => 'Tips de mantenimiento, comparativas de modelos y noticias del regional mexicano.'],
            ['title' => 'Contáctanos',                       'url' => '/contacto',                'excerpt' => 'Consulta disponibilidad, precios y asesoría personalizada sin compromiso.'],
            ['title' => 'Centro de ayuda',                   'url' => '/ayuda',                   'excerpt' => 'Preguntas frecuentes sobre guitarras Takamine, envíos, garantías y mantenimiento.'],
            ['title' => 'Mapa del sitio',                    'url' => '/sitemap',                 'excerpt' => 'Todas las secciones de Agencia Takamine en un solo lugar.'],
        ];
    }
}
