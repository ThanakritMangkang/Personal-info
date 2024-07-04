<?php
class Database
{
  private $connection;

  public function __construct()
  {
    $this->connection = new mysqli(Config::DB_HOST, Config::DB_USER, Config::DB_PASS, Config::DB_NAME);

    if ($this->connection->connect_error) {
      die("Connection failed: " . $this->connection->connect_error);
    }
  }

  public function query($sql)
  {
    return $this->connection->query($sql);
  }

  public function prepare($sql)
  {
    return $this->connection->prepare($sql);
  }

  public function close()
  {
    $this->connection->close();
  }
}
