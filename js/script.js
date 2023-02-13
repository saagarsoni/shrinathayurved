//For Allowing Only Numeric Input 
function validateInput(event) {
   var keyCode = event.which || event.keyCode;
   if (keyCode < 48 || keyCode > 57 && keyCode !== 8) {
     event.preventDefault();
   }
 }
 
 