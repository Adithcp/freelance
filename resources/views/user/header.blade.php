<div class="header container ">

    <div class="leftMd">
        <a href="{{ route('home') }}"> <img src="{{ asset('user/images/logo.png') }}" alt="" class="icon"></a>
        <a href="{{ route('home') }}"><img src="{{ asset('user/images/AdanaLogo.png') }}" alt="" class="logo"></a>
    </div>
    <div class="rightMd">
        <div class="box">
            <img src="{{ asset('user/images/country.png') }}" alt="">
            <span>Country</span>
        </div>

        <div class="wrapper-dropdown" id="dropdown">
            <span class="selected-display" id="destination"><img src="{{ asset('user/images/language.png') }}" alt="">Language</span>
            <svg class="arrow" id="drp-arrow" width="24" height="24" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg" class="transition-all ml-auto rotate-180">
                <path d="M7 14.5l5-5 5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round"></path>
            </svg>
            <ul class="dropdown">
                <li class="item"><img src="{{ asset('user/images/language.png') }}" alt="">English</li>
                <li class="item"><img src="{{ asset('user/images/language.png') }}" alt="">Arabic</li>
                <li class="item"><img src="{{ asset('user/images/language.png') }}" alt="">Russian</li>
            </ul>
        </div>
    </div>
</div>
<div class="menuWrapper" data-aos="fade-up" data-aos-duration="3000">
    <div class="menu ">
        <div class="menuBox">
            <a href="{{ route('home') }}"><img src="{{ asset('user/images/home-icon.png') }}" alt=""></a>
        </div>
        <div class="menuBox">
            <a href="{{ route('about-us') }}"><img src="{{ asset('user/images/aboutus-icon.png') }}" alt=""></a>
        </div>
        <div class="menuBox">
            <a href="{{ route('properties') }}"><img src="{{ asset('user/images/building-icon.png') }}" alt=""></a>
        </div>
        <div class="menuBox">
            <a href="{{ route('blog') }}"><img src="{{ asset('user/images/message-icon.png') }}" alt=""></a>
        </div>
        <div class="menuBox">
            <a href="{{ route('join-with-us') }}"><img src="{{ asset('user/images/join-icon.png') }}" alt=""></a>
        </div>
        <div class="menuBox">
            <a href="{{ route('contact-us') }}"><img src="{{ asset('user/images/contactus-icon.png') }}" alt=""></a>
        </div>
    </div>
</div>


<div class="action-icon">
    <a href="#" class="call icon">
        <i class="fa-solid fa-phone"></i>
    </a>
    <a href="#" class="whatsapp icon">
        <i class="fa-brands fa-whatsapp"></i>
    </a>

</div>