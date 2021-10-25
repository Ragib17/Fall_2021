<h1>"Request to add profile"</h1><br>
<?php
   	

	   //Get form data
	   $formdata = array(
	      'firstName'=> $_POST["firstName"],
	      'lastName'=> $_POST["lastName"],
	      'email'=>$_POST["email"],
	      'mobile'=> $_POST["mobile"],
          'address'=> $_POST["address"],
          'workType'=> $_POST["workType"],
	   );
       $existingdata = file_get_contents('data.json');
       $tempJSONdata = json_decode($existingdata);
       $tempJSONdata[] =$formdata;
       //Convert updated array to JSON
	   $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
	   
	  
	   if(file_put_contents("data.json", $jsondata)) {
	        echo "Data successfully saved <br>";
	    }
	   else 
	        echo "no data saved";

     $data = file_get_contents("data.json");
	 $mydata = json_decode($data);

    
?>
<br>
<!DOCTYPE html>
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

<h3><a href="../AddProfile/data.json"> View add profile requests</a></h53<br>
