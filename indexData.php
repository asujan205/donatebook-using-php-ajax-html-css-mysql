<?php
	include('databaseConnection.php');
	$querystr="";
	if(isset($_POST['search']) && $_POST['search']!="")
	{
		$querystr=$_POST['search'];
		$query = "SELECT * FROM bookstore WHERE book_name LIKE '%$querystr%'";
	}
	else
	{
		$query="SELECT * FROM bookstore";
	}
	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	$total_row = $statement->rowCount();
	$srtdesc="";
	$rowcount=0;
	$idea=1;
	$returnvar="";

		if($total_row>0){
		foreach($result as $row){
			$rowcount++;
			$name=namesorter($row['book_name']);
			$publisher=namesorter($row['book_publisher']);
			$srtdesc=shortdescription($row['SrtDesc']);
			if($rowcount==1){
				$returnvar.= '<div class="row">';
			}
			
				$returnvar.= '<div id="'.$row['book_id'].'" class="'.'a'.$idea.'" align="center" onmouseover="return enlarge('.$row['book_id'].');">';
				$returnvar.= '<img class="phuto" src="images/'.$row['Image1'].'" style="position:relative;top:16px;height:200px;width:200px;">  <img src="images/'.$row['Image2'].'" style="height:310px;width:250px;display:none;"><br><br><br><strong><h3>'.$name.'</h3></strong><br><h4>-'.$publisher.'</h4><br><p>'.$srtdesc.'</p>
				<input type="hidden" name="hidden_name" id="name'.$row["book_id"].'" value="'.$row["book_name"].'" />
            	<input type="hidden" name="hidden_price" id="price'.$row["book_id"].'" value="'.$row["book_rent_price"].'" />
				<button type="button" value="'.$row['book_rent_price'].'" id="alertconfirm'.$row['book_id'].'" class="add_to_rent" style="position:absolute;
    height: 35px;
    background: #1c8adb;
    color: #fff;
    top:400px;
    font-size: 16px;
    border-radius: 4px;
    width:200px;
    left:39px;" onclick="rental('.$row['book_id'].',\''.$name.'\');checking(\'alertconfirm'.$row['book_id'].'\');">Rs. '.$row['book_rent_price'].'</button></div><br><br><br>';
			$idea++;
			if($rowcount!=0 && $rowcount%3==0){
				$idea=1;
				$returnvar.= '</div>';
				$returnvar.= '<div class="row">';
			}
		}
		echo $returnvar;
	}
	function namesorter($a){
		$arry=str_split($a);
		$result="";
		for($num=0;$num<count($arry);$num++){
			if($num==0){
				if(ord($arry[$num])<=90 && ord($arry[$num])>=65){
					$result.=$arry[$num];
				}
				elseif(ord($arry[$num])<=122 && ord($arry[$num])>=97){
					$result.=chr(ord($arry[$num])-32);
				}
				else{
					$result.=$arry[$num];
				}

			}
			else{
				if(ord($arry[$num])<=90 && ord($arry[$num])>=65){
					$result.=chr(ord($arry[$num])+32);
				}
				else{
					$result.=$arry[$num];
				}	
			}
			
		}
		return $result;
	}
	function shortdescription($a){
			$srtdesc="";
			$short=$a;
			$pieces=explode(" ",$short);
			$no=(count($pieces)-4);
			$count=0;
			$noun="";
			$wcount=0;
			for($no=0;$no<4;$no++){
				$srtdesc.=$pieces[$count].' ';
				$count++;
			}
			$srtdesc.='<br>';
			for($no=0;$no<2;$no++){
				$wcount=0;
				for($num=0;$num<9;$num++){
					$noun=$pieces[$count];
					$something=str_split($noun);
					$wcount=$wcount+count($something);
					if($wcount<=25){
						$srtdesc.=$pieces[$count].' ';
						$count++;
					}

				}
				$srtdesc.='<br>';
			}
			for($no=0;$no<4;$no++){
				$srtdesc.=$pieces[$count].' ';
				$count++;
			}
			$srtdesc.="<br><b>. . . .</b><br><br><br><br><br><br>";
			return $srtdesc;
	}

?>