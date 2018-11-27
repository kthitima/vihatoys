<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if (session_id() == '' || !isset($_SESSION)) {
  session_start();
}
include 'config.php';

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=320, initial-scale=1, maximum-scale=1, user-scalable=0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    

    <!-- css -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
    <style>body{font-family: 'Prompt', sans-serif;}</style>
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- DataTables -->
    <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap4.min.css">

    <title>Questionnaire</title>
           <style type="text/css">
           ::-webkit-scrollbar { height: 15px; width: 12px; background: #c1d82e; }
           ::-webkit-scrollbar-thumb:vertical { background-color: #6fa400; height: 5px; border: 1px dashed #8aca04;box-shadow: 0px 0px 15px dc9a7d;color: b71007 }
           ::-webkit-scrollbar-thumb:hover{background:#f9e551;border: 1px dashed #fae96e;box-shadow: 0px 0px 15px 000000;color: 000000 }</style>
        <style type="text/css">body, a:hover {cursor: url(http://cur.cursors-4u.net/food/foo-3/foo258.ani), url(http://cur.cursors-4u.net/food/foo-3/foo258.png), progress;}</style><a href="http://www.cursors-4u.com/cursor/2011/11/15/happy-apple.html" target="_blank" title="Happy Apple"></a>
</head>
<body>
  
<!-- Section navbar -->
    <?php include_once('includes/navbar.php') ?>

<!-- Section Page-Title -->
    <header class="jarallax" data-speed="0.5"  style="background-image: url('toy_shop/images/headbarr.jpg');">
        <div class="page-image">
            <h1 class="display-4"><?php echo $strQuestionnaire; ?></h1>
            <p class=" lead">   </p>
        </div>
    </header>


<!-- Section PAYMENT -->
<div class="container">
      <div class="row" style="justify-content:center;">
<?php if(@$_POST["save"]=="1"){
$sql = "insert into questionnaire (a_1,a_2,a_3,a_4,a_5,a_6,a_7,a_8,a_9,a_10,a_11,a_12,a_13,a_14,a_15,a_16,a_17,a_18)values('".$_POST["a_1"]."','".$_POST["a_2"]."','".$_POST["a_3"]."','".$_POST["a_4"]."','".$_POST["a_5"]."','".$_POST["a_6"]."','".$_POST["a_7"]."','".$_POST["a_8"]."','".$_POST["a_9"]."','".$_POST["a_10"]."','".$_POST["a_11"]."','".$_POST["a_12"]."','".$_POST["a_13"]."','".$_POST["a_14"]."','".$_POST["a_15"]."','".$_POST["a_16"]."','".$_POST["a_17"]."','".$_POST["a_18"]."')";
$mysqli->set_charset("utf8");
        $query = $mysqli->query($sql);
        if($query){ 
echo "<meta http-equiv='refresh' content='0 ;url=index.php'>" ;
		}
			exit;
}?>

<div id="container" style="width:70%;display: table;margin: 0 auto;">
	<div id="header">
	</div>
<form action="questionnaire.php" method="post" name="form" id="demo-form2" data-parsley-validate class="form-horizontal form-label-center">
<?php if ($_SESSION["lang"] == "EN") { ?>
	<div id="body">
<CENTER>
    <br>
<H1>Web Efficiency and Satisfaction Survey</H1>
<H2>Vi-Ha Toy Hochiminh Vietnam Store web system</H2>
     <img src="toy_shop/images/linegreen.jpg" /><img src="toy_shop/images/linegreen.jpg" /><img src="toy_shop/images/linegreen.jpg" /><img src="toy_shop/images/linegreen.jpg" /><img src="toy_shop/images/linegreen.jpg" /><img src="toy_shop/images/linegreen.jpg" /><img src="toy_shop/images/linegreen.jpg" /><img src="toy_shop/images/linegreen.jpg" />
</CENTER>	
<BR>
I am Thitima  Kaiyasa a Bachelor of Computer science student at the University of Khonkaen. I am requesting your participation in a satisfaction survey regarding Vi Ha Toys Website. This survey should only take 5 minutes to complete.You will be asked to fill out a short questionnaire. Personal information will not be released or viewed by anyone other than researchers involved in this project. 
If participants have further questions about this study, they may contact the principal investigator, Thitima Kaiyasa at kthitima@kkumail.com
<BR>
<CENTER><B>Please tick  <img src="toy_shop/images/dotpink.jpg" />  (check) this box to indicate that you consent to taking part in this survey.</B></CENTER>
<BR>
 <B><H3>Section 1: Personal information</H3></B>
					<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="exam_main_name"><b>Gender</b></label>
                      <div class="col-md-12 col-sm-12 col-xs-12">
&nbsp;<input type="radio" name="a_1" value="Male" required="required">
Male
&nbsp;<input type="radio" name="a_1" value="Female" required="required">
Female
&nbsp;<input type="radio" name="a_1" value="Prefer not to say" required="required">
Prefer not to say
</div>
                    </div>
					<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="exam_main_name"><b>Age</b></label>
                      <div class="col-md-12 col-sm-12 col-xs-12">
&nbsp;<input type="radio" name="a_2" value="15-25" required="required">
15-25
&nbsp;<input type="radio" name="a_2" value="26-35" required="required">
26-35
&nbsp;<input type="radio" name="a_2" value="36-45" required="required">
36-45
&nbsp;<input type="radio" name="a_2" value="46-55" required="required">
46-55
&nbsp;<input type="radio" name="a_2" value="56-65" required="required">
56-65
&nbsp;<input type="radio" name="a_2" value="Above 65 years old" required="required">
Above 65 years old
</div>
                    </div>
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="exam_main_name">Education</label>
                      <div class="col-md-12 col-sm-12 col-xs-12">
&nbsp;<input type="radio" name="a_3" value="Highschool" required="required">
Highschool
&nbsp;<input type="radio" name="a_3" value="College/Bachelor Degree" required="required">
College/Bachelor Degree
&nbsp;<input type="radio" name="a_3" value="Master Degree" required="required">
Master Degree
&nbsp;<input type="radio" name="a_3" value="Doctorate Degree or above" required="required">
Doctorate Degree or above
</div>
                    </div>
					<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="exam_main_name"><b>Salary</b></label>
                      <div class="col-md-12 col-sm-12 col-xs-12">
&nbsp;<input type="radio" name="a_4" value="Below 303.03 USD" required="required">
Below 303.03 USD<BR>
&nbsp;<input type="radio" name="a_4" value="303.06 – 606.06 USD" required="required">
303.06 – 606.06 USD<BR>
&nbsp;<input type="radio" name="a_4" value="606.09 – 909.09 USD" required="required">
606.09 – 909.09 USD<BR>
&nbsp;<input type="radio" name="a_4" value="909.12 – 1212.12 USD" required="required">
909.12 – 1212.12 USD<BR>
&nbsp;<input type="radio" name="a_4" value="1212.15 – 1515.15 USD" required="required">
1212.15 – 1515.15 USD<BR>
&nbsp;<input type="radio" name="a_4" value="More than 1515.18 USD" required="required">
More than 1515.18 USD<BR>
</div>
                    </div>
 <B><H3>Section 2: Web Efficiency and Satisfaction Survey</H3></B>
 <B><H4>Section 2.1  Designing and Formatting</H4></B>
                      <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                          <thead>
                            <tr>
							<th>&nbsp;</th>
							<th>Excellent (5)</th>
							<th>Good (4)</th>
							<th>Average (3)</th>
							<th>Low (2)</th>
							<th>Very Low (1)</th>
							</tr>
                          </thead>
                          <tbody>
                          <tr>
                              <td><B>1)  Beauty, Modern, and Interesting of Homepage.</B></td>
                              <td align="center"><input type="radio" name="a_5" value="Excellent (5)" required="required"></td>
                              <td align="center"><input type="radio" name="a_5" value="Good (4)" required="required"></td>
                              <td align="center"><input type="radio" name="a_5" value="Average (3)" required="required"></td>
                              <td align="center"><input type="radio" name="a_5" value="Low (2)" required="required"></td>
                              <td align="center"><input type="radio" name="a_5" value="Very Low (1)" required="required"></td>
						  </tr>
                          <tr>
                              <td><B>2) Formatting of website to easy to read and easy to use.</B></td>
                              <td align="center"><input type="radio" name="a_6" value="Excellent (5)" required="required"></td>
                              <td align="center"><input type="radio" name="a_6" value="Good (4)" required="required"></td>
                              <td align="center"><input type="radio" name="a_6" value="Average (3)" required="required"></td>
                              <td align="center"><input type="radio" name="a_6" value="Low (2)" required="required"></td>
                              <td align="center"><input type="radio" name="a_6" value="Very Low (1)" required="required"></td>
						  </tr>
                          <tr>
                              <td><B>3) Website colors are appropriate.</B></td>
                              <td align="center"><input type="radio" name="a_7" value="Excellent (5)" required="required"></td>
                              <td align="center"><input type="radio" name="a_7" value="Good (4)" required="required"></td>
                              <td align="center"><input type="radio" name="a_7" value="Average (3)" required="required"></td>
                              <td align="center"><input type="radio" name="a_7" value="Low (2)" required="required"></td>
                              <td align="center"><input type="radio" name="a_7" value="Very Low (1)" required="required"></td>
						  </tr>
                          <tr>
                              <td><B>4) Menu button is easy to use.</B></td>
                              <td align="center"><input type="radio" name="a_8" value="Excellent (5)" required="required"></td>
                              <td align="center"><input type="radio" name="a_8" value="Good (4)" required="required"></td>
                              <td align="center"><input type="radio" name="a_8" value="Average (3)" required="required"></td>
                              <td align="center"><input type="radio" name="a_8" value="Low (2)" required="required"></td>
                              <td align="center"><input type="radio" name="a_8" value="Very Low (1)" required="required"></td>
						  </tr>
                          <tr>
                              <td><B>5) Background colors and font colors are suitable for reading.</B></td>
                              <td align="center"><input type="radio" name="a_9" value="Excellent (5)" required="required"></td>
                              <td align="center"><input type="radio" name="a_9" value="Good (4)" required="required"></td>
                              <td align="center"><input type="radio" name="a_9" value="Average (3)" required="required"></td>
                              <td align="center"><input type="radio" name="a_9" value="Low (2)" required="required"></td>
                              <td align="center"><input type="radio" name="a_9" value="Very Low (1)" required="required"></td>
						  </tr>
                          <tr>
                              <td><B>6) Fonts style and Font size are easy to read.</B></td>
                              <td align="center"><input type="radio" name="a_10" value="Excellent (5)" required="required"></td>
                              <td align="center"><input type="radio" name="a_10" value="Good (4)" required="required"></td>
                              <td align="center"><input type="radio" name="a_10" value="Average (3)" required="required"></td>
                              <td align="center"><input type="radio" name="a_10" value="Low (2)" required="required"></td>
                              <td align="center"><input type="radio" name="a_10" value="Very Low (1)" required="required"></td>
						  </tr>
                          <tr>
                              <td><B>7) Pictures and Content can be consistent. And can be meaningful.</B></td>
                              <td align="center"><input type="radio" name="a_11" value="Excellent (5)" required="required"></td>
                              <td align="center"><input type="radio" name="a_11" value="Good (4)" required="required"></td>
                              <td align="center"><input type="radio" name="a_11" value="Average (3)" required="required"></td>
                              <td align="center"><input type="radio" name="a_11" value="Low (2)" required="required"></td>
                              <td align="center"><input type="radio" name="a_11" value="Very Low (1)" required="required"></td>
						  </tr>
                          <tr>
                              <td><B>8) When you visit designing and formatting inside the website you will rate how much satisfaction?</B></td>
                              <td align="center"><input type="radio" name="a_12" value="Excellent (5)" required="required"></td>
                              <td align="center"><input type="radio" name="a_12" value="Good (4)" required="required"></td>
                              <td align="center"><input type="radio" name="a_12" value="Average (3)" required="required"></td>
                              <td align="center"><input type="radio" name="a_12" value="Low (2)" required="required"></td>
                              <td align="center"><input type="radio" name="a_12" value="Very Low (1)" required="required"></td>
						  </tr>
                          </tbody>
                        </table>
 <B><H4>Section 2.2  Quality Content</H4></B>
                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                          <thead>
                            <tr>
							<th>&nbsp;</th>
							<th>Excellent (5)</th>
							<th>Good (4)</th>
							<th>Average (3)</th>
							<th>Low (2)</th>
							<th>Very Low (1)</th>
							</tr>
                          </thead>
                          <tbody>
                          <tr>
                              <td><B>1)  The ease of linking content within a website.</B></td>
                              <td align="center"><input type="radio" name="a_13" value="Excellent (5)" required="required"></td>
                              <td align="center"><input type="radio" name="a_13" value="Good (4)" required="required"></td>
                              <td align="center"><input type="radio" name="a_13" value="Average (3)" required="required"></td>
                              <td align="center"><input type="radio" name="a_13" value="Low (2)" required="required"></td>
                              <td align="center"><input type="radio" name="a_13" value="Very Low (1)" required="required"></td>
						  </tr>
                          <tr>
                              <td><B>2) The ease of linking content outside website such as link with facebook.</B></td>
                              <td align="center"><input type="radio" name="a_14" value="Excellent (5)" required="required"></td>
                              <td align="center"><input type="radio" name="a_14" value="Good (4)" required="required"></td>
                              <td align="center"><input type="radio" name="a_14" value="Average (3)" required="required"></td>
                              <td align="center"><input type="radio" name="a_14" value="Low (2)" required="required"></td>
                              <td align="center"><input type="radio" name="a_14" value="Very Low (1)" required="required"></td>
						  </tr>
                          <tr>
                              <td><B>3) The accuracy and completeness of content.</B></td>
                              <td align="center"><input type="radio" name="a_15" value="Excellent (5)" required="required"></td>
                              <td align="center"><input type="radio" name="a_15" value="Good (4)" required="required"></td>
                              <td align="center"><input type="radio" name="a_15" value="Average (3)" required="required"></td>
                              <td align="center"><input type="radio" name="a_15" value="Low (2)" required="required"></td>
                              <td align="center"><input type="radio" name="a_15" value="Very Low (1)" required="required"></td>
						  </tr>
                          <tr>
                              <td><B>4) The suitability of the content in the website.</B></td>
                              <td align="center"><input type="radio" name="a_16" value="Excellent (5)" required="required"></td>
                              <td align="center"><input type="radio" name="a_16" value="Good (4)" required="required"></td>
                              <td align="center"><input type="radio" name="a_16" value="Average (3)" required="required"></td>
                              <td align="center"><input type="radio" name="a_16" value="Low (2)" required="required"></td>
                              <td align="center"><input type="radio" name="a_16" value="Very Low (1)" required="required"></td>
						  </tr>
                          <tr>
                              <td><B>5) When you visit quality content inside the website you will rate how much satisfaction?</B></td>
                              <td align="center"><input type="radio" name="a_17" value="Excellent (5)" required="required"></td>
                              <td align="center"><input type="radio" name="a_17" value="Good (4)" required="required"></td>
                              <td align="center"><input type="radio" name="a_17" value="Average (3)" required="required"></td>
                              <td align="center"><input type="radio" name="a_17" value="Low (2)" required="required"></td>
                              <td align="center"><input type="radio" name="a_17" value="Very Low (1)" required="required"></td>
						  </tr>
                          </tbody>
                        </table>

 <B><H4>Section 2.3  Recommendation</H4></B>
                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                          <thead>
                            <tr>
							<th>&nbsp;</th>
							<th>Definitely recommend (5)</th>
							<th>Recommend (4)</th>
							<th>Not sure (3)</th>
							<th>Low (2)</th>
							<th>Very Low (1)</th>
							</tr>
                          </thead>
                          <tbody>
                          <tr>
                              <td><B>1)  Would you recommend your friend to visit Vi Ha Toys Website ?</B></td>
                              <td align="center"><input type="radio" name="a_18" value="Definitely recommend (5)" required="required"></td>
                              <td align="center"><input type="radio" name="a_18" value="Recommend (4)" required="required"></td>
                              <td align="center"><input type="radio" name="a_18" value="Not sure (3)" required="required"></td>
                              <td align="center"><input type="radio" name="a_18" value="Low (2)" required="required"></td>
                              <td align="center"><input type="radio" name="a_18" value="Very Low (1)" required="required"></td>
						  </tr>
                          </tbody>
                        </table>
