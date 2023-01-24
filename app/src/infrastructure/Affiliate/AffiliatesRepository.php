<?php

namespace App\src\infrastructure\Affiliate;

use App\src\domain\Affiliate\Affiliate;
use App\src\domain\Affiliate\AffiliatesRepositoryInterface;
use Exception;

class AffiliatesRepository implements AffiliatesRepositoryInterface
{
    public function findByUrl(string $url): Affiliate
    {
            try{
                return Affiliate::where('url', '=', $url)->first();
            }catch (Exception $e){

            }
    }
}
