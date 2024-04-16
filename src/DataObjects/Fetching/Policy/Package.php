<?php

namespace Covertier\Definitions\DataObjects\Fetching\Policy;

use Covertier\Definitions\Casters\ArrayToCollectionCaster;
use Illuminate\Support\Collection;

readonly class Package
{
    /**
     * @param Collection<int, PackageCoverage> $coverages
     */
    public function __construct(
        public int $id,
        public string $display,
        public string $displayEn,
        #[ArrayToCollectionCaster(PackageCoverage::class)]
        public Collection $coverages
    ) {}
}