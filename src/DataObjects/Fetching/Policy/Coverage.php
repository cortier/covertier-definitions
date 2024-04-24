<?php

declare(strict_types=1);

namespace Covertier\Definitions\DataObjects\Fetching\Policy;

readonly class Coverage
{
    public function __construct(
        public int $id,
        public string $shortName,
        public string $name,
        public string $nameEn,
        public bool $isAddOn,
        public bool $isExcludable,
        public float|null $insuredSum,
        public float|null $deductible,
        public float|null $premium
    ) {}
}