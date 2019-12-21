<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="FormatDSsthi.css" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>In Danh sách thi</title>
</head>

<body>

<div class="container" id="page">
	<div id="mainmenu">
		<ul id="yw4">
			<li class="active"><a href="../../index.php">Quay lại</a></li>
		</ul>	
	</div><!-- mainmenu -->

    <div id="content">
	    <div class="span-19">
	        <div id="content">
				<h1 align="center">Danh sách thi Học kỳ</h1>
	    		<a href="../../index.php">Về trang chủ</a>
				<div id="dsthi-grid" class="grid-view">
					<table class="items">
						<thead>
							<tr>
								<th id="dsthi-grid_c0">STT</th>
								<th id="dsthi-grid_c5">SBD</th>
								<th id="dsthi-grid_c6">Mã LMH</th>
								<th id="dsthi-grid_c7">Tên môn học</th>
								<th id="dsthi-grid_c8">Ngày thi</th>
								<th id="dsthi-grid_c10">Ca thi</th>
								<th id="dsthi-grid_c11">Phòng thi</th>
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
															.$schedule[$i]->examRoom."</td></tr>";
									}
							?>
						</tbody>
					</table>
				</div>
			</div><!-- content -->
    	</div>
	</div>

    <div id="footer">

    </div>
    <a href="#" class="scrollup" style="display: inline;">Scroll</a>
</div><!-- page -->
</body>
</html>

