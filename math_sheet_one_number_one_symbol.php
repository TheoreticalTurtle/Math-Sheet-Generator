<?php
if($_GET['symbol'] == "Addition"){
	$title = "Addition";
	$symbol = "+";
}
if($_GET['symbol'] == "Subtraction"){
	$title = "Subtraction";
	$symbol = "-";
}
if($_GET['symbol'] == "Multiplication"){
	$title = "Multiplication";
	$symbol = "x";
}
if($_GET['symbol'] == "Division"){
	$title = "Division";
	$symbol = "&#xF7";
}
$number = $_GET['number'];
?>

<head>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Gaegu" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<style>
		.cursive{
			font-family: 'Gaegu', cursive;
			font-size: 1.2em;
		}
		.col-xs-1-10,
		.col-sm-1-10 {
			width: 7%;
			margin: 1.5%;
			float: left;
			margin-bottom: 50px;
		}
		.innum{
			margin-top:2px;
		}
		@media print {
			.do-not-print {
				display: none;
			}
		}
		.answer{
		    color: red;
		    margin-bottom: -30px;
		}
		.hide{
		    display: none;
		}
		.form-check-label{
		    color:white;
		}
	</style>
	<script>
	    var toggleHide = true;
	    function toggleAnswerKey(){
    	    var x = document.getElementsByClassName("answer");
            var i;
            if(toggleHide){
                for (i = 0; i < x.length; i++) {
                    x[i].classList.add("hide");
                    toggleHide = false;
                }
            }else{
                for (i = 0; i < x.length; i++) {
                    x[i].classList.remove("hide");
                    toggleHide = true;
                }
            }
	    }
	</script>
</head>
<body>
	<header>
		<div class="navbar navbar-dark bg-dark box-shadow">
			<div class="container d-flex justify-content-between">
				<a href="index.php" class="navbar-brand d-flex align-items-center">
					<strong>Cameron's Math Sheets</strong>
				</a>
				<div class="">
				    <button type="button" class="btn btn-primary do-not-print" onclick="javascript:window.print()">Print</button>
				    <div class="form-check form-switch do-not-print">
				        <input class="form-check-input" type="checkbox" id="AnswerKeyToggle" onclick="toggleAnswerKey()" checked>
                        <label class="form-check-label" for="AnswerKeyToggle">Toggle Answer Key</label>
                    </div>
				</div>
			</div>
		</div>
	</header>
	<div class="container cursive">
		<strong>
			<div class="row">
				<?php echo '<div class="col-12 text-center"><h2>'.$title.' with '.$number.'\'s</h2></div>';?>
			</div>
			<br>
			<div class="row mb-5">
				<div class="col-5 border-bottom border-dark text-left">Name:</div>
				<div class="col-4"></div>
				<div class="col-3 border-bottom border-dark text-left">Date:</div>
			</div>
			<div class="row">
				<?php 
					for($i = 0; $i<10; $i++){
						for($j = 0; $j<10; $j++){
							$topnum = 0;
							$bottomnum = 0;
							
							//determine top and bottom numbers (we will fix zero later)
							if($symbol == "&#xF7"){
								$bottomnum = $number;
								$topnum = rand(0, 9);
								
							}else if(rand(0,1)){
								$topnum = $number;
								$bottomnum = rand(0, 9);
							}else{
								$topnum = rand(0, 9);
								$bottomnum = $number;
							}
							
							//make sure denominator is not zero in division (should not be possible to enter this loop unless on zero page)
							//while($symbol == "&#xF7" && $bottomnum == 0){
								//$bottomnum = rand(0, 9);
							//}
							
							//prevent decimal, make nice whole numbers
							if($symbol == "&#xF7"){
								$topnum = $bottomnum * $topnum;
							}
							
							//if zero division page, make sure 0 is only numerator
							if($symbol == "&#xF7" && $number == 0){
								$topnum = 0;
								$bottomnum = rand(0, 9);
								while($bottomnum == 0){
									$bottomnum = rand(0, 9);
								}
							}
				?>
				<div class="col-sm-1-10">
					<div class="row">
						<div class="col-12 text-right">
						<?php echo $topnum;?>
						</div>
						<div class="col-6 text-left"><?php echo $symbol;?></div>
						<div class="col-6 text-right">
						<?php echo $bottomnum;?>
						</div>
						<div class="col-12 bottom-line border-bottom border-dark">
						</div>
						<div class="col-12 text-right answer">
							<?php 
							    switch($symbol){
								case "+":
									echo $topnum + $bottomnum;
									break;
								case "-":
									echo $topnum - $bottomnum;
									break;
								case "x":
									echo $topnum * $bottomnum;
									break;
								case "&#xF7":
									echo $topnum / $bottomnum;
									break;
							    }
							?>
						</div>
					</div>
				</div>
				<?php
						}
					}
				?>
			</div>
		</strong>
	</div>
</body>