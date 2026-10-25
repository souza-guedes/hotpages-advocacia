<?php

declare(strict_types=1);

const HOTPAGES_ROOT = __DIR__ . '/..';

require __DIR__ . '/Router.php';
require __DIR__ . '/Utm.php';
require __DIR__ . '/View.php';

/** Escapa um valor para HTML (texto e atributos). */
function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}
