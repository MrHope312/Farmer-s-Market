<?php
if(session_id() == '' || !isset($_SESSION)){session_start();}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
 
  <link rel="stylesheet" href="sass/main.css">
  <title>Farmers Market</title>
  <link rel="icon" href="./img/logo.png" type="image" sizes="16x16"> 
  <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet"> 
</head>

<body>

<section id="home">
  <header class="header">
<?php
if(isset($_SESSION['username'])){
  echo '<a href="account.php" class="loginhead">My Cart</a>';
  echo '<a href="logout.php"class="registerhead">Log Out</a>';
}
else{
  echo '<a href="login.php" class="loginhead">Login</a>';
  echo '<a href="register.php" class="registerhead">Register</a>';
}
?>
  </header>

  

      <main class="info">
        <div class="one">

        </div>
        <div class="two">

        </div>
        <div class="three">
        <svg id="clogo" height="100%" width="100%" viewBox="0 0 434.16 457" PreserveAspectRatio="none">
          <defs>
            <style>
                .a {
                    fill: #c7daa2;
                }
    
                .b {
                    opacity: 0.72;
                }
    
                .c {
                    fill: #456359;
                }
    
                .d {
                    fill: #fff;
                }
    
                .e {
                    fill: #447762;
                }
    
                .f {
                    fill: none;
                }
    
                .g {
                    fill: #4d4d4d;
                    font-size: 50px;
                    font-family: AvenirNextLTPro-Light, Avenir Next LT Pro;
                    font-weight: 300;
                    opacity: 0.97;
                }
            </style>
        </defs>
        <circle class="a" cx="173" cy="173" r="173" transform="translate(34)" />
        <g class="b">
            <path class="c" d="M213.28,213.05a9.93,9.93,0,1,0-9.93-9.93A9.942,9.942,0,0,0,213.28,213.05Zm0-14.88a4.96,4.96,0,1,1-4.96,4.96A4.966,4.966,0,0,1,213.28,198.17Z" />
            <path class="c" d="M286.55,245.42H237.86l-5.97-56.96,10.27,12.68a2.487,2.487,0,0,0,1.8.92h.13a2.482,2.482,0,0,0,1.76-.73l10.51-10.51a2.488,2.488,0,0,0-.19-3.68l-35.5-28.88v-.03l35.5-28.75a2.487,2.487,0,0,0,.92-1.8,2.513,2.513,0,0,0-.72-1.89l-10.51-10.51a2.454,2.454,0,0,0-1.88-.72,2.512,2.512,0,0,0-1.8.91l-28.83,35.44-28.83-35.44a2.442,2.442,0,0,0-1.8-.91,2.477,2.477,0,0,0-1.88.72l-10.51,10.51a2.479,2.479,0,0,0,.19,3.69l35.41,28.67c0,.06-.01.12-.01.19l-35.4,28.8a2.477,2.477,0,0,0-.18,3.68l10.51,10.51a2.482,2.482,0,0,0,1.76.73h.13a2.487,2.487,0,0,0,1.8-.92l10.15-12.53-5.95,56.8H140.15a2.536,2.536,0,0,0,0,5H286.59a2.327,2.327,0,0,0,2.11-2.5A2.375,2.375,0,0,0,286.55,245.42Zm-68.39,0H208.4V230.4a4.88,4.88,0,0,1,9.76,0v15.02Zm32.73-56.16-6.61,6.61-25.99-32.09a7.526,7.526,0,0,0,.56-.57Zm-6.61-68.5,6.61,6.61-32.15,26.04a5.825,5.825,0,0,0-.56-.55Zm-31,35.2a2.41,2.41,0,1,1-2.41,2.41A2.411,2.411,0,0,1,213.28,155.96Zm-37.5-28.59,6.61-6.61,26.06,32.04a7.4,7.4,0,0,0-.57.55Zm6.6,68.5-6.61-6.61,31.98-26.01a7.8,7.8,0,0,0,.57.58Zm18.02-14.34,12.78-15.78h.32l12.66,15.63,6.72,64.04h-9.73V230.4a9.85,9.85,0,0,0-19.7,0v15.01h-9.73Z" />
        </g>
        <path class="d" d="M329.11,136.57c-3.68-.63-7.04,1.83-10.55,2.4-2.41.39-4.24-.06-6.14-.16-5.58-.29-12.59,1.73-12.63,9.04.32,5.93,4.26,9.34,9.59,9.03,4.77-.28,9.13-1.43,13.95-.75,3.09.44,6.83,1,9.59-.96C338.27,151.4,335.47,137.65,329.11,136.57Z" />
        <path class="d" d="M192.33,53.67c-5.23-.89-10.01,2.61-15.02,3.41-3.42.55-6.03-.09-8.74-.22-7.95-.41-17.92,2.46-17.97,12.87.46,8.44,6.06,13.29,13.65,12.85,6.79-.4,13-2.04,19.85-1.07,4.4.62,9.72,1.42,13.66-1.36C205.36,74.78,201.38,55.21,192.33,53.67Z" />
        <path class="d" d="M102.55,136.57c-3.68-.63-7.04,1.83-10.55,2.4-2.41.39-4.24-.06-6.14-.16-5.58-.29-12.59,1.73-12.63,9.04.32,5.93,4.26,9.34,9.59,9.03,4.77-.28,9.13-1.43,13.95-.75,3.09.44,6.83,1,9.59-.96C111.7,151.4,108.91,137.65,102.55,136.57Z" />
        <path class="e" d="M120.34,168.65s-.64,6.31,8.92,9.53C129.26,178.18,130.46,170.53,120.34,168.65Z" />
        <path class="e" d="M119.65,177.4s-.64,6.31,8.92,9.53C128.57,186.93,129.77,179.27,119.65,177.4Z" />
        <path class="e" d="M119.66,186.67s-.64,6.31,8.92,9.53C128.58,196.2,129.78,188.54,119.66,186.67Z" />
        <path class="e" d="M119.59,195.49s-.64,6.31,8.92,9.53C128.51,205.01,129.71,197.36,119.59,195.49Z" />
        <path class="c" d="M138.03,169.39s.46,6.34-9.17,9.01C128.85,178.39,127.86,170.68,138.03,169.39Z" />
        <path class="c" d="M138.04,178.16s.46,6.34-9.17,9.01C128.87,187.16,127.88,179.44,138.04,178.16Z" />
        <path class="c" d="M137.78,187.42s.46,6.34-9.17,9.01C128.6,196.42,127.61,188.71,137.78,187.42Z" />
        <path class="c" d="M137.6,196.23s.46,6.34-9.17,9.01C128.43,205.24,127.44,197.52,137.6,196.23Z" />
        <path class="c" d="M128.78,170.43q-.225,11.265-.46,22.52-.36,17.925-.73,35.86c-.06,2.73-.11,5.46-.17,8.18-.01.33.52.33.53,0q.225-11.265.46-22.52.36-17.925.73-35.86c.06-2.73.11-5.46.17-8.18.01-.33-.52-.33-.53,0Z" />
        <path class="e" d="M141.27,147.72s-.64,6.31,8.92,9.53C150.19,157.25,151.39,149.59,141.27,147.72Z" />
        <path class="e" d="M140.58,156.47s-.64,6.31,8.92,9.53C149.5,165.99,150.7,158.34,140.58,156.47Z" />
        <path class="e" d="M140.59,165.74s-.64,6.31,8.92,9.53C149.51,175.26,150.71,167.61,140.59,165.74Z" />
        <path class="e" d="M140.52,174.55s-.64,6.31,8.92,9.53C149.44,184.08,150.64,176.43,140.52,174.55Z" />
        <path class="c" d="M158.96,148.46s.46,6.34-9.17,9.01C149.79,157.46,148.8,149.75,158.96,148.46Z" />
        <path class="c" d="M158.98,157.22s.46,6.34-9.17,9.01C149.8,166.23,148.81,158.51,158.98,157.22Z" />
        <path class="c" d="M158.71,166.49s.46,6.34-9.17,9.01C149.54,175.49,148.55,167.78,158.71,166.49Z" />
        <path class="c" d="M158.53,175.3s.46,6.34-9.17,9.01C149.36,184.3,148.37,176.59,158.53,175.3Z" />
        <path class="c" d="M149.72,149.5q-.225,11.265-.46,22.52-.36,17.925-.73,35.86c-.06,2.73-.11,5.46-.17,8.18-.01.33.52.33.53,0q.225-11.265.46-22.52.36-17.925.73-35.86c.06-2.73.11-5.46.17-8.18a.266.266,0,0,0-.53,0Z" />
        <path class="e" d="M304.75,171.12s.64,6.31-8.92,9.53C295.83,180.64,294.63,172.99,304.75,171.12Z" />
        <path class="e" d="M305.44,179.86s.64,6.31-8.92,9.53C296.52,189.39,295.32,181.74,305.44,179.86Z" />
        <path class="e" d="M305.43,189.13s.64,6.31-8.92,9.53C296.51,198.66,295.31,191.01,305.43,189.13Z" />
        <path class="e" d="M305.5,197.95s.64,6.31-8.92,9.53C296.58,207.48,295.38,199.82,305.5,197.95Z" />
        <path class="c" d="M287.06,171.85s-.46,6.34,9.17,9.01C296.23,180.86,297.22,173.14,287.06,171.85Z" />
        <path class="c" d="M287.04,180.62s-.46,6.34,9.17,9.01C296.22,189.62,297.21,181.91,287.04,180.62Z" />
        <path class="c" d="M287.31,189.88s-.46,6.34,9.17,9.01C296.48,198.89,297.47,191.17,287.31,189.88Z" />
        <path class="c" d="M287.49,198.69s-.46,6.34,9.17,9.01C296.66,207.7,297.65,199.98,287.49,198.69Z" />
        <path class="e" d="M295.78,172.9q.225,11.265.46,22.52.36,17.925.73,35.86c.06,2.73.11,5.46.17,8.18a.266.266,0,0,0,.53,0q-.225-11.265-.46-22.52-.36-17.925-.73-35.86c-.06-2.73-.11-5.46-.17-8.18-.01-.33-.54-.33-.53,0Z" />
        <path class="e" d="M283.82,150.18s.64,6.31-8.92,9.53C274.9,159.71,273.7,152.06,283.82,150.18Z" />
        <path class="e" d="M284.5,158.93s.64,6.31-8.92,9.53C275.59,168.46,274.38,160.8,284.5,158.93Z" />
        <path class="e" d="M284.49,168.2s.64,6.31-8.92,9.53C275.58,177.73,274.37,170.07,284.49,168.2Z" />
        <path class="e" d="M284.56,177.02s.64,6.31-8.92,9.53C275.65,186.54,274.44,178.89,284.56,177.02Z" />
        <path class="c" d="M266.13,150.92s-.46,6.34,9.17,9.01C275.3,159.92,276.29,152.21,266.13,150.92Z" />
        <path class="c" d="M266.11,159.69s-.46,6.34,9.17,9.01C275.29,168.69,276.28,160.98,266.11,159.69Z" />
        <path class="c" d="M266.38,168.95s-.46,6.34,9.17,9.01C275.55,177.95,276.54,170.24,266.38,168.95Z" />
        <path class="c" d="M266.55,177.76s-.46,6.34,9.17,9.01C275.73,186.77,276.72,179.05,266.55,177.76Z" />
        <path class="e" d="M274.84,151.96q.225,11.265.46,22.52.36,17.925.73,35.86c.06,2.73.11,5.46.17,8.18a.266.266,0,0,0,.53,0q-.225-11.265-.46-22.52-.36-17.925-.73-35.86c-.06-2.73-.11-5.46-.17-8.18a.266.266,0,0,0-.53,0Z" />
        <path class="c" d="M43.91,230.82a173.247,173.247,0,0,0,131.02,112.2c1.53-12.91,9.6-64.55,42.53-88.59C217.47,254.43,142.69,177.56,43.91,230.82Z" />
        <path class="e" d="M207,346A173.066,173.066,0,0,0,372.4,223.83a251.35,251.35,0,0,0-48.41-8.4c-26.8-1.96-65.21.01-96,20.52-31.4,20.92-49.24,56.94-53.07,107.07A173.933,173.933,0,0,0,207,346Z" />
        <rect class="f" width="434.16" height="88.2" transform="translate(0 368.8)" /><text class="g" transform="translate(0.108 406.6)">
            <tspan x="0" y="0">FARMERS MARKET</tspan>
        </text>
        </svg>
        </div>
        <div class="four">
          <h1>Enroute Farmer's </br>
            Product to your Home
          </h1>
        </div>
      </main>
  </section>



  <section id="about">
    <div class="abo">
    <img src="./img/4.jpg" alt="./img/4.jpg" width="300px" height="200px">
        <p><h1 style="color:green;">What is Farmers Marketplace.com?</h1></br>
