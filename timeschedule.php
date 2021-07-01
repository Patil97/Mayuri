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
echo "<br><br><br>";
echo "<table id='customers'>";

echo "<Tr>
<th><font >Time Schdule Id</font></th>
<th><font >Department</font></th>
<th><font >Subject Name</font></th>
<th><font >Semester Name</font></th>
<th><font >Teacher Name</font></th>
<th><font>Time</font></th>
<th><font >Date</font></th>
<th><font >Day</font></th>

</tr>";

$que=mysqli_query($con,"select *  from timeschedule where teacher_id='".$_SESSION['teacher_id']."'");
	while($res=mysqli_fetch_array($que))
	{
	echo "<tr>";
	echo "<td >".$res['timeschedule_id']."</td>" ;
	
	//display department name
	$que2=mysqli_query($con,"select *  from department where department_id='".$res['department_name']."'");
	$res2=mysqli_fetch_array($que2);
	
	echo "<td >".$res2['department_name']."</td>" ;
	
	
	
	//display subject name
	$que3=mysqli_query($con,"select *  from subject where subject_id='".$res['subject_name']."'");
	$res3=mysqli_fetch_array($que3);
	echo "<td >".$res3['subject_name']."</td>" ;
	
	//display semester name
	$que4=mysqli_query($con,"select *  from semester where sem_id='".$res['semester_name']."'");
	$res4=mysqli_fetch_array($que4);
	echo "<td >".$res4['semester_name']."</td>" ;
	
	
	//display teacher name
	$que5=mysqli_query($con,"select *  from teacher where teacher_id='".$res['teacher_id']."'");
	$res5=mysqli_fetch_array($que5);
	echo "<td >".$res5['name']."</td>" ;
	
	echo "<td >".$res['time']."</td>" ;
	echo "<td >".$res['date']."</td>" ;
	echo "<td >".$res['day']."</td>" ;

	?>
   
	<?php
	echo "</tr>";
	}
	echo "</table>";	

?>