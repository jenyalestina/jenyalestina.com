<div id="nav">
	<ul class="nav">
		<li><a href="http://jenyalestina.com/blog">Blog</a></li>
		<li>|</li>
		<li><a href="contact.php">Contact Me</a></li>
		<li>|</li>
		<li><a href="commission.php">Commission Me</a></li>
		<li>|</li>
		<li><a href="/hireme/hireme.php">Hire Me</a></li>
	</ul>

	<div class="dropdown">
		<button onclick="dropdown()" class="dropbtn">Menu</button>
		<div id="navDropdown" class="dropdown-content">
		<a href="http://jenyalestina.com/blog">Blog</a>
	    	<a href="contact.php">Contact Me</a>
	    	<a href="commission.php">Commission Me</a>
	    	<a href="/hireme/hireme.php">Hire Me</a>
		</div>
	</div>
	<script>
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