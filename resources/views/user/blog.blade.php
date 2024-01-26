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
    background-image: url("user/images/property-details.png");
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
@inclue('user.header')
    <!----------------------------
            Header Section End 
         ----------------------------->
    <div class="bannerText " data-aos="fade-up" data-aos-duration="3000">
        <h2>BLOG, NEWS & UPDATES</h2>
    </div>
</div>

<div class="properties container">
    <div class="navbar-row">
        <ul class="navbar">
            <li><a href="{{ route('home') }}"><i class="fa-solid fa-house"></i></a></li>
            <li>></li>
            <li><span>> Blog & News</span></li>
        </ul>
        <div class="sort">
            <span>Sort: </span>
            <p>Article</p>
            <p>News & Updates</p>
        </div>
    </div>
    <div class="blogWrapper">
        <div class="blogRow">
            <img src="{{ asset('images/image1.png') }}" alt="">
            <div class="blogText">
                <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam convallis</h5>
                <span>24 Jan 2023</span>
                <p>Donec auctor enim eu quam commodo mollis. Ut lacinia, ante et condimentum malesuada, nisi justo
                    ullamcorper metus, et consequat eros felis et ex. Curabitur eu pretium sapien, a ornare orci.
                    Praesent et dignissim ex. Nulla molestie eros a finibus scelerisque. Integer dapibus in purus nec
                    dignissim. Vivamus sollicitudin interdum enim, vel placerat nisi sollicitudin nec. Mauris id odio id
                    est ullamcorper tristique.</p>
                <div class="link">
                    <a href="#">Read full story →</a>
                </div>
            </div>
        </div>
        <div class="blogRow">
            <img src="{{ asset('images/image1.png') }}" alt="">
            <div class="blogText">
                <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam convallis</h5>
                <span>24 Jan 2023</span>
                <p>Donec auctor enim eu quam commodo mollis. Ut lacinia, ante et condimentum malesuada, nisi justo
                    ullamcorper metus, et consequat eros felis et ex. Curabitur eu pretium sapien, a ornare orci.
                    Praesent et dignissim ex. Nulla molestie eros a finibus scelerisque. Integer dapibus in purus nec
                    dignissim. Vivamus sollicitudin interdum enim, vel placerat nisi sollicitudin nec. Mauris id odio id
                    est ullamcorper tristique.</p>
                <div class="link">
                    <a href="#">Read full story →</a>
                </div>
            </div>
        </div>
        <div class="blogRow">
            <img src="{{ asset('images/image1.png') }}" alt="">
            <div class="blogText">
                <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam convallis</h5>
                <span>24 Jan 2023</span>
                <p>Donec auctor enim eu quam commodo mollis. Ut lacinia, ante et condimentum malesuada, nisi justo
                    ullamcorper metus, et consequat eros felis et ex. Curabitur eu pretium sapien, a ornare orci.
                    Praesent et dignissim ex. Nulla molestie eros a finibus scelerisque. Integer dapibus in purus nec
                    dignissim. Vivamus sollicitudin interdum enim, vel placerat nisi sollicitudin nec. Mauris id odio id
                    est ullamcorper tristique.</p>
                <div class="link">
                    <a href="#">Read full story →</a>
                </div>
            </div>
        </div>
    </div>

    <div class="pagination-centre">
        <ul class="pagination">
            <li>
                &lt;&lt; </li>
            <li>1</li>
            <li>2</li>
            <li>3</li>
            <li>4</li>
            <li>..</li>
            <li>&gt;&gt;</li>

        </ul>
    </div>
</div>
<div class="featurePost container">
    <h2>FEATURED POSTS</h2>
    <div class="row">
        <div class="box">
            <h6>Lorem ipsum dolor sit amet, cons ectetur adipiscing elit. Nullam.</h6>
            <span>24 Jan 2023</span>
            <img src="{{ asset('images/image1.png') }}" alt="">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam convallis enim ut arcu efficitur
                suscipit. Nulla ultrices velit tortor, a rhoncus mi semper Nullam convallis enim ut arcu suscipit....
            </p>
            <div class="link">
                <a href="#">Read full story →</a>
            </div>
        </div>
        <div class="box">
            <h6>Lorem ipsum dolor sit amet, cons ectetur adipiscing elit. Nullam.</h6>
            <span>24 Jan 2023</span>
            <img src="{{ asset('images/image1.png') }}" alt="">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam convallis enim ut arcu efficitur
                suscipit. Nulla ultrices velit tortor, a rhoncus mi semper Nullam convallis enim ut arcu suscipit....
            </p>
            <div class="link">
                <a href="#">Read full story →</a>
            </div>
        </div>
        <div class="box">
            <h6>Lorem ipsum dolor sit amet, cons ectetur adipiscing elit. Nullam.</h6>
            <span>24 Jan 2023</span>
            <img src="{{ asset('images/image1.png') }}" alt="">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam convallis enim ut arcu efficitur
                suscipit. Nulla ultrices velit tortor, a rhoncus mi semper Nullam convallis enim ut arcu suscipit....
            </p>
            <div class="link">
                <a href="#">Read full story →</a>
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