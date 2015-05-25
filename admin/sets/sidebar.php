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
 <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="#"><img src="assets/img/ui-danro.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered"><?PHP echo $login_session; ?></h5>
                  <form id="dashboard" action="logged_in.php" method="post"> 
                   
                      <!--
                      <a href="javascript:;" onclick="document.getElementById('pagecheck').submit();">link here</a>
                    <input type="hidden" name="mess" value=Dashboard/>	
                 -->
                    
                    <li class="mt">
                      <a class="active" href="javascript:;" onclick="document.getElementById('dashboard').submit();">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                          <input type="hidden" name="dashboard" value="dashboard"/>	
                      </a>
                  </li>
                  </form>
     
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>Clients</span>
                      </a>
                      <ul class="sub">
                           <form id="clients" action="logged_in.php" method="post"> 
                          <li>
                          <a class="active" href="javascript:;" onclick="document.getElementById('clients').submit();">
                            Clients
                          <input type="hidden" name="clients" value="clients"/>
                          </a>
                           </form>
                          
                          </li>
                          <li><a  href="buttons.html">Buttons</a></li>
                          <li><a  href="panels.html">Panels</a></li>
                      </ul>
                  </li>

                  </form>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
     