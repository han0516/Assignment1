<!doctype html>
<html>
	<head>
		<title>Travelers</title>
	</head>
	<body>
		<h1>List of Travelers</h1>
                <table border="1">
                
		{records}
                <tr>
		<th><p><a href="/traveler/showme/{id}">{name}</a></p></th>
                <th><p><img src="/image/{image}"/></p></th>
                </tr>
		{/records}
                
		<p><a href="/home">Home</a></p>
                </table>
	</body>
</html>