<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/contact.css" >

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/50aa9099eb.js" crossorigin="anonymous"></script>
 </head>
<body>
    <header class="header">

        <header>
            <h1>Safe Together</h1>
            <p>Safety in Every Second, Help at Every Step.</p>
        
          </header>
        
          <!-- Navigation bar -->
          <nav>
           
            <ul class="links">
        
                <li>
                    <a href="home.php" target="_self">HOME</a>
                </li>
        
                <li>
                    <a href="about.php" target="_self">ABOUT US</a>
                </li>
        
                <li>
                    <a href="services.php" target="_self">SERVICES</a>
                </li>
        
                <!-- <li>
                    <a href="contacts.html" target="_blank">NEWS & ACTIVITES</a>
                </li> -->
                <li>
                    <a href="login.php" target="_blank">LOGIN</a>
                </li>
        
                <li>
                    <a href="register.php" target="_blank">REGISTER</a>
                </li>
        
                <li>
                    <a href="contact.php" target="_self">CONATCT US</a>
                </li>
        
            </ul>
        
            </div>
           
          </nav>
     </header>
    
    <section class="contact">

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28266.32840609563!2d85.42446664999999!3d27.67739795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1aae42806ba1%3A0x5449e079404e5e82!2sBhaktapur!5e0!3m2!1sen!2snp!4v1654691753378!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    </section>

    <section class="contact-us">

        <div class="main">

            <div class="contact-div">
                    
                <i class="fa fa-home" ></i>
                <div class="mydiv">
                <h4>Safe Together </h4>
                <p>Libali -6,Bhaktapur</p>
                </div>

           
                <i class="fa fa-phone" ></i>
                 <div class="mydiv">
                <h4>+977 9861488545<br>
                    +977 9818846665<br>
                    01-6617014
                </h4>
                <p>24/7 Open</p>
                 </div>
           
                <i class="fa fa-envelope-o"></i>
                <div class="mydiv">
                <h4>safetogether@gmail.com</h4>
                <p>Email us your query</p>
                 </div>
            </div>
            
            
            
            <div class="contact-form" >
                <form action="" method="POST">
                    <input type="text" id="name" name="name" placeholder="Enter your name" required>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                    <input type="text" id="subject" name="subject" placeholder="Enter your subject" required>
                    <textarea rows="8" placeholder="Message" id="message" name="message" required></textarea>
                    <button type="submit" class="press" >Send Message</button>
                </form>
            </div>

        </div>     
    </section>

 <!-- Chatbot Integration -->
 <section class="chatbot">
      <!-- <h2>Ask our Chatbot</h2> -->
      <script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
      <df-messenger
        intent="WELCOME"
        chat-title="Safe_Together"
        agent-id="05b2ded4-7000-48f6-93a8-56a0ef1d28fc"
        language-code="en"
      ></df-messenger>

  </section>

     <!-- Footer Section -->
   <footer id="footer">
    <p>&copy; 2024 SafeTogether. All rights reserved.</p>
    <p>Sallaghari, Bhaktapur</p>
    <p>1234567890</p>
    <p>Follow us on social media for updates!</p>


    <div class="fourth">
      <div class="email-form">
          <div class="ions">
              <a href="https://www.facebook.com" target="_blank"><i class="fa-brands fa-square-facebook fa-lg"></i></a>
              <a href="https://www.linkedin.com" target="_blank"><i class="fa-brands fa-square-twitter fa-lg"></i></a>
              <a href="https://www.instagram.com" target="_blank"><i class="fa-brands fa-square-instagram fa-lg"></i></a>
          </div>
      </div>
  </div>
</footer>
       
    </section>
</body>
</html>