<script>
	function deleteData(id)
	{
		if(confirm("You want to delete ?"))
		{
		window.location.href="deletecourse.php?course_id="+id;
		}
	
	}
</script>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid black;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
<?php 
include('../config.php');

//<!--data display-->

echo '<br>';
echo "<table id='customers'>";

echo "<tr class='danger'><th colspan='4'><a href='admindashboard.php?info=add_course' class='btn btn-primary'>Add New</a></th></tr>";

echo "<Tr><th>Id</th><th>Department</th><th>Update</th></tr>";

	$que=mysqli_query($con,"select *  from department");
	while($res=mysqli_fetch_array($que))
	{
	echo "<Tr>";
	echo "<td>".$res['department_id']."</td>" ;
	echo "<td>".$res['department_name']."</td>" ;
	echo "<td><a href='admindashboard.php?info=updatecourse&department_id=$res[department_id]' class='btn btn-warning'>Update</a></td>";
	?>
    
<!-- <td><a class='btn btn-danger' href='javascript:deleteData(<?php// echo  $res[department_id];?>")'>Delete</a></td> -->
	<?php 
	echo "</tr>";
	}
	
echo "</table>";	

?>
