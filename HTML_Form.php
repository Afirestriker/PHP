
<!DOCTYPE html>
<html>
<head>
	<title>HTML Form</title>
</head>
<body>

	<form method="post" action="" target="">
		
			
		<fieldset>
			
			<legend>HTML Basic Form</legend>
			<table>

				<tr>
					<td>Text field: </td>
					<td> <input type="text" name="Name" autofocus> </td>
				</tr>

				<tr>
					<td> Password field: </td>
					<td> <input type="password" name="Password"> </td>
				</tr>

				<tr>
					<td>Radio button</td>
					<td> <input type="radio" name="gender" value="male">Male </td>
					<td> <input type="radio" name="gender" value="female">Female </td>
				</tr>

				<tr>
					<td>Checkboxes</td>
					<td> <input type="checkbox" name="Checkboxes1" value="c1">checkbox1 </td>
					<td> <input type="checkbox" name="Checkboxes2" value="c2">checkbox2 </td>
				</tr>

				<tr>
					<td>Selection: </td>
					<td> 
						<select>
							<option>Select</option>
							<option value="opt1">Opt1</option>
							<option value="opt2">Opt2</option>
							<option value="opt3">Opt3</option>
							<option value="opt4">Opt4</option>
						</select>
					 </td>
				</tr>

				<tr>
					<td> Multiple Selection: </td>
					<td> 
						<select multiple>
							<option>Select</option>
							<option value="opt1">Opt1</option>
							<option value="opt2">Opt2</option>
							<option value="opt3">Opt3</option>
							<option value="opt4">Opt4</option>
						</select>
					 </td>
				</tr>

				<tr>
					<td>Number</td>
					<td><input type="number" name="number"></td>
				</tr>

				<tr>
					<td>Date</td>
					<td><input type="date" name="Date"></td>
				</tr>

				<tr>
					<td>Email</td>
					<td><input type="email" name="Email"></td>
				</tr>

				<tr>
					<td>File Upload</td>
					<td><input type="file" name="file"></td>
				</tr>

				<tr>
					<td>Textarea</td>
					<td>
						<textarea rows="4" cols="29"></textarea>
					</td>
				</tr>

				<tr>
					<td> <input type="submit" value="Save"> </td>
				</tr>
			</table>
		</fieldset>

	</form>

</body>
</html>