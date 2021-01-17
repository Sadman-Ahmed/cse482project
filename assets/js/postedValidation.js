

var flag = 0;
var b = true;

 const fborm = document.getElementById('postForm');
const name = document.getElementById('name');
const age = document.getElementById('age');
const gender = document.getElementById('gender');
const address = document.getElementById('address');
const dr1 = document.getElementById('dr1');
const dr2 = document.getElementById('dr2');
const dr3 = document.getElementById('dr3');
const institutionName = document.getElementById('institutionName');
const tutoringTime = document.getElementById('tutoringTime');
const week = document.getElementById('week');
const salary = document.getElementById('salary');


fborm.addEventListener('submit', (e)=> {
flag=0;
checkInput();
if(flag===1){
  e.preventDefault();
}

});

function checkInput(){
const nameValue = name.value.trim();
const ageValue = age.value.trim();
const genderValue = gender.value.trim();
const addressValue = address.value.trim();
const dr1Value = dr1.value.trim();
const dr2Value =  dr2.value.trim();
const dr3Value = dr3.value.trim();
const institutionNameValue =  institutionName.value.trim();
const tutoringTimeValue = tutoringTime.value.trim();
const weekValue =  week.value.trim();
const salaryValue =  salary.value.trim();


 if(nameValue ===""){
   //show error
   //add error class
   setErrorFor(name);
 }

 else{
   //add success class
   setSuccessFor(name);
 }

 if(ageValue===''){
   setErrorFor(age);
 }
 else{
   setSuccessFor(age);
 }

 if(addressValue===''){
   setErrorFor(address);
 }
 else{
   setSuccessFor(address);
 }

 if(institutionNameValue===''){
   setErrorFor(institutionName);
 }

 else{
   setSuccessFor(institutionName);
 }

 if(salaryValue===''){
   setErrorFor(salary);
 }

 else{
   setSuccessFor(salary);
 }

 if(tutoringTimeValue===''){
   setErrorFor(tutoringTime);
 }

 else{
   setSuccessFor(tutoringTime);
 }

}

function setErrorFor(input){
 const pinputHolder = input.parentElement; // input-holder2

 flag =1;
 //add error class
 pinputHolder.className = 'pinput-hold error';

}
function setSuccessFor(input){
  const pinputHolder = input.parentElement; // input-holder
  pinputHolder.className = 'pinput-hold success';
}
