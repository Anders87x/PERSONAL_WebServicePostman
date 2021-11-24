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
                $conectar = $this->dbh = new PDO("mysql:host=us-cdbr-east-04.cleardb.com;dbname=heroku_b0bff9f1f7b582e","bc58956df8233c","55762334");
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