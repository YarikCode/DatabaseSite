let submitButton = document.querySelector(".input_button");
let form = document.querySelector(".block_1_form");

submitButton.addEventListener('click', () => {
    let inputName = document.querySelector("#form_name");
    let inputNumber = document.querySelector("#form_number");

    let name = inputName.value;
    let number = inputNumber.value;

    if(number != "" && name != ""){
        $.ajax({
            url: './database/add_app.php',         
            method: 'get',            
            dataType: 'html',
            data: {name: name, number: number},   
            success: function(data){
                alert(data);
            }  
        });
        form.reset();
    }
    else{
        alert("Заполните все поля!");
    }
});


$(document).ready(function() {
    $("#form_number").mask("+7 (999) 999-99-99");
});