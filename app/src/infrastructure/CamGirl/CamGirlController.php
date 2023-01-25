<?php

namespace App\src\infrastructure\CamGirl;

use App\src\application\Affiliate\GetAffiliates;
use App\src\application\CamGirl\RetrieveCamGirls;
use Illuminate\Database\Eloquent\Collection;

class CamGirlController
{
    private RetrieveCamGirls $retrieveCamGirls;
    private GetAffiliates $getAffiliates;

    public function __construct(
        RetrieveCamGirls $retrieveCamGirls,
        GetAffiliates $getAffiliates
    ){
        $this->retrieveCamGirls = $retrieveCamGirls;
        $this->getAffiliates = $getAffiliates;
    }

    public function index(){
        $camGirls = $this->retrieveCamGirls->execute();
        $affiliate = $this->getAffiliates->findByHost();

        return view('webcams', ['affiliate' => $affiliate, 'CamGirls' => $camGirls]);
    }
    public function retrieveCamGirls(): Collection
    {
        $camGirls = $this->retrieveCamGirls->execute();
        return $camGirls;
    }
}
