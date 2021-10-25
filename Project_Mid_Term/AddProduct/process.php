

<h1>"Add product"</h1>
<?php
   	

	   //Get form data
	   $formdata = array(
	      'Product Name'=> $_POST["pName"],
	      'Product Number'=> $_POST["pNumber"],
	      'Product Price'=>$_POST["pPrice"],
	      'Production Date'=> $_POST["pDate"],
          'Expire Date'=> $_POST["eDate"],
          'Quantity'=> $_POST["quantity"]
          
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
<h3><a href="../AddProduct/data.json"> View add product requests </a></h53<br>
