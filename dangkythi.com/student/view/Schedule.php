<?php session_start() ?>

<?php  
		include_once '../model/m_schedule.php';
		$_schedule = new ModelExam();
		$schedule = $_schedule->getExamSchedule($_SESSION['userID']);				
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Lịch thi</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="../../css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="../../css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="../../css/morris.css" type="text/css"/>
<!-- Graph CSS -->
<link href="../../css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="../../js/jquery-2.1.4.min.js"></script>
<!-- //jQuery -->
<!-- tables -->
<link rel="stylesheet" type="text/css" href="../../css/table-style.css" />
<link rel="stylesheet" type="text/css" href="../../css/basictable.css" />
<script type="text/javascript" src="../../js/jquery.basictable.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
      $('#table').basictable();

      $('#table-breakpoint').basictable({
        breakpoint: 768
      });

      $('#table-swap-axis').basictable({
        swapAxis: true
      });

      $('#table-force-off').basictable({
        forceResponsive: false
      });

      $('#table-no-resize').basictable({
        noResize: true
      });

      $('#table-two-axis').basictable();

      $('#table-max-height').basictable({
        tableWrapper: true
      });
    });
</script>
<!-- //tables -->
<!-- lined-icons -->
<link rel="stylesheet" href="../../css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
</head> 
<body>
   <div class="page-container">
   <!--/content-inner-->
