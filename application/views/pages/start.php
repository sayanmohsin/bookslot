<html lang="en">
<head>
<title>BookSlot</title>
    <?php $this->load->view('loader/css_loader'); ?>
    <link rel="stylesheet" media="all" type="text/css" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
	</head>
	<body>
		<div class="wrapper">

			<h1>Adding a Timepicker to jQuery UI Datepicker</h1>
			<p>The timepicker addon adds a timepicker to jQuery UI Datepicker, thus the datepicker and slider components (jQueryUI) are required for using any of these. </p>
			<p>In addition all datepicker options are still available through the timepicker addon.</p>

			<!--
				HTML Structure
			-->
			<div class="example-container">
				<p><b>Add a simple datetimepicker to jQuery UI's datepicker</b></p>
				<div>
					<input type="text" value="" id="basic_example_1" name="basic_example_1" />
				</div>
			</div>

			<div class="example-container">
				<p><b>Add only a timepicker:</b></p>
				<div>
					<input type="text" value="" id="basic_example_2" name="basic_example_2" />
				</div>
			</div>

	 	</div>

		<!--loading jQuery and other library-->
    <?php $this->load->view('loader/js_loader'); ?>

	</body>
</html>
