<?php
	require_once '../config.php';
	include_once 'session.php';
	@mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die('Could not connect.');
	@mysql_select_db(DB_DATABASE) or die("Could not connect.");
	$query=mysql_query("SELECT * FROM company ORDER BY id DESC");
	$i=1;
	if($query){
		echo "<div class='container'>";
			echo "<table class = 'table'><thead><tr>
        <th style='padding:10px;valign:center' width='10%'>Serial no</th>
        <th style='padding:10px;valign:center'>Company name</th>
        <th style='padding:10px;valign:center'>Package</th>
		<th style='padding:10px;valign:center'>Type</th>
		<th style='padding:10px;valign:center'>Cut Off</th>
		<th style='padding:10px;valign:center' colspan='5'>Registration Controls</th>
      </tr>
    </thead>
    <tbody>";

	while($row=mysql_fetch_assoc($query))
	{
		if($row['validation']==0)
		{
			if($i%2==1)
				echo "<tr class = 'success' style='color:#000000; '><td style='padding:10px;valign:center'>{$row['id']} </td><td style='padding:10px;valign:center'> {$row['name']} &nbsp &nbsp</td><td style='padding:10px;valign:center'>   {$row['package']} L &nbsp &nbsp</td><td style='padding:10px;valign:center'>   {$row['type']} &nbsp</td><td style='padding:10px;valign:center'>  (UG) {$row['ug']}  (PG) {$row['pg']} <input value='{$row['name']}' class='hide' id='cname[$i]' size='1'> &nbsp &nbsp</td><td style='padding:10px;valign:center' colspan='5'><input id='register' type='button' name='register' value='START' class='btn btn-primary' onclick='register({$i},1);'></td></tr>";
			else if($i%2==0)
				echo "<tr class = 'success' style='color:#000000;'><td style='padding:10px;valign:center'>{$row['id']}  </td><td style='padding:10px;valign:center'> {$row['name']} &nbsp &nbsp</td><td style='padding:10px;valign:center'>   {$row['package']}	 L &nbsp &nbsp</td><td style='padding:10px;valign:center'>   {$row['type']}  &nbsp</td><td style='padding:10px;valign:center'>  (UG) {$row['ug']}  (PG) {$row['pg']} <input value='{$row['name']}' class='hide' id='cname[$i]' size='1'> &nbsp &nbsp</td><td style='padding:10px;valign:center' colspan='5'><input id='register' type='button' name='register' value='START' class='btn btn-primary' onclick='register({$i},1);'></td></tr>";
		}
		else if($row['validation']==1)
		{
			if($i%2==1)
			echo "<tr class = 'success' style='color:#000000;'><td style='padding:10px;valign:center'>{$row['id']}      </td><td style='padding:10px;valign:center'> {$row['name']} &nbsp &nbsp</td><td style='padding:10px;valign:center'>   {$row['package']} L &nbsp &nbsp</td><td style='padding:10px;valign:center'>   {$row['type']}  &nbsp</td><td style='padding:10px;valign:center'>  (UG) {$row['ug']}  (PG) {$row['pg']} <input value='{$row['name']}' class='hide' id='cname[$i]' size='1'> &nbsp &nbsp</td><td style='padding:10px;valign:center'><input id='register' type='button' class='btn btn-primary'  name='register' value='START' onclick='register({$i},1);'> &nbsp &nbsp</td><td style='padding:10px;valign:center' colspan='4'><input id='register' type='button' name='register' class='btn btn-primary' value='CLOSE' onclick='register({$i},2);'></td></tr>";
			else if($i%2==0)
			echo "<tr class = 'success' style='color:#000000;'><td style='padding:10px;valign:center'>{$row['id']} </td><td style='padding:10px;valign:center'> {$row['name']} &nbsp &nbsp</td><td style='padding:10px;valign:center'>   {$row['package']} L &nbsp &nbsp</td><td style='padding:10px;valign:center'>   {$row['type']}  &nbsp</td><td style='padding:10px;valign:center'>  (UG) {$row['ug']}  (PG) {$row['pg']} <input value='{$row['name']}' class='hide' id='cname[$i]' size='1'> &nbsp &nbsp</td><td style='padding:10px;valign:center'><input id='register' type='button' name='register' class='btn btn-primary' value='START' onclick='register({$i},1);'> &nbsp &nbsp</td><td style='padding:10px;valign:center' colspan='4'><input id='register' type='button' name='register' class='btn btn-primary' value='CLOSE' onclick='register({$i},2);'></td></tr>";
		}
		else if($row['validation']==2)
		{
			if($i%2==1)
			echo "<tr class = 'success' style='color:#000000;'><td style='padding:10px;valign:center'>{$row['id']} </td><td style='padding:10px;valign:center'> {$row['name']} &nbsp &nbsp </td><td style='padding:10px;valign:center'>  {$row['package']} L &nbsp &nbsp</td><td style='padding:10px;valign:center'>   {$row['type']}  &nbsp</td><td style='padding:10px;valign:center'>  (UG) {$row['ug']}  (PG) {$row['pg']} <input value='{$row['name']}' class='hide' id='cname[$i]' size='1'> &nbsp &nbsp</td><td style='padding:10px;valign:center'><input id='register' type='button' class='btn btn-primary' name='register' value='START' onclick='register({$i},1);'> &nbsp &nbsp</td><td style='padding:10px;valign:center'><input id='register' type='button' class='btn btn-primary' name='register' value='CLOSE' onclick='register({$i},2);'> &nbsp &nbsp</td><td style='padding:10px;valign:center'><form method='post' action='download.php'><input id='hide' class='hide' type='text' name='register' value='{$row['name']}' onclick='register({$i},3);'><input type='submit' value='LIST' class='btn btn-primary' onclick='register({$i},3);'></form>  &nbsp &nbsp</td><td style='padding:10px;valign:center'> <input id='register' type='button' name='register' value='PLACE' class='btn btn-primary' onclick='register({$i},4);'> &nbsp &nbsp </td><td style='padding:10px;valign:center'><input id='register' type='button' name='register' class='btn btn-primary' value='END' onclick='register({$i},5);'></td></tr>";
			else if($i%2==0)
			echo "<tr class = 'success' style='color:#000000;'><td style='padding:10px;valign:center'>{$row['id']} </td><td style='padding:10px;valign:center'> {$row['name']} &nbsp &nbsp</td><td style='padding:10px;valign:center'>   {$row['package']} L &nbsp &nbsp</td><td style='padding:10px;valign:center'>   {$row['type']}  &nbsp</td><td style='padding:10px;valign:center'>  (UG) {$row['ug']}  (PG) {$row['pg']} <input value='{$row['name']}' class='hide' id='cname[$i]' size='1'> &nbsp &nbsp</td><td style='padding:10px;valign:center'><input id='register' type='button' name='register'  class='btn btn-primary' value='START' onclick='register({$i},1);'> &nbsp &nbsp</td><td style='padding:10px;valign:center'><input id='register' type='button' name='register' class='btn btn-primary' value='CLOSE' onclick='register({$i},2);'> &nbsp &nbsp</td><td style='padding:10px;valign:center'><form method='post' action='download.php'><input id='hide' class='hide' type='text' name='register' value='{$row['name']}' onclick='register({$i},3);'><input type='submit' class='btn btn-primary' value='LIST' onclick='register({$i},3);'></form>  &nbsp &nbsp</td><td style='padding:10px;valign:center'><input id='register' type='button' class='btn btn-primary' name='register' value='PLACE' onclick='register({$i},4);'> &nbsp &nbsp</td><td style='padding:10px;valign:center'><input id='register' type='button' name='register' value='END' class='btn btn-primary' onclick='register({$i},5);'></td></tr>";
		}
		$i++;
	}


}
	$query4=mysql_query("SELECT * FROM company");
	if($query4){
	while($row=mysql_fetch_assoc($query4))
	{
		if($row['validation']==5)
		{
			if($i%2==1)
				echo "<tr class = 'success' style='color:#000000;'><td style='padding:10px;valign:center'>{$row['id']} </td><td style='padding:10px;valign:center'> {$row['name']} &nbsp &nbsp</td><td style='padding:10px;valign:center'>   {$row['type']}  &nbsp</td><td style='padding:10px;valign:center'>   {$row['package']} L &nbsp &nbsp</td><td style='padding:10px;valign:center'>  (UG) {$row['ug']}  (PG) {$row['pg']} &nbsp &nbsp &nbsp &nbsp</td><td style='padding:10px;valign:center' colspan='5'> <form method='post' action='downloadplaced.php'><input id='hide' class='hide' type='text' name='register' value='{$row['name']}'><input type='submit' class='btn btn-primary' value='FINAL'></form></td></tr>";
			else if($i%2==0)
				echo "<tr class = 'success' style='color:#000000;'><td style='padding:10px;valign:center'>{$row['id']}  </td> <td style='padding:10px;valign:center'> {$row['name']} &nbsp &nbsp</td> <td style='padding:10px;valign:center'>   {$row['type']}  &nbsp</td> <td style='padding:10px;valign:center'>   {$row['package']} L &nbsp &nbsp</td> <td style='padding:10px;valign:center'>  (UG) {$row['ug']}  (PG) {$row['pg']} &nbsp &nbsp &nbsp &nbsp</td> <td style='padding:10px;valign:center' colspan='5'> <form method='post' action='downloadplaced.php'><input id='hide' class='hide' type='text' name='register' value='{$row['name']}'><input type='submit' class='btn btn-primary' value='FINAL'></form></td></tr>";
			$i++;
		}
	}
echo "</tbody></table></div>";
	}
	echo "<br><br><hr>";	
?>