<?php
/**
 * Created by PhpStorm.
 * User: duncan
 * Date: 2016/3/12
 * Time: 下午8:22
 */

namespace homework;

class promotions
{
    private $carList = [];
    private $total   = 0;

    private $promotionsList = [
        'EpisodeOne'   => 100,
        'EpisodeTwo'   => 100,
        'EpisodeThree' => 100,
        'EpisodeFour'  => 100,
        'EpisodeFive'  => 100
    ];

    private $discount = [
        1 => 1,
        2 => 0.95,
        3 => 0.9,
        4 => 0.8,
        5 => 0.75
    ];

    public function addBook($bookName)
    {
        $this->carList[] = $bookName;
    }

    private function calculator()
    {
        $bookGroup = [];
        foreach ($this->carList as $bookName) {
            if (isset($bookGroup[$bookName]) == false) {
                $bookGroup[$bookName] = 0;
            }
            $bookGroup[$bookName]++;
        }

        $discountGroup = [];

        for ($i = 0; $i < max($bookGroup); $i++) {
            $discountGroup[$i] = [
                'count' => 0,
                'total' => 0
            ];

            foreach ($bookGroup as $name => $count) {
                if ($count > $i) {
                    $discountGroup[$i]['count']++;
                    $discountGroup[$i]['total'] += $this->promotionsList[$name];
                }
            }

            $this->total += $discountGroup[$i]['total'] * $this->discount[$discountGroup[$i]['count']];
        }
    }

    public function getTotal()
    {
        $this->calculator();

        return $this->total;
    }
}