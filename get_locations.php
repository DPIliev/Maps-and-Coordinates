<?php
  include 'config.php';
  try {
    $db = new PDO($dsn, $username, $password);
    $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    $sth = $db->query("SELECT * FROM markers");
    $markers = $sth->fetchAll();
    echo json_encode( $markers );
  } catch (Exception $e) {
    echo $e->getMessage();
  }
  
  
  markers-name of the table with coordinate in my database
