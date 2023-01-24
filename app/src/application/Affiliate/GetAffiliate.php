<?php

namespace App\src\application\Affiliate;

use App\src\domain\Affiliate\AffiliatesRepositoryInterface;

class GetAffiliate
{
    private AffiliatesRepositoryInterface $affiliatesRepository;

    public function __construct(
        AffiliatesRepositoryInterface $affiliatesRepository
    ){
        $this->affiliatesRepository = $affiliatesRepository;
    }

    public function execute(string $url)
    {
        return $this->affiliatesRepository->findByUrl($url);
    }
}