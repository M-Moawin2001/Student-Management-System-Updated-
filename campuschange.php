<?php
$con = mysqli_connect("localhost", "root", "", "adminpage");
session_start();
$username = $_SESSION['username'];
$password = $_SESSION['password'];
if($username == ""){
  header("Location:adminpage.php");
}
if(isset($_POST['btnsave'])){
    $Name = $_POST['Name'];
    $StudentId = $_POST['StudentId'];
    $Campus = $_POST['Campus'];
    $Campus2 = $_POST['Campus2'];
    $Reason= $_POST['Reason'];
mysqli_query($con, "INSERT INTO campuschange VALUES('$Name','$StudentId','$Campus','$Campus2','$Reason')");
   echo "You are submited Succesfully";
  }
?>



  <!-- Coding by CodingNepal | www.codingnepalweb.com -->
  <html lang="en" dir="ltr">
    <head>
      <meta charset="UTF-8">
      <title> Admin portal </title>
      <link rel="stylesheet" href="portal.css">
      <!-- Boxiocns CDN Link -->
      <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <style>
.blued-3 {
  
    margin: 20px;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background: linear-gradient(115deg, #56d8e4 10%, #9f01ea 90%) ;
}

.blued-3 label {
    font-weight: bold;
}

.blued-3 input[type="text"],
.blued-3 textarea {
    width: calc(100% - 22px); /* Adjusting width to account for padding */
    padding: 10px;
    margin: 5px 0;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.blued-3 textarea {
    height: 100px;
    resize: vertical;
}

.blued-3 input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
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

      </style>
    </head>
  <body>
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
        <span class="text">Campus Change</span>
      </div>
      <div class="blued-3">
    <Form action="campuschange.php" method="post">
          <label>Student Name </label><br>
      <input type="text" name="Name" id="Name" placeholder="Student Name"><br><br>

      <label>Student Id </label><br>
      <input type="text" name="StudentId" id="StudentId" placeholder="Student Id"><br><br>


      <label>Campus  </label><br>
      <select name="Campus" id="Campus">
  <option value="Korangi Campus">Korangi Campus</option>
  <option value="Gulshan Campus">Gulshan Campus</option>
  <option value="North Nazimabad Campus">North Nazimabad Campus</option>
  <option value="Defence Campus">Defence Campus
  </option>
</select><br><br>

<label>Campus change Name</label><br>
      <select name="Campus2" id="Campus2">
  <option value="Korangi Campus">Korangi Campus</option>
  <option value="Gulshan Campus">Gulshan Campus</option>
  <option value="North Nazimabad Campus">North Nazimabad Campus</option>
  <option value="Defence Campus">Defence Campus
  </option>
</select><br><br>

      <label>Reason </label><br>
      <textarea id="Reason" name="Reason" rows="4" cols="50" placeholder="TEXT">
</textarea><br><br>

      
      <!--<button type="button" name="Submit" id="Submit">Submit</button>-->
      <input type="submit" name="btnsave" id="btnsave">
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
  </body>
  </html>

      </body>
  </html>
