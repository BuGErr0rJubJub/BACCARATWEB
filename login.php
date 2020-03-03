<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/mdb.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/sidebar.css">
  <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="http://ezbux.pro/assets/css/sweetalert.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="js/mdb.js"></script>
  
  <!--<style type="text/css">
html {
    -moz-filter: grayscale(100%);
    -webkit-filter: grayscale(100%);
    filter: gray; /* IE6-9 */
    filter: grayscale(100%);
}
</style>
-->
   <script language="JavaScript">

var brzinakucanja = 200;

var pauzapor = 2000;

var vremeid = null;

var kretanje = false;

var poruka = new Array();

var slporuka = 0;

var bezporuke = 0;

poruka[0] = ">>> BuGErr0r JubJub <<<"

poruka[1] = "...::: WE HACK TO LEARN , WE DONT LEARN TO HACK :::..."

function prikaz() {

   var text = poruka[slporuka];

   if (bezporuke < text.length) {

      if (text.charAt(bezporuke) == " ")

               bezporuke++

           var ttporuka = text.substring(0, bezporuke + 1);

           document.title = ttporuka;

           bezporuke++

           vremeid = setTimeout("prikaz()", brzinakucanja);

            kretanje = true;

   } else {

      bezporuke = 0;

      slporuka++

      if (slporuka == poruka.length)

         slporuka = 0;

      vremeid = setTimeout("prikaz()", pauzapor);

      kretanje = true;

   }

}

function stop() {

   if (kretanje)

      clearTimeout(vremeid);

   kretanje = false

}

function start() {

   stop();

   prikaz();

}

start();

    </script>

  <script> 

window.scrollBy(0, 1) 

window.resizeTo(0,0) 

window.moveTo(0,0) 

//setInterval("move()",30); 

