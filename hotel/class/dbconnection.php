<?php
class dbconnection 
{
	public $host;
	public $username;
	public $password;
	public $dbname;
	public $con;
	public $sql;
	public $result;
	
	public function dbconnection()
	{
		$this->host		=	"localhost";
		$this->username	=	"root";
		$this->password	=	"";
		$this->dbname	=	"test";
		$this->sql		=	"";
		$this->result	=	"";
		$this->con		=	"";
		$this->open();
		return(true);
	}
	
	public function open()
	{
		$this->con = new mysqli($this->host,$this->username,$this->password,$this->dbname);
		if($this->con)
		{
			return true;
			//echo 'DBconnection Successfull';
		}
		else
		{
			echo 'Failed to connect DB';
		}
	}
	
	public function insert($sql)
		{
			$this->sql = $sql;
			$result = mysqli_query($this->con,$this->sql);
			if($result)
			{
				echo 'Successfully Saved'.'<br>';
				echo 'Goto<a href="admin_event_view.php"><button>Events</button></a>'.'&nbsp;&nbsp;&nbsp;&nbsp;';
				echo 'Goto<a href="admin_fee_view.php"><button>fee</button></a>';
			}
			else
			{
				echo 'Failed to Insert';
			}
		}
		
	public function display_event($sql)
	{
		$this->sql = $sql;
		//print_r($sql);exit;
		if($this->sql)
		{
			$execute = mysqli_query($this->con,$this->sql);
			//print_r($execute);exit;
			return($execute);
		}
		else
		{
			echo'Failed to Display';
		}
	}
	
	public function fetch_all($disp1)
	{
		if($disp1)
		{
			$num_rows = mysqli_num_rows($disp1);
			for($i=0;$i< $num_rows;$i++)
			{
				$array_result[$i] = mysqli_fetch_array($disp1);
			}
		}
		//print_r($array_result);exit;
		return $array_result;
	}
	
	public function delete_events($sql)
	{
		$this->sql = $sql;
		$result = mysqli_query($this->con,$this->sql);
		if($result)
		{
			echo'Successfully Deleted'.'<br>';
			echo 'Goto<a href="admin_event_view.php"><button>Events</button></a>'.'&nbsp;&nbsp;&nbsp;&nbsp;';
			echo 'Goto<a href="admin_fee_view.php"><button>fee</button></a>';
		}
		else
		{
			echo'Failed To Delete';;
		}
	}
	
	public function eve_disp($sql)
	{
		$this->sql = $sql;
		if($this->sql)
		{
			$res = mysqli_query($this->con,$this->sql);
			return($res);
		}
		else
		{
			echo'Failed in DBCon File';
		}
	}
	
	public function fetch_row($result)
	{
		$arr_row='';		
		if($result)
		{
			$arr_row = mysqli_fetch_array($result);
		}		
			return ($arr_row) ? $arr_row : false;		
	}
	
	public function update_event_details($sql)
	{
		$this->sql = $sql;
		$result = mysqli_query($this->con,$this->sql);
		if($result)
		{
			echo'Successfully Updated'.'</br>';
			echo 'Goto<a href="admin_event_view.php"><button>Events</button></a>'.'&nbsp;&nbsp;&nbsp;&nbsp;';
			echo 'Goto<a href="admin_fee_view.php"><button>fee</button></a>';
		}
		else
		{
			echo'Failed to Update';
		}
	}
	
	public function fee_disp($sql)																// Creating the Display Function to display fee
	{
		$this->sql = $sql;																		// To store the query
		
		if($this->sql)																			// To check the condition
		{
			$res = mysqli_query($this->con,$this->sql);											// Execute and store the query in $res
			return($res);																		// Returning $res
		}
		else
		{
			echo 'failed in dbconfile'."\n";
		}
	}

		
}
?>