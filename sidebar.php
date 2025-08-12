<!DOCTYPE html>
<html>
<head>
<style>
/* The sidebar styling */
.sidebarLinks {
  height: 100%; /* Full-height */
  width: 250px; /* Set the width of the sidebar */
  position: fixed; /* Fixed Sidebar (stay in place on scroll) */
  z-index: 1; /* Stay on top */
  top: 95px; /* Stay at the top */
  right: 0;
  background-color: #004d99; /* Blue background color */
  overflow-x: hidden; /* Disable horizontal scroll */
  padding-top: 20px;
  display:none;
}



/* Sidebar links */
.sidebarLinks a {
  padding: 10px 15px;
  text-decoration: none;
  font-size: 22px;
  color: white;
  display: block;
  border-bottom: 1px solid #ccc; /* Add a border to each link */
}

/* Active/current link */
.sidebarLinks a.active {
  background-color: #001f3f; /* Darker blue background for the active link */
  color: white;
}

/* Links on hover */
.sidebarLinks a:hover {
  background-color: #555; /* Add a hover effect to the links */
  color: white;
}

/* Style page content - use this if you want to push the page content to the right when you open the sidebar */
.content {
  transition: margin-left .5s; /* If you want a transition effect */
  padding: 20px;
  margin-left: 250px; /* Same as the width of the sidebar */
}

  @media only screen and (max-width: 576px) {
         .sidebarLinks {
          height: 100%; /* Full-height */
          width: 100%; /* Set the width of the sidebar */
 
        }   
    
    
  }

</style>
</head>
<body>

<div class="sidebarLinks">
  
  <a href="#" class="active">IYAKIRIRO</a>
  <a href="#">IBIGANIRO</a>
  <a href="#">TURI BANDE</a>
  <a href="#">IVYANDITSE</a>
  <a href="#">GAHUNDA</a>
  <a href="#" >TURONDERE</a>
  <a href="#">DUSHIGIKIRE</a>
  <a href="#">IYANDIKISHE</a>
</div>

<div class="content">
  <!-- Page content -->
</div>




</body>
</html>
