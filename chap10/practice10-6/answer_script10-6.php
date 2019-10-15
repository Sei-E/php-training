<?php
class MyClass {
    public function __get($name) {
        print "'{$name}'プロパティは存在しません。";
    }
}

$a = new MyClass();
print $a->hoge;
