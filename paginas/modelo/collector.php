<?php
include_once('database.php');

// Define configuration
define("DB_HOST", "ec2-54-221-244-196.compute-1.amazonaws.com");
define("DB_USER", "rgggacysiqcdqc");
define("DB_PASS", "c7a75d40c962ef700a0910847014f4e0979ae24ad53f6927f0ff8a41d9f14447");
define("DB_NAME", "dcs89anusbm3gg");


class Collector extends dataBase
{
  public static $db;
  private $host      = DB_HOST;
  private $username  = DB_USER;
  private $password  = DB_PASS;
  private $dbname    = DB_NAME;
    
  public function __construct()
  {
    self::$db = new dataBase($this->username, $this->password, $this->host, $this->dbname);
  }

}

?>
