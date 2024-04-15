<?php

namespace Covertier\Definitions\DataObjects\Fetching\Policy;

use DateTimeImmutable;
use Illuminate\Support\Collection;

readonly class Policy
{
    /**
     * @param Collection<int, PackageCoverage> $coverages
     */
    public function __construct(
        public string $folioNumber,
        public DateTimeImmutable $startDate,
        public DateTimeImmutable $endDate,
        public Document $documents,
        public PolicyHolder $policyHolder,
        public Vehicle $vehicle,
        public Collection $coverages
    )
    {}
}