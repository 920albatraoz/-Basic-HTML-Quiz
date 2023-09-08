<!DOCTYPE html>
<html>
<head><style>
 body {
  background-image:url('sc1.jpg');
  background-size:cover;
  opacity:;
  }
   h1 {
   margin-top:5%;
   margin-left:%;
   font-size:60px;
   }
     .div1 {
      margin-left:2%;
      font-size:30px;
      background-color:lime;
      text-align:center;
      width:25%;
      }
       a,p {
        margin-left:8%;
        font-size:25px;
        }
</style>
	<title>Online Quiz - Results</title>
</head>
<body>
	<h1>&#x1F600 Quiz - Results</h1>
	<div class="div1">
	<?php
	 $count=0;
		$answer = $_POST["ans1"];
		if ($answer == "a") {
			$count++;
		} else {
			
		}
		 $answer2 = $_POST["ans2"];
		if ($answer2 == "b") {
			$count++;
		} else {
			
		}
		 $answer3 = $_POST["ans3"];
		if ($answer3 == "c") {
			$count++;
		} else {
			
		}
		
		$answer4 = $_POST["ans4"];
		if ($answer3 == "b") {
			$count++;
		} else {
			
		}
		 $answer5 = $_POST["ans5"];
		if ($answer5 == "a") {
			$count++;
		} else {
			
		}
	
		$name = $_POST["name"];
	
	if($count>=4)
	{
	  echo "Wow Execellent !! &#x1F62E";
	  echo "$name Your total score is : $count out of 5 ";
	  }
	    else {
	    echo "Not bad !! &#x1F610 ";
	    echo "$name Your total score is : $count out of 5 ";
	    }
	?></div>
	<p>Contact: &#x1F447</p><a href="#">aditya</a>
</body>
</html>
