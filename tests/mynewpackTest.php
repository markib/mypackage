<?php

namespace bikram\mynewpack\Tests;

use bikram\mynewpack\Facades\mynewpack;
use bikram\mynewpack\ServiceProvider;
use Orchestra\Testbench\TestCase;

class mynewpackTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [ServiceProvider::class];
    }

    protected function getPackageAliases($app)
    {
        return [
            'mynewpack' => mynewpack::class,
        ];
    }

    public function testExample()
    {
        $this->assertEquals(1, 1);
    }
}
