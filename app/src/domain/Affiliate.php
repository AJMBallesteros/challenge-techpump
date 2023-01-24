<?php

namespace App\src\domain;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Affiliate extends Model
{
    use HasFactory;

    protected $table = 'affiliates';
    protected $fillable = ['web_name', 'url', 'nats_webcam','nats_web', 'assets', 'google_analytics'];
    public $timestamps = false;

    public function getWebNameAttribute($value): string
    {
        return $value;
    }

    public function setWebNameAttribute($value)
    {
        $this->attributes['web_name'] = $value;
        return $this;
    }

    public function getUrlAttribute($value): string
    {
        return $value;
    }

    public function setUrlAttribute($value)
    {
        $this->attributes['url'] = $value;
        return $this;
    }

    public function getNatsWebcamAttribute($value): string
    {
        return $value;
    }

    public function setNatsWebcamAttribute($value)
    {
        $this->attributes['nats_webcam'] = $value;
        return $this;
    }

    public function getNatsWebAttribute($value): string
    {
        return $value;
    }

    public function setNatsWebAttribute($value)
    {
        $this->attributes['nats_web'] = $value;
        return $this;
    }

    public function getAssetsAttribute($value): string
    {
        return $value;
    }

    public function setAssetsAttribute($value)
    {
        $this->attributes['assets'] = $value;
        return $this;
    }

    public function getGoogleAnalyticsAttribute($value): string
    {
        return $value;
    }

    public function setGoogleAnalyticsAttribute($value)
    {
        $this->attributes['google_analytics'] = $value;
        return $this;
    }
}
