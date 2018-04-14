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
        /*
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
        ]);*/

        $data=array(
            0 => array(
                'audio'=> 'audio/diner.mp3',
                'dialogId' => 'f42ce196-87cb-44f3-a486-10abe75eb32e',
                        ),
            1 => array(
                'audio'=> 'audio/retour.mp3',
                'dialogId' => '6ee28330-a24d-48aa-a48d-ef8ed3570291',
            ),
            2 => array(
                'audio'=> 'audio/terminator.mp3',
                'dialogId' => 'f42ce196-87cb-44f3-a486-10abe75eb32e',
            )
        );

        $game = $data[rand(0,2)];

        return $this->render('index.html.twig',['game'=>$game]);
    }
}