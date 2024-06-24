<?php
include("./database.php");

class User
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function register($email, $password)
    {
        $passwordHash = password_hash($password, PASSWORD_BCRYPT);

        $conn = $this->db->getConnection();
        $sqlInsert = "INSERT INTO user(email, password) VALUES (?, ?)";
        $stmt = $conn->prepare($sqlInsert);

        if ($stmt === false) {
            die('Error preparing statement');
        }

        $stmt->bind_param("ss", $email, $passwordHash);
        $result = $stmt->execute();

        if ($result == false) {
            return false;
        } else {
            return true;
        }
    }

    public function login($email, $password)
    {
        $conn = $this->db->getConnection();

        $sqlSelect = "SELECT password FROM user WHERE email = ?";
        $stmt = $conn->prepare($sqlSelect);

        if ($stmt === false) {
            die('Error preparing statement');
        }

        $stmt->bind_param("s", $email);
        $stmt->execute();

        $stmt->bind_result($passwordHash);
        $stmt->fetch();

        if (password_verify($password, $passwordHash)) {
            return true;
        } else {
            return false;
        }
    }
}
