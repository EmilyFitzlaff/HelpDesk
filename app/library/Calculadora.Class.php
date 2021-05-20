<?php
    class Calculadora {
        public function solver(string $expression = '')
        {
            if (in_array($expression[0], ['/', '*', '-', '+'])) {
                $expression = '0' . $expression;
            }
            
            if (in_array($expression[strlen($expression) - 1], ['/', '*', '-', '+'])) {
                $expression .= '0';
            }
            
            $vVal = 0;
            eval('$vVal = ' . $expression . ';');

            return $vVal;
        }
        
        public function calc($num1 = 1, $operation, $num2 = 1) {
            switch ($operation) {
                case '-':
                    return ($num1 - $num2);
                    break;
                case '+':
                    ($num1 + $num2);
                    break;

                case '*':
                    ($num1 * $num2);
                    break;
                case '/':
                    ($num1 / $num2);
                    break; 
                default:
                    return 0;
                    break;
            }
        }
    }
?>