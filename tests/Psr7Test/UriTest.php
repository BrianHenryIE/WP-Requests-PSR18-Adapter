<?php

declare(strict_types=1);

namespace Art4\Requests\Tests\Psr7Test;

use Art4\Requests\Psr\Uri;
use Http\Psr7Test\UriIntegrationTest;
use Psr\Http\Message\UriInterface;
use WpOrg\Requests\Iri;

class UriTest extends UriIntegrationTest
{
    /**
     * @see UriIntegrationTest::createUri()
     *
     * @param string $uri
     *
     * @return UriInterface
     */
    public function createUri($uri)
    {
        return Uri::fromIri(new Iri($uri));
    }
}
