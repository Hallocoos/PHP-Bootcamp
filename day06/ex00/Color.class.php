<?php
class Color
{
    public $red;
    public $green;
    public $blue;
    static $verbose = false;
    // Contstructor goes below.
    public function __construct($color)
    {
        if (isset($color['red']) && isset($color['green']) && isset($color['blue'])) {
            $this->red = intval($color['red']);
            $this->green = intval($color['green']);
            $this->blue = intval($color['blue']);
        }
        else if (isset($color['rgb'])) {
            // shift right 16 bits and then compare to the key "0xff" to get red.
            $this->red = ($color['rgb']>>16) & 0xff;
            // shift right 8 bits and then compare to the key "0xff" to get green.
            $this->green = ($color['rgb']>>8) & 0xff;
            // compare to the key "0xff" to get blue.
            $this->blue = ($color['rgb']) & 0xff;
        }
        if (Self::$verbose)
            printf("Color( red: %3d, green: %3d, blue: %3d ) constructed.\n", $this->red, $this->green, $this->blue);
    }
    // Auto runs but we tell it to print when it does.
    function __destruct() {
        if (Self::$verbose)
            printf("Color( red: %3d, green: %3d, blue: %3d ) destructed.\n", $this->red, $this->green, $this->blue);
    }
 
    // Order that you do the maths in matters?!?!

    // Adds the "$new_add" to the existing and then creates a new obj with the resultant.
    public function add($new_add) {
        return (new Color(array('red' => $this->red + $new_add->red, 'green' => $this->green + $new_add->green, 'blue' => $this->blue + $new_add->blue)));
    }
    // Subtracts the "$new_sub" to the existing and then creates a new obj with the resultant.
    public function sub($new_sub) {
        return (new Color(array('red' => $this->red - $new_sub->red, 'green' => $this->green - $new_sub->green, 'blue' => $this->blue - $new_sub->blue)));
    }
    // Multiplies the "$new_mult" by the existing and then creates a new obj with the resultant.
    public function mult($new_mult) {
        return (new Color(array('red' => $this->red * $new_mult, 'green' => $this->green * $new_mult, 'blue' => $this->blue * $new_mult)));
    }
    // Converts to a string and prints it.
    function __toString() {
        return (vsprintf("Color( red: %3d, green: %3d, blue: %3d )", array($this->red, $this->green, $this->blue)));
    }
    // prints the documentation.
    public static function doc() {
        echo file_get_contents("Color.doc.txt")."\n";
    }
}