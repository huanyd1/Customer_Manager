<?php
    $id = $_GET['id'];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Phần mềm quản lý khách hàng Plantinum Cloud</title>
    <link rel="icon" href="../../img/platinum-cloud.ico">
    <link rel="stylesheet" href="../../css/index.css">
    <link rel="stylesheet" href="../../css/add.css">
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
            <a href="../../index.php">
                <i class='bx bx-grid-alt'></i>
                <span class="links_name">Dashboard</span>
            </a>
            <span class="tooltip">Dashboard</span>
        </li>
        <li>
            <a href="../staff/staff.php">
                <i class='bx bx-group' ></i>
                <span class="links_name">Staff</span>
            </a>
            <span class="tooltip">Staff</span>
        </li>
        <li>
            <a href="../order/order.php">
                <i class='bx bx-notepad' ></i>
                <span class="links_name">Order</span>
            </a>
            <span class="tooltip">Order</span>
        </li>
        <li>
            <a href="../product/product.php">
                <i class='bx bx-box' ></i>
                <span class="links_name">Product</span>
            </a>
            <span class="tooltip">Product</span>
        </li>
        <li>
            <a href="../customer/customer.php">
                <i class='bx bx-face' ></i>
                <span class="links_name">Customer</span>
            </a>
            <span class="tooltip">Customer</span>
        </li>
        <li>
            <a href="../indebt/indebt.php">
                <i class='bx bx-money' ></i>
                <span class="links_name">Debts</span>
            </a>
            <span class="tooltip">Debts</span>
        </li>
        <li>
            <a href="../account/account.php">
                <i class='bx bxs-user-account'></i>
                <span class="links_name">Account</span>
            </a>
            <span class="tooltip">Account</span>
        </li>
        <li class="profile">
            <a href="../../view/main/log_out.php">
                <div class="profile-details">
                    <img src="../../img/profile.jpg" alt="profileImg">
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
                <h2>SẢN PHẨM</h2>
                <div class="top-btn-staff">

                    <div class="published inline">
                        <a class="a-published a-btn" href="javascript: void(0)" id="save_and_new">
                            <img src="../../img/save_and_news.png" alt="Save and new">
                            <span class="span-text">Save and new</span>
                        </a>
                    </div>
                    <div class="not-published inline">
                        <a class="a-not-published a-btn" id="apply_staff" href="javascript: void(0)">
                            <img src="../../img/apply.png" alt="Apply">
                            <span class="span-text">Apply</span>
                        </a>
                    </div>
                    <div class="excel inline">
                        <a class="a-excel a-btn" href="javascript: void(0)" id="save_staff">
                            <img src="../../img/save.png" alt="Lưu">
                            <span class="span-text">Lưu</span>
                        </a>
                    </div>
                    <div class="detele inline">
                        <a class="a-detele a-btn" href="../product/product.php">
                            <img src="../../img/thoat.png" alt="Thoát">
                            <span class="span-text">Thoát</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="content-staff">
                <h1><img src="../../img/edit.png" alt="add">Sửa thông tin sản phẩm</h1>
                <form class="post_form clearfix" action="" name="post_form_register_pro" id="post_form_register_pro" method="post" enctype="multipart/form-data">
                <div class="form-controls">
                        <p class="name-input">Mã sản phẩm:</p>
                        <div class="input">
                            <input type="text" name="id_product" id="id_product" value="">
                        </div>
                    </div>

                    <div class="form-controls">
                        <p class="name-input">Tên sản phẩm:</p>
                        <div class="input">
                            <input type="text" name="product_name" id="product_name" value="">
                        </div>
                    </div>

                    <div class="form-controls">
                        <p class="name-input">Ảnh sản phẩm:</p>
                        <div class="input">
                            <input type="text" name="product_img" id="product_img" value="">
                        </div>
                    </div>

                    <div class="form-controls">
                        <p class="name-input">Nhóm sản phẩm:</p>
                        <div class="input">
                            <select name="product_group" id="product_group">
                                <option value="">-- Chọn --</option>
                                <option value="Nhóm 1: Sách, video" >Nhóm 1: Sách, video</option>
                                <option value="Nhóm 2: Đồ gia dụng">Nhóm 2: Đồ gia dụng</option>
                                <option value="Nhóm 3: Đồ dùng học tập">Nhóm 3: Đồ dùng học tập</option>
                                <option value="Nhóm 4: Trang sức">Nhóm 4: Trang sức</option>
                                <option value="Nhóm 5: Quần áo">Nhóm 5: Quần áo</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-controls">
                        <p class="name-input">Giá trị sản phẩm:</p>
                        <div class="input">
                            <input type="number" value="1000" step="1000" name="product_value" id="product_value" value="">
                        </div>
                    </div>

                    <div class="form-controls">
                        <p class="name-input">Tổng sản phẩm:</p>
                        <div class="input">
                            <input type="number" value="0" name="product_total" id="product_total" value="">
                        </div>
                    </div>

                    <div class="form-controls">
                        <p class="name-input">Đã bán:</p>
                        <div class="input">
                            <input type="number" value="0" name="product_sold" id="product_sold" value="">
                        </div>
                    </div>

                    <div class="form-controls">
                        <p class="name-input">Còn lại:</p>
                        <div class="input">
                            <input type="number" value="0" name="product_inventory" id="product_inventory" value="">
                        </div>
                    </div>

                    <div class="form-controls">
                        <p class="name-input">Trạng thái:</p>
                        <div class="input">
                            <select name="status" id="status">
                                <option value="">-- Chọn --</option>
                                <option value="1" >Hoạt động</option>
                                <option value="0">Không hoạt động</option>
                            </select>
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
  <script>
      const editProductForm = document.querySelector("#post_form_register_pro");
      //console.log(addStaffForm.status.value);
    //   const arrStaff = [];
        var url = "http://localhost:8080/customer_manager/api/product/update.php";
       function editProduct(data){
        var options = {
            method: 'POST',
            header:{
                'Content-Type' : 'application/json'
            },
            body: JSON.stringify(data),
        };
        fetch(url, options)
        }
      const saveBtn = document.querySelector(".excel.inline");
      console.log(saveBtn);

      saveBtn.addEventListener("click", () => {
        const infoProduct = {
          id_product: editProductForm.id_product.value,
          product_name: editProductForm.product_name.value,
          product_img: editProductForm.product_img.value,
          product_group: editProductForm.product_group.value,
          product_value: editProductForm.product_value.value,
          product_total: editProductForm.product_total.value,
          product_sold: editProductForm.product_sold.value,
          product_inventory: editProductForm.product_inventory.value,
          status: editProductForm.status.value,
      }
        //   arrStaff.push(infoStaff)
          console.log(infoProduct)
          editProduct(infoProduct);
          window.location.href = "http://localhost:8080/customer_manager/view/product/product.php"
      })
  </script>
  <script>
    //   var url = "http://localhost:8080/customer_manager/api/staff/show.php?id=<?php echo $id?>"
    //   console.log(url)
      
    async function loadDataTable(url, table) {
        const response = await fetch(url);
        const data = await response.json();
        const editProductForm = document.querySelector("#post_form_register_pro");
        //console.log(data);
    
        editProductForm.id_product.value = data.id_product;
        editProductForm.product_name.value = data.product_name;
        editProductForm.product_img.value = data.product_img;
        editProductForm.product_group.value = data.product_group; 
        editProductForm.product_value.value = data.product_value; 
        editProductForm.product_total.value = data.product_total; 
        editProductForm.product_sold.value = data.product_sold; 
        editProductForm.product_inventory.value = data.product_inventory; 
        editProductForm.status.value = data.status;   
    }
    loadDataTable("http://localhost:8080/customer_manager/api/product/show.php?id=<?php echo $id?>",document.querySelector(".table") );
  </script>
</body>
</html>