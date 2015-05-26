<?php

/* 
 * Developed by Jordan Thomson 2015
 * 
 * System name: Scrt
 * 
 * Licenced software
 * 
 * Jordanthomson@techie.com
 */
?>
<?PHP
$clientsquery=mysql_query("select * from clients");
$clientsnumrows=mysql_num_rows($clientsquery);
$clients=mysql_query("select * from clients order by id desc limit 10");





?>
    
     
     
<section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-9 main-chart">
                  
                  <div class="row">
						<div class="col-lg-4 col-md-4 col-sm-4 mb">
							<div class="product-panel-2 pn">
								<div class="badge badge-hot-green">New</div>
								<img src="assets/img/ny.jpg" height="100" width="200" alt="">
								<h5 class="mt">Clients this month</h5>
								<h6>1388</h6>
								<button class="btn btn-small btn-theme03">FULL REPORT</button>
							</div>
						</div><! --/col-md-4 -->
                                                
                                                <div class="col-lg-4 col-md-4 col-sm-4 mb">
							<div class="product-panel-2 pn">
								<div class="badge badge-hot-green">Existing</div>
								<img src="assets/img/ny.jpg" height="100" width="200" alt="">
								<h5 class="mt">Clients</h5>
								<h6>10000</h6>
								<button class="btn btn-small btn-theme03">FULL REPORT</button>
							</div>
						</div><! --/col-md-4 -->
                                                
                                                <div class="col-lg-4 col-md-4 col-sm-4 mb">
							<div class="product-panel-2 pn">
								<div class="badge badge-hot-green">Manage</div>
								<img src="assets/img/ny.jpg" height="100" width="200" alt="">
								<h5 class="mt">Clients</h5>
								<h6>5000</h6>
								<button class="btn btn-small btn-theme03">FULL REPORT</button>
							</div>
						</div><! --/col-md-4 -->
                  </div>
                      
                      <div class="row">
                          
                                     <table class="table table-striped table-advance table-hover">
	                  	  	  <h4><i class="fa fa-angle-right"></i> Latest Clients added (last 10)</h4>
	                  	  	  <hr>
                              <thead>
                             
                                  <tr>
                                  <th>Name</th>
                                  <th> Location</th>
                                  <th>Age</th>
                                  <th>Assigned Carers</th>
                                  <th></th>
                              </tr>
                              </thead>
                                     <?php
                        if ($clientsnumrows == "0") {
                            echo "
                             <tr>
                                  <td><a href='#'>No</a></td>
                                  <td class='hidden-phone'>Clients</td>
                                  <td>Have been</td>
                                  <td><span class='label label-info label-mini'>Added yet!</span></td>
                                  <td>
                                    
                                  </td>
                              </tr>




                                    ";
                        } else {
                          while($client_generate_table = mysql_fetch_object($clients)){ ?>
                                 <tr>
                                     <td><form id="clients_profile" action="logged_in.php" method="post"><a href="javascript:;" onclick="document.getElementById('clients_profile').submit();"><?PHP echo $client_generate_table->name; ?> <input type="hidden" name="clients_profile" value="<?PHP echo $client_generate_table->id; ?>"/> </a></form></td>
                                  <td class="hidden-phone"><?PHP echo $client_generate_table->location; ?></td>
                                  <td><?PHP
                                  
                                  echo date_diff(date_create($client_generate_table->dob), date_create('today'))->y;
                                 
                                  
                                  
                                  
                                  
                                  
                                  ?> </td>
                                  <td><span class="label label-info label-mini">Due to be setup</span></td>
                                  <td>
                                  <form id="clients_profile" action="logged_in.php" method="post"><a href="javascript:;" onclick="document.getElementById('clients_profile').submit();"><input type="hidden" name="clients_profile" value="<?PHP echo $client_generate_table->id; ?>"/><button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button> </a></form>
                                   
                                      
                                      
                                  </td>
                              </tr>
                           
                              <tr>
                            
                              </tbody>
                          
                                               
                   
                             <?PHP } } ?>
                            
                              </tbody>
                          </table>
                             
                      </div>
                    		
                  </div><!-- /col-lg-9 END SECTION MIDDLE -->
					
              
 