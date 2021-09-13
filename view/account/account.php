<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/index.css">
    <link rel="stylesheet" href="../../css/thongtintaikhoan.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

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
        <div class="container">
            <div class="staff">
                <div class="top-staff">
                    <h2>THÔNG TIN TÀI KHOẢN</h2>
                    <div class="top-btn-staff">

                        <div class="published inline">
                            <a class="a-published a-btn" href="https://khachhang.bachkim.com.vn/sua-thong-tin-tai-khoan.html">
                                <img src="../../../../images/edit.png" alt="Save and new">
                                <span class="span-text">Sửa thông tin</span>
                            </a>
                        </div>
                        <div class="not-published inline">
                            <a class="a-not-published a-btn" href="https://khachhang.bachkim.com.vn/doi-mat-khau.html">
                                <img src="../../../../images/password.png" alt="Đổi mật khẩu">
                                <span class="span-text">Đổi mật khẩu</span>
                            </a>
                        </div>
                        <div class="excel inline">
                            <a class="a-excel a-btn" href="https://khachhang.bachkim.com.vn/dang-xuat.html">
                                <!--                        <input id="link_save" value=" type="hidden">-->
                                <img src="../../../../images/out.png" alt="Đăng xuất">
                                <span class="span-text">Đăng xuất</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="content-staff">
                    <h1><img src="../../../../images/add.png" alt="add">Thông tin tài khoản</h1>
                    <form method="post" action="#" name="add" class="form" enctype="multipart/form-data">
                        <div class="form-controls">
                            <p class="name-input">Tên đầy đủ:</p>
                            <div class="input">
                                <p>admin bạch kim</p>
                            </div>
                        </div>
                        <div class="form-controls">
                            <p class="name-input">Mã số:</p>
                            <div class="input">
                                <p>123456</p>
                            </div>
                        </div>
                        <div class="form-controls">
                            <p class="name-input">Điện thoại:</p>
                            <div class="input">
                                <p>0888708872</p>
                            </div>
                        </div>
                        <div class="form-controls">
                            <p class="name-input">Chức vụ:</p>
                            <div class="input">
                                <p>Lập trình viên</p>
                            </div>
                        </div>
                        <div class="form-controls">
                            <p class="name-input">Phòng ban:</p>
                            <div class="input">
                                <p>Nhân viên</p>
                            </div>
                        </div>
                        <div class="form-controls">
                            <p class="name-input">Số CMT:</p>
                            <div class="input">
                                <p>123456789</p>
                            </div>
                        </div>
                        <div class="form-controls">
                            <p class="name-input">Ngày sinh:</p>
                            <div class="input">
                                <p>16/10/1965</p>
                            </div>
                        </div>
                        <div class="form-controls">
                            <p class="name-input">Ngày sinh:</p>
                            <div class="input">
                                <p>FS</p>
                            </div>
                        </div>
                        <div class="form-controls">
                            <p class="name-input">Email:</p>
                            <div class="input">
                                <p>admin@gmail.com</p>
                            </div>
                        </div>
                    </form>
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