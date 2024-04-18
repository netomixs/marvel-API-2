<?php

namespace App\Api\Crosscuting;

 

class Respuesta
{
    public $Code;
    public $CodeDesc;
    public $IsSuccess;
    public $Message;
    public $Data;

    public function respuesta($code, $IsSuccess, $Message, $Data)
    {

        $this->Code = $code;
        $this->CodeDesc = HttpCode::getMessageForCode($code);
        $this->IsSuccess = $IsSuccess;
        $this->Message = $Message;
        $this->Data = $Data;
        return $this;
    }
    
    public function toJson()
    {
        return json_encode($this);
    }
}
