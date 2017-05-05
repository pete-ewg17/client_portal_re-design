<?php 
  session_start();
  $file_base= "";
?>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Responsive vertical menu navigation</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">
  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:700, 600,500,400,300' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<html>

<body>
  <div class="header">
    <div class="logo">
      <i class="fa fa-rebel"></i>
      <span>Client Portal</span>
    </div>
    <a href="#" class="nav-trigger"><span></span></a>
  </div>
  <!-- MOBILE LOGO-->
  <div class="side-nav">
    <div class="logo">
      <i class="fa fa-rebel"></i>
      <span>Client Portal</span>
    </div>
    <!--NAVIGATION-->
    <nav>
      <ul>
        <li>
          <a href="#">
            <span><i class="fa fa-user"></i></span>
            <span>My Details</span>
          </a>
        </li>
        <li>
          <a href="#">

            <span><i class="fa fa-calendar-minus-o"></i></span>
            <span>Past Events</span>
          </a>
        </li>
        <li class="active">
          <a href="#">
            <span><i class="fa fa-clipboard"></i></span>
            <span>Invoices</span>
          </a>
        </li>
        <li>
          <a href="#">
            <span><i class="fa fa-rocket"></i></span>
            <span>Log Out</span>
          </a>
        </li>
      </ul>
    </nav>
  </div>

  <div class="main-content">
    <div class="title">
      <h3>Welcome To Your EWG Talent Portal</h3>
    </div>
    <div class="main">
      <div class="widget events">
        <div class="title">Current Events <a href="#"><i class="fa fa-plus"></i>Hover Over Event Name for more options</a>
        <p></p>
        </div>
        <div class="current-event">
          <section class="wrapper">
            <table class="talent table table-fixed">
              <thead>
                <tr>
                  <th>Event Name</th>
                  <th>Status</th>
                  <th>Event ID</th>
                  <th>Date</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <div class="flip-cube">
                      <div class="flip-front">
                        <p> Grooving the Moo, Wayville, SA</p>
                      </div>
                      <div class="flip-back">
                        <ul class="flip-ul">
                          <li class="flip-icons">
                           <a href="#">
                            <i class="fa fa-address-card-o tiptool">
                              <span class="tooltiptext">View Event</span>   
                           </i>
                            </a>     
                          </li>
                          <li class="flip-icons">
                          <a href="#"><i class="fa fa-pencil tiptool">
                              <span class="tooltiptext">Edit Event</span>  
                            </i>
                          </a>
                          </li>
                          <li class="flip-icons">
                            <a href="#" title="Download Event"><i class="fa fa-cloud-download tiptool">
                            	<span class="tooltiptext">Download Event</span> 
                            </i></a>
                          </li>
                          <li class="flip-icons">
                            <a href="#" title="Contact Us"><i class="fa fa-envelope tiptool">
                            	<span class="tooltiptext">Contact Us</span> 
                            </i></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </td>
                  <!--FRONT -->
                  <td class=" btn-warning">Submitted</td>
                  <td>EWG-12345</td>
                  <td>Friday 28th Apr</td>
                </tr>
                <tr>
                  <td>
                    <div class="flip-cube">
                      <div class="flip-front">
                        <p>
                          Grooving the Moo, Maitland, NSW
                        </p>
                      </div>
                      <div class="flip-back">
                        <ul class="flip-ul">
                          <li class="flip-icons">
                           <a href="#">
                            <i class="fa fa-address-card-o tiptool">
                              <span class="tooltiptext">View Event</span>   
                           </i>
                            </a>     
                          </li>
                          <li class="flip-icons">
                          <a href="#"><i class="fa fa-pencil tiptool">
                              <span class="tooltiptext">Edit Event</span>  
                            </i>
                          </a>
                          </li>
                          <li class="flip-icons">
                            <a href="#" title="Download Event"><i class="fa fa-cloud-download tiptool">
                            	<span class="tooltiptext">Download Event</span> 
                            </i></a>
                          </li>
                          <li class="flip-icons">
                            <a href="#" title="Contact Us"><i class="fa fa-envelope tiptool">
                            	<span class="tooltiptext">Contact Us</span> 
                            </i></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </td>
                  <td class="btn-success">Live</td>
                  <td>EWG-12345</td>
                  <td>Saturday 29th Apr</td>
                </tr>
                <!--<tr>
                        <td>Grooving the Moo, Townsville, QLD</td>
                        <td class="btn-info">Recruiting</td>
                        <td>EWG-12345</td>  
                        <td>Sunday 30th Apr</td>
                        
                      </tr>
                      <tr>
                        <td>Grooving the Moo, Bendigo, VIC</td>
                        <td class="btn-primary">Download</td>
                        <td>EWG-12345</td>  
                        <td>Saturday 6th May</td>
                        <td>+</td> 
                      </tr>  
                      <tr>
                        <td>Grooving the Moo, Canberra, ACT</td>
                        <td class="btn-warning">Submitted</td>
                        <td>EWG-12345</td>  
                        <td>Sunday 7th May</td>
                       
                      </tr>  
                      <tr>
                        <td>Grooving the Moo, Bunbury, WA</td>
                        <td class="btn-primary">Download</td>
                        <td>EWG-12345</td>  
                        <td>Sunday 13th May</td>
                                              </tr>
                      <tr>
                        <td>Grooving the Moo, Bunbury, WA</td>
                        <td class="btn-info">Recruiting</td>
                        <td>EWG-12345</td>  
                        <td>Sunday 13th May</td>
                       
                      </tr>
                       <tr>
                        <td>Grooving the Moo, Bunbury, WA</td>
                        <td class="btn-warning">Submitted</td>
                        <td>EWG-12345</td>  
                        <td>Sunday 13th May</td>
                       
                      </tr>-->
              </tbody>
            </table>
          </section>
        </div>

      </div>
      <div class="widget">
        <div class="title">Past Events</div>
        <div class="chart">
            <div class="past_events">
              
            </div>
        </div>
      </div>
      
      <!--NOTICEBOARD-->
      <div class="widget">
        <div class="title">Noticeboard</div>
        <div class="chart"></div>
      </div>
      
      <!--INSTAGRAM-->
      <div class="widget">
        <div class="title">Instagram</div>
        <div class="chart"></div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript
    ================================================== -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="js/scripts.js"></script>

  <!--
<script src="main.js"></script>
-->
  <!-- Placed at the end of the document so the pages load faster 
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>-->



  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>

</html>