<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Page;

class HomeController extends Controller
{
    /**
     * @Route("/", name="Home")
     */
    public function indexAction(Request $req)
    {
        // echo "<pre>";
        // print_r($req);
        // echo "</pre>";

        $data = $req->getRequestUri();
        // $req->getMethod();
        //echo $_GET['name'];
        //echo $req->request->get('name');


        return $this->render('AppBundle:Home:index.html.twig', array(
            //"id" => "Data Id: "+$this->createAction()
        ));
    }

    private function createAction(){
      $page = new Page();
      $page->setTitle("My Home Page");
      $page->setKeyword("My Page, Demo Page");
      $page->setDescription("This is the Demo Page");
      $page->setContent("This is the main page content");

      $em = $this->getDoctrine()->getManager();

      $em->persist($page);

      $em->flush();
      return $page->getId();
    }

}
