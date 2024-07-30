<?php

declare(strict_types=1);

namespace Covertier\Definitions\DataObjects\Fetching\Policy;

use Covertier\Definitions\Enums\Currency;

readonly class Coverage
{


    /**
     * @param array<int, int>|null $insuredSumOptions
     * @param array<int, int>|null $sumTypeOptions
     * @param array<int, float>|null $deductibleOptions
     * @param array<int, int> $allowedSumTypes
     */
    public function __construct(
        public int    $id,
        public string $shortName,
        public string $name,
        public string $nameEn,
        public bool   $isAddOn,
        public bool   $isExcludable,
        public ?array $allowedSumTypes,
        public ?float $premium,
        public ?int   $sumType,
        public ?float $insuredSum,
        public ?float $deductible,
        public ?array $insuredSumOptions,
        public ?array $sumTypeOptions,
        public ?array $deductibleOptions,
        public ?Currency $currency,
        public ?float $exchangeRate,
        private ?bool $softForced,
        private ?bool $isRestricted,
    )
    {
    }

    public function getSoftForced(): bool|null
    {
        return $this->softForced;
    }

    public function getIsRestricted(): bool|null
    {
        return $this->isRestricted;
    }
}