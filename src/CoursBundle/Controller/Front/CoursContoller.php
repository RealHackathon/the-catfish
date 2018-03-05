<?php
/**
 * Created by PhpStorm.
 * User: jeremie
 * Date: 01/03/18
 * Time: 15:00
 */

namespace CoursBundle\Controller\Front;


use CoursBundle\Entity\Answer;
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

        //Récupération des Cours
        $lessons = $em->getRepository(Lesson::class)->findAll();

        //Récupération de l'historique d'un utilisateur
        $historicsUser = $em->getRepository(Historic::class)->historicsUser($this->getUser());


        return $this->render('@Cours/courses.html.twig', [
            'lessons' => $lessons,
            'historics' => $historicsUser
        ]);
    }

    /**
     * @Route("/cours/{name}", name="cours")
     * @Method("GET")
     */
    public function coursAction(Request $request, Lesson $lesson)
    {
        $em = $this->getDoctrine()->getManager();

        //Variable message de mauvaise reponse
        $wrong = false;

        $profil = $this->getUser();

        //Récupération des questions du Cours
        $questions = $em->getRepository(Question::class)->findByLesson($lesson->getId());

        //Création du formulaire dynamique du quizz
        $form = $this->createForm(QuizzType::class);

        foreach ($questions as $question){
            $answers = $em->getRepository(Answer::class)->findByQuestion($question->getId());
            $choices = [];
            foreach ($answers as $answer){
                $choices += [ucfirst($answer->getName())=>$answer->getCorrect()];
            }
            $form->add($question->getId(),  ChoiceType::class, [
                'choices'=>$choices,
                'multiple'=>false,
                'expanded'=>true,
                'label'=>ucfirst($question->getName()),
                'attr'=>[
                    'class'=>'question'
                ]
            ]);
        }



        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $data = $form->getData();

            if ($data != null) {

                if (count($data) === array_sum($data)) {

                    //Enregistrement dans l'historique
                    $historic = new Historic();

                    $historic->setDate(new \DateTime());
                    $historic->setUser($profil);
                    $historic->setLesson($lesson);

                    $em->persist($historic);
                    $em->flush();

                    return $this->redirectToRoute('home');
                }else{
                    $wrong = true;
                }

            }
        }






        return $this->render('@Cours/cours.html.twig', [
            'lesson' => $lesson,
            'form' => $form->createView(),
            'wrong' => $wrong
        ]);
    }
}