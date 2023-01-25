<?php

namespace App\src\application\Affiliate;

use App\src\domain\Affiliate\AffiliatesRepositoryInterface;

class GetAffiliates
{
    private AffiliatesRepositoryInterface $affiliatesRepository;

    public function __construct(
        AffiliatesRepositoryInterface $affiliatesRepository
    ){
        $this->affiliatesRepository = $affiliatesRepository;
    }

    public function findByHost()
    {
        return $this->affiliatesRepository->findByHost();
    }
}