Farmers Marketplace.com is India’s largest online food and grocery store. With over 18,000 products and over a 1000 brands in our catalogue you will find everything you are looking for. Right from fresh Fruits and Vegetables, Rice and Dals, Spices and Seasonings to Packaged products, Beverages, Personal care products, Meats – we have it all.
Choose from a wide range of options in every category, exclusively handpicked to help you find the best quality available at the lowest prices. Select a time slot for delivery and your order will be delivered right to your doorstep, anywhere in Bangalore, Hyderabad, Mumbai, Pune, Chennai, Delhi, Noida, Mysore, Coimbatore, Vijayawada-Guntur, Kolkata, Ahmedabad-Gandhinagar, Lucknow-Kanpur, Gurgaon, Vadodara, Visakhapatnam, Surat, Nagpur, Patna, Indore and Chandigarh Tricity You can pay online using your debit / credit card or by cash / sodexo on delivery.
We guarantee on time delivery, and the best quality! Happy Shopping
          </p>
    </div>
    
  </section>

  
  <section id="contact">

      <h1 id="dev"; style="color:green";>Developers</h1>
          <div class="rach">
          <h2>Vijay Kumar C</h2>
          <img src="./img/v.jpg" alt="./img/r.jpg" height=100px width=100px>
          </div>
          <div class="shre"> 
          <h2>M Shreyas</h2>
          <img src="./img/s.jpg" alt="./img/s.jpg" height=100px width=100px>
          </div>
          
          <div class="cu">
          <p>Contact Us
           To reach our customer service team please email us at:
          customerservice@farmersmarket.com</p>
          </div>

  </section>

  <div class="rightnav">
    <div class="line"></div>
    <ul class="dotnav">
      <li>
        <a href="#home" data-number="1">HOME</a>
      </li>
      <li>
        <a href="#about" data-number="2">ABOUT</a>
      </li>
      <li>
        <a href="#contact" data-number="3">CONTACT</a>
      </li>
    </ul>
  </div>
  <footer style="margin-top:10px;">
  
    <img src="./img/sb.png" alt="./img/sb.png" width="180px" height="35px" >

           <p style="text-align:center; font-size: 1em;">&copy; Farmers Marketplace. All Rights Reserved.</p>

   </footer>



  <script src="https://cdnjs.cloudflare.com/ajax/libs/babel-core/6.1.19/browser.js"></script>
  <script src="./js/app.js"></script>
</body>

</html>
