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
	    function toggleAnswerKey(){
    	    var x = document.getElementsByClassName("answer");
            var i;
            if(!document.getElementById("AnswerKeyToggle").checked){
                for (i = 0; i < x.length; i++) {
                    x[i].classList.add("hide");
                }
            }else{
                for (i = 0; i < x.length; i++) {
                    x[i].classList.remove("hide");
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
				<div class="col-12 text-center">
					<h1>100 Problem Math Sheet</h1>
				</div>
			</div>
			<br>
			<div class="row mb-5">
				<div class="col-5 border-bottom border-dark text-left">Name:</div>
				<div class="col-4"></div>
				<div class="col-3 border-bottom border-dark text-left">Date:</div>
			</div>
			<br>
			<div class="row">
				<?php 
					for($i = 0; $i<10; $i++){
						for($j = 0; $j<10; $j++){
							switch(rand(0,3)){
								case 0:
									$symbol = "+";
									break;
								case 1:
									$symbol = "-";
									break;
								case 2:
									$symbol = "x";
									break;
								case 3:
									$symbol = "&#xF7";
									break;
							}
							$topnum = rand(0, 9);
							$bottomnum = rand(0, 9);
							while($bottomnum > $topnum && $symbol == "-"){
								$topnum = rand(0, 9);
								$bottomnum = rand(0, 9);
							}
							while($symbol == "&#xF7" && $bottomnum == 0){
								$bottomnum = rand(0, 9);
							}
							if($symbol == "&#xF7"){ //prevent decimal answers
                            	$topnum = $bottomnum * $topnum;
                            }
				?>
				<div class="col-sm-1-10">
					<div class="row">
						<div class="col-12 text-right">
							<?php echo $topnum;?>
						</div>
						<div class="col-6 text-left">
							<?php echo $symbol;?>
						</div>
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