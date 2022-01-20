<?php declare(strict_types=1);

namespace Tests\Example;

use App\Example;
use PHPUnit\Framework\TestCase;

class SimpleTest extends TestCase
{

    public function testShouldAssertTrue(): void
    {
        $this->assertTrue(true);
    }

    public function testExampleCanBeCreated(): void
    {
        $this->assertInstanceOf(Example::class, (new Example()));
    }

    public function testSetterAndGetter(): void
    {
        $simple = new Example();

        $this->assertTrue($simple->setRunning(true)->getRunning());
        $this->assertFalse($simple->setRunning(false)->getRunning());
    }
}

