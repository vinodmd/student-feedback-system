<h1 align="center" style="text-decoration:underline"><a href="">Admin Dashboard</a></h1>
<?php 
//all complaints
$qq=mysqli_query($conn,"select * from countdata");
$row = mysqli_fetch_assoc($qq)	;
echo "<h2 style='color:green'>Total Number of Faculty :".$row["factcount"]."</h2>";	

//all emegency compalints
			
echo "<h2 style='color:orange'>Total Number of Student :".$row["studcount"]."</h2>";	


//all users
		
echo "<h2 style='color:black'>Total Number feedback given by users  : ".$row["feedcount"]."</h2>";	


					

?>
