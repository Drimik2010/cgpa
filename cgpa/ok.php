<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    .navbar-brand {
    float: left;
    padding: 12px 15px;
    font-size: 19px;
    line-height: 21px;
    height: 62px;
    max-width: 220px;
    display: table;
}
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php"><img src="BUBT_logo.jpg" width="80" height="40" alt="Cinque Terre"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Projects</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
    </div>
    <div class="col-sm-8 text-left"> 
      <h1>CGPA CALCULATOR - FOR BUBT</h1>
      <p><b>Bangladesh University of Business and Technology (BUBT) is a powerhouse of academic excellence that champions the freedom of learning. It has established a formidable reputation since its inception in 2003. The university has risen to one of the top ranking private universities in Bangladesh.</b> </p>
      <a class="btn btn-flat" href="https://www.bubt.edu.bd/home/page_details/BUBT_At_a_Glance">More about BUBT</a>
      
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  <div class="row">
	   <div class="col-sm-4">
	  
	   
					  <div class="form-group">
						 <label for="usr">Course Name</label>
						 <input type="text" class="form-control" id="usr">
					  </div>
	   
	   </div>
	   
	   
	   <div class="col-sm-4">
	  
	   
					  <div class="form-group">
						 <label for="usr">Choose Your Credit</label>
						 <select class="form-control" name="credit1" id="">
						 <option value="4">4</option>
						 <option value="3">3</option>
						 <option value="2">2</option>
						 <option value="1.5">1.5</option>
						 <option value="0.75">0.75</option>
						 
						 </select>
					  </div>
	   
	   </div>
	   
	   <div class="col-sm-4">
	  
	   
					  <div class="form-group">
						  <label  for="usr">Choose Your Grade</label>
						 <select class="form-control"  name="grade1" id="">
						 <option value="4.00">A+</option>
						 <option value="3.74">A</option>
						 <option value="3.50"> A-</option>
						 <option value="3.25">B+</option>
						 <option value="3.00">B</option>
						 <option value="2.75">B-</option>
						 <option value="2.50">C+</option>
						 <option value="2.25">C</option>
						  <option value="2.25">D</option>
						  <option value="2.25">C</option>
					  </div>
	   
	   </div>
	   
	   
	   
	   </div>
	  
	  
	  
	  
	  
	  
	  
	 
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  

	  
	  
	  
	  
	    <!-- -->

    </div>
	</div>
    <div class="col-sm-2 sidenav">
      <div class="well">
        <p>ADS</p>
      </div>
      <div class="well">
        <p>ADS</p>
      </div>
    </div>
  </div>
  


<footer class="row container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>
