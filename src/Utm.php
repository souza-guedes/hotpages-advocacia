<?php

declare(strict_types=1);

namespace SouzaGuedes\HotPages;

/**
 * Parâmetros UTM da requisição. Ficam só no request: nada vai para cookie ou
 * sessão antes do consentimento (WDLC 1.2, seção 5, regra 7).
 */
final class Utm
{
    public const KEYS = ['utm_source', 'utm_medium', 'utm_campaign', 'utm_term', 'utm_content'];

    private const MAX_LENGTH = 100;
    private const PATTERN = '/^[\p{L}\p{N} ._+\-|]+$/u';

    /**
     * Filtra a query pela whitelist e descarta valores inválidos.
     *
     * @param array<mixed> $query normalmente $_GET
     * @return array<string, string>
     */
    public static function fromQuery(array $query): array
    {
        $utm = [];
        foreach (self::KEYS as $key) {
            $value = $query[$key] ?? null;
            if (!is_string($value)) {
                continue;
            }
            $value = trim($value);
            if ($value === '' || mb_strlen($value) > self::MAX_LENGTH || !preg_match(self::PATTERN, $value)) {
                continue;
            }
            $utm[$key] = $value;
        }
        return $utm;
    }

    /**
     * Acrescenta os UTM a um link interno, antes de um eventual fragmento.
     *
     * @param array<string, string> $utm
     */
    public static function append(string $url, array $utm): string
    {
        if ($utm === []) {
            return $url;
        }

        $fragment = '';
        $hashPos = strpos($url, '#');
        if ($hashPos !== false) {
            $fragment = substr($url, $hashPos);
            $url = substr($url, 0, $hashPos);
        }

        $separator = str_contains($url, '?') ? '&' : '?';
        return $url . $separator . http_build_query($utm, '', '&', PHP_QUERY_RFC3986) . $fragment;
    }
}
