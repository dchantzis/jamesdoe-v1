<?php

function convertTimeStamp($dateStr,$dateType)
{
	if($dateType=='full')
	{
		$monthNames = array( '1'=>'January','01'=>'January','2'=>'February','02'=>'February',
			'3'=>'March','03'=>'March','4'=>'April','04'=>'April','5'=>'May','05'=>'May',
			'6'=>'June','06'=>'June','7'=>'July','07'=>'July','8'=>'August','08'=>'August',
			'9'=>'September','09'=>'September','10'=>'October','11'=>'November','12'=>'December');
	}elseif($dateType=='short')
	{
		$monthNames = array( '1'=>'Jan','01'=>'Jan','2'=>'Feb','02'=>'Feb',
			'3'=>'Mar','03'=>'Mar','4'=>'Apr','04'=>'Apr','5'=>'May','05'=>'May',
			'6'=>'June','06'=>'June','7'=>'July','07'=>'July','8'=>'Aug','08'=>'Aug',
			'9'=>'Sept','09'=>'Sept','10'=>'Oct','11'=>'Nov','12'=>'Dec');
	}elseif($dateType=='reallyshort')
	{
		$monthNames = array( '1'=>'01','01'=>'01','2'=>'02','02'=>'02',
			'3'=>'03','03'=>'03','4'=>'04','04'=>'04','5'=>'05','05'=>'05',
			'6'=>'06','06'=>'06','7'=>'07','07'=>'07','8'=>'08','08'=>'08',
			'9'=>'09','09'=>'09','10'=>'10','11'=>'11','12'=>'12');		
	}elseif($dateType=='reallyshortwithtime')
	{
		$monthNames = array( '1'=>'01','01'=>'01','2'=>'02','02'=>'02',
			'3'=>'03','03'=>'03','4'=>'04','04'=>'04','5'=>'05','05'=>'05',
			'6'=>'06','06'=>'06','7'=>'07','07'=>'07','8'=>'08','08'=>'08',
			'9'=>'09','09'=>'09','10'=>'10','11'=>'11','12'=>'12');		
	}elseif($dateType=='shortdaynmonth')
	{
		$monthNames = array( '1'=>'Jan','01'=>'Jan','2'=>'Feb','02'=>'Feb',
			'3'=>'Mar','03'=>'Mar','4'=>'Apr','04'=>'Apr','5'=>'May','05'=>'May',
			'6'=>'June','06'=>'June','7'=>'July','07'=>'July','8'=>'Aug','08'=>'Aug',
			'9'=>'Sept','09'=>'Sept','10'=>'Oct','11'=>'Nov','12'=>'Dec');
	}elseif($dateType=='reallylong')
	{
		$monthNames = array( '1'=>'January','01'=>'January','2'=>'February','02'=>'February',
			'3'=>'March','03'=>'March','4'=>'April','04'=>'April','5'=>'May','05'=>'May',
			'6'=>'June','06'=>'June','7'=>'July','07'=>'July','8'=>'August','08'=>'August',
			'9'=>'September','09'=>'September','10'=>'October','11'=>'November','12'=>'December');
	}elseif($dateType=='reallylongwithouttime')
	{
		$monthNames = array( '1'=>'January','01'=>'January','2'=>'February','02'=>'February',
			'3'=>'March','03'=>'March','4'=>'April','04'=>'April','5'=>'May','05'=>'May',
			'6'=>'June','06'=>'June','7'=>'July','07'=>'July','8'=>'August','08'=>'August',
			'9'=>'September','09'=>'September','10'=>'October','11'=>'November','12'=>'December');
	}
	
	$dateStr = str_replace(' ','-',$dateStr);
	$dateStr = str_replace(':','-',$dateStr);
	$explodeDateArr = explode('-',$dateStr);
	
	reset($monthNames);
	while (list($key, $val) = each ($monthNames)) { if($key==$explodeDateArr[1]){ $explodeDateArr[1] = $val; } }//
	$dateStr = $explodeDateArr[1].' '.$explodeDateArr[2].' '.$explodeDateArr[0].', '.$explodeDateArr[3].':'.$explodeDateArr[4];
	if($dateType=='reallyshort')
		{$dateStr = $explodeDateArr[1].'.'.$explodeDateArr[2].'.'.$explodeDateArr[0];}
	if($dateType=='shortdaynmonth')
		{$dateStr = $explodeDateArr[2].' '.$explodeDateArr[1].' '.$explodeDateArr[0];}
	if($dateType=='reallyshortwithtime')
		{$dateStr = $explodeDateArr[2].'.'.$explodeDateArr[1].'.'.$explodeDateArr[0].', '.$explodeDateArr[3].':'.$explodeDateArr[4];}
	if($dateType=='reallylong')
		{$dateStr = $explodeDateArr[1].' '.$explodeDateArr[2].', '.$explodeDateArr[0].' at '.$explodeDateArr[3].':'.$explodeDateArr[4];}
	if($dateType=='reallylongwithouttime')
		{$dateStr = $explodeDateArr[1].' '.$explodeDateArr[2].', '.$explodeDateArr[0];}
	return $dateStr;
}//convertTimeStamp($dateStr,$dateType)

?>