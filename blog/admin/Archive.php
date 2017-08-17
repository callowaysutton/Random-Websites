<?php
exec('robocopy C:\xampp\htdocs\data\posts\ C:\xampp\htdocs\data\archive\posts *.* /E /XD C:\xampp\htdocs\data\archive\posts /move 2>&1'); 
exec('mkdir C:\xampp\htdocs\data\posts 2>&1'); # This and the above code will send the posts to the archive then make a new folder
exec('robocopy C:\xampp\htdocs\data\uploads\ C:\xampp\htdocs\data\archive\uploads *.* /E /XD C:\xampp\htdocs\data\archive\uploads /move 2>&1');
exec('mkdir C:\xampp\htdocs\data\uploads 2>&1');# This and the above code will send the uploaded pictures to the archive then make a new folder
exec('echo Finished Archiving 2>&1',$output);
print_r($output);
ob_end_clean();
print_r("The Archival Process is Done!");
?> 