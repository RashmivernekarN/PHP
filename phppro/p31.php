<?php
/*
File Operation in PHP
1) Opening a file
2) Reading a file
3) Writing a file
4) Closing a file

1) Opening file


To Open any file we need fopen() function. it require two arguments
fopen('Name_of_the_file','Mode_of_the_file')

Mode_of_file 
a) r -> Opens the file for reading only. 
Pointer at the beginning of the file
b) r+ ->Opens the file for reading & writing . 
Pointer at the beginning of the file
c) w ->Opens the file for writing only.
Pointer at the beginning of the file and truncate the 
       file to zero length.
	   if file doesn't exist then it attempts to create file
d) w+ ->Opens the file for reading & writing.
Pointer at the beginning of the file and truncate the 
       file to zero length.
	   if file doesn't exist then it attempts to create file
e) a -> Opens the file for writing only. 
places the pointer at the end of the file. if doesn't 
        exist then it attempts to create files.
f) a+ -> Opens the file for reading and writing. 
places the pointer at the end of the file. if doesn't 
        exist then it attempts to create files.


4) Closing a file
To Close the file we need fclose() function.
it require file pointer as a argument		


2) Reading File

a) Open the file using fopen()function.
b) Get the file length using filesize() function.
c) Read the file content using fread() function.
d) Close the file with fclose() function.


3) Writing File
a) Open the file using fopen()function.
b) Write the file content using fwrite()function
c) close the file with fclose() function.
*/
?>
<html>
	<head><title>Reading the File</title></head>
	<body>
		<?php
		$filename="files/test.txt";
		/* File Name */
		$file_loc=$_SERVER['DOCUMENT_ROOT']."phppro/files/test.txt";
		$file=fopen($filename,"r");		
		/* Opening the File with Read Mode */
		if($file==false){
		//if(file_exists($file_loc)){
			echo " File Not Exsist...!!";
			exit();
		}else{
			$filesize=filesize($filename);
			$filecontent=fread($file,$filesize);
			fclose($file);
			
			echo " File Size : $filesize bytes";
			echo "<br/> <pre>$filecontent</pre>";
		}
		?>
	</body>
</html>




