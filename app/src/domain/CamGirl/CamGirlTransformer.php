<?php

namespace App\src\domain\CamGirl;

use Illuminate\Database\Eloquent\Collection;

class CamGirlTransformer
{
    public static function JsonToCollection(array $jsonDecoded): Collection
    {
        return CamGirl::hydrate($jsonDecoded);
    }
}
