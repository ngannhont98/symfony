<?php

namespace App\Controller;

use App\Entity\Book2;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\MakerBundle\Validator;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class Book2Controller extends AbstractController
{
    /**
     * @Route("/", name="list_book2")
     */
    public function show_books()
    {
        $book2 = $this->getDoctrine()
            ->getRepository( Book2::class)
            ->findAll();

        if (!$book2) {
            throw $this->createNotFoundException(
                'No book found'
            );
        }

        return $this->render('book2/list_book.twig', array('list' => $book2 ));
    }

    /**
     * @Route("/add_book2", name="add_book2")
     * @param ValidatorInterface $validator
     * @return Response
     */
    public function add_book2(Request $request, ValidatorInterface $validator)
    {
        $book2 = new Book2();
        $form = $this->createFormBuilder($book2)
            ->add('bookCode', TextType::class,
                array('attr' =>
                    array('class' => 'form_control',
                        'style' => 'padding: 10px; border-radius: 15px; width: 100%; margin-bottom: 10px;')))
            ->add('bookName', TextType::class,
                array('attr' =>
                    array('class' => 'form_control',
                        'style' => 'padding: 10px; border-radius: 15px; width: 100%; margin-bottom: 10px;')))
//            ->add('produce_date', DateTimeType::class, array('attr' =>
//                array('class' => 'form_control')))
            ->add('review', TextareaType::class,
                array('attr' =>
                    array('class' => 'form_control',
                        'style' => 'padding: 10px; border-radius: 15px; width: 100%; margin-bottom: 10px;')))
            ->add('add_new', SubmitType::class,
                array('label' => "Add New",
                    'attr' =>
                        array('class' => 'btn btn-primary',
                            'style' => 'padding: 10px; border-radius: 15px; width: 100%; margin-bottom: 10px;')))
            ->getForm();
        $form->handleRequest($request);


        if($form->isSubmitted() && $form->isValid()) {
            $errors = $validator->validate($book2);
            if (count($errors) > 0) {
                return new Response((string) $errors, 400);
            }

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($book2);
            $entityManager->flush();

            return  $this->redirectToRoute('list_book2');
        }
        return $this->render('book2/add_new.twig', array('form' => $form->createView()));
    }


    /**
     * @Route("/detail_book2/{book_id}", name="detail_book2")
     */
    public function detail_book2($book_id)
    {
        $book2 = $this->getDoctrine()
            ->getRepository(Book2::class)
            ->find($book_id);

        if (!$book2) {
            throw $this->createNotFoundException(
                'No book found for id '.$book_id
            );
        }

        return $this->render('book2/detail_book.twig', array('detail' => $book2));
    }



//Error when edit_book and delete_book: An exception has been thrown during the rendering of a template
//("[Syntax Error] Expected Doctrine\Common\Annotations\DocLexer::T_CLOSE_PARENTHESIS, got 'edit_book2' at position 31 in
//method App\Controller\Book2Controller::edit_book2() in C:\xampp\htdocs\symfony\config/routes\../../src/Controller/
//(which is being imported from "C:\xampp\htdocs\symfony\config/routes/annotations.yaml").
//Make sure annotations are installed and enabled.").
//    /**
//     * @Route("/edit_book2/{id} name="edit_book2")
//     */
//    public function edit_book2(Request $request, ValidatorInterface $validator, $book_id)
//    {
//        $entityManager = $this->getDoctrine()->getManager();
//        $book2 = $entityManager->getRepository(Book2::class)->find($book_id);
//
//        if (!$book2) {
//            throw $this->createNotFoundException(
//                'No book found for id ' . $book_id
//            );
//        }
//
//        $form_edit = $this->createFormBuilder($book2)
//            ->add('bookCode', TextType::class,
//                array('attr' =>
//                    array('class' => 'form_control',
//                        'style' => 'padding: 10px; border-radius: 15px; width: 100%; margin-bottom: 10px;')))
//            ->add('bookName', TextType::class,
//                array('attr' =>
//                    array('class' => 'form_control',
//                        'style' => 'padding: 10px; border-radius: 15px; width: 100%; margin-bottom: 10px;')))
////            ->add('produce_date', DateTimeType::class, array('attr' =>
////                array('class' => 'form_control')))
//            ->add('review', TextareaType::class,
//                array('attr' =>
//                    array('class' => 'form_control',
//                        'style' => 'padding: 10px; border-radius: 15px; width: 100%; margin-bottom: 10px;')))
//            ->add('add_new', SubmitType::class,
//                array('label' => "Add New",
//                    'attr' =>
//                        array('class' => 'btn btn-primary',
//                            'style' => 'padding: 10px; border-radius: 15px; width: 100%; margin-bottom: 10px;')))
//            ->getForm();
//        $form_edit->handleRequest($request);
//
//
//        if($form_edit->isSubmitted() && $form_edit->isValid()) {
//            $errors = $validator->validate($book2);
//            if (count($errors) > 0) {
//                return new Response((string) $errors, 400);
//            }
//
////            $entityManager->persist($book2);
//            $entityManager->flush();
//
//            return  $this->redirectToRoute('list_book2');
//        }
//        return $this->render('book2/edit_book.twig', array('form_edit' => $form_edit->createView()));
//    }


//    /**
//     * @Route("/delete_book2/{book_id} name="delete_book2")
//     */
//    public function delete_book2($book_id)
//    {
//        $entityManager = $this->getDoctrine()->getManager();
//        $book2 = $entityManager->getRepository(Book2::class)->find($book_id);
//
//        if (!$book2) {
//            throw $this->createNotFoundException(
//                'No product found for id '.$book_id
//            );
//        }
//
//        $entityManager->remove($book2);
//        $entityManager->flush();
//
//        return $this->redirectToRoute('list_book2');
//    }
}
