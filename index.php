<!DOCTYPE html>
<html>
  <head>
<!-- metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Volume of Right Triangular Prism, with JavaScript">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Ms Raffin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <title>Volume of a Triangular Pyramid in PHP</title>
  </head>
  <body>
    <center>
<!-- adding a JavaScript button -->
    <?php
      echo "<h1>Volume of a Right Triangular Pyramid in PHP</h1>";
      ?>
		<table>
			<tr>
				<td>
					<?php
           echo "<h3>Enter the dimensions of your pyramid:</h3>";
            ?>
					<form action="./results.php" method="post" target="results">
						<label for="side-a">Side a (m):</label>
						<input type="number" step="any" id="side-a" placeholder="Enter side a (m)"><br><br>
						<label for="side-b">Side b (m):</label>
						<input type="number" step="any" id="side-b" placeholder="Enter side b (m)"><br><br>
						<label for="height">Height (m):</label>
						<input type="number" step="any" id="height" placeholder="Enter height (m)"><br><br>
						<input type="submit" value="Calculate Volume">
					</form>
				</td>
				<td width=45%>
<!-- adding an image -->
					<img src="./images/triangleprism.jpg" alt="Pyramid" width="85%" height="auto"/>
				</td>
			</tr>
		</table>
		<!-- Create a space where the user information will be displayed -->
		<iframe id="results" name="results"></iframe>
			</div>
		</div>
    </center>
  </body>
</html>