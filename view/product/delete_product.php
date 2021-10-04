<?php
    $id = $_GET['id'];
?>
<script>
    var url = "http://localhost:8080/customer_manager/api/product/delete.php";
    function deleteProduct(data){
        var options = {
            method: 'DELETE',
            header:{
                'Content-Type' : 'application/json'
            },
            body: JSON.stringify(data),
        };
        fetch(url, options)
        }
        const infoProduct = {
          id_product: "<?php echo $id?>"
        }
        //console.log(infoStaff)
        deleteProduct(infoProduct);
        window.location.href = "http://localhost:8080/customer_manager/view/product/product.php"
      
</script>