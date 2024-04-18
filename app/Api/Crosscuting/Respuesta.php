<?php

namespace App\Api\Crosscuting;

use JsonSerializable;


class Respuesta  implements JsonSerializable
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
    public function jsonSerialize()
    {
        return [
            'Code' => $this->Code,
            'CodeDesc' => $this->CodeDesc,
            'IsSuccess' => $this->IsSuccess,
            'Message' => $this->Message,
            'Data' => $this->Data,
        ];
    }
    public function toJson()
    {
        return json_encode($this,JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
    }
}
