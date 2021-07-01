<script>
	function deleteData(id)
	{
		if(confirm("You want to delete ?"))
		{
		window.location.href="deletesubject.php?subject_id="+id;
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
echo "<br>";

echo "<table id='customers'>";

echo "<tr class='danger'><th colspan='6'><a href='admindashboard.php?info=add_subject' class='btn btn-primary'>Add New</a></th></tr>";

echo "<Tr><th>Subject Id</th><th>Subject Name</th><th>Semester Name</th><th>Department</th>
<th>Update</th></tr>";

	$que=mysqli_query($con,"select *  from subject");
	while($res=mysqli_fetch_array($que))
	{
	echo "<Tr>";
	echo "<td>".$res['subject_id']."</td>" ;
	echo "<td>".$res['subject_name']."</td>" ;
	
	//display semester name
	$que1=mysqli_query($con,"select *  from semester where sem_id='".$res['sem_id']."'");
	$res1=mysqli_fetch_array($que1);
	
	
	echo "<td>".$res1['semester_name']."</td>" ;
	
	//display department name
	$que2=mysqli_query($con,"select *  from department where department_id='".$res['department_id']."'");
	$res2=mysqli_fetch_array($que2);
	
	
	echo "<td>".$res2['department_name']."</td>" ;
	echo "<td><a href='admindashboard.php?info=updatesubject&subject_id=$res[subject_id]' class='btn btn-warning'>Update</a></td>";
	?>
    
<!-- <td><a href='javascript:deleteData("<?php// echo  $res[subject_id];?>")'>Delete</a></td>
 -->	<?php 
	echo "</tr>";
	}
	
echo "</table>";	

?>
