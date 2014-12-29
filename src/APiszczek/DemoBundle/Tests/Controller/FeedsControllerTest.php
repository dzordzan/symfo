<?php

namespace APiszczek\DemoBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class FeedsControllerTest extends WebTestCase
{
    public function testAdd()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/addFeed');
    }

    public function testDelete()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/{id}/delete');
    }

    public function testEdit()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/{id}/edit');
    }

    public function testShow()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/{id}/show');
    }

}
