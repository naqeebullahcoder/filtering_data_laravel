<form action="" method="POST" style="text-align: center; margin-top: 50px" >
	@csrf
	<label> From </label>
	<input type="date" name="dateFrom"><br><br>
	<label> To </label>
	<input type="date" name="dateTo"><br>
	<input type="submit" value="Find">
</form>