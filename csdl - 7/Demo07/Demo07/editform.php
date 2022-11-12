<?php	require 'DataProvider.php';
	if (isset($_REQUEST['id'])){
		$id = $_REQUEST['id'];
		$sql = "select * from T_BOOK where BOOK_ID=" . $id;
		$result = executeQuery($sql);
		$row = $result->fetch_array();
		$title = $row['BOOK_TITLE'];
		$description = $row['BOOK_DESC'];
		$author = $row['BOOK_AUTHOR'];
		$year = $row['BOOK_YEAR'];
	}?>
<form action='updatebook.php' method='post'>
	<input type='hidden' name='id' value="<?php echo($id); ?>">
	<table align='center'>
		<tr>
		<td>Tựa sách</td>
		<td><input type='text' name='title' 
			value="<?php echo($title);?>" /></td>
		</tr>
		<tr>
		<td>Mô tả</td>
		<td>
			<input type='text' name='description'
			value="<?php echo($description);?>">
		</td>
		</tr>
		<tr>
		<td>Tác giả</td>
		<td>
			<input type='text' name='author'
			value="<?php echo($author);?>">
		</td>
		</tr>
		<tr>
		<td>NXB</td>
		<td>
			<input type='text' name='year' 
			value="<?php echo($year);?>">
		</td>
		</tr>
		<tr>
		<td><input type='submit' value='Cập nhật sách'></td>
		<td><input type='reset' value='Làm lại'></td>
		</tr>
	</table>
</form>
