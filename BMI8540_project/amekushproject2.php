<!DOCTYPE html>
<html>
<head>
  <title> Web Project 4: Technical Document</title>

<!-- Provide css stylesheet along with bootstrap link -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<style>
.container {
  margin: 0;
  padding: 0;
}
body{
  display: flex;
}

#navbar{
  background: #303030;
}
.nav{
  margin-top: 8%;
}
.nav-link{
  font-size: 1.5em;
}

#main-doc{
  background: #404040;
  color: #ffffff;
  padding: 20px 50px 20px 50px;
  width: 100%;
}

section{
  padding-top:30px;
}

h2{
  color: #40CCA9;
  font-size: 20px;
}
.header{
  color: #ffffff;
  padding: 20px;
}

code{
  background: #303030;
  padding: 8px;
  margin: 8px;
}
</style>

<!-- Create the body of the website using html -->
<body>
	<main id="main-doc">
		<img src="http://odin.unomaha.edu/~amekush-harter/MSMM.png">
	<section class="main-section" id="introduction">
		<header >
			<h1>Introduction</h1>
		</header>
	<h2>Where does the data come from?</h2>

	<p>This data set came from a research article titled: <a href="https://www.tandfonline.com/doi/full/10.1080/0142159X.2022.2098708"> The relationship between medical students' empathy, mental health, and burnout: A cross-sectional study.</a>
</p>
	<p>Click on the link above to read about the study.</p>
	</section>
	
	<section class="main-section" id="data_information">
	<header>
		<h1>Data Information</h1>
	</header>
    
	<h2>What do you need to know about the data?</h2>
	<p>In order to use the data you may need to gain more insight on what was used to assess the student's mental health. Those that conducted the study used the following instruments to measure empathy, mental health, and burnout.</p>
<p>Empathy Instruments:</p>
	<ul>
		<li> <a href="https://www.jefferson.edu/academics/colleges-schools-institutes/skmc/research/research-medical-education/longitudinal-study-medical-education.html">Jefferson Scale of Physician Empathy-Student version</a> (JSPE-S)</li>
		<li> <a href="https://www.tandfonline.com/doi/full/10.1080/00223891.2010.528484?scroll=top&needAccess=true&role=tab&aria-labelledby=full-article">Questionnaire of Cognitive and Affective Empathy</a> (Qcae-cog) and (Qcae-aff)</li>
		<li><a href="https://sjdm.org/dmidi/Lennox_&_Wolfe_Self-Monitoring_Scale.html">Ability to Modify Self-Presentation</a> (AMSP) </li>
		<li><a href="https://www.unige.ch/cisa/emotional-competence/home/research-tools/gert/">Geneva Emotion Recognition Test</a> (GERT-S)</li>
	</ul>
<p>Mental Health Instruments:</p>
	<ul>
		<li><a href="https://www.apa.org/pi/about/publications/caregivers/practice-settings/assessment/tools/depression-scale">Center for Epidemiological Studies-Depression</a> (CES-D)</li>
		<li><a href="https://www.apa.org/pi/about/publications/caregivers/practice-settings/assessment/tools/trait-state">State-Trait Anxiety Inventory</a> (STAI)</li>
	</ul>
<p>Burnout Instruments:</p>
	<ul>

		<li><a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC7579892/">Maslach Burnout Inventory Student-Survey</a></li>
		<li>emotional exhaustion (MBI-EX)</li>
		<li>cynicism (MBI-CY)</li>
		<li>academic efficacy (MBI-EA)</li>
	</ul>

	<section class="main-section" id="averages_by_school_year">
	<header>
		<h1>Averages By School Year</h1>
	</header>
    
		<h2>Filter the data</h2>
		<p>Submit a medical school year below to see the average score for each survey administered for those students</p>
		<p>Please note: The medical school program in Switzerland, where this study occured, accepts students during their bachelor program around the age of 19.</p>

	<ol>
		<li>Bachelor year 1</li>
		<li>Bachelor year 2</li>
		<li>Bachelor year 3</li>
		<li>Master year 1</li>
		<li>Master year 2</li>
		<li>Master year 3</li>
	</ol>

<!-- Create the form that connects to the database using php -->
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		Please enter in the number that corresponds with the year you would like to see averages for (ex: 3): <input type="text" name="year">
		<input type="submit">
	</form>
	<?php
	$year = "empty";
	/*Process input from web user */
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		// collect value of input field
		$year = $_POST['year'];
		echo "<br>";
		if (empty($year)) {
			echo "No year was provided, please try again";
		} else {
			echo "Year provided was $year.";
		}
	}

	$server = "localhost";
	$username = "amekush-harter";
	$password = "";
	$database = "amekush-harter";

	/*Connect to my database
	* and throw errors if its unable to connect.
	* Greets the web user if it is able to connect.*/
	$connect = mysqli_connect($server, $username, "", $database);

	/* Run a basic SQL query and throw
	* an error if its unable to perform the query*/
	$query = "SELECT AVG(health), 
			AVG(jspe), 
			AVG(qcae_cog), 
			AVG(qcae_aff), 
			AVG(amsp), 
			AVG(erec_mean), 
			AVG(cesd), 
			AVG(stai_t), 
			AVG(mbi_ex), 
			AVG(mbi_cy), 
			AVG(mbi_ea) 
		FROM medstu_hlth 
		WHERE year = \"" . $year . "\"";
	$result = mysqli_query($connect, $query)
		or trigger_error("Query Failed! SQL: $query - Error: "
			. mysqli_error($connect), E_USER_ERROR);

	/*If there are results from the query, print the 0th
	* token in the current tuple from the result relation
	* If there are no results, print an error message.
	*/
	if ($result = mysqli_query($connect, $query)) {
		while ($row = mysqli_fetch_row($result)) {
			printf("<br><br>Year %s Average Results: <br><br>Empathy: <br>JSPE-S Score: %s <br>QCAE Cognitive Empathy Score: %s <br>QCAE Affective Empathy Score: %s <br>AMSP Total Score: %s <br>GERT-S Mean Value: %s <br><br>Mental: <br>CES-D Score: %s <br>STAI Score: %s <br><br>Burnout: <br>MBI-EX Score: %s <br>MBI-CY Score: %s <br>MBI-EA Score: %s", $year, $row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7], $row[8], $row[9], $row[10]);
		}
		mysqli_free_result($result);
	} else {
		echo "No results";
	}

	/*Always close your connection. 
	* Its a courtesy to your fellow users.
	*/
	mysqli_close($connect);

	?>
      
  </section>
    
</main> 
</body>
</html>
 

