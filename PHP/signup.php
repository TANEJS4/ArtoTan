<?php

// required for global sessions
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$data = $_POST; // get data

// check if any data is missing
if (empty($data['email']) ||
    empty($data['username']) ||
    empty($data['password']) ||
    empty($data['confirmPassword']) ||
    empty($data['dob'])) {
    $_SESSION['messages'][] = 'Please enter all fields';
    header('Location: ../html/registration.php'); // redirect back to registration.php
    exit; // exit script
}

// password validation
if ($data['password'] !== $data['confirmPassword']) {
    $_SESSION['messages'][] = 'Passwords must match';
    header('Location: ../html/registration.php'); // redirect back to registration.php
    exit; // exit script
}

// assuming users relation exists
$dsn = 'mysql:dbname=artotan;host=localhost';
$dbUser = 'root';
$dbPassword = '';

// testing connection to database
try {
    $connection = new PDO($dsn, $dbUser, $dbPassword);
} catch (PDOException $exception) {
    $_SESSION['messages'][] = 'Connection failed: ' . $exception->getMessage();
    header('Location: ../html/registration.php'); // redirect back to registration.php
    exit; // exit script
}

// adding user to users relation
$statement = $connection->prepare('INSERT INTO users (username, email, password, dob) VALUES (:username, :email, :password, :dob)');
if ($statement) {
    $result = $statement->execute([
        ':username' => $data['username'],
        ':email' => $data['email'],
        ':password' => $data['password'],
        ':dob' => $data['dob']
    ]);

    // if execution successful
    if ($result) {
        $_SESSION['messages'][] = 'Thank you for registering';
        header('Location: ../html/registration.php'); // redirect back to registration.php
        exit; // exit script
    }
}