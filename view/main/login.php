<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/login.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phần mềm quản lý khách hàng Plantinum Cloud</title>
    <link rel="icon" href="../../img/platinum-cloud.ico">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-google-cloud icon'></i>
        <div class="logo_name">PlatinumCloud</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
          <i class='bx bx-search' ></i>
         <input type="text" placeholder="Search...">
         <span class="tooltip">Search</span>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
         <span class="tooltip">Dashboard</span>
      </li>
      <li>
       <a href="#">
         <i class='bx bx-group' ></i>
         <span class="links_name">Staff</span>
       </a>
       <span class="tooltip">Staff</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-notepad' ></i>
         <span class="links_name">Order</span>
       </a>
       <span class="tooltip">Order</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-box' ></i>
         <span class="links_name">Product</span>
       </a>
       <span class="tooltip">Product</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-face' ></i>
         <span class="links_name">Customer</span>
       </a>
       <span class="tooltip">Customer</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-money' ></i>
         <span class="links_name">Debts</span>
       </a>
       <span class="tooltip">Debts</span>
     </li>
     <li>
       <a href="#">
        <i class='bx bxs-user-account'></i>
         <span class="links_name">Account</span>
       </a>
       <span class="tooltip">Account</span>
     </li>
     <!-- <li class="profile">
         <div class="profile-details">
           <img src="img/profile.jpg" alt="profileImg">
           <div class="name_job">
             <div class="name">Huân Kều</div>
             <div class="job">Ad Bạch Kim</div>
           </div>
         </div>
         <i class='bx bx-log-out' id="log_out" ></i>
     </li> -->
    </ul>
  </div>
  <section class="home-section">
    <div class="header">
      <div class="logo">
        <a href="index.php">
          <img class="img-logo" src="../../img/logo.png" alt="">
        </a>
      </div>
      <div class="text-header">
        <p class="text-header-top">
        Phần mềm quản lý khách hàng</p>
        <p class="text-header-top">
        CÔNG TY TRUYỀN THÔNG VÀ ĐÀO TẠO PLANTINUM CLOUD</p>
      </div>
    </div>
    <!-- Login box -->
    <div class="login-box">
        <!-- Thêm icon -->
        <i class='bx bxs-key'></i>
        <h2>ADMIN PANEL</h2>
        <form method="post" name="login" action="login_submit.php">
            <div class="user-box">
                <input type="text" name="username" id="username" require="" autocomplete="off">
                <label>Username</label>
            </div>
            <div class="user-box">
                <input type="password" name="password" id="password" require="" autocomplete="off">
                <label>Password</label>
            </div>
            <input class="submit" id="submit" type="submit" value="Đăng nhập">
        </form>
    </div>
  </section>
  <script>
  let sidebar = document.querySelector(".sidebar");
  let closeBtn = document.querySelector("#btn");
  let searchBtn = document.querySelector(".bx-search");

  closeBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open");
    menuBtnChange();
  });

  searchBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open");
    menuBtnChange(); 
  });

  function menuBtnChange() {
   if(sidebar.classList.contains("open")){
     closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");
   }else {
     closeBtn.classList.replace("bx-menu-alt-right","bx-menu");
   }
  }
  </script>
</body>
</html>
