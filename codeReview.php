<!doctype html>
<!-- 
    Odukoya Ayodeji S. 2014 
    
    Run on a server and download the CSV file or check the directory for the file
    
    
    NOTE: Don't leave the file open when running this script if you have run this program once and opened the CSV file. Thanks 
-->
<html>
    <head>
        <meta charset="utf-8">
        <title>Shopp!ng Code Review</title>
    </head>
    <body><center>
        <?php 
            if(file_exists("bookClass.php")) // checks if the book class exists before proceeding
            {
	            require_once("bookClass.php"); // requiring the book class containing
            }
            else
            {
	            echo "<p>Some file missing </p>"; // error message generated if book class file is missing
	            return;
            }
		?>	
        <h1>Books File - <a href="newDoc.csv">Download CSV file</a></h1> <!--download link for the created CSV file -->
		<?php
		     //creating the CSV file
			 $path = "newDoc.csv";
			 $space = "";
			$fhandler = fopen($path, "a+"); // file handler
			$header = "Title,Author,Shelfmark,Barcode,Location code,Location description,Checkouts"; //Adding the Column names
			
			/** Adding the Separators for the three lists*/
			fputcsv($fhandler,explode(",",$header));
			fputcsv($fhandler,explode(",",$space));
			$separator = "11-04-2014,Items on Reserved for";
			fputcsv($fhandler,explode(",",$separator));
			$lecturer = "Rudy, K. :  Art of Renaissance Italy and Norther11-04-2014*";
			fputcsv($fhandler,explode("*",$lecturer));
		    $courseCode = "AH1001ULP";
			fputcsv($fhandler,explode(",",$courseCode));
		    $courseTitle = "Art History";
			fputcsv($fhandler,explode(",",$courseTitle));
		    $loc = "PERMANENT 2013/14 (Main Library)";
			fputcsv($fhandler,explode(",",$loc));
			fputcsv($fhandler,explode(",",$space));
		    foreach($bookObject1 as $aBook)
	        {
		       $details = $aBook->getAttributes();
			   fputcsv($fhandler,explode(",*",$details));
	        }
			
			/** Adding the Separators for the three lists*/
			fputcsv($fhandler,explode(",",$space));
			$separator = "11-04-2014,Items on Reserved for";
			fputcsv($fhandler,explode(",",$separator));
			$lecturer = "Rudy, K. :  Art of Renaissance Italy and Norther11-04-2014*";
			fputcsv($fhandler,explode("*",$lecturer));
		    $courseCode = "AH1001ULP";
			fputcsv($fhandler,explode(",",$courseCode));
		    $courseTitle = "Art History";
			fputcsv($fhandler,explode(",",$courseTitle));
		    $loc = "PERMANENT 2013/14 (Main Library)";
			fputcsv($fhandler,explode(",",$loc));
			fputcsv($fhandler,explode(",",$space));
			//displays every book on list 1
	        foreach($bookObject2 as $aBook)
	        {
		        $details = $aBook->getAttributes();
				fputcsv($fhandler,explode(",*",$details));
	        }
			
			/** Adding the Separators for the three lists*/
			fputcsv($fhandler,explode(",",$space));
			$separator = "11-04-2014,Items on Reserved for";
			fputcsv($fhandler,explode(",",$separator));
			$lecturer = "Rudy, K. :  Art of Renaissance Italy and Norther11-04-2014*";
			fputcsv($fhandler,explode("*",$lecturer));
		    $courseCode = "AH1001ULP";
			fputcsv($fhandler,explode(",",$courseCode));
		    $courseTitle = "Art History";
			fputcsv($fhandler,explode(",",$courseTitle));
		    $loc = "PERMANENT 2013/14 (Main Library)";
			fputcsv($fhandler,explode(",",$loc));
			fputcsv($fhandler,explode(",",$space));
			//displays every book on list 1
            foreach($bookObject3 as $aBook)
	        {
		        $details = $aBook->getAttributes();
				fputcsv($fhandler,explode(",*",$details));
	        }
			
			fclose($fhandler);
        ?>
            
    </center></body>
</html>