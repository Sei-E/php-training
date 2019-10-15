<?php
class MyClass {
    protected $data;
    public function __construct(string $data) {
        $this->data = $data;
    }
    public function getData(): string {
        return $this->data;
    }
}
//MyClassを継承
class Bracket extends MyClass {
    //MyClassのメソッドをオーバーライド
    public function getData () : string {
        //$this->dataにブラケットを追加
        $this->data = "[{$this->data}]";
        //スーパークラスのgetDataメソッドを呼び出し。だがエラーが発生する。
        parent::getData();
        // 上記の代わりに下のようにすればエラーは解消。。。
        // return $this->data;
    }
}

$d = new Bracket('こんにちは');
$str = $d->getData();
print $str;
