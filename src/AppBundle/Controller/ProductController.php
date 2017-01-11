<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Controller;

use AppBundle\Entity\Task;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ProductController extends Controller {

    /**
     * @Route("/index", name="index")
     */
    public function indexAction() {

        $a = 1000;
        return $this->render('AppBundle:Task:index.html.twig', array("variabila" => $a));
    }

    /**
     * @Route("/task/create", name="create")
     */
    public function addTaskAction(Request $request) {

        $task = new Task();
        $task->setName('Test');
        $task->setDeadline(new \DateTime('tomorrow'));


        $form = $this->createFormBuilder($task)
                ->add('name', TextType::class)
                ->add('executor', TextType::class)
                ->add('autor', TextType::class)
                ->add('descriere', TextType::class)
                ->add('prioritate', NumberType::class)
                ->add('deadline', DateType::class)
                ->add('save', SubmitType::class, array('label' => 'Create Post'))
                ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $task = $form->getData();

            // ... perform some action, such as saving the task to the database
            // for example, if Task is a Doctrine entity, save it!
             $em = $this->getDoctrine()->getManager();
             $em->persist($task);
             $em->flush();

            return $this->redirectToRoute('index');
        }



        return $this->render('AppBundle:Task:new.html.twig', array(
                    'form' => $form->createView(),
        ));
    }

}
