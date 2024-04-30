<?php

declare(strict_types=1);

namespace Covertier\Definitions\DataObjects\Fetching\Policy;

readonly class Coverage
{


    /**
     * @param array<int, int>|null $insuredSumOptions
     * @param array<int, int>|null $sumTypeOptions
     * @param array<int, float>|null $deductibleOptions
     */
    public function __construct(
        public int    $id,
        public string $shortName,
        public string $name,
        public string $nameEn,
        public bool   $isAddOn,
        public bool   $isExcludable,
        public ?float $premium,
        public ?int   $sumType,
        public ?float $insuredSum,
        public ?float $deductible,
        public ?array $insuredSumOptions,
        public ?array $sumTypeOptions,
        public ?array $deductibleOptions,
        private ?bool $softForce,
        private ?bool $isRestricted,
    )
    {
    }

    public function getSoftForce(): bool|null
    {
        return $this->softForce;
    }

    public function getIsRectricted(): bool|null
    {
        return $this->isRestricted;
    }
}