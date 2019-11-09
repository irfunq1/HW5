<?php
include("../controller/config.php");
$tbl_cuinfo="CREATE TABLE IF NOT EXISTS	cuinfo(
cuid INT(11) NOT NULL auto_increment,
PRIMARY KEY(cuid),
name VARCHAR(50) NOT NULL,
phone VARCHAR(13) NOT NULL,
uname  VARCHAR(13) NOT NULL,
password  VARCHAR(18) NOT NULL
)";
$cuinfo=mysqli_query($myconn,$tbl_cuinfo);

if($cuinfo===TRUE)
{
	echo "Cuinfo tabel created ):";
}
else
{
		echo "Cuinfo tabel not created (:";

}

//------product info----------

$tbl_prodinfo = "CREATE TABLE IF NOT EXISTS prodinfo(

							prod_id INT NOT NULL,
							PRIMARY KEY(prod_id) ,
							name VARCHAR(50) NOT NULL,
							img_name VARCHAR(50) NOT NULL,
							img_path VARCHAR(50) NOT NULL ,
							img_type VARCHAR(50) NOT NULL ,
							price INT(10) NOT NULL,
							prodesc VARCHAR(500) NOT NULL

							)";


$query = mysqli_query($myconn, $tbl_prodinfo);

if ($query === TRUE) {
	echo "<h3>Product  INFORMATI table created OK :) </h3>";
} else {
	echo "<h3>Product INFORMAT table NOT created :( </h3>";
}



?>