<div class="left-content">
     <div class="mother-grid-inner">
             <!--header start here-->
        <div class="header-main">
          <div class="logo-w3-agile">
                <h1><a href="../../index.php">ĐH.Công Nghệ</a></h1>
              </div>
          <div class="w3layouts-left">
              
              <!--search-box-->
                <div class="w3-search-box">
                  <form action="#" method="post">
                    <input type="text" placeholder="Tìm kiếm..." required=""> 
                    <input type="submit" value="">          
                  </form>
                </div><!--//end-search-box-->
              <div class="clearfix"> </div>
             </div>
             <div class="w3layouts-right">
              <div class="profile_details_left"><!--notifications of menu start -->
                <ul class="nofitications-dropdown">
                  <li class="dropdown head-dpdn">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i><span class="badge">3</span></a>
                    <ul class="dropdown-menu">
                      <li>
                        <div class="notification_header">
                          <h3>You have 3 new messages</h3>
                        </div>
                      </li>
                      <li><a href="#">
                         <div class="user_img"><img src="../../images/in11.jpg" alt=""></div>
                         <div class="notification_desc">
                        <p>Lorem ipsum dolor</p>
                        <p><span>1 hour ago</span></p>
                        </div>
                         <div class="clearfix"></div> 
                      </a></li>
                      <li class="odd"><a href="#">
                        <div class="user_img"><img src="../../images/in10.jpg" alt=""></div>
                         <div class="notification_desc">
                        <p>Lorem ipsum dolor </p>
                        <p><span>1 hour ago</span></p>
                        </div>
                        <div class="clearfix"></div>  
                      </a></li>
                      <li><a href="#">
                         <div class="user_img"><img src="../../images/in9.jpg" alt=""></div>
                         <div class="notification_desc">
                        <p>Lorem ipsum dolor</p>
                        <p><span>1 hour ago</span></p>
                        </div>
                         <div class="clearfix"></div> 
                      </a></li>
                      <li>
                        <div class="notification_bottom">
                          <a href="#">See all messages</a>
                        </div> 
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown head-dpdn">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">3</span></a>
                    <ul class="dropdown-menu">
                      <li>
                        <div class="notification_header">
                          <h3>You have 3 new notification</h3>
                        </div>
                      </li>
                      <li><a href="#">
                        <div class="user_img"><img src="images/in8.jpg" alt=""></div>
                         <div class="notification_desc">
                        <p>Lorem ipsum dolor</p>
                        <p><span>1 hour ago</span></p>
                        </div>
                        <div class="clearfix"></div>  
                       </a></li>
                       <li class="odd"><a href="#">
                        <div class="user_img"><img src="images/in6.jpg" alt=""></div>
                         <div class="notification_desc">
                        <p>Lorem ipsum dolor</p>
                        <p><span>1 hour ago</span></p>
                        </div>
                         <div class="clearfix"></div> 
                       </a></li>
                       <li><a href="#">
                        <div class="user_img"><img src="images/in7.jpg" alt=""></div>
                         <div class="notification_desc">
                        <p>Lorem ipsum dolor</p>
                        <p><span>1 hour ago</span></p>
                        </div>
                         <div class="clearfix"></div> 
                       </a></li>
                       <li>
                        <div class="notification_bottom">
                          <a href="#">See all notifications</a>
                        </div> 
                      </li>
                    </ul>
                  </li> 
                  <li class="dropdown head-dpdn">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue1">9</span></a>
                    <ul class="dropdown-menu">
                      <li>
                        <div class="notification_header">
                          <h3>You have 8 pending task</h3>
                        </div>
                      </li>
                      <li><a href="#">
                        <div class="task-info">
                          <span class="task-desc">Database update</span><span class="percentage">40%</span>
                          <div class="clearfix"></div>  
                        </div>
                        <div class="progress progress-striped active">
                          <div class="bar yellow" style="width:40%;"></div>
                        </div>
                      </a></li>
                      <li><a href="#">
                        <div class="task-info">
                          <span class="task-desc">Trang chủ</span><span class="percentage">90%</span>
                           <div class="clearfix"></div> 
                        </div>
                        <div class="progress progress-striped active">
                           <div class="bar green" style="width:90%;"></div>
                        </div>
                      </a></li>
                      <li><a href="#">
                        <div class="task-info">
                          <span class="task-desc">Mobile App</span><span class="percentage">33%</span>
                          <div class="clearfix"></div>  
                        </div>
                         <div class="progress progress-striped active">
                           <div class="bar red" style="width: 33%;"></div>
                        </div>
                      </a></li>
                      <li><a href="#">
                        <div class="task-info">
                          <span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
                           <div class="clearfix"></div> 
                        </div>
                        <div class="progress progress-striped active">
                           <div class="bar  blue" style="width: 80%;"></div>
                        </div>
                      </a></li>
                      <li>
                        <div class="notification_bottom">
                          <a href="#">See all pending tasks</a>
                        </div> 
                      </li>
                    </ul>
                  </li> 
                  <div class="clearfix"> </div>
                </ul>
                <div class="clearfix"> </div>
              </div>
              <!--notification menu end -->
              
              <div class="clearfix"> </div>       
            </div>
            <div class="profile_details w3l">   
                <ul>
                  <li class="dropdown profile_details_drop">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                      <div class="profile_img"> 
                        <span class="prfil-img"><img src="../../images/in4.jpg" alt=""> </span> 
                        <div class="user-name">
                          <p><?php echo $_SESSION['fullname'];  ?></p>
                          <span><?php  
                            if ($_SESSION['role']=="sinh vien") {
                              echo 'sinh viên';
                            }else {
                              echo 'quản trị viên';
                            }
                          ?></span>
                        </div>
                        <i class="fa fa-angle-down"></i>
                        <i class="fa fa-angle-up"></i>
                        <div class="clearfix"></div>  
                      </div>  
                    </a>
                    <ul class="dropdown-menu drp-mnu">
                      <li> <a href="#"><i class="fa fa-cog"></i> Cài đặt </a> </li> 
                      <li> <a href="#"><i class="fa fa-user"></i> Hồ sơ </a> </li> 
                      <li> <a href="../../login/controller/logout.php"><i class="fa fa-sign-out"></i> Đăng xuất </a> </li>
                    </ul>
                  </li>
                </ul>
              </div>
              
             <div class="clearfix"> </div>  
        </div>
        <script>
              var toggle = true;
                    
              $(".sidebar-icon").click(function() {                
                if (toggle)
                {
                $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
                $("#menu span").css({"position":"absolute"});
                }
                else
                {
                $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
                setTimeout(function() {
                  $("#menu span").css({"position":"relative"});
                }, 400);
                }
                      
                      toggle = !toggle;
                    });
              </script>
<!--header end here-->
    <ol class="breadcrumb"> 
                <li class="breadcrumb-item"><a href="../../index.php">Trang chủ</a> <i class="fa fa-angle-right"></i></li>
                <li class="breadcrumb-item"><a href="schedule.php">Lịch thi</a> <i class="fa fa-angle-right"></i></li>
            </ol>
