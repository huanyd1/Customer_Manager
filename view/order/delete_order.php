<?php
    $id = $_GET['id'];
?>
<script>
    var url = "http://localhost:8080/customer_manager/api/order/delete.php";
    function deleteOrder(data){
        var options = {
            method: 'DELETE',
            header:{
                'Content-Type' : 'application/json'
            },
            body: JSON.stringify(data),
        };
        fetch(url, options)
        }
        const infoOrder = {
          id_order: "<?php echo $id?>"
        }
        //console.log(infoStaff)
        deleteOrder(infoOrder);
        window.location.href = "http://localhost:8080/customer_manager/view/order/order.php"
      
</script>