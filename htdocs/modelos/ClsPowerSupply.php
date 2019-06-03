<?php 
class ClsPowerSupply { 

    private $serie;
    private $model; 
    private $seriePlatform; 


    function __construct()
  	{
  		

  	}

    function getAllPowerSupply($conexion){

         $conexion->conectar();
         
         $query = "SELECT * FROM viewpowersupply";
         $table = $conexion->getTable($query);

         $conexion->desconectar();

         return $table;
    }

    function updateSupply($_conexion,$_serie,$_model,$_serialPlatform){

        $_conexion->conectar();

        $query = "UPDATE supply SET serie='$_serie',model='$_model',serialPlatform='$_serialPlatform' WHERE serie='$_serie'";

        $num = $_conexion->EjecutarSentencia($query);

        $_conexion->desconectar();

        return $num;


    }

    function getSupplyBySerie($conexion,$serieSupply){

         $conexion->conectar();
         
         $query = "SELECT * FROM supply WHERE serie = '".$serieSupply."'";
         $table = $conexion->getTable($query);

         $conexion->desconectar();

         return $table;
    }


  	public function insertNewSupply($_conexion,$_serie,$_model,$_seriePlatform){

         $_conexion->conectar();

         if (is_null($_seriePlatform)) {
         	$query = "INSERT INTO supply (serie,model) VALUES('$_serie','$_model','null')";
         }else{
         	$query = "INSERT INTO supply (serie,model,serialPlatform) VALUES('$_serie','$_model','$_seriePlatform')";
         }

         $num = $_conexion->EjecutarSentencia($query);

         $_conexion->desconectar();

         return $num;
  	}


  	public function _setSerie($_serie)
  	{
  		$this->$serie = $_serie;

  		return $this;
  	}

  	public function getSerie()
  	{
  		return $this->$serie;
  	}


  	public function _setModel($_model)
  	{
  		$this->$model = $_model;

  		return $this->$model;
  	}

  	public function _SetSeriePlatform($_SeriePlatform)
  	{
  		$this->$seriePlatform = $_SeriePlatform;

  		return $this->$seriePlatform;
  	}

  	public function getSeriePlatform()
  	{
  		return $this->$seriePlatform;
  	}



} 