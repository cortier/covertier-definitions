<?php

namespace Covertier\Definitions\DataObjects\Submitting\Policy;

use Covertier\Definitions\Enums\InsuranceCompany;
use Covertier\Definitions\Enums\Territoriality;

class TouristPolicy
{
    /**
     * @param array<int>|null $coverages
     */
    public function __construct(
        public InsuranceCompany $insuranceCompanyId,
        public int $packageId,
        public int $vehicleTrimId,
        public string $vin,
        public PolicyHolderUS $policyHolder,
        public bool $isMultiEntry = false,
        public ?Territoriality $territoriality = null,
        public ?array $coverages = null
    ) {}
}