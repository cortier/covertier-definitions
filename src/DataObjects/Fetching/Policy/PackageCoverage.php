<?php

namespace Covertier\Definitions\DataObjects\Fetching\Policy;

readonly class PackageCoverage
{
    public function __construct(
        public int $id,
        public string $shortName,
        public string $display,
        public string $displayEn,
        public bool $isAddOn,
        public bool $isExcludable,
        public float|null $coverageSum,
        public float|null $deductible,
        public float|null $premium
    ) {}
}