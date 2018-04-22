<?php
					if(isset($_POST['submit']))
					{
					$f="Kitchenpops.pdf";
					$file=("file_down/$f");
					$filetype=filetype($file);
					$filename=basename($file);
					header("Content-type: ".$filetype);
                     header("Content-Disposition: attachment; filename= ".$filename);
                     readfile($file);
                 }
                 ?>