<?php
// src/Controller/BookController.php
namespace App\Controller;

use App\Entity\Book;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class BookController extends AbstractController
{
    /**
     * @Route("/add_new" , name="add_new")
     */
    public function add_new(Request $request)
    {
        $book = new Book();

        $form = $this->createFormBuilder($book)
            ->add('bookCode', TextType::class)
            ->add('bookName', TextType::class)
            ->add('produce_date', DateType::class)
            ->add('review', TextType::class)
            ->add('save', SubmitType::class, ['label' => 'Add new'])
            ->getForm();

        $form->handleRequest($request);

        if( $form->isSubmitted() || $form->isValid() ){
            $bookCode = $form['bookCode']->getData();
            $bookName = $form['bookName']->getData();
            $produce_date = $form['produce_date']->getData();
            $review = $form['review']->getData();

            $book->setBookCode($bookCode);
            $book->setBookName($bookName);
            $book->setProduceDate($produce_date);
            $book->setReview($review);

            $this->addFlash(
                'notice',
                'Added successfull'
            );
        }

        return $this->render('book/add_new.twig', array(
            'form' => $form->createView()
        ));
    }

    /**
     * @Route("/" , name="list_book")
     */
    public function list()
    {


    }
}
