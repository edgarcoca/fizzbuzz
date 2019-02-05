<?php

class FizzbuzzTest extends \PHPUnit\Framework\TestCase
{
    protected $sut;

    protected function setUp(): void
    {
        $this->sut = new Fizzbuzz();
    }

    /**
     * @test 
     */
    public function oneMustReturnOne()
    {
        $this->assertEquals(1, $this->sut->convert(1));
    }

    /**
     * @test
     */
    public function twoMustReturnTwo()
    {
        $this->assertEquals(2, $this->sut->convert(2));
    }

    /**
     * @test
     */
    public function multipleOfThreeMustReturnFizz()
    {
        $this->assertEquals('Fizz', $this->sut->convert(6));
    }

    /**
     * @test
     */
    public function multipleOfFiveMustReturnBuzz()
    {
        $this->assertEquals('Buzz', $this->sut->convert(10));
    }

    /**
     * @test
     */
    public function multipleOfThreeAndFiveMustReturnFizzBuzz()
    {
        $this->assertEquals('FizzBuzz', $this->sut->convert(15));
        $this->assertEquals('FizzBuzz', $this->sut->convert(30));
        $this->assertEquals('FizzBuzz', $this->sut->convert(45));
    }

    /**
     * @test
     */
    public function numberUnderOneMustFail()
    {
        $this->expectException(InvalidArgumentException::Class);
        $this->sut->convert(0);
    }

    /**
     * @test
     */
    public function numberOverOneHundredMustFail()
    {
        $this->expectException(InvalidArgumentException::Class);
        $this->sut->convert(101);
    }

    /**
     * @test
     */
    public function paramTypeNotEqualsIntegerMustFail()
    {
        $this->expectException(TypeError::Class);
        $this->sut->convert('E');
    }

}
