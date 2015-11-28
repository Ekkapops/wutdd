<?php
class MoneyTest extends PHPUnit_Framework_TestCase
{
    // ...

    public function testCanBeNegated()
    {
        // Arrange
        $a = new Money(1);

        // Act
        $b = $a->negate();

        // Assert
        $this->assertEquals(-1, $b->getAmount());
    }

    public function testCanBeNegated2()
    {
        // Arrange
        $a = new Money(1);

        // Act
        $b = $a->negate();

        // Assert
        $this->assertEquals(1, $b->getAmount());
    }

    public function testPlus()
    {
        // Arrange
        $a = 1+2;
        // Assert
        $this->assertEquals(4, $a);
    }

    // ...
}
