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
echo "<br><br><br>";
echo "<table id='customers'>";

echo "<Tr>
<th><font >Department</font></th>
<th><font >Semester</font></th>
<th><font >Subject Name</font></th>
<th><font >Teacher Name</font></th>
<th><font >Date</font></th>
<th><font >Time</font></th>
<th>Day</th>

</tr>";
//get user's semester id

   
   
$que4=mysqli_query($con,"select * from student where eid='".$_SESSION['e_id']."'");
$res4=mysqli_fetch_array($que4);


	$que=mysqli_query($con,"select *  from timeschedule where semester_name='".$res4['sem_id']."'");
	while($res=mysqli_fetch_array($que))
	{
	echo "<Tr>";
	
	
	
	//display department name
	$que22=mysqli_query($con,"select *  from department where department_id='".$res['department_name']."'");
	$res22=mysqli_fetch_array($que22);
	
	echo "<td >".$res22['department_name']."</td>" ;
	
	
	//display semester name
	$que4=mysqli_query($con,"select *  from semester where sem_id='".$res4['sem_id']."'");
	$res4=mysqli_fetch_array($que4);
	echo "<td >".$res4['semester_name']."</td>" ;
	
	
	
	//display subject name
	$que33=mysqli_query($con,"select *  from subject where subject_id='".$res['subject_name']."'");
	$res33=mysqli_fetch_array($que33);
	echo "<td >".$res33['subject_name']."</td>" ;
	
	
	//display teacher name
	$que5=mysqli_query($con,"select *  from teacher where teacher_id='".$res['teacher_id']."'");
	$res5=mysqli_fetch_array($que5);
	echo "<td >".$res5['name']."</td>" ;
	
	
	echo "<td >".$res['date']."</td>" ;
	echo "<td >".$res['time']."</td>" ;
		echo "<td>".$res['day']."</td>" ;
				
	?>
    
	<?php 
	echo "</tr>";
	}
	
echo "</table>";	

?>
