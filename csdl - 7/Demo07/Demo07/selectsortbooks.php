<?php
require 'DataProvider.php';

$sql = "SELECT * FROM T_BOOK";
if (isset($_GET["sort"]))
	$sql .= " ORDER BY " . $_GET["sort"];

$result = executeQuery($sql);

// Hien thi ket qua
//$self = $_SERVER['PHP_SELF'];
$self = "selectsortbooks.php";
echo '<table width="600" align="center" border="1" cellpadding="5" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111">';
   echo "<tr>";
   echo "<th>STT</th>";
   echo "<th><a href=\"$self?sort=BOOK_TITLE\">Tựa sách</a></th>";   	   
   echo "<th><a href=\"$self?sort=BOOK_DESC\">Mô tả</a></th>";
   echo "<th><a href=\"$self?sort=BOOK_AUTHOR\">Tác giả</a></th>";
   echo "<th><a href=\"$self?sort=BOOK_YEAR\">NXB</a></th>";
   echo "<th><a href=\"$self?sort=BOOK_PRICE\">Đơn giá</a></th>";   
   echo "<th>Ảnh bìa</th>";
   echo "</tr>";
   $i = 1;
   while ($row = $result->fetch_array())
   {
   	    echo "<tr>";
   	   	echo "<td>" . $i . "</td>";
   	   	echo "<td>" . $row['BOOK_TITLE'] . "</td>";
   	   	echo "<td>" . $row['BOOK_DESC'] . "</td>";
   	   	echo "<td>" . $row['BOOK_AUTHOR'] . "</td>";
   	   	echo "<td>" . $row['BOOK_YEAR'] . "</td>";
   	   	echo "<td>" . $row['BOOK_PRICE'] . "</td>";
		echo "<td><img src='images/" . $row["BOOK_PIC"] . "'></td>";
      	echo "</tr>";
      	
      	$i++;
   }
   echo "</table>";

?>