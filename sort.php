<!-- <?php
	require('dbconnect.php');
	mysqli_select_db($db_connect,"giaithuat1");
	$sql = "SELECT * FROM `hoc_sinh`";
	$result = mysqli_query($db_connect,$sql);
	$array =array();
	$n=mysqli_num_rows($result);
	 while ($row=mysqli_fetch_assoc($result)) {
                $array[] = $row;
                 //print_r($info);
                // echo "<br>";
            }
   // print_r($array);
    for($i=0;$i<$n-1;$i++){
      	for($j=$i+1;$j<$n;$j++){
      		if($array[$i]['diem']>$array[$j]['diem']){
      			$tmp = $array[$i];
      			$array[$i]=$array[$j];
      			$array[$j]=$tmp;
      		}
      	}
	}
	$count=0;
		for($i=0;$i<$n/2;$i++){
			if($count==3){
				echo "<br>";
				$count=0;

			}
				print_r($array[$i]['diem']);
				echo " ";
				print_r($array[$n-$i-1]['diem']);
				$count++;
				echo "&emsp;&emsp;";
		
	}
      
      if($n%2 !=0){
      	print_r($array[$n/2]['diem']);
      	echo " ";
      }
?> -->
<?php
	require('dbconnect.php');
	mysqli_select_db($db_connect,"giaithuat1");
	$sql = "SELECT * FROM `hoc_sinh` LIMIT 1000";
	$result = mysqli_query($db_connect,$sql);
	$array =array();
	$n=mysqli_num_rows($result);
	 while ($row=mysqli_fetch_assoc($result)) {
                $array[] = $row;
                 //print_r($info);
                // echo "<br>";
            }
   // print_r($array);
    // for($i=0;$i<$n-1;$i++){
    //   	for($j=$i+1;$j<$n;$j++){
    //   		if($array[$i]['diem']>$array[$j]['diem']){
    //   			$tmp = $array[$i];
    //   			$array[$i]=$array[$j];
    //   			$array[$j]=$tmp;
    //   		}
    //   	}
    //   }
    //   for($i=0;$i<$n/2;$i++){
    //   	print_r($array[$i]['diem']);
    //   	echo " ";
    //   	print_r($array[$n-$i-1]['diem']);
    //   	echo " ";
    //   }
    //   if($n%2 !=0){
    //   	print_r($array[$n/2]['diem']);
    //   	echo " ";
    //   }
    //  print_r($array['diem']);    
?>