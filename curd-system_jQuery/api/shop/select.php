<?php

$conn = mysqli_connect('localhost', 'root', 'root', 'chung');
mysqli_query($conn, "set charset 'utf8'");
mysqli_query($conn, "set character set 'utf8'");

$sql = "select * from shop order by id";

$res = mysqli_query($conn, $sql);

$list = array();
while ($row = mysqli_fetch_assoc($res)) {
  array_push($list, $row);
}

$resp = array(
  "code" => 200,
  "body" => array(
    "list" => $list
  )
);

echo json_encode($resp);

?>