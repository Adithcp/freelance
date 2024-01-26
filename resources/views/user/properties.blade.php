<!----------------------------
            Header Section Start 
         ----------------------------->
@include('user.layout')
<!----------------------------
            Header Section End 
         ----------------------------->

<style>
.banner {
    height: 75vh;
    background-image: url("user/images/properties-banner.png");
}

.banner .menuWrapper {
    height: 90%;
}
</style>

<!-- Banner Area STart -->
<div class="banner">
    <!----------------------------
            Header Section Start 
         ----------------------------->
    @include('user.header')
    <!----------------------------
            Header Section End 
         ----------------------------->
    <div class="bannerText " data-aos="fade-up" data-aos-duration="3000">
        <h2>PROPERTIES</h2>
    </div>
</div>

<div class="properties container">
    <ul class="navbar">
        <li><a href="{{ route('home') }}"><i class="fa-solid fa-house"></i></a></li>
        <li>></li>
        <li><span>Properties</span></li>

    </ul>
    <div class="filter">
        <div class="leftBox">
            <span>Sort: <strong>Buy</strong> | <strong>Rent</strong></span>
            <p><img src="{{ asset('user/images/filter.png') }}" alt="">Advanced Filter</p>
        </div>
        <div class="searchbox">
            <input type="text" placeholder="Search">
            <div class="icon">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
        </div>
        <div class="rightBox">
            <span>524 results found</span>
            <ul>
                <li>
                    << </li>
                <li>1</li>
                <li>2</li>
                <li>3</li>
                <li>4</li>
                <li>..</li>
                <li>>></li>

            </ul>
        </div>
    </div>
    <div class="asset-row">
        <div class="box-wrapper">
            <div class="box">
                <div class="image">
                    <div class="text">
                        <h6>Lorem ipsum dolo sitamet. Lorem ipsum dolo sit amet.</h6>
                        <a href="./property-details.php">Know More >></a>
                    </div>
                    <img src="{{ asset('user/images/asset-image1.png') }}" alt="">
                </div>
                <div class="detail">
                    <div class="location">
                        <i class="fa-solid fa-location-dot"></i>
                        <span>Landmark, City, UAE</span>
                    </div>
                    <div class="details-row">
                        <div class="box">
                            <img src="{{ asset('user/images/bedroom.png') }}" alt="">
                            <span>Bedroom
                                <strong>3</strong>
                            </span>
                        </div>
                        <div class="box">
                            <img src="{{ asset('user/images/bath-room.png') }}" alt="">
                            <span>Bathroom
                                <strong>3</strong>
                            </span>
                        </div>
                        <div class="box">
                            <img src="{{ asset('user/images/area.png') }}" alt="">
                            <span>Area
                                <strong>3250</strong>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-wrapper">
            <div class="box">
                <div class="image">
                    <div class="text">
                        <h6>Lorem ipsum dolo sitamet. Lorem ipsum dolo sit amet.</h6>
                        <a href="./property-details.php">Know More >></a>
                    </div>
                    <img src="{{ asset('user/images/asset-image1.png') }}" alt="">
                </div>
                <div class="detail">
                    <div class="location">
                        <i class="fa-solid fa-location-dot"></i>
                        <span>Landmark, City, UAE</span>
                    </div>
                    <div class="details-row">
                        <div class="box">
                            <img src="{{ asset('user/images/bedroom.png') }}" alt="">
                            <span>Bedroom
                                <strong>3</strong>
                            </span>
                        </div>
                        <div class="box">
                            <img src="{{ asset('user/images/bath-room.png') }}" alt="">
                            <span>Bathroom
                                <strong>3</strong>
                            </span>
                        </div>
                        <div class="box">
                            <img src="{{ asset('user/images/area.png') }}" alt="">
                            <span>Area
                                <strong>3250</strong>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-wrapper">
            <div class="box">
                <div class="image">
                    <div class="text">
                        <h6>Lorem ipsum dolo sitamet. Lorem ipsum dolo sit amet.</h6>
                        <a href="./property-details.php">Know More >></a>
                    </div>
                    <img src="{{ asset('user/images/asset-image1.png') }}" alt="">
                </div>
                <div class="detail">
                    <div class="location">
                        <i class="fa-solid fa-location-dot"></i>
                        <span>Landmark, City, UAE</span>
                    </div>
                    <div class="details-row">
                        <div class="box">
                            <img src="{{ asset('user/images/bedroom.png') }}" alt="">
                            <span>Bedroom
                                <strong>3</strong>
                            </span>
                        </div>
                        <div class="box">
                            <img src="{{ asset('user/images/bath-room.png') }}" alt="">
                            <span>Bathroom
                                <strong>3</strong>
                            </span>
                        </div>
                        <div class="box">
                            <img src="{{ asset('user/images/area.png') }}" alt="">
                            <span>Area
                                <strong>3250</strong>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-wrapper">
            <div class="box">
                <div class="image">
                    <div class="text">
                        <h6>Lorem ipsum dolo sitamet. Lorem ipsum dolo sit amet.</h6>
                        <a href="./property-details.php">Know More >></a>
                    </div>
                    <img src="{{ asset('user/images/asset-image1.png') }}" alt="">
                </div>
                <div class="detail">
                    <div class="location">
                        <i class="fa-solid fa-location-dot"></i>
                        <span>Landmark, City, UAE</span>
                    </div>
                    <div class="details-row">
                        <div class="box">
                            <img src="{{ asset('user/images/bedroom.png') }}" alt="">
                            <span>Bedroom
                                <strong>3</strong>
                            </span>
                        </div>
                        <div class="box">
                            <img src="{{ asset('user/images/bath-room.png') }}" alt="">
                            <span>Bathroom
                                <strong>3</strong>
                            </span>
                        </div>
                        <div class="box">
                            <img src="{{ asset('user/images/area.png') }}" alt="">
                            <span>Area
                                <strong>3250</strong>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-wrapper">
            <div class="box">
                <div class="image">
                    <div class="text">
                        <h6>Lorem ipsum dolo sitamet. Lorem ipsum dolo sit amet.</h6>
                        <a href="./property-details.php">Know More >></a>
                    </div>
                    <img src="{{ asset('user/images/asset-image1.png') }}" alt="">
                </div>
                <div class="detail">
                    <div class="location">
                        <i class="fa-solid fa-location-dot"></i>
                        <span>Landmark, City, UAE</span>
                    </div>
                    <div class="details-row">
                        <div class="box">
                            <img src="{{ asset('user/images/bedroom.png') }}" alt="">
                            <span>Bedroom
                                <strong>3</strong>
                            </span>
                        </div>
                        <div class="box">
                            <img src="{{ asset('user/images/bath-room.png') }}" alt="">
                            <span>Bathroom
                                <strong>3</strong>
                            </span>
                        </div>
                        <div class="box">
                            <img src="{{ asset('user/images/area.png') }}" alt="">
                            <span>Area
                                <strong>3250</strong>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-wrapper">
            <div class="box">
                <div class="image">
                    <div class="text">
                        <h6>Lorem ipsum dolo sitamet. Lorem ipsum dolo sit amet.</h6>
                        <a href="./property-details.php">Know More >></a>
                    </div>
                    <img src="{{ asset('user/images/asset-image1.png') }}" alt="">
                </div>
                <div class="detail">
                    <div class="location">
                        <i class="fa-solid fa-location-dot"></i>
                        <span>Landmark, City, UAE</span>
                    </div>
                    <div class="details-row">
                        <div class="box">
                            <img src="{{ asset('user/images/bedroom.png') }}" alt="">
                            <span>Bedroom
                                <strong>3</strong>
                            </span>
                        </div>
                        <div class="box">
                            <img src="{{ asset('user/images/bath-room.png') }}" alt="">
                            <span>Bathroom
                                <strong>3</strong>
                            </span>
                        </div>
                        <div class="box">
                            <img src="{{ asset('user/images/area.png') }}" alt="">
                            <span>Area
                                <strong>3250</strong>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!----------------------------
            Footer Section Start 
         ----------------------------->
@include('user.footer')
<!----------------------------
            Footer Section End 
         ----------------------------->