

<div id="message" class="alert alert-success" style="display: none;"></div>
<div class="row well"><input name="radioGrp" type="radio" value="Milk" /> Milk
<input checked="checked" name="radioGrp" type="radio" value="Butter" /> Butter
<input name="radioGrp" type="radio" value="Cheese" /> Cheese
<input name="radioGrp" type="radio" value="Water" /> Water
<input name="radioGrp" type="radio" value="Beer" /> Beer
<input checked="checked" name="radioGrp" type="radio" value="Wine" /> Wine
<a class="btn btn-primary pull-right getvalue" type="button">Get Valuee</a></div>


<script type="text/javascript">
	jQuery('.getvalue').on('click', function(e) {  
	var selValue = document.querySelector('input[name = "radioGrp"]:checked').value;
	alert(selValue);
});

</script>


