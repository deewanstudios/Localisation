<div id="middle">
    <div class="middle-part-in">
       
        <div class="wrapper-1">
        	 <!-- <?php
		echo $content;
        ?> -->
            <h1 class="h1-title">Contact Us</h1>
            <div class="contact-left ">
                <p>
                    For a quote or more information, please call or email us.
                    <br>
                    Otherwise fill in the below form and we will get right back to you.
                </p>
                <div class="clear"></div>
                <form action="contactController.php" method="post" onsubmit="return chkform();">
                    <input type="hidden" name="mode" value="contact" autocomplete="off">
                    <div class="contact-form">
                        <div style=" padding-bottom:5px; color:#0b0033" id="msg"></div>
                        <p>
                            Name <span>(Required)</span>
                            <br>
                            <input name="info[name]" id="name" type="text" class="contact-inp" autocomplete="off">
                        </p>
                        <p>
                            Contact Number
                            <br>
                            <input name="info[contact]" type="text" id="contact" class="contact-inp" autocomplete="off">
                        </p>
                        <p>
                            Email Address <span>(Required)</span>
                            <br>
                            <input name="info[email]" id="email" type="text" class="contact-inp" autocomplete="off">
                        </p>
                        <p>
                            Message <span>(Required)</span>
                            <br>
                            <textarea name="info[message]" id="message" cols="45" rows="5" class="text-area"></textarea>
                        </p>
                        <p class="con-sub">
                            <input type="submit" value="" class="sub-a" autocomplete="off">
                        </p>
                    </div>
                </form>
                <div class="clear"></div>
            </div>
            <div class="contact-right">
                <div class="general-enq">
                    <h4>General Enquiries</h4>
                    <p class="general-fone">
                        Tel: +44 (0) 20 8969 3435
                    </p>
                    <p class="general-email">
                        <a href="mailto:hello@thesbdc.co.uk">hello@thesbdc.co.uk</a>
                    </p>
                </div>
                <div class="followus">
                    <h4>Follow Us</h4>
                    <p class="fb">
                        <a href="http://www.facebook.com/TheSmallBusinessDeliveryCompany" target="_blank">Facebook</a>
                    </p>
                    <p class="tw">
                        <a href="https://twitter.com/The_SBDC" target="_blank">Twitter</a>
                    </p>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>


 <!-- Dont forget to put this function in an independent javascript file -->
    <script type="text/javascript">
        function chkform() {// form validation
            if (isEmpty("Name", document.getElementById("name").value)) {
                document.getElementById("name").focus();
                return false;
            }
            if (document.getElementById("contact").value != '') {
                if (!hasOnlyNumeric("Contact Number", document.getElementById("contact").value)) {
                    document.getElementById("contact").focus();
                    return false;
                }
            }
            if (isEmpty("E-mail Address", document.getElementById("email").value)) {
                document.getElementById("email").focus();
                return false;
            }
            if (!validateEmail('E-mail Address', document.getElementById('email').value)) {
                document.getElementById('email').focus();
                return false;
            }
            if (isEmpty("Message", document.getElementById("message").value)) {
                document.getElementById("message").focus();
                return false;
            }
        };
    </script>

</div>