<div class="agile-grids">	
				<!-- tables -->
				<button class="btn-primary btn" onclick="printcontent('listPartici')">In danh sách</button>
        <button class="btn-primary btn" onclick="printword()">Xuất ra file word</button>
				<div class="agile-tables" id="listPartici">
					<div class="w3l-table-info">
					  <h2>Lịch thi</h2>
					    <table id="table">
						<thead>
						  <tr>
							<th>STT</th>
							<th>Mã môn</th>
							<th>Tên môn</th>
							<th>Ngày thi</th>
							<th>Ca thi</th>
							<th>Giờ thi</th>
							<th>Phòng thi</th>
							<th>SBD</th>
						  </tr>
						</thead>
						<tbody>
						 	<?php 
									for($i=1; $i < sizeof($schedule); $i++){
											echo "<tr><td>".$i."</td><td>".$schedule[$i]->termCode."</td><td>"
															.$schedule[$i]->termName."</td><td>"
															.$schedule[$i]->examDate."</td><td>"
															.$schedule[$i]->examShift."</td><td>"
															.$schedule[$i]->examTime."</td><td>"
															.$schedule[$i]->examRoom."</td><td>"
                              .$schedule[$i]->examId."</td></tr>";
									}
							?>
						</tbody>
					  </table>
					</div>
				<!-- //tables -->
			</div>
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->

<!--agileinfo-grap-->

<!--//agileinfo-grap-->
<!--photoday-section-->  
                        
                      
    <script>
    $(document).ready(function() {
       var navoffeset=$(".header-main").offset().top;
       $(window).scroll(function(){
        var scrollpos=$(window).scrollTop(); 
        if(scrollpos >=navoffeset){
          $(".header-main").addClass("fixed");
        }else{
          $(".header-main").removeClass("fixed");
        }
       });
       
    });
    </script>
    <!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">

</div>
<!--inner block end here-->
</div>
</div>
  <!--//content-inner-->
      <!--/sidebar-menu-->
        <div class="sidebar-menu">
          <header class="logo1">
            <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> 
          </header>
            <div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
                           <div class="menu">
                  <ul id="menu" >
                    <li><a href="../../index.php"><i class="fa fa-tachometer"></i> <span>Trang chủ</span><div class="clearfix"></div></a></li>

                      <li><a href="schedule.php"><i class="fa fa-table"></i> <span>Lịch thi</span><div class="clearfix"></div></a></li>

                      <li><a href="../controller/c_term.php"><i class="fa fa-check-square-o nav_icon"></i><span>Đăng ký thi</span> </span><div class="clearfix"></div></a></li>
                  </ul>
                </div>
                </div>
                <div class="clearfix"></div>    
              </div>
              <script>
              var toggle = true;
                    
              $(".sidebar-icon").click(function() {                
                if (toggle)
                {
                $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
                $("#menu span").css({"position":"absolute"});
                }
                else{
                $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
                setTimeout(function() {
                  $("#menu span").css({"position":"relative"});
                }, 400);
                }
                      
                      toggle = !toggle;
                    });
              </script>
<script src="../../js/jquery.nicescroll.js"></script>
<script src="../../js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="../../js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->     
<!-- morris JavaScript -->  
<script src="../../js/raphael-min.js"></script>
<script src="../../js/morris.js"></script>
<script>
    function printword() {
    var header = "<html xmlns:o='urn:schemas-microsoft-com:office:office' " +
      "xmlns:w='urn:schemas-microsoft-com:office:word' " +
      "xmlns='http://www.w3.org/TR/REC-html40'>" +
      "<head><meta charset='utf-8'><title>Export HTML to Word Document with JavaScript</title></head><body>";
    var footer = "</body></html>";
    var sourceHTML = document.getElementById("listPartici").innerHTML ;

    var source = 'data:application/vnd.ms-word;charset=utf-8,' + encodeURIComponent(sourceHTML);
    var fileDownload = document.createElement("a");
    document.body.appendChild(fileDownload);
    fileDownload.href = source;
    fileDownload.download = 'document.doc';
    fileDownload.click();
    document.body.removeChild(fileDownload);
  }
  function printcontent(element) {
    var restorePage = document.body.innerHTML;
    var printcontent = document.getElementById(element).innerHTML;
    document.body.innerHTML = printcontent;
    window.print();
    document.body.innerHTML = restorePage;
  }
</script>
</body>
</html>


