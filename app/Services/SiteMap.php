<?php

namespace App\Services;

/**
 * Clase SiteMap
 * 
 * Genera la estructura del mapa del sitio de forma orientada a objetos.
 * Permite agregar secciones principales, secundarias y elementos adicionales.
 */
class SiteMap
{
    /** @var array Secciones principales */
    protected array $mainSections = [];

    /** @var array Elementos adicionales (utilidades) */
    protected array $additionalElements = [];

    /**
     * Agrega una sección principal con sus subsecciones.
     *
     * @param string $label  Etiqueta visible
     * @param string $url    URL de la sección
     * @param array  $children Subsecciones [['label' => '', 'url' => '']]
     */
    public function addMainSection(string $label, string $url, array $children = []): static
    {
        $this->mainSections[] = [
            'label'    => $label,
            'url'      => $url,
            'children' => $children,
        ];
        return $this;
    }

    /**
     * Agrega un elemento adicional (registro, buzón, etc.)
     */
    public function addElement(string $label, string $url, string $icon = ''): static
    {
        $this->additionalElements[] = [
            'label' => $label,
            'url'   => $url,
            'icon'  => $icon,
        ];
        return $this;
    }

    public function getMainSections(): array
    {
        return $this->mainSections;
    }

    public function getAdditionalElements(): array
    {
        return $this->additionalElements;
    }

    /**
     * Genera el mapa completo como array para las vistas.
     */
    public function toArray(): array
    {
        return [
            'main'       => $this->mainSections,
            'additional' => $this->additionalElements,
        ];
    }

    /**
     * Factory: construye el mapa estándar del sitio.
     */
    public static function build(): static
    {
        $map = new static();

        $map->addMainSection('Inicio', route('home'))
            ->addMainSection('Servicios', route('servicios'), [
                ['label' => 'Desarrollo Web', 'url' => route('servicios.web')],
                ['label' => 'Apps Móviles',   'url' => route('servicios.movil')],
                ['label' => 'Diseño UX/UI',   'url' => route('servicios.ux')],
            ])
            ->addMainSection('Nosotros', route('nosotros'), [
                ['label' => 'Equipo',   'url' => route('nosotros.equipo')],
                ['label' => 'Historia', 'url' => route('nosotros.historia')],
            ])
            ->addMainSection('Portafolio', route('portafolio'))
            ->addMainSection('Blog', route('blog'))
            ->addMainSection('Contacto', route('contacto'));

        $map->addElement('Registrarse',            route('register'),         '📝')
            ->addElement('Iniciar sesión',          route('login'),            '🔑')
            ->addElement('Buzón',                   route('buzon'),            '📬')
            ->addElement('Ayuda',                   route('ayuda'),            '❓')
            ->addElement('Contáctanos',             route('contacto'),         '✉️')
            ->addElement('Mapa del sitio',          route('sitemap'),          '🗺️')
            ->addElement('Recuperar contraseña',    route('password.request'), '🔒')
            ->addElement('Chat en vivo',            '#chat-widget',            '💬');

        return $map;
    }
}
