<?php

namespace Tests\Integration\infrastructure;

use App\src\infrastructure\CamGirl\CamGirlController;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Support\Facades\Http;
use Tests\Mother\AffiliateMother;
use Tests\TestCase;

class CamGirlControllerIT extends TestCase
{
    use DatabaseMigrations;

    private CamGirlController $camGirlController;

    protected function setUp(): void
    {
        parent::setUp();
//        $this->camGirlController = new CamGirlController();
        $this->withoutExceptionHandling();
    }

    public function testCustomTemplateIsShowedForEveryAffiliate()
    {
        $affiliate1 = AffiliateMother::affiliateWithConejoXTemplate('test1');
        $affiliate1->save();
        $affiliate2 = AffiliateMother::affiliateWithBabosasTemplate('cumloader');
        $affiliate2->save();

        $response = Http::get('test1.com');
    }
}
