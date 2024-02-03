<?php
    include_once('DatabaseConnection.php');


    class aboutrepository{
        private $connection;

        public function __construct()
        {
            $conn = new DatabaseConnection;
            $this->connection = $conn->startConnection();
        }

        


        public function insertAbout($about){
            $conn = $this->connection;

            $Image = $about->getImage();
            $sql = "INSERT INTO about (img) VALUES (?)";




            $statement = $conn->prepare($sql);
            $statement->execute([$Image]);

            echo "<script>alert('U shtua me sukses!')</script>";
        }

        public function getAllAbout(){
            $conn = $this->connection;

            $sql = "SELECT * FROM about";

            $statement = $conn->query($sql);

            $about = $statement->fetchAll();
            return $about;
        }


        //Pjesa tjeter e funksioneve CRUD: update 
        //dergohet parametri ne baze te cilit e identifikojme studentin (ne kete rast id, por mund te jete edhe ndonje atribut tjeter) dhe parametrat e tjere qe mund t'i ndryshojme (emri, mbiemri, etj...)
        public function editAbout($id,$Image){
            $conn = $this->connection;
            $sql = "UPDATE about SET img=? WHERE id=?";
        
            try {
                $statement = $conn->prepare($sql);
                $statement->execute([$Image , $id]);
                echo "<script>alert('U ndryshua me sukses!')</script>";
            } catch(PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
        }
        
        

        //delete

        function deleteAbout($id){
            $conn = $this->connection;

            $sql = "DELETE FROM about WHERE Id=?";

            $statement = $conn->prepare($sql);
            $statement->execute([$id]);
        }

        //shtese per update: merr studentin ne baze te Id

        function getAboutById($id){
            $conn = $this->connection;

            $sql = "SELECT * FROM about WHERE id=?";

            $statement = $conn->prepare($sql);
            $statement->execute([$id]);
            $shtepia=$statement->fetch();

            return $shtepia;
        }

    }

?>
