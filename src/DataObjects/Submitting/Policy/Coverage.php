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
        public int $sumType,
        public bool $isAddOn,
        public bool $isExcludable,
        public ?float $insuredSum = null,
        public ?float $deductible = null
    ) {
    }
}