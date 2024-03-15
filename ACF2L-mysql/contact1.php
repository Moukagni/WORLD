<?php
require_once ('header.html');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $position = $_POST['position'];

    $sql = "INSERT INTO salaries (nom,prénom, date_de_naissance,date_dembauche) VALUES (:nom,prénom,date_de_naissance,date_d'embauche )";

    try {
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':first_name', $nom, PDO::PARAM_STR);
        $stmt->bindParam(':last_name', $prénom, PDO::PARAM_STR);
        $stmt->bindParam(':email', $date_de_naissance, PDO::PARAM_STR);
        $stmt->bindParam(':position', $date_dembauche, PDO::PARAM_STR);
        $stmt->execute();
        header('Location: listeSalairesPdo.php');
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>