<meta charset="utf-8">
<?php
$server = 'phpmyadmin.c2gciy7ddnql.ap-southeast-1.rds.amazonaws.com';
$username = 'phpMyAdmin';
$password = 'phpMyAdmin';

// Connect to Microsoft SQL Server
$link = mysql_connect($server, $username, $password);
mysql_select_db("20160929_test_database");

if (!$link)
{
  die ('Something went wrong while connecting to Microsoft SQL Server.');
}
else
{
  $sql = "SELECT * FROM user ";
  $query = mysql_query($sql);
  $result = mysql_fetch_row($query);
  while($row = mysql_fetch_assoc($result)) {
    echo $row["USER_ID"];
    echo $row["E_MAIL"];
    echo $row["PASSWORD"];
    echo $row["FIRSTNAME"];
    echo $row["LASTNAME"];
    echo $row["STATUS"];
  }
}

  mysql_query("set names utf8");

  // $sql = "SELECT * from user";
  // $result = mysql_query($sql);
  // while ($row = mysql_fetch_array($result)) {
  //   echo $row["userID"]."<br/>";
  //   echo $row["username"]."<br/>";
  //   echo $row["password"]."<br/>";
  // }

?>
