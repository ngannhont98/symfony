<?php
// src/Controller/BlogController.php
namespace App\Controller;

use App\Entity\Book;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class BookController extends AbstractController
{
    /**
     * @Route("/", name="list_book")
     */
    public function list()
    {

        return $this->render('book/list_book.html.twig');
    }

    public function input()
    {
        //return $this->render('book/input_book.html.twig');

    }
}