<?php

declare(strict_types=1);

namespace ProofPatch\WorkflowTest;

final class OrderTotal
{
    /**
     * @param list<array{priceCents:int, quantity:int}> $items
     */
    public static function totalCents(array $items): int
    {
        $total = 0;

        foreach ($items as $item) {
            if ($item['quantity'] < 0) {
                throw new \InvalidArgumentException('Quantity cannot be negative.');
            }

            if ($item['quantity'] === 0) {
                continue;
            }

            $total += $item['priceCents'] * $item['quantity'];
        }

        return $total;
    }
}
