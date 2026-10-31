<?php
declare(strict_types=1);

function orderTotal(array $items): int
{
    $total = 0;
    foreach ($items as $item) {
        if ($item['quantity'] <= 0) {
            continue;
        }
        $total += $item['unit_price'] * $item['quantity'];
    }
    return $total;
}
