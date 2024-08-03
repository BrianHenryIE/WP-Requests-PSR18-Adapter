<?php

declare(strict_types=1);

namespace Art4\Requests\Tests\Psr7Test;

use Art4\Requests\Psr\StringBasedStream;
use Http\Psr7Test\StreamIntegrationTest;
use Psr\Http\Message\StreamInterface;

class StreamTest extends StreamIntegrationTest
{
    /**
     * @see StreamIntegrationTest::createStream()
     *
     * @param string|resource|StreamInterface $data
     *
     * @return StreamInterface
     */
    public function createStream($data)
    {
        return StringBasedStream::createFromString($data);
    }
}
