<i>Back to <a href='PHPTutorialThree.md'>PHP Tutorial Three</a></i>

```


<?php
	/**
	 * Basic Tutorial Three - Properties and Aspects
	 * 
	 * In the tutorial we will get a reference to a content node and access its properties and aspects.
	 * 
	 * A discusion of this tutorial can be found at http://wiki.alfresco.com/wiki/PHP_Tutorial_Three
	 * 
	 * Note: any changes to this file should be uploaded to the wiki
	 */ 
  
	// Include the required Alfresco PHP API objects  
	require_once "Alfresco/Service/Repository.php";
	require_once "Alfresco/Service/Session.php";
	require_once "Alfresco/Service/SpacesStore.php";

	// Specify the connection details
	$repositoryUrl = "http://localhost:8080/alfresco/api";
	$userName = "admin";
	$password = "admin"; 
	
	// Authenticate the user and create a session
	$repository = new Repository($repositoryUrl);
	$ticket = $repository->authenticate($userName, $password);
	$session = $repository->createSession($ticket);
	
	// Create a reference to the 'SpacesStore'
	$spacesStore = new SpacesStore($session);
	
	// Execute a Luecene query to find the content node we are after.  See http://wiki.alfresco.com/wiki/Search 
	// for some more information about Lucene queries.
	$nodes = $session->query($spacesStore, "PATH:\"app:company_home/app:guest_home/cm:Alfresco-Tutorial.pdf\"");
	
	// Since we are only expecting one result take the first node in the result set as our content node
	$contentNode = $nodes[0]; 
?>

<html>

<head>
	<title>Basic Tutorial Three - Properties and Aspects</title>
</head>

<body>
    <big>Basic Tutorial Three - Properties and Aspects</big><br><br>
    
    <!-- Output the basic details of the content node -->    
    <table border=1 cellpadding=2 cellspacing=3> 
    	<tr>
    		<td>Node Id</td>
    		<td><?php echo $contentNode->id ?></td>
    	</tr>
    	<tr>
 			<td>Node Type</td>
 			<td><?php echo $contentNode->type ?></td>
 		</tr> 	
 	</table><br>
 	
 	<!-- Output the content nodes property names and values -->
 	Properties:<br> 	
 	<table border=1 cellpadding=2 cellspacing=3> 	
<?php
	// Iterate over each property name and value
	foreach ($contentNode->properties as $name=>$value)
	{
?>
		<tr>
			<td><?php echo $name ?></td>
			<td><?php echo $value ?></td>			
		</tr>
<?php
		
	}
?> 		
 	</table><br>
 	
 	<!-- Output the names of the aspects applied to this content node -->
 	Aspects:<br/> 	
 	<table border=1 cellpadding=2 cellspacing=3> 	
<?php
	// Iterate over the applied aspects
	foreach ($contentNode->aspects as $aspect)
	{
?>
		<tr>
			<td><?php echo $aspect ?></td>		
		</tr>
<?php
		
	}
?> 	
	</table>
	
</body>

</html>
```