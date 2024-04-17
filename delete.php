<?php
include "db_conn.php";
$ROLL_NO = $_GET["ROLL_NO"];
$sql = "DELETE FROM `SYSTEM` WHERE ROLL_NO = $ROLL_NO";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: index.php?msg=Data deleted successfully");
} else {
  echo "Data deletion failed" . mysqli_error($conn);
}