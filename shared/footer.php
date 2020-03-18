</div>
</body>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://unpkg.com/@fullcalendar/core@4.4.0/main.min.js"></script>
<script src="https://unpkg.com/@fullcalendar/interaction@4.4.0/main.min.js"></script>
<script src="https://unpkg.com/@fullcalendar/daygrid@4.4.0/main.min.js"></script>
<script src="https://unpkg.com/@fullcalendar/timegrid@4.4.0/main.min.js"></script>
<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script>
	$(document).ready(function(){
		toggleNav();
		$('.sidebar-toggle').click(function(){
			$('.nav-sidebar').toggleClass('open');
			$('.app-wrapper').toggleClass('expanded');
		});

	});
	$(window).resize(function(){
		toggleNav()
	});

	function toggleNav() {
		if($(window).width() > 992) {
			$('.nav-sidebar').addClass('open');
			$('.app-wrapper').addClass('expanded');
		} else {
			$('.nav-sidebar').removeClass('open');
			$('.app-wrapper').removeClass('expanded');
		}
	}
</script>
</html>