<?php

/*----------------------------------------------------------------------------------------
 * Copyright (c) Microsoft Corporation. All rights reserved.
 * Licensed under the MIT License. See LICENSE in the project root for license information.
 *---------------------------------------------------------------------------------------*/

function sayHello($name) {
	echo "Hello $name!";
}

?>

<html>
	<head>
		<title>Visual Studio Code Remote :: PHP</title>
	</head>
	<body>
		<h1>Tìm sách</h1>
		<form action="xlTimsach.php" Method="GET">
			Từ khóa: <input type="text" name="txtTukhoa"/>
			<input type="submit" value="Tìm"/>
      </form>

	</body>
</html>