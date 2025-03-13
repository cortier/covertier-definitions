<?php

declare(strict_types=1);

namespace Covertier\Definitions\DataObjects\Submitting\Policy;

use Covertier\Definitions\Enums\InsuranceCompany;
use Covertier\Definitions\Enums\Territoriality;
use DateTimeImmutable;

class QuoteTourist
{
    /**
     * @param array<int>|null $coverages
     */
    public function __construct(
        public InsuranceCompany $insuranceCompanyId,
        public Package $package,
        public PolicyHolderUS $policyHolder,
        public DateTimeImmutable $startDate,
        public DateTimeImmutable $endDate,
        public bool $isMultiEntry = false,
        public ?VehicleUS $vehicle = null,
        public ?Territoriality $territoriality = null,
        public ?array $coverages = null,
    ) {}
}