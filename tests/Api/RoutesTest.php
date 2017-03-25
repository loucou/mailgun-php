<?php

/*
 * Copyright (C) 2013-2016 Mailgun
 *
 * This software may be modified and distributed under the terms
 * of the MIT license. See the LICENSE file for details.
 */

namespace Mailgun\Tests\Api;

use GuzzleHttp\Psr7\Response;

/**
 * @author David Garcia <me@davidgarcia.cat>
 */
class RoutesTest extends TestCase
{
    protected function setUp()
    {
        $this->markTestSkipped('Routes API tests not implemented yet.');
    }

    public function testCreate()
    {
        $api = $this->getApiMock();
        $api->expects($this->once())
            ->method('httpPost')
            ->willReturn(new Response());

        $api->create('catch_all()', ['forward("mailbox@myapp.com")'], 'example', 100);
    }

    /**
     * {@inheritdoc}
     */
    protected function getApiClass()
    {
        return 'Mailgun\Api\Routes';
    }
}
