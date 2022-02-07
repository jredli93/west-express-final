<ul class="navigation-list">
    <li class="navigation-item"><img class="navigation-item-logo" src="{{asset('/assets/images/we-logo.png')}}" alt="logo" /></li>   
    <li class="navigation-item"><a href="{{ URL::route('home') }}">Home</a></li>
    <li class="navigation-item"><a href="{{ URL::route('about-us') }}">About Us</a></li>
    <li class="navigation-item"><a href="{{ URL::route('services') }}">Services</a></li>
    <li class="navigation-item"><a href="{{ URL::route('careers') }}">Careers</a></li>
<li class="navigation-item"><a href="{{ URL::route('contact') }}">Contact</a></li>
</ul>
<div class="navigation-mobile" id="navigation-mobile">
    <img class="navigation-mobile-logo" src="{{asset('/assets/images/we-logo.png')}}" alt="logo" />
    <span class="navigation-hamburger"><i class="fas fa-bars"></i></span>
</div>