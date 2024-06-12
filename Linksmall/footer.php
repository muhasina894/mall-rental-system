<!-- footer -->
<section class="w3l-footer-29-main" id="footer">
    <div class="footer-29">
        <div class="container pb-lg-3">
            
            <div class="row bottom-copies">
                <p class="copy-footer-29 col-lg-8">© 2023 Links Mall. All rights reserved | Design by <a
                    href="https://w3layouts.com">Links Mall</a></p>
                <ul class="list-btm-29 col-lg-4">
                    <li><a href="#link">Privacy policy</a></li>
                    <li><a href="#link">Terms of service</a></li>
                    <li><select name="carlist" form="carform">
                            <option value="Language">English</option>
                            <option value="Language">France</option>
                            <option value="Language">Spanish </option>
                            <option value="Language">Russian</option>
                        </select>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" class="bg-primary" title="Go to top">
        <span class="fa fa-angle-up"></span>
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- /move top -->
</section>