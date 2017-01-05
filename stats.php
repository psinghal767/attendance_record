<?php
$con=mysqli_connect('localhost','root','','timetable');
$sel=mysqli_query($con,"select * from attendance");



$de=array('present'=>0, 'absent'=>0,'massbunk'=>0,'teachabs'=>0);
$delab=array('present'=>0, 'absent'=>0,'massbunk'=>0,'teachabs'=>0);
$dbms=array('present'=>0, 'absent'=>0,'massbunk'=>0,'teachabs'=>0);
$dbmslab=array('present'=>0, 'absent'=>0,'massbunk'=>0,'teachabs'=>0);
$coa=array('present'=>0, 'absent'=>0,'massbunk'=>0,'teachabs'=>0);
$se=array('present'=>0, 'absent'=>0,'massbunk'=>0,'teachabs'=>0);
$selab=array('present'=>0, 'absent'=>0,'massbunk'=>0,'teachabs'=>0);
$dm=array('present'=>0, 'absent'=>0,'massbunk'=>0,'teachabs'=>0);
$fom=array('present'=>0, 'absent'=>0,'massbunk'=>0,'teachabs'=>0);

while($row=mysqli_fetch_array($sel)){
		//mon
		if($row['day']=="MON"){

			//de
			if($row['9-10']==1){
				$de['present']+=1;
			}
			elseif($row['9-10']==2){
				$de['absent']+=1;
			}
		
			elseif($row['9-10']==3){
				$de['massbunk']+=1;
			}
		
			elseif($row['9-10']==4){
				$de['teachabs']+=1;
			}

			//dbms
			if($row['11-12']==1){
				$dbms['present']+=1;
			}
			elseif($row['11-12']==2){
				$dbms['absent']+=1;
			}
		
			elseif($row['11-12']==3){
				$dbms['massbunk']+=1;
			}
		
			elseif($row['11-12']==4){
				$dbms['teachabs']+=1;
			}

			

			//dbms lab

			if($row['1-2']==1){
				$dbmslab['present']+=1;
			}
			elseif($row['1-2']==2){
				$dbmslab['absent']+=1;
			}
		
			elseif($row['1-2']==3){
				$dbmslab['massbunk']+=1;
			}
		
			elseif($row['1-2']==4){
				$dbmslab['teachabs']+=1;
			}

			//de lab

			if($row['3-4']==1){
				$delab['present']+=1;
			}
			elseif($row['3-4']==2){
				$delab['absent']+=1;
			}
		
			elseif($row['3-4']==3){
				$delab['massbunk']+=1;
			}
		
			elseif($row['3-4']==4){
				$delab['teachabs']+=1;
			}


			
				
		}
		//tue
		elseif($row['day']=="TUE"){
			//de
			if($row['9-10']==1){
				$de['present']+=1;
			}
			elseif($row['9-10']==2){
				$de['absent']+=1;
			}
		
			elseif($row['9-10']==3){
				$de['massbunk']+=1;
			}
		
			elseif($row['9-10']==4){
				$de['teachabs']+=1;
			}

			//coa
			if($row['10-11']==1){
				$coa['present']+=1;
			}
			elseif($row['10-11']==2){
				$coa['absent']+=1;
			}
		
			elseif($row['10-11']==3){
				$coa['massbunk']+=1;
			}
		
			elseif($row['10-11']==4){
				$coa['teachabs']+=1;
			}

			//se lab
			if($row['11-12']==1){
				$selab['present']+=1;
			}
			elseif($row['11-12']==2){
				$selab['absent']+=1;
			}
		
			elseif($row['11-12']==3){
				$selab['massbunk']+=1;
			}
		
			elseif($row['11-12']==4){
				$selab['teachabs']+=1;
			}

			//dm
			if($row['2-3']==1){
				$dm['present']+=1;
			}
			elseif($row['2-3']==2){
				$dm['absent']+=1;
			}
		
			elseif($row['2-3']==3){
				$dm['massbunk']+=1;
			}
		
			elseif($row['2-3']==4){
				$dm['teachabs']+=1;
			}

			//fom
			if($row['3-4']==1){
				$fom['present']+=1;
			}
			elseif($row['3-4']==2){
				$fom['absent']+=1;
			}
		
			elseif($row['3-4']==3){
				$fom['massbunk']+=1;
			}
		
			elseif($row['3-4']==4){
				$fom['teachabs']+=1;
			}

			
				
		}

		//wed
		elseif($row['day']=="WED"){

			//se

			if($row['11-12']==1){
				$se['present']+=1;
			}
			elseif($row['11-12']==2){
				$se['absent']+=1;
			}
		
			elseif($row['11-12']==3){
				$se['massbunk']+=1;
			}
		
			elseif($row['11-12']==4){
				$se['teachabs']+=1;
			}

			//dbms
			if($row['1-2']==1){
				$dbms['present']+=1;
			}
			elseif($row['1-2']==2){
				$dbms['absent']+=1;
			}
		
			elseif($row['1-2']==3){
				$dbms['massbunk']+=1;
			}
		
			elseif($row['1-2']==4){
				$dbms['teachabs']+=1;
			}

			//coa
			if($row['2-3']==1){
				$coa['present']+=1;
			}
			elseif($row['2-3']==2){
				$coa['absent']+=1;
			}
		
			elseif($row['2-3']==3){
				$coa['massbunk']+=1;
			}
		
			elseif($row['2-3']==4){
				$coa['teachabs']+=1;
			}

			//dm
			if($row['3-4']==1){
				$dm['present']+=1;
			}
			elseif($row['3-4']==2){
				$dm['absent']+=1;
			}
		
			elseif($row['3-4']==3){
				$dm['massbunk']+=1;
			}
		
			elseif($row['3-4']==4){
				$dm['teachabs']+=1;
			}

			//fom
			if($row['4-5']==1){
				$fom['present']+=1;
			}
			elseif($row['4-5']==2){
				$fom['absent']+=1;
			}
		
			elseif($row['4-5']==3){
				$fom['massbunk']+=1;
			}
		
			elseif($row['4-5']==4){
				$fom['teachabs']+=1;
			}
			
				
		}
		//thu
		elseif($row['day']=="THU"){


			//dm
			if($row['11-12']==1){
				$dm['present']+=1;
			}
			elseif($row['11-12']==2){
				$dm['absent']+=1;
			}
		
			elseif($row['11-12']==3){
				$dm['massbunk']+=1;
			}
		
			elseif($row['11-12']==4){
				$dm['teachabs']+=1;
			}

			//dbms
			if($row['1-2']==1){
				$dbms['present']+=1;
			}
			elseif($row['1-2']==2){
				$dbms['absent']+=1;
			}
		
			elseif($row['1-2']==3){
				$dbms['massbunk']+=1;
			}
		
			elseif($row['1-2']==4){
				$dbms['teachabs']+=1;
			}

			//coa
			if($row['2-3']==1){
				$coa['present']+=1;
			}
			elseif($row['2-3']==2){
				$coa['absent']+=1;
			}
		
			elseif($row['2-3']==3){
				$coa['massbunk']+=1;
			}
		
			elseif($row['2-3']==4){
				$coa['teachabs']+=1;
			}

			//se
			if($row['3-4']==1){
				$se['present']+=1;
			}
			elseif($row['3-4']==2){
				$se['absent']+=1;
			}
		
			elseif($row['3-4']==3){
				$se['massbunk']+=1;
			}
		
			elseif($row['3-4']==4){
				$se['teachabs']+=1;
			}
			
				
		}
		//fri
		elseif($row['day']=="FRI"){

			
			//coa
			if($row['1-2']==1){
				$coa['present']+=1;
			}
			elseif($row['1-2']==2){
				$coa['absent']+=1;
			}
		
			elseif($row['1-2']==3){
				$coa['massbunk']+=1;
			}
		
			elseif($row['1-2']==4){
				$coa['teachabs']+=1;
			}

			//se
			if($row['2-3']==1){
				$se['present']+=1;
			}
			elseif($row['2-3']==2){
				$se['absent']+=1;
			}
		
			elseif($row['2-3']==3){
				$se['massbunk']+=1;
			}
		
			elseif($row['2-3']==4){
				$se['teachabs']+=1;
			}

			//dm
			if($row['3-4']==1){
				$dm['present']+=1;
			}
			elseif($row['3-4']==2){
				$dm['absent']+=1;
			}
		
			elseif($row['3-4']==3){
				$dm['massbunk']+=1;
			}
		
			elseif($row['3-4']==4){
				$dm['teachabs']+=1;
			}

			//fom
			if($row['4-5']==1){
				$fom['present']+=1;
			}
			elseif($row['4-5']==2){
				$fom['absent']+=1;
			}
		
			elseif($row['4-5']==3){
				$fom['massbunk']+=1;
			}
		
			elseif($row['4-5']==4){
				$fom['teachabs']+=1;
			}
			
				
		}


	


}
echo "dbms:";
print_r($dbms);
echo "<br>coa:";
print_r($coa);
echo "<br>se:";
print_r($se);
echo "<br>dm:";
print_r($dm);
echo "<br>de:";
print_r($de);
echo "<br>fom:";
print_r($fom);
echo "<br>selab:";
print_r($selab);
echo "<br>delab:";
print_r($delab);
echo "<br>dbmslab";
print_r($dbmslab);

?>
