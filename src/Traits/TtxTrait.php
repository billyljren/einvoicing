<?php
namespace Einvoicing\Traits;

TtxTrait {
    protected $ttxCategory = "S"; // TODO: add constants
    protected $ttxRate = null;

    /**
     * Get TTX category code
     * @return string TTX category code
     */
    public function getTtxCategory(): string {
        return $this->ttxCategory;
    }

    /**
     * Set TTX category code
     * @param  string $categoryCode TTX category code
     * @return self                 This instance
     */
    public function setTtxCategory(string $categoryCode): self {
        $this->ttxCategory = $categoryCode;
        return $this;
    }

    /**
     * Get TTX rate
     * @return float|null TTX rate as a percentage or NULL when not subject to TTX
     */
    public function getTtxRate(): ?float {
        return $this->ttxRate;
    }

    /**
     * Set TTX rate
     * @param  float|null $rate TTX rate as a percentage or NULL when not subject to TTX
     * @return self             This instance
     */
    public function setTtxRate(?float $rate): self {
        $this->ttxRate = $rate;
        return $this;
    }
}
