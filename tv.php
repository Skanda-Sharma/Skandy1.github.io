<?php
$conn=mysqli_connect('localhost','root','','wt_project') or die(mysqli_error());
$nam=$_POST['reg']; #register number
$p=$_POST['pass'];
$img_src="images/$nam.JPG";
$q1="SELECT * from user where Reg='$nam'";
$res=mysqli_query($conn,$q1);
if (mysqli_num_rows($res)>0) {
	while ($row=mysqli_fetch_assoc($res)) {
			$ask=$row['Password'];
			$neme=$row['Name'];
			$cls=$row['Class'];
			$em=$row['Email'];
			$ph=$row['Phone'];
		}	
		if ($ask==$p) {
		session_start();

		$_SESSION['login_user']=$neme ?>
			<!DOCTYPE html>
<html>
<head>
	<title>
	</title>
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap.css" >
<script src="js/jquery.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap.js" ></script>
<style >
img.center {
display: block;
margin-left: auto;
margin-right: auto;
}
	section {
		width: 98.7vw;
		height: 100vh;
		padding: 30px;
	}

	.cl_white {
		color: black;
	}

	img{
		width: 300px;
		transition: opacity .1s ease-in-out;

	}
	img:hover {
		opacity: .5;

	}
	.col-text {
		column-count: 2;
	}
	
</style>
</head>
<body data-spy="scroll" data-target=".navbar">
	<nav class="navbar navbar-inverse navbar-fixed -top  ">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="#" class="navbar-brand"><font color="#FFFFF" size="5px" >Smart University</font> </a>
			</div>
		<ul class="nav navbar-nav navbar-right">
			<li ><a href="#home"> <span class="glyphicon glyphicon-home"></span>  Home  </a></li>
			<li><a href="#work"><span class="glyphicon glyphicon-book "></span> Washington</a> </li>
			<li><a href="#cl"><span></span> Events</a> </li>
			<li><a href="#about"><span class="glyphicon glyphicon-user"></span> About Us</a></li>
			<li><a href="#contact"><span class="glyphicon glyphicon-earphone"></span> Contact Us  </a> </li>
		</ul>
		</div>
	</nav>	
		
	<section id="home" style="background: url(images/6.jpg); background-size: 100% 100%" class="cl_white text-center ">
		
		<h1  > <?php echo "Welcome $neme";?>  </h1>
		<p class="lead"> Let just read myself and contact me </p>
		<button class="btn btn-default" data-toggle="modal" data-target="#modal2">Contact Me</button>
	</section>

<div class="modal fade" id="modal2">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button class="close" data-dismiss="modal">&times;</button>
						<h3 > Name: <?php echo $neme ?> </h3>
						<img src="<?php echo $img_src ?>" class="center img-circle" width="20px" align="center">
					</div>
					<div class="modal-body" align="center">
						<h4>Class: <?php echo $cls?></h4>
						<h4>Email: <?php echo $em?></h4>
						<h4>Phone: <?php echo $ph?></h4>
					</div>
				</div>
			</div>
		</div>		
	</div>

	<section id="cl" class="container">
		<img src="<?php echo $img_src; ?>" class="img-thumbnail"/>
	</section>

	<section id="work" class="container">
		<div class="page-header">
			<h2 class="text-center" >My Work</h2>
		</div>
		<img src="images/1.jpg" class="img-thumbnail">
		<img src="images/2.jpg" class="img-thumbnail">
		<img src="images/3.jpg" class="img-thumbnail">
		<img src="images/4.jpg" class="img-thumbnail">
	</section>
	<section id="about" class="container" >
		<div class="col-text " style="padding: 30px">Smart University, as we all know that IOT and AI are the major topics in which our industry is working. We as a team are bringing up new ideas about how and where can we improve our society in a faster manner. There a millions of idea and thousands of workers who are willing to work on a particular project but the main problem lies where we can not implement the peoject in a short time. All the ideas are for long term but the implementation time is vast.</div> <br>
		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-primary col-md-6">
				<div class="panel-heading">
					<h4>Profile</h4>
				</div>
				<div class="panel-body">
					<ul class="lead text-left ">
						<li>Amogh H M</li>
						<li>Daryl Machado</li>
						<li>Samantha Fernandez</li>
						<li>Skanda Sharma</li>
					</ul> 
				</div>
				<div class="panel-footer"> Contact us : <a href="#">smartuni@gmail.com</a> </div>

			 </div>
			</div>
			
		</div>
	</section>

	<section style="background:url(images/11.jpg);background-size: 100% 100%" id="contact">
		<div class="page-header text-center">
			<h2 style="color: #ffffff">Contact Us</h2>
		</div>
		<form class="col-md-5 col-md-offset-4" >
			<div class="form-group">
				<input type="text" name="nam" placeholder="First Name" class="form-control">
			</div>

			<div class="form-group">
				<input type="text" name="lnam" placeholder="Last Name" class="form-control">
			</div>

			<div class="form-group">
				<input type="email" name="em" placeholder="Email ID" class="form-control">
			</div>
			<div class="form-group">
				<input type="text" name="sub" placeholder="Subject" class="form-control">
			</div>
			<div class="form-group">
				<script type="text/javascript"></script>
				<textarea class="form-control" rows="3" placeholder="Comments"></textarea>
			</div>
				<div>
					<button class="btn btn-success btn-block" >Submit</button>
				</div>			
		</form>
	</section>
	</div>
</body>
</html>

<?php
		}else
		{
			header('location:err.html');
		}
}else
{
	header('location:err.html');

}
?>

