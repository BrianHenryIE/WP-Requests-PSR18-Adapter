<?php

declare(strict_types=1);

namespace Art4\Requests\Tests\Psr7Test;

use Art4\Requests\Psr\Response;
use Http\Psr7Test\ResponseIntegrationTest;
use Psr\Http\Message\ResponseInterface;
use WpOrg\Requests\Response as RequestsResponse;

class ResponseTest extends ResponseIntegrationTest
{
    /**
     * @see ResponseIntegrationTest::createSubject()
     *
     * @return ResponseInterface that is used in the tests
     */
    public function createSubject()
    {
        return Response::fromResponse(new RequestsResponse());
    }
}
