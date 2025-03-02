<?php
    require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'init.php';

    function register(string $firstname, string $lastname, string $phone, string $email, string $domaine, string $niveau, string $reference) {
        $timestamp = time();
        $query = "INSERT INTO academia (firstname, lastname, phone, email, domaine, niveau, reference, timestamp) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $mysqli = Connect_BDD();
        $stmt = $mysqli->prepare($query);
        $stmt->bind_param("ssssssss", $firstname, $lastname, $phone, $email, $domaine, $niveau, $reference, $timestamp);
        $stmt->execute();

        $stmt->close();
        $mysqli->close();
        return true;
    }

    function updateRegister(string $reference, string $status, string $method):bool {
        $query = "UPDATE academia SET Method = ?, status = ? WHERE reference = ?";
        $mysqli = Connect_BDD();
        $stmt = $mysqli->prepare($query);
        $stmt->bind_param("sss", $method, $status, $reference);
        $stmt->execute();

        $stmt->close();
        $mysqli->close();
        return true;
    }
?>