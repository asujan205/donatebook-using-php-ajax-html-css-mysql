<?php



	if(isset($_POST['querystr'])){

		$conn = new mysqli('localhost', 'root', '', 'netore');



		$results = array('error' => false, 'data' => '');

 

		$querystr = $_POST['querystr'];

 

		if(empty($querystr)){

			$results['error'] = true;

		}else{

			$sql = "SELECT * FROM bookstore WHERE book_name LIKE '%$querystr%'";

			$sqlquery = $conn->query($sql);

 

			if($sqlquery->num_rows > 0){

				while($ldata = $sqlquery->fetch_assoc()){

					$results['data'] .= "

						<li class='list-gpfrm-list' data-book_name='".$ldata['book_name']." '>".$ldata['book_name']."</li>

					";

				}

			}

			else{

				$results['data'] = "

					<li class='list-gpfrm-list'>No data found</li>

				";

			}

		}

 

		echo json_encode($results);

	}

?>