function regajax(){

    let phone=document.getElementById('phone').value;

    let xhttp=new XMLHttpRequest();
    xhttp.open("GET", '../controller/regajaxtest.php?phone='+phone,true);
    xhttp.send();

    xhttp.onreadystatechange=function(){
        if(this.readyState==4 & this.status==200){
            alert(this.responseText);
        }
    }
    
}

function dfajax(){

    let phone=document.getElementById('phone').value;

    let xhttp=new XMLHttpRequest();
    xhttp.open("GET", '../controller/regajax.php?phone='+phone,true);
    xhttp.send();

    xhttp.onreadystatechange=function(){
        if(this.readyState==4 & this.status==200){
            alert(this.responseText);
        }
    }
    
}

function dfajaxpost(){

    let phone=document.getElementById('phone').value;

    let xhttp=new XMLHttpRequest();
    xhttp.open("POST", '../controller/regajax.php', true);
    xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xhttp.send('phone='+phone);
    xhttp.onreadystatechange=function(){
        if (this.readyState==4 & this.status==200){
            alert(this.responseText);

        }
    }
    
}


function dfajaxpostmulti(){

    let usertype=document.getElementById('usertype1').value;
    let phone=document.getElementById('phone').value;
    let name=document.getElementById('name').value;
    let nid=document.getElementById('nid').value;
    let password=document.getElementById('password').value;
    let cfpassword=document.getElementById('cfpassword').value;
    

    let xhttp=new XMLHttpRequest();
    xhttp.open("POST", '../controller/regVerify.php', true);
    xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xhttp.send('usertype='+usertype+'&phone='+phone+'&name='+name+'&nid='+nid+'&password='+password+'&cfpassword='+cfpassword);
    xhttp.onreadystatechange=function(){
        if (this.readyState==4 & this.status==200){
            alert(this.responseText);

        }
    }
    
}



function ajax(){
    let usertype = document.getElementByName('usertype').value;
    let phone = document.getElementById('phone').value;
    let name = document.getElementById('name').value;
    let nid = document.getElementById('nid').value;
    let password = document.getElementById('phone').value;
    let cfpassword = document.getElementById('cfpassword').value;   
    let tnc = document.getElementById('tnc').value;  


            let xhttp=new XMLHttpRequest();
            xhttp.open("POST", '../controller/regajax.php', true);
            xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
            xhttp.send('phone='+phone+'&name='+name);
            xhttp.send('usertype='+usertype+'&phone='+phone+'&name='+name+'&nid='+nid+'&password'+password+'&cfpassword'+cfpassword+'&tnc'+tnc);
            xhttp.onreadystatechange=function(){
                if (this.readyState==4 & this.status==200){
                    alert(this.responseText);
        
                }
            }
}

function nameValidation(){
    let name=document.getElementById('name').value;

    if (name == "") {
        alert ("Name Cannot Be Null");
    } 

    else if ((name == name.trim() && name.indexOf(' ')<=0) ) {
    alert("Name Must Contain Two Parts");
    
    }
    else {

    if ((name.indexOf('@') > 0) || ( name.indexOf(  '_') > 0) || ( name.indexOf(  '#') > 0) || ( name.indexOf(  '$') > 0) 
        || ( name.indexOf(  '%') > 0) || ( name.indexOf(  '/') > 0) || ( name.indexOf(  '*') > 0) || ( name.indexOf('+') > 0) 
        || ( name.indexOf(  '(') > 0) || ( name.indexOf(  ')') > 0) || ( name.indexOf(  '!') > 0) || ( name.indexOf('^') > 0)
        || ( name.indexOf(  '1') > 0) || ( name.indexOf(  '2') > 0) || ( name.indexOf(  '3') > 0) || ( name.indexOf('4') > 0) || ( name.indexOf('5') > 0)
        || ( name.indexOf( '6') > 0) || ( name.indexOf( '7') > 0) || ( name.indexOf( '8') > 0) || ( name.indexOf('9') > 0) || ( name.indexOf('0') > 0)) {

    alert ("Sorry! Validation failed: Name can contain alphabets, period and dash only!");
    }
}

}

function phoneValidation(){
        let useremail=document.getElementById('useremail').value;
        let atSymbol = useremail.indexOf("@");
        let dotSymbol = useremail.lastIndexOf(".");
        let spaceSymbol = useremail.indexOf(" ");

        if ((atSymbol != -1) &&
            (atSymbol != 0) &&
            (dotSymbol != -1) &&
            (dotSymbol != 0) &&
            (dotSymbol > atSymbol + 1) &&
            (useremail.length > dotSymbol + 1) &&
            (spaceSymbol == -1)) {
    alert("Email address is valid.");
} else {
    alert("Error !!! Email address is not valid.");
    return false;
}
    }
 
