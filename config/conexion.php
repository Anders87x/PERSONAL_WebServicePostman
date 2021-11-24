<?php
    class Conectar{
        protected $dbh;

        protected function Conexion(){
            try {
                //QA
				//$conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=tuto_andercode_webservice","root","");
                //Produccion Godaddy
                //$conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=apirestphpmysql","andercode1","@ndercode");
                //Produccion Heroku
                $conectar = $this->dbh = new PDO("mysql:host=us-cdbr-east-04.cleardb.com;dbname=heroku_f08d006b9871cdc","b350610a2d9a9c","c8084c58");
				return $conectar;
			} catch (Exception $e) {
				print "¡Error BD!: " . $e->getMessage() . "<br/>";
				die();
			}
        }

        public function set_names(){
			return $this->dbh->query("SET NAMES 'utf8'");
        }
    }
?>