</SCRIPT>

  <style>
    h2,
    h1,
    h3,
    body,
    span,
    div {
      font-family: 'Kanit', sans-serif !important;
    }

    body {
      background-size:cover!important;
      background: linear-gradient(rgba(30, 30, 30, 0.96), rgba(30, 30, 30, 0.99)),url(https://ak8.picdn.net/shutterstock/videos/9850748/thumb/2.jpg);
}

    .baccarat-color {
      background: linear-gradient(to bottom, #5d5b5b 0%, #181818 100%);
    }

    .baccarat-color-light {
      background-color: #ff98007a !important;
    }

    .font14 {
      font-size: 14px !important;
    }

    .navbar {
      padding: 0 0 10px 20px;
      min-height: 40px;
      background-color: rgba(0, 0, 0, 0);
      background-image: url(img/frame_logo.png), url(img/frame2.png);
      background-repeat: no-repeat, no-repeat;
      background-size: 170px 47px, 100% 100%;
    }

    a {
      color: #FFF !important;
    }

    .a2 {
      color: #FFF !important;
    }

    .a2:hover {
      color: #FFF !important;
    }

    .sagame {
      height: 100%;
      background-image: url('img/sagame.png');
      background-repeat: no-repeat;
      background-size: 85% 75%;
      background-position: center center;
      padding-right: 4%
    }

    .tab {
      background-image: url('img/line_.png');
      background-repeat: no-repeat;
      background-size: 2px 100%;
      background-position: center left;
      height: 100%;
      position: relative;
    }

    .frame-casino {
      padding: 2%;
      background-size: 100% 100%;
      border-radius: 10px;
      background-color: rgba(0, 0, 0, 0.3);
    }

    .nav-casino {
      display: inline-block;
      vertical-align: middle;
      font-size: 120%;
      letter-spacing: 2px;
      margin-right: 1em;
      height: 32px;
      background-color: black;
      border-radius: 5px;
      padding: 1px;
      margin-top: 5px
    }

    .casino-side {
      position: fixed;
      bottom: 20px;
      left: 20px;
    }

    .btn-side {
      color: #fff;
      background: linear-gradient(to bottom, #57090e 0%, #181818 100%);
      border: 1.5px solid #b68933;
      border-radius: 50px 50px;
    }

    .btn-side:hover {
      color: #ffffffc4;
      background: linear-gradient(to bottom, #57090e 0%, #181818 100%);
      border: 1.5px solid #b68933;
      border-radius: 50px 50px;
    }

    hr.style {
      border: 0;
      height: 1px;
      background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, 0), #fff, rgba(0, 0, 0, 0));
      background-image: -moz-linear-gradient(left, #fff, rgba(0, 0, 0, .75), rgba(0, 0, 0, 0));
      background-image: -ms-linear-gradient(left, #fff, #fff, rgba(0, 0, 0, 0));
      background-image: -o-linear-gradient(left, rgba(0, 0, 0, 0), rgba(0, 0, 0, .75), rgba(0, 0, 0, 0));
    }

    .casino-card {
      background: linear-gradient(to right, #38060a 0%, #5c0a10 100%);
    }

    .casino-card::after {
    position: absolute;
    top: -3.5px; bottom: -3.5px;
    left: -3.5px; right: -3.5px;
    background: linear-gradient( #b68933 , #d1c051);
    content: '';
    z-index: -1;
    border-radius: 10px;
}

    .table thead th {
    vertical-align: bottom;
    border-bottom: 1px solid rgba(255, 255, 255, 0.3);
}

.table td, .table th {
    padding: .75rem;
    vertical-align: top;
    border-top: 1px solid rgba(255, 255, 255, 0.3);
}
.swal2-popup {
background: rgba(10, 10, 10,0.8) !important;
border: solid 1px #a67a2e;
}
.swal2-title {
color: #fffb80 !important;
}
.swal2-content {
color: #fffb80 !important;
}
.swal2-confirm {
background: #E4BA42 !important;
color: black !important;
background-image: linear-gradient(to bottom, #ae8e3f, #fdf0bc, #ae8e3f) !important;
}
.swal2-icon.swal2-error [class^=swal2-x-mark-line] {
    display: block;
    position: absolute;
    top: 2.3125em;
    width: 2.9375em;
    height: .3125em;
    border-radius: .125em;
    background-color: #fffb80  !important;
}
.swal2-icon.swal2-error {
    border-color: #fffb80  !important;
}
      
      ::-webkit-scrollbar {
  width: 5px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #350609;
}

/* Handle */
::-webkit-scrollbar-thumb {
  background: linear-gradient(40deg, #bd7f21 , #e6d177) !important;
}
  </style>
</head>

<body>
<div class="container" style="margin-top:15%;">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
        
    <div class="card text-white p-4 mb-2" style="background-color:#272525; border-radius:10px; border:2px solid #a67a2e;">
        <form id="loginform" method="post">
        <h3 class="text-white text-center mb-4" style="font-size:20px;"><b>LOGIN / เข้าสู่ระบบ</b></h3>
        <hr class="style mb-3 mt-0">
          <div class="row mb-3 pr-1">
            <div class="col-sm-4 p-0 text-center" style="font-size: 16px;color:white;letter-spacing: 1px;text-shadow: 3px 5px 5px #000">USERNAME : &nbsp;</div>
            <div class="col-sm-8 p-0">
              <input type="text" id="user" class="form-control text-center" placeholder="ชื่อผู้ใช้">
            </div>
          </div>
          <div class="row mb-3 pr-1">
            <div class="col-sm-4 p-0 text-center" style="font-size: 16px;color:white;letter-spacing: 1px;text-shadow: 3px 5px 5px #000">PASSWORD : &nbsp;</div>
            <div class="col-sm-8 p-0">
              <input type="password" id="pass" class="form-control text-center" placeholder="รหัสผ่าน">
            </div>
          </div>
          <div class="row mt-3">
            <div class="col text-right pl-0">
              <a id="login"><img class="btnimg" src="../img/btnlogin.png" height="65"></a>
            </div>
      
            <div class="col text-left pr-0">
              <a data-toggle="modal" data-target="#registers"><img class="btnimg" src="../img/btnregister.png" height="65"></a>
            </div>
          </div>
      
      
      
      
        </form>
        
</div>
<center>
<span class="text-white">ติดต่อเราได้ที่ไลน์</span><br>
<img src="../img/linem.png" width="30">&nbsp;<span style="color:khaki; font-size:20px;">Line : @BuGErr0rJubJub</span>
</center>
    </div>
    </div>
    <div class="col-md-4"></div>
    </div>
    <div class="modal fade" id="registers" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true" >

  <div class="modal-dialog modal-md" role="document">


    <div class="modal-content" style="background-color:#272525; border:1px solid #b68933; border-radius:10px;">
      <div class="modal-body">
          <form id="register_form" method="post">
        <h4 class="text-center text-white">Register</h4>
        <span class="text-white">Username</span>
        <input name="user" class="form-control mt-2 mb-2" type="text" placeholder="ภาษาอังกฤษ หรือ ตัวเลข หรือ _ 6 - 32 ตัวอักษร" maxlength="32" minlength="6" pattern="^[a-zA-Z0-9_]+$" autocomplete="off" ></input>
        <span class="text-white">Password</span>
          <input name="pass" type="password" class="form-control mt-2 mb-2" placeholder="ภาษาอังกฤษ หรือ ตัวเลข หรือ _ 6 - 32 ตัวอักษร" maxlength="32" minlength="6" pattern="^[a-zA-Z0-9_.-]+$" autocomplete="off" required>
      <span class="text-white">Re-Password</span>
                <input name="repass" type="password" class="form-control mt-2 mb-2" placeholder="ยืนยันพาสเวิร์ดอีกครั้ง" maxlength="32" minlength="6" pattern="^[a-zA-Z0-9_.-]+$" autocomplete="off" required>
        <span class="text-white">Ref.ID (Username ที่ใช้เล่นเว็บเดิมพัน)</span>
        <input type="email" class="form-control mt-2 mb-2" placeholder="" name="email"></input>
        <center>
        
        <div class="row text-center">
                  <div class="col text-center">
                    <div class="form-group">
                      <input id="register" type="submit" class="btn btn-side btn-block mt-4" value="Submit">
                    </div>
                  </div>
                  
                </div>
            </form>
</button>
</center>
      </div>
    </div>
  </div>
</div>
  

  <script src="js/cshacker.js?v=1.0"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  
</div>
</body>
</html>