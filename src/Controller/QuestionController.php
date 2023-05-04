<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    #[Route('/', name: 'app')]
    public function homepage(): Response
    {
        return $this->render( 'question/homepage.html.twig', [ 'What a bewitching controller we have conjured!']);
    }
    // public function homepage(): Response
    // {
    //     return $this->render('question/index.html.twig', [
    //         'controller_name' => 'What a bewitching controller we have conjured!',
    //     ]);
    // }
    #[Route('/question/{slug}', name: 'app_question')]   //wildcard routes
    public function show($slug): Response
    {
        $answers = ['answer1','answer2','answer3'];
             return $this->render('question/show.html.twig' , ['question' => (sprintf( 'Future page to show a question! "%s"', ucwords(str_replace('-',' ',$slug)))),'answers'=>$answers]);

             

            
    }
}
