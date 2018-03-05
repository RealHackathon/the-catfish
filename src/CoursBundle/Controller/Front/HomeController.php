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

        //Récupération du nombre de Cours
        $lessons = $em->getRepository(Lesson::class)->findAll();

        $nbLessons = count($lessons);

        //Récupération du nombre de Cours d'un utilisateur
        $historicsUser = $em->getRepository(Historic::class)->historicsUser($this->getUser());

        $nbHistorics = count($historicsUser);

        return $this->render('@Cours/index.html.twig',[
            'historics'=>$nbHistorics,
            'nbLessons' => $nbLessons
        ]);
    }
}