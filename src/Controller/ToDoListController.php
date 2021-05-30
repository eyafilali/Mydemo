<?php

namespace App\Controller;

use App\Entity\ToDoList;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ToDoListController extends AbstractController
{
    /**
     * @Route("/to/do/list", name="index_to_do")
     */
    public function index(): Response
    {
        return $this->render('to_do_list/index.html.twig', [
            'controller_name' => 'ToDoListController',
        ]);
    }
  /**
     * @Route("/todo", name="to_do_list")
     */
    public function ADD_ver_1(Request $request,EntityManagerInterface $em): Response
    {
        $TODO=new ToDoList();
       if( $request->isMethod("post") ){
          
        $TODO->setdescription($request->get('description'));
        
       $em->persist($TODO);
       $em->flush();
      //return new Response('TODO ajouter!');
      /*return new Response(
        '<script> alert("bravo")</script>'
    );*/
    return new RedirectResponse('http://127.0.0.1:8000/todo1');

}
       
       return $this->render('to_do_list/index.html.twig', [
           'controller_name' => 'ToDoListController'
       ]);
    }

    /**
     * @Route("/todo1", name="listerTodo")
     */
    public function showall(Request $request,EntityManagerInterface $em): Response
    {
        $list=$this->getDoctrine()->getRepository(ToDoList::class)->findAll();
        return $this->render('to_do_list/index.html.twig', [
            'controller_name' => 'ToDoListController','list1'=>$list,'h'=>"hhh"
        ]);
    }

    }

