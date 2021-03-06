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
                <h2>NHÂN VIÊN</h2>
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
                        <a class="a-detele a-btn" href="../customer/customer.php">
                            <img src="../../img/thoat.png" alt="Thoát">
                            <span class="span-text">Thoát</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="content-staff">
                <h1><img src="../../img/edit.png" alt="add">Sửa thông tin khách hàng</h1>
                <form class="post_form clearfix" action="" name="post_form_register_pro" id="post_form_register_pro" method="post" enctype="multipart/form-data">
                <div class="form-controls">
                        <p class="name-input">Mã khách hàng:</p>
                        <div class="input">
                            <input type="text" readonly=true name="id_customer" id="id_customer" value="">
                        </div>
                    </div>

                    <div class="form-controls">
                        <p class="name-input">Tên khách hàng:</p>
                        <div class="input">
                            <input type="text" name="customer_name" id="customer_name" value="">
                        </div>
                    </div>

                    <div class="form-controls">
                        <p class="name-input">Ảnh:</p>
                        <div class="input">
                            <input type="text" name="customer_img" id="customer_img" value="">
                        </div>
                    </div>

                    <div class="form-controls">
                        <p class="name-input">Địa Chỉ:</p>
                        <div class="input">
                            <input type="text" name="customer_address" id="customer_address" value="">
                        </div>
                    </div>

                    <div class="form-controls">
                        <p class="name-input">Tổng giá trị đơn:</p>
                        <div class="input">
                            <input type="text" name="total_order_value" id="total_order_value" value="">
                        </div>
                    </div>

                    <div class="form-controls">
                        <p class="name-input">Số hợp đồng:</p>
                        <div class="input">
                            <input type="text" name="contract" id="contract" value="">
                        </div>
                    </div>

                    <div class="form-controls">
                        <p class="name-input">Số ĐT:</p>
                        <div class="input">
                            <input type="text" name="phone_number" id="phone_number" value="">
                        </div>
                    </div>

                    <div class="form-controls">
                        <p class="name-input">Email:</p>
                        <div class="input">
                            <input type="text" name="customer_email" id="customer_email" value="">
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
      const addCustomerForm = document.querySelector("#post_form_register_pro");
      //console.log(addStaffForm.status.value);
    //   const arrStaff = [];
        var url = "http://localhost:8080/customer_manager/api/customer/update.php";
       function editCustomer(data){
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
      //console.log(saveBtn);

      saveBtn.addEventListener("click", () => {
        const infoCustomer = {
          id_customer: addCustomerForm.id_customer.value,
          customer_name: addCustomerForm.customer_name.value,
          customer_img: addCustomerForm.customer_img.value,
          customer_address: addCustomerForm.customer_address.value,
          total_order_value: addCustomerForm.total_order_value.value,
          contract: addCustomerForm.contract.value,
          phone_number: addCustomerForm.phone_number.value,
          customer_email: addCustomerForm.customer_email.value,
          status: addCustomerForm.status.value,
      }
        //   arrStaff.push(infoStaff)
          //console.log(infoStaff)
          editCustomer(infoCustomer);
          window.location.href = "http://localhost:8080/customer_manager/view/customer/customer.php"
      })
  </script>
  <script> 
    async function loadDataTable(url, table) {
        const response = await fetch(url);
        const data = await response.json();
        const editCustomerForm = document.querySelector("#post_form_register_pro");
        console.log(data);
    
        editCustomerForm.id_customer.value = data.id_customer;
        editCustomerForm.customer_name.value = data.customer_name;
        editCustomerForm.customer_img.value = data.customer_img;
        editCustomerForm.customer_address.value = data.customer_address; 
        editCustomerForm.total_order_value.value = data.total_order_value; 
        editCustomerForm.contract.value = data.contract; 
        editCustomerForm.phone_number.value = data.phone_number; 
        editCustomerForm.customer_email.value = data.customer_email;  
        editCustomerForm.status.value = data.status;  
    }
    loadDataTable("http://localhost:8080/customer_manager/api/customer/show.php?id=<?php echo $id?>",document.querySelector(".table") );
  </script>
</body>
</html>