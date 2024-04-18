<?php

namespace Covertier\Definitions\DataObjects\Submitting\Policy;

use Covertier\Definitions\Enums\InsuranceCompany;
use Covertier\Definitions\Enums\Territoriality;
use DateTimeImmutable;

class TouristPolicy
{
    /**
     * @param array<int>|null $coverages
     */
    public function __construct(
        public InsuranceCompany $insuranceCompanyId,
        public Package $package,
        public VehicleUS $vehicle,
        public PolicyHolderUS $policyHolder,
        public DateTimeImmutable $startDate,
        public DateTimeImmutable $endDate,
        public bool $isMultiEntry = false,
        public ?Territoriality $territoriality = null,
        public ?array $coverages = null,
    ) {}
}