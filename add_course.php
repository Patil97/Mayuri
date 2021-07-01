<?php 
include('../config.php');
extract($_POST);
if(isset($save))
{
$que=mysqli_query($con,"select * from department where department_name='$c'");	
$row=mysqli_num_rows($que);
	if($row)
	{
	$err="<font color='red'>This user already exists</font>";
	}
	else
	{
mysqli_query($con,"insert into department values('','$c')");	

	$err="<font color='blue'>Congrats Your Data Saved!!!</font>";
	}
	
}

?>
<div class="row">
<div class="col-md-5">
<br><br>
<h2>Add Course</h2>
<script src="validation.js"></script>
<form method="POST" enctype="multipart/form-data">
  <table  class="table">
  <tr>
  <td colspan="2"><?php echo @$err; ?></td>
  </tr>
 
   <tr>
    <th width="237" scope="row">Course Name </th>
    <td width="213"><input type="text" onkeypress="javascript:return isString(event)"  name="c" class="form-control"/></td>
  </tr>
  <tr>
    <td colspan="2" align="center">
	<input type="submit" value="Add  Course" name="save" class="btn btn-success" />
	
	<input type="reset" value="Reset" class="btn btn-success"/>
	
	</td>
  </tr>
  
  </table>
</form>
</div>
</div>
