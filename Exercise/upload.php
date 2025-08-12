 <!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>File Uploader</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
   <style>
          @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');
        *{
          margin: 0;
          padding: 0;
          box-sizing: border-box;
          font-family: "Poppins", sans-serif;
        }
        body{
          display: flex;
          align-items: center;
          justify-content: center;
          min-height: 100vh;
          background: #04d476;
        }
        
        ::selection{
          color: #fff;
          background: #04d476;
        }
        .wrapper{
          width: 560px;
          background: #fff;
          border-radius: 5px;
          padding: 30px;
          box-shadow: 7px 7px 12px rgba(0,0,0,0.05);
        }
        .wrapper header{
          color: #04d476;
          font-size: 27px;
          font-weight: 600;
          text-align: center;
        }
        .wrapper small{
          text-align:center;
          color:#038249;
        }
        .wrapper form{
          height: 167px;
          display: flex;
          cursor: pointer;
          margin: 30px 0;
          align-items: center;
          justify-content: center;
          flex-direction: column;
          border-radius: 5px;
          border: 2px dashed #04d476;
        }
        form :where(i, p){
          color: #04d476;
        }
        form i{
          font-size: 50px;
        }
        form p{
          margin-top: 15px;
          font-size: 16px;
        }
        
        section .row{
          margin-bottom: 10px;
          background: #E9F0FF;
          list-style: none;
          padding: 15px 20px;
          border-radius: 5px;
          display: flex;
          align-items: center;
          justify-content: space-between;
        }
        section .row i{
          color: #04d476;
          font-size: 30px;
        }
        section .details span{
          font-size: 14px;
        }
        .uploaded-area{
          max-height: 232px;
          overflow-y: scroll;
        }
        .uploaded-area.onprogress{
          max-height: 150px;
        }
        .uploaded-area::-webkit-scrollbar{
          width: 0px;
        }
        .uploaded-area .row .content{
          display: flex;
          align-items: center;
        }
        .uploaded-area .row .details{
          display: flex;
          margin-left: 15px;
          flex-direction: column;
        }
        .uploaded-area .row .details .size{
          color: #404040;
          font-size: 11px;
        }
        .uploaded-area i.fa-check{
          font-size: 16px;
        }
        .progress-area {
            display:inline-block;
            height: 100%; /* Adjust height as needed */
            background-color: #4CAF50; /* Progress bar color */
            width: 0%; /* Initial width */
            transition: width 0.5s; /* Optional: smooth transition for width changes */
        }

        .progress-container {
            display:inline-block;
            border:1px solid #ddd;
            height:30px;
            width: 100%; /* Full width */
            background: #ddd; /* Light grey background */
            border-radius: 5px; /* Optional: rounded corners */
            overflow: hidden; /* Ensures the content is clipped to the container's corner radius */
        }
        #cancel{
            color:red;
            border:none;
            float:right;
            margin:auto;
            background: #ddd;
        }
        #icon-cancel{
            
            line-height: 2;
            width:40px;
            height:40px;
        }

    </style>
</head>
<body>
  <div class="wrapper">
    <header>File uploading</header>
     
    <form id="form">
      <input class="file-input" type="file" name="file" id="file"  hidden>
      <i class="fas fa-cloud-upload-alt"></i>
      <p>Click to select one file at a time.</p>
     
    </form>
      <div id="wrapper-progress">
      <div class="progress-container">
              <div class="progress-area"></div>
              <button id="cancel"><i class="bi bi-x-square" id="icon-cancel"></i></button>
        </div>
        <span id="percent"></span>
        </div>
      <span>Données:</span><span id="mbs"></span><span>||</span>
      <span>Vitesse:</span><span id="speed"></span><span>||</span>
      <span>Temps restant:</span><span id="timeremaining"></span>
      
    <section class="uploaded-area"></section>
  </div>

  <script>
        const form = document.querySelector("form");
        fileInput = document.querySelector(".file-input");
        progressArea = document.querySelector(".progress-area");
        uploadedArea = document.querySelector(".uploaded-area");
        
        // form click event
        form.addEventListener("click", () =>{
          fileInput.click();
        });
        
        $(document).ready(function(){
      
        $('.file-input').on('change', () => {$('#form').submit();});
        
        // file upload using ajax
        $('#form').on('submit', function(e){
            e.preventDefault();
             var percentComplete;
            var xhr = $.ajax({
                xhr: function(){
                    var xhr = new XMLHttpRequest();
                    var startTime=new Date().getTime();
                    xhr.upload.addEventListener('progress', function(e){
                        
                        if (e.lengthComputable) {
                            percentComplete = (e.loaded / e.total) * 100;
                            var mbTotal = (e.total / (1024 * 1024)).toFixed(2); // Total MB with two decimal places
                            var mbLoaded = (e.loaded / (1024 * 1024)).toFixed(2); // Loaded MB with two decimal places

                            
                            var time = (new Date().getTime() - startTime) / 1000;
                            var bps = e.loaded / time;
                            var Mbps = ((bps * 8) / (1024 * 1024)).toFixed(2);
                            
                            var remTime = (e.total - e.loaded) / bps;
                            var seconds = Math.floor(remTime % 60);
                            var minutes = Math.floor(remTime / 60);
                            $("#mbs").html(`${mbLoaded}/${mbTotal} MB`);
                            $("#speed").html(`${Mbps} Mbps`);
                            $("#timeremaining").html(`${minutes}:${seconds}s`);
                            $("#percent").html(Math.floor(percentComplete) + '%');
                            console.log(Math.floor(percentComplete));
                            $(".progress-area").width(Math.floor(percentComplete)+'%');
                            
                            if (percentComplete > 0 && percentComplete < 100) {
                                $("#cancel").prop('disabled', false);
                            } else {
                                 $("#cancel").prop('disabled', true);
                            }
                        }
                    }, false);
                    return xhr;
                },
                type: 'POST',
                url: 'upload.php',
                data: new FormData(this),
                contentType:false,
                cache: false,
                processData: false,
                beforeSend: function() {
                    $(".uploaded-area").html('');
                    $(".progress-area").width('0%');
                },
                error: function() {
                    console.log('Please try again');
                },
                success: function(response) {
                    $(".uploaded-area").html('Terminé');
                }
     
            });
             $("#cancel").on('click', () => {
                 $(".progress-area").css("backgroundColor", "red");
                xhr.abort().then(
                    $(".uploaded-area").html('Annulé'),
                    $(".progress-area").width(Math.floor(percentComplete)+'%')
                   
                )
            });
            $("#file").prop('value','');
                      

        });  
        });

      
  </script>
</body>
</html>