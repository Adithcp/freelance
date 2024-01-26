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
        <h2>Privacy Policy</h2>
    </div>
</div>




<div class="terms container">
    <p>Thank you for visiting Adana Real Estate's website. This Privacy Policy describes how we collect, use, and
        safeguard your personal information on our website.</p>
        <h6>Information We Collect</h6>
        <p>We may collect personal information such as your name, email address, phone number, address, and other details provided by you when you interact with our website, subscribe to our newsletter, fill out forms, or communicate with us.</p>
        <h6>How We Use Your Information</h6>
        <p>We use the information collected to provide you with services, respond to inquiries, improve our website, personalize your experience, send periodic emails (e.g., newsletters, updates), and for marketing purposes, only if you have provided consent.</p>
        <h6>Data Sharing and Disclosure</h6>
        <p>We do not sell, trade, or otherwise transfer your personal information to outside parties unless we provide you with advance notice or with your consent. However, we may share information with trusted third parties who assist us in operating our website, conducting our business, or servicing you.</p>
        <h6>Data Security</h6>
        <p>
We implement security measures to maintain the safety of your personal information when you enter, submit, or access your personal information.</p>
<h6>Your Rights</h6>
<p>You have the right to access, correct, amend, or delete any personal information we hold about you. You may also opt out of receiving any future communications from us at any time.</p>
<h6>Cookies</h6>
<p>Our website may use cookies and other tracking technologies to enhance your experience. You can modify your browser settings to decline cookies or receive notifications when cookies are being used.</p>
<h6>Third-Party Links</h6>
<p>Our website may contain links to third-party websites. We are not responsible for the privacy practices or content of these sites. We encourage our users to be aware when they leave our site and to read the privacy statements of any other site that collects personally identifiable information.</p>
<h6>Changes to This Privacy Policy</h6>
<p>We reserve the right to update or change our Privacy Policy at any time. Any changes will be effective immediately upon posting the revised policy on this page.
</p>
</div>
<!----------------------------
            Footer Section Start 
         ----------------------------->
@include('user.footer')
<!----------------------------
            Footer Section End 
         ----------------------------->