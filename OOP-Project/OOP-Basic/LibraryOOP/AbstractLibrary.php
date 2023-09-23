<?php 
    abstract class AbstractLibrary {
        protected $authors = []; 
        
        public function getAuthor() : array
        {
            return $this->authors;
        }

        public function setAuthor(array $authors){
            $this->authors = $authors;
        }

        public function addAuthorInstance(?Author $author) : void
        {
            $this->authors[] = $author;
        }

        public function findAuthor(string $authorName) : ?Author 
        {
            foreach($this->authors as $author)
            {
                if ($author->getName() == $authorName)
                {
                    return $author;
                }
            }
            return null;
        }

        abstract public function addAuthor(string $authorName) : Author;

        abstract public function addBookForAuthor(string $authorName, Book $book);

        abstract public function getBooksForAuthor(string $authorName) : array;

        abstract public function search(string $bookName) : ?Book;

        abstract public function print() : void;
    }

?>