<?php }else{ ?>
	<div id="body">
<CENTER>
    <BR>
    <H3><b>Phiếu khảo sát mức độ hiệu quả và hài lòng về hệ thống </b></H3>
<H3><b>website của cửa hàng đồ chơi</b></H3>
<H3><b>Vi Ha Toys tại thành phố Hồ Chí Minh, Việt Nam</b></H3>
           <img src="toy_shop/images/lineyellow.jpg" /><img src="toy_shop/images/lineyellow.jpg" /><img src="toy_shop/images/lineyellow.jpg" /><img src="toy_shop/images/lineyellow.jpg" /><img src="toy_shop/images/lineyellow.jpg" />
</CENTER>	
<BR>
Tôi là Thitima Kaiyasa, một sinh viên ngành khoa học máy tính tại trường Đại học Khonkaen University Thailand. Xin mời bạn tham gia vào một cuộc khảo sát mức độ hài lòng về website của cửa hàng đồ chơi Vi Ha. Bản khảo sát này sẽ chỉ mất 5 phút để hoàn tất. Bạn sẽ điền vào một bản câu hỏi ngắn. Bên cạnh đó, thông tin cá nhân sẽ không được công khai hoặc xem bởi bất kỳ ai ngoài các nhà nghiên cứu tham gia vào dự án này.
Nếu các bạn có thêm câu hỏi về nghiên cứu này, vui lòng tự nhiên để liên hệ với điều tra viên chính, Thitima Kaiyasa qua địa chỉ mail: kthitima@kkumail.com.
<BR>
<CENTER><B>Xin hãy chọn <img src="toy_shop/images/dotyellow.jpg" />   (check) vào ô vuông để thể hiện sự đồng ý của bạn khi tham gia khảo sát</B></CENTER>
<BR>
 <B><H3>Câu 1: Thông tin cá nhân</H3></B>
					<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="exam_main_name"><b>Giới tính</b></label>
                      <div class="col-md-12 col-sm-12 col-xs-12">
&nbsp;<input type="radio" name="a_1" value="Nam" required="required">
Nam
&nbsp;<input type="radio" name="a_1" value="Nữ" required="required">
Nữ
&nbsp;<input type="radio" name="a_1" value="Không muốn tiết lộ" required="required">
Không muốn tiết lộ
</div>
                    </div>
					<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="exam_main_name"><b>Tuổi</b> </label>
                      <div class="col-md-12 col-sm-12 col-xs-12">
&nbsp;<input type="radio" name="a_2" value="15-25" required="required">
15-25
&nbsp;<input type="radio" name="a_2" value="26-35" required="required">
26-35
&nbsp;<input type="radio" name="a_2" value="36-45" required="required">
36-45
&nbsp;<input type="radio" name="a_2" value="46-55" required="required">
46-55
&nbsp;<input type="radio" name="a_2" value="56-65" required="required">
56-65
&nbsp;<input type="radio" name="a_2" value="Trên 65" required="required">
Trên 65
</div>
                    </div>
					<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="exam_main_name"><b>Trình độ học vấn</b> </label>
                      <div class="col-md-12 col-sm-12 col-xs-12">
&nbsp;<input type="radio" name="a_3" value="Trung học phổ thông" required="required">
Trung học phổ thông
&nbsp;<input type="radio" name="a_3" value="Đạt học/Bằng cử nhân" required="required">
Đạt học/Bằng cử nhân
&nbsp;<input type="radio" name="a_3" value="Bằng thạc sĩ" required="required">
Bằng thạc sĩ
&nbsp;<input type="radio" name="a_3" value="Bằng tiến sĩ hoặc hơn" required="required">
Bằng tiến sĩ hoặc hơn
</div>
                    </div>
					<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="exam_main_name"><b>Mức lương</b></label>
                      <div class="col-md-12 col-sm-12 col-xs-12">
&nbsp;<input type="radio" name="a_4" value="Dưới 7,200,000 VND " required="required">
Dưới 7,200,000 VND<BR>
&nbsp;<input type="radio" name="a_4" value="7,200,720 – 14,400,000 VND" required="required">
7,200,720 – 14,400,000 VND<BR>
&nbsp;<input type="radio" name="a_4" value="14,400,720 – 21,600,000 VND" required="required">
14,400,720 – 21,600,000 VND<BR>
&nbsp;<input type="radio" name="a_4" value="21,600,720 – 28,800,000 VND" required="required">
21,600,720 – 28,800,000 VND<BR>
&nbsp;<input type="radio" name="a_4" value="28,800,720 – 36,000,000 VND" required="required">
28,800,720 – 36,000,000 VND<BR>
&nbsp;<input type="radio" name="a_4" value="Trên 36,000,720 VND" required="required">
Trên 36,000,720 VND<BR>
</div>
                    </div>
 <B><H3>Câu 2: Khảo sát mức độ hài lòng và hiệu quả của trang web: </H3></B>
 <B><H4>Câu 2.1:  Thiết kế và định dạng:</H4></B>
                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                          <thead>
                            <tr>
							<th>&nbsp;</th>
							<th>Xuất sắc (5)</th>
							<th>Tốt (4)</th>
							<th>Trung bình (3)</th>
							<th>Thấp (2)</th>
							<th>Rất thấp (1)</th>
							</tr>
                          </thead>
                          <tbody>
                          <tr>
                              <td><B>1)  Về vẻ đẹp, hiện đại và hấp dẫn của trang chủ.</B></td>
                              <td align="center"><input type="radio" name="a_5" value="Xuất sắc (5)" required="required"></td>
                              <td align="center"><input type="radio" name="a_5" value="Tốt (4)" required="required"></td>
                              <td align="center"><input type="radio" name="a_5" value="Trung bình (3)" required="required"></td>
                              <td align="center"><input type="radio" name="a_5" value="Thấp (2)" required="required"></td>
                              <td align="center"><input type="radio" name="a_5" value="Rất thấp (1)" required="required"></td>
						  </tr>
                          <tr>
                              <td><B>2) Định dạng trang web dễ đọc và sử dụng.</B></td>
                              <td align="center"><input type="radio" name="a_6" value="Xuất sắc (5)" required="required"></td>
                              <td align="center"><input type="radio" name="a_6" value="Tốt (4)" required="required"></td>
                              <td align="center"><input type="radio" name="a_6" value="Trung bình (3)" required="required"></td>
                              <td align="center"><input type="radio" name="a_6" value="Thấp (2)" required="required"></td>
                              <td align="center"><input type="radio" name="a_6" value="Rất thấp (1)" required="required"></td>
						  </tr>
                          <tr>
                              <td><B>3) Màu sắc trang web là phù hợp.</B></td>
                              <td align="center"><input type="radio" name="a_7" value="Xuất sắc (5)" required="required"></td>
                              <td align="center"><input type="radio" name="a_7" value="Tốt (4)" required="required"></td>
                              <td align="center"><input type="radio" name="a_7" value="Trung bình (3)" required="required"></td>
                              <td align="center"><input type="radio" name="a_7" value="Thấp (2)" required="required"></td>
                              <td align="center"><input type="radio" name="a_7" value="Rất thấp (1)" required="required"></td>
						  </tr>
                          <tr>
                              <td><B>4) Phím menu dễ sử dụng.</B></td>
                              <td align="center"><input type="radio" name="a_8" value="Xuất sắc (5)" required="required"></td>
                              <td align="center"><input type="radio" name="a_8" value="Tốt (4)" required="required"></td>
                              <td align="center"><input type="radio" name="a_8" value="Trung bình (3)" required="required"></td>
                              <td align="center"><input type="radio" name="a_8" value="Thấp (2)" required="required"></td>
                              <td align="center"><input type="radio" name="a_8" value="Rất thấp (1)" required="required"></td>
						  </tr>
                          <tr>
                              <td><B>5) Màu nền và màu phông chữ phù hợp để đọc.</B></td>
                              <td align="center"><input type="radio" name="a_9" value="Xuất sắc (5)" required="required"></td>
                              <td align="center"><input type="radio" name="a_9" value="Tốt (4)" required="required"></td>
                              <td align="center"><input type="radio" name="a_9" value="Trung bình (3)" required="required"></td>
                              <td align="center"><input type="radio" name="a_9" value="Thấp (2)" required="required"></td>
                              <td align="center"><input type="radio" name="a_9" value="Rất thấp (1)" required="required"></td>
						  </tr>
                          <tr>
                              <td><B>6) Kiểu chữ và cỡ chữ dễ đọc.</B></td>
                              <td align="center"><input type="radio" name="a_10" value="Xuất sắc (5)" required="required"></td>
                              <td align="center"><input type="radio" name="a_10" value="Tốt (4)" required="required"></td>
                              <td align="center"><input type="radio" name="a_10" value="Trung bình (3)" required="required"></td>
                              <td align="center"><input type="radio" name="a_10" value="Thấp (2)" required="required"></td>
                              <td align="center"><input type="radio" name="a_10" value="Rất thấp (1)" required="required"></td>
						  </tr>
                          <tr>
                              <td><B>7) Hình ảnh và nội dung phù hợp và ý nghĩa.</B></td>
                              <td align="center"><input type="radio" name="a_11" value="Xuất sắc (5)" required="required"></td>
                              <td align="center"><input type="radio" name="a_11" value="Tốt (4)" required="required"></td>
                              <td align="center"><input type="radio" name="a_11" value="Trung bình (3)" required="required"></td>
                              <td align="center"><input type="radio" name="a_11" value="Thấp (2)" required="required"></td>
                              <td align="center"><input type="radio" name="a_11" value="Rất thấp (1)" required="required"></td>
						  </tr>
                          <tr>
                              <td><B>8) Khi bạn truy cập vào thiết kế và định dạng bên trong trang web, bạn sẽ đánh giá mức độ hài lòng của bạn là bao nhiêu?</B></td>
                              <td align="center"><input type="radio" name="a_12" value="Xuất sắc (5)" required="required"></td>
                              <td align="center"><input type="radio" name="a_12" value="Tốt (4)" required="required"></td>
                              <td align="center"><input type="radio" name="a_12" value="Trung bình (3)" required="required"></td>
                              <td align="center"><input type="radio" name="a_12" value="Thấp (2)" required="required"></td>
                              <td align="center"><input type="radio" name="a_12" value="Rất thấp (1)" required="required"></td>
						  </tr>
                          </tbody>
                        </table>
 <B><H4>Câu 2.2:  Chất lượng nội dung:</H4></B>
                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                          <thead>
                            <tr>
							<th>&nbsp;</th>
							<th>Xuất sắc (5)</th>
							<th>Tốt (4)</th>
							<th>Trung bình (3)</th>
							<th>Thấp (2)</th>
							<th>Rất thấp (1)</th>
							</tr>
                          </thead>
                          <tbody>
                          <tr>
                              <td><B>1) Dễ dàng liên kết nội dung trong trang web.</B></td>
                              <td align="center"><input type="radio" name="a_13" value="Xuất sắc (5)" required="required"></td>
                              <td align="center"><input type="radio" name="a_13" value="Tốt (4)" required="required"></td>
                              <td align="center"><input type="radio" name="a_13" value="Trung bình (3)" required="required"></td>
                              <td align="center"><input type="radio" name="a_13" value="Thấp (2)" required="required"></td>
                              <td align="center"><input type="radio" name="a_13" value="Rất thấp (1)" required="required"></td>
						  </tr>
                          <tr>
                              <td><B>2) Dễ dàng liên kết nội dung bên ngoài trang web như liên kết với Facebook.</B></td>
                              <td align="center"><input type="radio" name="a_14" value="Xuất sắc (5)" required="required"></td>
                              <td align="center"><input type="radio" name="a_14" value="Tốt (4)" required="required"></td>
                              <td align="center"><input type="radio" name="a_14" value="Trung bình (3)" required="required"></td>
                              <td align="center"><input type="radio" name="a_14" value="Thấp (2)" required="required"></td>
                              <td align="center"><input type="radio" name="a_14" value="Rất thấp (1)" required="required"></td>
						  </tr>
                          <tr>
                              <td><B>3) Tính chính xác và đầy đủ của nội dung.</B></td>
                              <td align="center"><input type="radio" name="a_15" value="Xuất sắc (5)" required="required"></td>
                              <td align="center"><input type="radio" name="a_15" value="Tốt (4)" required="required"></td>
                              <td align="center"><input type="radio" name="a_15" value="Trung bình (3)" required="required"></td>
                              <td align="center"><input type="radio" name="a_15" value="Thấp (2)" required="required"></td>
                              <td align="center"><input type="radio" name="a_15" value="Rất thấp (1)" required="required"></td>
						  </tr>
                          <tr>
                              <td><B>4) Sự phù hợp của nội dung trong trang web.</B></td>
                              <td align="center"><input type="radio" name="a_16" value="Xuất sắc (5)" required="required"></td>
                              <td align="center"><input type="radio" name="a_16" value="Tốt (4)" required="required"></td>
                              <td align="center"><input type="radio" name="a_16" value="Trung bình (3)" required="required"></td>
                              <td align="center"><input type="radio" name="a_16" value="Thấp (2)" required="required"></td>
                              <td align="center"><input type="radio" name="a_16" value="Rất thấp (1)" required="required"></td>
						  </tr>
                          <tr>
                              <td><B>5) Khi bạn truy cập vào chất lượng nội dung bên trong trang web, bạn sẽ đánh giá mức độ hài lòng của bạn là bao nhiêu?</B></td>
                              <td align="center"><input type="radio" name="a_17" value="Xuất sắc (5)" required="required"></td>
                              <td align="center"><input type="radio" name="a_17" value="Tốt (4)" required="required"></td>
                              <td align="center"><input type="radio" name="a_17" value="Trung bình (3)" required="required"></td>
                              <td align="center"><input type="radio" name="a_17" value="Thấp (2)" required="required"></td>
                              <td align="center"><input type="radio" name="a_17" value="Rất thấp (1)" required="required"></td>
						  </tr>
                          </tbody>
                        </table>

 <B><H4>Câu 2.3:  Sự đề xuất:</H4></B>
						<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                          <thead>
                            <tr>
							<th>&nbsp;</th>
							<th>Chắc chắn (5)</th>
							<th>Sẽ đề xuất (4)</th>
							<th>Có thể (3)</th>
							<th>Không chắc (2)</th>
							<th>Không (1)</th>
							</tr>
                          </thead>
                          <tbody>
                          <tr>
                              <td><B>1) Bạn có muốn giới thiệu bạn bè của mình để ghé thăm trang web đồ chơi Vi Ha không?</B></td>
                              <td align="center"><input type="radio" name="a_18" value="Chắc chắn (5)" required="required"></td>
                              <td align="center"><input type="radio" name="a_18" value="Sẽ đề xuất (4)" required="required"></td>
                              <td align="center"><input type="radio" name="a_18" value="Có thể (3)" required="required"></td>
                              <td align="center"><input type="radio" name="a_18" value="Không chắc (2)" required="required"></td>
                              <td align="center"><input type="radio" name="a_18" value="Không (1)" required="required"></td>
						  </tr>
                          </tbody>
                        </table>
