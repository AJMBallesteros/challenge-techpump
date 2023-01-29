<?php

namespace Tests\Integration\Affiliate;

use App\src\infrastructure\Affiliate\AffiliatesRepository;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\Mother\AffiliateMother;
use Tests\TestCase;
use function PHPUnit\Framework\assertEquals;

class AffiliatelRepositoryIT extends TestCase
{
    use DatabaseMigrations;

    private AffiliatesRepository $affiliatesRepository;

    protected function setUp(): void
    {
        parent::setUp();
        $this->affiliatesRepository = new AffiliatesRepository();
        $this->withoutExceptionHandling();
    }

    public function testShouldReturnAnAffiliate(): void
    {
        $affiliate = AffiliateMother::dummy();
        $affiliate->save();

        $_SERVER['HTTP_HOST'] = $affiliate->urlHost();

        $affiliateFromDatabase = $this->affiliatesRepository->findByHost();

        assertEquals($affiliate->webName(), $affiliateFromDatabase->webName());
        assertEquals($affiliate->url(), $affiliateFromDatabase->url());
        assertEquals($affiliate->natsWebcam(), $affiliateFromDatabase->natsWebcam());
        assertEquals($affiliate->natsWeb(), $affiliateFromDatabase->natsWeb());
        assertEquals($affiliate->assetsRoute(), $affiliateFromDatabase->assetsRoute());
        assertEquals($affiliate->googleAnalytics(), $affiliateFromDatabase->googleAnalytics());
    }
}
