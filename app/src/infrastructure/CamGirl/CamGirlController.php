<?php

namespace App\src\infrastructure\CamGirl;

use App\src\application\Affiliate\GetAffiliate;
use App\src\application\CamGirl\RetrieveCamGirls;

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
        $_SERVER['HTTP_HOST'] = 'babosas.com';

        $camGirls = $this->retrieveCamGirls();

        $affiliate = match ($_SERVER['HTTP_HOST']) {
            'babosas.com' => $this->getAffiliate->execute('http://babosas.com'),
            'cerdas.com' => $this->getAffiliate->execute('http://cerdas.com'),
            'conejox.com' => $this->getAffiliate->execute('http://conejox.com'),
            default => null,
        };

        return view('webcams', ['affiliate' => $affiliate, 'CamGirls' => $camGirls]);
    }
    public function retrieveCamGirls()
    {
        $camGirls = $this->retrieveCamGirls->execute();
        return $camGirls;
    }
}
