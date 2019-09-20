<?php

  date_default_timezone_set('America/Vancouver');
  include 'dbh.inc.php';
  include 'comments.inc.php';

  echo "<form method='POST' action='".setComments($conn)."'>
    <input type='hidden' name='uid' value='Anonymous'>
    <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
    <textarea name='message'></textarea><br>
    <button class='d-button' type='submit' name='commentSubmit'>Comment</button>
  </form>";

  getComments($conn);
?>
