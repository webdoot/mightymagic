<!--================Header Menu Area =================-->
<header class="main_menu_area">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{route('home')}}">
            <img id="brand-logo" src="{{ asset('image/mm-black-logo.png')}}" alt="mightymagic logo">
            <img id="brand-logo-1" src="{{ asset('image/mm-logo.png')}}" alt="mightymagic logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item {{ (request()->is('home')) ? 'active' : '' }}"><a class="nav-link" href="{{route('home')}}">Home</a></li>
                <li class="nav-item {{ (request()->is('about')) ? 'active' : '' }}"><a class="nav-link" href="{{route('about')}}">About</a></li>
                <li class="nav-item dropdown submenu {{ (request()->is('service')) ? 'active' : '' }}">
                    <a class="nav-link dropdown-toggle" href="{{route('service')}}" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">Services</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li class="nav-item"><a class="nav-link" href="{{route('service.ott')}}">Film & OTT Platform</a></li>                        
                        <li class="nav-item"><a class="nav-link" href="{{route('service.brand')}}">Brand Identity</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('service.web')}}">Web Solutions</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('service.corporate')}}">Corporate Films & Photography</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('service.print')}}">Print & Production</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('service.social')}}">Social Media Marketing</a></li>
                    </ul>
                </li>
                <li class="nav-item {{ (request()->is('portfolio')) ? 'active' : '' }}"><a class="nav-link" href="{{route('portfolio')}}">Portfolio</a></li>                
                <li class="nav-item {{ (request()->is('workwith')) ? 'active' : '' }}"><a class="nav-link" href="{{route('workwith')}}">Work With Us</a></li>
                <li class="nav-item {{ (request()->is('contact')) ? 'active' : '' }}"><a class="nav-link" href="{{route('contact')}}">Reach Us</a></li>
            </ul>
        </div>
    </nav>
</header>
<!--================End Header Menu Area =================-->