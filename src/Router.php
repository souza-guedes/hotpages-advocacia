<?php

declare(strict_types=1);

namespace SouzaGuedes\HotPages;

/**
 * Resolve o path da requisição para uma hotpage, um redirecionamento ou 404.
 * Não faz I/O: quem chama decide como responder.
 */
final class Router
{
    /** @param list<string> $slugs slugs válidos, em minúsculas */
    public function __construct(private readonly array $slugs)
    {
    }

    /**
     * @return array{type: 'page', slug: string}
     *       | array{type: 'redirect', location: string}
     *       | array{type: 'not_found'}
     */
    public function resolve(string $requestUri): array
    {
        $path = parse_url($requestUri, PHP_URL_PATH);
        $query = parse_url($requestUri, PHP_URL_QUERY);

        if (!is_string($path) || $path === '') {
            return ['type' => 'not_found'];
        }

        // "/saude/" vira "/saude", mantendo a query inteira (UTM incluída).
        // Só redireciona para slugs conhecidos, o que evita open redirect ("//host/").
        if ($path !== '/' && str_ends_with($path, '/')) {
            $trimmed = rtrim($path, '/');
            if ($this->isSlug(substr($trimmed, 1))) {
                $location = $trimmed . (is_string($query) && $query !== '' ? '?' . $query : '');
                return ['type' => 'redirect', 'location' => $location];
            }
            return ['type' => 'not_found'];
        }

        $slug = substr($path, 1);
        if ($this->isSlug($slug)) {
            return ['type' => 'page', 'slug' => $slug];
        }

        return ['type' => 'not_found'];
    }

    private function isSlug(string $candidate): bool
    {
        return in_array($candidate, $this->slugs, true);
    }
}
