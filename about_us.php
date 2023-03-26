<?php
include 'navigation.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style type="text/css">
    body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
    background-color: #EEE;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
color: #000;
  font-size: 18px;
  border-radius: 6px;
  background: #5673C8;
  cursor: pointer;
  transition: all 0.3s ease;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}.logo img{
  float: left;
  width: 100px;
  height: auto;
  margin-left: 20px;
  margin-top: -20px;
}
  </style>
</head>
<body>
  <?=template_h('about_us')?>

<div class="about-section">
  <h1 style="color: #000;">About Us Page</h1>
  <p>Emotional Fund is use to show your emotion.</p>
  <p>Resize the browser window to see that this page is responsive by the way.</p>
</div>
<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="images/art.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Jane lio</h2>
        <p class="title">CEO & Founder</p>
        <p>all types of book, music and theripist form emotinal fund by user, show your emotin with Us we help u to explain your emotins.</p>
        <p>jane@example.com</p>
        <p><a href="https://economictimes.indiatimes.com/industry/auto/auto-news/anand-mahindra-to-become-groups-non-executive-chairman-from-november/articleshow/85096685.cms?from=mdr"><button class="button">Contact</button></a></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/ceo.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Mike Ross</h2>
        <p class="title">Art Director</p>
        <p>We have best bookes, music and theripist dedicated to you if u want to new bookes, music and theripist.</p>
        <p>mike@example.com</p>
        <p><a href="https://www.financialexpress.com/industry/anand-mahindra-among-the-top-10-ceos-to-follow-on-twitter/350806/"><button class="button">Contact</button></a></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/font-end.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>John Doe</h2>
        <p class="title">Font-end Devloper</p>
        <p>Our desgine is improved Day-By-Day.</p>
        <p>john@example.com</p>
        <p><a href="https://thecconnects.com/imaran-khan-ceo-at-css-founder-pvt-ltd-professional-interview/"><button class="button" >Contact</button></a></p>
      </div>
    </div>
  </div>
</div>
</body>
</html>
