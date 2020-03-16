<?php

        class db { // create class
                public $server = 'localhost';
                public $user = 'root';
                public $passwd = '';
                public $db = 'message_board';
                public $dbCon;

        function __construct(){ // function for connect with local database 
                $this->dbCon = mysqli_connect($this->server, $this->user, $this->passwd, $this->db);
        }

          function __destruct(){ 
                mysqli_close($this->dbCon);
        }

        function select(){
            // fuction which get all data from message table using query
            $myQuery = "SELECT * FROM message;";
            $results = mysqli_query($this->dbCon, $myQuery);
            return $results;
    }
     function saveRecords($tbName,$u,$p) // function for insert data in table
	{
       
        mysqli_query($this->dbCon,"insert into $tbName values('','".$u."','".$p."')");
	}

    }

?>