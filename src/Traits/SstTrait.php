<?php
namespace Einvoicing\Traits;

trait SstTrait {
    protected $sstCategory = "S"; // TODO: add constants
    protected $sstRate = null;
    protected $sstExemptionReasonCode = null;
    protected $sstExemptionReason = null;

    /**
     * Get SST category code
     * @return string SST category code
     */
    public function getSstCategory(): string {
        return $this->sstCategory;
    }


    /**
     * Set SST category code
     * @param  string $categoryCode SST category code
     * @return self                 This instance
     */
    public function setSstCategory(string $categoryCode): self {
        $this->sstCategory = $categoryCode;
        return $this;
    }


    /**
     * Get SST rate
     * @return float|null SST rate as a percentage or NULL when not subject to SST
     */
    public function getSstRate(): ?float {
        return $this->sstRate;
    }


    /**
     * Set SST rate
     * @param  float|null $rate SST rate as a percentage or NULL when not subject to VAT
     * @return self             This instance
     */
    public function setSstRate(?float $rate): self {
        $this->sstRate = $rate;
        return $this;
    }


    /**
     * Get SST exemption reason code
     * @return string|null SST exemption reason code
     */
    public function getSstExemptionReasonCode(): ?string {
        return $this->sstExemptionReasonCode;
    }


    /**
     * Set SST exemption reason code
     * @param  string|null $reasonCode SST exemption reason code
     * @return self                    This instance
     */
    public function setSstExemptionReasonCode(?string $reasonCode): self {
        $this->sstExemptionReasonCode = $reasonCode;
        return $this;
    }


    /**
     * Get SST exemption reason
     * @return string|null SST exemption reason expressed as text
     */
    public function getSstExemptionReason(): ?string {
        return $this->sstExemptionReason;
    }


    /**
     * Set SST exemption reason
     * @param  string|null $reason SST exemption reason expressed as text
     * @return self                This instance
     */
    public function setSstExemptionReason(?string $reason): self {
        $this->sstExemptionReason = $reason;
        return $this;
    }
}
