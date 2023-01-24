<?php

namespace App\src\domain\CamGirl;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CamGirl extends Model
{
    use HasFactory;

    /**
     * @return string
     */
    public function wbmerNick(): string
    {
        return $this->attributes['wbmerNick'];
    }

    /**
     * @param string $wbmerNick
     */
    public function setWbmerNick(string $wbmerNick): void
    {
        $this->wbmerNick = $wbmerNick;
    }
}
