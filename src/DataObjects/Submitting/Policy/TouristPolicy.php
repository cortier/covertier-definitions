<?php

declare(strict_types=1);

namespace Covertier\Definitions\DataObjects\Submitting\Policy;

use Covertier\Definitions\Enums\InsuranceCompany;
use Covertier\Definitions\Enums\Territoriality;
use DateTimeImmutable;

class TouristPolicy
{
    public function __construct(
        public InsuranceCompany $insuranceCompanyId,
        public Package $package,
        public VehicleUS $vehicle,
        public PolicyHolderUS $policyHolder,
        public DateTimeImmutable $startDate,
        public DateTimeImmutable $endDate,
        public bool $isMultiEntry = false,
        public ?Territoriality $territoriality = null
    ) {}
}