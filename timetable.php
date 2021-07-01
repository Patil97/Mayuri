<script>
	function deleteData(id)
	{
		if(confirm("You want to delete ?"))
		{
		window.location.href="delete_timetable.php?timeschedule_id="+id;
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

echo "<tr class='danger'><th colspan='9'><a href='admindashboard.php?info=add_timetable' class='btn btn-primary'>Add New</a></th></tr>";

echo "<Tr>
<th>Id</th>
<th>Department</th>
<th>Subject Name</th>
<th>Semester Name</th>
<th>Teacher Name</th>
<th>Time</th>
<th>Date</th>
<th>Day</th>
<th>Update</th>
</tr>";

$que=mysqli_query($con,"select *  from timeschedule");
	while($res=mysqli_fetch_array($que))
	{
	echo "<tr>";
	echo "<td>".$res['timeschedule_id']."</td>" ;
	
	//display department name
	$que2=mysqli_query($con,"select *  from department where department_id='".$res['department_name']."'");
	$res2=mysqli_fetch_array($que2);
	
	echo "<td>".$res2['department_name']."</td>" ;
	
	
	
	//display subject name
	$que3=mysqli_query($con,"select *  from subject where subject_id='".$res['subject_name']."'");
	$res3=mysqli_fetch_array($que3);
	echo "<td>".$res3['subject_name']."</td>" ;
	
	//display semester name
	$que4=mysqli_query($con,"select *  from semester where sem_id='".$res['semester_name']."'");
	$res4=mysqli_fetch_array($que4);
	echo "<td>".$res4['semester_name']."</td>" ;
	
	
	//display teacher name
	$que5=mysqli_query($con,"select *  from teacher where teacher_id='".$res['teacher_id']."'");
	$res5=mysqli_fetch_array($que5);
	echo "<td>".$res5['name']."</td>" ;
	
	
	echo "<td>".$res['time']."</td>" ;
	echo "<td>".$res['date']."</td>" ;
	echo "<td>".$res['day']."</td>" ;


	echo "<td><a href='admindashboard.php?info=updatetimetable&timeschedule_id=$res[timeschedule_id]' class='btn btn-warning'>Update</a></td>";
	?>
    
	<!-- <td>
	<a href='javascript:deleteData("<?php //echo  $res[timeschedule_id];?>")'>Delete</a></td> -->
	<?php
	echo "</tr>";
	}
	echo "</table>";	

?>