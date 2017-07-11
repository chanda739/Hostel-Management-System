<?php include('admin_header.php'); ?>
<div id="page-wrapper">
            <div class="container">
            <h1>Messages</h1>
            <div class="row">
                <div class="col-lg-8">
                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                        	<th>Student Id</th>
                                            <th>Name</th>
                                            <th>Subject</th>
                                            <th>Message</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                        </tr>
                                    </thead>
                                     <tbody>
                      <?php
					  $rs2=mysql_query("select * from admin_msg",$con);
                    if(mysql_num_rows($rs2)>0)
					{
						while($row2=mysql_fetch_array($rs2))
						{
							$rs3=mysql_query("select sname from stud_registration where sid='$row2[sid]'",$con);
							$row3=mysql_fetch_array($rs3);
                             echo "<tr class='odd gradeX'>";
                             echo "<td>".$row2['sid']."</td>"."<td>".$row3['sname']."</td>"."<td>".$row2['amsub']."</td>"."<td>".$row2['amcom']."</td>"."<td>".$row2['amdate']."</td>"."<td>".$row2['amtime']."</td>";
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