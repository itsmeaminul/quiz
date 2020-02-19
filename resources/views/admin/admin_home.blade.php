<!DOCTYPE html>
<html>
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Admin Panel</title>
		<!-- plugins:css -->
		<!-- inject:css -->
		<link rel="stylesheet" href="{{asset('css/style.css')}}">
		
		<!-- endinject -->
		<link rel="shortcut icon" href="images/favicon.html" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	</head>
	<body>
		<div class="fix main">
			<div class="col-sm d-flex justify-content-right ml-5 mt-2">	
				<img src="/images/adminbanner2.jpg" class="ml-5 pl-5">
			</div>

			<div class="fix maincontent">
				<div class="fix sidebar">
					<ul>
						<li><a href="">Home</a></li>
						<li><a href="">About</a></li>
						<li><a href="">Contact</a></li>
						<li><a href="">Media</a></li>
						<li><a href="">Others</a></li>
					</ul>
				</div>
				
				<div class="fix content">
					<h2>Dentist</h2>
					<p>A dentist, also known in the U.S. as a dental surgeon, is a surgeon who specializes in dentistry—the diagnosis, prevention, and treatment of diseases and conditions of the oral cavity. The dentist's supporting team aids in providing oral health services. The dental team includes dental assistants, dental hygienists, dental technicians, and in some states, dental therapists.</P>
					
					<p>In China as well as France, the first people to perform dentistry were barbers. They have been categorized into 2 distinct groups: guild of barbers and lay barbers.</p>
					<p>Pierre Fauchard of France is often referred to as the "father of modern dentistry" for being the first to publish a scientific textbook (1728) on the techniques and practices of dentistry. Over time, trained dentists immigrated from Europe to the Americas to practice dentistry, and by 1760, America had its own native born practicing dentists.</p>
				</div>
			</div>
			<div class="fix footer">
				<p>&copy; AS Foundation, All Rights Reserved</p>
			</div>
		</div>
		<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
		<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
		<script type="text/javascript">
		$(window).load(function(){
			$('#slider').nivoSlider();
		});
		</script>
	</body>
</html>