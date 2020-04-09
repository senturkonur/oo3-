<?php


class PdoShipStorage
{
    private $pdo;
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }



    public function fetchAllShipsData()
    {
        $pdo = $this->pdo;
        $statement = $this->pdo->prepare('SELECT * FROM ship');
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function fetchSingleShipData($id)
    {
        $pdo = $this->pdo;
        $statement = $this->pdo->prepare('SELECT * FROM ship WHERE id = :id');
        $statement->execute(array('id' => $id));
        $shipArray = $statement->fetch(PDO::FETCH_ASSOC);
        if (!$shipArray) {
            return null;
        }
        return $shipArray;
    }
}