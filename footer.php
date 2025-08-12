<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
   a{
       text-decoration:none;
       color:white;
   }
  .footer {
    background-color: #004d99; /* Blue background color */
    color: white; /* White text color */
    padding: 20px; /* Some padding */
    display: flex; /* Use flexbox for layout */
    justify-content: space-between; /* Space out the columns */
    align-items: center; /* Center the content vertically */
    font-family: Arial, sans-serif; /* Set the font */
  }
  .footer-column {
    margin: 0 10px; /* Space out the columns */
  }
  .footer-column h3 {
    color: white; /* White text color for headings */
    margin-bottom: 10px; /* Space below the headings */
  }
  .footer-column ul {
    list-style: none; /* Remove default list styling */
    padding: 0; /* Remove padding */
    margin: 0; /* Remove margin */
  }
  .footer-column li:not(:last-child) {
    margin-bottom: 5px; /* Space between list items, except the last one */
  }
  .footer-logo {
    display: flex; /* Use flexbox for layout */
    align-items: center; /* Center the content vertically */
  }
  .footer-logo img {
    margin-right: 10px; /* Space after the logo */
    width: 300px;
  }
  .footer-rights {
    text-align: center; /* Center align the text */
    margin-top: 20px; /* Space above the text */
    border-bottom:1px solid #E6E8EA;
  }
  @media (max-width: 768px) {
    .footer {
      flex-direction: column; /* Stack the columns vertically on small screens */
    }
    .footer-column {
      margin-bottom: 20px; /* Space below the columns on small screens */
    }
    .footer-rights {
      margin-top: 10px; /* Less space above the text on small screens */
    }
    .footer-logo img {
    margin-right: 10px; /* Space after the logo */
    width: 100%;
  }
  .footer-logo {
    display: block; /* Use flexbox for layout */
    
  }
  .footer-logo div p{
    margin: auto;
    
  }
  }
</style>
</head>
<body>

<footer class="footer">
  <div class="footer-logo">
    <img src="https://radioagakiza.org/Images/radio agakiza logo.png" alt="Radio Logo" width="100"> <!-- Replace with your actual logo path -->
    <div>
      <h3>RADIO AGAKIZA</h3>
      <p>KW'ISOKO Y'UKURI</p>
    </div>
  </div>
  <div class="footer-column">
    <h3>TURONDERE</h3>
    <ul>
      <li>Tél:+257 77545151</li>
      <li>Fix:+257-22-22-32-13</li>
      <li>E-mail:radioagakiza@gmail.com</li>
      <li>P.O. Box 1710; Bujumbura; Burundi.</li>
      <li>Adresse:Av 8 Q.Jabe,Bujumbura,Burundi</li>
    </ul>
  </div>
  <div class="footer-column">
    <h3>DUKURIKIRE</h3>
    <ul>
      <li><a href="https://www.facebook.com/profile.php?id=100064511151367">Facebook</a></li>
      <li><a href="https://www.youtube.com/@agakizaadventtv8977">Youtube</a></li>
      <li><a href="https://whatsapp.com/channel/0029VaPU4RE7j6g958Dtyd1K">Whatsapp</li>
      <li><a href="https://twitter.com/RAgakiza">X.com</a></li>
      <li><a href="https://t.me/radioagakiza">Telegram</a></li>
    </ul>
  </div>
  <div class="footer-column">
    <h3>VUMUBURA</h3>
    <ul>
      <li>Ibiganiro</li>
      <li>Turi bande</li>
      <li>Dushigikire</li>
      <li><a href="https://radioagakiza.org/RadioAgakiza/Kir/Tools/Login/login.php">Tunganya urubuga</a></li>
    </ul>
  </div>
  <div class="footer-column">
    <h3>IZINDI MBUGA</h3>
    <ul>
      <li><a href="https://bumadventiste.org/">Burundi Union Mission</a></li>
      <li><a href="https://awr.org/?disableRedirect=1">World Radio Adventist</a></li>
      <li><a href="https://hopechannelinternational.org/">Hope Channel</a></li>
      <li><a href="https://www.adventist.org/world-church/east-central-africa/">Est Central Devision</a></li>
      <li><a href="https://www.adventist.org/">General Conference</a></li>
    </ul>
  </div>
</footer>
<div class="footer-rights">
  <p>Uburenganzira bwose kubiri k'uru rubuga ni bwa Radio Agakiza ©<span id="currentDateF"></span></p>
</div>
<script>

    var currentDateF=document.getElementById('currentDateF');
    const todayF = new Date();
    const yearF = todayF.getFullYear();
     ;
     currentDateF.innerHTML=yearF;
     
</script>
</body>
</html>
