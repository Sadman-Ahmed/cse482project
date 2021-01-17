
      var flag = 0;
      var flag2 = 0;
      var pcount1 = 0;
      var pcount2 = 0;
      var pcount3 = 0;
      var pcount4 = 0;
      var pcount5 = 0;
      var pcount6 = 0;
      var ncount = 0;
      var ncount = 0;
      var pwdVal = 0;
      var pwdVal2 = 0;
      var noVal = 0;
      var noVal2 =0;
      var pass1 = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z" ];
      var pass2 =["A", "B", "B", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"];
      var pass3 = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"];
      const regForm = document.getElementById('form');
      const fname = document.getElementById('fname');
      const lname = document.getElementById('lname');
      const username = document.getElementById('username');
      const email = document.getElementById('email');
      const password = document.getElementById('password');
      const password2 = document.getElementById('password2');
      const address = document.getElementById('address');
      const contactNo = document.getElementById('contactNo');
      const date = document.getElementById('date');
      const terms = document.getElementById('terms');

      function openCity(evt, role) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
          tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
          tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(role).style.display = "block";
        evt.currentTarget.className += " active";
      }
      tabcontent = document.getElementsByClassName("tabcontent");
      tabcontent[1].style.display = "none";


        regForm.addEventListener('submit', (e)=> {
          pcount1=0;
          pcount2=0;
          pcount3=0;
          ncount=0;
          flag=0;
          flag2=0;
          checkInput();
          if(flag===1){
            e.preventDefault();
          }
        });


       regForm.addEventListener('submit', (e)=> {
         pcount1=0;
         pcount2=0;
         pcount3=0;
         pcount4=0;
         pcount5=0;
         pcount6=0;
         ncount=0;
         ncount2=0;
         flag=0;
         flag2=0;
         checkInput();
         if(flag===1){
           e.preventDefault();
         }
       });

       function checkInput(){
       const fnameValue = fname.value.trim();
       const lnameValue = lname.value.trim();
       const usernameValue = username.value.trim();
       const emailValue = email.value.trim();
       const passwordValue =  password.value.trim();
       const password2Value = password2.value.trim();
       const addressValue =  address.value.trim();
       const contactNoValue = contactNo.value.trim();
       const dateValue =  date.value.trim();
       const termsValue = terms.value.trim();

       //const ifchecked = getElementById('ifchecked').value;
       pwdVal = passwordValue;
       noVal = contactNoValue;

        if(fnameValue ===""){
          //show error
          //add error class
          setErrorFor(fname, 'First name can not be blank');
        }

        else{
          //add success class
          setSuccessFor(fname);
        }

        if(lnameValue===''){
          setErrorFor(lname, 'Last name can not be blank');
        }
        else{
          setSuccessFor(lname);
        }

        if(usernameValue===''){
          setErrorFor(username, 'Username can not be blank');
        }
        else{
          setSuccessFor(username);
        }

        if(emailValue===''){
          setErrorFor(email, 'This field can not be blank');
        }
        else{

           setSuccessFor(email);
        }

        //password validation Starts here
        for(var i=0; i<pwdVal.length; i++){
          for(var j=0; j<26; j++){
            if(pwdVal.charAt(i)==pass1[j]){
              pcount1++;
            }
            if(pwdVal.charAt(i)==pass2[j]){
              pcount2++;
            }
          }
          for(var p=0; p<10; p++){
            if(pwdVal.charAt(i)==pass3[p]){
              pcount3++;
            }
          }
        }

        if(passwordValue==='' || passwordValue.length<6){
          setErrorFor(password, 'Your password must contain at least 6 chatecters');
        }
        else if(pcount1===0 || pcount2===0){
          setErrorFor(password, 'Your password must contain a upper case and a lower case letter');
        }
        else if(pcount3<=0){
          setErrorFor(password, 'Your password must contain a number');
        }
        else{
          setSuccessFor(password);
        }

        if(password2Value===''){
          setErrorFor(password2, 'This field can not be empty');
        }
        else if (passwordValue!=password2Value) {
          setErrorFor(password2, 'Your passwords did not match. Try again');
        }
        else{
          setSuccessFor(password2);            //password validation ends
        }

        if(addressValue===''){
          setErrorFor(address, 'Your address can not be blank');
        }
        else{
          setSuccessFor(address);
        }

        //contact value calculation
        for(var i=0; i<noVal.length; i++){
          for(var j=0; j<10; j++){
            if(noVal.charAt(i)===pass3[j]){
              ncount++;
            }
          }
         }

        if(contactNoValue===''){
          setErrorFor(contactNo, 'Your contact number can not be blank');
        }
        else if(noVal.length>11){
          setErrorFor(contactNo, 'Your contact number can not go above 11 characters');
        }
        else if(ncount!==noVal.length){
          setErrorFor(contactNo, 'Your contact number can contain only number');
        }

        else{
          setSuccessFor(contactNo);
        }

        if(dateValue===''){
          setErrorFor(date, 'Your date of birth can not be blank');
        }
        else {
          setSuccessFor(date);
        }

        if(document.getElementById('terms').checked==false){
          setErrorFor(terms,'You have to agree terms and conditions');
        }
        else{
          setSuccessFor(terms);
        }


      }


      function setErrorFor(input, message){
        const inputHolder = input.parentElement; // input-holder
        const small = inputHolder.querySelector('small');
        flag =1;
        // add error msg
        small.innerText = message;

        //add error class
        inputHolder.className = 'input-holder error';
      }
      function setSuccessFor(input){
         const inputHolder = input.parentElement; // input-holder
         inputHolder.className = 'input-holder success';
      }

      const regForm2 = document.getElementById('form2');
      const fname2 = document.getElementById('fname2');
      const lname2 = document.getElementById('lname2');
      const username2 = document.getElementById('username2');
      const email2 = document.getElementById('email2');
      const password12 = document.getElementById('password12');
      const password22 = document.getElementById('password22');
      const address2 = document.getElementById('address2');
      const contactNo2 = document.getElementById('contactNo2');
      const date2 = document.getElementById('date2');
      const terms2 = document.getElementById('terms2');
      const institutionName = document.getElementById('institutionName');


        regForm2.addEventListener('submit', (e)=> {
          pcount1=0;
          pcount2=0;
          pcount3=0;
          pcount4=0;
          pcount5=0;
          pcount6=0;
          ncount=0;
          ncount2=0;

          flag2=0;
          checkInput2();
          if(flag2===1){
          e.preventDefault();
          }
        });


      function checkInput2(){
      const fnameValue2 = fname2.value.trim();
      const lnameValue2 = lname2.value.trim();
      const usernameValue2 = username2.value.trim();
      const emailValue2 = email2.value.trim();
      const passwordValue12 =  password12.value.trim();
      const passwordValue22 = password22.value.trim();
      const addressValue2 =  address2.value.trim();
      const contactNoValue2 = contactNo2.value.trim();
      const dateValue2 =  date2.value.trim();
      const termsValue2 = terms2.value.trim();
      const institutionNameValue = institutionName.value.trim();


      pwdVal2 = passwordValue12;
      noVal2 = contactNoValue2;

       if(fnameValue2 ===""){
         //show error
         //add error class
         setErrorFor2(fname2, 'First name can not be blank');
       }

       else{
         //add success class
         setSuccessFor2(fname2);
       }

       if(lnameValue2===''){
         setErrorFor2(lname2, 'Last name can not be blank');
       }
       else{
         setSuccessFor2(lname2);
       }

       if(usernameValue2===''){
         setErrorFor2(username2, 'Username can not be blank');
       }
       else{
         setSuccessFor2(username2);
       }

       if(emailValue2===''){
         setErrorFor2(email2, 'This field can not be blank');
       }
       else{

          setSuccessFor2(email2);
       }

       //password validation Starts here
       for(var i=0; i<pwdVal2.length; i++){
         for(var j=0; j<26; j++){
           if(pwdVal2.charAt(i)==pass1[j]){
             pcount4++;
           }
           if(pwdVal2.charAt(i)==pass2[j]){
             pcount5++;
           }
         }
         for(var p=0; p<10; p++){
           if(pwdVal2.charAt(i)==pass3[p]){
             pcount6++;
           }
         }
       }

       if(passwordValue12==='' || passwordValue12.length<6){
         setErrorFor2(password12, 'Your password must contain at least 6 chatecters');
       }
       else if(pcount4===0 || pcount5===0){
         setErrorFor2(password12, 'Your password must contain a upper case and a lower case letter');
       }
       else if(pcount6<=0){
         setErrorFor2(password12, 'Your password must contain a number');
       }
       else{
         setSuccessFor2(password12);
       }

       if(passwordValue22===''){
         setErrorFor2(password22, 'This field can not be empty');
       }
       else if (passwordValue12!=passwordValue22) {
         setErrorFor2(password22, 'Your passwords did not match. Try again');
       }
       else{
         setSuccessFor2(password22);            //password validation ends
       }

       if(addressValue2===''){
         setErrorFor2(address2, 'Your address can not be blank');
       }
       else{
         setSuccessFor2(address2);
       }

       //contact value calculation
       for(var i=0; i<noVal2.length; i++){
         for(var j=0; j<10; j++){
           if(noVal2.charAt(i)===pass3[j]){
             ncount2++;
           }
         }
        }

       if(contactNoValue2===''){
         setErrorFor2(contactNo2, 'Your contact number can not be blank');
       }
       else if(noVal2.length>11){
         setErrorFor2(contactNo2, 'Your contact number can not go above 11 characters');
       }
       else if(ncount2!==noVal2.length){
         setErrorFor2(contactNo2, 'Your contact number can contain only number');
       }

       else{
         setSuccessFor2(contactNo2);
       }

       if(dateValue2===''){
         setErrorFor2(date2, 'Your date of birth can not be blank');
       }
       else {
         setSuccessFor2(date2);
       }

       if(document.getElementById('terms2').checked==false){
         setErrorFor2(terms2,'You have to agree terms and conditions');
       }
       else{
         setSuccessFor2(terms2);
       }

       if(institutionNameValue===''){
         setErrorFor(institutionName, 'Write your institution name');
       }
       else{
         setSuccessFor(institutionName);
       }


     }

     function setErrorFor2(input, message){
       const inputHolder = input.parentElement; // input-holder
       const small = inputHolder.querySelector('small');
       flag2 =1;
       // add error msg
       small.innerText = message;

       //add error class
       inputHolder.className = 'input-holder error';
     }
     function setSuccessFor2(input){
        const inputHolder = input.parentElement; // input-holder
        inputHolder.className = 'input-holder success';
     }
