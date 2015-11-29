<?php
require_once("Random.php");

class RandomMock extends Random
{
  public function randomPattern()
  {
    return 1;
  }

  public function randomOperand()
  {
    return 4;
  }

  public function randomOperator()
  {
    return 1;
  }
}

class CaptchaTest extends PHPUnit_Framework_TestCase
{
    //Captcha

    // pattern 1
    // 1 + two = ?

    //pattern 2
    // seven - 4 = ?

    public function setUp()
    {
      $this->captcha = new Captcha();
    }
    public function testEnterPattern1ReturnPattern1()
    {
      $this->captcha->setPattern(1);
      $this->assertEquals("Pattern 1",$this->captcha->getPattern());
    }

    public function testEnterPattern2ReturnPattern2()
    {
      $this->captcha->setPattern(2);
      $this->assertEquals("Pattern 2",$this->captcha->getPattern());
    }

    public function testSetRightOperandPattern1With1ReturnOne()
    {
      $this->captcha->setPattern(1);
      $this->captcha->setRightOperand(1);
      $this->assertEquals("one",$this->captcha->getRightOperand());
    }

    public function testSetRightOperandPattern1With5ReturnFive()
    {
      $this->captcha->setPattern(1);
      $this->captcha->setRightOperand(5);
      $this->assertEquals("five",$this->captcha->getRightOperand());
    }

    public function testSetLeftOperandPattern1With4Return4()
    {
      $this->captcha->setPattern(1);
      $this->captcha->setLeftOperand(4);
      $this->assertEquals(4,$this->captcha->getLeftOperand());
    }

    public function testSetLeftOperandPattern1With6Return6()
    {
      $this->captcha->setPattern(1);
      $this->captcha->setLeftOperand(6);
      $this->assertEquals(6,$this->captcha->getLeftOperand());
    }

    public function testSetRightOperandPattern2With1Return1()
    {
      $this->captcha->setPattern(2);
      $this->captcha->setRightOperand(1);
      $this->assertEquals(1,$this->captcha->getRightOperand());
    }

    public function testSetRightOperandPattern2With5Return5()
    {
      $this->captcha->setPattern(2);
      $this->captcha->setRightOperand(5);
      $this->assertEquals(5,$this->captcha->getRightOperand());
    }

    public function testSetLeftOperandPattern2With4ReturnFour()
    {
      $this->captcha->setPattern(2);
      $this->captcha->setLeftOperand(4);
      $this->assertEquals("four",$this->captcha->getLeftOperand());
    }

    public function testSetLeftOperandPattern1With6ReturnSix()
    {
      $this->captcha->setPattern(2);
      $this->captcha->setLeftOperand(6);
      $this->assertEquals("six",$this->captcha->getLeftOperand());
    }

    public function testGetOperator1ReturnPlusOperator()
    {
      $this->captcha->setOperator(1);
      $this->assertEquals("+",$this->captcha->getOperator());
    }

    public function testGetOperator2ReturnMinusOperator()
    {
      $this->captcha->setOperator(2);
      $this->assertEquals("-",$this->captcha->getOperator());
    }

    public function testGetQuestionPattern1()
    {
      $this->captcha->setPattern(1);
      $this->captcha->setRightOperand(2);
      $this->captcha->setLeftOperand(6);
      $this->captcha->setOperator(1);
      $this->assertEquals("6 + two = ?",$this->captcha->getQuestion());
      //$this->captcha->printCaptcha();
    }

    public function testGetQuestionPattern2()
    {
      $this->captcha->setPattern(2);
      $this->captcha->setRightOperand(2);
      $this->captcha->setLeftOperand(6);
      $this->captcha->setOperator(1);
      $this->assertEquals("six + 2 = ?",$this->captcha->getQuestion());
      //$this->captcha->printCaptcha();
    }

    public function testGenerateCatchaPattern1Operator1()
    {
      // $random_mock = $this->getMockBuilder("Random")->getMock();
      // $random_mock->$this->method('')->willReturn();
      // $random_mock->$this->method('')->willReturn();
      // $random_mock->$this->method('')->willReturn();

      $this->captcha->generate(new RandomMock());
      $this->assertEquals('4 + four = ?', $this->captcha->getQuestion());
      //$this->captcha->printCaptcha();
    }

    // public function testMocRandomPatternShouldReturn1()
    // {
    //   $captcha_mock = $this->getMockBuilder('Captcha')->getMock();
    //   $captcha_mock->method('randomPattern')->willReturn(1);
    //   $this->assertEquals(1,$captcha_mock->randomPattern());
    // }
}
