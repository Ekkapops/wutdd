<?php

class Captcha
{
    private $pattern;
    private $right_operand;
    private $left_operand;
    private $operator;
    private $question;

    public function setPattern($pattern)
    {
      $this->pattern = $this->pattern($pattern);
    }

    public function getPattern()
    {
      return $this->pattern;
    }

    public function pattern($pattern_number)
    {
      $type = array(
        "1"=>"Pattern 1",
        "2"=>"Pattern 2"
      );
      return $type[$pattern_number];
    }

    public function setRightOperand($number)
    {
      if($this->pattern == "Pattern 1") {$this->right_operand = $this->getTextNumber($number);}
      elseif($this->pattern == "Pattern 2") {$this->right_operand = $number;}
    }

    public function getRightOperand()
    {
      return $this->right_operand;
    }

    public function setLeftOperand($number)
    {
      if($this->pattern == "Pattern 1") {$this->left_operand = $number;}
      elseif($this->pattern == "Pattern 2") {$this->left_operand = $this->getTextNumber($number);}
    }

    public function getLeftOperand()
    {
      return $this->left_operand;
    }

    public function getTextNumber($number)
    {
      $text = array(
        "0"=>"zero",
        "1"=>"one",
        "2"=>"two",
        "3"=>"three",
        "4"=>"four",
        "5"=>"five",
        "6"=>"six",
        "7"=>"seven",
        "8"=>"eight",
        "9"=>"nine",
        "10"=>"ten"
      );
      return $text[$number];
    }

    public function setOperator($op)
    {
      $this->opertor = $this->operator($op);
    }

    public function getOperator()
    {
      return $this->opertor;
    }

    public function operator($number)
    {
      $op = array(
        "1"=>"+",
        "2"=>"-",
        "3"=>"*",
        "4"=>"/"
      );
      return $op[$number];
    }

    public function getQuestion()
    {
      return $question = $this->getLeftOperand()." ".$this->getOperator()." ".$this->getRightOperand()." = ?";;
    }

    public function generate($random)
    {
      $this->setPattern($random->randomPattern());
      $this->setRightOperand($random->randomOperand());
      $this->setLeftOperand($random->randomOperand());
      $this->setOperator($random->randomOperator());
    }

    public function printCaptcha()
    {
      echo "\n".$this->getQuestion();
    }


}
