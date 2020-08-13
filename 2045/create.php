<?php
    function print_title(){
      if(isset($_GET['id'])){
        echo $_GET['id'];
      }else{
         echo "Welcome";
           }
        }
function print_list(){
  $list = scandir('./data');
  $i = 0;
  while($i<count($list)){
    if ($list[$i] != '.') {
      if ($list[$i] != '..'){
        echo "<li><a href=\"index.php?id=$list[$i]\">$list[$i]</a></li>\n";
      }
    }
    $i =$i+1;
  }
}
function print_description(){
  if(isset($_GET['id'])){
         echo file_get_contents("data/".$_GET['id']);
       }else {
         echo "hello,php";
       }
}
   ?>

<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="http://localhost/2045/style.css">

    <title>2045
      <?php
     print_title();
     ?>
    </title>
  </head>
  <body>
    <div class="banner">
  <h1><a href="http://localhost/2045/index.php"><span>2</span><span>0</span>45</a></h1>
  <b><p>Hello my friends!!!</p></b>
<div style="font-size:30px;">
   <p>건강하고 아름다운 우리들의 이야기가 시작 됩니다.</p>
</div>

  <p></p>
   <div class="header">
  <b>
    <?php
    print_list();
     ?>
  </b>
       <h2>
         <?php
         print_title();
          ?>
       </h2>
    <?php
    print_description();
     ?>
<p><a href="http://localhost/2045/create.php">create</a></p>

     <form class="" action="http://localhost/2045/create_process.php" method="post">
       <p><input type="text" name="title" placeholder="Title"></p>
       <p><textarea name="description"></textarea></p>
       <p><input type="submit"></p>
      </form>


   </div class="container">
    <div class="contents">

      <b><p>HOW TO</p></b>
      <p>레이어드컷 중에서도 긴머리레이어드는
        드라이를 어떻 하느냐에 따라서
        다르게 연출이 </p>
      <p>가능하다는 장점이 있습니다.자연스러운 c컬과 s컬을 믹스해 드라이 해 준다면,</p>
      <p>훨씬 예쁘게 연출하고 다닐수 있답니다^^</p>
      <p>
       <img src= "img/david-clode-800624-unsplash.jpg"  width="500px;"height="450;">
      </p>
          <div>
            <p>
              <a href="http://localhost/2045/reserve.html">예약</a>
            </p>
          </div>
        </div>
    <div class="side">
    <b>  <p>이달의 이벤트</p></b>

      <img src="img/2.jpg" alt="" width="200;" height="500;">
    </div>
</div>

    <hr>



    <hr>
    <div class="companyinfo">
    <p>Copyright © 2019 마이비즈나우 www.2045.com | 개인정보취급방침</p>
    <p>Serviced by (주)**** | 사업자등록번호 000-00000 | 통신판매업신고 0000-서울서초-0000</p>

    </div>
  </body>
</html>
