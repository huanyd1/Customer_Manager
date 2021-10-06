<?php
    $id = $_GET['id'];
?>
<script>
    var url = "http://localhost:8080/customer_manager/api/indebt/delete.php";
    function deleteIndebt(data){
        var options = {
            method: 'DELETE',
            header:{
                'Content-Type' : 'application/json'
            },
            body: JSON.stringify(data),
        };
        fetch(url, options)
        }
        const infoIndebt = {
          id_debt: "<?php echo $id?>"
        }
        //console.log(infoStaff)
        deleteIndebt(infoIndebt);
        window.location.href = "http://localhost:8080/customer_manager/view/indebt/indebt.php"
      
</script>