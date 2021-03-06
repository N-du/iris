<?php

namespace OzdemirBurak\Iris\Helpers;

class DefinedColor
{
    /**
     * @param     $code
     * @param int $index
     *
     * @return string
     */
    public static function find($code, $index = 0)
    {
        $code = strtolower($code);
        $colors = static::get();
        return isset($colors[$code]) ? $colors[$code][$index] : $code;
    }

    /**
     * @return array
     */
    public static function get()
    {
        return [ #          hex         rgb              hsl           hsv
            'aqua'    => ['00ffff',   '0,255,255',   '180,100,50', '180,100,100'],
            'black'   => ['000000',   '0,0,0',       '0,0,0',      '0,0,0'],
            'blue'    => ['0000ff',   '0,0,255',     '240,100,50', '240,100,100'],
            'fuchsia' => ['ff00ff',   '255,0,255',   '300,100,50', '300,100,100'],
            'gray'    => ['808080',   '128,128,128', '0,0,50',     '0,0,50'],
            'green'   => ['008000',   '0,128,0',     '120,100,25', '120,100,50'],
            'lime'    => ['00ff00',   '0,255,0',     '120,100,50', '120,100,100'],
            'maroon'  => ['800000',   '128,0,0',     '0,100,25',   '0,100,50'],
            'navy'    => ['000080',   '0,0,128',     '240,100,25', '240,100,50'],
            'olive'   => ['808000',   '128,128,0',   '60,100,25',  '60,100,50'],
            'purple'  => ['800080',   '128,0,128',   '300,100,25', '300,100,50'],
            'red'     => ['ff0000',   '255,0,0',     '0,100,50',   '0,100,100'],
            'silver'  => ['c0c0c0',   '192,192,192', '0,0,75',     '0,0,75'],
            'teal'    => ['008080',   '0,128,128',   '180,100,25', '180,100,50'],
            'white'   => ['ffffff',   '255,255,255', '0,0,100',    '0,0,100'],
            'yellow'  => ['ffff00',   '255,255,0',   '60,100,50',  '60,100,100']
        ];
    }
}
