<?php session_start() ?>

<?php 

	include_once '../model/m_term.php';
	$modelTerm = new ModelTerm();
	$term = $modelTerm->getSelectedTerm($_GET['code']);
	$shiftList = $modelTerm->getExamShift($_GET['code']);
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
<title><?php echo $term->name;?></title>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
                         <div class="user_img"><img src="images/in11.jpg" alt=""></div>
                         <div class="notification_desc">
                        <p>Lorem ipsum dolor</p>
                        <p><span>1 hour ago</span></p>
                        </div>
                         <div class="clearfix"></div> 
                      </a></li>
                      <li class="odd"><a href="#">
                        <div class="user_img"><img src="images/in10.jpg" alt=""></div>
                         <div class="notification_desc">
                        <p>Lorem ipsum dolor </p>
                        <p><span>1 hour ago</span></p>
                        </div>
                        <div class="clearfix"></div>  
                      </a></li>
                      <li><a href="#">
                         <div class="user_img"><img src="images/in9.jpg" alt=""></div>
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

<!--header end here-->
    <ol class="breadcrumb"> 
                <li class="breadcrumb-item"><a href="../../index.php">Trang chủ</a> <i class="fa fa-angle-right"></i></li>
                <li class="breadcrumb-item"><a href="../controller/c_term.php">Danh sách môn thi</a> <i class="fa fa-angle-right"></i></li>
                <li class="breadcrumb-item"><a href="../controller/c_term.php?code=<?php echo $_GET['code'];?>"><?php echo "[".$term->code."] ".$term->name.""; ?></a> <i class="fa fa-angle-right"></i></li>
            </ol>
<div class="agile-grids">	
				<!-- tables -->
				
				<div class="agile-tables">
					<div class="w3l-table-info">
					  <h2><?php echo "[".$term->code."] ".$term->name.""; ?></h2>
<?php 
	include '../../core/Connector.php';
	if (isset($_SESSION['username'])) {
		$sql='call kiemTraMonHoc('.$term->id.", ".$_SESSION['userID'].")";
		$query = mysqli_query($mysqli, $sql);
		$row = mysqli_fetch_assoc($query);
		if (mysqli_num_rows($query)==0) {
			echo "Bạn không đăng kí học phần này";
		}else if (mysqli_num_rows($query)==1) {
			if ($row['check_']==0) {
				echo "Bạn không đủ điều kiện dự thi";
			}else if ($row['check_']==1){
        echo $_GET['result'];
				echo "<form action='../controller/c_term.php' method='POST'>";
				echo '<table id="table">
						<thead>
						  <tr>
							<th>STT</th>
							<th>Học kì</th>
							<th>Ngày thi</th>
							<th>Ca thi</th>
							<th>Giờ thi</th>
							<th>Phòng thi</th>
							<th>Đã đăng ký</th>
							<th></th>
						  </tr>
						</thead>
						<tbody>';
				for($i=1; $i < count($shiftList); $i++){
					include '../../core/Connector.php';
					$sql1="call inDsThiSinh(".$shiftList[$i]->idShift.", ".$shiftList[$i]->idRoom.", ".$term->id.")";	
					$query1 = mysqli_query($mysqli, $sql1);
					$numRow = mysqli_num_rows($query1);
					echo "<tr><td>".$i."</td><td>".$shiftList[$i]->semester."</td><td>"
					.$shiftList[$i]->date."</td><td>"
					.$shiftList[$i]->nameShift."</td><td>"
					.$shiftList[$i]->time."</td><td>"
					.$shiftList[$i]->nameRoom."</td><td>"
					.$numRow." người</td><td>
					<input type='radio' name='select' id='" .$shiftList[$i]->idShift."/" 													 	.$shiftList[$i]->idRoom.
													"' value='".$term->id."/"
															   .$shiftList[$i]->idShift."/"
															   .$shiftList[$i]->idRoom."/"
															   .$_GET['code']."'></td></tr>";
				}

				include '../../core/Connector.php';
				$sql2='call xuatLichThi('.$_SESSION['userID'].", ".$term->id.")";
				$query2 = mysqli_query($mysqli, $sql2);
				$row2 = mysqli_fetch_assoc($query2);
				echo '<script type="text/javascript">
		                  	$(document).ready(function(){
		                    	document.getElementById("'.$row2['cathi_id'].'/'.$row2['phongthi_id'].'").checked = true;
		                  	});
		                </script>';

				echo '</tbody>
					  </table><br>';
				
				echo '<button class="btn-primary btn" type="submit" name="register">Thêm</button>
				</form><br>';
			}else {echo 'Có lỗi xảy ra';}
		}else{echo 'Có lỗi xảy ra';}
	}
?>
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

<?php 
	if ($_GET['result'] == "fail") {
    echo '<script>
      $(document).ready(function(){
          alert("Đăng ký thất bại");
      });
    </script>';
			$_GET['result']='no';
	}else if($_GET['result'] == "success"){
		echo '<script>
			$(document).ready(function(){
  				alert("Đăng ký thành công");
			});
		</script>';
		$_GET['result']='no';
	}
	
?>


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
<script src="../../s/jquery.nicescroll.js"></script>
<script src="../../js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="../../js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->     
<!-- morris JavaScript -->  
<script src="../../js/raphael-min.js"></script>
<script src="../../js/morris.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		//BOX BUTTON SHOW AND CLOSE
	   jQuery('.small-graph-box').hover(function() {
		  jQuery(this).find('.box-button').fadeIn('fast');
	   }, function() {
		  jQuery(this).find('.box-button').fadeOut('fast');
	   });
	   jQuery('.small-graph-box .box-close').click(function() {
		  jQuery(this).closest('.small-graph-box').fadeOut(200);
		  return false;
	   });
</script>
</body>
</html>


