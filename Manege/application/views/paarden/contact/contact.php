<div>
<h2>
Contact Pagina	
</h2>
</div>
<h3>FAQ</h3>

<button class="accordion">Waar zijn wij gevestigd?</button>
<div class="panel1">
  <p>Gorinchem Bloemenlaan 3B</p>
</div>

<button class="accordion">Wanneer krijg ik een reactie terug?</button>
<div class="panel1">
  <p>Binnen 3 werkdagen.</p>
</div>

<button class="accordion">Nog een vraag.</button>
<div class="panel1">
  <p>Nog een antwoord.</p>
</div>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    });
}
</script>


<h3>Contactgegevens</h3>
<table class="contact">
	<tr class="contact">
		<p class="contact">Contactformulier</p>
		<p class="contact">Telefoonnummer</p>
		<p class="contact">Socialmedia</p>
		<br>
		<img src="#"><a class="contact">Contactformulier</a></img>
		<img src="#"><a class="contact">Telefoonnummer</a></img>
		<img src="#"><a class="contact">Socialmedia</a></img>

	</tr>
</table>