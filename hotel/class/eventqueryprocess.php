<?php
include_once('class/dbconnection.php');

class eventqueryprocess extends dbconnection
{
	public $con1;
	public $sql1;
	public $result1 = '';
	
	public function eventqueryprocess()
	{
		$this->con1 = parent::dbconnection();
	}
	
	public function add_event($arr)
	{
		
		$sql1 = "INSERT INTO hevent(event_name,event_dat,event_mon,event_yr,event_organiser,event_hr,event_min,event_daytim,event_venue,event_description) VALUES('".$arr['eventname']."','".$arr['date']."','".$arr['month']."','".$arr['year']."','".$arr['eventorganiser']."','".$arr['hour']."','".$arr['min']."','".$arr['tim']."','".$arr['eventvenue']."','".$arr['eventdescription']."')";
		
		$result1 = $this->insert($sql1);		
	}
	
	public function select_event()
	{
		$sql1 = "SELECT * FROM hevent";
		$disp1 = $this->display_event($sql1);
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
	
	public function delete_event_details($sid)
	{
		$sql1 = "DELETE FROM hevent WHERE id=".$sid;
		$result1 = $this->delete_events($sql1);
	}
	
	public function select_update_event($u_id)
	{
		$sql1 = "SELECT * FROM hevent WHERE id=".$u_id;
		$result1 = $this->eve_disp($sql1);
		$res1 = $this->fetch_row($result1);
		if($res1)
		{
			return $res1;
		}
		else
		{
			return false;
		}
	}
	
	public function update_event($arr)
	{
		$sql1 = "UPDATE hevent SET event_name = '".$arr['eventname']."', event_dat = '".$arr['date']."', event_mon = '".$arr['month']."', event_yr = '".$arr['year']."', event_organiser = '".$arr['eventorganiser']."', event_hr = '".$arr['hour']."', event_min = '".$arr['min']."', event_daytim = '".$arr['tim']."', event_venue = '".$arr['eventvenue']."', event_description = '".$arr['eventdescription']."' WHERE id=".$arr['id'];
		
		$result1 = $this->update_event_details($sql1);
	}
}
?>