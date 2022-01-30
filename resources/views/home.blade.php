@extends('layouts.app')
@push('styles')
<style>	
.mySlides {
  width: 100%; 
  height: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
@endpush
@section('content')
 <div class="w3-display-container" style="height: 100vh;">
 	@foreach($sliders as $slider)
 		<img class="mySlides w3-animate-fading" src="{{ Voyager::image($slider->image)}}">	
 	@endforeach
     <div class="w3-center w3-display-middle" style="width:100%">
    <div class="w3-left w3-black w3-padding w3-margin" onclick="plusDivs(-1)">&#10094;</div>
    <div class="w3-right w3-black w3-padding w3-margin" onclick="plusDivs(1)">&#10095;</div>
	</div>
	@foreach($sliders as $slider)
	<div class="w3-display-middle w3-container w3-padding-16 w3-black mySlideTexts">
    <h2>{{ $slider->title }}</h2>
    <p>{{ $slider->desc }}</p>
  </div>
  	@endforeach  
</div>
<div class="w3-display-container">
	 <!-- About -->
<div id="about" class="w3-padding-top-64">
<div class="w3-row">

<div class="w3-half w3-padding-large w3-hide-small">
<img src="https://images.pexels.com/photos/2430934/pexels-photo-2430934.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="w3-round w3-image w3-opacity-min" alt="Table" style="width:100%">
</div>

<div class="w3-half w3-padding-large">
<h1 class="w3-center">About Catering</h1><br>
<h5 class="w3-center">Tradition since 1889</h5>
<p class="w3-large">
The Catering was founded in blabla by Mr. Smith in lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
<p class="w3-large w3-text-grey w3-hide-medium">
Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod temporincididunt ut labore et dolore magna aliqua.</p>
</div>

</div>
</div> 
 <!-- Menu -->
<div id="menu" class="w3-padding-top-64">
<h1 class="w3-center">Our Menu</h1>
<div class="w3-row">

<div class="w3-col l6 m6 w3-padding-large">

<h4>Bread Basket</h4>
<p class="w3-text-grey">
Assortment of fresh baked fruit breads and muffins 5.50</p><br>

<h4>Belgian Waffle</h4>
<p class="w3-text-grey">
Vanilla flavored batter with malted flour 7.50</p><br>

<h4>Scrambled eggs</h4>
<p class="w3-text-grey">
Scrambled eggs, roasted red pepper and garlic, with green onions 7.50</p><br>

<h4>Blueberry Pancakes</h4>
<p class="w3-text-grey">
With syrup, butter and lots of berries 8.50</p>

</div>

<div class="w3-col l6 m6 w3-padding-large">
<img src="https://images.pexels.com/photos/931154/pexels-photo-931154.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="w3-round w3-image w3-opacity-min" alt="Menu" style="width:100%">
</div>
</div>

<div class="w3-container w3-text-grey">
<p>We offer full-service catering for any event, large or small. We understand your needs and we will cater the food to satisfy the biggerst criteria of them all, both look and taste. Do not hesitate to contact us.</p>
</div>
</div>
 <!-- Contact -->
<div id="contact" class="w3-container">
<h1>Contact</h1>

<p class="w3-text-blue-grey w3-large">
<b>Catering Service, 42nd Living St, 43043 New York, NY</b></p>
<p>You can also contact us by phone 00553123-2323 or email catering@catering.com, or send us a message here:</p>

<form action="/action_page.php" target="_blank">
	@csrf
<p><input class="w3-input w3-padding-16" type="text" placeholder="Name" required name="Name"></p>
<p><input class="w3-input w3-padding-16" type="number" placeholder="How many people" required name="People"></p>
<p><input class="w3-input w3-padding-16" type="datetime-local" placeholder="Date and time" required name="date" value="2020-11-16T20:00"></p>
<p><input class="w3-input w3-padding-16" type="text" placeholder="Message \ Special requirements" required name="Message"></p>
<p><button class="w3-button w3-light-grey w3-section" type="submit">SEND MESSAGE</button></p>
</form>

<img src="https://images.pexels.com/photos/21014/pexels-photo.jpg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="w3-image" style="width:100%">
</div>  
</div>
 <!-- Footer -->
  <footer class="w3-row-padding w3-padding-32">
    <div class="w3-third">
      <h3>FOOTER</h3>
      <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
      <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
    </div>
  
    <div class="w3-third">
      <h3>BLOG POSTS</h3>
      <ul class="w3-ul w3-hoverable">
        <li class="w3-padding-16">
          <img src="/w3images/workshop.jpg" class="w3-left w3-margin-right" style="width:50px">
          <span class="w3-large">Lorem</span><br>
          <span>Sed mattis nunc</span>
        </li>
        <li class="w3-padding-16">
          <img src="/w3images/gondol.jpg" class="w3-left w3-margin-right" style="width:50px">
          <span class="w3-large">Ipsum</span><br>
          <span>Praes tinci sed</span>
        </li> 
      </ul>
    </div>

    <div class="w3-third w3-serif">
      <h3>POPULAR TAGS</h3>
      <p>
        <span class="w3-tag w3-black w3-margin-bottom">Travel</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">New York</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Dinner</span>
        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Salmon</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">France</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Drinks</span>
        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Ideas</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Flavors</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Cuisine</span>
        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Chicken</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Dressing</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Fried</span>
        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Fish</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Duck</span>
      </p>
    </div>
  </footer>
@push('scripts')
<script>
var slideIndex = 0;
var textIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var y = document.getElementsByClassName("mySlideTexts");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  for (i = 0; i < x.length; i++) {
    y[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > x.length) {slideIndex = 1}
  x[slideIndex-1].style.display = "block";
  setTimeout(carousel, 10000);
  textIndex++; 
  if (textIndex > y.length) {textIndex = 1}
  y[textIndex-1].style.display = "block";
  setTimeout(carousel, 6000);
}
</script>
@endpush
@endsection
