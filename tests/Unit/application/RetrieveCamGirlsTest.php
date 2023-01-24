<?php

namespace Tests\Unit\application;

use App\src\application\CamGirl\RetrieveCamGirls;
use App\src\domain\CamGirl\CamGirl;
use App\src\domain\CamGirl\CamGirlsRepositoryInterface;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use PHPUnit\Framework\MockObject\MockObject;
use Tests\Mother\CamGirlMother;
use Tests\TestCase;

class RetrieveCamGirlsTest extends TestCase
{
    use DatabaseMigrations;

    /** @var CamGirlsRepositoryInterface | MockObject */
    private CamGirlsRepositoryInterface|MockObject $camGirlRepository;
    private RetrieveCamGirls $retrieveCamGirls;

    protected function setUp(): void
    {
        parent::setUp();
        /** @var MockObject camGirlRepository */
        $this->camGirlRepository = $this->createMock(CamGirlsRepositoryInterface::class);
        $this->retrieveCamGirls = new RetrieveCamGirls($this->camGirlRepository);
        $this->withoutExceptionHandling();
    }

    public function testShouldReturnColletionOfCamGirls(): void
    {
        $responseApi = CamGirlMother::CamGirlAsJson();

        $data = (array)json_decode($responseApi);
        $dataCollection = CamGirl::hydrate($data);

        $this->camGirlRepository
            ->method('getAllCams')
            ->willReturn($dataCollection);

        $camGirls = $this->retrieveCamGirls->execute();
        $this->assertEquals($dataCollection, $camGirls);
    }
}
