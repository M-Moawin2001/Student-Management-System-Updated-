  <?php
$con = mysqli_connect("localhost", "root", "", "adminpage");
session_start();
$username = $_SESSION['username'];
$password = $_SESSION['password'];
if($username == ""){
  header("Location:adminpage.php");
}

?> 
     <!-- Coding by CodingNepal | www.codingnepalweb.com -->
  <html lang="en" dir="ltr">
    <head>
      <meta charset="UTF-8">
      <title>Show Your Request</title>
      <link rel="stylesheet" href="portal.css">
      <!-- Boxiocns CDN Link -->
      <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
      <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <style>
      .home-content {
          background: linear-gradient(115deg, #56d8e4 10%, #9f01ea 90%);
        }
        .request {
            margin: 0;
            padding: 0;
            align-items: center;
            height: auto;
            background: linear-gradient(115deg, #56d8e4 10%, #9f01ea 90%) ;
           
        }
        .request {
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 25px;
            text-align: left;
            border-bottom: 1px solid #ddd;
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
#search{
  position: absolute;
  top: 15px;
  right: 130px;
  background: #fff;
    height: 30px;
    border-radius: 30px;
    padding: 10px 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    transition: 0.8s;
    rgba(255,255,255,.3),
              -4px -4px 6px 0 rgba(116, 125, 136, .2), 
    inset -4px -4px 6px 0 rgba(255,255,255,.2),
    inset 4px 4px 6px 0 rgba(0, 0, 0, .2);
    color: #5cbdbb; 
    
  }

  #search:hover{
    width: 300px;
}
  #icon{
    position: absolute;
  top: 23px;
  right: 140px;
  color: #5cbdbb;
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
  <Form action="showcomplain.php" method="post">
    <div class="sidebar close">
      <div class="logo-details">
        <i class='bx bxl-c-plus-plus'></i>
        <span class="logo_name">CodingLab</span>
      </div>
      <ul class="nav-links">
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
        <span class="text" align="center">See Your Request</span>
        <div class="search">
        <input type="text" placeholder="search By Name" name="search" id="search"><a href="#" class="search-btn">
                <i class="fas fa-search" id="icon"></i> 
        </a>
        <input type="submit" class="button-29" name="bts" id="bts" value="search">
      </div>
      </div>
      
      <div class="request">

      
        <table border="1" align="center" width="500" height="auto">
            <th>Student Name</th>
            <th>Student ID</th>
            <th>Father Name</th>
            <th>Faculty</th>
            <th>Complain</th>
            <th>Update</th>
            <th>Delete</th>
</div>


<?php
$con = mysqli_connect("localhost", "root", "", "adminpage");
if(isset($_POST['bts'])){
  $search = $_POST['search'];
$data = mysqli_query($con, "select * from complainform ");
for ($i=0; $i < mysqli_num_rows($data); $i++) { 
    $rows = mysqli_fetch_array($data);
    echo "<tr>
    <td> $rows[0] </td>
    <td> $rows[1] </td>
    <td> $rows[2] </td>
    <td> $rows[3] </td>
    <td> $rows[4] </td>
    <td> <a href='update.php?q=$rows[1]'> Update </a> </td>
    <td><a href='complaindelete.php?id=$rows[1]' onclick=\"return confirm('Are you sure you want to delete this record?');\">Delete</a></td>

    </tr>";


}

}

    

    ?>

</table>

     
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


