<?php

namespace App\Services;

/**
 * Clase UserValidator
 * 
 * Servicio de validación orientado a objetos para datos de usuario.
 * Principio de Responsabilidad Única (SRP): solo valida, no guarda ni autentica.
 */
class UserValidator
{
    /** @var array Errores acumulados */
    protected array $errors = [];

    /** @var array Datos a validar */
    protected array $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    // ── Reglas de validación ───────────────────────────────────────

    /**
     * Valida que el campo no esté vacío.
     */
    public function required(string $field, string $label): static
    {
        if (empty(trim($this->data[$field] ?? ''))) {
            $this->errors[$field][] = "El campo {$label} es obligatorio.";
        }
        return $this;
    }

    /**
     * Valida formato de correo electrónico.
     */
    public function email(string $field): static
    {
        $value = $this->data[$field] ?? '';
        if ($value && !filter_var($value, FILTER_VALIDATE_EMAIL)) {
            $this->errors[$field][] = 'Ingresa un correo electrónico válido.';
        }
        return $this;
    }

    /**
     * Longitud mínima.
     */
    public function minLength(string $field, int $min, string $label): static
    {
        $value = $this->data[$field] ?? '';
        if (strlen($value) < $min) {
            $this->errors[$field][] = "El campo {$label} debe tener al menos {$min} caracteres.";
        }
        return $this;
    }

    /**
     * Longitud máxima.
     */
    public function maxLength(string $field, int $max, string $label): static
    {
        $value = $this->data[$field] ?? '';
        if (strlen($value) > $max) {
            $this->errors[$field][] = "El campo {$label} no puede exceder {$max} caracteres.";
        }
        return $this;
    }

    /**
     * Contraseña segura: mayúsculas, minúsculas, número y símbolo.
     */
    public function strongPassword(string $field): static
    {
        $pw = $this->data[$field] ?? '';
        if ($pw && !preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/', $pw)) {
            $this->errors[$field][] = 'La contraseña debe tener mayúsculas, minúsculas, número y símbolo (mín. 8 caracteres).';
        }
        return $this;
    }

    /**
     * Coincidencia entre dos campos (p. ej. contraseña y confirmación).
     */
    public function matches(string $field, string $otherField, string $label): static
    {
        if (($this->data[$field] ?? '') !== ($this->data[$otherField] ?? '')) {
            $this->errors[$field][] = "El campo {$label} no coincide.";
        }
        return $this;
    }

    /**
     * Teléfono válido (formato flexible).
     */
    public function phone(string $field): static
    {
        $value = $this->data[$field] ?? '';
        if ($value && !preg_match('/^[\d\s\+\-\(\)]{7,15}$/', $value)) {
            $this->errors[$field][] = 'El número de teléfono no es válido.';
        }
        return $this;
    }

    /**
     * Prevenir inyección XSS / scripts.
     */
    public function noScript(string $field, string $label): static
    {
        $value = $this->data[$field] ?? '';
        if (preg_match('/<script|javascript:|on\w+\s*=/i', $value)) {
            $this->errors[$field][] = "El campo {$label} contiene contenido no permitido.";
        }
        return $this;
    }

    // ── Resultados ─────────────────────────────────────────────────

    public function passes(): bool
    {
        return empty($this->errors);
    }

    public function fails(): bool
    {
        return !$this->passes();
    }

    public function getErrors(): array
    {
        return $this->errors;
    }

    public function firstError(string $field): ?string
    {
        return $this->errors[$field][0] ?? null;
    }

    /**
     * Lanza excepción si hay errores (útil en controladores).
     */
    public function throwIfFails(): void
    {
        if ($this->fails()) {
            throw new \InvalidArgumentException(
                json_encode($this->errors)
            );
        }
    }
}
