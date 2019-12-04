<!DOCTYPE html>
<html>
<title>Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="assets/css/w3.css">
<body>
	<br>
	<div class="w3-border w3-container " style="max-width: 500px;">
		<br>
<form class="w3-container" method="post" action="mailit.php" style="max-width: 400px">
  <label class="w3-text-teal"><b>Name</b></label>
  <input class="w3-input w3-border w3-light-grey" name="name" type="text">

  <label class="w3-text-teal"><b>Date</b></label>
  <input class="w3-input w3-border w3-light-grey" name="date" type="date">

  <label class="w3-text-teal"><b>Gender</b></label>
<input class="w3-radio" type="radio" name="gender" value="Male" checked="">

<label>Male</label>

<input class="w3-radio" type="radio" name="gender" value="female">
<label>Female</label>
<br>
  <button class="w3-btn w3-blue-grey">Submit</button>
</form>
		<br>
		<br>

</div>
</body>

</html>