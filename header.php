<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" type="image/x-icon" href="https://radioagakiza.org/Images/favicon.ico">
<title>RADIO AGAKIZA</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="/assets/css/style.css">
<style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
    }
  
    .header {
        background-color: #003366; /* Dark blue color */
        padding: 10px 0 0 0;
        border-bottom:1px solid #E6E8EA;
    }
    .header-top, .header-bottom {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 20px;
    }
 
    .header-bottom {
        padding-top: 5px; /* Adjust the padding to align with the design */
        height:50px;
       
        background-color:white;
        
    }
    .logo {
        display: flex;
        align-items: center;
       
    }
    .logo img {
        margin-right: 10px;
        width:200px;
        height: 50px;
   
    }
    .logo-text {
        color: white;
        font-size: 1.5em;
        font-weight: bold;
    }
    .header-bottom-left {
       
        font-size: 1em;
    }
    .header-top-right {
        display: flex;
        font-size: 0.75em;
    }
    .header-top-right a {
        
        color: white;
        text-decoration: none;
        padding: 0 10px;
        font-weight: bold;
        font-size: 1em;
        margin-left: 1px; /* Space between links */
        border-left:2px solid white;
    }
    .header-top-right a:hover {
        text-decoration: underline;
    }
    @media (max-width: 768px) {
        .header-top-right {
            display: none;
        }
        /* Add responsive design for mobile devices */
    }

    .header-bottom-right {
       
       font-size: 1em;
   }
   .header-bottom-right {
       display: flex;
   }
   .header-bottom-right a {
       color:#07477B;
       text-decoration: none;
       padding: 0 10px;
       font-weight: bold;
       font-size: 1em;
       
     
       margin-left: 5px; /* Space between links */
   }
   .header-bottom-right a:hover {
       text-decoration: underline;
   }
   #sidebar{
    position:fixed;
    top:50px;
    right: 5px;
   }
   #sidebar .hiddenBar{
    display: none;
   }
   #sidebar .showBar{
    display: block;
   }
   
   #sidebar img{
    height: 30px;
    width: 50px;
   
   }
   #sidebarWrapper{
    margin: 0 0 100px 0;
    padding:0;
    display: none;
    
   }
 
   @media (max-width: 768px) {
       .header-bottom-right {
           display: none;
       }
       #sidebarWrapper{
            display: block;
            
        }
       /* Add responsive design for mobile devices */
   }
     @media(max-width: 576px) {
            
    .header {
        width:100%;
        position: fixed;
        top:0;
        left:0;
    }
     #sidebar{
    
    top:50px;
    right: 45px;
   }
   
    
  }
</style>
</head>
<body>
    <div class="header">
        <div class="header-top">
        <div class="logo-text">RADIO AGAKIZA</div>
            <div class="header-top-right">
                <!-- Replace with your navigation links -->
                <a href="https://radioagakiza.org/RadioAgakiza/Kir/User/turondere.php">TURONDERE</a>
                <a href="https://radioagakiza.org/RadioAgakiza/Kir/User/dushigikire.php">DUSHIGIKIRE</a>
                <a href="https://radioagakiza.org/RadioAgakiza/Kir/User/iyandikishe.php">IYANDIKISHE</a>
            </div>
        </div>
        <div class="header-bottom">
        <div class="logo">
                <!-- Replace with your logo image -->
                <img src="https://radioagakiza.org/Images/radio agakiza logo.png" alt="RADIO AGAKIZA logo" />
                
            </div>
        <div class="header-bottom-right">
                <!-- Replace with your navigation links -->
                <a href="https://radioagakiza.org/index.php">IYAKIRIRO</a>
                <a href="https://radioagakiza.org/RadioAgakiza/Kir/User/ibiganiro.php">IBIGANIRO</a>
                <a href="https://radioagakiza.org/RadioAgakiza/Kir/User/turibande.php">TURI BANDE</a>
                <a href="https://radioagakiza.org/RadioAgakiza/Kir/User/ivyanditse.php">IVYANDITSWE</a>
                <a href="https://radioagakiza.org/RadioAgakiza/Kir/User/gahunda.php">GAHUNDA</a>
            </div>
           
        </div>
        
    </div>
      <!-- This code remove side bar image-->
      
    <div id="sidebarWrapper">
        <div id="sidebar">
            <img src="https://radioagakiza.org/Images/bar.png" alt="RADIO AGAKIZA logo" id="bar" class="showBar" onclick="barFun()" />
            <img src="https://radioagakiza.org/Images/close.png" alt="RADIO AGAKIZA logo" id="close" class="hiddenBar"  onclick="closeFun()" />
        </div> 
      
      
        <?php include_once "./sidebar.php"; ?>
          
    </div>
   
    
     <script> 
     //this js code hide the first vertical bar in the header top section
        let headerTops=document.querySelectorAll('.header-top-right a');
        headerTops[0].style.border='none';

    </script>
      <script> 
        //this js code is to hide or to display icons
        var bar= document.getElementById('bar');
        var close= document.getElementById('close');
        var sidebarLinks= document.getElementsByClassName('sidebarLinks');
        console.log(sidebarLinks);
        function barFun(){
           
           if (bar.classList.contains('showBar')) {
               bar.classList.remove('showBar');
               close.classList.add('showBar');
               Array.from(sidebarLinks).forEach(function(link) {
                    link.style.display = 'block';
                });
            } 

            if (close.classList.contains('hiddenBar')) {
               bar.classList.add('hiddenBar');
               close.classList.remove('hiddenBar');
            }
       
        }
        function closeFun(){
           
      
            if (close.classList.contains('showBar')) {
               close.classList.remove('showBar');
               bar.classList.add('showBar');
               Array.from(sidebarLinks).forEach(function(link) {
                    link.style.display = 'none';
                });
            } 

            if (bar.classList.contains('hiddenBar')) {
               close.classList.add('hiddenBar');
               bar.classList.remove('hiddenBar');
            }
            
        }
   
       </script>
       <script defer src="/assets/js/main.js"></script>
 </body>
 </html>
