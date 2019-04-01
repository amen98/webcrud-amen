function surligne(champ, erreur)

	{
	
	   if(erreur)
	
		  champ.style.backgroundColor = "#fba";
	
	   else
	
		  champ.style.backgroundColor = "";
	
    }
    function verifIDTransporteur(champ)
    {
        if(champ.value < 1 || champ.value > 9999)
        {
            surligne(champ, true);
            return false;
        } 
        else
        {
           surligne(champ, false);
           return true;
        }
    }

   
    function verifCINTransporteur(champ)
    {
    
        if(champ.length != 8)
        {
           surligne(champ, true);
           return false;
        }
        else
        {
           surligne(champ, false);
           return true;
        }
    }

    function verifNomPrenomTransporteur(champ)
    {
    
        var regex = /^[a-zA-Z()]+$/;

        if(!regex.test(champ.value) || champ.value.length < 5 || champ.value.length > 25)
     
        {
     
           surligne(champ, true);
     
           return false;
     
        }
     
        else
     
        {
     
           surligne(champ, false);
     
           return true;
     
        }
    }

    function verifTELTransporteur(champ)

{
  
   

   if(champ.value !=8)

   {

      surligne(champ, true);

      return false;

   }

   else

   {

      surligne(champ, false);

      return true;

   }

}


function verifPlaque(champ)

{

    var regex = /^[0-9]+TU[0-9]{1,3}$/;

   if(!regex.test(champ.value))

   {

      surligne(champ, true);

      return false;

   }

   else

   {

      surligne(champ, false);

      return true;

   }

}

function verifADRESSELivraison(champ)
    {
    
        if(champ.value < 5 || champ.value > 20)
        {
            surligne(champ, true);
            return false;
        } 
        else
        {
           surligne(champ, false);
           return true;
        }
    }
    function verifDELAISLivraison(champ)
    {
        a=document.getElementById("delais").value ;
        if(a < 3 || a > 90)
        {
            surligne(champ, true);
            return false;
        } 
        else
        {
           surligne(champ, false);
           return true;
        }
    }

    function verifFRAISLivraison(champ)
    {
        a=document.getElementById("gouv").value ;
        
        if(a=="Tunis" || a=="Ariana" || a=="Ben Arous"){
            document.getElementById("frais").value=5 ;
        }
        else if(a=="Bizerte"){
            document.getElementById("frais").value=7 ;
        }
        else if(a=="Béja" || a=="Jendouba" || a=="Nabeul"){
            document.getElementById("frais").value=11 ;
        }
        else if(a=="Kef" || a=="Sousse" || a=="Mahdia" || a=="Monastir" || a=="Kairouan" || a=="Siliana"){
            document.getElementById("frais").value=15 ;
        }
        else if(a=="Sfax" || a=="Sidi Bouzid" || a=="Kasserine" || a=="Gafsa"){
            document.getElementById("frais").value=18 ;
        }
        else{
            document.getElementById("frais").value=20 ; 
        }
    }

    
    function verifSelection(champ)
    {
        a=document.getElementById("gouv").value ;
        
        if(a==""){
            surligne(champ, true);

            return false;
      
         }
      
         else
      
         {
      
            surligne(champ, false);
      
            return true;
      
         }
    }

    function verifSelectionTransporteur(champ)
    {
        a=document.getElementById("type").value ;
        
        if(a==""){
            surligne(champ, true);

            return false;
      
         }
      
         else
      
         {
      
            surligne(champ, false);
      
            return true;
      
         }
    }