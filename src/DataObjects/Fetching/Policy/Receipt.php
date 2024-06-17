<?php

declare(strict_types=1);

namespace Covertier\Definitions\DataObjects\Fetching\Policy;

readonly class Receipt
{
    public function __construct(
        public string $startDate,
        public string $endDate,
        public float $netPremium,
        public float $managementFee,
        public float $surcharge,
        public float $tax,
        public float $totalPremium,
        public float $commission
    ) {}
}