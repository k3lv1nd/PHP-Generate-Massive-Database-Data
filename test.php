<?php 

$conn = mysqli_connect('localhost','root','','TestFantics');
if ($conn) {
	

	$names =[
		'Peter','Edward','John','Malcom','Mercy','Drake','Lil wayne','Lil uzi wert','Eminem',
		'Latasha','James','Elizabeth','Caroline','Jacinta','Karis','Laureen'
	];

	$universities=[
		'Kenyatta University','Strathmore University','Laikipia Univeristy','Univeristy Of Nairobi',
		'Moi Univeristy','Jomo Kenyatta Univeristy','Moringa School','Univeristy of Eldoret',
		'Masai Mara Univeristy','Meru University','Kisii University'
	];

	$careers=[
		'Software Developer','Doctor','Teacher','Lawyer','Dermitologist','Teacher'
	];

	$villages=[
		'Nakuru','Nariobi','Mombasa','Thika','Ruiru','Kisumu','Nyeri'
	];

	 $name_no=sizeof($names);
	
	 $University_no=sizeof($universities);
	

	 $careers_no=sizeof($careers);
	
	 $villages_no=sizeof($villages);
	



	for ($i=0; $i <20 ; $i++) { 
		$a=rand(0,$name_no-1);

		$b=rand(0,$name_no-1);

		$Fullnames=$names[$a]."  ".$names[$b];

		$c=rand(0,$careers_no-1);

		$d=rand(0,$villages_no-1);

		$e=rand(0,$University_no-1);

		$Fullnames=$names[$a]."  ".$names[$b];

		$Age=rand(17,25);

		$Occupation=$careers[$c];


		$IDnumber=rand(30913240,31913240);

		$Village=$villages[$d];

		$University=$universities[$e];

		$sql="INSERT INTO `users` (`Fullnames`, `Age`, `Occupation`, `University`, `IDnumber`, `Village`) VALUES ( 
		'$Fullnames', '$Age', '$Occupation','$University', '$IDnumber', '$Village')";

		if (mysqli_query($conn,$sql)) {
			echo  $Occupation. " Created <br>";
		}else{
			echo  mysqli_error($conn);
		}



	}


}else{
	echo mysqli_error($conn);
}





















 ?>