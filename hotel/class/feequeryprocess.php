<?php
include_once('dbconnection.php');															// Including the DBconnection

class feequeryprocess extends dbconnection													// Using Inheritance to call DBconnection
{
	
	public $con1;																			// Declaring variables
	public $result1;
	public $sql1;

	public function feequeryprocess()														// Creating Constructor function for feequeryprocess()
	{
		
		$this->con1 = parent::dbconnection();												// Adding the parent Item
		
	}
	
	public function add_fee($fee)															// Creating the function to insert the record in DB
	{
		$sql1 = "insert into gfee(g_name,g_gender,g_datetim,g_fee,g_reason,g_startdate,g_lastdate,g_status)values('".$fee['g_name']."','".$fee['g_gender']."','".$fee['g_datetim']."','".$fee['g_fee']."','".$fee['g_reason']."','".$fee['g_startdate']."','".$fee['g_lastdate']."','".$fee['g_status']."')";
																		
		$result1 = $this->insert($sql1);														// Creating the object to insert()
	}
	
	public function fee_display()																
	{
		$sql1 = "select * from gfee";															
		
		$disp1 = $this->fee_disp($sql1);
		$disp2 = $this->fetch_all($disp1);
		if($disp2)
		{
			return $disp2;
		}
		else
		{
			return false;
		}
	}
	
	public function delete_fee_details($gid)
	{ 
		$sql1 	= "delete from gfee where id=".$gid;
		$result1 = $this->delete_events($sql1);
	}
	
	public function fee_edit($f_id)
	{
		$sql1 = "select * from gfee where id =" .$f_id;
		$disp1 = $this->fee_disp($sql1);
		$res1 = $this->fetch_row($disp1);
		
		if($res1)
		{
			return $res1;
		}
		else
		{
			return false;
		}
	}
	
	public function update_fee($fee)
		{
			$sql1 = "UPDATE gfee set g_name='".$fee['g_name']."',g_gender='".$fee['g_gender']."',g_datetim ='".$fee['g_datetim']."', g_fee = '".$fee[                   'g_fee']."' ,g_reason = '".$fee['g_reason']."',g_startdate = '".$fee['g_startdate']."',g_lastdate  = '".$fee['g_lastdate']."',
			        g_status = '".$fee['g_status']."'  WHERE id=".$fee['id'];
		
			$result1 = $this->update_event_details($sql1);
			
		}
}
