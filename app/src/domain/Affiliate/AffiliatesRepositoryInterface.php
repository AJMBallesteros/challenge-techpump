<?php

namespace App\src\domain\Affiliate;

interface AffiliatesRepositoryInterface
{
    public function findByHost();
    public function getAll();
}
