    <?php

    require_once "AbstractLibrary.php";



    class Author
    {
        public string $name;
        public array $books = [];

        public function __construct(string $name, array $books = [])
        {
            $this->name = $name;
            $this->books = $books;
        }

        public function getName(): string
        {
            return $this->name;
        }

        public function setName(string $name): void
        {
            $this->name = $name;
        }



        public function addBook(string $title, float $price): Book
        {
            $book = new Book($title, $price, $this);
            $this->books[] = $book;
            return $book;
        }

        public function getBooks()
        {
            return $this->books;
        }
    }