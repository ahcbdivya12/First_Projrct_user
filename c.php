<?php
include 'navigation.php';
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="bootstrap.css"/>
  <link href="font-awesome.min.css" rel="stylesheet"/>
    <link href="style.css" rel="stylesheet" />
    <link href="responsive.css" rel="stylesheet" />
    <style type="text/css">
.logo img{
  float: left;
  width: 100px;
  height: auto;
  margin-left: 20px;
  margin-top: -20px;
}
</style>
</head>
<body class="sub_page">
  <?=template_h('c')?>
  <section class="contact_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6 ">
          <div class="heading_container ">
            <h2 class="">
              Contact Us
            </h2>
          </div>
          <form action="#">
            <div>
              <input type="text" placeholder="Name" />
            </div>
            <div>
              <input type="email" placeholder="Email" />
            </div>
            <div>
              <input type="text" class="message-box" placeholder="Message" />
            </div>
            <div class="btn-box">
              <button>
                SEND
              </button>
            </div>
          </form>
        </div>
        <div class="col-md-6">
          <div class="img-box">
            <img src="contact-img.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

</body>

</html>