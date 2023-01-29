<?php

namespace App\src\domain\Affiliate;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Affiliate extends Model
{
    use HasFactory;

    protected $table = 'affiliates';
    protected $fillable = ['web_name', 'url', 'nats_webcam','nats_web', 'assets', 'google_analytics'];
    public $timestamps = false;

    public function webName(): string
    {
        return $this->attributes['web_name'];
    }

    public function setWebNameAttribute($value)
    {
        $this->attributes['web_name'] = $value;
        return $this;
    }

    public function url(): string
    {
        return $this->attributes['url'];
    }

    public function setUrlAttribute($value)
    {
        $this->attributes['url'] = $value;
        return $this;
    }

    public function urlHost()
    {
        $url = parse_url($this->attributes['url']);
        return $url['host'];
    }

    public function natsWebcam(): string
    {
        return $this->attributes['nats_webcam'];
    }

    public function setNatsWebcamAttribute($value)
    {
        $this->attributes['nats_webcam'] = $value;
        return $this;
    }

    public function natsWeb(): string
    {
        return $this->attributes['nats_web'];
    }

    public function setNatsWebAttribute($value)
    {
        $this->attributes['nats_web'] = $value;
        return $this;
    }

    public function assetsRoute(): string
    {
        return $this->attributes['assets'];
    }

    public function setAssetsAttribute($value)
    {
        $this->attributes['assets'] = $value;
        return $this;
    }

    public function googleAnalytics(): string
    {
        return $this->attributes['google_analytics'];
    }

    public function setGoogleAnalyticsAttribute($value)
    {
        $this->attributes['google_analytics'] = $value;
        return $this;
    }
}
