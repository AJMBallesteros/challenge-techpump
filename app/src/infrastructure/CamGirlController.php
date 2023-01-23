<?php

namespace App\src\infrastructure;

use App\src\application\RetrieveCamGirls;

class CamGirlController
{
    private RetrieveCamGirls $retrieveCamGirls;

    public function __construct(
        RetrieveCamGirls $retrieveCamGirls
    ){
        $this->retrieveCamGirls = $retrieveCamGirls;
    }

    public function babosas(){
        $camGirls = $this->retrieveCamGirls();
        return view('babosas.babosas', ['CamGirls' => $camGirls]);
    }
    public function conejox()
    {
        $camGirls = $this->retrieveCamGirls();
        return view('conejox.conejox', ['CamGirls' => $camGirls]);
    }

    public function cerdas(){
        $camGirls = $this->retrieveCamGirls();
        return view('cerdas.cerdas', ['CamGirls' => $camGirls]);
    }

    public function retrieveCamGirls()
    {
        $camGirls = $this->retrieveCamGirls->execute();
        return $camGirls;
    }
}
