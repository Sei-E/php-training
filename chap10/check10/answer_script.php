<?php
interface IAnimal {
    function outputVoice(): string;
}

class Cat implements IAnimal {
    public function outputVoice(): string {
        return 'ニャァ';
    }
}

class Dog implements IAnimal {
    public function outputVoice(): string {
        return 'バゥ';
    }
}

$cat = new Cat();
print $cat->outputVoice() . '<br />';
$dog = new Dog();
print $dog->outputVoice() . '<br />';
