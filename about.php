<!DOCTYPE html>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Evento</title>
<!--<php require 'utils/styles.php'; ?><!-css links. file found in utils folder-->
</head>

<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 25%;
  margin-bottom: 16px;
  padding: 0px 8px;
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
  padding: 0 10px;
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
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 500px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<?php require 'utils/header.php'; ?>

<div class="about-section">
  <h1>About Us</h1>
  <h3>Crafting unforgettable tech experiences, one event at a time.</h3>
  <!-- <p>Resize the browser window to see that this page is responsive by the way.</p> -->
</div>

<h1 style="text-align:center">Our Team</h1>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="images/Uday.jpg" alt="Uday" style="width: 457px; height: 500px;">
      <div class="container">
        <h2>Uday Shivanna</h2>
        <p class="title">Member One (Admin)</p>
        <p>USN: 1BM22CS420</p>
        <p>Email id: udays.cs22@bmsce.ac.in</p>
        <!--<p><button class="button">Contact</button></p>-->
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/Sanjana.jpg" alt="Sanjana" style="width: 457px; height: 500px;">
      <div class="container">
        <h2>Sanjana N Amadalli</h2>
        <p class="title">Member Two</p>
        <p>USN: 1BM22CS418</p>
        <p>Email id: sanjana.cs22@bmsce.ac.in</p>
        <!--<p><button class="button">Contact</button></p>-->
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="images/Varun.jpg" alt="Varun" style="width: 457px; height: 500px;">
      <div class="container">
        <h2>Varun Raj S</h2>
        <p class="title">Member Three</p>
        <p>USN: 1BM21CS264</p>
        <p>Email: varunrajs.cs21@bmsce.ac.in</p>
        <!--<p><button class="button">Contact</button></p>-->
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/Shreyansh.jpg" alt="Shreyansh" style="width: 457px; height: 500px;">
      <div class="container">
        <h2>Shreyansh Kudtalkar</h2>
        <p class="title">Member Four</p>
        <p>USN: 1BM22CS419</p>
        <p>Email id: shreyanshsunil.cs22@bmsce.ac.in</p>
        <!--<p><button class="button">Contact</button></p>-->
      </div>
    </div>
  </div>
</div>

</body>
</html>

<!--<style>--

/* Large rounded green border *
hr.blueline {
  border: 10px solid #00004d;
  border-radius: 5px;
}

#bj
{
  font-size: 22px;
}
</style>



  <php require 'utils/header.php'; ?>
  <hr class="blueline">
  <div class="col-md-12">
  
<h1>About Us</h1>

<p>  Our college Mission is to impart quality technical education and higher moral ethics associated with skilled training to suit the modern day technology with innovative concepts,so as to learn to lead the future with full confidence
                  .</p>

</div>
<hr class="blueline">
</body>

 <php require 'utils/footer.php'; ?>

</html>
*/