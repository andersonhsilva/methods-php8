<?php

use Andersonhsilva\MethodsPhp\Methods;
use PHPUnit\Framework\TestCase;

class MethodsTest extends TestCase
{
    public function testDoubleBaseWithNullValue()
    {
        $this->assertNull(Methods::doubleBase(null));
    }

    public function testDoubleBaseWithValidValue()
    {
        $this->assertEquals(1234.56, Methods::doubleBase('R$ 1.234,56'));
        $this->assertEquals(1.00, Methods::doubleBase('1,000'));
        $this->assertEquals(-1234.56, Methods::doubleBase('R$ -1.234,56'));
    }

    public function testDoubleBaseWithInvalidValue()
    {
        $this->assertEquals(0.0, Methods::doubleBase('ABC'));
    }

    public function testPadLeftWithZeroesDefaultLength()
    {
        $this->assertEquals('000123', Methods::padLeftWithZeroes('123'));
        $this->assertEquals('000000', Methods::padLeftWithZeroes(''));
    }

    public function testPadLeftWithZeroesCustomLength()
    {
        $this->assertEquals('0123', Methods::padLeftWithZeroes('123', 4));
        $this->assertEquals('00000123', Methods::padLeftWithZeroes('123', 8));
    }

    public function testShowDoubleWithNullValue()
    {
        $this->assertNull(Methods::showDouble(null));
    }

    public function testShowDoubleAsMoney()
    {
        $this->assertEquals('R$ 1.234,56', Methods::showDouble(1234.56));
        $this->assertEquals('R$ -1.234,56', Methods::showDouble(-1234.56));
    }

    public function testShowDoubleWithoutMoneySymbol()
    {
        $this->assertEquals('1.234,56', Methods::showDouble(1234.56, false));
        $this->assertEquals('-1.234,56', Methods::showDouble(-1234.56, false));
    }

    public function testShowDoubleAsInt()
    {
        $this->assertEquals(1234, Methods::showDoubleAsInt(1234.5678));
        $this->assertEquals(0, Methods::showDoubleAsInt(0.123));
    }


    public function testShowIntAsDouble()
    {
        $this->assertEquals(12.34, Methods::showIntAsDouble(1234));
        $this->assertEquals(0.12, Methods::showIntAsDouble(12));
    }


    public function testMaskString()
    {
        $this->assertEquals('123-456', Methods::maskString('123456', '###-###'));
        $this->assertNull(Methods::maskString(null, '###-###'));
    }


    public function testMaskDate()
    {
        $this->assertEquals('01/01/2020', Methods::maskDate('2020-01-01', 'd/m/Y'));
        $this->assertNull(Methods::maskDate(null, 'd/m/Y'));
    }


    public function testConvertDateToDbFormat()
    {
        $this->assertEquals('2020-01-01', Methods::convertDateToDbFormat('01/01/2020'));
        $this->assertNull(Methods::convertDateToDbFormat(null));
    }


    public function testAddPeriodToDate()
    {
        $this->assertEquals('2020-02-01', Methods::addPeriodToDate(1, 'month', '2020-01-01'));
        $this->assertEquals('2020-01-01', Methods::addPeriodToDate(0, 'month', '2020-01-01'));
    }


    public function testLastDayOfMonth()
    {
        $this->assertEquals('2020-02-29', Methods::lastDayOfMonth('2020-02'));
        $this->assertEquals('2020-01-31', Methods::lastDayOfMonth('2020-01'));
    }


    public function testRoundUp()
    {
        $this->assertEquals(123.46, Methods::RoundUp(123.456, 2));
        $this->assertEquals(124.00, Methods::RoundUp(123.001, 0));
    }


    public function testRoundDown()
    {
        $this->assertEquals(123.45, Methods::roundDown(123.456, 2));
        $this->assertEquals(123.00, Methods::roundDown(123.999, 0));
    }


    public function testOnlyNumber()
    {
        $this->assertEquals('123456', Methods::onlyNumber('123-456abc'));
        $this->assertNull(Methods::onlyNumber('abc'));
    }


    public function testOnlyLettersAndNumbers()
    {
        $this->assertEquals('abc123', Methods::onlyLettersAndNumbers('abc-123'));
        $this->assertNull(Methods::onlyLettersAndNumbers('---'));
    }


    public function testOnlyFirstName()
    {
        $this->assertEquals('John', Methods::onlyFirstName('John Doe'));
        $this->assertEquals('', Methods::onlyFirstName(''));
    }


    public function testOnlyFirstAndSecondName()
    {
        $this->assertEquals('John Doe', Methods::onlyFirstAndSecondName('John Doe Smith'));
        $this->assertEquals('John', Methods::onlyFirstAndSecondName('John'));
    }


    public function testContains()
    {
        $this->assertTrue(Methods::contains('hello', 'hello world'));
        $this->assertFalse(Methods::contains('bye', 'hello world'));
    }


    public function testCleanStringChars()
    {
        $this->assertEquals('abc 123', Methods::cleanStringChars('abc-123!@#'));
    }


    public function testGetInitialsForAvatar()
    {
        $this->assertEquals('JD', Methods::getInitialsForAvatar('John Doe'));
        $this->assertEquals('JJ', Methods::getInitialsForAvatar('John'));
    }


    public function testValidateEmpty()
    {
        $this->expectException(\Exception::class);
        Methods::validateEmpty('Nome', '');
    }


    public function testValidateCpf()
    {
        $this->expectException(\Exception::class);
        Methods::validateCpf('12345678900');
    }


    public function testValidateCnpj()
    {
        $this->expectException(\Exception::class);
        Methods::validateCnpj('12345678000196');
    }


    public function testValidateEmail()
    {
        $this->expectException(\Exception::class);
        Methods::validateEmail('invalid-email');
    }


    public function testGreeting()
    {
        $this->assertContains(Methods::greeting(), ['bom dia', 'boa tarde', 'boa noite']);
    }
}
