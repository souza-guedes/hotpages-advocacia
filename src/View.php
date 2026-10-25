<?php

declare(strict_types=1);

namespace SouzaGuedes\HotPages;

/**
 * Renderiza templates PHP de src/Views com variáveis isoladas.
 */
final class View
{
    public function __construct(private readonly string $directory)
    {
    }

    /** @param array<string, mixed> $vars */
    public function render(string $template, array $vars = []): string
    {
        $file = $this->directory . '/' . $template . '.php';
        if (!is_file($file)) {
            throw new \RuntimeException("Template não encontrado: {$template}");
        }

        return (static function (string $__file, array $__vars): string {
            extract($__vars, EXTR_SKIP);
            ob_start();
            try {
                require $__file;
                return (string) ob_get_clean();
            } catch (\Throwable $e) {
                ob_end_clean();
                throw $e;
            }
        })($file, $vars);
    }
}
