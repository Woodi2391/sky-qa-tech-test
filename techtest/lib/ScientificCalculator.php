<?php

class ScientificCalculator extends Calculator implements iScientificCalculator
{

    public function cubeRoot($a)
    {
        return pow($a, 1 / 3);
    }

    //Example of using loop instead of built in function
    public function factorial($a)
    {
        $result = 1;
        for ($i = 2; $i <= $a; $i++) {
            $result *= $i;
        }
        return $result;
    }

    public function decToHex($a)
    {
        return "0x" . strtoupper(dechex($a));
    }

    public function pressHex()
    {
        if (count($this->stack) > 1) {
            $this->evaluateStack();
        }
        $this->op = "hex";
    }



    public function pressCubeRoot()
    {
        if (count($this->stack) > 1) {
            $this->evaluateStack();
        }
        $this->op = "∛";
    }

    public function pressFactorial()
    {
        if (count($this->stack) > 1) {
            $this->evaluateStack();
        }
        $this->op = "!";
    }

    protected function evaluateStack()
    {
        switch ($this->op) {
            case "∛":
                $result = $this->cubeRoot(array_shift($this->stack));
                break;
            case "!":
                $result = $this->factorial(array_shift($this->stack));
                break;
            case "hex":
                $result = $this->decToHex(array_shift($this->stack));
                break;
            default:
                parent::evaluateStack();
                return;
        }
        $this->clearStack();
        $this->stack[] = $result;
    }

}