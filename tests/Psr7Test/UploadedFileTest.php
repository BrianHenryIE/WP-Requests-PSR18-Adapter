<?php

declare(strict_types=1);

namespace Art4\Requests\Tests\Psr7Test;

use Http\Psr7Test\UploadedFileIntegrationTest;
use Psr\Http\Message\UploadedFileInterface;

class UploadedFileTest extends UploadedFileIntegrationTest
{
    /**
     * @see UploadedFileIntegrationTest::createSubject()
     *
     * @return UploadedFileInterface that is used in the tests
     */
    public function createSubject()
    {
        $this->markTestIncomplete('UploadedFileInterface is not implemented in this library.');
    }
}
