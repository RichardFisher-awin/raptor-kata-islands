<?php

namespace Kata\Service;

class IslandCounter
{
    public function countIslands(array $data) : int
    {
        $y = count($data);
        $x = count($data[0]);

        $im = new \Imagick();
        $im->newImage($x, $y, new \ImagickPixel('black'));


        //create the image (set '1' pixels to white)
        $it = $im->getPixelIterator();

        foreach ($it as $yi => $row) {
            foreach ($row as $xi => $pixel) {
                if ($data[$yi][$xi] == 1) {
                    $pixel->setColor('white');
                    $it->syncIterator();
                }
            }
        }

        $flood = function($im, $count = 0) use (&$flood) {
            $it = $im->getPixelIterator();
            foreach ($it as $yi => $row) {
                foreach ($row as $xi => $pixel) {
                    if ($pixel->getColor()['r']) {
                        $im->floodfillPaintImage("black", 0, 'white', $xi, $yi, false);
                        return $flood($im, $count + 1);
                    }
                }
            }
            return $count;
        };

        return $flood($im);
    }

}
