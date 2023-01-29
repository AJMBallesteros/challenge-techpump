<?php

namespace Tests\Mother;

use App\src\domain\CamGirl\CamGirl;

class CamGirlMother
{
    public static function dummy(): CamGirl
    {
        $camGirl = new CamGirl();
        $camGirl->setWbmerNick('CordobesaCaliente69');
        return $camGirl;
    }

    public static function CamGirlAsJson(): string
    {
        return '{
                    "wbmerTwitter": null,
                    "wbmerId": "45233",
                    "wbmerNick": "PaulaDash",
                    "wbmerPermalink": "pauladash",
                    "wbmerOnline": "1",
                    "wbmerBirthdate": "1997-01-01",
                    "wbmerHeight": null,
                    "wbmerCountry": "CO",
                    "wbmerSystem": "3",
                    "wbmerSystemId": "11693118",
                    "wbmerThumb1": "45233_01.jpg",
                    "wbmerThumb2": "45233_02.jpg",
                    "wbmerThumb3": "45233_03.jpg",
                    "wbmerThumb4": "45233_04.jpg",
                    "wbmerActive": "1",
                    "wbmerLive": "1",
                    "wbmerNew": "1",
                    "wbmerBanned": "0",
                    "wbmerRanking": "0",
                    "wbmerLastLogin": "2023-01-24 19:37:01",
                    "wbmerRegister": "2022-11-21",
                    "wbmerPHd": "0",
                    "wbmerPAudio": null,
                    "wbmerDtRate": null,
                    "wbmerEspSwf": null,
                    "wbmerVideos": null,
                    "wbmerPositionOnline": "-5000.00",
                    "wbmerPosition": "-5000.00",
                    "wbmerSoft": "0",
                    "languages": "EN,ES"
                }';
    }
}
