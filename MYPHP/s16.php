
<html>
	<!--
		Q. 1) Write a script to create “cricket.xml” file with multiple elements as shown below: 
		<CricketTeam> 
		<Team country=”Australia”> 
		 <player>____</player> 
		 <runs>______</runs> 
		 <wicket>____</wicket> 
		</Team> 
		</CricketTeam> 
 		Write a script to add multiple elements in “cricket.xml” file of category, country=”India”.  
		
		yat kahi kartach yeina mala ......	

		SLIP 20 same ha Question 	
	--!>
</html>
<?php
function createXmlFile($filename) {
    $xml = new SimpleXMLElement("<CricketTeam></CricketTeam>");
    $team = $xml->addChild("Team");
    $team->addAttribute("country", "Australia");
    $team->addChild("player", "Steve Smith");
    $team->addChild("runs", "7540");
    $team->addChild("wicket", "0");
    $xml->asXML($filename);
}

function addTeamToXml($filename, $country, $player, $runs, $wickets) {
    if (file_exists($filename)) {
        $xml = simplexml_load_file($filename);
    } else {
        $xml = new SimpleXMLElement("<CricketTeam></CricketTeam>");
    } 
    $team = $xml->addChild("Team");
    $team->addAttribute("country", $country);
    $team->addChild("player", $player);
    $team->addChild("runs", $runs);
    $team->addChild("wicket", $wickets); 
    $xml->asXML($filename);
}
$xml_filename = "cricket.xml";
createXmlFile($xml_filename);
$data = [
    ["India", "Virat Kohli", 12300, 4],
    ["India", "Rohit Sharma", 9800, 2],
    ["India", "Jasprit Bumrah", 500, 200]
];

foreach ($data as $entry) {
    addTeamToXml($xml_filename, $entry[0], $entry[1], $entry[2], $entry[3]);
}

echo "$xml_filename file created and updated successfully!";

?>
