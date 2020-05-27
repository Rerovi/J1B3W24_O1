<?php
function databaseConnection() {
    $servername = "localhost";
    $username = "root";
    $password = "mysql";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=Dynamische_applicatie", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    return $conn;
}

function getAllCharacters() {
    $conn = databaseConnection();
    $sql = "select * from characters";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $characters = $stmt->fetchAll();
    return $characters;
}
function getSingleCharacter($id) {
    $conn = databaseConnection();
    $sql = "select * from characters where id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $characters = $stmt->fetch();
    return $characters;
}