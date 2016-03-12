<?php
/**
 * Created by PhpStorm.
 * User: duncan
 * Date: 2016/3/12
 * Time: 下午8:01
 */

class PromotionsTest extends \PHPUnit_Framework_TestCase
{
    private $calcuator;

    public function __construct()
    {
        $this->calcuator = new \homework\promotions;
    }

    public function test_EpisodeOneBuyOne()
    {
        // Arrange
        $expected = 100;

        // Act
        $buyBook = 'EpisodeOne';

        $this->calcuator->addBook($buyBook);
        $actual = $this->calcuator->getTotal();

        // Assert
        $this->assertEquals($expected, $actual);
    }
}
