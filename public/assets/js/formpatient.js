// form validation for form donnateur and patient rendez vous

// Declaration of variables :

let Nom_patient = document.getElementById("Nom_patient");
let Nom_err_patient = document.getElementById("Nom_err_patient");
let Prenom_patient = document.getElementById("Prenom_patient");
let Prenom_err_patient = document.getElementById("Prenom_err_patient");
let Adresse_patient = document.getElementById("Adresse_patient");
let Adresse_err_patient = document.getElementById("Adresse_err_patient");
let Ville_patient = document.getElementById("Ville_patient");
let Ville_err_patient = document.getElementById("Ville_err_patient");
let Email_patient = document.getElementById("Email_patient");
let Email_err_patient = document.getElementById("Email_err_patient");
let Num_patient = document.getElementById("Num_patient");
let Num_err_patient = document.getElementById("Num_err_patient");
let Date_patient = document.getElementById("Date_patient");
let Date_err_patient = document.getElementById("Date_err_patient");
let submit_patient = document.getElementById("submit_patient");

// validate name
submit_patient.addEventListener("click", (e) => {
    if (Nom_patient.value == "" || !(/^[a-zA-Z]{5,10}$/).test(Nom_patient.value)) {
        e.preventDefault();
        Nom_patient.setAttribute("style", "color:red; border: 1px red solid ;");
        Nom_err_patient.innerText = "Veuillez entrer un nom valide ! verifiez que le nom contient entre 5 et 10 caractéres"
        Nom_err_patient.setAttribute("style", "color:red;font-size:10px;");
    } else {
        Nom_patient.setAttribute("style", "color:black; border: 1px green solid ;");
        Nom_err_patient.innerText = "";
    }
})

// validate prenom
submit_patient.addEventListener("click", (e) => {
    if (Prenom_patient.value == "" || !(/^[a-zA-Z]{5,10}$/).test(Prenom_patient.value)) {
        e.preventDefault();
        Prenom_patient.setAttribute("style", "color:red; border: 1px red solid ;");
        Prenom_err_patient.innerText = "Veuillez entrer un Prenom valide ! verifiez que le prenom contient entre 5 et 10 caractéres"
        Prenom_err_patient.setAttribute("style", "color:red;font-size:10px;");
    } else {
        Prenom_patient.setAttribute("style", "color:black; border: 1px green solid ;");
        Prenom_err_patient.innerText = "";
    }
})

// validate adresse 
submit_patient.addEventListener("click", (e) => {
        if (Adresse_patient.value == "") {
            e.preventDefault();
            Adresse_patient.setAttribute("style", "color:red; border: 1px red solid ;");
            Adresse_err_patient.innerText = "Veuillez entrer votre Adresse"
            Adresse_err_patient.setAttribute("style", "color:red;font-size:10px;");
        } else {
            Adresse_patient.setAttribute("style", "color:black; border: 1px green solid ;");
            Adresse_err_patient.innerText = "";
        }
    })
    // validate ville
submit_patient.addEventListener("click", (e) => {
    if (Ville_patient.value == "" || !(/^[a-zA-Z]{5,10}$/).test(Nom_patient.value)) {
        e.preventDefault();
        Ville_patient.setAttribute("style", "color:red; border: 1px red solid ;");
        Ville_err_patient.innerText = "Veuillez entrer une ville valide"
        Ville_err_patient.setAttribute("style", "color:red;font-size:10px;");
    } else {
        Ville_patient.setAttribute("style", "color:black; border: 1px green solid ;");
        Ville_err_patient.innerText = "";
    }
})

// validate email
submit_patient.addEventListener("click", (e) => {
    if (Email_patient.value == "" || !(/^[a-zA-Z_0-9]{3,}@[a-zA-Z]{3,}[.]{1}[a-z]{2,4}$/).test(Email_patient.value)) {
        e.preventDefault();
        Email_patient.setAttribute("style", "color:red; border: 1px red solid ;");
        Email_err_patient.innerText = "Veuillez entrer votre Adresse Mail"
        Email_err_patient.setAttribute("style", "color:red;font-size:10px;");
    } else {
        Email_patient.setAttribute("style", "color:black; border: 1px green solid ;");
        Email_err_patient.innerText = "";
    }
})


// validate Num
submit_patient.addEventListener("click", (e) => {
    if (Num_patient.value == "" || !(/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/).test(Num_patient.value)) {
        e.preventDefault();
        Num_patient.setAttribute("style", "color:red; border: 1px red solid ;");
        Num_err_patient.innerText = "Veuillez entrer un numéro valide"
        Num_err_patient.setAttribute("style", "color:red;font-size:10px;");
    } else {
        Num_patient.setAttribute("style", "color:black; border: 1px green solid ;");
        Num_err_patient.innerText = "";
    }
})

// validate Date
submit_patient.addEventListener("click", (e) => {
    if (Date_patient.value == "") {
        e.preventDefault();
        Date_patient.setAttribute("style", "color:red; border: 1px red solid ;");
        Date_err_patient.innerText = "Veuillez entrer votre date de naissance"
        Date_err_patient.setAttribute("style", "color:red;font-size:10px;");
    } else {
        Date_patient.setAttribute("style", "color:black; border: 1px green solid ;");
        Date_err_patient.innerText = "";
    }
})



// regex for name
// function ValidationName() {
//     if (!(/^[a-zA-Z]{5,10}$/).test(Nom_patient.value)) {
//         Nom_patient.setAttribute("style", "color:red; border: 1px red solid ;");
//         Nom_err_patient.setAttribute("style", "color:red;");
//         Nom_err_patient.innerText = "veuillez entrer un nom valid";
//     } else {
//         nameCourse.setAttribute("style", "color:black; border: 1px green solid ;");
//         Nom_err_patient.innerText = "";
//     }
// }