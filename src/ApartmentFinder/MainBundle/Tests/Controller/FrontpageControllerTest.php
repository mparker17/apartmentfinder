<?php
/**
 * @file
 * Contains \ApartmentFinder\MainBundle\Tests\Controller\FrontpageControllerTest.
 */

namespace ApartmentFinder\MainBundle\Tests\Controller;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

/**
 * Tests for the FrontpageController.
 */
class FrontpageControllerTest extends WebTestCase
{
    public function testFrontpage()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');

        $this->assertEquals(
            Response::HTTP_NO_CONTENT,
            $client->getResponse()->getStatusCode()
        );
    }
}
