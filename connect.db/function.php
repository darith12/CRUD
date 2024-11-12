<!-- // link to jquery  -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <!-- // link sweet alert -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<?php
    include('connection.php');
    
    function addData(){
        global $connection;

        if(isset($_POST['btnadd'])){
            $name = $_POST['name'];
            $category = $_POST['category'];
            $qty = $_POST['qty'];
            $price = $_POST['price'];
    
            if(!empty($name) && !empty($category) && !empty($qty) && !empty($price)){
                $sql_insert_product = "INSERT INTO tb_product (name , category , qty , price)
                                        VALUES ('$name' , '$category' , '$qty' , '$price')";
    
                $result = $connection ->query($sql_insert_product);
    
                if($result){
                    echo '
                        <script>
                            $(document).ready(function(){
                                swal({
                                    title: "Good job!",
                                    text: "You clicked the button!",
                                    icon: "success",
                                    });
                            })
                        </script>
                    ';
                }
            }
        }
    }
    addData();


    function showData(){
        global $connection;

        $sql_show_product = "SELECT * FROM tb_product WHERE 1";

        //result = rows
        $result = $connection -> query($sql_show_product);

        while($row = mysqli_fetch_assoc($result)){
            echo '
                <tr>
                    <td>'.$row['id'].'</td>
                    <td>'.$row['name'].'</td>
                    <td>'.$row['category'].'</td>
                    <td>'.$row['qty'].'</td>
                    <td>'.$row['price'].'</td>
                    <td>'.$row['create_at'].'</td>

                    <td>
                        <button class="btn btn-warning text-white">Edit</button>
                        <button class="btn btn-danger">Remove</button>
                    </td>
                </tr>
            ';
        }
    }


    // Remove Data
