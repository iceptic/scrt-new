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
$client_profile_query = mysql_query("select * from clients where id=$client_profile_value");
$client_profile_value = mysql_fetch_object($client_profile_query);


?>
            <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Client Details of <?PHP echo $client_profile_value->name." ".$client_profile_value->surname; ?></h3>
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i> General Information</h4>
                          <form class="form-horizontal style-form" id="client_update" action="sets/clients_update.php" method="POST">
                           <input type="hidden" id="id" name="id" value="<?php echo $client_profile_value->id;?>" />
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">First Name</label>
                              <div class="col-sm-10">
                                  <input type="text" id="name" name="name" class="form-control" value="<?PHP echo $client_profile_value->name; ?>">
                              </div>
                          </div>
                             <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Middle Name(s)</label>
                              <div class="col-sm-10">
                                  <input type="text" id="middle_name" name="middle_name" class="form-control" value="<?PHP echo $client_profile_value->middle_name; ?>">
                              </div>
                          </div>
                          
                             <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Surname</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" id="surname" name="surname" value="<?PHP echo $client_profile_value->surname; ?>">
                              </div>
                          </div>
                          
                             <div class="form-group">
                              <label class="col-sm-10 col-sm-2 control-label">Address</label>
                              <div class="col-sm-10 col-lg-2">
                                  <textarea size="55" type="text" id="address" name="address" class="form-control col-sm-10 col-sm-2"><?PHP echo $client_profile_value->address; ?></textarea>
</div>
                          </div>
                            <div class="form-group">
                              <label class="col-sm-10 col-sm-2 control-label">Postcode</label>
                              <div class="col-sm-10">
                                  <input type="text" id="postcode" name="postcode" class="form-control col-sm-10" value="<?PHP echo $client_profile_value->postcode; ?>">
                              </div>
                          </div>
                            <div class="form-group">
                              <label class="col-sm-10 col-sm-2 control-label">Location</label>
                              <div class="col-sm-10">
                                  <input type="text" id="location" name="location" class="form-control col-sm-10" value="<?PHP echo $client_profile_value->location; ?>">
                              </div>
                          </div>
                            <div class="form-group">
                              <label class="col-sm-10 col-sm-2 control-label">Country</label>
                              <div class="col-sm-10">
                                  <input type="text" id="country" name="country" class="form-control col-sm-10" value="<?PHP echo $client_profile_value->country; ?>">
                              </div>
                          </div>
                            <div class="form-group">
                              <label class="col-sm-10 col-sm-2 control-label">Date of birth</label>
                              <div class="col-sm-10">
                                  <input type="text" id="dob" name="dob" class="form-control col-sm-10" value="<?PHP echo $client_profile_value->dob; ?>">
                              </div>
                          </div>
                            <div class="form-group">
                              <label class="col-sm-10 col-sm-2 control-label">Phone Number</label>
                              <div class="col-sm-10">
                                  <input type="text" id="phone_number" name="phone_number" class="form-control col-sm-10" value="<?PHP echo $client_profile_value->phone_number; ?>">
                              </div>
                          </div>
                          
                            <div class="form-group">
                              <label class="col-sm-10 col-sm-2 control-label">Drugs</label>
                              <div class="col-sm-10">
                                  <input type="text" id="drugs" name="drugs" class="form-control col-sm-10" value="<?PHP echo $client_profile_value->drugs; ?>">
                              </div>
                          </div>
                            <div class="form-group">
                              <label class="col-sm-10 col-sm-2 control-label">Date Joined</label>
                              <div class="col-sm-10">
                                   
                                  <input type="text" id="disabledInput" disabled="" class="form-control col-sm-10" value="<?PHP echo $client_profile_value->date_added; ?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-10 col-sm-2 control-label">Date Left</label>
                              <div class="col-sm-10">
                                  <input type="text" id="date_left" name="date_left" class="form-control col-sm-10" value="<?PHP echo $client_profile_value->date_left; ?>">
                              </div>
                          </div>
                          <button type="submit" name="submit" value="submit" class="btn btn-primary">Update</button>
                          </div>
                      </form>
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->
          	
                
                
                
                
                
                
                
                
                
                <div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i> Notes</h4>
                          <form class="form-horizontal style-form" id="client_update" action="sets/clients_update.php" method="POST">
                           <input type="hidden" id="id" name="id" value="<?php echo $client_profile_value->id;?>" />
                          
                             <div class="form-group">
                              <label class="col-sm-10 col-sm-2 control-label">Client Notes</label>
                              <div class="col-sm-10 col-lg-2">
                                  <textarea size="55" type="text" id="notes" name="notes" class="form-control col-sm-10 col-sm-2"><?PHP echo $client_profile_value->notes; ?></textarea>
</div>
                          </div>
                         
                          <button type="submit" name="submit" value="submit" class="btn btn-primary">Update</button>
                          </div>
                      </form>
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->
          	
                
                
                
                
                
                
          	
          	
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->