<?php
	require_once '../config.php';
	include_once 'session.php';
	@mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Could not connect.");
	@mysql_select_db(DB_DATABASE) or die("Could not connect.");
	if(isset($_POST['name']) && !empty($_POST['name']) && $_POST['name']!='')
	{
		echo "<br><br>";
		$fquery1=mysql_query("SELECT name,usn,branch,email,phone FROM test1 WHERE name LIKE '%{$_POST['name']}%' LIMIT 10 ");
		
		?>
<div class = "table-responsive">
  <table class = "table" ; style= "background-color:orange; color: #761a9b;  " >
      <thead>
        <tr>
        
          <th>Name</th>
          <th>USN</th>
          <th>BRANCH</th>
          <th>EMAIL</th>
          <th>PHONE</td>
          
        </tr>
      </thead>
      <tbody>	
      <?php	    
				while($row1=mysql_fetch_assoc($fquery1))
				{
					echo
            "<tr>
              <td>{$row1['name']}</td>
              <td>{$row1['usn']}</td>
              <td>{$row1['branch']}</td>
              <td>{$row1['email']}</td>
              <td>{$row1['phone']}</td>
               
            </tr>\n";
          }
    
	}
?>