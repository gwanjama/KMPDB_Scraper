<?php

require_once('simple_html_dom.php');
include_once("doctor.php");

$first_page = 1;
$last_page = 1;
$docs = array();
$file = 'doctors.txt';

for($i=$first_page; $i<=$last_page; $i++){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, 'http://medicalboard.co.ke/online-services/retention/?currpage='.$i);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$response = curl_exec($ch);
	curl_close($ch);
	
	$html = new simple_html_dom();
	$html->load($response);
	
	foreach($html->find('div#main table tbody tr') as $tablerow){
		$doc = array();	
		foreach($tablerow->find('td') as $data){
			if(trim($data->plaintext) != "View/Print"){
				$doc[] = trim($data->plaintext);
			}
		}
		if(!empty($doc)){
			$docs[] = $doc;
		}		
		reset($doc);
	}
	
}



for($k=0; $k<count($docs); $k++){
	$name = $docs[$k][0];
	$regDate = $docs[$k][1];
	$regID = $docs[$k][2];
	$address = $docs[$k][3];
	$qualifications = $docs[$k][4];
	$specialty = $docs[$k][5];
	$subSpecialty = $docs[$k][6];
	$doctor = new Doctor($name, $regDate, $regID, $address, $qualifications, $specialty, $subSpecialty);
	
	//echo ($k+1)." - ".$doctor->name." - ".$doctor->regID." - ".$doctor->regDate."<br>";
	
	$current = file_get_contents($file);
	$current .= ($k+1)." - ".$doctor->name." - ".$doctor->regID."\n";
	file_put_contents($file, $current);
}





?>