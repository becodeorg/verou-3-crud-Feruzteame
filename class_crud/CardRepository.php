<?php

// This class is focussed on dealing with queries for one type of data
// That allows for easier re-using and it's rather easy to find all your queries
// This technique is called the repository pattern
class CardRepository
{
    private DatabaseManager $databaseManager;

    // This class needs a database connection to function
    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }

    public function create(string $time, string $todolist, string $note): void
    {
        $sql = "INSERT INTO todolist (time, todolist, note) VALUES (:time,:todolist,:note)";
        $stmt= $this->databaseManager->connection->prepare($sql);
        $stmt->execute([
            ":time" => $time,
            ":todolist" => $todolist,
            ":note" => $note
        ]);
     }

    // Get one
    public function find(int $list_id): array
    {
        $dbh = $this->databaseManager->connection;
        $stmt = $dbh->prepare("SELECT * FROM todolist WHERE id=? LIMIT 1");
        $stmt->execute([$list_id]);
        return $stmt->fetch();
    }

    // Get all
    public function get(): array
    {
        // TODO: Create an SQL query
        $find = "SELECT * FROM todolist";
        // TODO: Use your database connection (see $databaseManager) and send your query to your database.
       $sendQuery = $this->databaseManager->connection->prepare($find);
        // TODO: fetch your data at the end of that action.
        $sendQuery->execute();
        // TODO: replace dummy data by real one
        return $sendQuery->fetchAll(PDO::FETCH_ASSOC);
        // We get the database connection first, so we can apply our queries with it
        // return $this->databaseManager->connection-> (runYourQueryHere)
    }



    public function update($id, $time, $todolist, $note): void
    {
        $data = [
            'id' => $id,
            'time' => $time,
            'todolist' => $todolist,
            'note' => $note,
        ];

        $pdo = $this->databaseManager->connection;
        $sql = "UPDATE todolist SET time=:time, todolist=:todolist, note=:note WHERE id=:id";
        $pdo->prepare($sql)->execute($data);
    }

    public function delete($id): void
    {
        $find = "DELETE FROM todolist WHERE id=:id";
        $sendQuery = $this->databaseManager->connection->prepare($find);
        $sendQuery->execute([
            ':id' => $id
        ]);
    }

}