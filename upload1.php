<?php
if( isset( $_FILES['file'] ) )
{
	$allowedExtensions = array("png", "jpg", "jpeg");

	$fileExtension = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);

	if( in_array($fileExtension, $allowedExtensions) )
	{
		if ( ( $_FILES["file"]["size"] < 2000000 ) )
		{
			$targetFile = "./uploads/" . basename($_FILES["file"]["name"]);

			if( move_uploaded_file( $_FILES["file"]["tmp_name"], $targetFile ) )
			{
		        echo "File uploaded successfully";
		    }
		}
	}
}
?>