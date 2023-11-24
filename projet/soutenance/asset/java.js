
var eye = document.querySelector('.feather-eye');
var eyeoff= document.querySelector('.feather-eye-off');

var epassword = document.getElementById('code');

var epasswords = document.getElementById('codes');


eye.addEventListener('click',() => {
    eye.style.display ="none";
    eyeoff.style.display ="block";
    epassword.type ="text";
    

} );

eyeoff.addEventListener('click',() => {
    eye.style.display ="block";
    eyeoff.style.display ="none";
    epassword.type ="password";
 

} );


eye.addEventListener('click',() => {
    eye.style.display ="none";
    eyeoff.style.display ="block";
    epasswords.type ="text";


} );    



eyeoff.addEventListener('click',() => {
    eye.style.display ="block";
    eyeoff.style.display ="none";
    epasswords.type ="password";
 

} );



const form = document.getElementById('fform');
const nom = document.getElementById('nom');
const email = document.getElementById('email');
const numero = document.getElementById('num');
const password = document.getElementById('code');
const conf_password = document.getElementById('codes');

// Les evènements

form.addEventListener('submit' ,e=>{
    


 
   //pour les inputs
     let nomValue = nom.value.trim();//pour empêcher les espaces dans input
     let emailValue = email.value.trim();
     let  numeroValue = numero.value.trim();
     let  passwordValue = password.value.trim();
     let conf_passwordValue = conf_password.value.trim();

  // vérification
  
  if(nomValue === ""){
    let message = " Entrer votre nom d'utilisateur";
    setError1(nom,message);
    e.preventDefault();

  } else if(!nomValue.match(/^[a-zA-Z]/)){
    let message = "le nom d'utilisateur doit commencer par une lettre";
    setError1(nom, message);
    e.preventDefault();

  }else if(nom.value.length < 5){ 
            let message = "votre doit contenir au moins cinq caractère";
            setError1(nom, message);
            e.preventDefault();
   }else{
            setSucces1(nom);
       }

        if(numeroValue === ""){
    let message = " Entrer votre Numero ";
    setError3(numero,message);
    e.preventDefault();

  } else if(!numeroValue.match(/^[0-9]/)){
    let message = "le Numero doit commencer par un chiffre";
    setError3(numero, message);
    e.preventDefault();

  }else if(numero.value.length < 5){ 
            let message = "votre doit contenir au moins cinq caractère";
            setError3(numero, message);
            e.preventDefault();
   }else{
        setSucces3(numero);
       }

        if(passwordValue === ""){
    let message = " Entrer votre mot de pass";
    setError4(password,message);
    e.preventDefault();

  } else if(!passwordValue.match(/^[a-zA-Z]/)){
    let message = "le not de passe doit commencer par une lettre";
    setError4(password, message);
    e.preventDefault();

  }else if(password.value.length < 5){ 
            let message = " doit contenir au moins cinq caractère";
            setError4(password, message);
            e.preventDefault();
   }else{
       setSucces4(password);
       }

        if(conf_passwordValue === ""){
    let message = " Entrer votre mot de pass";
    setError5(conf_password,message);
    e.preventDefault();

  } else if(!conf_passwordValue.match(/^[a-zA-Z]/)){
    let message = "le mot de pass doit commencer par une lettre";
    setError5(conf_password, message);
    e.preventDefault();

  }else if(conf_password.value.length < 5){ 
            let message = " doit contenir au moins cinq caractère";
            setError5(conf_password, message);
            e.preventDefault();
   }else{
       setSucces5(conf_password);
       }

   if(emailValue === ""){
     
        let message = "Entrer votre email";
        setError2(email,message);
        e.preventDefault();
       }  else if (!email_verify(emailValue)) {
        let message = "Entrer une adresse email valide";
        setError2(email, message);
        e.preventDefault();
      }
      else{
        setSucces2(email);
   } 
   
}


)

   
   function setError1(elem,message){
     
     const former = elem.parentElement;
     const formerr = document.getElementById('form1');
     const small = document.getElementById('small1');

     //Ajout du message d'erreur
     small.innerText = message;
      
     //Ajout de la classe error

     formerr.className = "form1 error";
     former.className = "v-inp";
   }
   function setError2(elem,message){
     
    const former = elem.parentElement;
    const formerr = document.getElementById('form2');
    const small = document.getElementById('small2');

    //Ajout du message d'erreur
    small.innerText = message;
     
    //Ajout de la classe error

    formerr.className = "form2 error";
    former.className = "v-inp ";
  }

  function setError3(elem,message){
     
    const former = elem.parentElement;
    const formerr = document.getElementById('form3');
    const small = document.getElementById('small3');

    //Ajout du message d'erreur
    small.innerText = message;
     
    //Ajout de la classe error

    formerr.className = "form3 error";
    former.className = "v-inp ";
  }
  function setError3(elem,message){
     
    const former = elem.parentElement;
    const formerr = document.getElementById('form3');
    const small = document.getElementById('small3');

    //Ajout du message d'erreur
    small.innerText = message;
     
    //Ajout de la classe error

    formerr.className = "form3 error";
    former.className = "v-inp ";
  }
  function setError4(elem,message){
     
    const former = elem.parentElement;
    const formerr = document.getElementById('form4');
    const small = document.getElementById('small4');

    //Ajout du message d'erreur
    small.innerText = message;
     
    //Ajout de la classe error

    formerr.className = "form4 error";
    former.className = "v-inp ";
  }
  function setError5(elem,message){
     
    const former = elem.parentElement;
    const formerr = document.getElementById('form5');
    const small = document.getElementById('small5');

    //Ajout du message d'erreur
    small.innerText = message;
     
    //Ajout de la classe error

    formerr.className = "form5 error";
    former.className = "v-inp ";
  }
   function setSucces1(elem){
    const formerr  = document.getElementById('form1');
    formerr.className = "form1  succes";
    
   }

   function setSucces2(elem){
    const formerr = document.getElementById('form2');
    formerr.className = "form2 sucess";
    
   }


   function setSucces3(elem){
    const formerr = document.getElementById('form3');
    formerr.className = "form3 sucess";
    
   }

   function setSucces4(elem){
    const formerr = document.getElementById('form4');
    formerr.className = "form4 sucess";
    
   }

   function setSucces5(elem){
    const formerr = document.getElementById('form5');
    formerr.className = "form5 sucess";
    
   }
  
   function email_verify(email){
    // Supprimer la ligne suivante car elle ne contient pas d'instructions valides
    // *r_rona.22-t@gmail.com
    
    // Définir l'expression régulière pour la validation de l'adresse e-mail
    var regex = /^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
     
    // Vérifier si l'adresse e-mail passée en argument correspond à l'expression régulière
    return regex.test(email);
 }


