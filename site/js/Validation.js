function checkTrim(txtString)
{
    txtString = LTrim(txtString);
    txtString = RTrim(txtString);
    return txtString;
}

//returns the string after deleting the trailing spaces
function LTrim(txtString) 
{
    ctr = 0;
    while( ctr < txtString.length && (txtString.substring(ctr,ctr+1) == " "))
    {
        ctr=ctr+1;
    }
    return txtString.substring(ctr);
}

// returns the string after deleting the leading spaces
function RTrim(txtString) 
{
    ctr = txtString.length;
    while( ctr > 0  && (txtString.substring(ctr,ctr-1) == " "))
    {
        ctr = ctr - 1;
    }
    return txtString.substring(0,ctr);
}

//Validation for field which should not be empty
function isEmpty(fieldname,fieldvalue)
{
    
    var str=checkTrim(fieldvalue)
    if(str.length==0)
    {
        document.getElementById("msg").innerHTML=(fieldname + ' cannot be blank ');
        return true;
    }
    return false;
}

//Validation for field which can allow only alphabets
function hasOnlyAlphabets(fieldname , fieldvalue)
{
    var str = fieldvalue;
    i = 0;
    while(i < str.length)
    {
        if(!(((str.charAt(i) >= 'a') && (str.charAt(i) <= 'z'))||((str.charAt(i) >= 'A') && (str.charAt(i) <= 'Z'))))
        {
            alert(fieldname+' can contain only alphabets\n\nValid Characters: (A to Z),(a to z) ');
            return false;
        }
        i++;
    }
    return true;
}

function hasOnlyAlphabetsWithSpace(fieldname , fieldvalue)
{
    var str = fieldvalue;
    i = 0;
    while(i < str.length)
    {
        if(!(((str.charAt(i) >= 'a') && (str.charAt(i) <= 'z'))||((str.charAt(i) >= 'A') && (str.charAt(i) <= 'Z'))|| (str.charAt(i) == " ")))
        {
            alert(fieldname+' can contain only alphabets\n\nValid Characters: (A to Z),(a to z) And Space ');
            return false;
        }
        i++;
    }
    return true;
}

//Validation for field which allows only numbers
function hasOnlyNumeric(fieldname , fieldvalue)
{
    var str = fieldvalue;
    var i = 0;
    while(i < str.length)
    {
        if(!((str.charAt(i) >= "0") && (str.charAt(i) <= "9")))
        {
            document.getElementById("msg").innerHTML=(fieldname+' can contain only numeric value');
            return false;
        } else {
            i = i + 1;
        }
    }
    return true;
}

//Validation for field which allows only numbers
function hasOnlyNumericH(fieldname , fieldvalue)
{
    var str = fieldvalue;
    var i = 0;
    while(i < str.length)
    {
        if(!((str.charAt(i) >= "0") && (str.charAt(i) <= "9")))
        {
            alert(fieldname+' can contain only numeric value');
            return false;
        } else {
            i = i + 1;
        }
    }
    return true;
}

//Check for Valid Email.
function validateEmail(fieldname,frmField) {
    
    //Validating the email field
    //var emailRegxp = /^([\w]+)(.[\w]+){1,4}@([\w]+)(.[\w]+)([.][\w]{2,3}){1,2}$/;
    var emailRegxp = /^([\w-']+(?:\.[\w-']+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/ ;
    //var emailRegxp = /^[A-Za-z][A-Za-z0-9_'-.]+((?:\.[\w-']+)*)@([\w-]+(?:\.[\w-]+)*)(\.[\w]{2,3}){1,2}$/;
    if (!frmField.match(emailRegxp)) {
       document.getElementById("msg").innerHTML=('Invalid '+fieldname+' ');
        return (false);
    }
    return(true);
}

//Check for Valid Email.
function validateEmailT(fieldname,frmField) {
    
    //Validating the email field
    //var emailRegxp = /^([\w]+)(.[\w]+){1,4}@([\w]+)(.[\w]+)([.][\w]{2,3}){1,2}$/;
    var emailRegxp = /^([\w-']+(?:\.[\w-']+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/ ;
    //var emailRegxp = /^[A-Za-z][A-Za-z0-9_'-.]+((?:\.[\w-']+)*)@([\w-]+(?:\.[\w-]+)*)(\.[\w]{2,3}){1,2}$/;
    if (!frmField.match(emailRegxp)) {
        alert('Invalid '+fieldname+' ');
        return (false);
    }
    return(true);
}

//returns true if it is a valid phone Number
function isValidPhoneNO(fieldname , fieldvalue){
    
  var str = fieldvalue;
  var checkOK = "0123456789-";
  var checkStr = checkTrim(str);
  var allValid = true;
  var allNum = "";
  
  for (i = 0;  i < checkStr.length;  i++){
        ch = checkStr.charAt(i);
        for (j = 0;  j < checkOK.length;  j++)
          if (ch == checkOK.charAt(j))
            break;
        if (j == checkOK.length){
          allValid = false;
          break;
        }
        if (ch != ",")
          allNum += ch;
  }
  if (allValid)
      return (true);
  else
      alert('Please enter valid '+fieldname +'\n\n e.g. XXX-XXX-XXXX OR XXXXXXXXXX');
  return (false);
}

function validate_url(fieldvalue) {
    
     var theurl = checkTrim(fieldvalue);
     var tomatch = /http:\/\/[A-Za-z0-9\.-]{3,}\.[A-Za-z]{3}/
     if (tomatch.test(theurl)){
         //window.alert("URL OK.");
         return true;
     } else {
         document.getElementById("msg").innerHTML="URL invalid. Try again.";
         return false; 
     }
}
function isConfirmpass(fieldname1,fieldname2)
{
    if(fieldname1!=fieldname2)
    {
        document.getElementById("msg").innerHTML="Passwords do not match.";
        return true;
    }
    return false;
}



//Validation for field which should not be empty
function isEmpty2(fieldname,fieldvalue)
{
    
    var str=checkTrim(fieldvalue)
    if(str.length==0)
    {
        document.getElementById("msg2").innerHTML=(fieldname + ' cannot be blank ');
        return true;
    }
    return false;
}

//Check for Valid Email.
function validateEmail2(fieldname,frmField) {
    
    //Validating the email field
    //var emailRegxp = /^([\w]+)(.[\w]+){1,4}@([\w]+)(.[\w]+)([.][\w]{2,3}){1,2}$/;
    var emailRegxp = /^([\w-']+(?:\.[\w-']+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/ ;
    //var emailRegxp = /^[A-Za-z][A-Za-z0-9_'-.]+((?:\.[\w-']+)*)@([\w-]+(?:\.[\w-]+)*)(\.[\w]{2,3}){1,2}$/;
    if (!frmField.match(emailRegxp)) {
       document.getElementById("msg2").innerHTML=('Invalid '+fieldname+' ');
       return (false);
    }
    return(true);
}