<?php

declare(strict_types=1);

namespace Art4\Requests\Tests\Psr7Test;

use Http\Psr7Test\ServerRequestIntegrationTest;
use Psr\Http\Message\ServerRequestInterface;

class ServerRequestTest extends ServerRequestIntegrationTest
{
    /**
     * @see ServerRequestIntegrationTest::createSubject()
     *
     * @return ServerRequestInterface that is used in the tests
     */
    public function createSubject()
    {
        $this->markTestIncomplete('ServerRequestInterface is not implemented in this library.');
    }
}
