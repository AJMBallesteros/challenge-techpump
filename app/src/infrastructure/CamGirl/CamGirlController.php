<?php

namespace App\src\infrastructure\CamGirl;

use App\src\application\Affiliate\GetAffiliate;
use App\src\application\CamGirl\RetrieveCamGirls;
use App\src\domain\Affiliate\Affiliate;

class CamGirlController
{
    private RetrieveCamGirls $retrieveCamGirls;
    private GetAffiliate $getAffiliate;

    public function __construct(
        RetrieveCamGirls $retrieveCamGirls,
        GetAffiliate $getAffiliate
    ){
        $this->retrieveCamGirls = $retrieveCamGirls;
        $this->getAffiliate = $getAffiliate;
    }

    public function index(){
        $camGirls = $this->retrieveCamGirls->execute();
        $affiliate = $this->getAffiliate->execute();

        if($affiliate === null){

        }

        return view('webcams', ['affiliate' => $affiliate, 'CamGirls' => $camGirls]);
    }
    public function retrieveCamGirls()
    {
        $camGirls = $this->retrieveCamGirls->execute();
        return $camGirls;
    }
}
