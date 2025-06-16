<?php

declare(strict_types=1);

namespace Covertier\Definitions\DataObjects\Submitting\Policy;

class Coverage
{
    public function __construct(
        public int $id,
        public bool $exclude = false,
        public ?int $sumType = null,
        public ?float $insuredSum = null,
        public ?float $deductible = null
    ) {}
}