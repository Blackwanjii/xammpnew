<?php
//your code goes here
$myname="Raychelle Munene";
$finaloutput="My name is called".' '.$myname;

//echo $finaloutput;

//Arrays
//$students= array("Sheila","Caleb","Emmanuel","Virginia","Stephen");
//echo $students [2];
//echo count ($students);





$programmarks = array("Assignments"=>25,
                       "CAT"=>20,
                       "Attendance"=>8,
                       "Projects"=>45,
                    );
echo "CAT:" .$programmarks["CAT"];

//Multidimentional Arrays
$webtechnologies = array(
    'frontend'=> array('HTML','CSS','JS','Bootstrap'),
    'backened' => array('PHP','JS','Python','JAVA'),
    'databases' => array('MySQL','PostgreSQL','MangoBD','Firebase')
);


echo $webtechnologies['frontend'] [2]; //JS will be our output;
echo $webtechnologies['backened'] [0];
echo $webtechnologies['databases'] [2];

?>
