<?php
    class Conexion{
    //Definier los atributos de la clase
        private $usuario= "root";
        private $password= "";
        private $servidor="localhost";
        private $base="sales";

        //crear metodo

        //Hay metodods que devuelven valor se usa el return
        //$this para llamar a un elemento de la clase;

        public function Conectar(){
            try {
                $con=new PDO ("mysql:host=$this->servidor;dbname=$this->base;",$this->usuario,$this->password);
                $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

                return $con;

            } catch (Exception $e) {
                echo "Se encontrO un error : " . $e -> getMesagge();
            }
        }
    

        //Metodo -2
        //Metodo para listar las marcas = brand (No devuelve valor)

        public function ProductList(){
            //creamos un array para guardar cada fila de tabla
            //creamos un array para guardar cada fila de tabla
            $arr_filas = null;
            //llamamos  al metodo "conectar"
            $cn = $this->Conectar();
            //Introudccion o sentencia sql a evaluar
            $sql = "Select * from Product";
            //Conjunto de registro cuando se ejecutad
            $rs = $cn->prepare($sql);
            //Ejecuta 
            $rs->execute();

            echo "<table>";
            echo "<tr>";
            echo "<th>Numero</th>
                  <th>Codigo</th>
                  <th>Productos</th>
                  <th>Stock</th>
                  <th>Precio</th>
                  <th>Medida</th>
                  <th>Marca</th>
                  </tr>";

            //creamos un contado

            $i = 1;
            while ($arr_filas = $rs->fetch(PDO::FETCH_ASSOC)){
                echo "<tr>".
                     "<td>".$i."</td>".
                     "<td>".$arr_filas ["cod_product"]."</td>".
                     "<td>".$arr_filas ["product"]."</td>".
                     "<td>".$arr_filas ["stock"]."</td>".
                     "<td>".$arr_filas ["price"]."</td>".
                     "<td>".$arr_filas ["mesure"]."</td>".
                     "<td>".$arr_filas ["cod_brand"]."</td>".
                     "</tr>";
            
                $i++;
            }
            echo "</table>";
            $cn = null;




        } 

        
    }
?>
