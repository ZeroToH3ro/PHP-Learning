<?php

class Author
{
    private string $name;
    private array $books = [];

    /**
     * @param string $name
     * @param array $books
     */
    public function __construct(string $name, array $books = [])
    {
        $this->name = $name;
        $this->books = $books;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return array
     */
    public function getBooks(): array
    {
        return $this->books;
    }

    /**
     * @param array $books
     */
    public function setBooks(array $books): void
    {
        $this->books = $books;
    }

    public function addBook(string $title, float $price) : Book
    {
        $book = new Book($title, $price, $this);
        $this->books[] = $book;
        return $book;
    }
}