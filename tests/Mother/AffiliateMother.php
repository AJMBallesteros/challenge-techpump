<?php

namespace Tests\Mother;

use App\src\domain\Affiliate\Affiliate;

class AffiliateMother
{
    public static function dummy(): Affiliate
    {
        $affiliate = new Affiliate();
        $affiliate->setWebNameAttribute('dummy')
            ->setUrlAttribute('http://dummy.com')
            ->setNatsWebcamAttribute('dummynatscam')
            ->setNatsWebAttribute('dummynatsweb')
            ->setAssetsAttribute('dummy')
            ->setGoogleAnalyticsAttribute('AU-2XXXX');
        return $affiliate;
    }

    public static function affiliateWithConejoXTemplate(string $webName): Affiliate
    {
        $affiliate = new Affiliate();
        $affiliate->setWebNameAttribute($webName)
            ->setUrlAttribute('http://'.$webName.'.com')
            ->setNatsWebcamAttribute('conejox12345')
            ->setNatsWebAttribute('conejox67890')
            ->setAssetsAttribute('conejox.com')
            ->setGoogleAnalyticsAttribute('AU-2XXXX');
        return $affiliate;
    }

    public static function affiliateWithBabosasTemplate(string $webName): Affiliate
    {
        $affiliate = new Affiliate();
        $affiliate->setWebNameAttribute($webName)
            ->setUrlAttribute('http://'.$webName.'.com')
            ->setNatsWebcamAttribute('conejox12345')
            ->setNatsWebAttribute('conejox67890')
            ->setAssetsAttribute('conejox.com')
            ->setGoogleAnalyticsAttribute('AU-2XXXX');
        return $affiliate;
    }


}
