<?php
include 'navigation.php';
?>
<?php
//MySQLi Procedural
$conn = mysqli_connect("localhost","root","","registration");
$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$message = mysqli_real_escape_string($conn, $_POST['message']);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
if(mysqli_query($conn, "INSERT INTO contact_us(name,email,message) VALUES('" .$name. "', '" .$email. "','" . $message. "')")) 

if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
$name_error = "Name must contain only alphabets and space";
}
if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
$email_error = "Please Enter Valid Email ID";
}
if(strlen($message) < 6) {
$message = "Maximum 6 of characters";
}
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
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div>
              <input type="text" name="name" placeholder="Name" />
            </div>
            <div>
              <input type="email"name="email" placeholder="Email" />
            </div>
            <div>
              <input type="message"name="message" class="message-box" placeholder="Message" />
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