<?php
 require_once "class/Candidate.php";

  
		$candidate=new Candidate();
	 if (isset($_POST['submit'])) {
	
		$data=$candidate->searchCandidate($_POST);
	
             			  	
		 
  }
else{
	$data=$candidate->searchCandidate();
}
	 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

<link rel="stylesheet" type="text/css" href="pages/css/formstyle.css"> 
	
</head>

<body>
    <div class="dashboard">

        <h2> CANDIDATE DETAILS</h2>
		<br>
		<br>
		<form method="post">
		<label>Search by Position :</label>
			<select name="position">  
  		  <option value="">Select</option>}  
		  <option value="Manager">Manager</option>  
		  <option value="Sales Executive">Sales Executive</option>  
		  <option value="Trainee">Trainee</option>  
		 </select>   
			
			<label>Search by Department:</label>
			<select name="department">  
  		  <option value="">Select</option>}  
		  <option value="IT">IT</option>  
		  <option value="Marketing">Marketing</option>  
		  <option value="Management">Management</option>  
		  <option value="HR">HR</option>  
		 </select>   
		 <input type="submit" value="Submit" name="submit"><br><br>
		 <input type="submit" value="View All" name="submit">
</form><br>


    </div>

	<table id="table1">
  <tr>
	<th>Full Name</th>
  	<th>Position Applied</th>
	<th>Department</th> 
	<th>Contact No</th>
  	<th>Email</th>
	<th>Educational Qual.</th> 
	<th>Professional Qual.</th>
  </tr>
		<?php
		foreach($data as $row){
			echo("<tr>
	<td>".$row['fullname']."</td>
  	<th>".$row['position']."</th>
	<th>".$row['department']."</td> 
	<th>".$row['contactno']."</td>
	<th>".$row['email']."</td>
	<th>".$row['eduqual']."</td>
	<th>".$row['profqual']."</td>
	
  </tr>");
		}
		?>
  
 </table>
	
	
	
</body>

</html>