<?php

abstract class AbstractLibrary
{
    protected $authors = [];

    /**
     * @return array
     */
    public function getAuthors(): array
    {
        return $this->authors;
    }

    /**
     * @param array $authors
     */
    public function setAuthors(array $authors): void
    {
        $this->authors = $authors;
    }

    public function addAuthorInstance(Author $author): void
    {
        $this->authors[] = $author;
    }

    # find author by name
    public function findAuthor(string $authorName)
    {
        foreach ($this->authors as $author) {
            if ($author->getName() === $authorName) {
                return $author;
            }
        }
        return null;
    }

    /**
     * Method accepts the name of the author, creates instance of the Author class,
     * adds the instance in $authors array and returns created instance
     *
     * @param string $authorName
     * @return Author
     */
    abstract public function addAuthor(string $authorName): Author;

    /**
     * Method accepts author name and Book. Finds author in $authors array and adds book to this array.
     * The method must set $book's $author property with the found author also.
     * This method is equivalent of Author::addBook
     *
     * @param  string     $authorName
     * @param Book $book
     */
    abstract public function addBookForAuthor(string $authorName, Book $book);

    /**
     * Method returns books for given author
     *
     * @param $authorName
     */
    abstract public function getBooksForAuthor($authorName);

    /**
     * Method searches for book and returns instance of Book
     *
     * @param string $bookName
     * @return Book
     */
    abstract public function search(string $bookName): ?Book;

    /**
     * This method must print every author and for each author all its books in the following format
     * AuthorName
     * ----------------------
     * BookName - price
     * Book2Name - price
     * ...
     *
     * AnotherAuthorName
     * ----------------------
     * AnotherBookName - price
     * ...
     */
    abstract public function print();
}