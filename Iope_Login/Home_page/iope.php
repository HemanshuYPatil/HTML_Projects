<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home-Page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
    <section id="home">
  <nav class="navbar">
    <div class="content">
      <div class="logo">
        <a href="#">I.O.P.E</a>
      </div>
      <ul class="menu-list">
 
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li ><a href="#experiment">Experiment</a></li>
        <li ><a href="#contact">contact</a></li>
        
        <li ><a href="login/login.php">Login</a></li>
      </ul>

    </div>
    
</nav>
  <div class="banner">
    <h1>Welcome</h1>
    <p>To, Institue of petrochemical engineering, Lonere</p>
</div>
<div class="head">

</div>
</section>



  <section id="experiment" class="exp2">
    <div class="exp">
        <h1>Experiment</h1>
        <p>Below are some few experiment</p>
    </div>

    <div class="expcontent">

        <a href="Experiment/ExperimentNo.1.php"><p>Experiment No.1</p></a>
        <a href="#"><p>Experiment No.2</p></a>
        <a href="#"><p>Experiment No.3</p></a>
        <a href="#"><p>Experiment No.4</p></a>
        <a href="#"><p>Experiment No.5</p></a>
    </div>
    <div class="exp1content">
        <a href="#"><p>Experiment No.6</p></a>
        <a href="#"><p>Experiment No.7</p></a>
        <a href="#"><p>Experiment No.8</p></a>
        <a href="#"><p>Experiment No.9</p></a>
        <a href="#"><p>Experiment No.10</p></a>
    </div>
  </section>
<br>
  <section id="about">
    <div class="img1">
        <h1>About Us</h1>
        
        <img class="images" src="assets/iope1.jpg">
        
        <h2>Institue of petrochemical engineering.</h2>
        <p>This Institute is a conducted institution of the University running Diploma Courses in eight streams of Engineering and Technology and one Advanced Diploma in Water Quality Management. All the diplomas are awarded by the University.</p>
    </div>
</section>

<section id = "contact">
<div class="contact-section">

  <h1>Contact Us</h1>

  <form class="contact-form" name="form">
    <input type="text" class="contact-form-text" placeholder="Your name" name="name" required>
    <input type="email" class="contact-form-text" placeholder="Your email" name="email" required>
    <input type="number" class="contact-form-text" placeholder="Your phone" name="phone" required>
    <textarea class="contact-form-text" placeholder="Your message" name="message"></textarea>
    <button type="submit" class="contact-form-btn" value="Send" name="Send" onclick="alert()">Submit</button>

  </form>
</div>
<script>
  function alert(){
      if(true){
        swal("SuccessFully","Your Contact Form has been Submitted","success");
      }
  }
</script>
</section>

<section class="footer">
  <ul class="list">
    <li>
      <a href="#home">Home</a>
    </li>
    <li>
      <a href="#about">About</a>
    </li>
    <li>
      <a href="#experiment">Experiment</a>
    </li>
    <li>
      <a href="#contact">Contact</a>
    </li>

  </ul>
  <p class="designer">Designed by Hemanshu Patil</p>
</section>
<script src="sweetalert.min.js"></script>
</body>
</html>