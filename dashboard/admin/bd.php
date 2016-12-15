

<?php
    class BD
    {
        public $conn;
        public $resultado="";
        public function __construct($server_name, $username, $password, $database_name)
        {
            $this->conn = new mysqli($server_name, $username, $password);
            // Check connection
            if ($this->conn->connect_error) {
                $this->resultado="Connection failed: " . $this->conn->connect_error ;
            }
            else
            {
                $this->resultado ='Connected successfully';
                $sql ="use ".$database_name.";";
                if ($this->conn->query($sql) === true)
                {
                    $this->resultado = $this->resultado." - Database selected successfully";
                }
                else
                {
                    $this->resultado = $this->resultado." - Error selecting database: " . $this->conn->error;
                }
            }
        }
        public function resultado()
        {
            return($this->resultado);
        }
        public function enter_resultado($enter_resultado)
        {
            $this->resultado = $enter_resultado;
        }
        
        public function insertar($tabla,$columnas,$valores)
        {
            $i;
            $j;
            $sql="insert into ".$tabla." (";
            for($i=0;$i<count($columnas);++$i)
            {
                $sql=$sql.$columnas[$i];
                if($i<count($columnas)-1)
                {
                    $sql.=",";
                }
            }
            $sql.=") values ";
            for($i=0;$i<count($valores);++$i)
            {
                $sql.="(";
                for($j=0;$j<count($columnas);++$j)
                {
                    $sql.=$valores[$i][$j];
                    if($j<count($columnas)-1)
                    {
                        $sql.=",";
                    }
                }
                $sql.=")";
                if($i<count($valores)-1)
                {
                    $sql.=", ";
                }
            }
            $sql.=";";
            if ($this->conn->query($sql) === TRUE) {
                $this->resultado=TRUE;
               
                } else {
                    $this->resultado= $this->resultado="Error al insertar los datos: " . $sql . "<br>" . $this->conn->error;
                }
        }

        public function eliminar($tabla,$columnas_condicion,$valores_condicion)
        {
            $i;
            $j;
            $sql="delete from ".$tabla." where ";
            for($i=0;$i<count($columnas_condicion);++$i)
            {
                $sql.=$columnas_condicion[$i]."=".$valores_condicion[$i];
                if($i<count($columnas_condicion)-1)
                {
                    $sql.=" and ";
                }
            }

            $sql.=";";
            if ($this->conn->query($sql) === TRUE) {
                $this->resultado="Exito al eliminar los datos: ". $sql;
            } else {
                $this->resultado="Error al eliminar los datos: " . $sql . "<br>" . $this->conn->error;
            }
        }

        public function actualizar($tabla,$columnas,$valores,$columnas_condicion,$valores_condicion)
        {
            /*
            UPDATE MyGuests SET lastname='Doe' WHERE id=2
            */
            $i;
            $j;
            $sql="update ".$tabla." set ";
            for($i=0;$i<count($columnas);++$i)
            {
                $sql.=$columnas[$i]."=".$valores[$i];
                if($i<count($columnas)-1)
                {
                    $sql.=", ";
                }
            }
            $sql.=" where ";
            for($i=0;$i<count($columnas_condicion);++$i)
            {
                $sql.=$columnas_condicion[$i]."=".$valores_condicion[$i];
                if($i<count($columnas_condicion)-1)
                {
                    $sql.=" and ";
                }
            }

            $sql.=";";
            if ($this->conn->query($sql) === TRUE) {
                $this->resultado="Exito al actualizar los datos: ". $sql;
            } else {
                $this->resultado="Error al actualizar los datos: " . $sql . "<br>" . $this->conn->error;
            }
        }

        public function consultar($tabla,$columnas,$columnas_condicion,$valores_condicion)
        {
            $tabla_resultado=array();
            $sql = "select ";
            for($i=0;$i<count($columnas);++$i)
            {
                $tabla_resultado[]=array();
                $tabla_resultado[$i][0]=$columnas[$i];
                $sql.=$columnas[$i];
                if($i<count($columnas)-1)
                {
                    $sql.=", ";
                }
            }
            $sql.=" from ".$tabla;
            if(count($columnas_condicion)>0)
            {
                $sql.=" where ";
                for($i=0;$i<count($columnas_condicion);++$i)
                {
                    $sql.=$columnas_condicion[$i]."=".$valores_condicion[$i];
                    if($i<count($columnas_condicion)-1)
                    {
                        $sql.=" and ";
                    }
                }
            }

            $sql.=";";
            $result;
            if ($result=$this->conn->query($sql))
            {
                $this->resultado="Exito al consultar los datos: ". $sql;
                if ($result->num_rows > 0)
                {
                    // output data of each row
                    for($i=0;$row = $result->fetch_assoc();++$i)
                    {
                        $this->resultado.= " <br/>";

                        for($j=0;$j<count($columnas);++$j)
                        {
                            $this->resultado.=$columnas[$j]."=".$row[$columnas[$j]]."  ";
                            $tabla_resultado[$j][$i+1]=$row[$columnas[$j]];

                        }
                    }
                }
                else
                {
                    $this->resultado.= " - resultado = 0 results";
                }
            }
            else
            {
                $this->resultado="Error al consultar los datos: " . $sql . "<br>" . $this->conn->error;
            }
            return $tabla_resultado;
        }
    }
?>