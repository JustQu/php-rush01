<?php
require_once("Obstacle.class.php");
class GameField
{
	private $_gameField = array();
	private $_sizeX = 150;
	private $_sizeY = 100;

	public function __construct()
	{
		for ($i = 0; $i < $this->_sizeX; $i++){
			for ($j = 0; $j < $this->_sizeY; $j++)
				$this->_gameField[$i][$j] = ' ';
		}
		for ($i = 0; $i < $this->_sizeX; $i++){
			for ($j = 0; $j < $this->_sizeY; $j++){
				if (($i < 5 && $j < 35) ||
				($j > $this->_sizeY - 5 && $i > $this->_sizeX - 5)){
					continue;
				}
				if ($this->_gameField[$i][$j] === ' '){
					if (rand(0, 1000) < 3){
						$this->_gameField[$i][$j] = new Obstacle($i, $j);
						$width = $this->_gameField[$i][$j]->getSizeX();
						$height = $this->_gameField[$i][$j]->getSizeY();
						for ($height = $this->_gameField[$i][$j]->getSizeY();$height > 0;--$height){
							for ($width = $this->_gameField[$i][$j]->getSizeX(); $width > 0; --$width){
								$a = $i + $width - 1;
								$b = $j + $height - 1;
								$this->_gameField[$a][$b] = &$this->_gameField[$i][$j];
							}
						}
					}
				}
			}
		}
	}

	public function get_field()
	{
		$array;
		for ($i = 0; $i < $this->_sizeY; $i++){
			for ($j = 0; $j < $this->_sizeX; $j++){
				if ($this->_gameField[$j][$i] instanceof Obstacle){
					if ($this->_gameField[$j][$i]->getPosX() == $j &&
						$this->_gameField[$j][$i]->getPosY() == $i){
							$obj = array();
							$obj['posX'] = $this->_gameField[$j][$i]->getPosX();
							$obj['posY'] = $this->_gameField[$j][$i]->getPosY();
							$obj['sizeX'] = $this->_gameField[$j][$i]->getSizeX();
							$obj['sizeY'] = $this->_gameField[$j][$i]->getSizeY();
							$obj['type'] = $this->_gameField[$j][$i]->getType();
							$array[] = $obj;
							//$array[$i][$j] = clone $this->_gameField[$j][$i];
							continue;
					}
					echo $this->_gameField[$j][$i]->getType();
				} else {
					echo '.';
				}
			}
			echo "\n";
		}
		$array = json_encode($array);
		print($array);
	}
}

?>