function Rate () {
	

   var ValueOfRate=document.getElementById('rating-4').value;
   var NameOfRate=document.getElementById('rating-4').name;
   var ID=document.getElementById('3').name;
   var ValueOfUrl = window.location.href; 
   console.log("The Id Of User Is ")
   console.log(ID);
   console.log(ValueOfUrl);
   

   if(document.getElementById('rating-5').checked)
   {
   	 ValueOfRate=document.getElementById('rating-5').value;
   	 NameOfRate=document.getElementById('rating-5').name;
   	 console.log(ValueOfRate);
   	 console.log(NameOfRate);

   }
   else if(document.getElementById('rating-4').checked)
   {
   	 ValueOfRate=document.getElementById('rating-4').value;
   	 NameOfRate=document.getElementById('rating-4').name;
   	 console.log(ValueOfRate);
   	 console.log(NameOfRate);
   }
   else if(document.getElementById('rating-3').checked)
   {
   	 ValueOfRate=document.getElementById('rating-3').value;
   	 NameOfRate=document.getElementById('rating-3').name;
   	 console.log(ValueOfRate);
   	 console.log(NameOfRate);
   }
   else if(document.getElementById('rating-2').checked)
   {
   	ValueOfRate=document.getElementById('rating-2').value;
   	NameOfRate=document.getElementById('rating-2').name;
   	console.log(ValueOfRate);
   	console.log(NameOfRate);
   }
   else if(document.getElementById('rating-1').checked)
   {
   	ValueOfRate=document.getElementById('rating-1').value;
   	NameOfRate=document.getElementById('rating-1').name;
   	console.log(ValueOfRate);
   	console.log(NameOfRate);
   }
   else if(document.getElementById('rating-0').checked)
   {
   	ValueOfRate=document.getElementById('rating-0').value;
   	NameOfRate=document.getElementById('rating-0').name;
   	console.log(ValueOfRate);
   	console.log(NameOfRate);
   }

$.ajax({
        
        url: ValueOfUrl ,
        data: {
            RateValue: ValueOfRate,
            DoctorID: NameOfRate,
            UserId: ID

         },
    });

}

