<style>
    #maincontents{
        max-width: 75rem;
        margin: auto;
        margin-top: 20px;
        margin-bottom: 20px;
        
    }
    #audiplayerheader{
     
        width: 100%;
        height: 320px;
        background-color: #07477B;
      
    }
    #audiplayerheader img{
        width: 70%;
        height: 200px;
        margin: 3% 0% 10% 15%;  
    }
    #audiplayerheader #devis{
      margin: 120px;
      font-size: 1.5rem;
      color: #61A331;
      text-align: center;
    }
    #audiplayerheader #date-location{
      margin: -120px;
      padding: 0;
      color: white;
      font-size: 2rem;
      text-align: center;
    
    }
    hr{
      height: 2px;
      background-color: red;
      width: 80%;
      margin: 20px auto 10px auto;
      border: none;
    }
    .point {
      width: 15px;
      height: 15px;
      border-radius: 50%;
      background-color: red;
      margin: -8px auto 0 auto;
      position: relative;
      left: -10%;
    }
    .point1 {
      width: 20px;
      height: 20px;
      border-radius: 50%;
      background-color: red;
      margin: -30px auto 0 auto;
      position: relative;
      right: 25%;
    }
    #ikibiriraho{
      position: absolute;
      right: 25%;
      top: 50%;
      transform: translateY(-50%);
    }
    #playradio{
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 30px;
    gap: 60px;
    }
 .bi-play-circle{
     text-align: center;
     font-size: 50px;
     cursor: pointer;
   }
   .bi-pause-circle{
      text-align: center;
     font-size: 50px;
     display:none;
     cursor: pointer;
   }
   .bi-volume-mute,.bi-volume-up{
    font-size: 30px;
    cursor: pointer;
   }

   .audio-player {
    position: relative;
    margin-top: 20px;
   }

  .articles {
    margin-top: -50px;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 10px;
    padding: 20px;
  }
  .article-card {
    background-color: white;
    border-radius: 8px;
    overflow: hidden;
  }
  .article-card  .category{
    text-align: center;
    color: #07477B;
    font-weight: bold;
    font-size: 1.5rem;
  }

  .article-card img {
    width: 100%;
    display: block;
  }
  .article-content {
    padding: 15px;
  }
  .article-title {
    font-size: 22px;
    font-weight: bold;
    color: #61A331;
    margin-bottom: 10px;
  }
  .article-description {
    font-size: 18px;
    margin-bottom: 18px;
    color: #07477B;
  }
  .article-content button{
    background-color: #07477B;
    color: white;
  
  }
  #art-footer{
    display: flex;
    justify-content: space-between;
    align-items: center;
    row-gap: 1px;
  }
  #otherInfos p {
    margin: 0; 
    padding: 1px 0; 
    color: #07477B;
  }
  
           .schedule {
            padding: 20px;
            background-color: #e6e6e6; /* Light grey background */
            max-width: 65rem;
            margin: auto;
        }

        .show {
            border-bottom: 1px solid #ccc;
            padding: 10px;
            margin: 5px;
            border-radius: 10px;
            background-color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            row-gap: 1px;
        }
        .showCoreInfos {
            flex-grow: 1; /* Make the title grow to fill available space */
            margin-left: 20px; 
        }
        .show.last-child {
            border-bottom: none;
        }

        .show-title {
            font-weight: bold;
            color: #07477B;
            font-size: 20px;
            margin-bottom: 5px;
        }

        .show-time {
            margin-bottom: 5px;
        }

        .show-host {
            font-size: 14px;
            color: #666;
        }
        h2{
            font-weight: bold;
            color: #07477B;
            font-size: 30px;
            text-align: center;
        }
        .current-program {
            background-color: red;
        }
  
   @media only screen and (max-width: 576px) {
            
    #maincontents{
        max-width: 100%;
        margin: auto;
        margin-top: 120px;  /* 5px  */
        margin-bottom: 20px;
        
    }
    #audiplayerheader{
     
        width: 100%;
        height: 350px;
       
      
    }
    #audiplayerheader img{
        width: 70%;
        height: 250px;
        margin: 3% 0% 5% 15%;  
    }
    #audiplayerheader #devis{
      margin: 50px;
      font-size: 1rem;
    
    }
    #audiplayerheader #date-location{
      margin: -36px;
      font-size: 1.5rem;
     
    
    }
    hr{
      height: 2px;
      background-color: red;
      width: 80%;
      margin: auto;
      margin-top: 10px;
    }
    .point {
      margin-left: 33px;
    }
    .point1 {
     
      margin-left: -23px;
      
    }
    #ikibiriraho{
      position: absolute;
      right: 10%;
    }
    #playradio{
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 40px;
    margin-bottom: 20px;
    gap: 40px;
    }
    .bi-volume-mute,.bi-volume-up{
    font-size: 30px;
   }
   
   .point {
      left: -5%;
    }
    .point1 {
      right: 15%;
    }
    
  }



