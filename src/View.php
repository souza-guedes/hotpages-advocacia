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

        $vars['view'] = $this;

        return (function (string $__file, array $__vars): string {
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

    /** Atalho para partials em src/Views/partials/. @param array<string, mixed> $vars */
    public function partial(string $name, array $vars = []): string
    {
        return $this->render('partials/' . $name, $vars);
    }
}
