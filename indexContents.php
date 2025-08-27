<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Responsive Content Layout</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
      margin: auto;
      margin-top: 10px;
    }
    .point {
      width: 15px;
      height: 15px;
      border-radius: 50%;
      background-color: black;
      margin-left: 110px;
      margin-top: -10px;
      background-color: red;
    }
    .point1 {
      width: 20px;
      height: 20px;
      border-radius: 50%;
      background-color: black;
      margin-left: -20px;
      margin-top: -35px;
      background-color: red;
    }
    #ikibiriraho{
      position: absolute;
      right: 25%;
    }
    #playradio{
     
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 30px;
    }
 .bi-play-circle{
 
     text-align: center;
     font-size: 50px;
     
   }
   .bi-pause-circle{
      text-align: center;
     font-size: 50px;
     display:none;
     
   }
   .bi-volume-mute,.bi-volume-up{
    font-size: 30px;
    margin: 0 80px 0 80px;
  
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

        /* APK Download Section Styles */
        #apk-download-section {
            margin: 40px auto;
            max-width: 75rem;
            padding: 0 20px;
        }

        .apk-container {
            background: linear-gradient(135deg, #07477B 0%, #61A331 100%);
            border-radius: 15px;
            padding: 30px;
            color: white;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            margin: 20px 0;
        }

        .apk-info {
            display: flex;
            align-items: center;
            margin-bottom: 30px;
            gap: 20px;
        }

        .apk-icon {
            font-size: 4rem;
            color: #61A331;
            background: rgba(255,255,255,0.1);
            padding: 20px;
            border-radius: 50%;
            backdrop-filter: blur(10px);
        }

        .apk-details h3 {
            font-size: 2rem;
            margin: 0 0 10px 0;
            color: white;
        }

        .apk-details p {
            font-size: 1.1rem;
            margin-bottom: 20px;
            opacity: 0.9;
        }

        .apk-features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 10px;
        }

        .feature {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 0.95rem;
        }

        .feature i {
            color: #61A331;
            font-size: 1.2rem;
        }

        .apk-download {
            display: grid;
            grid-template-columns: 1fr 2fr 1fr;
            gap: 30px;
            align-items: start;
        }

        .download-button-container {
            text-align: center;
        }

        .download-btn {
            display: inline-flex;
            flex-direction: column;
            align-items: center;
            background: rgba(255,255,255,0.15);
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255,255,255,0.3);
            color: white;
            padding: 20px 30px;
            border-radius: 15px;
            text-decoration: none;
            transition: all 0.3s ease;
            font-weight: bold;
            min-width: 150px;
        }

        .download-btn:hover {
            background: rgba(255,255,255,0.25);
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.3);
        }

        .download-btn i {
            font-size: 2rem;
            margin-bottom: 8px;
        }

        .download-btn span {
            font-size: 1.1rem;
            margin-bottom: 4px;
        }

        .download-btn small {
            font-size: 0.8rem;
            opacity: 0.8;
        }

        .installation-guide h4,
        .system-requirements h4 {
            color: #61A331;
            margin-bottom: 15px;
            font-size: 1.3rem;
        }

        .steps {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .step {
            display: flex;
            gap: 15px;
            align-items: flex-start;
        }

        .step-number {
            background: #61A331;
            color: white;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            flex-shrink: 0;
        }

        .step-content strong {
            color: #61A331;
            display: block;
            margin-bottom: 5px;
        }

        .step-content p {
            margin: 0;
            font-size: 0.9rem;
            line-height: 1.4;
        }

        .system-requirements ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .system-requirements li {
            padding: 8px 0;
            border-bottom: 1px solid rgba(255,255,255,0.2);
            font-size: 0.95rem;
        }

        .system-requirements li:before {
            content: "✓ ";
            color: #61A331;
            font-weight: bold;
            margin-right: 8px;
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
    justify-content: space-between;
    align-items: center;
    margin-top: 40px;
    margin-bottom: 100px;
    }
    .bi-volume-mute,.bi-volume-up{
    font-size: 30px;
    margin: 0 13px 0 17px;
  
   }

   /* APK Download Mobile Styles */
   #apk-download-section {
       padding: 0 10px;
   }

   .apk-container {
       padding: 20px;
   }

   .apk-info {
       flex-direction: column;
       text-align: center;
       margin-bottom: 25px;
   }

   .apk-details h3 {
       font-size: 1.5rem;
   }

   .apk-features {
       grid-template-columns: 1fr;
   }

   .apk-download {
       grid-template-columns: 1fr;
       gap: 20px;
   }

   .download-btn {
       padding: 15px 25px;
       min-width: 120px;
   }

   .download-btn i {
       font-size: 1.5rem;
   }

   .step {
       flex-direction: column;
       gap: 10px;
   }

   .step-number {
       align-self: flex-start;
   }
    
  }



