<?php
   	

	   //Get form data
	   $formdata = array(
	      'pName'=> $_POST["pName"],
	      'pNumber'=> $_POST["pNumber"],
	      'pDate'=> $_POST["pDate"],
          'eDate'=> $_POST["eDate"],
          'quantity'=> $_POST["quantity"]
          
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
