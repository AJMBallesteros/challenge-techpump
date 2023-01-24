<?php

namespace Tests\Unit\infrastructure;

use App\src\application\CamGirl\Exception\CumlouderIsDownException;
use App\src\application\CamGirl\Exception\WebCamListIsEmptyException;
use App\src\domain\CamGirl\CamGirl;
use App\src\infrastructure\CamGirl\CamGirlRepository;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Support\Facades\Http;
use Tests\Mother\CamGirlMother;
use Tests\TestCase;

class CamGirlRepositoryTest extends TestCase
{
    use DatabaseMigrations;

    private CamGirlRepository $camGirlRepository;

    protected function setUp(): void
    {
        parent::setUp();
        $this->camGirlRepository = new CamGirlRepository();
        $this->withoutExceptionHandling();
    }

    public function testShouldReturnColletionOfCamGirls(): void
    {
        $json = CamGirlMother::CamGirlAsJson();

        Http::fake([
           'http://webcams.cumlouder.com/feed/webcams/online/61/1/' => Http::response((array)json_decode($json))
        ]);

        $data = (array)json_decode($json);
        $dataCollection = CamGirl::hydrate($data);

        $camGirls = $this->camGirlRepository->getAllCams();

        $this->assertEquals($dataCollection, $camGirls);
    }

    public function testShouldThrowExceptionIfWebCamListIsEmpty(): void
    {
        Http::fake([
           'http://webcams.cumlouder.com/feed/webcams/online/61/1/' => Http::response('[]', '200')
        ]);

        $this->expectException(WebCamListIsEmptyException::class);
        $this->camGirlRepository->getAllCams();
    }

    public function testShouldThrowExceptionIfCumlouderIsDown(): void
    {
        Http::fake([
            'http://webcams.cumlouder.com/feed/webcams/online/61/1/' => Http::response('','500')
        ]);

        $this->expectException(CumlouderIsDownException::class);
        $this->camGirlRepository->getAllCams();
    }
}
