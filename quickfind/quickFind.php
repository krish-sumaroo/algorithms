<?php
session_start();


class QuickFind 
{
	public $ds;

	public function __construct()
	{
		$this->ds = $_SESSION['dataS'];
	}

	public function connected($a, $b)
	{
		if($this->ds[$a] == $this->ds[$b])
		{
			return 'connected';
		} else {
			return 'not connected';
		}
	}

	public function union($a, $b)
	{

		$val1 = $this->ds[$a];
		$val2 = $this->ds[$b];

		foreach($this->ds as $key => $elVal)
		{
			if($elVal == $val1)
			{
				$this->ds[$key] = $val2;
			}
		}

		$_SESSION['dataS'] = $this->ds;
	}

}