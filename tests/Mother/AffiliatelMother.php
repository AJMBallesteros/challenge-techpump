<?php

namespace Tests\Mother;

use App\src\domain\Affiliate\Affiliate;

class AffiliatelMother
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

    public static function knownAffiliate(): Affiliate
    {
        $affiliate = new Affiliate();
        $affiliate->setWebNameAttribute('ConejoX')
            ->setUrlAttribute('http://conejox.com')
            ->setNatsWebcamAttribute('conejox12345')
            ->setNatsWebAttribute('conejox67890')
            ->setAssetsAttribute('conejox.com')
            ->setGoogleAnalyticsAttribute('AU-2XXXX');
        $affiliate->save();
    }


}
