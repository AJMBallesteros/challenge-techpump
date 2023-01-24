<?php

namespace App\src\infrastructure\CamGirl;

use App\src\domain\CamGirl\CamGirl;
use App\src\domain\CamGirl\CamGirlsRepositoryInterface;
use Exception;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class CamGirlRepository implements CamGirlsRepositoryInterface
{
    public function getAllCams(): Collection
    {
        $response = Cache::get('CamGirls', function () {
            try{
                $response = Http::get('http://webcams.cumlouder.com/feed/webcams/online/61/1/');
                //Cache::put('CamGirls', '', now()->addMinutes(15));
                return $response;
            }catch (Exception $e){

            }
        });

        $data = (array)json_decode($response);
        $dataCollection = CamGirl::hydrate($data);

        return $dataCollection;
    }
}
