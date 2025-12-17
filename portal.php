<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "adminpage");
$timeout = 30;
if (isset($_SESSION['LAST ACTIVITY']) && time() - $_SESSION['LAST ACTIVITY'] > $timeout) {
  session_unset();
  session_destroy();
  header("Location:adminpage.php");
  exit();
}
$_SESSION['LAST_ACTIVITY'] = time();

$username = $_SESSION['username'];
$password = $_SESSION['password'];
if($username == ""){
  header("Location:adminpage.php");
}
if(isset($_POST['bts'])){
  session_destroy();
  header("Location:adminpage.php");
 
}


?>
  <!-- Coding by CodingNepal | www.codingnepalweb.com -->
  <html lang="en" dir="ltr">
    <head>
      <meta charset="UTF-8">
      <title> Admin portal </title>
      <link rel="stylesheet" href="complainform.css">
      <link rel="stylesheet" href="portal.css">
      <!-- Boxiocns CDN Link -->
      <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
      <link href=<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <style>
        
.sidebar .profile-details .profile_name,
.sidebar .profile-details .job{
  color: #fff;
  font-size: 20px;
  font-weight: 500;
  white-space: nowrap;
}
.sidebar.close .profile-details i,
.sidebar.close .profile-details .profile_name,
.sidebar.close .profile-details .job{
  display: none;
}
.sidebar .profile-details .job{
  font-size: 15px;
}
#logoutButton {
            position: absolute;
            top: 20px; /* Adjust as needed */
            right: 20px; /* Adjust as needed */
            background-color: #4682B4;
            color: black;
  cursor:pointer;
  border-radius:50px;
  padding:10px 20px 10px 0;
  font: size 15px;
  text-align:left;
  text-indent:40px;
  display:block;
  /* Animations: */
  -webkit-transition-timing-function: ease-in-out;
  -webkit-transition-duration: .4s;
  -webkit-transition-property: all;
  -moz-transition-timing-function: ease-in-out;
  -moz-transition-duration: .4s;
  -moz-transition-property: all;
}
#logoutButton:hover {
  background-image: url( 'https://dh3vbjnk0bnfa.cloudfront.net/static/centralauth/images/btn-login.png' );
  background-position: 65px 5px;
  text-indent: 15px;  
}
.button-29 {
  align-items: center;
  appearance: none;
  background-image: radial-gradient(100% 100% at 100% 0, #5adaff 0, #5468ff 100%);
  border: 0;
  border-radius: 6px;
  box-shadow: rgba(45, 35, 66, .4) 0 2px 4px,rgba(45, 35, 66, .3) 0 7px 13px -3px,rgba(58, 65, 111, .5) 0 -3px 0 inset;
  box-sizing: border-box;
  color: #fff;
  cursor: pointer;
  display: inline-flex;
  font-family: "JetBrains Mono",monospace;
  height: 35px;
  justify-content: center;
  line-height: 1;
  list-style: none;
  overflow: hidden;
  padding-left: 16px;
  padding-right: 16px;
  position: relative;
  text-align: left;
  text-decoration: none;
  transition: box-shadow .15s,transform .15s;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  white-space: nowrap;
  will-change: box-shadow,transform;
  font-size: 18px;
  position: absolute;
  top:12px;
  right: 20px;
}

.button-29:focus {
  box-shadow: #3c4fe0 0 0 0 1.5px inset, rgba(45, 35, 66, .4) 0 2px 4px, rgba(45, 35, 66, .3) 0 7px 13px -3px, #3c4fe0 0 -3px 0 inset;
}

.button-29:hover {
  box-shadow: rgba(45, 35, 66, .4) 0 4px 8px, rgba(45, 35, 66, .3) 0 7px 13px -3px, #3c4fe0 0 -3px 0 inset;
  transform: translateY(-2px);
}

.button-29:active {
  box-shadow: #3c4fe0 0 3px 7px inset;
  transform: translateY(2px);
}

        </style>
    </head>
  <body>
  <Form action="portal.php" method="post">
    <div class="sidebar close">
      <div class="logo-details">
        <i class='bx bxl-c-plus-plus'></i>
        <span class="logo_name">CodingLab</span>
      </div>
      <ul class="nav-links">
        <li>
          <a href="http://localhost/poral/portal.php">
            <i class='bx bx-grid-alt' ></i>
            <span class="link_name">Dashboard</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="#">Request</a></li>
          </ul>
        </li>
        <li>
          <div class="iocn-link">
            <a href="#">
              <i class='bx bx-collection' ></i>
              <span class="link_name">Request</span>
            </a>
            <i class='bx bxs-chevron-down arrow' ></i>
          </div>
          <ul class="sub-menu">
            <li><a class="link_name" href="#">Request</a></li>
            <li><a href="http://localhost/poral/complainform.php">Complaint Form</a></li>
            
          </ul>
        </li>
        <li>
          <div class="iocn-link">
            <a href="http://localhost/poral/campuschange.php">
              <i class='bx bx-collection' ></i>
              <span class="link_name">Campus Change</span>
            </a>
        
          </div>
         
        </li>
        <li>
          <a href="http://localhost/poral/marksquery.php">
            <i class='bx bx-collection' ></i>
            <span class="link_name">Marks Query</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="#">Notification</a></li>
          </ul>
        </li>
        <li>
          <a href="http://localhost/poral/showcomplain.php">
            <i class='bx bx-line-chart' ></i>
            <span class="link_name">See your Complain</span>
          </a>
          
        </li>
        <li>
          <div class="iocn-link">
            <a href="http://localhost/poral/showcampuschange.php#">
              <i class='bx bx-line-chart' ></i>
              <span class="link_name">Show Campus Change</span>
            </a>
           
          </div>
        
        
        <li>
          <a href="http://localhost/poral/showmarks.php">
            <i class='bx bx-line-chart' ></i>
            <span class="link_name">Show Marks Query</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="#">Explore</a></li>
          </ul>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-history'></i>
            <span class="link_name">History</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="#">History</a></li>
          </ul>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-cog' ></i>
            <span class="link_name">Setting</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="#">Setting</a></li>
          </ul>
        </li>
        <li>
      <div class="profile-details">
        <div class="profile-content">
        
        </div>
        <div class="name-job">
        <div class="profile_name">M.Moawin</div>
          <div class="job">Design & Developed</div>
        </div>
        <i'bx-bx-log-out'></i>
        
      </div>
    </li>
  </ul>
    </div>
    <section class="home-section">
      <div class="home-content">
        <i class='bx bx-menu' ></i>
        <span class="text">Student Portal</span>
        <input type="submit" class="button-29" name="bts" id="bts" value="Log out">
        <i class="fa-solid fa-right-from-bracket"></i>
        <i 'bx bx-log-out'></i>
       
        
      </div>
    
     
    </section>
  
    <script>
    let arrow = document.querySelectorAll(".arrow");
    for (var i = 0; i < arrow.length; i++) {
      arrow[i].addEventListener("click", (e)=>{
    let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
    arrowParent.classList.toggle("showMenu");
      });
    }
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".bx-menu");
    console.log(sidebarBtn);
    sidebarBtn.addEventListener("click", ()=>{
      sidebar.classList.toggle("close");
    });
    </script>
    </form>
  </body>
  </html>

      </body>
  </html>
