<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://kit.fontawesome.com/6e1b48e8e8.js" crossorigin="anonymous"></script>
</head>
<body>
    <header class="header">
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f0/Senati_Per%C3%BA_logo.svg/1280px-Senati_Per%C3%BA_logo.svg.png" alt="" class="header__logo">
        <h2 class="header__title">
            Aplicaciones web
        </h2>
        <input type="checkbox" id="btn">
        <label for="btn">  <i class="fa-solid fa-angle-down"></i></label>

        <nav>
            <ul>
                <li><a href="#Brand">Brand</a></li>
                <li id="click" ><a href="#Product">Producto</a></li>
                <li><a href="#Customers">Customer</a></li>
                <li><a href="#Supplier">Supplier</a></li>
                <li><a href="#Employee">Employee</a></li>
                <li><a href="#Store">Store</a></li>
            </ul>
        </nav>
        <div class="dark">
        
        </div>
    </header>
    
        <div class="slider">
        <div id="Brand" class="">
                <?php
                        //llamar al codigo conection2
                        include "paginas/Brand/conection2.php";
                        //instanciar la clase conexion
                        $cnu = new ConexionUno();
                        //llamar al metodo de la clase  => brandlist
                        $cnu -> BrandList();
                ?>
            </div>
            <div id = "Product">
            <?php
                    //llamar al codigo conection2
                    include "conection2.php";
                    //instanciar la clase conexion
                    $cn = new Conexion();
                    //llamar al metodo de la clase  => brandlist
                    $cn -> ProductList();
            ?>
            </div>
           
            <div id="Customers" class="">
                <?php
                        //llamar al codigo conection2
                        include "paginas/Customers/conection2.php";
                        //instanciar la clase conexion
                        $cnt = new Conexiontres();
                        //llamar al metodo de la clase  => brandlist
                        $cnt -> CustomersList();
                ?>
            </div>
            <div id="Supplier" class="">
                <?php
                        //llamar al codigo conection2
                        include "paginas/Supplier/conection2.php";
                        //instanciar la clase conexion
                        $cns = new Conexionseis();
                        //llamar al metodo de la clase  => brandlist
                        $cns -> SupplierList();
                ?>
            </div>
            <div id="Employee" class="">
                <?php
                        //llamar al codigo conection2
                        include "paginas/Employee/conection2.php";
                        //instanciar la clase conexion
                        $cnc = new Conexioncuatro();
                        //llamar al metodo de la clase  => brandlist
                        $cnc -> EmployeeList();
                ?>
            </div>
            <div id="Store" class="">
                <?php
                        //llamar al codigo conection2
                        include "paginas/Store/conection2.php";
                        //instanciar la clase conexion
                        $cncu = new Conexioncinco();
                        //llamar al metodo de la clase  => brandlist
                        $cncu -> StoreList();
                ?>
            </div>
           
        </div>
    
       

    
    <footer class="footer">
        Derechos reservados atte. grupo 1?
    </footer>
</body>
</html>


