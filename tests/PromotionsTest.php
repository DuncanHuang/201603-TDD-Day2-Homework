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

    public function test_EpisodeOneBuyOne_EpisodeTwoBuyOne()
    {
        // Arrange
        $expected = 190;

        // Act
        $this->calcuator->addBook('EpisodeOne');
        $this->calcuator->addBook('EpisodeTwo');
        $actual = $this->calcuator->getTotal();

        // Assert
        $this->assertEquals($expected, $actual);
    }

    public function test_EpisodeOneTwoThreeBuyOne()
    {
        // Arrange
        $expected = 270;

        // Act
        $this->calcuator->addBook('EpisodeOne');
        $this->calcuator->addBook('EpisodeTwo');
        $this->calcuator->addBook('EpisodeThree');
        $actual = $this->calcuator->getTotal();

        // Assert
        $this->assertEquals($expected, $actual);
    }

    public function test_EpisodeOneTwoThreeFourBuyOne()
    {
        // Arrange
        $expected = 320;

        // Act
        $this->calcuator->addBook('EpisodeOne');
        $this->calcuator->addBook('EpisodeTwo');
        $this->calcuator->addBook('EpisodeThree');
        $this->calcuator->addBook('EpisodeFour');
        $actual = $this->calcuator->getTotal();

        // Assert
        $this->assertEquals($expected, $actual);
    }

    public function test_EpisodeOneTwoThreeFourFiveBuyOne()
    {
        // Arrange
        $expected = 375;

        // Act
        $this->calcuator->addBook('EpisodeOne');
        $this->calcuator->addBook('EpisodeTwo');
        $this->calcuator->addBook('EpisodeThree');
        $this->calcuator->addBook('EpisodeFour');
        $this->calcuator->addBook('EpisodeFive');
        $actual = $this->calcuator->getTotal();

        // Assert
        $this->assertEquals($expected, $actual);
    }
}
