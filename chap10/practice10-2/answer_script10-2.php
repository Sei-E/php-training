<?php
class MyClass {
    public static function square(float $width, float $height): float {
        return $width * $height / 2;
    }
}

print '三角形の面積：'.MyClass::square(5, 2);
