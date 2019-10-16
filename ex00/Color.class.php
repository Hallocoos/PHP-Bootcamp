<?php
	class Color {
		public $red;
		public $green;
		public $blue;
		public static $verbose = false;
		
		public function __construct($rgb) {
			if (array_key_exists("rgb", $rgb)) {
				$this->red = intval(($rgb["rgb"] >> 16) & 0xff);
				$this->green = intval(($rgb["rgb"] >> 8) & 0xff);
				$this->blue = intval(($rgb["rgb"]) & 0xff);
			}
			if ((isset($rgb['red'])) && (isset($rgb['green'])) && (isset($rgb['blue']))) {
				$this->red = intval($rgb['red']);
				$this->green = intval($rgb['green']);
				$this->blue= intval($rgb['blue']);
			}
			if (self::$verbose) {
				echo (($this->__toString())." contructed.".PHP_EOL);
			}
		} 
		public function __destruct() {
			if (self::verbose)
			{
				echo (($this->__toString())." destructed.".PHP_EOL);
			}
		}

		public function add($new_add) {
			return (
				new Color (
					array (
						'red' => $this->red +  $new_add->red,
						'green' => $this->green + $new_add->green,
						'blue' => $this->blue +  $new_add->blue)));
		}

		public function sub($new_sub) {
			return (
				new Color (
					array (
						'red' => $this->red - $new_sub->red,
						'green' => $this->green - $new_sub->green,
						'blue' => $this->blue - $new_sub->blue)));
		}
		
		public function mult($new_mult) {
			return (
				new Color (
					array (
						'red' => $this->red * $new_mult,
						'green' => $this->green * $new_mult,
						'blue' => $this->blue * $new_mult)));
		}

		function __toString() {
			return (vsprintf("Color( red:%4d, green:%4d, blue:%4d )", array($this->red, $this->green, $this->blue)));
		}

		public static function doc(){
			echo (file_get_contents("./Color.doc.txt"));
		}
	}
?>
