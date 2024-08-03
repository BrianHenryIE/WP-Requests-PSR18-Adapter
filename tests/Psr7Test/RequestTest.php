<?php

declare(strict_types=1);

namespace Art4\Requests\Tests\Psr7Test;

use Art4\Requests\Psr\Request;
use Art4\Requests\Psr\Uri;
use Http\Psr7Test\RequestIntegrationTest;
use Psr\Http\Message\RequestInterface;
use WpOrg\Requests\Iri;

class RequestTest extends RequestIntegrationTest
{
    /**
     * @see RequestIntegrationTest::createSubject()
     *
     * @return RequestInterface that is used in the tests
     */
    public function createSubject()
    {
        return Request::withMethodAndUri('GET', Uri::fromIri(new Iri('/')));
    }
}
