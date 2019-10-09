<?php

class EnlacesModels{

    public static function enlacesPaginasModel($enlaces){
        if ($enlaces == "inicio" ||
            $enlaces == "usuarios"||
            $enlaces == "misGustos"||
            $enlaces == "pedidos"||
            $enlaces == "productos"||
            $enlaces == "stock"||
            $enlaces == "ventas"){

                $module = "views/modules/".$enlaces.".php";
            }else if ($enlaces == "index"){
                $module = "views/modules/ingreso.php";
            }else{
                $module = "views/modules/ingreso.php";
            }
        return $module;
    }

}