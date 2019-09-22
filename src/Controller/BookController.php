<?php
// src/Controller/BookController.php
namespace App\Controller;

use App\Entity\Book;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class BookController extends AbstractController
{
//    public $session;
//
//    function __construct(SessionInterface $session)
//    {
//        $this->session = $session;
//    }
//
//    /**
//     * @Route("/add_new" , name="add_new")
//     */
//    public function add_new(Request $request)
//    {
//        if (isset($_GET['add_new'])) {
//            $book = new Book();
//
//            $book->setBookCode($_GET['bookCode']);
//            $book->setBookName($_GET['bookName']);
//            $book->setReview($_GET['review']);
//            $book->setProduceDate($_GET['produce_date']);
//
//            $this->session->set($book->bookCode, $book);
//            return $this->redirectToRoute("list_book");
//        }
//        return $this->render('book/add_new.twig');
//    }
//
//    /**
//     * @Route("/book" , name="list_book")
//     */
//    public function list_book()
//    {
//        $data['list'] = (sizeof($this->session->all()) > 0) ? $this->session->all() : null;
//        return $this->render('book/list_book.twig', $data);
//    }
//
//    /**
//     * @Route("/detail/{book_id}" , name="book_detail")
//     */
//    public function detail_book($book_id)
//    {
//        $data['detail'] = $this->session->get($book_id);
//        return $this->render('book/detail_book.twig', $data);
//    }
//
//    /**
//     * @Route("/clear" , name="clear")
//     */
//    public function clear()
//    {
//        $this->session->clear();
//        return new Response('eo');
//    }
//
//    /**
//     * @Route("/home" , name="home")
//     */
//    public function home()
//    {
//
//        if (isset($_GET['add_new'])) {
//            $book = new Book();
//
//            $book->setBookCode($_GET['bookCode']);
//            $book->setBookName($_GET['bookName']);
//            $book->setReview($_GET['review']);
//            $book->setProduceDate($_GET['produce_date']);
//
//            $this->session->set($book->bookCode, $book);
//
//        }
//
//        $list = sizeof($this->session->all()) > 0 ? $this->session->all() : null;
//
//        $data = [
//            'list' => $list
//        ];
//        return $this->render('book/home.twig',$data);
//    }
//
//    public function show($data){
//        echo "<pre>";
//        print_r($data);
//        die;
//    }
}