function validateForm() {

        const phone =
            document.getElementById("phone").value;
        const name =
            document.getElementById("name").value;
        const nid =
            document.getElementById("nid").value;
        const password =
            document.getElementById("password").value;
        const cfpassword =
            document.getElementById("cfpassword").value;
        const tnc =
            document.getElementById("tnc").checked;
    
        const phoneError =
            document.getElementById("phone-error");                
    
        const nameError =
            document.getElementById("name-error");
        const nidError = document.getElementById(
            "nid-error"
        );
        const passwordError = document.getElementById(
            "password-error"
        );
        const cfpasswordError = document.getElementById(
            "cfpassword-error"
        );

        const tncError = document.getElementById(
            "tnc-error"
        );
    
        nameError.textContent = "";
        phoneError.textContent = "";
        nidError.textContent = "";
        passwordError.textContent = "";
        cfpasswordError.textContent = "";
        tncError.textContent = "";
    
        let isValid = true;
        if (name == "") {
            nameError.textContent="Why is your name empty?";
            isValid = false;
        }

        else if ((name == name.trim() && name.indexOf(' ')<=0) ) {
            nameError.textContent="Name Must Contain Two Parts";
            isValid=false;
        }

        else {

            if ((name.indexOf('@') > 0) || ( name.indexOf(  '_') > 0) || ( name.indexOf(  '#') > 0) || ( name.indexOf(  '$') > 0) 
                || ( name.indexOf(  '%') > 0) || ( name.indexOf(  '/') > 0) || ( name.indexOf(  '*') > 0) || ( name.indexOf('+') > 0) 
                || ( name.indexOf(  '(') > 0) || ( name.indexOf(  ')') > 0) || ( name.indexOf(  '!') > 0) || ( name.indexOf('^') > 0)
                || ( name.indexOf(  '1') > 0) || ( name.indexOf(  '2') > 0) || ( name.indexOf(  '3') > 0) || ( name.indexOf('4') > 0) || ( name.indexOf('5') > 0)
                || ( name.indexOf( '6') > 0) || ( name.indexOf( '7') > 0) || ( name.indexOf( '8') > 0) || ( name.indexOf('9') > 0) || ( name.indexOf('0') > 0)) {
                nameError.textContent="Invalid! Name can contain alphabets, periods and dashes only!";
                isValid=false;
            }
            
        }



        if (nid === "" || nid.length<10) {
            nidError.textContent =
                "Please enter your nid properly.";
            isValid = false;
        }

        if (phone === "") {
            phoneError.textContent =
                "Please enter your phone.";
            isValid = false;
        }

        if (phone.length!=11) {
            phoneError.textContent =
                "11 Digit Only";
            isValid = false;
        }
        

        if (password === "" || password.length < 6) {
            passwordError.textContent =
                "Please enter a password with at least 6 characters.";
            isValid = false;
        }


        if ((password.indexOf('@')<0) || (password.indexof('#')<0) || (password.indexof('!')<0) ||(password.indexof('$')<0) ||(password.indexof('%')<0) ||(password.indexof('^')<0) ||(password.indexof('&')<0) ||
        (password.indexof('*')<0) ||(password.indexof('(\)')<0) || (password.indexof('+')<0) ||(password.indexof('-')<0) ||(password.indexof('.')<0) ||(password.indexof(',')<0) ||(password.indexof(';')<0) ||
        (password.indexof(':')<0) ||(password.indexof('_')<0)){
            passwordError.textContent="Your password must contain at least one special character.";
            isValid=false;
        }

        if ((password.indexOf('0')<0) || (password.indexof('1')<0) || (password.indexof('2')<0) ||(password.indexof('3')<0) ||(password.indexof('4')<0) ||(password.indexof('5')<0) ||(password.indexof('6')<0) ||
        (password.indexof('7')<0) ||(password.indexof('8')<0) || (password.indexof('9')<0)){
            passwordError.textContent="Your password must contain at least one digit.";
            isValid=false;
        }

        if ((password.indexOf('a')<0) || (password.indexof('b')<0) || (password.indexof('c')<0) ||(password.indexof('d')<0) ||(password.indexof('e')<0) ||(password.indexof('f')<0) ||(password.indexof('g')<0) ||
        (password.indexof('h')<0) ||(password.indexof('i')<0) || (password.indexof('j')<0) ||(password.indexof('k')<0) ||(password.indexof('l')<0) ||(password.indexof('m')<0) ||(password.indexof('n')<0) ||
        (password.indexof('o')<0) ||(password.indexof('p')<0)||(password.indexof('q')<0)||(password.indexof('r')<0)||(password.indexof('s')<0)||(password.indexof('t')<0)||(password.indexof('u')<0)||
        (password.indexof('v')<0)||(password.indexof('w')<0)||(password.indexof('x')<0)||(password.indexof('y')<0)||(password.indexof('z')<0)){
            passwordError.textContent="Your password must contain at least one lowercase letter.";
            isValid=false;
        }

        if ((password.indexOf('A')<0) || (password.indexof('B')<0) || (password.indexof('C')<0) ||(password.indexof('D')<0) ||(password.indexof('E')<0) ||(password.indexof('F')<0) ||(password.indexof('G')<0) ||
        (password.indexof('H')<0) ||(password.indexof('I')<0) || (password.indexof('J')<0) ||(password.indexof('K')<0) ||(password.indexof('L')<0) ||(password.indexof('M')<0) ||(password.indexof('N')<0) ||
        (password.indexof('O')<0) ||(password.indexof('P')<0)||(password.indexof('Q')<0)||(password.indexof('R')<0)||(password.indexof('S')<0)||(password.indexof('T')<0)||(password.indexof('U')<0)||
        (password.indexof('V')<0)||(password.indexof('W')<0)||(password.indexof('X')<0)||(password.indexof('Y')<0)||(password.indexof('Z')<0)){
            passwordError.textContent="Your password must contain at least one uppercase letter.";
            isValid=false;
        }


    
        if (cfpassword === "" || cfpassword.length < 6) {
            cfpasswordError.textContent =
                "Please enter a password with at least 6 characters.";
            isValid = false;
        }

        if (cfpassword !== password) {
            cfpasswordError.textContent =
                "Enter the same password";
            isValid = false;
        }
        
    
        if (!tnc) {
            tncError.textContent =
                "\n Please agree to the terms and conditions.";
            isValid = false;
        }
    
        
        return isValid;
    }
    

    function validateloginForm() {

        const phone =
            document.getElementById("phone").value;
        const password =
            document.getElementById("password").value;
        
        const phoneError =
            document.getElementById("phone-error");                
    
        const passwordError = document.getElementById(
            "password-error"
        );
    
    
       
        phoneError.textContent = "";

        passwordError.textContent = "";

    
        let isValid = true;

        if (phone === "") {
            phoneError.textContent =
                "Please enter your phone.";
            isValid = false;
        }

        if (phone.length!=11) {
            phoneError.textContent =
                "11 Digit Only";
            isValid = false;
        }
        

        if (password === "" || password.length < 6) {
            passwordError.textContent =
                "Enter a valid password having at least 6 characters.";
            isValid = false;
        }
        
        return isValid;
    }

    function validateupForm(){

        const name =
            document.getElementById("name").value;
        const nid =document.getElementById("nid").value;
        const password =document.getElementById("password").value;

        const nameError =
            document.getElementById("name-error");
        const nidError = document.getElementById(
            "nid-error"
        );
        const passwordError = document.getElementById(
            "password-error"
        );
    
        nameError.textContent = "";
        nidError.textContent = "";
        passwordError.textContent = "";
    
        let isValid = true;

        if (name == "") {
            nameError.textContent="Why is your name empty?";
            isValid = false;
        }

        if ((name == name.trim() && name.indexOf(' ')<=0) ) {
            nameError.textContent="Name Must Contain Two Parts";
            isValid=false;
        }



        if ((name.indexOf('@') > 0) || ( name.indexOf(  '_') > 0) || ( name.indexOf(  '#') > 0) || ( name.indexOf(  '$') > 0) 
                || ( name.indexOf(  '%') > 0) || ( name.indexOf(  '/') > 0) || ( name.indexOf(  '*') > 0) || ( name.indexOf('+') > 0) 
                || ( name.indexOf(  '(') > 0) || ( name.indexOf(  ')') > 0) || ( name.indexOf(  '!') > 0) || ( name.indexOf('^') > 0)
                || ( name.indexOf(  '1') > 0) || ( name.indexOf(  '2') > 0) || ( name.indexOf(  '3') > 0) || ( name.indexOf('4') > 0) || ( name.indexOf('5') > 0)
                || ( name.indexOf( '6') > 0) || ( name.indexOf( '7') > 0) || ( name.indexOf( '8') > 0) || ( name.indexOf('9') > 0) || ( name.indexOf('0') > 0)) {
                nameError.textContent="Invalid! Name can contain alphabets, periods and dashes only!";
                isValid=false;
            }


        if (nid === "" || nid.length<10) {
            nidError.textContent =
                "Please enter a valid nid.";
            isValid = false;
        }

        if (password === "" || password.length < 6) {
            passwordError.textContent =
                "Please enter a password with at least 6 characters.";
            isValid = false;
        }
    
        if (password.search(/[a-z]/) < 0) {
            passwordError.textContent="Your password must contain at least one lowercase letter.";
            isValid=false;
          }
        if (password.search(/[A-Z]/) < 0) {
            passwordError.textContent="Your password must contain at least one uppercase letter.";
            isValid=false;
          }
          if (password.search(/[0-9]/) < 0) {
            passwordError.textContent="Your password must contain at least one digit.";
            isValid=false;
          }
          if(password.search(/[\!\@\#\$\%\^\&\*\(\)\_\+\.\,\;\:\-]/) < 0) {
            passwordError.textContent="Your password must contain at least one special character.";
            isValid=false;
          }
            
        
        return isValid;
    }


   function validateFileType() {
         var selectedFile = document.getElementById('myimage').files[0];
         var allowedTypes = ['image/jpeg', 'image/jpg'];

         if (!allowedTypes.includes(selectedFile.type)) {
            alert('Invalid file type. Please upload a JPEG or JPG file.');
            document.getElementById('fileInput').value = '';
         }
      }

    function validateFileSubmitType() {

        isValid = false;
        let myimage=document.getElementById('myimage');
        var selectedFile = document.getElementById('myimage').files[0];
        var allowedTypes = ['image/jpeg', 'image/jpg'];

        if (myimage.files.length==0){
            alert ("Select Your Profile Image");
        }

        if (!allowedTypes.includes(selectedFile.type)) {
           alert('Invalid file type. Please upload a JPEG or JPG file.');
           isValid=false;
        }
        if (allowedTypes.includes(selectedFile.type)) {
            alert('Successfully Uploaded');
            isValid=false;
         }

         
        return isValid;
     }

     function validateCard(){


        const phone =
            document.getElementById("phone").value;
        const amount =
            document.getElementById("amount").value;
            const card =
            document.getElementById("card").value;
        const cvc =
            document.getElementById("cvc").value;
            const expiry =
            document.getElementById("expiry").value;
            const password =
            document.getElementById("otp").value;

    
        const phoneError =
            document.getElementById("phone-error");       
        const amountError =
            document.getElementById("amount-error");         
        
            const cardError = document.getElementById(
                "card-error");
            const cvcError = document.getElementById(
                "cvc-error"
            );
            const expiryError = document.getElementById(
                "expiry-error"
            );
            const otpError = document.getElementById(
                "otp-error"
            );
   
        phoneError.textContent = "";
        amountError.textContent = "";
        cardError.textContent = "";
        cvcError.textContent = "";
        expiryError.textContent = "";
        otpError.textContent = "";


    
        let isValid = true;
        
        if (phone === "") {
            phoneError.textContent =
                "Please enter your phone.";
            isValid = false;
        }

        if (phone.length!=11) {
            phoneError.textContent =
                "11 Digit Only";
            isValid = false;
        }
        if (amount===""){
            amountError.textContent="Enter the Amount";
            isValid=false;
        }
        if (amount<0){
            amountError.textContent="Amount Cannot Be Negative";
            isValid=false;
        }
        if (amount>50000){
            amountError.textContent="More than 50,000 cannot be deposited at a time.";
            isValid=false;
        }

        if (card.length!=16) {
            cardError.textContent =
                "Enter a valid card number";
            isValid = false;
        }
        
        if (cvc.length!=3) {
            cvcError.textContent =
                "Enter a valid cvc/cvv";
            isValid = false;
        }

        if (expiry=== "") {
            expiryError.textContent =
                "Please enter your card expiry";
            isValid = false;
        }

        if (expiry[3]<2) {
            expiryError.textContent =
                "Card Expired";
            isValid = false;
        }
        if (expiry[3]=2 && expiry[4]<4) {
            expiryError.textContent =
                "Card Expired";
            isValid = false;
        }
        if (cvc.length!=6) {
            cvcError.textContent =
                "Enter the correct CVC/CVV";
            isValid = false;
        }

        if(password===""){
           otpError.textContent =
                "Enter the correct OTP";
            isValid = false;

        }
        if(password.length!=6){
            otpError.textContent =
                 "Enter the 6 digit OTP";
             isValid = false;
 
         }

        return isValid;

     }