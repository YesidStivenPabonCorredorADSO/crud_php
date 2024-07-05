<?php
require __DIR__.('/config.php');
class Database
{
  private $connection;

  public function __construct()
  {
    $options = [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ];

    $this->connection = "mysql:host=" . constant('HOST') . "; dbname=" . constant('DB') . "; charset=" . constant('CHARSET');
    $this->connection = new PDO($this->connection, constant('USER'), constant('PASSWORD'), $options);
    $this->connection->exec("SET CHARACTER SET UTF8");
  }

  function getConnection()
  {
    return $this->connection;
  }

  function closConnection()
  {
    $this->connection = null;
  }
}
