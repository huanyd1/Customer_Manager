<?php $_POST['id'] = "DVH"; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/index.css">
    <link rel="stylesheet" href="../../css/table.css">
    <script src="../../js/staff.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous"> 
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../../css/staff.css">

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
       <a href="view/main/log_out.php">
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
        <div class="home">
            <div class="staff">
                <div class="top-staff">
                    <h1>SẢN PHẨM</h1>
                    <div class="top-btn-staff">
                        <div class="not-published inline" id="published">
                            <a class="a-not-published a-btn" href="add_product.php">
                                <img src="../../img/add.png" alt="pls">
                                <span class="span-text">Thêm mới</span>
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
                    </div>
                </div>
                <div class="content-staff">
                <form class="form-loc" action="" name="search_form_filter" id="search_form_filter" method="get" onsubmit="javascript: submitnv();return false;">
                    <select class="select-room" name="reference" id="reference">
                        <option value="0">Mã Nhân Viên</option>
                        <option value="46">Tên Nhân Viên</option>
                        <option value="45">Phòng Ban</option>
                    </select>
                    <div class="search">
                        <input type="text" name="keyword_nv" id="keyword_nv" onkeyup="searchStaff()" class=" job-typeahead" placeholder="Tìm kiếm">
                        <a href="javascript:void (0)" id="submitFormKey">
                            <img src="../../img/search.png" alt="search">
                        </a>
                    </div>
                    <a class="a-reset" href="">Reset</a>
                </form>
                <table class="table">
                  <thead></thead>
                  <tbody></tbody>                                
                </table>
            </div>
            </div>
        </div>
    </div>
  </section>
  <div id="myModal" class="modal fade">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header flex-column">
				<div class="icon-box">
					<i class="material-icons">&#xE5CD;</i>
				</div>						
				<h4 class="modal-title w-100">Bạn có chắc chắn?</h4>	
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<p>Bạn có thực sự muốn xóa Sản phẩm này? Không thể hoàn tác điều này.</p>
			</div>
			<div class="modal-footer justify-content-center">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Trở lại</button>
        
				<a  class="btn btn-danger" id="delete_product">Đồng ý</a>
			</div>
		</div>
	</div>
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
    async function loadDataTable(url, table) {
    const tableHead = table.querySelector("thead");
    const tableBody = table.querySelector("tbody");
    const response = await fetch(url);
    const data = await response.json();
    const headers = ["Mã Sản Phẩm", "Tên Sản Phẩm" , "Ảnh", "Nhóm Sản Phẩm", "Giá Trị", "Tổng Có", "Đã Bán", "Còn Lại", "Trạng Thái", "Tùy Chọn"];
    const rows = [];
    let idStaff = ""
    console.log(data);
    tableHead.innerHTML = "<tr></tr>";
    tableBody.innerHTML = "";
    
    
    data.product.map((e) => { 

          rows.push([e.id_product, e.product_name, `<img width='100' height='100' src=../../img/product-img/${e.product_img} />`, e.product_group, e.product_value, e.product_total, e.product_sold, e.product_inventory, e.status, `<a class="edit" href="edit_product.php?id=${e.id_product}" ><i class='bx bxs-edit' ></i></a> <a class="delete trigger-btn" href="#myModal"  data-toggle="modal" click="reply_click(${e.id_staff})"><i class='bx bxs-trash'></i></a>`])

        })
        // console.log(data);
        tableHead.innerHTML = "<tr></tr>";
        tableBody.innerHTML = "";

        headers.map((text) => {
          const headerElement = document.createElement("th");
          headerElement.textContent = text;
          tableHead.querySelector("tr").appendChild(headerElement);
        });

          for (const row of rows) {
            const rowElement = document.createElement("tr")
            for(const cellText of row) {
              const cellElement = document.createElement("td");
              cellElement.innerHTML = cellText;
              rowElement.appendChild(cellElement);
            }
            tableBody.appendChild(rowElement);
          }

          const btn_del = document.querySelectorAll(".delete")

          btn_del.forEach((e) => {
            e.addEventListener("click", (ele) => {
              document.querySelector("#delete_product").href = `delete_product.php?id=${ele.path[3].cells[0].textContent}`;
              console.log(ele.path[3].cells[0].textContent);
            })  
          })

          const list = document.querySelectorAll("tbody tr")
        list.forEach(e => {
          if(e.childNodes[8].textContent == 1 ) {
            e.childNodes[8].innerHTML = `<img src="../../img/published.png"/>`
          } else {
            e.childNodes[8].innerHTML = `<img src="../../img/unpublished.png"/>`
          }
        })

          const edit = document.querySelectorAll(".edit")
          // const delete = document.querySelectorAll(".delete")

            edit.forEach((e) => {
              e.addEventListener("click", (ele) => {
               
               idStaff = ele.path[2].cells[0].textContent
               console.log(idStaff);
              })  
            })
      }
loadDataTable("http://localhost:8080/customer_manager/api/product/read.php",document.querySelector(".table") );
function reply_click(clicked_id)
  {
      alert(clicked_id);
  }
</script>
</body>
</html>
<style>
  th{
    text-align: center!important;
  }
</style>
