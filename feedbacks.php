<html>
<style>
.topnav 
{
background-color: #FFFAC0;
overflow: hidden;
}
.topnav a
{
float: left;
color: black;
text-align: center;
padding: 14px 16px;
text-decoration: none;
font-size: 14px;
}
.topnav a: hover
{
background-color: #ddd;
color:black;
}
.topnav a.active
{
background-color: red;
color: white;
}
.header
{
overflow: hidden;
background-color: #F0FFF0;
padding:5px 5px;
}
.footer
{
overflow: hidden;
background-color: #F0FFF0;
padding:5px 5px;
}

</style> 

<<?php include('sidebar.php'); ?>
<body bgcolor="grey">
<div class="topnav">
<a href="shome.html" class="active">BACK</a>
</div>
<center><h1><u>FEEDBACK</u></h1></center>
<font color="white">
	<div class = "pages">
<table>

<form  method="POST">
<tr>

<td>

Select your teacher:</td>

<td><select name="txt">
<option value="">-select-</option>
<option> Niby</option>
<option> Arya </option>
<option> Anet </option>
<option> Divya </option>
<option> Preethy </option>
</td></tr>
<td>
<h1><tr><td>*presentation style*</tr></td></h1>
<td>1.Classroom Management(with due weightage to the number of students in the class:</td>  
<td><select name="txt1">
<option value="">-select-</option>
<option> Excellent</option>
<option> Good </option>
<option> Avearage </option>
<option> Bad </option>
</td></tr>
</select>
<br/>


<tr>
<td>2.communication skills and voice modulation:</td>
<td><select name="txt2">
<option value="">-select-</option>
<option> Excellent</option>
<option> Good </option>
<option> Avearage </option>
<option> Bad </option>
</td></tr>
</select>
<h1><tr><td>*Subject Expertise*</td></tr></h1>
<tr>
<td>3.subject knowledge and prepardness for classes(with due weightage to the academic perfomance of the student:</td>
<td><select name="txt3">
<option value="">-select-</option>
<option> Excellent</option>
<option> Good </option>
<option> Avearage </option>
<option> Bad </option>
</td></tr>
</select>
<h1><tr><td>*Timelineness and Regularity*</td></tr></h1>
<tr><td>4.punchuality and regularity:</td>
<td><select name="txt4">
<option value="">-select-</option>
<option> Excellent</option>
<option> Good </option>
<option> Avearage </option>
<option> Bad </option></td></tr>
</select>
<tr><td>5.instruction and effective completion of syllabus in time:</td>
<td><select name="txt5">
<option value="">-select-</option>
<option> Excellent</option>
<option> Good </option>
<option> Avearage </option>
<option> Bad </option></td></tr>
</select>
<h1><tr><td>*course Outcome*</td></tr></h1><br>
<tr><td>
6.specific comment on the perfomance of the teacher:</td>
<td><input type="text" name="txt6" placeholder="comments"></td></tr>
<tr><td></td><td><input type="submit" value="submit" name="submit"></td></tr>
</div>
</form>
</table>
</body>
</html>

