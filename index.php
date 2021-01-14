<?php 
require_once('dbsupport.php')
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Nguyễn Xuân Quý</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="shortcut icon" type="image/x-icon" href="./img/logo.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
      integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
  </head>
  <body>
    <div id="particles-js">
    </div>
    <!-- php-->

        <?php
        // sql information
        $sql_information = 'select * from thongtin where id="1"';
        $list_information =  executeresult_information($sql_information);
        // sql skill
        $sql_skill = 'select * from kynangdev where id="1"';
        $list_skill=  executeresult_skill($sql_skill);
        // sql interests
        $sql_interests = 'select * from sothich where id="1"';
        $list_interests=  executeresult_interests($sql_interests);
        // sql experience
        $sql_experience = 'select * from kinhnghiem where id="1"';
        $list_experience=  executeresult_experience($sql_experience);
        // sql education
        $sql_education = 'select * from giaoduc where id="1"';
        $list_education=  executeresult_education($sql_education);
        ?>   

    <!-- header -->
    <section id="header">
      <div class="container text-center">
        <div class="user-box">
          <img src="./img/anh-dai-dien.jpg" />

          <?php foreach($list_information as $lists)
            {
            echo'<h1>'.$lists['ten'].'</h1>';
            }?>

          <p>1851061516-60TH4</p>
        </div>
        <div class="scroll-btn">
          <div class="scroll-bar">
            <a href="" class="">
              <span></span>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!--use-info  -->
    <section class="use-info">
  
              <!-- nav - bar -->
    <div class="nav-bar">
        <nav class="navbar navbar-expand-lg">
          <a class="navbar-brand" href="#"
            ><img src="./img/logo2.png" style="width: 30%"
          /></a>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <i class="fa fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#top">Trang Chủ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">Giới Thiệu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#resume">Tiểu Sử</a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link" href="#services">Kỹ năng</a>
              </li> -->
              <li class="nav-item">
                <a class="nav-link" href="#contact">Liên Hệ</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>

      <!-- about -->
      <div class="about container" id="about">
        <div class="row">
          <div class="col-md-6 text-center" data-aos="fade-right">
            <img src="./img/anh-dai-dien-2.jpg" class="profile-img" />
          </div>
          <div class="col-md-6" data-aos="fade-left">
            <h3>TÔI LÀ AI ?</h3>
            <p>
               <?php foreach($list_information as $lists)
                {
                    echo''.$lists['mota'].'';
                }?>
            </p>
               
        
            <div class="skill-bar">
            <?php
                foreach($list_skill as $lists)
                {
                    echo'<p>'.$lists['ten'].'</p>
                    <div class="progress">
                      <div class="progress-bar" style="width: '.$lists['mucdo'].'%">'.$lists['mucdo'].'%</div>
                    </div>';
                }
                ?>
            </div>


          </div>
        </div>
        <div class="container" style="margin-top:100px">
          <h1 class="text-center" data-aos="fade-up">Sở thích</h1>
          <p class="text-center" data-aos="fade-up">
            Dưới đây là một số sở thích của tôi trong cuộc sống hằng ngày !
          </p>
          <div class="row" data-aos="fade-up">

            
            <?php foreach($list_interests as $lists)
                    {
                    echo'
                    
                    <div class="col-md-4" >
              <div class="services-boxx">
                <i class="fa fa-heart">
                  <span>
                  '.$lists['ten'].'
                  </span>
                </i>
                <p>
                '.$lists['mota'].'
                </p>
                </div>
                </div>';
                    }?>
          </div>
        </div>
      </div>

      <!-- social icons -->
      <div class="social-icons">
        <ul>
          <a href="https://www.facebook.com/hoa.than.5832/"><li><i class="fa fa-facebook"></i></li></a>
          <a href="https://twitter.com/xuanquy85821617"><li><i class="fa fa-twitter"></i></li></a>
          <a href="https://www.instagram.com/quyice/"><li><i class="fa fa-instagram"></i></li></a>
          <a href="https://github.com/xuanquy1120"><li><i class="fa fa-github"></i></li></a>
        </ul>
      </div>

      <!-- resume -->
      <div class="resume" id="resume" data-aos="fade-left">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h3>Kinh nghiệm</h3>
              <ul class="timeline" data-aos="fade-right">
              <?php foreach($list_experience as $lists)
                {
                    echo'
                    <li>
                    <h4><span>'.$lists['nam'].' - </span> '.$lists['ten'].'</h4>
                    <p>
                    '.$lists['mota'].'
                    </p>
  
                    <b>Công ty</b> - '.$lists['congty'].' <br />
                    <b>Thời gian</b> - '.$lists['thoigian'].' <br />
                    <b>Vị trí</b> - '.$lists['vitri'].' <br />
                  </li>
                    ';
                }?>


                
              </ul>
            </div>

            <div class="col-md-6">
              <h3>Giáo dục</h3>
              <ul class="timeline"  data-aos="fade-left">
              <?php foreach($list_education as $lists)
                {
                    echo'
                    <li>
                    <h4><span>'.$lists['nam'].' - </span> '.$lists['ten'].'</h4>
                    <p>
                    '.$lists['mota'].'
                    </p>
  
                    <b>Học viện</b> - '.$lists['hocvien'].' <br />
                    <b>Thòi gian</b> - '.$lists['thoigian'].' <br />
            
                  </li>';
                }?>

              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- services -->
      <!-- <div class="services" id="services" data-aos="fade-down">
       
      </div> -->

      <!-- contact -->
      <div class="contact" id="contact" data-aos="fade-up">
        <div class="container text-center"  >
          <h1 data-aos="fade-in">Liên hệ với tôi</h1>
          <p class="text-center" data-aos="fade-up">
            Hãy liên hệ với tôi, nếu bạn cần tôi !
          </p>
          <div class="row">
            <div class="col-md-4" data-aos="fade-right">
              <i class="fa fa-phone">
                <p>
                <?php foreach($list_information as $lists)
                    {
                        echo''.$lists['sodt'].'';
                    }?>
                </p>
              </i>

              <i class="fa fa-envelope">
                <p>
                <?php foreach($list_information as $lists)
                    {
                        echo''.$lists['email'].'';
                    }?>
                </p>
                </p>
              </i>

              <i class="fa fa-map-marker">
                <p>
                <?php foreach($list_information as $lists)
                    {
                        echo''.$lists['diachi'].'';
                    }?>
                </p>
                </p>
              </i>
            </div>
            <div class="col-md-8" data-aos="fade-left">
              <form id="contact-form" class="contact-form mt-6">
						
                <div class="row">
                  <div class="column col-md-6">
                    <!-- Name input -->
                    <div class="form-group">
                      <input type="text" class="form-control" name="InputName" id="InputName" placeholder="Tên của bạn" required="required" data-error="Name is required.">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  
                  <div class="column col-md-6">
                    <!-- Email input -->
                    <div class="form-group">
                      <input type="email" class="form-control" id="InputEmail" name="InputEmail" placeholder="Địa chỉ Email" required="required" data-error="Email is required.">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
        
                  <div class="column col-md-12">
                    <!-- Email input -->
                    <div class="form-group">
                      <input type="text" class="form-control" id="InputSubject" name="InputSubject" placeholder="Tiêu đề" required="required" data-error="Subject is required.">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
              
                  <div class="column col-md-12">
                    <!-- Message textarea -->
                    <div class="form-group">
                      <textarea name="InputMessage" id="InputMessage" class="form-control" rows="5" placeholder="Nội dung" required="required" data-error="Message is required."></textarea>
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                </div>
        
                <button type="submit" name="submit" id="submit" value="Submit" class="btn btn-primary" >Gửi tin nhắn</button><!-- Send Button -->
        
              </form>
            </div>
          </div>
        </div>
        <div class="footer text-center">
          <p>Được làm <i class="fa fa-heart-o"></i> Bởi Quý ICE </p>
        </div>
      </div>



   
      

    </section>



    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init(
        {
          offset: 250,
          duration: 1000
        }
      );
    </script>
    <script src="smooth-scroll.js"></script>
    <script>
      var scroll = new SmoothScroll('a[href*="#"]');
    </script>
    <script type="text/javascript" src="particles.js"></script>
    <script type="text/javascript" src="app.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
