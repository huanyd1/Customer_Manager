<?php
    $id = $_GET['id'];
    echo $id;
?>
<script>
    var url = "http://localhost:8080/customer_manager/api/staff/delete.php";
    function deleteStaff(data){
        var options = {
            method: 'DELETE',
            header:{
                'Content-Type' : 'application/json'
            },
            body: JSON.stringify(data),
        };
        fetch(url, options)
        }
        const infoStaff = {
          id_staff: "<?php echo $id?>"
        }
        console.log(infoStaff)
        deleteStaff(infoStaff);
        //window.location.href = "http://localhost:8080/customer_manager/view/staff/staff.php"
      
</script>