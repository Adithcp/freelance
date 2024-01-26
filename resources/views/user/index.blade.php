<!----------------------------
            Header Section Start 
         ----------------------------->
@include('user.layout')
        
<!----------------------------
            Header Section End 
         ----------------------------->


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
        <h2>Adana, a complete Real Estate management solution</h2>
        <span>Real Estate Made Real Simple!</span>
        <a href="{{ route('properties') }}">Properties »</a>
    </div>
</div>

<!-- Practice Area Start -->
<div class="container-fluid practiceArea">
    <div class="container">
        <h1 class=" " data-aos="fade-up"> PRACTICE AREAS</h1>
        <div class="row">
            <div class="col-6  " data-aos="fade-up">
                <img src="{{ asset('user/images/Commercial.png') }}" alt="">
                <div class="text">
                    <h5>COMMERCIAL</h5>
                    <p>We are an expert in commercial real estate, including retail spaces, offices, and industrial
                        properties. We assist in leasing, sales, and investment strategies tailored to your business and
                        personal goals.</p>
                </div>
            </div>
            <div class="col-6  " data-aos="fade-up">
                <img src="{{ asset('user/images/Residntial.png') }}" alt="">
                <div class="text">
                    <h5>RESIDENTIAL</h5>
                    <p>Dedicated to helping individuals and families find their ideal homes. From buying and selling to
                        rentals and property management, we prioritize all your residential needs!</p>
                </div>
            </div>
            <div class="col-6 " data-aos="fade-up">
                <img src="{{ asset('user/images/plot.png') }}" alt="">
                <div class="text">
                    <h5>LAND</h5>
                    <p>We also specialize in land transactions, acquisitions, and development opportunities. Our
                        analytical approach ensures the best use and value of your land assets.</p>
                </div>
            </div>
            <div class="col-6 " data-aos="fade-up">
                <img src="{{ asset('user/images/estate.png') }}" alt="">
                <div class="text">
                    <h5>ESTATES</h5>
                    <p>We handle the high-value and luxury properties with discretion and expertise. Our services cater
                        to clients seeking exceptional estate properties and their unique requirements.</p>
                </div>
            </div>
            <div class="col-6 " data-aos="fade-up">
                <img src="{{ asset('user/images/plan.png') }}" alt="">
                <div class="text">
                    <h5>OFF PLAN</h5>
                    <p>We can help you through off-plan purchases, providing insights, market reports, and analysis and
                        managing the acquisition process from pre-sale to completion to ensure a seamless experience for
                        you.</p>
                </div>
            </div>
            <div class="col-6 " data-aos="fade-up">
                <img src="{{ asset('user/images/portfolio.png') }}" alt="">
                <div class="text">
                    <h5>PORTFOLIO MANAGEMENT</h5>
                    <p>Offering comprehensive portfolio oversight, from acquisition to diversification. Our strategies
                        optimize your real estate investments, ensuring growth and stability.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- About Us Start -->
<div class="container aboutUs">
    <img src="{{ asset('user/images/adenaImage.png') }}" alt="" class=" " data-aos="fade-up">
    <div class="text  " data-aos="fade-up">
        <h2>WHY ADANA</h2>
        <strong>Because Your Real Estate Investment Journey Deserves Exceptional</strong>
        <p>
            Adana Real Estates and Asset Sales Management brings top-notch expertise to the real estate market. We
            specialize in making property transactions smooth and hassle-free, ensuring you're happy every step of the
            way. Whether buying, or selling, or needing smart asset management, we're here to guide you through it all.
            Adana is your ideal partner to invest smartly in real estate through precision, commitment, and extensive
            expertise.</p>
        <div class="btn"><a href="./aboutus.php">Know more »</a></div>
    </div>
</div>

<!-- Vission & Mission Start -->
<div class="vissionMission container-fluid">
    <div class="container">
        <div class="row">
            <div class="box  " data-aos="fade-up">
                <h4>VISION</h4>
                <div class="row">
                    <img src="{{ asset('user/images/vision.png') }}" alt="">
                    <div class="text">
                        <p>Our vision is to be the foremost leader in the real estate industry, recognized for our
                            integrity, expertise, and commitment to your success.</p>
                        <a href="./aboutus.php">Take me to the page →</a>
                    </div>
                </div>
            </div>
            <div class="box  " data-aos="fade-up">
                <h4>MISSION</h4>
                <div class="row">
                    <img src="{{ asset('user/images/mission.png') }}" alt="">
                    <div class="text">
                        <p>At Adana, our mission is to redefine real estate excellence by providing outstanding service,
                            and exclusive solutions.</p>
                        <a href="./aboutus.php">Take me to the page →</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- News and Articles Start -->
<div class="container newsArticle">
    <h2>NEWS & ARTICLES</h2>
    <div class="row">
        <div class="box  " data-aos="fade-up">
            <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam convallis</h6>
            <span>24 Jan 2023</span>
            <div class="row">
                <img src="{{ asset('user/images/image1.png') }}" alt="">
                <div class="text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam convallis enim ut arcu
                        efficitur suscipit. Nulla ultrices velit tortor, a rhoncus mi semper...</p>
                    <div class="linkRow">
                        <a href="#">Read full story →</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="box " data-aos="fade-up">
            <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam convallis</h6>
            <span>24 Jan 2023</span>
            <div class="row">
                <img src="{{ asset('user/images/image1.png') }}" alt="">
                <div class="text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam convallis enim ut arcu
                        efficitur suscipit. Nulla ultrices velit tortor, a rhoncus mi semper...</p>
                    <div class="linkRow">
                        <a href="#">Read full story →</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="box " data-aos="fade-up">
            <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam convallis</h6>
            <span>24 Jan 2023</span>
            <div class="row">
                <img src="{{ asset('user/images/image1.png') }}" alt="">
                <div class="text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam convallis enim ut arcu
                        efficitur suscipit. Nulla ultrices velit tortor, a rhoncus mi semper...</p>
                    <div class="linkRow">
                        <a href="#">Read full story →</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="box " data-aos="fade-up">
            <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam convallis</h6>
            <span>24 Jan 2023</span>
            <div class="row">
                <img src="{{ asset('user/images/image1.png') }}" alt="">
                <div class="text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam convallis enim ut arcu
                        efficitur suscipit. Nulla ultrices velit tortor, a rhoncus mi semper...</p>
                    <div class="linkRow">
                        <a href="#">Read full story →</a>
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