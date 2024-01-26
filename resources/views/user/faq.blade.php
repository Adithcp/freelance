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
        <h2>FAQ</h2>
    </div>
</div>




<div class="terms container">
    <h6>1. Can I sell my property through Adana Real Estate?</h6>
    <p>We facilitate both buying and selling. Reach out to us, and our experts will guide you through the process of
        listing and selling your property.</p>
    <h6>2. What sets Adana Real Estate apart from other real estate agencies?</h6>
    <p>No agent. No broker. No commissions.</p>
    <p>We offer a personalized experience, focusing on client needs, and ensuring transparency, all while maintaining a
        hassle-free system.</p>
    <h6>3. Are there any additional services or resources Adana provides to clients?</h6>
    <p>Yes, apart from property transactions, we offer guidance on property valuation, market trends, legal aspects, and
        other real estate-related consultations to ensure our clients make informed decisions.</p>

</div>
<!----------------------------
            Footer Section Start 
         ----------------------------->
@include('user.footer')
<!----------------------------
            Footer Section End 
         ----------------------------->