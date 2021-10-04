<?php
    $id = $_GET['id'];
?>
<script>
    var url = "http://localhost:8080/customer_manager/api/customer/delete.php";
    function deleteCustomer(data){
        var options = {
            method: 'DELETE',
            header:{
                'Content-Type' : 'application/json'
            },
            body: JSON.stringify(data),
        };
        fetch(url, options)
        }
        const infoCustomer = {
          id_customer: "<?php echo $id?>"
        }
        deleteCustomer(infoCustomer);
        window.location.href = "http://localhost:8080/customer_manager/view/customer/customer.php"
      
</script>