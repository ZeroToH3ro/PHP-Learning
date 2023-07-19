<?php

class Connection
{
    public ?PDO $pdo = null;

    public function __construct()
    {
        try {
            $this->pdo = new PDO('mysql:server=localhost;dbname=notes', 'root', 'minh21052002@@');
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exception) {
            echo 'ERROR: ' . $exception->getMessage();
        }
    }

    public function getNotes(): bool|array
    {
        $statement = $this->pdo->query("SELECT * FROM notes ORDER BY create_date DESC");
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getNoteById($id): bool|array
    {
        $statement = $this->pdo->prepare("SELECT * FROM notes WHERE id = :id");
        $statement->bindValue('id', $id);
        $statement->execute();
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    public function addNote($note): bool
    {
        $statement = $this->pdo->prepare("INSERT INTO notes (title, description, create_date)
                                                 VALUES (:title, :description, :create_date)
                                        ");
        $statement->bindValue('title', $note['title']);
        $statement->bindValue('description', $note['description']);
        $statement->bindValue('create_date', date('Y-m-d H:i:s'));
        return $statement->execute();
    }

    public function updateNote($id, $note):bool
    {
        $statement = $this->pdo->prepare("UPDATE notes SET title = :title, description = :description WHERE id = :id
                                        ");
        $statement->bindValue('title', $note['title']);
        $statement->bindValue('description', $note['description']);
        $statement->bindValue('id', $id);
        return $statement->execute();
    }

    public function removeNote($id) : bool
    {
        $statement = $this->pdo->prepare("DELETE FROM notes WHERE id = :id");
        $statement->bindValue('id', $id);
        return $statement->execute();
    }
}

return new Connection();