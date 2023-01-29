<?php

namespace App\src\infrastructure\Affiliate;

use App\src\domain\Affiliate\Affiliate;
use App\src\domain\Affiliate\AffiliatesRepositoryInterface;
use App\src\domain\Affiliate\Exception\AffiliateNotFoundByHostException;
use Exception;

class AffiliatesRepository implements AffiliatesRepositoryInterface
{
    public function findByHost(): Affiliate
    {
        try {
            $affiliate = Affiliate::where('url', sprintf('http://%s',$_SERVER['HTTP_HOST']))
                ->orWhere('url', sprintf('https://%s',$_SERVER['HTTP_HOST']))
                ->first();
        }catch (Exception){
            throw new Exception('An error occurred while making the request');
        }

        if($affiliate == null){
            throw new AffiliateNotFoundByHostException();
        }

        return $affiliate;
    }
}
