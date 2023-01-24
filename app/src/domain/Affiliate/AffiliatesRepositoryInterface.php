<?php

namespace App\src\domain\Affiliate;

interface AffiliatesRepositoryInterface
{
    public function findByUrl(string $url);
}
