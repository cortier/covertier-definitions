<?php

declare(strict_types=1);

namespace Covertier\Definitions\DataObjects\Submitting\Policy;

class Coverage
{
    private ?bool $softForce;
    private ?bool $isRestricted;
    public function __construct(
        public int $id,
        public int $sumType,
        public bool $exclude = false,
        public ?float $insuredSum = null,
        public ?float $deductible = null
    ) {
    }

    /**
     * @param bool $softForce
     * @return void
     */
    public function setSoftForce(bool $softForce): void
    {
        $this->softForce = $softForce;
    }

    public function getSoftForce(): bool|null
    {
        return $this->softForce;
    }
    
    /**
     * @param bool $isRestricted
     * @return void
     */
    public function setIsRectricted(bool $isRestricted): void
    {
        $this->isRestricted = $isRestricted;
    }

    public function getIsRectricted(): bool|null
    {
        return $this->isRestricted;
    }
}