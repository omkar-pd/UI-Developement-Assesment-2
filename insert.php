<!DOCTYPE html>
<html>

<body>

<?php

$conn = mysqli_connect("localhost", "root", "", "job");
if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}

        $jDesignation = $_REQUEST['jDesignation'];
		$jDescription = $_REQUEST['jDescription'];
		$keywords = $_REQUEST['keywords'];
		$wExperience = $_REQUEST['wExperience'];
		$vacancies = $_REQUEST['vacancies'];
        $CTC = $_REQUEST['CTC'];
        $jLocation = $_REQUEST['jLocation'];
        $industry = $_REQUEST['industry'];
        $fArea = $_REQUEST['fArea'];
        $jRole = $_REQUEST['jRole'];
        $ugQualification = $_REQUEST['ugQualification'];
        $pgQualification = $_REQUEST['pgQualification'];
        $docPhd = $_REQUEST['docPhd'];
        $cName = $_REQUEST['cName'];
        $aCompany = $_REQUEST['aCompany'];
        $date = date('Y/m/d');
        $lastDate = $_REQUEST['lastDate'];
        $eType= $_REQUEST['eType'];


        $sql = "INSERT INTO jobposting VALUES ('$jDesignation',
			'$jDescription','$keywords','$wExperience','$vacancies','$CTC','$jLocation','$industry','$fArea','$jRole','$ugQualification','$pgQualification','$docPhd','$cName','$aCompany','$date','$lastDate','$eType')";

            if(mysqli_query($conn, $sql)){
			echo ("<script LANGUAGE='JavaScript'>
            window.alert('Job Posted Succesfully');
             window.location. href='./jobapply.php';
</script>"); }else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
?>
    
    <h2 class="text-success">Job Posted Successfully <a href="./index.html"> Job page </a>to see the posted job</h2>
        </body>
        </html>