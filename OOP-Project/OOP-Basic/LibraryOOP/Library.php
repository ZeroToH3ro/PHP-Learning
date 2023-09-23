<?php
require_once 'AbstractLibrary.php';

class Library extends AbstractLibrary
{


    public function addAuthor(string $authorName): Author
    {
        $author = new Author($authorName);
        $this->authors[] = $author;
        return $author;
    }

    public function addBookForAuthor(string $authorName, Book $book)
    {
        $author = $this->findAuthor($authorName);
        $author?->addBook($book->getTitle(), $book->getPrice());
        return $author;
    }

    public function getBooksForAuthor($authorName) : array
    {
        $author = $this->findAuthor($authorName);
        if ($author !== null) {
            return $author->getBooks();
        }
        return [];
    }

    public function search(string $bookName): ?Book
    {
        foreach ($this->authors as $author) {
            foreach ($author->getBooks() as $book) {
                if($bookName === $book->getTitle()){
                    return $book;
                }
            }
        }
        return null;
    }

    public function print() : void
    {
        foreach ($this->getAuthors() as $author) {
            echo $author->getName().PHP_EOL;
            echo "--------------------".PHP_EOL;
            foreach ($author->getBooks() as $book) {
                echo $book->getTitle().' - '.$book->getPrice().PHP_EOL;
            }
            echo PHP_EOL;
        }
    }
}

?>