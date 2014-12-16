
                function chkform() {// form validation
                    if ((document.getElementById("name").value == 'Enter Name') || (document.getElementById("name").value == '')) {
                        alert('Please Enter Name');
                        document.getElementById("name").value == '';
                        document.getElementById("name").focus();
                        return false;
                    }
                    if ((document.getElementById("contact").value == 'Enter Contact Number') || (document.getElementById("contact").value == '')) {
                        alert('Please Enter Contact Number');
                        document.getElementById("contact").value == '';
                        document.getElementById("contact").focus();
                        return false;
                    }
                    if (!hasOnlyNumericH("Contact Number", document.getElementById("contact").value)) {
                        document.getElementById("contact").focus();
                        return false;
                    }
                    if ((document.getElementById("email").value == 'Enter Email Address') || (document.getElementById("email").value == '')) {
                        alert('Please Enter Email Address');
                        document.getElementById("email").value == '';
                        document.getElementById("email").focus();
                        return false;
                    }
                    if (!validateEmailT('E-mail Address', document.getElementById('email').value)) {
                        document.getElementById('email').focus();
                        return false;
                    }
                    if ((document.getElementById("security_code").value == 'Security Code') || (document.getElementById("security_code").value == '')) {
                        alert('Please Enter Security Code');
                        document.getElementById("security_code").value == '';
                        document.getElementById("security_code").focus();
                        return false;
                    }
                };
