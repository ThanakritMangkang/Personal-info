<?php
require_once 'db.php';

class User
{
  private $db;

  public function __construct()
  {
    $this->db = new Database();
  }

  public function getUser($id)
  {
    $stmt = $this->db->prepare("SELECT id, name, personal, salary, email, age, status FROM users WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
      return $result->fetch_assoc();
    } else {
      return null;
    }
  }

  public function showUsers()
  {
    $query = "SELECT id, name, personal, salary, email, age, status FROM users";
    $result = $this->db->query($query);
    $users = array();
    while ($row = $result->fetch_assoc()) {
      $users[] = $row;
    }
    return $users;
  }
}
