
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
    public function get1(){
        echo $this->a."\n";
        return $this->a;
    }
    public function get2(){
        echo $this->b."\n";
        return $this->b;
    }
    }

$A = new calculator(3,0);
$A->add();
$A->multiply();
$A->divide();
$A->get1();
$A->get2();
?>
