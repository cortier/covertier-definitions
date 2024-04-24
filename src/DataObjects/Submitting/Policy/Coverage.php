<?php

declare(strict_types=1);

namespace Covertier\Definitions\DataObjects\Submitting\Policy;

class Coverage
{
    public function __construct(
        public int $id,
        public string $name,
        public string $nameEn,
        public string $shortName,
        public float $insuredSum,
        public int $sumType,
        public float $deductible,
        public float $premium,
        public bool $isAddOn,
        public bool $isExcludable,
    ) {
    }
}