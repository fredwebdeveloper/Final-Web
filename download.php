<?php

		$FileName=$_FILES['pdf']['name'];
		$TmpName=$_FILES['pdf']['tmp_name'];
		
			move_uploaded_file($TmpName,$FileName);
				echo("File Successfully Uploaded");

					

?>

