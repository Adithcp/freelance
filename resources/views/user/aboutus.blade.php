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
    background-image: url("user/images/aboutus-banner.jpg");
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
        <h2>ABOUT US</h2>
    </div>
</div>


<!-- About Us Start -->
<div class="container aboutUs">
    <img src="{{ asset('user/images/logo-about.png') }}" alt="" class=" " data-aos="fade-up">
    <div class="text  " data-aos="fade-up">
        <h2>ABOUT ADANA</h2>
        <strong>Your Premier Real Estate and Asset Sales Partner.</strong>
        <p>Welcome to Adana, where we redefine real estate excellence. Our dedicated team brings unparalleled expertise
            to every transaction, ensuring a seamless experience whether you're buying, selling, or managing assets. At
            Adana, client satisfaction is our priority, driving us to deliver tailored solutions that meet your unique
            needs. <br><br>
            At Adana, integrity and industry insights are the cornerstones of our service. We're committed to exceeding
            expectations and setting new standards in the real estate industry. Experience the difference with Adana:
            our personalized approach, combined with expertise, is designed to make your real estate journey smooth and
            successful.</p>

    </div>
</div>

<!-- vision and mission -->
<div class="container-fuild aboutus-vision-mision">
    <div class="container">
        <div class="row">
            <div class="box">
                <div class="head">
                    <img src="{{ asset('user/images/vision.png') }}" alt="">
                    <h4>VISION</h4>
                </div>
                <p>Our vision at Adana is to stand as the pinnacle of real estate excellence. We aspire to lead the
                    industry by setting new benchmarks for integrity, expertise, and commitment to your success. We
                    envision a future where Adana is synonymous with trust, and exceptional service in the real estate
                    landscape.</p>
            </div>
            <div class="box">
                <div class="head">
                    <img src="{{ asset('user/images/mission.png') }}" alt="">
                    <h4>MISSION</h4>
                </div>
                <p>At Adana, our mission is to be the guiding force in transforming real estate experiences. We aim to
                    achieve this by delivering unparalleled service, and customized solutions, ensuring that you can put
                    your trust in us to receive satisfactory investment at every step.</p>
            </div>
        </div>
    </div>
</div>

<!-- our people area -->
<div class="our-people container">
    <h2>OUR PEOPLE</h2>
    <div class="row">
        <div class="box">
            <img src="{{ asset('user/images/chairman-photo-small.png') }}" alt="">
            <h6>MUHAMMED MEPPOYIL</h6>
            <p>Founder & Chairman</p>
            <a href="./meppoyil.php">Read Full Profile</a>
        </div>
        <div class="box">
            <img src="{{ asset('user/images/khaled.png') }}" alt="">
            <h6>H.H KHALED BIN MOHAMED BIN SALEM ALQASIMI</h6>
            <p>Patron</p>
            <a href="./khaled.php">Read Full Profile</a>
        </div>


    </div>
</div>

<!-- Achieving Vision -->
<div class="container achieving-vision">
    <h2>ACHIEVING OUR VISION</h2>
    <div class="row">
        <div class="box">
            <div class="head">
                <img src="{{ asset('user/images/goal 2.png') }}" alt="">
                <h6>Personalized Solutions</h6>
            </div>
            <p>At Adana, we are dedicated to transforming the real estate scene with tailored solutions. Our unwavering
                commitment to personalized service ensures continuous evolution, providing clients with unique
                experiences and customized approaches to property transactions.</p>
        </div>
        <div class="box">
            <div class="head">
                <img src="{{ asset('user/images/goal 2.png') }}" alt="">
                <h6>Client-Centric Approach</h6>
            </div>
            <p>Achieving our vision revolves around a steadfast commitment to our clients. By placing their needs at the
                forefront, we foster lasting relationships built on trust and transparency. Understanding their goals
                enables us to tailor our services, ensuring satisfaction and exceeding expectations at every turn.</p>
        </div>
        <div class="box">
            <div class="head">
                <img src="{{ asset('user/images/goal 2.png') }}" alt="">
                <h6>Industry Leadership</h6>
            </div>
            <p>Becoming the embodiment of our vision entails industry leadership. We aim not just to follow but to set
                trends, raise standards, and redefine excellence. Through continuous learning, proactive strategies, and
                a forward-thinking mindset, we position ourselves as trailblazers in the real estate sector.</p>
        </div>
        <div class="box">
            <div class="head">
                <img src="{{ asset('user/images/goal 2.png') }}" alt="">
                <h6>Global Impact</h6>
            </div>
            <p>Adana's vision extends beyond local excellence, we aspire to make a global impact. By expanding our
                reach, fostering partnerships, and embracing diverse perspectives, we seek to influence and elevate the
                real estate industry on a worldwide scale. Our vision is to leave a legacy of personalized, trust, and
                unparalleled real estate service.</p>
        </div>
    </div>
</div>

<!-- Testimonial Start -->
<div class="container testimonial">
    <h2>TESTIMONIALS</h2>
    <div class="row">
        <div class="box">
            <h6>Name of the customer</h6>
            <span>Designation</span>
            <p>Adana made our investment journey smooth and profitable. Their expertise in real estate guided us to
                lucrative opportunities, and their personalized approach ensured our needs were met at every step.
                Trustworthy, professional, and dedicated—Adana truly delivers excellence in every transaction.</p>
        </div>
        <div class="box">
            <h6>Name of the customer</h6>
            <span>Designation</span>
            <p>Partnering with Adana for our joint venture was a game-changer. Their collaborative spirit and strategic insights transformed our project into a success. Their commitment to our shared goals was evident throughout—making Adana the ultimate partner for any forward-looking venture.</p>
        </div>
        <div class="box">
            <h6>Name of the customer</h6>
            <span>Designation</span>
            <p>Adana turned my investment aspirations into reality. Their keen insights into the market helped me identify lucrative opportunities. Their personalized approach and dedication ensured a smooth investment journey. Adana's expertise and professionalism make them the ideal partner for anyone looking to maximize their investments in real estate.</p>
        </div>
        <div class="box">
            <h6>Name of the customer</h6>
            <span>Designation</span>
            <p>Contacting Adana was the best decision I made. Their team is very supportive and provided exceptional guidance addressing all my inquiries promptly. Their professionalism and dedication in handling my real estate needs left me impressed. Adana is undoubtedly the go-to choice for anyone seeking reliable and top-notch service.</p>
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