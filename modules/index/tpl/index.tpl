<script>
$(function(){
{literal}	
$("a[href='?module=Redirect']").click(function(){
$('h2').prepend("<p id='load' style=';height:40pt;border:3px gray solid;border-radius:10px;text-align:center'>Patientez quelques secondes</p>");
	})	
{/literal}	
})
</script>

<h2>Inscris toi !</h2>
<p class="text-center">
		<a href='?module=Inscription&action=index' 
		data-toggle="modal" 
		data-target="#inclusionModal"
		class='btn btn-success glyphicon glyphicon-plus'> Je m'inscris !</a>
	</p>

<h2>Mon avis sur ...</h2>
<p class="text-center">
{$index}
</p>