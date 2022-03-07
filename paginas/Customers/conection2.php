<?php
    class ConexionTres{
    //Definier los atributos de la clase
        private $usuario= "root";
        private $password= "";
        private $servidor="localhost";
        private $base="sales";

        //crear metodo

        //Hay metodods que devuelven valor se usa el return
        //$this para llamar a un elemento de la clase;

        public function Conectartres(){
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

        public function CustomersList(){
            //creamos un array para guardar cada fila de tabla
            //creamos un array para guardar cada fila de tabla
            $arr_filas = null;
            //llamamos  al metodo "conectar"
            $cn = $this->Conectartres();
            //Introudccion o sentencia sql a evaluar
            $sql = "Select * from Customer";
            //Conjunto de registro cuando se ejecutad
            $rs = $cn->prepare($sql);
            //Ejecuta 
            $rs->execute();

            echo "<table>";
            echo "<tr>";
            echo "<th>Numero</th>
                  <th>Codigo</th>
                  <th>Apellido</th>
                  <th>Nombre</th>
                  <th>email</th>
                  <th>Edad</th>
                  </tr>";

            //creamos un contado

            $i = 1;
            while ($arr_filas = $rs->fetch(PDO::FETCH_ASSOC)){
                echo "<tr>".
                     "<td>".$i."</td>".
                     "<td>".$arr_filas ["cod_customer"]."</td>".
                     "<td>".$arr_filas ["last_name"]."</td>".
                     "<td>".$arr_filas ["first_name"]."</td>".
                     "<td>".$arr_filas ["email"]."</td>".
                     "<td>".$arr_filas ["age"]."</td>".
                     "</tr>";
            
                $i++;
            }
            echo "</table>";
            $cn = null;




        } 

        
    }
?>
