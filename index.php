<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/fake-seal-usa.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>FAKE GOVERMENT WEBSITE!</title>
</head>
<body>
    <div class="topnav" id="Topnav">
        <a href="#home" class="active">Home</a>
        <a href="#news">News</a>
        <a href="#gallery">Gallery</a>
        <a href="#politics">Politics</a>
        <a href="#documentUpload">Document Uploads</a>
        <a href="login.php" style="float: right">Log in</a>
        <a href="javascript:void(0);" class="icon" onclick="responsiveNav()">
          <i class="fa fa-bars"></i>
        </a>
      </div>
      <div class="hero-image">
        <div class="hero-text">
          <h1 style="font-size: 50px;">WELCOME TO FAKE GOVERMENT <span
            class="txt-rotate"
            data-period="2000"
            data-rotate='[ "WEBSITE.", "ARTICLES.", "IMAGE AND LOGO.", "SYSTEM.", "NEWS!" ]'></span>
          </h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id veritatis harum numquam, labore consectetur quae quia beatae dignissimos, sunt dolor qui pariatur quas, vel nostrum quos neque sapiente odio maiores?</p>
        </div>
      </div>
      <script>
            var TxtRotate = function(el, toRotate, period) {
            this.toRotate = toRotate;
            this.el = el;
            this.loopNum = 0;
            this.period = parseInt(period, 10) || 2000;
            this.txt = '';
            this.tick();
            this.isDeleting = false;
          };

          TxtRotate.prototype.tick = function() {
            var i = this.loopNum % this.toRotate.length;
            var fullTxt = this.toRotate[i];

            if (this.isDeleting) {
              this.txt = fullTxt.substring(0, this.txt.length - 1);
            } else {
              this.txt = fullTxt.substring(0, this.txt.length + 1);
            }

            this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

            var that = this;
            var delta = 300 - Math.random() * 100;

            if (this.isDeleting) { delta /= 2; }

            if (!this.isDeleting && this.txt === fullTxt) {
              delta = this.period;
              this.isDeleting = true;
            } else if (this.isDeleting && this.txt === '') {
              this.isDeleting = false;
              this.loopNum++;
              delta = 500;
            }

            setTimeout(function() {
              that.tick();
            }, delta);
          };

          window.onload = function() {
            var elements = document.getElementsByClassName('txt-rotate');
            for (var i=0; i<elements.length; i++) {
              var toRotate = elements[i].getAttribute('data-rotate');
              var period = elements[i].getAttribute('data-period');
              if (toRotate) {
                new TxtRotate(elements[i], JSON.parse(toRotate), period);
              }
            }
            // INJECT CSS
            var css = document.createElement("style");
            css.type = "text/css";
            css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
            document.body.appendChild(css);
          };
      </script>
    <div style="padding-left: 16px">
      <h2 style="font-size: 40px; border-bottom: 3px solid red; width: 13%;">Our Menu</h2>
      <div class="row">
        <div class="column">
          <div class="card">
              <img src="img/open-data.png" alt="open data img" height="100">
              <h3>OPEN DATA</h2>
          </div>
        </div>
        <div class="column">
          <div class="card">
              <img src="img/data-bank.png" alt="DATA BANK img" height="100">
              <h3>DATA BANK</h2>
          </div>
        </div>
        <div class="column">
          <div class="card">
              <img src="img/public-service.png" alt="PUBLIC SERVICES img" height="100">
              <h3>PUBLIC SERVICES</h2>
          </div>
        </div>
        <div class="column">
          <div class="card">
              <img src="img/law-product.png" alt="LAW'S PRODUCT img" height="100">
              <h3>LAW'S PRODUCT</h2>
          </div>
        </div>
        <div class="column">
          <div class="card">
              <img src="img/hotel-info.png" alt="HOTEL'S INFO img" height="100">
              <h3>HOTEL'S INFO</h2>
          </div>
        </div>
        <div class="column">
          <div class="card">
              <img src="img/prestation.png" alt="PRESTATION img" height="100">
              <h3>PRESTATION</h2>
          </div>
        </div>
        <div class="column">
          <div class="card">
              <img src="img/school-facilities.png" alt="EDUCATION img" height="100">
              <h3>EDUCATION INFO</h2>
          </div>
        </div>
        <div class="column">
          <div class="card">
              <img src="img/marketing-info.png" alt="MARKETING INFO img" height="100">
              <h3>MARKETING INFO</h2>
          </div>
        </div>
        <div class="column">
          <div class="card">
              <img src="img/health-facilities.png" alt="HEALTH FACILITIES img" height="100">
              <h3>HEALTH INFO</h2>
          </div>
        </div>
        <div class="column">
          <div class="card">
              <img src="img/marketing-info.png" alt="MARKETING INFO img" height="100">
              <h3>MARKETING INFO</h2>
          </div>
        </div>
        <div class="column">
          <div class="card">
              <img src="img/health-facilities.png" alt="HEALTH FACILITIES img" height="100">
              <h3>HEALTH INFO</h2>
          </div>
        </div>
        <div class="column">
          <div class="card">
              <img src="img/marketing-info.png" alt="MARKETING INFO img" height="100">
              <h3>MARKETING INFO</h2>
          </div>
        </div>
        <div class="column">
          <div class="card">
              <img src="img/health-facilities.png" alt="HEALTH FACILITIES img" height="100">
              <h3>HEALTH INFO</h2>
          </div>
        </div>
        <div class="column">
          <div class="card">
              <img src="img/marketing-info.png" alt="MARKETING INFO img" height="100">
              <h3>MARKETING INFO</h2>
          </div>
        </div>
        <div class="column">
          <div class="card">
              <img src="img/health-facilities.png" alt="HEALTH FACILITIES img" height="100">
              <h3>HEALTH INFO</h2>
          </div>
        </div>
        <div class="column">
          <div class="card">
              <img src="img/marketing-info.png" alt="MARKETING INFO img" height="100">
              <h3>MARKETING INFO</h2>
          </div>
        </div>
        <div class="column">
          <div class="card">
              <img src="img/health-facilities.png" alt="HEALTH FACILITIES img" height="100">
              <h3>HEALTH INFO</h2>
          </div>
        </div>
        <div class="column">
          <div class="card">
              <img src="img/law-product.png" alt="LAW'S PRODUCT img" height="100">
              <h3>LAW'S PRODUCT</h2>
          </div>
        </div>
      </div>

      <div id="politics">
        <h2 style="font-size: 40px; border-bottom: 3px solid red; width: 13%;">Politics</h2>
        <div class="row2">
        <div class="column2">
          <div class="card card2" style="background-color: #04AA6D; color: white;">
              <img src="img/democracy.jpg" alt="open data img" height="100">
              <h3>DEMOCRACY</h2>
          </div>
        </div>
        <div class="column2">
          <div class="card card2" style="background-color: #008CBA; color: white;">
              <img src="img/federalism.png" alt="DATA BANK img" height="100">
              <h3 style="color: white">FEDERAL</h2>
          </div>
        </div>
        <div class="column2">
          <div class="card card2" style="background-color: #f44336; color: white;">
              <img src="img/parliament.png" alt="PUBLIC SERVICES img" height="100">
              <h3>UNITY PARLAMENTER</h2>
          </div>
        </div>
        <div class="column2">
          <div class="card card2" style="background-color: #008CBA; color: white;">
              <img src="img/republic.png" alt="LAW'S PRODUCT img" height="100">
              <h3>REPUBLIC</h2>
          </div>
        </div>
        <div class="column2">
          <div class="card card2" style="background-color: #04AA6D; color: white;">
              <img src="img/monarchy.png" alt="LAW'S PRODUCT img" height="100">
              <h3>MONARCHY</h2>
          </div>
        </div>
      </div>
      <h2 style="font-size: 40px; border-bottom: 3px solid red; width: 13%;">News</h2>
      <div id="news">
        <div class="row3">
            <div class="column3">
              <div class="card card3">
                <img src="img/banner.png" alt="Jane" style="width:100%">
                <div class="container">
                  <h2>NEWS 1</h2>
                  <p class="title">Hot news</p>
                  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. At tenetur fugiat inventore provident quidem unde consequuntur saepe placeat veritatis alias officia, repellendus tempora magni, velit quos temporibus sunt ipsum non.</p>
                </div>
              </div>
            </div>

            <div class="column3">
              <div class="card card3">
                <img src="img/banner.png" alt="Mike" style="width:100%">
                <div class="container">
                  <h2>NEWS 2</h2>
                  <p class="title">Hot news</p>
                  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. At tenetur fugiat inventore provident quidem unde consequuntur saepe placeat veritatis alias officia, repellendus tempora magni, velit quos temporibus sunt ipsum non.</p>
                </div>
              </div>
            </div>
            
            <div class="column3">
              <div class="card card3">
                <img src="img/banner.png" alt="John" style="width:100%">
                <div class="container">
                  <h2>NEWS 3</h2>
                  <p class="title">Hot news</p>
                  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. At tenetur fugiat inventore provident quidem unde consequuntur saepe placeat veritatis alias officia, repellendus tempora magni, velit quos temporibus sunt ipsum non.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="gallery">
        <h2 style="font-size: 40px; border-bottom: 3px solid red; width: 13%;">Gallery</h2>
        <div class="row3">
            <div class="column3">
              <div class="card card3">
                <img src="img/bill-gates.jpg" alt="Jane" style="width:100%; height: 350px;">
                <div class="container">
                  <h2>Bill Gates</h2>
                  <p class="title">CEO & Founder Microsoft</p>
                  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed delectus non ut esse facere dolorem assumenda libero temporibus repellat. Accusamus odio harum numquam quae quaerat magnam dignissimos incidunt? Fuga, odit!</p>
                </div>
              </div>
            </div>

            <div class="column3">
              <div class="card card3">
                <img src="img/linus-torvalds.jpg" alt="Mike" style="width:100%; height: 350px;">
                <div class="container">
                  <h2>Linus Torvalds</h2>
                  <p class="title">CEO & Founder Linux OS</p>
                  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed delectus non ut esse facere dolorem assumenda libero temporibus repellat. Accusamus odio harum numquam quae quaerat magnam dignissimos incidunt? Fuga, odit!</p>
                </div>
              </div>
            </div>
            
            <div class="column3">
              <div class="card card3">
                <img src="img/jen-hsun-huang.jpg" alt="John" style="width:100%; height: 350px;">
                <div class="container">
                  <h2>JENSEN HUANG</h2>
                  <p class="title">CEO & Founder NVIDIA</p>
                  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed delectus non ut esse facere dolorem assumenda libero temporibus repellat. Accusamus odio harum numquam quae quaerat magnam dignissimos incidunt? Fuga, odit!</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div id="documentUpload" style="padding-left: 16px;">
        <h2 style="font-size: 40px; border-bottom: 3px solid red; width: 25%">Document Uploads</h2>
        <form action="uploadImgProcess.php" method="post" enctype="multipart/form-data">
            Select image to upload:
            <input type="file" name="fileToUpload" id="fileToUpload" required>
            <br><br>
            <input type="submit" value="Upload Image" name="submit">
        </form>
      </div>
    </div>
    <br><br><br>
    
    <div id="message" class="footer" style="position: relative;">
        <P>Created by ISEC HACKER</h1>
        <p>Our motivation are human rights, free from child violence, politics, a hero, money, and gain popularity</p>
        <p>All right reserved &copy; 2024</p>
    </div>
    <script>
        function responsiveNav() {
          var x = document.getElementById("Topnav");
          if (x.className === "topnav") {
            x.className += " responsive";
          } else {
            x.className = "topnav";
          }
        }
    </script>
</body>
</html>