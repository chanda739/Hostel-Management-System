<?php 
include('stud_header.php');
//include('gen_header.php'); 
?>
            <div id="page-wrapper">
            <div class="container">
            <h1> Welcome <?php echo $usr; ?></h1>
            <div class="row">
                <div class="col-lg-8">
                    
                     <table class="table table-striped">
        <tbody>
        <?php
	    $rs2=mysql_query("select * from stud_registration where sid='$sid'",$con);
        if(mysql_num_rows($rs2)>0)
		{
			$row2=mysql_fetch_array($rs2);
		echo "<tr>";
		echo "<td>"."Student Id"."</td>";
        echo "<td>".$row2['sid']."</td>";
        echo "</tr>";
		
		echo "<tr>";
		echo "<td>"."Name"."</td>";
        echo "<td>".$row2['sname']."</td>";
        echo "</tr>";
		
		echo "<tr>";
		echo "<td>"."Class"."</td>";
        echo "<td>".$row2['sclass']."</td>";
        echo "</tr>";
		
		echo "<tr>";
		echo "<td>"."Branch"."</td>";
        echo "<td>".$row2['sbranch']."</td>";
        echo "</tr>";
		
		echo "<tr>";
		echo "<td>"."Semester"."</td>";
        echo "<td>".$row2['ssem']."</td>";
        echo "</tr>";
		
		echo "<tr>";
		echo "<td>"."Date of Birth"."</td>";
        echo "<td>".$row2['sdob']."</td>";
        echo "</tr>";
		
		echo "<tr>";
		echo "<td>"."Address"."</td>";
        echo "<td>".$row2['saddr']."</td>";
        echo "</tr>";
		
		echo "<tr>";
		echo "<td>"."Mobile No"."</td>";
        echo "<td>".$row2['smobno']."</td>";
        echo "</tr>";
		
		echo "<tr>";
		echo "<td>"."Local guardian name"."</td>";
        echo "<td>".$row2['slgname']."</td>";
        echo "</tr>";
		
		echo "<tr>";
		echo "<td>"."Local guardian address"."</td>";
        echo "<td>".$row2['slgaddr']."</td>";
        echo "</tr>";
		
		echo "<tr>";
		echo "<td>"."Local guardian mobile no"."</td>";
        echo "<td>".$row2['slgmobno']."</td>";
        echo "</tr>";
		}
     ?>
    </tbody>
  </table>
</div>
<div class="col-lg-4">
              </div>
                </div>
          

                <!-- /.col-lg-12 -->
            
                <!-- /.col-lg-4 -->
                          

            <!-- /.navbar-static-side -->
     </div>
      </div>
         </div>
                  <!-- /.panel -->
        </div>
 

</body>

</html>
