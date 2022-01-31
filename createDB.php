<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php




    class CreateDb
    {
        public $servername;
        public $username;
        public $password;
        public $dbname;
        public $tablename;
        public $con;



        public function __construct(
            $dbname = "Newdb",
            $tablename = "Productdb",
            $servername = "localhost",
            $username = "root",
            $password = ""
        ) {
            $this->dbname = $dbname;
            $this->tablename = $tablename;
            $this->servername = $servername;
            $this->username = $username;
            $this->password = $password;


            $this->con = mysqli_connect($servername, $username, $password);


            if (!$this->con) {
                die("Connection failed : " . mysqli_connect_error());
            }


            $sql = "CREATE DATABASE IF NOT EXISTS $dbname";


            if (mysqli_query($this->con, $sql)) {

                $this->con = mysqli_connect($servername, $username, $password, $dbname);


                $sql = " CREATE TABLE IF NOT EXISTS $tablename
                            (id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                             product_name VARCHAR (25) NOT NULL,
                             product_price FLOAT,
                             product_image VARCHAR (100)
                            );";

                if (!mysqli_query($this->con, $sql)) {
                    echo "Error creating table : " . mysqli_error($this->con);
                }
            } else {
                return false;
            }
        }


        public function getData()
        {
            $sql = "SELECT * FROM $this->tablename WHERE `gender` = \"m\"";

            $result = mysqli_query($this->con, $sql);

            if (mysqli_num_rows($result) > 0) {
                return $result;
            }
        }


        public function getSale()
        {

            $sql = "SELECT * FROM $this->tablename WHERE `datum_proizvodnje` < '2022%'";

            $result = mysqli_query($this->con, $sql);

            if (mysqli_num_rows($result) > 0) {
                return $result;
            }
        }


        public function getNewCollection()
        {

            $sql = "SELECT * FROM $this->tablename WHERE `datum_proizvodnje` > '2022-01-01'";

            $result = mysqli_query($this->con, $sql);

            if (mysqli_num_rows($result) > 0) {
                return $result;
            }
        }
    }













    ?>
</body>

</html>