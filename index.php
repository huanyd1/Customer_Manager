<?php 
session_start();
if(trim($_SESSION['sess_user_id']) == '') {
  header('location:view/main/login.php');
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous"> 
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phần mềm quản lý khách hàng Plantinum Cloud</title>
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
     <li class="profile">
       <a href="view/main/log_out.php">
          <div class="profile-details">
            <img src="img/profile.jpg" alt="profileImg">
            <div class="name_job">
              <div class="name">Huân Kều</div>
              <div class="job">Ad Bạch Kim</div>
            </div>
          </div>
          <i class='bx bx-log-out' id="log_out"></i>
        </a>
     </li>
    </ul>
  </div>
  <section class="home-section">
    <div class="header">
      <div class="logo">
        <a href="index.php">
          <img class="img-logo" src="img/logo.png" alt="">
        </a>
      </div>
      <div class="text-header">
        <p class="text-header-top">
        Phần mềm quản lý khách hàng</p>
        <p class="text-header-top">
        CÔNG TY TRUYỀN THÔNG VÀ ĐÀO TẠO PLANTINUM CLOUD</p>
      </div>
    </div>
    <div class="container">
            <div class="home">
                <h1>TỔNG QUAN</h1>
                <p class="text-home">Công ty Truyền thông và Đào tạo Plantinum Cloud</p>
                <div class="content-home">
                    <div class="row">
                        <a class="item" href="view/staff/staff.php">
                            <div class="item-img">
                                <img class="img" src="img/img-staff.png" alt="">
                                <img class="img_hover" src="img/img-staff-active.png" alt="Đơn hàng">
                            </div>
                            <div class="name-img">
                                <p class="p-name">Nhân viên</p>
                            </div>
                        </a>
                        <a class="item" href="#">
                            <div class="item-img">
                                <img class="img" src="img/img-order.png" alt="">
                                <img class="img_hover" src="img/img-order-active.png" alt="Đơn hàng">
                            </div>
                            <div class="name-img">
                                <p class="p-name">Đơn hàng</p>
                            </div>
                        </a>
                        <a class="item" href="#">
                            <div class="item-img">
                                <img class="img" src="img/img-product.png" alt="">
                                <img class="img_hover" src="img/img-product-active.png" alt="Đơn hàng">
                            </div>
                            <div class="name-img">
                                <p class="p-name">Sản phẩm</p>
                            </div>
                        </a>
                        <a class="item" href="#">
                            <div class="item-img">
                                <img class="img" src="img/img-customer.png" alt="">
                                <img class="img_hover" src="img/img-customer-active.png" alt="Đơn hàng">
                            </div>
                            <div class="name-img">
                                <p class="p-name">Khách hàng</p>
                            </div>
                        </a>
                        <a class="item" href="#">
                            <div class="item-img">
                                <img class="img" src="img/img-indebt.png" alt="">
                                <img class="img_hover" src="img/img-indebt-active.png" alt="Đơn hàng">
                            </div>
                            <div class="name-img">
                                <p class="p-name">Công nợ</p>
                            </div>
                        </a>
                        <a class="item" href="#">
                            <div class="item-img">
                                <img class="img" src="img/img-account.png" alt="">
                                <img class="img_hover" src="img/img-account-active.png" alt="Đơn hàng">
                            </div>
                            <div class="name-img">
                                <p class="p-name">Tài khoản</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
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
