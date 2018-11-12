<?php

/*
 *  width
 *  height
 *  line
 *  pointer
 *  num
 *  chars
 *  result
 *
 *  createimg
 *  getbgcolor
 *  drawline
 *  drawponiter
 *  getchar
 *  drawtext
 *  output
 * */

class code
{
    public $width;
    public $height;
    private $line;
    private $pointer;
    private $num;
    public $chars;
    public $result;
    public $img;
    public $fontpath;
    function __construct($w = 100, $h = 50)
    {
        $this->width = $w;
        $this->height = $h;
        $this->num = 4;
        $this->chars = '0987654321qwetyuioplkjhgfdsazxcvbnmQWERTYUIOPLKJHGFDSAMNBVCXZ';
        $this->line = 6;
        $this->pointer = 50;
        $this->fontpath = FONT_PATH;
    }

    function createimg()
    {
        $this->img = imagecreatetruecolor($this->width, $this->height);
        $arr = $this->createbgcolor();
        $color = imagecolorallocate($this->img, $arr[0], $arr[1], $arr[2]);
        imagefill($this->img, 0, 0, $color);
    }

    function drawline()
    {
        for ($i = 0; $i < $this->line; $i++) {
            if ($i % 2) {
                $x1 = mt_rand(0, $this->width / 3);
                $y1 = mt_rand(0, $this->height / 2);
                $x2 = mt_rand($this->width / 3 * 2, $this->width);
                $y2 = mt_rand($this->height / 2, $this->height);
            } else {
                $x1 = mt_rand($this->width / 3 * 2, $this->width);
                $y1 = mt_rand(0, $this->height / 2);
                $x2 = mt_rand(0, $this->width / 3);
                $y2 = mt_rand($this->height / 2, $this->height);
            }
            $arr = $this->createbgcolor();
            $color = imagecolorallocate($this->img, $arr[0], $arr[1], $arr[2]);
            imageline($this->img, $x1, $y1, $x2, $y2, $color);
        }
    }


    function drawponiter()
    {
        for ($i = 0; $i < $this->pointer; $i++) {
            $arr = $this->createlinecolor();
            $color = imagecolorallocate($this->img, $arr[0], $arr[1], $arr[2]);
            $x = mt_rand(0, $this->width);
            $y = mt_rand(0, $this->height);
            imagesetpixel($this->img, $x, $y, $color);
        }
    }

    function drawtext()
    {
        $str = $this->getchar();
        $w = $this->width / $this->num;
        for ($i = 0; $i < $this->num; $i++) {
            $arr = $this->createlinecolor();
            $color = imagecolorallocate($this->img, $arr[0], $arr[1], $arr[2]);

            $x = mt_rand($w*$i+10,$w*($i+1)-15);
            $y = mt_rand($this->height/2-5,$this->height/2+5);
            imagettftext($this->img, mt_rand(15,20), mt_rand(-15,15), $x, $y, $color, $this->fontpath, $str[$i]);
        }

    }

    function getchar()
    {
        $str = '';
        for ($i = 0; $i < $this->num; $i++) {
            $index = mt_rand(0, strlen($this->chars) - 1);
            $str .= substr($this->chars, $index, 1);
        }
        $this->result = strtolower($str);
        return $str;
    }

    function createbgcolor()
    {
        $arr = [];
        for ($i = 0; $i < 3; $i++) {
            $arr[$i] = mt_rand(0, 107);
        }
        return $arr;
    }

    function createlinecolor()
    {
        $arr = [];
        for ($i = 0; $i < 3; $i++) {
            $arr[$i] = mt_rand(108, 255);
        }
        return $arr;
    }

    function output()
    {
        header('Content-type:image/png');
        $this->createimg();
        $this->drawline();
        $this->drawponiter();
        $this->drawtext();
        imagepng($this->img);
    }
}
