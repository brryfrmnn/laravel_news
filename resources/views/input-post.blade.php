<!DOCTYPE html>
<html>
<head>
	<title>Input Form</title>
</head>
<body>
	<form action="{{URL('post')}}" method="POST">
	{{csrf_field()}}
		<table>
			<tr>
				<td>Title</td>
				<td>:</td>
				<td><input type="text" name="title"></td>
			</tr>
			<tr>
				<td>Article</td>
				<td>:</td>
				<td><TEXTAREA name="article"></TEXTAREA></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit"></td>
			</tr>
		</table>
	</form>
</body>
</html>