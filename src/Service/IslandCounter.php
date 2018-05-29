<?php

namespace Kata\Service;
use Kata\{Map, Area};

class IslandCounter
{
    public function countIslands(array $data) : int
    {
        $island = 0;

        foreach($data as $key=>$row) {
            for($i=0; $i<count($row); $i++) {
                if ($row[$i] == 1) {
                    if (! $this->isAnotherLandNextToMe($key, $i, $data)) {
                        $island ++;
                    }
                    if ($island == 0 ) { # if land is found and no land around me than I am the island
                        $island ++;
                    }
                }
            }
        }
        return $island;
    }

    private function isAnotherLandNextToMe($key, $i, $data)
    {
        if ( isset($data[($key-1)][$i]) ) { # no land above me
            if ( $data[($key-1)][$i] == 1) {
                return true;
            }
        }
        if (isset($data[$key][$i-1]) ) { # no land before me
            if ( $data[$key][$i-1] == 1) {
                return true;
            }
        }
        if (isset($data[$key][$i+1]) && isset($data[$key-1][$i+1]) ) {
            if ($data[$key][$i+1] == 1 && $data[$key-1][$i+1] == 1) { # if land after me, then must have land above it
                return true;
            } elseif( isset($data[$key][$i+2]) ) {
                if ($data[$key][$i+1] == 1 && $data[$key][$i+2] == 1 ) { # if land after me, then must have land after it
                    return true;
                }
            }
        }

        return false;
    }
}
