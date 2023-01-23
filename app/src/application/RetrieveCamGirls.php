<?php

namespace App\src\application;

use App\src\domain\CamGirlsRepositoryInterface;

class RetrieveCamGirls
{
    private CamGirlsRepositoryInterface $camGirlsRepository;

    public function __construct(
        CamGirlsRepositoryInterface $camGirlsRepository
    ){
        $this->camGirlsRepository = $camGirlsRepository;
    }

    public function execute()
    {
        return $this->camGirlsRepository->getAllCams();
    }
}
