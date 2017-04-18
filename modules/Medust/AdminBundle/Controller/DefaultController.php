<?php

namespace Medust\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use JasonGrimes\Paginator;

class DefaultController extends Controller
{
    /**
     * @Route("/admin")
     */
    public function indexAction()
    {
        $totalItems = 1000;
        $itemsPerPage = 50;
        $currentPage = 8;
        $urlPattern = '/foo/page/(:num)';

        $paginator = new Paginator($totalItems, $itemsPerPage, $currentPage, $urlPattern);
        return $this->render('AdminBundle:xyz:index.html.twig', ['paginator' => $paginator]);
    }
}
