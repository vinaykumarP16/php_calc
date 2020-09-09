<?php 
extract($_POST);
if(isset($save))
{
	switch($ch)
	{
		case '+':
		$res=$fn+$sn;
		break;
		
		case '-':
		$res=$fn-$sn;
		break;
		
		case '*':
		$res=$fn*$sn;
		break;

		case '/':
		$res=$fn/$sn;
		break;		
		
	}
	
}

?>
<!DOCTYP html>
<html>
	<head>
		<title>Calculator</title>
		
	</head>
	<body>
		<form method="post">
		<table align="center">
			<br>
			<h1 align="center">CALCULATOR</h1>
			<br>
			<tr>
				<th>Enter your First num</th>
				<th><input type="number" name="fn" value="<?php  echo @$fn;?>"/></th>
			</tr> 
			<tr>
				<th>Enter your Second num</th>
				<th><input type="number" name="sn" value="<?php  echo @$sn;?>"/></th>
			</tr>
			<tr>
				<th>symbols</th>
				<th>
				<select name="ch">
					<option>+</option>
					<option>-</option>
					<option>*</option>
					<option>/</option>
				</select>
				</th>
			</tr>
			<tr>
				
				<th colspan="2">
				<input type="submit" 
				name="save" value="Calculate"/>
				</th>
			</tr>
			<br>
			<tr>
				<th>Your Result</th>
				<th><input type="number" readonly="readonly" disabled="disabled" value="<?php  echo @$res;?>"/></th>
			</tr> 
		</table>
		</form>
		<style type="text/css">
			
			body{
				background: linear-gradient(to right, pink,yellow,orange,skyblue);
			}
			input{
				border-radius: 20px;
			}
			h1{
				color: green;
			}
			th{
				color: red;
			}

		</style>
	</body>
</html>