<?php
$number = 9;
?>

<head>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

<style>
.col-xs-1-10,
.col-sm-1-10 {
  position: relative;
  min-height: 1px;
}

.col-xs-1-10 {
  width: 10%;
  float: left;
}

@media (min-width: 768px) {
  .col-sm-1-10 {
    width: 5%;
	margin: 2.5%;
    float: left;
  }
}

@media (min-width: 992px) {
  .col-md-1-10 {
    width: 10%;
    float: left;
  }
}

@media (min-width: 1200px) {
  .col-lg-1-10 {
    width: 10%;
    float: left;
  }
}
.bottom-line{
	margin-top: -20px;
}
</style>
</head>
<body>
<div class="container">
	<strong>
	<div class="row">
		<?php echo '<div class="col-12 text-center"><h2>2 Digit Subtraction</h2></div>';?>
	</div>
	<br>
	<div class="row">
		<div class="col-9">Name: ___________________________________________</div>
		<div class="col-3 text-right">Date: _______________________</div>
	</div>
	<?php 
	for($i = 0; $i<10; $i++){
		echo '<br><br><br><div class="row">';
		for($j = 0; $j<10; $j++){
			$topnum = rand(10, 99);
			$bottomnum = rand(10, 99);
			while($bottomnum > $topnum){
				$topnum = rand(10, 99);
				$bottomnum = rand(10, 99);
			}
			?>
			<div class="col-sm-1-10">
				<div class="row">
					<div class="col-12 text-right">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $topnum;?>
					</div>
				</div>
				<div class="row">
					<div class="col-6 text-left">-</div>
					<div class="col-6 text-right">
					<?php echo $bottomnum;?>
					</div>
				</div>
				<div class="row">
					<div class="col-12 bottom-line">
					_________
					<br>
					</div>
				</div>
			</div>
			<?php
		}
		echo '</div>';
	}?>
	</strong>
</div>
</body>