<?php

use JetBrains\PhpStorm\ArrayShape;

#[ArrayShape(['hours' => 'string', 'minutes' => 'string'])]
function formatTime(): array
{
    return [
        'hours' => '10',
        'minutes' => '20';
}

$a = formatTime();
$b = $a['ho']
