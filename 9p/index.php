<!DOCTYPE html>
<html>
<head><style>
  body {
   background-image:url('stu1.jpg');
   background-size:cover;
   }
  div {
    background-color:#fff;
    width:40%;
    margin-left:30%;
    border-radius:13px;
    opacity:0.7;
    box-shadow:4px 4px 10px #DDD;
    }
     form {
     margin-left:5%;
     }
      h1 {
       text-align:center;
       
       }
       input {
       border-radius:8px;
       height:20px;
       
       }
       .sub {
        margin-left:35%;
        height:30px;
        width:120px;
        }
        .sub1 {
       
        height:30px;
        width:120px;
        }
         section {
          margin-left:25%;
          }
           p {
            font-size:15px;
            }
            .sub:hover {
            background-color:green;
            }
            .sub1:hover {
            background-color:red;
            }
</style>
	<title>Online Quiz</title>
</head>
<body>
	<div>
	<form method="post" action="quiz.php">
	<h1>Welcome to the Online Quiz!</h1>
	<section><label>Please Enter your name: <input type="text" name="name"></section><hr>
		<p> who is the president of india?</p>
		<input type="radio" name="ans1" value="a">a) Droupadi Murmu <br>
		<input type="radio" name="ans1" value="b">b) Narendra Modi <br>
		<input type="radio" name="ans1" value="c">c) Virat kholi<br>
		
		<p>who is prime minister of india?</p>
		<input type="radio" name="ans2" value="a">a) Narendra Modi<br>
		<input type="radio" name="ans2" value="b">b) Amit shash<br>
		<input type="radio" name="ans2" value="c">c) Adani<br>
		
		<p>What is the use of &nbsp in HTML</p>
		<input type="radio" name="ans3" value="a">a) break line<br>
		<input type="radio" name="ans3" value="b">b) Add comma<br>
		<input type="radio" name="ans3" value="c">c) Adding space<br>
		
		
		<p>Do we need compiler to run HTML file ?</p>
		<input type="radio" name="ans4" value="a">a) yes<br>
		<input type="radio" name="ans4" value="b">b) NO<br>
		<input type="radio" name="ans4" value="c">c) ok<br>
		
		
		<p>How many states are there in India ?</p>
		<input type="radio" name="ans5" value="a">a) 28<br>
		<input type="radio" name="ans5" value="b">b) 37<br>
		<input type="radio" name="ans5" value="c">c) 22<br>
		
		
		<input type="submit" value="Submit" class="sub"> &nbsp &nbsp <input type="reset" value="reset" calss="sub1"><br><br>
	</form></div>
</body>
</html>
