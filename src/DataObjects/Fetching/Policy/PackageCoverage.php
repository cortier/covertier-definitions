<?php

namespace Covertier\Definitions\DataObjects\Fetching\Policy;

readonly class PackageCoverage
{
    public function __construct(
        public int $id,
        public string $shortName,
        public string $name,
        public string $nameEn,
        public bool $isAddOn,
        public bool $isExcludable,
        public float|null $coverageSum,
        public float|null $deductible,
        public float|null $premium
    ) {}
}