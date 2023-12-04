<?php

include '../database.php';

function generateMatriculeProf()
{
    $matricule = rand(10000000, 99999999); 
    while (substr($matricule, 0, 1) === '0') {
        $matricule = rand(10000000, 99999999);
    }
    return $matricule;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $cin = trim($_POST["cin"]);
    $nom = trim($_POST["nom"]);
    $prenom = trim($_POST["prenom"]);
    $email = trim($_POST["email"]);
    $motDePasse = $_POST["password"];
    $isProfessor = isset($_POST["estProfesseur"]) ? 1 : 0;

    $checkCinQuery = $conn->prepare("SELECT id FROM users WHERE cin = ?");
    $checkCinQuery->bind_param("s", $cin);
    $checkCinQuery->execute();
    $checkCinQuery->store_result();


    if ($checkCinQuery->num_rows > 0) {
        $checkCinQuery->close();
        header("Location: main.php?error=cin_exists");
        exit();
    }

    $checkCinQuery->close();

    $hashedPassword = password_hash($motDePasse, PASSWORD_DEFAULT);

    $matriculeProf = generateMatriculeProf();

    $stmt = $conn->prepare("INSERT INTO users (cin, nom, prenom, email, mot_de_passe, est_professeur) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssi", $cin, $nom, $prenom, $email, $hashedPassword, $isProfessor);
    $stmt->execute();
    $stmt->close();

    if ($isProfessor) {
        $insertProfQuery = $conn->prepare("INSERT INTO prof (cin, nom, prenom, email, matricule_prof) VALUES (?, ?, ?, ?, ?)");
        $insertProfQuery->bind_param("sssss", $cin, $nom, $prenom, $email, $matriculeProf);
        $insertProfQuery->execute();
        $insertProfQuery->close();
    } else {
        $insertEtudiantQuery = $conn->prepare("INSERT INTO etudiant (cin, nom, prenom, email) VALUES (?, ?, ?, ?)");
        $insertEtudiantQuery->bind_param("ssss", $cin, $nom, $prenom, $email);
        $insertEtudiantQuery->execute();
        $insertEtudiantQuery->close();
    }

    header("Location: ../login/main.php");
    exit();
} else {
    header("Location: ./main.php");
    exit();
}
