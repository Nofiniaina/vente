<?php

namespace App\Entity\Trait;

use Doctrine\ORM\Mapping as ORM;

trait HistoryTrait 
{
    #[ORM\PrePersist]
    public function setCreatedAtValue(): void
    {
        $this->created_at = new \DateTime();
        $this->updated_at = new \DateTime();
    }

    #[ORM\PreUpdate]
    public function setUpdatedAtValue(): void
    {
        $this->updated_at = new \DateTime();
    }
}