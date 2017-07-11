<?php include('stud_header.php'); ?>
<div id="page-wrapper">
            <div class="container">
            <h1>Notification</h1>
            <div class="row">
                <div class="col-lg-8">
                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Notification</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                        </tr>
                                    </thead>
                                     <tbody>
                      <?php
					  $rs2=mysql_query("select * from notif",$con);
                    if(mysql_num_rows($rs2)>0)
					{
						while($row2=mysql_fetch_array($rs2))
						{
							
                             echo "<tr class='odd gradeX'>";
                             echo "<td>".$row2['nnotif']."</td>"."<td>".$row2['ndate']."</td>"."<td>".$row2['ntime']."</td>";
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