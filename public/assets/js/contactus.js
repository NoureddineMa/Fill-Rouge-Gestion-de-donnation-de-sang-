// form validation for form contact us

// Declaration of variables :

let Nom = document.getElementById("Nom");
let Nom_err = document.getElementById("Nom_err");
let Prenom = document.getElementById("Prenom");
let Prenom_err = document.getElementById("Prenom_err");
let Email = document.getElementById("Email");
let Email_err = document.getElementById("Email_err");
let contexte = document.getElementById("contexte");
let contexte_err = document.getElementById("contexte_err");
let message = document.getElementById("message");
let message_err = document.getElementById("message_err");
let submit = document.getElementById("submit");


// Nom validation  : 
submit.addEventListener("click", (e) => {
        if (Nom.value == "" || !(/^[a-zA-Z]{5,}$/).test(Nom.value)) {
            e.preventDefault();
            Nom.setAttribute("style", "color:red; border: 1px red solid ;");
            Nom_err.innerText = "Veuillez entrer un nom valide contient au moins 5 caractéres!"
            Nom_err.setAttribute("style", "color:red;font-size:10px;");
        } else {
            Nom.setAttribute("style", "color:black; border: 1px green solid ;");
            Nom_err.innerText = "";
        }
    })
    // Prenom validation  : 
submit.addEventListener("click", (e) => {
    if (Prenom.value == "" || !(/^[a-zA-Z]{5,}$/).test(Prenom.value)) {
        e.preventDefault();
        Prenom.setAttribute("style", "color:red; border: 1px red solid ;");
        Prenom_err.innerText = "Veuillez entrer un Prenom valide contient au moins 5 caractéres!"
        Prenom_err.setAttribute("style", "color:red;font-size:10px;");
    } else {
        Prenom.setAttribute("style", "color:black; border: 1px green solid ;");
        Prenom_err.innerText = "";
    }
})


// email Validation : 
submit.addEventListener("click", (e) => {
        if (Email.value == "" || !(/^[a-zA-Z_0-9]{3,}@[a-zA-Z]{3,}[.]{1}[a-z]{2,4}$/).test(Email.value)) {
            e.preventDefault();
            Email.setAttribute("style", "color:red; border: 1px red solid ;");
            Email_err.innerText = "Veuillez entrer  une Adresse mail Valide"
            Email_err.setAttribute("style", "color:red;font-size:10px;");
        } else {
            Email.setAttribute("style", "color:black; border: 1px green solid ;");
            Email_err.innerText = "";
        }
    })
    // contexte Validation : 
submit.addEventListener("click", (e) => {
        if (contexte.value == "" || !(/^[a-zA-Z]{5,}$/).test(contexte.value)) {
            e.preventDefault();
            contexte.setAttribute("style", "color:red; border: 1px red solid ;");
            contexte_err.innerText = "veuillez écrire le contexte de votre message "
            contexte_err.setAttribute("style", "color:red;font-size:10px;");
        } else {
            contexte.setAttribute("style", "color:black; border: 1px green solid ;");
            contexte_err.innerText = "";
        }
    })
    // message Validation :
submit.addEventListener("click", (e) => {
    if (message.value == "" || !(/^[a-z A-Z]{10,}$/).test(message.value)) {
        e.preventDefault();
        message.setAttribute("style", "color:red; border: 1px red solid ;");
        message_err.innerText = " votre message doit contient au minimum 10 Caractéres"
        message_err.setAttribute("style", "color:red;font-size:10px;");
    } else {
        message.setAttribute("style", "olor:black; border: 1px green solid ;");
        message_err.innerText = "";
    }


})


// regex for email input

function ValidateEmail() {
    if (!(/^[a-zA-Z_0-9]{3,}@[a-zA-Z]{3,}[.]{1}[a-z]{2,4}$/).test(Email.value)) {
        Email.setAttribute("style", "color:red; border: 1px red solid ;");
        Email_err.setAttribute("style", "color:red;font-size:10px;");
        Email_err.innerText = "veuillez entrer un email valid";
    } else {
        Email.setAttribute("style", "color:black; border: 1px green solid ;");
        Email_err.innerText = "";

    }
}

function validatemessage() {
    if (!(/^[a-zA-Z_0-9]{10,255}$/).test(message.value)) {
        message.setAttribute("style", "color:red; border: 1px red solid ;");
        message_err.setAttribute("style", "color:red;font-size:10px;");
        message_err.innerText = "Le message doit contient Minimum 10 caractéres !!";
    } else {
        message.setAttribute("style", "color:black; border: 1px green solid ;");
        message_err.innerText = "";

    }
}