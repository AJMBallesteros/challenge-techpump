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

    public function index(){

        $affiliate = 'conejox.com';
        $_SERVER['HTTP_HOST'] = $affiliate;

        $camGirls = $this->retrieveCamGirls();

        return match ($_SERVER['HTTP_HOST']) {
            'babosas.com' => view('babosas.babosas', ['CamGirls' => $camGirls]),
            'cerdas.com' => view('cerdas.cerdas', ['CamGirls' => $camGirls]),
            'conejox.com' => view('conejox.conejox', ['CamGirls' => $camGirls]),
            default => null,
        };
    }

    public function retrieveCamGirls()
    {
        $camGirls = $this->retrieveCamGirls->execute();
        return $camGirls;
    }
}
