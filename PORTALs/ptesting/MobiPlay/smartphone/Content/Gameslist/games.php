<?php

Class Games {

    private $categories_game = array();
    private $servername = "35.177.38.73";
    private $username = "contentuser";
    private $password = "root";
    private $dbname = "docontent";

    public function __construct() {
        
    }

    public function getCategoriesGames($categories) {
        // Create connection
        $mysqli = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        /* check connection */
        if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }
        /* create a prepared statement */
        if ($stmt = $mysqli->prepare("SELECT images,link,content,type_of_content FROM Games WHERE additional_require=0 AND type_of_content=?")) {

            /* bind parameters for markers */
            $stmt->bind_param("s", $categories);

            /* execute query */
            $stmt->execute();

            $result = $stmt->get_result();
            if (mysqli_num_rows($result) > 0) {

                while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                    $data[] = $row;
                }
                return $data;
            } else {
                return false;
            }


            /* close statement */
            $stmt->close();
        }

        /* close connection */
        $mysqli->close();
    }

}

?>