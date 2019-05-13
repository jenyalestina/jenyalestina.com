<div id="nav">
	<ul class="nav">
		<li><a href="http://jenyalestina.com">Home</a></li>
		<li>|</li>
		<li><a href="resume.php">Resume</a></li>
		<li>|</li>
		<li><a href="skills.php">Skills</a></li>
		<li>|</li>
		<li><a href="portfolio.php">Portfolio Project</a></li>
	</ul>
	
	<div class="dropdown">
		<button onclick="dropdown()" class="dropbtn">Menu</button>
		<div id="navDropdown" class="dropdown-content">
		<a href="http://jenyalestina.com">Home</a>
	    	<a href="resume.php">Resume</a>
	    	<a href="skills.php" onclick="">Skills</a>
	    	<a href="portfolio.php">Portfolio Project</a>
		</div>
	</div>
	
	<script>
		/**
		* This is for the nav bar dropdown on mobile.
		*/
		function dropdown() {
		    document.getElementById("navDropdown").classList.toggle("show");
		}
		// Close the dropdown if the user clicks outside of it
		window.onclick = function(event) {
		  if (!event.target.matches('.dropbtn')) {

		    var dropdowns = document.getElementsByClassName("dropdown-content");
		    var i;
		    for (i = 0; i < dropdowns.length; i++) {
		      var openDropdown = dropdowns[i];
		      if (openDropdown.classList.contains('show')) {
		        openDropdown.classList.remove('show');
		      }
		    }
		  }
		}
	</script>
</div>