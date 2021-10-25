<h1>"Add delivary man"</h1>
<br>
<?php
   	

	  
	   $formdata = array(
	      'Name'=> $_POST["pName"],
	      'Number'=> $_POST["mNumber"],
	      'email'=>$_POST["email"],
          'address'=> $_POST["address"],
         
	   );
       $existingdata = file_get_contents('data.json');
       $tempJSONdata = json_decode($existingdata);
       $tempJSONdata[] =$formdata;
       
	   $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
	   
	  
	   if(file_put_contents("data.json", $jsondata)) {
	        echo "Data successfully saved <br>";
	    }
	   else 
	        echo "no data saved";

     $data = file_get_contents("data.json");
	 $mydata = json_decode($data);

    
?>

<br><!DOCTYPE html>
<html>
<body>

<button onclick="goBack()">Add more</button>

<script>
function goBack() {
  window.history.back();
}
</script>

</body>
</html>
<br>

<br><h3><a href="../Delivary/data.json"> View all details</a></h53<br>
