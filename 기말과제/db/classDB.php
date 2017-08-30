<?php
  session_start();
?>
<?php
  class DBconnect{
    protected $pdo;
    private $host;
    private $dbname;
    private $user;
    private $password;



    public function __construct(){
      try {
        $this->host = "localhost";
        $this->dbname = "wd2j_db";
        $this->user = "wd2j";
        $this->password = "1234";

        $this->pdo = new PDO("mysql:host={$this->host};dbname={$this->dbname}"
                              ,$this->user,$this->password);

        $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
      } catch (PDOException $e) {
        echo "ERROR : {$e->getMessage()}";
      }
    }
    /*      생성자     */

    public function __destruct(){
      $pdo = NULL;
    }
    /*      소멸자    */
  }
?>
