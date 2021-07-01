<script>
	function deleteData(id)
	{
		if(confirm("You want to delete ?"))
		{
		window.location.href="deletesemester.php?sem_id="+id;
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

echo "<br>";
echo "<table id='customers'>";

echo "<tr class='danger'><th colspan='5'><a href='admindashboard.php?info=add_semester' class='btn btn-primary'>Add New</a></th></tr>";

echo "<Tr><th>Sem Id</th><th>Semester Name</th><th>Department</th><th>Update</th></tr>";

	$que=mysqli_query($con,"select *  from semester");
	while($res=mysqli_fetch_array($que))
	{
	echo "<Tr>";
	echo "<td>".$res['sem_id']."</td>" ;
	echo "<td>".$res['semester_name']."</td>" ;
	
	//display department name
	$que1=mysqli_query($con,"select *  from department where department_id='".$res['department_id']."'");
	$res1=mysqli_fetch_array($que1);
	
	echo "<td>".$res1['department_name']."</td>" ;
	echo "<td><a href='admindashboard.php?info=updatesemester&sem_id=$res[sem_id]' class='btn btn-warning'>Update</a></td>";
	?>
    
    <!--  <td><a href="javascript:deleteData('<?php //echo $res[sem_id];?>')">Delete</a></td> -->
	<?php 
	echo "</tr>";
	}
	
echo "</table>";	

?>
