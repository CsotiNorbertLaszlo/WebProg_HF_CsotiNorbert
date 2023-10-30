<?php


$library = new Library();
$author = $library->addAuthor('Jack London');
$author->addBook("Martin Eden", 55);
$author->addBook("The Game", 35);
$library->addBookForAuthor('Jack London', new Book("A Son of the Sun", 25));

$author2 = $library->addAuthor('Mark Twain');
$author2->addBook('The Adventures of Tom Sawyer', 65);
$author2->addBook('Luck', 12);

$book = $library->search('Martin Eden'); 
$author = $book->getAuthor();
echo $author->getName();

$library->print();


 // ******** COMPOSER ********* //


require_once 'vendor/autoload.php';

use MyLibrary\Library;
use MyLibrary\Book;

$library = new Library();
$author = $library->addAuthor('Jack London');
$author->addBook("Martin Eden", 55);
$author->addBook("The Game", 35);

$book = $library->search('Martin Eden');
$author = $book->getAuthor();
echo $author->getName();

$library->print();
