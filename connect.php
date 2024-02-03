<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

class Connect {
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db = "shtepit";
    public $mysqli;

    public function __construct() {
        $this->mysqli = new mysqli($this->host, $this->user, $this->pass, $this->db);
        if ($this->mysqli->connect_errno) {
            echo "Failed to connect to MySQL: " . $this->mysqli->connect_error;
            exit();
        }
    }

    public function contact_us($data) {
        $firstname = $this->mysqli->real_escape_string($data['firstName']);
        $lastname = $this->mysqli->real_escape_string($data['lastName']);
        $email = $this->mysqli->real_escape_string($data['email']);
        $phone = $this->mysqli->real_escape_string($data['number']);
        $notes = $this->mysqli->real_escape_string($data['notes']);
        $q = "INSERT INTO contactus (firstName, lastName, Email, numbers, notes) VALUES ('$firstname', '$lastname', '$email', '$phone', '$notes')";

        if ($this->mysqli->query($q)) {
            return true;
        } else {
            echo "Error: " . $q . "<br>" . $this->mysqli->error;
            return false;
        }
    }

    public function getAllMessage() {
        $conn = $this->mysqli;

        $sql = "SELECT * FROM contactus";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $messages = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        $stmt->close();

        return $messages;
    }
}

$obj = new Connect();

if (isset($_POST['in'])) {
    $res = $obj->contact_us($_POST);
    if ($res == true) {
        echo "<script>alert('Message sent successfully. Thank you!')</script>";
    } else {
        echo "<script>alert('Something went wrong! Please try again.')</script>";
    }
}
?>
