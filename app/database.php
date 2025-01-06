<?php
require_once './config/constants.php';
require_once "./vendor/function.php";
//$servername = "localhost";
//$dbname = "neshat";
//$username = "root";
//$password = "";
//
//try {
//    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//    // set the PDO error mode to exception
//    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
////            echo "Connected successfully";
//} catch (PDOException $e) {
//    echo "Connection failed: " . $e->getMessage();
//}


class DATABASE
{
    protected $servername;
    protected $dbname;
    protected $username;
    protected $password;

    public function __construct()
    {
        $this->servername = constant("SERVER_NAME");
        $this->dbname = constant("DATABASE_NAME");
        $this->username = constant("USER_NAME");
        $this->password = constant("PASSWORD");

    }

    public function connection()
    {
        try {
            $conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//            echo "Connected successfully";
            return $conn;
        } catch (PDOException $e) {
            return "Connection failed: " . $e->getMessage();
        }
    }

    public function login($username, $password)
    {
        if (!empty($username) && !empty($password)) {
            if (!(preg_match("/^[\.A-z0-9_\-\+]+[@][A-z0-9_\-]+([.][A-z0-9_\-]+)+[A-z]{1,4}$/", $username))) {
                try {
                    $conn = $this->connection();
                    $stmt = $conn->prepare("SELECT * FROM users where username= '$username'");
//            $stmt->bindParam(':username', $username, PDO::PARAM_STR);
//            $stmt->bindParam(':password', $password, PDO::PARAM_STR);
                    $stmt->execute();
                    $row = $stmt->fetch();
                    if ($row) {
                        if ($row["password"] === $password) {
                            $_SESSION["username"] = $row["username"];
                            $_SESSION["id"] = $row["id"];
                            $_SESSION['timeout'] = time();
                            $id = $row["id"];
                            $serverInfo = serialize($_SERVER);

//                            $stmt = $conn->prepare("INSERT INTO actions (user_id, data) VALUES ('$id', '$serverInfo')");
//                            $stmt->execute();
//                            $stmt->rowCount();
//                            print_r($action);
//                            return $stmt;
                            return "true";
                        }
                    }

                } catch (PDOException $e) {
                    return "Login Error: " . $e->getMessage();
                }
            }
        }
    }

    public function select($query)
    {


        try {
            $conn = $this->connection();
            $stmt = $conn->prepare($query);
//            $stmt->bindParam(':username', $username, PDO::PARAM_STR);
//            $stmt->bindParam(':password', $password, PDO::PARAM_STR);
            $stmt->execute();
            $row = $stmt->fetchAll();
            return $row;
        } catch (PDOException $e) {
            return "Login Error: " . $e->getMessage();
        }
    }


    public function update($query)
    {


        try {
            $conn = $this->connection();
            $stmt = $conn->prepare($query);
//            $stmt->bindParam(':username', $username, PDO::PARAM_STR);
//            $stmt->bindParam(':password', $password, PDO::PARAM_STR);
            $stmt->execute();
//            return $stmt->rowCount() . " records UPDATED successfully";
            return $stmt->rowCount();
        } catch (PDOException $e) {
            return $query . "<br>" . $e->getMessage();
        }
    }


    public function insert($query)
    {


        try {
            $conn = $this->connection();
            $stmt = $conn->prepare($query);
//            $stmt->bindParam(':username', $username, PDO::PARAM_STR);
//            $stmt->bindParam(':password', $password, PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->rowCount();
        } catch (PDOException $e) {
            return $query . "<br>" . $e->getMessage();
        }
    }

    public function delete($query)
    {


        try {
            $conn = $this->connection();
            $stmt = $conn->prepare($query);
//            $stmt->bindParam(':username', $username, PDO::PARAM_STR);
//            $stmt->bindParam(':password', $password, PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->rowCount();
        } catch (PDOException $e) {
            return $query . "<br>" . $e->getMessage();
        }
    }

//    public function insertData($query)
//    {
//        try {
//            $sql = $query;
//            $conn = $this->connection();
//            // use exec() because no results are returned
//            $stm = $conn->prepare($query);
//            $conn->execute($stm);
//            echo $conn;
////            echo "New record created successfully";
//        } catch (PDOException $e) {
//            echo $sql . "<br>" . $e->getMessage();
//        }
//
//    }


}




