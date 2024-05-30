<?php
namespace Einvoicing\Traits;

use OutOfBoundsException;
use function array_splice;
use function count;

trait LHDNInvoiceLineTrait {
    // protected $state = null;
  
    /**
     * Get subtotal (without VAT) before allowances/charges
     * @return float|null Net amount before allowances/charges
     */
    public function getSubtotal(): ?float {
        if ($this->price === null) {
            return null;
        }
        return ($this->price / $this->baseQuantity) * $this->quantity;
    }

    /**
     * Get total net amount (without VAT) before allowances/charges
     * @return float|null Net amount before allowances/charges
     */
    public function getTotalExclTax(): ?float {
        $netAmount = $this->getNetAmountBeforeAllowancesCharges();
        if ($netAmount === null) {
            return null;
        }
        $netAmount -= $this->getAllowancesAmount();
        $netAmount += $this->getChargesAmount();
        return $netAmount;
    }

    /**
     * Get State Code
     * @return string|null Type
     */
    public function getState(): ?string {
        return $this->state;
    }


    /**
     * Set State Code
     * @param  string|null $state 
     * @return self        Party instance
     */
    public function setState(?string $state): self {
        $this->state = $state;
        return $this;
    }
  
}
