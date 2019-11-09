<?php

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form id="product" name="product" method="post" action="../model/productinsert.php" enctype="multipart/form-data"  " >

  <div>Product ID:</div>
    <input id="picid"  name="pid" type="text" >
    <div>Product Name:</div>
    <input id="picname"  name="pname" type="text"  >

	<div>Product Price:</div>
	<input id="picprice"  name="pprice" type="text"  >

    <div>Product Image:</div>

      <input type="file" name="file_img" id="file_img" >


     <div>Product Description:</div>

     <textarea name="pdesc" id="pdesc" rows="3" cols="40"></textarea>

    <div><input type="submit" name="btn_upload" button id="addnewprouct" value="Add new product"   >Add new product</button> </div>
  </form>

</body>
</html>