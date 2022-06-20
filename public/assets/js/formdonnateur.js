// form validation for form donnateur and patient rendez vous

// Declaration of variables :

let Nom_donnateurs = document.getElementById("Nom_donnateurs");
let Nom_error = document.getElementById("Nom_error");
let Prenom_donnateurs = document.getElementById("Prenom_donnateurs");
let Prenom_error = document.getElementById("Prenom_error");
let Adresse_donnateurs = document.getElementById("Adresse_donnateurs");
let Adresse_error = document.getElementById("Adresse_error");
let Ville_donnateurs = document.getElementById("Ville_donnateurs");
let Ville_error = document.getElementById("Ville_error");
let Email_donnateurs = document.getElementById("Email_donnateurs");
let Email_error = document.getElementById("Email_error");
let Num_donnateurs = document.getElementById("Num_donnateurs");
let Num_error = document.getElementById("Num_error");
let Date_donnateurs = document.getElementById("Date_donnateurs");
let Date_error = document.getElementById("Date_error");
let submit_donnateurs = document.getElementById("submit_donnateurs");


let select_donnateurs = document.getElementById("select_donnateurs");



// validate name
submit_donnateurs.addEventListener("click", (e) => {
    if (Nom_donnateurs.value == "" || !(/^[a-zA-Z]{5,}$/).test(Nom_donnateurs.value)) {
        e.preventDefault();
        Nom_donnateurs.setAttribute("style", "color:red; border: 1px red solid ;");
        Nom_error.innerText = "Veuillez entrer un nom valide ! verifiez que le nom contient au minimum 5 caractéres!!"
        Nom_error.setAttribute("style", "color:red;font-size:10px;");
    } else {
        Nom_donnateurs.setAttribute("style", "color:black; border: 1px green solid ;");
        Nom_error.innerText = "";
    }
})

// validate prenom
submit_donnateurs.addEventListener("click", (e) => {
    if (Prenom_donnateurs.value == "" || !(/^[a-zA-Z]{5,}$/).test(Prenom_donnateurs.value)) {
        e.preventDefault();
        Prenom_donnateurs.setAttribute("style", "color:red; border: 1px red solid ;");
        Prenom_error.innerText = "Veuillez entrer un Prenom valide ! verifiez que le prenom contient au minimum 5 caractéres!!"
        Prenom_error.setAttribute("style", "color:red;font-size:10px;");
    } else {
        Prenom_donnateurs.setAttribute("style", "color:black; border: 1px green solid ;");
        Prenom_error.innerText = "";
    }
})

// validate adresse 
submit_donnateurs.addEventListener("click", (e) => {
        if (Adresse_donnateurs.value == "" || !(/^[a-z A-Z0-9]{5,30}$/).test(Adresse_donnateurs.value)) {
            e.preventDefault();
            Adresse_donnateurs.setAttribute("style", "color:red; border: 1px red solid ;");
            Adresse_error.innerText = "Veuillez entrer une Adresse Valide (5 caractéres minimum)!"
            Adresse_error.setAttribute("style", "color:red;font-size:10px;");
        } else {
            Adresse_donnateurs.setAttribute("style", "color:black; border: 1px green solid ;");
            Adresse_error.innerText = "";
        }
    })
    // validate ville
submit_donnateurs.addEventListener("click", (e) => {
    if (Ville_donnateurs.value == "" || !(/^[a-zA-Z]{5,10}$/).test(Ville_donnateurs.value)) {
        e.preventDefault();
        Ville_donnateurs.setAttribute("style", "color:red; border: 1px red solid ;");
        Ville_error.innerText = "Veuillez entrer une ville valide"
        Ville_error.setAttribute("style", "color:red;font-size:10px;");
    } else {
        Ville_donnateurs.setAttribute("style", "color:black; border: 1px green solid ;");
        Ville_error.innerText = "";
    }
})

// validate email
submit_donnateurs.addEventListener("click", (e) => {
    if (Email_donnateurs.value == "" || !(/^[a-zA-Z_0-9]{3,}@[a-zA-Z]{3,}[.]{1}[a-z]{2,4}$/).test(Email_donnateurs.value)) {
        e.preventDefault();
        Email_donnateurs.setAttribute("style", "color:red; border: 1px red solid ;");
        Email_error.innerText = "Veuillez entrer  une Adresse mail Valide"
        Email_error.setAttribute("style", "color:red;font-size:10px;");
    } else {
        Email_donnateurs.setAttribute("style", "color:black; border: 1px green solid ;");
        Email_error.innerText = "";
    }
})


// validate Num
submit_donnateurs.addEventListener("click", (e) => {
    if (Num_donnateurs.value == "" || !(/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/).test(Num_donnateurs.value)) {
        e.preventDefault();
        Num_donnateurs.setAttribute("style", "color:red; border: 1px red solid ;");
        Num_error.innerText = "Veuillez entrer un numéro valide"
        Num_error.setAttribute("style", "color:red;font-size:10px;");
    } else {
        Num_donnateurs.setAttribute("style", "color:black; border: 1px green solid ;");
        Num_error.innerText = "";
    }
})

// validate Date
submit_donnateurs.addEventListener("click", (e) => {
    if (Date_donnateurs.value == "") {
        e.preventDefault();
        Date_donnateurs.setAttribute("style", "color:red; border: 1px red solid ;");
        Date_error.innerText = "Veuillez entrer votre date de naissance"
        Date_error.setAttribute("style", "color:red;font-size:10px;");
    } else {
        Date_donnateurs.setAttribute("style", "color:black; border: 1px green solid ;");
        Date_error.innerText = "";
    }
})