<?php

class ScientificCalculator extends Calculator implements iScientificCalculator {

    public function cubeRoot($a)
    {
        return pow($a, 1/3);
    }

    public function factorial($a)
    {
        return pow($a, 1/3);
    }

    public function pressCubeRoot()
    {
        if(count($this->stack) > 1) {
            $this->evaluateStack();
        }
        $this->op = "∛";
    }

    protected function evaluateStack() {
        switch($this->op) {
            case "∛":
                $result = $this->cubeRoot(array_shift($this->stack));
                break;
            default:
                parent::evaluateStack();
                return;
        }
        $this->clearStack();
        $this->stack[] = $result;
    }

    public function factorial($a)
    {
        return gmp_fact($a);
    }

    public function decToHex($a)
    {
        return dechex($a);
    }
}