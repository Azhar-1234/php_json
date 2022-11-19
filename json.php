<?php
	
	class Members
	{
		public $name;
		public $age;
		public function setVal($name,$age)
		{
			$this->name = $name;
			$this->age = $age;

		}
	}
	$obj = new Members();
	$obj->setVal("azhar",20);

	echo json_encode($obj),'<br>';
		$obj->setVal("abdullah",222);
	echo json_encode($obj);





// <!!!!!!!!-------------------------!!first part->>>>>>>>>>>>>>>>>>>>>

	// $jsonString=<<<"JSON"
	// 	[
	// 		{
	// 			"name":"azhar",
	// 			"age":22,
	// 			"address":"feni"
	// 		},
	// 		{
	// 			"name":"raihan",
	// 			"age":32,
	// 			"address":"darga hat"
	// 		},
	// 		{
	// 			"name":"abdullah",
	// 			"age":22,
	// 			"address":"dhaka"
	// 		}
	// 	]
	// JSON;
	// echo "<pre>";
	// 	// print_r(json_decode($jsonString));
	//   	$json = json_decode($jsonString,true);//convert to array 

	// echo "</pre>";

	// foreach ($json as $key => $value) {
	// 	compact($value);
	// }
	// $students = [
	// 	["name"=>"azhar","age"=>22,"address"=>"feni"],
	// 	["name"=>"raihan","age"=>32,"address"=>"darga hat"],
	// 	["name"=>"abdullah","age"=>22,"address"=>"dhaka"]

	// ];
	// echo "<pre>";
	// 	echo json_encode($students);
	// echo "</pre>";