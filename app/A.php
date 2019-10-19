<?php

namespace app;

class A 
{

    protected const TEST = "Class A";
    
    public function getTest()
    {
        //интерпритатор во время просмотра кода заменяет self::TEST на "Class A",
        //поэтому вызов метода из любого класса вернёт значение "Class A"
        var_dump(self::TEST);
    }
    
    public function getTest2()
    {
        //позднее статическое связвание реализуется командой static
        //позволяет обратиться к константе из класса, где был вызван метод,
        //а не из класса, где был написан метод
        var_dump(static::TEST);
    }
    
}
