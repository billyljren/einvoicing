<?php
namespace Einvoicing\Traits;

use OutOfBoundsException;
use function array_splice;
use function count;

trait LHDNDocumentTrait {
    protected $forex_rate = null;
    protected $prepaid_amount = null;
    protected $prepaid_date = null;
    protected $prepaid_time = null;
    protected $prepaid_reference = null;
    protected $payment_terms = null;
    protected $bill_reference = null;
  
    /**
     * Get Forex Rate
     * @return float|null Forex Rate
     */
    public function getForexRate(): ?float {
        return $this->forex_rate;
    }


    /**
     * Set Forex Rate
     * @param  float|null $forex_rate 
     * @return self        Party instance
     */
    public function setForexRate(?float $forex_rate): self {
        $this->forex_rate = $forex_rate;
        return $this;
    }

    /**
     * Get PrepaidAmount
     * @return float|null PrepaidAmount
     */
    public function getPrepaidAmount(): ?float {
        return $this->prepaid_amount;
    }


    /**
     * Set PrepaidAmount
     * @param  float|null $prepaid_amount 
     * @return self        Document instance
     */
    public function setPrepaidAmount(?float $prepaid_amount): self {
        $this->prepaid_amount = $prepaid_amount;
        return $this;
    }

    /**
     * Get PrepaidDate
     * @return string|null PrepaidDate
     */
    public function getPrepaidDate(): ?string {
        return $this->prepaid_date;
    }


    /**
     * Set PrepaidDate
     * @param  string|null $prepaid_date 
     * @return self        Party instance
     */
    public function setPrepaidDate(?string $prepaid_date): self {
        $this->prepaid_date = $prepaid_date;
        return $this;
    }

    /**
     * Get PrepaidTime
     * @return string|null PrepaidTime
     */
    public function getPrepaidTime(): ?string {
        return $this->prepaid_time;
    }


    /**
     * Set PrepaidTime
     * @param  string|null $prepaid_time 
     * @return self        Party instance
     */
    public function setPrepaidTime(?string $prepaid_time): self {
        $this->prepaid_time = $prepaid_time;
        return $this;
    }

    /**
     * Get PrepaidReference
     * @return string|null PrepaidReference
     */
    public function getPrepaidReference(): ?string {
        return $this->prepaid_reference;
    }


    /**
     * Set PrepaidReference
     * @param  string|null $prepaid_reference 
     * @return self        Party instance
     */
    public function setPrepaidReference(?string $prepaid_reference): self {
        $this->prepaid_reference = $prepaid_reference;
        return $this;
    }
  
    /**
     * Get PaymentTerms
     * @return string|null PaymentTerms
     */
    public function getPaymentTerms(): ?string {
        return $this->payment_terms;
    }


    /**
     * Set PaymentTerms
     * @param  string|null $payment_terms 
     * @return self        Party instance
     */
    public function setPaymentTerms(?string $payment_terms): self {
        $this->payment_terms = $payment_terms;
        return $this;
    }
  
    /**
     * Get BillReference
     * @return string|null BillReference
     */
    public function getBillReference(): ?string {
        return $this->bill_reference;
    }


    /**
     * Set BillReference
     * @param  string|null $bill_reference 
     * @return self        Party instance
     */
    public function setBillReference(?string $bill_reference): self {
        $this->bill_reference = $bill_reference;
        return $this;
    }
}