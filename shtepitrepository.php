<?php
    include_once('db.php');

    class shtepitrepository{
        private $connection;

        public function __construct()
        {
            $conn = new DatabaseConnection;
            $this->connection = $conn->startConnection();
        }

        


        public function insertShtepit($shtepia){
            $conn = $this->connection;

            $Pershkrimi = $shtepia->getPershkrimi();
            $Qmimi = $shtepia->getQmimi();
            $Emri = $shtepia->getEmri();
            $sql = "INSERT INTO shtepia( Pershkrimi, Qmimi,Emri) VALUES (?,?,?,?)";

            $statement = $conn->prepare($sql);
            $statement->execute([ $Pershkrimi, $Qmimi, $Emri]);

            echo "<script>alert('U shtua me sukses!')</script>";
        }

        public function getAllShtepit(){
            $conn = $this->connection;

            $sql = "SELECT * FROM shtepit-p";
            $statement = $conn->query($sql);

            $shtepit = $statement->fetchAll();
            return $shtepit;
        }


        //Pjesa tjeter e funksioneve CRUD: update 
        //dergohet parametri ne baze te cilit e identifikojme studentin (ne kete rast id, por mund te jete edhe ndonje atribut tjeter) dhe parametrat e tjere qe mund t'i ndryshojme (emri, mbiemri, etj...)
        public function editShtepia($id, $Pershkrimi, $Qmimi, $Emri){
            $conn = $this->connection;
            $sql = "UPDATE shtepit-p SET Pershkrimi=?,Qmimi=?, Emri=? WHERE Id=?";

            $statement = $conn->prepare($sql);
            $statement->execute([$Pershkrimi,$Qmimi, $Emri, $id]);

            echo "<script>alert('U ndryshua me sukses!')</script>";

        }

        //delete

        function deleteShtepia($id){
            $conn = $this->connection;

            $sql = "DELETE FROM shtepit-p WHERE Id=?";

            $statement = $conn->prepare($sql);
            $statement->execute([$id]);
        }

        //shtese per update: merr studentin ne baze te Id

        function getShtepitById($id){
            $conn = $this->connection;

            $sql = "SELECT * FROM shtepia-p WHERE Id=?";

            $statement = $conn->prepare($sql);
            $statement->execute([$id]);
            $shtepia=$statement->fetch();

            return $shtepia;
        }

    }

?>