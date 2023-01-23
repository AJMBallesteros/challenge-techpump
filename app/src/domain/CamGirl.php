<?php

namespace App\src\domain;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CamGirl extends Model
{
    use HasFactory;

    private string $wbmerTwitter;
    private int $wbmerId;

    private string $wbmerNick;

    private string $wbmerPermalink;

    private bool $wbmerOnline;

    private string $wbmerBirthdate;

    private int $wbmerHeight;

    private string $ES;

    private string $wbmerThumb1;
    private string $wbmerThumb2;
    private string $wbmerThumb3;
    private string $wbmerThumb4;

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
