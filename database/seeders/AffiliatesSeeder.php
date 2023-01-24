<?php

namespace Database\Seeders;

use App\src\domain\Affiliate\Affiliate;
use Illuminate\Database\Seeder;

class AffiliatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $affiliate = new Affiliate();
        $affiliate->setWebNameAttribute('Babosas')
            ->setUrlAttribute('http://babosas.com')
            ->setNatsWebcamAttribute('babosas12345')
            ->setNatsWebAttribute('babosas67890')
            ->setAssetsAttribute('babosas')
            ->setGoogleAnalyticsAttribute('AU-1XXXX');
        $affiliate->save();

        $affiliate = new Affiliate();
        $affiliate->setWebNameAttribute('ConejoX')
            ->setUrlAttribute('http://conejox.com')
            ->setNatsWebcamAttribute('conejox12345')
            ->setNatsWebAttribute('conejox67890')
            ->setAssetsAttribute('conejox.com')
            ->setGoogleAnalyticsAttribute('AU-2XXXX');
        $affiliate->save();

        $affiliate = new Affiliate();
        $affiliate->setWebNameAttribute('Cerdas')
            ->setUrlAttribute('http://cerdas.com')
            ->setNatsWebcamAttribute('cerdas12345')
            ->setNatsWebAttribute('cerdas67890')
            ->setAssetsAttribute('cerdas.com')
            ->setGoogleAnalyticsAttribute('AU-3XXXX');
        $affiliate->save();
    }
}
