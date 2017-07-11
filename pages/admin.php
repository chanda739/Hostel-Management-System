<?php
include('admin_header.php');
?>
<!--<div id="page-wrapper">-->

<div id="page-wrapper">
            <div class="container">
            <h1>Notifications</h1>
            <div class="row">
                <div class="col-lg-8">
                                
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Student id</th>
                                            <th>Name</th>
                                            <th>visit</th>
                                            <th>Purpose</th>
                                            <th>Out time & date</th>
                                        </tr>
                                    </thead>
                                     <tbody>
                      <?php
					  $rs2=mysql_query("select * from visit_notif where vin='0000-00-00 00:00:00'",$con);
                    if(mysql_num_rows($rs2)>0)
					{
						while($row2=mysql_fetch_array($rs2))
						{
							$rs3=mysql_query("select sname from stud_registration where sid='$row2[sid]'",$con);
							$row3=mysql_fetch_array($rs3);
                             echo "<tr class='odd gradeX'>";
                             echo "<td>".$row2['sid']."</td>"."<td>".$row3['sname']."</td>"."<td>".$row2['visit']."</td>"."<td>".$row2['purpose']."</td>"."<td>".$row2['vout']."</td>";
                       echo " </tr>";
						}
					}
					  ?>
                      </tbody>
                      </table>
                    </div>
                
              <div class="col-lg-4">
              </div>
         </div>
           </div>       
        </div>
       

</body>

</html>