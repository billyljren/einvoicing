<?php
namespace Einvoicing\Traits;

use OutOfBoundsException;
use function array_splice;
use function count;

trait LHDNPostalAddressTrait {
    protected $state = null;
  
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
