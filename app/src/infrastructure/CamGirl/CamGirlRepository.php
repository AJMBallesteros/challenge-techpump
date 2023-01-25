<?php

namespace App\src\infrastructure\CamGirl;

use App\src\application\CamGirl\Exception\CumlouderIsDownException;
use App\src\application\CamGirl\Exception\WebCamListIsEmptyException;
use App\src\domain\CamGirl\CamGirl;
use App\src\domain\CamGirl\CamGirlsRepositoryInterface;
use Exception;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class CamGirlRepository implements CamGirlsRepositoryInterface
{
    public function getAllCams(): Collection
    {
        $webCamList = Cache::get('CamGirls', function () {
            try{
                $response = Http::get('http://webcams.cumlouder.com/feed/webcams/online/61/1/');
                if($response->successful()){
                    Cache::put('CamGirls', $response->json(), now()->addMinutes(15));
                    return $response->json();
                }else{
                    throw new CumlouderIsDownException();
                }
            }catch (RequestException){
                throw new Exception('An error occurred while making the request');
            }
        });

        if(count($webCamList) <= 0) {
            throw new WebCamListIsEmptyException();
        }

        $dataCollection = CamGirl::hydrate($webCamList);
        return $dataCollection;
    }
}
