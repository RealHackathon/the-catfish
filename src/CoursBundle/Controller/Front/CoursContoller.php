<?php
/**
 * Created by PhpStorm.
 * User: jeremie
 * Date: 01/03/18
 * Time: 15:00
 */

namespace CoursBundle\Controller\Front;


use CoursBundle\Entity\Historic;
use CoursBundle\Entity\Lesson;
use CoursBundle\Entity\Question;
use CoursBundle\Form\QuizzType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\HttpFoundation\Request;


class CoursContoller extends Controller
{
    /**
     * @Route("/cours", name="courses")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $lessons = $em->getRepository(Lesson::class)->findAll();

        $historicsUser = $em->getRepository(Historic::class)->historicsUser($this->getUser());


        return $this->render('@Cours/courses.html.twig',[
            'lessons'=>$lessons,
            'historics'=>$historicsUser
        ]);
    }

    /**
     * @Route("/cours/{name}", name="cours")
     * @Method("GET")
     */
    public function coursAction(Request $request, Lesson $lesson)
    {
        $em = $this->getDoctrine()->getManager();

        $ok = '';

        $profil = $this->getUser();


        if ($_GET != null) {

            $answers = $_GET;

            if (count($answers) === array_sum($answers)){
                $ok = true;

                $historic = new Historic();

                $historic->setDate(new \DateTime());
                $historic->setUser($profil);
                $historic->setLesson($lesson);

                $em->persist($historic);
                $em->flush();

            }

        }


        return $this->render('@Cours/cours.html.twig', [
            'lesson' => $lesson,
            'ok' => $ok
        ]);
    }
}