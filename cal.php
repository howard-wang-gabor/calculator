
<?php
class calculator{
    private $a;
    private $b;
    function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }
    public function add(){
        $result = $this->a + $this->b;
        echo $result."\n";
        return $result;
    }
    public function multiply(){
        $result = $this->a * $this->b;
        echo $result."\n";
        return $result;
    }
    public function divide(){
        if ($this->b == 0){
            echo "'分母不可為0'"."\n";
            return;
        }
        else{
            $result = $this->a / $this->b;
            echo $result."\n";
            return $result;
        }}
    public function getter1(){
        echo $this->a."\n";
        return $this->a;
    }
    public function getter2(){
        echo $this->b."\n";
        return $this->b;
    }
    public function setter1($n){
        $this->a = $n;
    }
    public function setter2($n){
        $this->b = $n;
    }
}

$A = new calculator(3,4);
$A->add();
$A->multiply();
$A->divide();
$A->getter1();
$A->getter2();
$A->setter1(6);
$A->getter1();
$A->setter2(10);
$A->getter2();
?>
