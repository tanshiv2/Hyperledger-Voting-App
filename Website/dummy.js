

var param = {
	"$class": "org.example.empty.Voter",
  	"voteID": voteID,
  	"password": password,
  	"rollNumber": rollNumber ,
  	"fullName": fullName
}

$.post("http://localhost:3000/api/Voter", param, function(data){

}

<?php
	//take roll number and generate voteID
	$voteIDphp = ;
?>

var voteIDjs = '<?php echo $voteIDphp; ?>';

$.get("http://localhost:3000/api/Voter", function(data){
	for(i=0;i<data.length;i++)
	{
		if(voteID == data[i].voteID)
		{
			if(password == data[i].password)
			{
				//session start in php
				//add vote ID to session array
			}
		}
	}
});