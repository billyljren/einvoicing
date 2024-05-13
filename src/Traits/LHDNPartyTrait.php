<?php
namespace Einvoicing\Traits;

use OutOfBoundsException;
use function array_splice;
use function count;

trait LHDNPartyTrait {
    protected $tin = null;
    protected $idNumber = null;
    protected $sstNumber = null;
    protected $ttxNumber = null;
    protected $msicCode = null;
    protected $msicDescription = null;
    protected $type = "BRN";
  
    /**
     * Get Type of Party | BRN / NRIC / PASSPORT / ARMY
     * @return string|null Type
     */
    public function getType(): ?string {
        return $this->type;
    }


    /**
     * Set Tax Identification Number
     * @param  string|null $type 
     * @return self        Party instance
     */
    public function setType(?string $type): self {
        $this->type = $type;
        return $this;
    }

    /**
     * Get Tax Identification Number
     * @return string|null TIN
     */
    public function getTIN(): ?string {
        return $this->tin;
    }


    /**
     * Set Tax Identification Number
     * @param  string|null $tin 
     * @return self        Party instance
     */
    public function setTIN(?string $tin): self {
        $this->tin = $tin;
        return $this;
    }

    /**
     * Get ID Number
     * @return string|null ID Number
     */
    public function getIDNumber(): ?string {
        return $this->idNumber;
    }


    /**
     * Set ID Number (NRIC, Passport, BRN or CoID)
     * @param  string|null $idNumber 
     * @return self        Party instance
     */
    public function setIDNumber(?string $idNumber): self {
        $this->idNumber = $idNumber;
        return $this;
    }

    /**
     * Get MSIC Code
     * @return string|null MSIC Code
     */
    public function getMSICCode(): ?string {
        return $this->msicCode;
    }


    /**
     * Set MSIC Code
     * @param  string|null $msicCode 
     * @return self        Party instance
     */
    public function setMSICCode(?string $msicCode): self {
        $this->msicCode = $msicCode;
        return $this;
    }

    /**
     * Get MSIC Description
     * @return string|null MSIC Description
     */
    public function getMSICDescription(): ?string {
        return $this->msicDescription;
    }


    /**
     * Set MSIC Description
     * @param  string|null $msicDescription 
     * @return self        Party instance
     */
    public function setMSICDescription(?string $msicDescription): self {
        $this->msicDescription = $msicDescription;
        return $this;
    }
  
    /**
     * Get party SST number
     * @return string|null Party SST number
     */
    public function getSstNumber(): ?string {
        return $this->sstNumber;
    }
  
    
    /**
     * Set party SST number
     * @param  string|null $sstNumber Party SST number
     * @return self                   Party instance
     */
    public function setSstNumber(?string $sstNumber): self {
        $this->sstNumber = $sstNumber;
        return $this;
    }

    /**
     * Get party TTX number
     * @return string|null Party TTX number
     */
    public function getTtxNumber(): ?string {
        return $this->ttxNumber;
    }

    /**
     * Set party TTX number
     * @param  string|null $ttxNumber Party TTX number
     * @return self                   Party instance
     */
    public function setTtxNumber(?string $ttxNumber): self {
        $this->ttxNumber = $ttxNumber;
        return $this;
    }
  
}
