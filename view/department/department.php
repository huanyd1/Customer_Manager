<?php 
    session_start();
    if(trim($_SESSION['sess_user_id']) == '') {
    header('location:view/main/login.php');
    }
    require_once '../../config/login_db.php';
    try {  
        $sql = 'SELECT * FROM department ORDER BY id_department ASC';
    
        $q = $db->query($sql);
        $q->setFetchMode(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        die("Could not connect to the database :" . $e->getMessage());
    }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/index.css">
    <link rel="stylesheet" href="../../css/table.css">
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
        <a href="../../index.php">
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
        <div class="home">
            <div class="staff">
                <div class="top-staff">
                    <h1>Phòng Ban</h1>
                    <div class="top-btn-staff">
                        <div class="not-published inline" id="published">
                            <a class="a-not-published a-btn" href="javascript: void(0)">
                                <img src="../../img/add.png" alt="pls">
                                <span class="span-text">Thêm mới</span>
                            </a>
                        </div>
                        <div class="not-published inline" id="published">
                            <a class="a-not-published a-btn" href="javascript: void(0)">
                                <img src="../../img/edit.png" alt="pls">
                                <span class="span-text">Phòng ban</span>
                            </a>
                        </div>
                        <div class="not-published inline" id="published">
                            <a class="a-not-published a-btn" href="javascript: void(0)">
                                <img src="../../img/pls.png" alt="pls">
                                <span class="span-text">Kích hoạt</span>
                            </a>
                        </div>
                        <div class="not-published inline">
                            <a class="a-not-published a-btn" href="javascript: void(0)" id="not_published">
                                <img src="../../img/notpls.png" alt="notpls">
                                <span class="span-text">Ngừng kích hoạt</span>
                            </a>
                        </div>
                        <div class="not-published inline">
                            <a class="a-not-published a-btn" href="javascript:void(0)">
                                <img src="../../img/excel.png" alt="excel">
                                <span class="span-text">Excel</span>
                            </a>
                            <form class="form-horizontal" name="show_list_user">
                                <input type="hidden" id="link_export" value="https://khachhang.bachkim.com.vn/index.php?module=debt&amp;view=home&amp;task=export_video&amp;raw=1">
                            </form>
                        </div>
                        <div class="not-published inline">
                            <a class="a-not-published a-btn" id="detele" href="javascript:" void(0)"="">
                            <img src="../../img/detele.png" alt="detele">
                            <span class="span-text">Xóa</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="content-staff">
                <form class="form-loc" action="" name="search_form_filter" id="search_form_filter" method="get" onsubmit="javascript: submitnv();return false;">
                    <select class="select-room" name="reference" id="reference">
                        <option value="0">Hợp đồng tham chiếu</option>
                        <option value="46">Bạch Kim nợ</option>
                        <option value="45">Khách nợ Bạch Kim</option>
                    </select>
                    <div class="search">
                        <input type="text" name="keyword_nv" id="keyword_nv" class=" job-typeahead" placeholder="Tìm kiếm">
                        <a href="javascript:void (0)" id="submitFormKey">
                            <img src="../../img/search.png" alt="search">
                        </a>
                    </div>
                    <a class="a-reset" href="">Reset</a>
                </form>
                <div class="list-staff">
                    <form class="post_form clearfix" action="" name="post_form_register_pro" id="post_form_register_pro" method="post" enctype="multipart/form-data">
                        <div class="note-dau">
                            <div class="stt title-staff">
                            </div>
                            <div class="input-check title-staff">
                                <input type="checkbox" name="all_checkbox" id="all_checkbox">
                            </div>
                            <div class="name-nv title-staff">
                                <p>Mã phòng ban</p>
                            </div>
                            <div class="code title-staff">
                                <p>Tên phòng ban</p>                          
                            <div class="password title-staff">
                                <p>Trạng thái</p>
                            </div>

                           
                        </div>
                        
                        <tbody>
                            <?php while ($row = $q->fetch()): ?>
                                <div class="list ">
                            <div class="stt-list title-staff-list">
                            </div>
                            <div class="input-check-list title-staff-list">
                                <input  class="checkbox_all" type="checkbox" value="<?php echo $item->id; ?>"  name="id_pub[]" id="cb<?php echo $i; ?>">
                            </div>
                           
                            <div class="name-nv-list title-staff-list">
                                <p><a href=""><?php echo htmlspecialchars($row['id_staff']); ?></a></p>
                            </div>
                            <div class="code-list title-staff-list">
                                <p><?php echo htmlspecialchars($row['staff_name']); ?></p>
                            </div>
                            <div class="phone-list title-staff-list">
                                <p><?php echo htmlspecialchars($row['phone_number']); ?></p>
                            </div>
                            <div class="password-list title-staff-list">
                                <?php if($row['status']==1){ ?>
                                    <a href="">
                                        <img src="../../img/published.png" alt="published">
                                    </a>
                                <?php }else{ ?>

                                    <a href="">
                                        <img src="../../img/unpublished.png" alt="unpublished">
                                    </a>
                                <?php } ?>
                            </div>
                            <div class="phongban-list title-staff-list">
                                <p><?php echo htmlspecialchars($row['id_department']); ?></p>
                            </div>
                            <div class="cmt-list title-staff-list">
                                <p><?php echo htmlspecialchars($row['card_number']); ?></p>
                            </div>
                            <div class="node-list title-staff-list">
                                <p><?php echo htmlspecialchars($row['staff_address']); ?></p>
                            </div>
                            <div class="birtday-list title-staff-list">
                                <p><?php echo htmlspecialchars($row['birth_day']); ?></p>
                            </div>
                           

                        </div>
                            <?php endwhile; ?>
                        </tbody>
                    </form>
                </div>
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
