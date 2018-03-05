<?php

namespace CoursBundle\Controller\Front;

use CoursBundle\Entity\Historic;
use CoursBundle\Entity\Lesson;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class HomeController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $nbLessons = count($em->getRepository(Lesson::class)->findAll());

        $historicsUser = count($em->getRepository(Historic::class)->historicsUser($this->getUser()));

        return $this->render('@Cours/index.html.twig',[
            'historics'=>$historicsUser,
            'nbLessons' => $nbLessons
        ]);
    }
}