</style>
</head>
<body>
<div id="maincontents">
    <div id="radioplayercontainer">
        <div id="audiplayerheader">
            <img src="Images/radioagakiza_garden.png" alt="radio agakiza logo">  
            <p id="date-location">Bujumbura,<span id="currentDate"></span>
           </p>
            <p id="devis">Shishikara kunezezwa n'ibiganiro vya Radio yacu,Radio yanyu,Radio yacu twese</p>
        </div>
        <div class="audio-player">
            <hr class="hero">
            <div class="point"></div>
            <div id="ikibiriraho">
              <p>Ikibiriraho</p>
              <div class="point1"></div>
            </div>
            

        </div>
        <div id="playradio">
          <i class="bi bi-volume-up"></i>
          <i class="bi bi-play-circle"></i>
          <i class="bi bi-pause-circle"></i>
          <i class="bi bi-volume-mute"></i>
          
        </div>
        <!-- Live audio element controlled by assets/js/main.js -->
        <audio id="liveAudio" preload="none" crossorigin="anonymous"></audio>
        <script>
          window.STREAM_URL = "https://cast6.asurahosting.com/proxy/radioaga/stream";
        </script>
    </div>
    
    <!-- APK Download Section -->
    <div id="apk-download-section">
        <h2>Kuramo Porogaramu ya Radio Agakiza</h2>
        <div class="apk-container">
            <div class="apk-info">
                <div class="apk-icon">
                    <i class="bi bi-phone"></i>
                </div>
                <div class="apk-details">
                    <h3>Radio Agakiza Mobile App</h3>
                    <p>Wumvire Radio Agakiza aho uri hose! Kuramo porogaramu yacu kuri telefoni yawe.</p>
                    <div class="apk-features">
                        <div class="feature">
                            <i class="bi bi-check-circle"></i>
                            <span>Wumvire radio mu gihe nyacyo</span>
                        </div>
                        <div class="feature">
                            <i class="bi bi-check-circle"></i>
                            <span>Soma amakuru mashya</span>
                        </div>
                        <div class="feature">
                            <i class="bi bi-check-circle"></i>
                            <span>Reba gahunda z'ibiganiro</span>
                        </div>
                        <div class="feature">
                            <i class="bi bi-check-circle"></i>
                            <span>Duhamagare mu buryo bworoshye</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="apk-download">
                <div class="download-button-container">
                    <a href="/downloads/Radio-Agakiza.apk" class="download-btn" download="Radio-Agakiza.apk">
                        <i class="bi bi-download"></i>
                        <span>Kuramo APK</span>
                        <small>Version 1.0</small>
                    </a>
                </div>
                
                <div class="installation-guide">
                    <h4>Uburyo bwo kwishyiraho:</h4>
                    <div class="steps">
                        <div class="step">
                            <span class="step-number">1</span>
                            <div class="step-content">
                                <strong>Emera gushyiraho:</strong>
                                <p>Jya ku <em>Settings > Security</em> hanyuma ukore <em>"Unknown Sources"</em> cyangwa <em>"Install from Unknown Sources"</em></p>
                            </div>
                        </div>
                        <div class="step">
                            <span class="step-number">2</span>
                            <div class="step-content">
                                <strong>Kuramo APK:</strong>
                                <p>Kanda ku butoni <em>"Kuramo APK"</em> hejuru kugira ngo ukuruze dosiye</p>
                            </div>
                        </div>
                        <div class="step">
                            <span class="step-number">3</span>
                            <div class="step-content">
                                <strong>Fungura dosiye:</strong>
                                <p>Nyuma yo gukurura, fungura dosiye ya <em>"Radio-Agakiza.apk"</em> mu <em>Downloads</em></p>
                            </div>
                        </div>
                        <div class="step">
                            <span class="step-number">4</span>
                            <div class="step-content">
                                <strong>Shyiraho:</strong>
                                <p>Kanda <em>"Install"</em> hanyuma utegereze ko porogaramu ishyirwaho</p>
                            </div>
                        </div>
                        <div class="step">
                            <span class="step-number">5</span>
                            <div class="step-content">
                                <strong>Fungura:</strong>
                                <p>Nyuma yo kwishyiraho, kanda <em>"Open"</em> cyangwa ushake ikoni ya Radio Agakiza kuri telefoni yawe</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="system-requirements">
                    <h4>Ibisabwa:</h4>
                    <ul>
                        <li>Android 5.0 cyangwa hejuru</li>
                        <li>Umwanya wa 15MB</li>
                        <li>Umurongo wa Internet</li>
                    </ul>
                </div>
            </div>
        </div>
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
</body>
</html>
