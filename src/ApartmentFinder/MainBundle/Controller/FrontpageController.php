<?php
/**
 * @file
 * Contains \ApartmentFinder\MainBundle\Controller\FrontpageController.
 */

namespace ApartmentFinder\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * A controller for the front page of the application.
 */
class FrontpageController extends Controller
{
    public function frontpageAction(Request $request)
    {
        return new Response('Welcome', Response::HTTP_NO_CONTENT);
    }
}
