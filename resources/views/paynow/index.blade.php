
<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from coderthemes.com/adminto/layouts/vertical/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Dec 2020 09:18:08 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Email Veryfication | CSZ Membership</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link rel="shortcut icon" href="{{ ('Adminto/assets/images/favicon.ico') }}">
        <link href="{{ ('Adminto/assets/css/bootstrap.min.css') }}" id="bootstrap-stylesheet" rel="stylesheet" type="text/css" />
        <link href="{{ ('Adminto/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ ('Adminto/assets/css/app.min.css') }}" id="app-stylesheet" rel="stylesheet" type="text/css" />
</head>

<body class="authentication-bg">
	<div class="account-pages mt-5 mb-5">
		<div class="card m-5 p-5 align-items-center">
			<svg xmlns="http://www.w3.org/2000/svg" style="margin:auto;background:0 0" width="150" height="150" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" display="block"><g transform="translate(80 50)"><circle r="6" fill="#187fcf"><animateTransform attributeName="transform" type="scale" begin="-0.875s" values="1.5 1.5;1 1" keyTimes="0;1" dur="1s" repeatCount="indefinite"/><animate attributeName="fill-opacity" keyTimes="0;1" dur="1s" repeatCount="indefinite" values="1;0" begin="-0.875s"/></circle></g><g transform="rotate(45 -50.355 121.569)"><circle r="6" fill="#187fcf" fill-opacity=".875"><animateTransform attributeName="transform" type="scale" begin="-0.75s" values="1.5 1.5;1 1" keyTimes="0;1" dur="1s" repeatCount="indefinite"/><animate attributeName="fill-opacity" keyTimes="0;1" dur="1s" repeatCount="indefinite" values="1;0" begin="-0.75s"/></circle></g><g transform="rotate(90 -15 65)"><circle r="6" fill="#187fcf" fill-opacity=".75"><animateTransform attributeName="transform" type="scale" begin="-0.625s" values="1.5 1.5;1 1" keyTimes="0;1" dur="1s" repeatCount="indefinite"/><animate attributeName="fill-opacity" keyTimes="0;1" dur="1s" repeatCount="indefinite" values="1;0" begin="-0.625s"/></circle></g><g transform="rotate(135 -.355 41.569)"><circle r="6" fill="#187fcf" fill-opacity=".625"><animateTransform attributeName="transform" type="scale" begin="-0.5s" values="1.5 1.5;1 1" keyTimes="0;1" dur="1s" repeatCount="indefinite"/><animate attributeName="fill-opacity" keyTimes="0;1" dur="1s" repeatCount="indefinite" values="1;0" begin="-0.5s"/></circle></g><g transform="rotate(180 10 25)"><circle r="6" fill="#187fcf" fill-opacity=".5"><animateTransform attributeName="transform" type="scale" begin="-0.375s" values="1.5 1.5;1 1" keyTimes="0;1" dur="1s" repeatCount="indefinite"/><animate attributeName="fill-opacity" keyTimes="0;1" dur="1s" repeatCount="indefinite" values="1;0" begin="-0.375s"/></circle></g><g transform="rotate(-135 20.355 8.431)"><circle r="6" fill="#187fcf" fill-opacity=".375"><animateTransform attributeName="transform" type="scale" begin="-0.25s" values="1.5 1.5;1 1" keyTimes="0;1" dur="1s" repeatCount="indefinite"/><animate attributeName="fill-opacity" keyTimes="0;1" dur="1s" repeatCount="indefinite" values="1;0" begin="-0.25s"/></circle></g><g transform="rotate(-90 35 -15)"><circle r="6" fill="#187fcf" fill-opacity=".25"><animateTransform attributeName="transform" type="scale" begin="-0.125s" values="1.5 1.5;1 1" keyTimes="0;1" dur="1s" repeatCount="indefinite"/><animate attributeName="fill-opacity" keyTimes="0;1" dur="1s" repeatCount="indefinite" values="1;0" begin="-0.125s"/></circle></g><g transform="rotate(-45 70.355 -71.569)"><circle r="6" fill="#187fcf" fill-opacity=".125"><animateTransform attributeName="transform" type="scale" begin="0s" values="1.5 1.5;1 1" keyTimes="0;1" dur="1s" repeatCount="indefinite"/><animate attributeName="fill-opacity" keyTimes="0;1" dur="1s" repeatCount="indefinite" values="1;0" begin="0s"/></circle></g></svg>
			<h4>Waiting for mobile money payment from {{ $phone_number }}...</h4>
			<p>Transaction is currently sent</p>
			<h4>If you don't get a prompt on your handset dial *151*2*4#</h4>
			<p>If you've completed the transaction on your phone but still seeing this message click the link below and we'll check for you!</p>
			<form action="{{ route('poll') }}">
				<input type="hidden" name="transaction" value="{{ ($newTransaction['transaction']['id']) }}">
				<button class="btn btn-success btn-start-now">Click here to check</button>
			</form>
		</div>
	</div>	
	@include('sweetalert::alert')
</body>
 
<script>
		(function () {
			let poll = function() {
				$.ajax({
					"_token": "{{ csrf_token() }}",
					url: '{!! route('poll') !!}',
					method: "GET",
					data : {
						transaction : "{!! ($newTransaction['transaction']['id']) !!}",
					},
					contentType: false,
					cache: false,
					proccesData: false,
					dataType: "json",
					success:function(data) {
						console.log(data)
						window.location = data.url
					}
				})
			}
			setInterval(function() {
				poll()
			}, 15000);
		})();
</script>
<script src="assets/js/vendor.min.js"></script>
<script src="assets/js/app.min.js"></script>
<script src="{{ ('Adminto/assets/js/vendor.min.js') }}"></script>
<script src="{{ ('Adminto/assets/js/app.min.js') }}"></script>
</html>