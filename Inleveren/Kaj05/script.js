let name_input_field = document.getElementById("name")
let password_input_field = document.getElementById("password")
let output_text = document.getElementById("output")

let users = [
    {"naam": "Chris","wachtwoord": "Deltion12345!!"},
    {"naam": "Kevin","wachtwoord": "Deltion45678!!"},
    {"naam": "Koos","wachtwoord": "DeltionX12345!"},
    {"naam": "Marloes","wachtwoord": "DeltionY45678!"},
    {"naam": "Ronald","wachtwoord": "DeltionZ12345!"}
]

// name_key_down()
// password_key_down()
// DisplayUsers()

function name_key_down(){
    if(name_input_field.value.length >= 2){
        name_input_field.style.borderColor = "Green"
    }else{
        name_input_field.style.borderColor = "Red"
    }
}
function password_key_down(){
    let password_error_text = document.getElementById("password_error")
    if(password_input_field.value.length >= 10){
        password_input_field.style.borderColor = "Green"
        password_error_text.innerHTML = ""
    }else{
        password_input_field.style.borderColor = "Red"
        password_error_text.innerHTML = "wachtwoord moet minstens 10 tekens zijn"
    }
}

function login(){
    let name_value = name_input_field.value
    let password_value = password_input_field.value

    console.log(name_value + " probeert in te loggen")

    if(name_value == "Chris" && password_value == "DeltionGeheim123!"){
        console.log("inloggen gelukt")
        output_text.innerHTML = "Inloggen Gelukt!"
        DisplayUsers()
    }else{
        console.log("inloggen mislukt")
        output_text.innerHTML = "Inloggen mislukt!"
    }
}

function login2(){
    let name_value = name_input_field.value
    let password_value = password_input_field.value

    console.log(name_value + " probeert in te loggen")
    let output = ""
    for (let user in users) {
        let name = users[user].naam;
        let password = users[user].wachtwoord;

        if(name_value == name && password_value == password){
            console.log("inloggen gelukt")
            output_text.innerHTML = "Inloggen Gelukt!"
            DisplayUsers()

            break;
        }else{
            console.log("inloggen mislukt")
            output_text.innerHTML = "Inloggen Mislukt!"
        }
    }
}

function DisplayUsers(){
    let userTable = document.getElementById("user_table")
    let index = 0
    for (let user in users) {
        let name = users[user].naam;
        let password = users[user].wachtwoord;
        
        userTable.innerHTML += "<tr><td>"+ name +"</td><td class='table-password-output' onmouseover='mouseover("+index+")' onmouseout='mouseout("+index+")'>"+ password +"</td></tr>"
        mouseout(index)
        index++
    }
}

function mouseover(index){
    console.log(index)

    let allPasswords = document.getElementsByClassName("table-password-output")

    allPasswords[index].innerHTML = users[index].wachtwoord
}
function mouseout(index){
    console.log(index)

    let allPasswords = document.getElementsByClassName("table-password-output")

    let passwordLength = allPasswords[index].innerHTML.length

    allPasswords[index].innerHTML = ""
    for (let i = 0; i < passwordLength; i++) {
        allPasswords[index].innerHTML += "*"
    }
}