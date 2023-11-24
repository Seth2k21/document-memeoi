 //Récupération des données



const form = document.getElementById('form');
const nom = document.getElementById('nom');
const email = document.getElementById('email');
const password = document.getElementById('password');
const conf_password = document.getElementById('conf_password');



// Les evènements

form.addEventListener('submit' ,e=>{

    e.preventDefault(); // pour empêcher les evènnements par defaut
    
    form_verify(); //fonction pour vérifier l'évènement
})



// les functions

function form_verify() { 
   //pour les inputs
     //let nomValue = nom.value.trim();//pour empêcher les espaces dans input
     //let emailValue = email.value.trim();
     //let  passwordValue = password.value.trim();
     //let conf_passwordValue = conf_password.value.trim();

  // vérification
  if(nomValue === ""){
     
    let message = "le nom d'utilisateur ne peut-être vide";
    setError(nom,message);

  } else if(!nomValue.match(/^[a-zA-Z]/)){
    let message = "le nom d'utilisateur doit commencer par une lettre";
    setError(nom, message);

  }
  else if(nom.value.length < 3){ 
            let message = "le nom d'utilisateur doit avoir au moins trois caractère";
            setError(nom, message);
   }else{
            setSucces(nom);
       }
       
  if(emailValue === ""){
     
    let message = "email ne peut-être vide";
    setError(email,message);

  }
}
   function setError(elem,message){
     
     const formerr = elem.parentElement;
     const small = document.getElementById('small');

     //Ajout du message d'erreur
     small.innerText = message;
      
     //Ajout de la classe error

     formerr.className = "v-inp error";
   }

   function setSucces(elem){
    const formerr  = elem.parentElement;
    formerr.className = "form2  succes";
   }

   function email_verify(){
    /*    
       *r_rona.22-t@gmail.com
       /^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/
    */
    return /^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/.test(email)

   }
