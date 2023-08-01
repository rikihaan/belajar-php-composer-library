<?php

namespace TitipInformatika\Belajar;

class Custumer {
    public function __construct(private string $name){

    }

    public function sayHello(string $name):string{
        return "Hello $name my name is {$this->name}";
    }

    public function sayGoodBye(string $name):string{
        return "Good Bye $name See you Next Time myname is {$this->name}";
    }

    
}