</style>
<div id="maincontents">
    <div id="radioplayercontainer">
        <div id="audiplayerheader">
            <img src="Images/radioagakiza_garden.png" alt="radio agakiza logo">  
            <p id="date-location">Bujumbura,<span id="currentDate"></span>
           </p>
            <p id="devis">Shishikara kunezezwa n'ibiganiro vya Radio yacu,Radio yanyu,Radio yacu twese</p>
        </div>
        <div id="playradio">
          <i class="bi bi-volume-up"></i>
          <i class="bi bi-play-circle"></i>
          <i class="bi bi-pause-circle"></i>
          <i class="bi bi-volume-mute"></i>
        </div>
        
        <div class="audio-player">
            <hr class="hero">
            <div class="point"></div>
            <div id="ikibiriraho">
              <p>Ikibiriraho</p>
              <div class="point1"></div>
            </div>
        </div>
        <!-- Live audio element controlled by assets/js/main.js -->
        <audio id="liveAudio" preload="none" crossorigin="anonymous"></audio>
        <script>
          window.STREAM_URL = "https://cast6.asurahosting.com/proxy/radioaga/stream";
        </script>
    </div>
    
   
    
    <h2>Ibiheruka kwandika</h2>
    <div class="articles">
      
      
    <div class="article-card">
        <p class="category">UBUHANUZI</p>
        <img src="Images/Ibiganiro/IJWI RY INZAMBA.jpeg" alt="Article Image 1">
        <div class="article-content">
        <div class="article-title">Imana irihafi yawe</div>
        <div class="article-description">Ncuti  bakunzi b’ijambo ry’Imana, namwe banywanyi b’ikiganiro « Ijwi ry’inzamba y’iherezo, ndabaramukije mw’izina ry’Umwami wacu Yesu Kristo. Nkundira ndabahe ikaze kubirenge vya Yesu Kristo aho tugiye kwigira hamwe ijambo ry’ubugingo. </div>
        <div id="art-footer">
          <button>Soma vyinshi</button>
          <div id="otherInfos">
            <p>Le 10/01/2024</p>
            <p>Pr Laurent Landry Ntirampeba</p>
          </div>
        </div>
        </div>
    </div>
    <div class="article-card">
      <p class="category">UBUTUMWA BWIZA</p>
        <img src="Images/Ibiganiro/ABO NI BANDE.jpg" alt="Article Image 1">
        <div class="article-content">
        <div class="article-title">Yesu aragukunda</div>
        <div class="article-description">Ubuzima bufise igihe gito kuburyo kitopfishwa ubusa. Dufise imisi mike gusa yigihe cimbabazi dukwiye kwiteguriramwo ubugingo buhoraho.Ntamwanya woguta dufise, ntamwanya wokwumvira umunezero wa kamere,.... Ntamwanya wogukundwakaza icaha.</div>
        <div id="art-footer">
          <button>Soma vyinshi</button>
          <div id="otherInfos">
            <p>Le 10/01/2024</p>
            <p>Pr. NSHIMIRIMANA Dieudonne</p>
          </div>
        </div>
        </div>
    </div>
    <div class="article-card">
      <p class="category">INTUNGAMAGARA</p>
        <img src="Images/Ibiganiro/amagara.jpg" alt="Article Image 1">
        <div class="article-content">
        <div class="article-title">Bungabunga amagara yawe</div>
        <div class="article-description">. Kugira ngo tumenye ivyokurya birusha ibindi kuba vyiza, tugomba kwiga umugambi Imana yagiriye umuntu ubwa mbere ku vyerekeranye n’ibizomutunga. Iyaremye umuntu kandi Igasobanukirwa n’ivyifuzo vyiwe, yageneye Adamu ivyokurya vyiwe. </div>
        <div id="art-footer">
          <button>Soma vyinshi</button>
          <div id="otherInfos">
            <p>Le 10/01/2024</p>
            <p>Radio Agakiza</p>
          </div>
        </div>
        
        </div>
    </div>
    
    </div>
    <h2>Gahunda yuno musi</h2>
   <!--comment of the timetable-->
   
     <?php  
    // Database connection
    /*
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    require_once "../Tools/connection.php";
    $n=5;
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }   

    // Check if IntlDateFormatter class exists
    $dayName = null;
    if (class_exists('IntlDateFormatter')) {
        // Create a date formatter for French
        $formatter = new IntlDateFormatter(
            'fr_FR',
            IntlDateFormatter::FULL,
            IntlDateFormatter::NONE,
            'Africa/Bujumbura', // Relevant timezone for Bujumbura
            IntlDateFormatter::GREGORIAN,
            'EEEE' // Pattern for full day of week name
        );
        
        // Get the current date and format it
        $dayName = $formatter->format(new DateTime());
        // Remove all spaces from the string
        $noSpaces = str_replace(' ', '', $dayName);
        
        // Capitalize the first letter
        $day = ucfirst($noSpaces);
    }

    echo '<div class="schedule">';

    $sql = "SELECT * FROM programme WHERE jour=? ORDER BY pgmId ASC";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $day);
    $stmt->execute();
    $result = $stmt->get_result();
    // Fetch the programs
    $programme = $result->fetch_all(MYSQLI_ASSOC);

    $currentTime = new DateTime('now', new DateTimeZone('Africa/Bujumbura'));
    echo '<p>Current Time: ' . $currentTime->format('H:i') . '</p>'; // Debugging info
    $programFound = false; // Flag to check if a program is found

    foreach ($programme as $pgm) {
        list($startTime, $endTime) = explode('-', $pgm['periode']);
        $programStartTime = DateTime::createFromFormat('H:i', $startTime, new DateTimeZone('Africa/Bujumbura'));
        $programEndTime = DateTime::createFromFormat('H:i', $endTime, new DateTimeZone('Africa/Bujumbura'));

        echo '<p>Program: ' . htmlspecialchars($pgm['emission']) . ' | Start: ' . $programStartTime->format('H:i') . ' | End: ' . $programEndTime->format('H:i') . '</p>'; // Debugging info

        if ($currentTime >= $programStartTime && $currentTime < $programEndTime) {
            echo '<div class="show current-program" data-start="' . $startTime . '" data-end="' . $endTime . '">';
            echo  '<div class="show-time">' . htmlspecialchars($pgm['periode']) . '</div>';
            echo  '<div class="showCoreInfos">';
            echo '<div class="show-title">' . htmlspecialchars($pgm['emission']) . '</div>';
            echo '<div class="show-host">' . htmlspecialchars($pgm['producteur']) .'</div>';
            echo '</div>';
            echo '<div class="show-time">' . calculateDuration(htmlspecialchars($pgm['periode'])) . ' min</div>';
            echo '</div>';
            $programFound = true; // Program is found
            break; // Only display the current program
        }
    }

    if (!$programFound) {
        echo '<p>No current program found.</p>'; // Message if no program is found
    }

    echo '</div>';

    $conn->close();

    // Function to calculate the duration in minutes from a time interval string
    function calculateDuration($timeInterval) {
        $noSpaces = str_replace(' ', '', $timeInterval);
        list($startTime, $endTime) = explode('-', $noSpaces);
        
        $startDateTime = new DateTime($startTime);
        $endDateTime = new DateTime($endTime);
        
        $interval = $startDateTime->diff($endDateTime);
        
        return ($interval->h * 60) + $interval->i; // duration in minutes
    }
    
    */
?>

  
  
</div>

<!-- Inline audio logic moved to assets/js/main.js -->
<!-- Inline date logic moved to assets/js/main.js -->
<!-- Schedule highlight logic can be re-enabled when DB schedule is active -->
