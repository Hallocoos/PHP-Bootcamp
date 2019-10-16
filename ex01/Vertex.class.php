<?php
	class Vertex {
		public $_x;
		public $_y;
		public $_z;
		public $_w = 1.0;
		public $_color;
		public static $verbose = false;

	public function __construct($vertex) {
			if (isset($vertex['x']) && isset($vertex['y']) && isset($vertex['z'])) {
			$this->$_x = $vertex['x'];
			$this->$_y = $vertex['y'];
			$this->$_z = $vertex['z'];
			if (isset($vertex['w']))
			{
				$this->$_w = $vertex['w'];
			}
			if (isset($vertex['color'])) {
				$this->$_color = $vertex['color'];
			}
			else
			{
				$this->$_color = new color(array('red' => 255, 'green' => 255, 'blue' => 255)); 
			}
		}
		if ($this->$verbose)
		{
			echo (($this->__toString())." constructed.". PHP_EOL);
		}
	}

	public function __destruct() {
		if ($this->$verbose)
		{
			echo (($this->__toString())." destructed.". PHP_EOL);
		}
	}

	public function __get($name) {
		return ($this->$name);
	}

	public function __set($name, $value) {
		$this->$name = $value;
	}

	public function __toString() {
		return (vsprintf("Vertex( x:%4d, y:%4d, z:%4d, w:%4df%s)" (self::verbose) ? " ,".$this->$_color : " ",array($this->$_x, $this->$_x, $this->$_y, $this->$_z, $this->$_w, $this->$_color)));
	}

	public static function doc() {
		echo (file_get_contents("./Vertex.doc.txt"));
	}
}
?>
