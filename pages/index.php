<?php include('gen_header.php');?>
 <div id="page-wrapper">
            <div class="container">
            <div class="row">
                <div class="col-md-7">
<br/>
<br/>
<br/>
<br/>
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/img1/1.jpg" alt="Chania" width="460" height="345">
      </div>

      <div class="item">
        <img src="images/img1/3.jpg" alt="Chania" width="460" height="345">
      </div>
    
      <div class="item">
        <img src="images/img1/4.jpg" alt="Flower" width="460" height="345">
      </div>

      <div class="item">
        <img src="images/img1/9.jpg" alt="Flower" width="460" height="345">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
                   
                </div>
  <!-- /.col-lg-4 -->
                <div class="col-md-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="login.php" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="un" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="pwd" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" value="Login" class="btn btn-lg btn-success btn-block">
                            </fieldset>
                        </form>
                        <?php
	if(isset($_REQUEST['msg'])) 
	{
		$x=$_REQUEST['msg'];
		if($x==0)
			echo "Wrong Username";
		else if($x==1)
			echo "Wrong password";
		else if($x==2)
			echo "Wrong username and password";
		else if($x==3)
			echo "User not found!";
	}
?>
                    </div>
                </div>
           
           
           
               
                
               
                
                    
      </div>
         </div>
         </div>
                  <!-- /.panel -->
        </div>
 </body>

</html>

   