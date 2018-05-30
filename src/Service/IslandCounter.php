<?php

namespace Kata\Service;
use Kata\{Map, Area};

class IslandCounter
{
    private $data;
    private $registeredLand = [];
    private $neighborhood = [];

    public function countIslands(array $data) : int
    {
        $this->data = $data;
        $island = 0;
        $this->registeredLand = [];

        foreach($data as $key=>$row) {
            for($i=0; $i<count($row); $i++) {
                if ($row[$i] == 1) {
                    if ( ! $this->isNeighborRegistered($key, $i)) {
                        $this->addToRegisteredLand($key, $i);
                    }
                    $this->registerNeighbor($key, $i);
                }
            }
        }
        return count($this->registeredLand);
    }

    private function addToRegisteredLand($key, $index)
    {
        $this->registeredLand[] = [$key, $index];
    }

    private function isNeighborRegistered($key, $index)
    {
        $indexMinusOne = $index-1;
        $indexPlusOne = $index+1;

        $neighbors = [
            $key-1 . ',' . $index,
            $key+1 . ',' . $index,
            $key . ',' . $indexMinusOne,
            $key . ',' . $indexPlusOne
        ];
        foreach($neighbors as $neighbor) {
            if (in_array($neighbor, $this->neighborhood)) {
                return true;
            }
        }

        return false;
    }

    private function registerNeighbor($key, $index)
    {
        $indexMinusOne = $index-1;
        $indexPlusOne = $index+1;
        $neighbors = [
            $key . ',' . $index,
            $key-1 . ',' . $index,
            $key+1 . ',' . $index,
            $key . ',' . $indexMinusOne,
            $key . ',' . $indexPlusOne
        ];
        foreach($neighbors as $neighbor) {
            if ( $this->isNeighborHasLand($neighbor) ) {
                if ( ! in_array($neighbor, $this->neighborhood)) {
                    $this->neighborhood[] = $neighbor;
                }
                $this->registerLeft($key+1, $index-1);
            }
        }
    }

    private function registerLeft($key, $index)
    {
        for($i=$index;$i>=0; $i--) {
            if ( isset($this->data[$key][$i]) ) {
                if (  $this->data[$key][$i] == 0 ) {
                    return;
                } else {
                    $this->neighborhood[] = $key . ',' . $i;
                }
            }
        }
    }

    private function isNeighborHasLand($neighbor)
    {
        $address = explode(',',$neighbor);
        if ( isset($this->data[$address[0]][$address[1]]) ) {
            return $this->data[$address[0]][$address[1]] == 1;
        }

        return false;
    }
}