<?php } ?>
<INPUT TYPE="hidden" NAME="save" value="1">
<CENTER>
<button type="submit" class="btn btn-success">Submit</button>
</CENTER><BR><BR>
</form></div>

	</div>
        
      </div>
    </div>


    
 
      


<?php include_once('includes/footer.php') ?>


    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/jarallax/dist/jarallax.min.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDcPIeXddlFIZmsRcAzYWTdfyBtY83Yl9c&callback=initMap"></script>
    <script src="assets/js/main.js"></script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- SlimScroll -->
    <script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../../plugins/fastclick/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
    <!-- DataTables -->
    <script src="https://adminlte.io/themes/AdminLTE/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../../plugins/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- CK Editor -->
    <script src="../../plugins/ckeditor/ckeditor.js"></script>
    <!-- Select2 -->
    <script src="../../plugins/select2/select2.full.min.js"></script>

    <script>
    $(function () {
        $('#dataTable').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": true
        });

        $('.custom-file-input').on('change', function(){
            var fileName = $(this).val().split('\\').pop()
            $(this).siblings('.custom-file-label').html(fileName)
            if (this.files[0]) {
                var reader = new FileReader()
                $('.figure').addClass('d-block')
                reader.onload = function (e) {
                    $('#imgUpload').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0])
            }
        })

        ClassicEditor
        .create(document.querySelector('#detail'))
        .then(function (editor) {
            // The editor instance
        })
        .catch(function (error) {
            console.error(error)
        })

        //Initialize Select2 Elements
        $('.select2').select2()

    });
    
    </script>




</body>
</html>





     

