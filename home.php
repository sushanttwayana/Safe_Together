<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SafeTogether</title>

  <link rel="stylesheet" href="css/style1.css">

  <script src="./js/script.js" defer></script>


  <!-- For icons -->
   <!-- favicon  -->
  

   <link rel="stylesheet" href="style.css">
<script src="https://kit.fontawesome.com/50aa9099eb.js" crossorigin="anonymous"></script>
</head>


<style>
  /* Container for the images */
  .store-images {
      display: flex;  
      gap: 20px;     
      justify-content: center;  
  }

  .store-image {
      width: 300px;      
      height: 200px;     
      object-fit: cover;
      border-radius: 8px; 
  }
</style>


<body>
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

  <!-- Nav ends here -->

  <section class="glimpse">
    <div class="s_title">Glimpse of our Previous Acts</div>
    <div class="s_div"></div>
    <div class="s_subtitle">of Bravery By The Rescue Teams</div>


    <div class="store-images">
        <img src="./images/05NEPAL-articleLarge.webp" alt="rescue img 1" class="store-image">
        <img src="./images/e3.jfif" alt="rescue img 3" class="store-image">
        <img src="./images/e2.jpg" alt="rescue img 2" class="store-image">
        <img src="./images/e4.jpg" alt="rescue img 4" class="store-image">
        
    </div>

</section>


 <!-- ************** about us section  *******************-->
 <section class="section1">            


  <div class="section-center center2" >
     <article class=" about-des">
      <div class="intro-msg">
          <div class="div1">
              <h4 class="top">Message from the founders</h4>
          <p>First of all, I would like to express my heartiest thanks to
               all of our members and partners. We are a group of four who purposed
                 the plan of Sathi Sahakari.<br>

                 To make proper use of local resources and assist in the commercialization 
                 of the members and build a safe and healthy institution with financial capability.
                 To establish institutional good governance on the basis of policy and method
                  and provide all-accessible and quality financial and in-depth financial services by making the highest use of timely modern technology.........  <a href="/html/about.html">Read More</a> 
          </p>
          </div>


          <div class="div3">
              <img src="/images/gallery/jerry.jpg" alt="founder">

              <div class="div4">
              <h6>FABFL</h6>
              <h5>Founders</h5>
              </div>
              
          </div>

          
      </div>
     </article>

     <article class="about">
      <!--button -->
      <div class="btn-container">
          <button class="btn active" data-id="history">Intro</button>
          <button class="btn" data-id="vision">Vision</button>
          <button class="btn" data-id="goals">Goals</button>
      </div>

      <div class="about-content">
          <!--single item-->
          <div class="content active" id="history">
              <h4>Introduction</h4>
              <p>
                Welcome to Safe Together, an innovative platform that empowers and innovates disaster response and medical
                 assistive technology. Natural disasters usually strike unexpectedly, eliminating the possibility of community
                  preparedness in advance. Realizing that timely communication, effective coordination, and on-time medical intervention 
                  hold the key, Safe Together provides the necessary tools and powers to the individual and responders for saving lives 
                  and mitigating crises. Our platform, designed by considering the unique disaster challenges of Nepal, connects 
                victims and community helpers with rescue teams using advanced technology with community-sourced assistance.
              </p>
          </div>
          <!-- end of single item -->
           

           <div class="content" id="vision" >
              <h4>Vision</h4>
              <p>
                Our vision is to build a safer, more resilient society by integrating technology, community support, and 
                real-time disaster management into a unified digital platform. We aspire to minimize the human and 
                infrastructural toll of
                 natural disasters, ensuring that help reaches those in need as quickly and effectively as possible
    
              </p>
     
           </div>

           <div class="content" id="goals">
              <h4>Goals</h4>
              <p>
              <p>Deliver instant, 
                persistent notifications to users during disasters, empowering them to respond promptly and stay informed.</p>
                <p>Utilize location-based mapping to visually represent the safety status of users,
                   facilitating optimized rescue operations and effective community support.</p>
                <p>Provide users with digital medical IDs for efficient sharing of health information during 
                  emergencies, ensuring quicker medical attention.</p>
                  <p>Offer seamless access to critical emergency contact numbers for police, ambulance, and fire services to enable timely interventions.</p>
                <p>Ensure the platform can accommodate a high number of users during disaster incidents and remains accessible across devices and
                   diverse communities.</p>
                </p>
            </div>
     </article>

     <div class="readmore">
      <!-- <button name="readmore"><a href="./about.html">Read More</a> </button> -->
    </div>

  </div>

  <!-- aboout us section ends here -->

<!-- *******************number genrator section***********************  -->
<section class=" number-generator">
  <!-- single number -->
 <article class="article1">
     <span class="number" data-id="10000">0</span>
     <p>People Rescued</p>
 </article>
 <!-- end of single number -->

 <article class="article1">
     <span class="number" data-id="10000">0</span>
     <p>Relief Provided</p>
 </article>

 <article class="article1">
     <span class="number" data-id="1000">0</span>
     <p>Total Users</p>
 </article>
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

<script>
  // About Us Section Toggle
  const btns = document.querySelectorAll(".btn");
  const about = document.querySelector(".about");
  const articles = document.querySelectorAll(".content");
  about.addEventListener("click", (e) => {
    const id = e.target.dataset.id;
    if (id) {
      btns.forEach((btn) => btn.classList.remove("active"));
      e.target.classList.add("active");
      articles.forEach((article) => article.classList.remove("active"));
      document.getElementById(id).classList.add("active");
    }
  });

  // Number Generator
  const items = [...document.querySelectorAll('.number')];
  const updateCount = (el) => { 
    const value = parseInt(el.dataset.id);
    const increment = Math.ceil(value / 1000);
    let initialValue = 0;
    const increaseCount = setInterval(() => {
      initialValue += increment;
      if (initialValue > value) {
        el.textContent = `${value}+`;
        clearInterval(increaseCount);
        return;
      }
      el.textContent = `${initialValue}`;
    }, 0.2);
  };
  items.forEach((item) => updateCount(item));
</script>
</body>
</html>