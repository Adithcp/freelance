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
    background-image: url("user/images/join-us.png");
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
        <h2>JOIN AND GROW WITH US</h2>
    </div>
</div>


<div class="join-with-us">

    <div class="container">
    <ul class="navbar">
        <li><a href="{{ route('home') }}"><i class="fa-solid fa-house"></i></a></li>
        <li>></li>
        <li><span>Join with us</span></li>

    </ul>
    </div>

    <div class="invest container">
        <div class="left">
            <img src="{{ asset('images/invest.png') }}" alt="">
        </div>
        <div class="right">
            <h2>ARE YOU LOOKING FOR AN
                <strong>INVESTMENT OPPORTUNITY?</strong>
            </h2>
            <p>Explore the finest investment prospects with Adana! Whether it's commercial spaces, residential, land
                ventures, or high-end estates, discover lucrative options tailored to your investment goals. Take the
                next step towards financial growth and stability—partner with Adana for your successful investment
                journey.</p>
            <a href="#">INVEST NOW</a>
        </div>
    </div>

    <div class="venture-wrapper container-fluid">

        <div class="venture container">
            <div class="left">
                <h2>START A
                    <strong>JOINT VENTURE</strong>
                    WITH US
                </h2>
                <p>Ready to embark on a prosperous venture? Collaborate with Adana to unlock new opportunities. Let's
                    merge
                    expertise and resources to create remarkable projects. Join us in building a brighter future
                    together.
                    Connect with Adana today and initiate a joint venture that paves the way for mutual success.</p>
                <a href="#">JOIN NOW</a>
            </div>
            <div class="right">
                <img src="{{ asset('images/venture.png') }}" alt="">
            </div>
        </div>
    </div>
    <div class="invest container">
        <div class="left">
            <img src="{{ asset('images/career.png') }}" alt="">
        </div>
        <div class="right">
            <h2>START
                <strong>YOUR CAREER</strong> WITH US

            </h2>
            <p>Looking for a rewarding career in real estate? Adana welcomes passionate individuals seeking growth and
                development. Join a dynamic team that values dedication and fosters professional development. Begin your
                journey toward a fulfilling career—explore exciting opportunities with Adana. Apply now and become part
                of our success story.</p>
            <a href="#">APPLY NOW</a>
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