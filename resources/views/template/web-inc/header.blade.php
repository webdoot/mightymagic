<!--================Header Menu Area =================-->
<header class="main_menu_area">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{route('home')}}">
            <img id="brand-logo" src="image/mm-black-logo.png" alt="mightymagic logo">
            <img id="brand-logo-1" src="image/mm-logo.png" alt="mightymagic logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item active"><a class="nav-link" href="{{route('home')}}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('about')}}">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('service')}}">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('portfolio')}}">Portfolio</a></li>                
                <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">Contact</a></li>
            </ul>
        </div>
    </nav>
</header>
<!--================End Header Menu Area =================-->