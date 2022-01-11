<?php

namespace Rafael;

trait GetterSetter
{
    public function __set($propertie, $value)
    {
        $method = 'set' . ucfirst($propertie);
        if (method_exists($this, $method)) {
            $this->$method($value);
        } else {
            $this->propertie = $value;
        }
    }

    public function __get($propertie)
    {
        $method = 'get' . ucfirst($propertie);
        if (method_exists($this, $method)) {
            $this->$method();
        }
        return $this->$propertie;
    }
}
