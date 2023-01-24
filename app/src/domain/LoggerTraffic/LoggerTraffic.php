<?php

namespace App\src\domain\LoggerTraffic;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoggerTraffic extends Model
{
    use HasFactory;

    protected $table = 'logger_traffic';
    protected $fillable = ['web_name', 'nats_webcam', 'nats_web', 'google_analytics', 'visitor_ip'];

    public function webName(): string
    {
        return $this->attributes['web_name'];
    }

    public function setWebNameAttribute($value)
    {
        $this->attributes['web_name'] = $value;
        return $this;
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
        return $this->natsWeb();
    }

    public function setNatsWebAttribute($value)
    {
        $this->attributes['nats_web'] = $value;
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

    public function visitorIp(): string
    {
        return $this->attributes['google_analytics'];
    }

    public function setVisitorIpAttribute($value)
    {
        $this->attributes['google_analytics'] = $value;
        return $this;
    }
}
