<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Jenya Lestina</title>
        <link rel="stylesheet" href="../stylesheet.css">
    </head>
    <body>
        <?php include '../z-top.php';?>
        <div class="wrapper">
        <?php include 'z-navhire.php';?>
        	<img id="sql" src="diagram.png" alt="A screenshot of a database diagram">
        	<h1>SQL</h1>
        	<p>Recently, I took a class in SQL from CCAC. Since I'd already done a 
        	<a href="java.php">Java project</a> in which I created a quote-creation application for 
        	Ellis Wyatt, I figured that for this project, I would create a database to store and manage 
        	the resulting data.</p>
        	<p>I constructed the tables with CREATE TABLE commands and populated those tables using real 
        	quote data with INSERT commands. Each table was created with constraints that would be useful 
        	in a real-life context to validate data: for example, to ensure that data was entered correctly, 
        	I made sure that the total estimated cost of a job was greater than the initial deposit due.</p>
        	<p>For further reading about this project, <a href="LestinaProject.docx">download my project 
        	write-up</a>.</p>
    </body>
</html>