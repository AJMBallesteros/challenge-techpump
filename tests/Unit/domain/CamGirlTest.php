<?php

namespace Tests\Unit\domain;

use App\src\domain\CamGirl\CamGirl;
use PHPUnit\Framework\TestCase;
use Tests\Mother\CamGirlMother;

class CamGirlTest extends TestCase
{
    public function testShouldAssignRequiredAttributes(): void
    {
        $camGirl1 = CamGirlMother::dummy();

        $camGirl2 = new CamGirl();
        $camGirl2->setWbmerNick($camGirl1->wbmerNick());

        $this->assertArrayHasKey('wbmerNick', $camGirl2->attributesToArray());
        self::assertEquals($camGirl1->wbmerNick(),$camGirl2->wbmerNick());
    }
}
