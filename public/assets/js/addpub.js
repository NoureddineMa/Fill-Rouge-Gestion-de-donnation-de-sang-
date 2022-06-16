let Image = document.getElementById("Image")
let Image_error = document.getElementById("Image_error")


let Title = document.getElementById("Title")
let Title_error = document.getElementById("Title_error")

let Description = document.getElementById("Description")
let Description_error = document.getElementById("Description_error");

let submit = document.getElementById("submit")



// Image Input validation  : 
submit.addEventListener("click", (e) => {
    if (Image.value == "") {
        e.preventDefault();
        Image.setAttribute("style", "color:red; border: 1px red solid ;");
        Image_error.innerText = "Veuillez entrer Une Image"
        Image_error.setAttribute("style", "color:red;font-size:10px;");
    } else {
        Image.setAttribute("style", "color:black; border: 1px green solid ;");
        Image_error.innerText = "";
    }
})

// title Input Validation :
submit.addEventListener("click", (e) => {
        if (Title.value == "") {
            e.preventDefault();
            Title.setAttribute("style", "color:red; border: 1px red solid ;");
            Title_error.innerText = "Veuillez entrer Un titre"
            Title_error.setAttribute("style", "color:red;font-size:10px;");
        } else {
            Title.setAttribute("style", "color:black; border: 1px green solid ;");
            Title_error.innerText = "";
        }
    })
    // Description Input Validation :
submit.addEventListener("click", (e) => {
    if (Description.value == "") {
        e.preventDefault();
        Description.setAttribute("style", "color:red; border: 1px red solid ;");
        Description_error.innerText = "Veuillez entrer une Description"
        Description_error.setAttribute("style", "color:red;font-size:10px;");
    } else {
        Description.setAttribute("style", "color:black; border: 1px green solid ;");
        Description_error.innerText = "";
    }
})