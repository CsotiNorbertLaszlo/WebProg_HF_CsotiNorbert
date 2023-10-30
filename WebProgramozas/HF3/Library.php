<?php
require_once "AbstractLibrary.php";
require_once "Author.php";


class Library extends AbstractLibrary
{
    protected $authors = [];

    public function addAuthor(string $authorName): Author
    {
        $author = new Author($authorName);
        $this->authors[$authorName] = $author;
        return $author;
    }

    public function addBookForAuthor($authorName, Book $book)
    {
        if (isset($this->authors[$authorName])) {
            $author = $this->authors[$authorName];
            $author->addBook($book->title, $book->price);
        }
    }

    public function getBooksForAuthor($authorName): array
    {
        if (isset($this->authors[$authorName])) {
            $author = $this->authors[$authorName];
            return $author->getBooks();
        } else {
            return [];
        }
    }

    public function search(string $bookName): ?Book
    {
        foreach ($this->authors as $author) {
            foreach ($author->getBooks() as $book) {
                if ($book->title === $bookName) {
                    return $book;
                }
            }
        }
        return null;
    }

    public function print()
    {
        foreach ($this->authors as $author) {
            echo $author->name . "\n----------------------\n";
            foreach ($author->getBooks() as $book) {
                echo $book->title . " - " . $book->price . "\n";
            }
        }
    }
}