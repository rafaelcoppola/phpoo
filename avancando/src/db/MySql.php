<?php

namespace Rafael\db;

class MySql extends Db
{
    public function conect(): string
    {
        return ' connected to MySql';
    }
}
