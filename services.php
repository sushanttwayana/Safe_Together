<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Banking System Services</title>
    <link rel="stylesheet" type="text/css" href="css/services.css">

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <script src="https://kit.fontawesome.com/50aa9099eb.js" crossorigin="anonymous"></script>

  </head>

  <body>

    
    <header class="header">

     
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
        
    
    </section>
    
            

    <div class="container">
        <!-- <nav>
            <ul>
              <li><a href="#saving-accounts">Saving Schema</a></li>
              <li><a href="#checking-accounts">Checking Accounts</a></li>
              <li><a href="#loans">Loans Schema</a></li>
              <li><a href="#funds">Transfer Funds</a></li>
            </ul>
          </nav> -->

          <main class="services">

            <section id="saving-accounts" class="service-card">
              <h2 class="service-title">Real-Time Alerts
              </h2>
              <span>
                <i class="fa-solid fa-triangle-exclamation"></i>
            </span>
              <p class="service-desc">The user gets instant alerts on imminent disasters</p>
              <p class="service-desc">Unceasing alert sounds until the users respond by updating their status.
              </p>
  
            </section>

            <section id="checking-accounts" class="service-card">
              <h2 class="service-title"> Location-Based Mapping </h2>
                <span> <i class="fa-solid fa-location-dot"></i></span>
              <p class="service-desc">Map displaying safe/green and emergency/red users.</p>
              <p class="service-desc">Location updates for better coordination of rescue efforts.</p>
            </section>

            <section id="loans" class="service-card">
              <h2 class="service-title">Medical ID</h2>
              
              <span>      
             <i class="fa-solid fa-user-md"></i>
              </span>
              <p class="service-desc">Provide detailed history of the victim in the digital format
              </p>
              <!-- <button class="btn">Read More</button>        -->
                </section>

            <section id="investments" class="service-card">
              <h2 class="service-title"> Emergency Numbers </h2>
              <span>
                <i class="fa-solid fa-phone-volume"></i>
              </span>
              <p class="service-desc">Displays the emergency contact of the family members</p>
                <p></p>Provide the emergency life line number of the ambulance, fire etc.</p>
              <!-- <button class="btn">Read More</button> -->
            </section>

          </main>
        </div>
         
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
        
    

</html>

        

