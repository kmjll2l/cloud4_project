<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="">
    <title>iot3-EXIT</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Days+One&display=swap" rel="stylesheet">
    <link href="./cctv.css?ver=5" rel="stylesheet">
</head>
<body style="background-color: #5B6DDF; background-size: 200px; position: right;">
<nav>
      <li><a class="cctv" href="http://20.200.177.121:8081/cctv.php">CCTV</a></li> 
      <li><a class="info" href="http://20.200.177.121:8081/info.php">INFO▼</a>
        <ul>
            <li><a href="http://20.200.177.121:8081/info.php#t2">SKILL</a></li>
            <li><a href="http://20.200.177.121:8081/info.php#t3">PREVIEW</a></li>
            <li><a href="http://20.200.177.121:8081/info.php#t4">GUI</a></li>
            <li><a href="http://20.200.177.121:8081/info.php#t5">FLOW</a></li>
            <!-- https://aboooks.tistory.com/330 -->
        </ul>
      </li>
      <li><a class="team" href="http://20.200.177.121:8081/team.php">TEAM</a><li>
  </nav>

<div style="margin-left:15%;padding:1px 16px;height:auto;">
  <div style="TEXT-ALIGN:CENTER">

  <img src = "cctv_4.png" style="width:80%; height:auto;"></img>
  
      <iframe src="http://192.168.1.179:8090/?action=stream" style="width:100%; height:500px;margin-top:10px;margin-bottom:10px;"></iframe>

      
      <iframe src="http://20.200.177.121:3000/d-solo/f4DcuMn4z/cam_data_acc?orgId=1&from=1663298544506&to=1663298576673&panelId=4"
            style="width:49%; height:250px; float:left;"></iframe> 

      <iframe src="http://20.200.177.121:3000/d-solo/f4DcuMn4z/cam_data_acc?orgId=1&from=1663298544506&to=1663298576673&panelId=2"
            style="width:49%; height:250px; float:right;"></iframe> 
      <!-- https://ojji.wayful.com/2013/12/HTML-set-Two-Parallel-DIVs-columns.html -->
  <img src = "cctv (2).png" style="width:100%; height:auto;"></img>
    </div>
  </div>
