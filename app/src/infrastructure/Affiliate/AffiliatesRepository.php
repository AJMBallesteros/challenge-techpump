<?php

namespace App\src\infrastructure\Affiliate;

use App\src\domain\Affiliate\Affiliate;
use App\src\domain\Affiliate\AffiliatesRepositoryInterface;
use Exception;

class AffiliatesRepository implements AffiliatesRepositoryInterface
{
    public function getAll()
    {

    }

    public function findByHost()
    {
        $affiliate = Affiliate::where('url', sprintf('http://%s',$_SERVER['HTTP_HOST']))
            ->orWhere('url', sprintf('https://%s',$_SERVER['HTTP_HOST']))
            ->first();

        return $affiliate;
    }
}
