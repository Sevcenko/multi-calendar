<?php
require_once('../connect/connect.php');

if($_REQUEST['delete_from_db_id']) {
     $sql = $dbc->query("DELETE FROM messages WHERE id='".$_REQUEST['delete_from_db_id']."' LIMIT 1")or die(mysqli_error);
        echo "Message Deleted";
}

?>