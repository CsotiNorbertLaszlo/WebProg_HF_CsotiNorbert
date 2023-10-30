<?php
abstract class AbstractLibrary
{
    /**
     * @var Author[]
     */
    protected $authors = [];

    public function getAuthors(): array
    {
        return $this->authors;
    }

    public function setAuthors(array $authors): void
    {
        $this->authors = $authors;
    }



    /**
     * Constructor for the library class (if needed)
     */

    /**
     * Method to add an author to the library.
     *
     * @param string $authorName
     * @return Author
     */
    abstract public function addAuthor(string $authorName): Author;

    /**
     * Method to add a book to an author in the library.
     *
     * @param string $authorName
     * @param Book $book
     */
    abstract public function addBookForAuthor(string $authorName, Book $book);

    /**
     * Method to get books for a given author.
     *
     * @param string $authorName
     * @return Book[]
     */
    abstract public function getBooksForAuthor(string $authorName): array;

    /**
     * Method to search for a book by its name and return the Book instance.
     *
     * @param string $bookName
     * @return Book|null
     */
    abstract public function search(string $bookName): ?Book;

    /**
     * Method to print the library's contents.
     */
    abstract public function print();
}