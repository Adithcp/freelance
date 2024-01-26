 <!-- Footer Start -->
 <footer class="container-fluid">
     <div class="container">
         <div class="row">
             <div class="leftMd">
                <a href="./index.php"> <img src="{{ asset('user/images/footer-logo.png') }}" alt="" class="footer-logo"></a>
                 <div class="addressRow">
                     <div class="left">
                         <p><img src="{{ asset('user/images/location-footer.png') }}" alt="">
                             Aspin Commercial Tower, <br> Office No: 1104, Trade Center 1, <br> Sheikh Zayed Road,
                             <br> Dubai,
                             United Arab Emirates
                         </p>
                         <p><img src="{{ asset('user/images/location-footer.png') }}" alt="">Room number, Landmark, <br> City, Rpad
                             name, <br> State, Saudi Arabia</p>

                         <p><img src="{{ asset('user/images/phone-icon.png') }}" alt="">
                             <span>
                                 <a href="tel:97145915866">+971 45915866</a>
                                 <a href="tel:971542479979">+971 5424 79979</a>
                             </span>
                         </p>
                         <p>
                             <img src="{{ asset('user/images/mail-icon.png') }}" alt="">
                             <a href="mailto:info@adanarealestate.com">info@adanarealestate.com</a>
                         </p>
                     </div>
                     <div class="right">
                         <ul>
                             <li><a href="{{ route('home') }}">Home</a></li>
                             <li><a href="{{ route('properties') }}">Properties</a></li>
                             <li><a href="{{ route('terms') }}">Terms of services</a></li>
                             <li><a href="{{ route('about-us') }} ">About us</a></li>
                             <li><a href="{{ route('faq') }}">FAQ</a></li>
                         </ul>
                     </div>
                 </div>
             </div>
             <div class="rightMd">
                 <h2>WRITE US</h2>
                 <p>For any general inquiries, please fill in the following contact form:</p>
                 <div class="formRow">
                     <div class="formBox">
                         <input type="text" name="subject" placeholder="subject">
                         <input type="text" name="name" placeholder="name">
                         <input type="email" name="email" placeholder="email">
                         <div class="btnRow">
                             <button type="submit">Send</button>
                         </div>
                     </div>
                     <div class="formBox right">
                         <textarea name="message">message</textarea>
                         <div class="btnRow">
                             <button type="submit">Send</button>
                         </div>
                     </div>

                 </div>
             </div>
         </div>
         <div class="copyrightRow">
             <span>© 2023 - Adana</span>
             <ul>
                 <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                 <li><a href="https://www.instagram.com/adana.realestate?igsh=MWFhMGlqdzdjYzFocg%3D%3D&utm_source=qr" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                 <li><a href="https://x.com/adana_re?s=11&t=ch8SQEaKkM6A_INRv4QRHQ" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>

                 <li><a href="https://youtube.com/@ADANAREALESTATE?si=o5DihCzlHMJ57q9J" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
                 <li><a href="https://www.linkedin.com/company/adana-real-estate/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>

             </ul>
         </div>
     </div>
 </footer>
 </body>
 <script src="https://kit.fontawesome.com/d764f5a9b2.js" crossorigin="anonymous"></script>

 <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

 <script>
// Get the element with class "preloader"
var preloaderElement = document.querySelector('.preeloder');

setTimeout(function() {
    // Add another class to the element
    preloaderElement.classList.add('hide');
}, 1000);
 </script>
 <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
 <script>
AOS.init();
 </script>

 <script>
var lang = document.querySelector('#lang');

$(lang).click(function() {
    $(".hover-content").addClass("show");
});
$(".hover-row").click(function() {
    $(".hover-content").removeClass("show");
});

 </script>

<script>
    const selectedAll = document.querySelectorAll(".wrapper-dropdown");

selectedAll.forEach((selected) => {
  const optionsContainer = selected.children[2];
  const optionsList = selected.querySelectorAll("div.wrapper-dropdown li");

  selected.addEventListener("click", () => {
    let arrow = selected.children[1];

    if (selected.classList.contains("active")) {
      handleDropdown(selected, arrow, false);
    } else {
      let currentActive = document.querySelector(".wrapper-dropdown.active");

      if (currentActive) {
        let anotherArrow = currentActive.children[1];
        handleDropdown(currentActive, anotherArrow, false);
      }

      handleDropdown(selected, arrow, true);
    }
  });

  // update the display of the dropdown
  for (let o of optionsList) {
    o.addEventListener("click", () => {
      selected.querySelector(".selected-display").innerHTML = o.innerHTML;
    });
  }
});

// check if anything else ofther than the dropdown is clicked
window.addEventListener("click", function (e) {
  if (e.target.closest(".wrapper-dropdown") === null) {
    closeAllDropdowns();
  }
});

// close all the dropdowns
function closeAllDropdowns() {
  const selectedAll = document.querySelectorAll(".wrapper-dropdown");
  selectedAll.forEach((selected) => {
    const optionsContainer = selected.children[2];
    let arrow = selected.children[1];

    handleDropdown(selected, arrow, false);
  });
}

// open all the dropdowns
function handleDropdown(dropdown, arrow, open) {
  if (open) {
    arrow.classList.add("rotated");
    dropdown.classList.add("active");
  } else {
    arrow.classList.remove("rotated");
    dropdown.classList.remove("active");
  }
}

</script>
 </html>