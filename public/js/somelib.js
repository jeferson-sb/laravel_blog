

document.addEventListener('DOMContentLoaded', function(){
  let myarr = [ true, false, '123' ]

  const haveNumbers = (arr) => arr.some(val => Number.isFinite(val)); 
  console.log('Running a script ...');
  console.log(haveNumbers(myarr));
})