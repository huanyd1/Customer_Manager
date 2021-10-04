<?php
    $id = $_GET['id'];
?>
<script>
    var url = "http://localhost:8080/customer_manager/api/department/delete.php";
    function deleteDepartment(data){
        var options = {
            method: 'DELETE',
            header:{
                'Content-Type' : 'application/json'
            },
            body: JSON.stringify(data),
        };
        fetch(url, options)
        }
        const infoDepartment = {
          id_department: "<?php echo $id?>"
        }
        deleteDepartment(infoDepartment);
        window.location.href = "http://localhost:8080/customer_manager/view/department/department.php"
      
</script>