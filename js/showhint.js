let hint = document.createElement('div');
let mouseInElement = false;
let activeElement = null;
let result;
hint.classList.add("hint");

document.addEventListener('mouseover', (event) => {
    if(event.target.classList.value == "tr_table"){
        activeElement = event.target;
        showId();
        mouseInElement = true;
        hint.style.display = "block";
        document.body.appendChild(hint);
    }
})

document.addEventListener('mouseout', (event) => {
    if(event.target.classList.value == "tr_table"){
        activeElement = null;
        mouseInElement = false;
        hint.style.display = "none";
        hint.remove();
    }
})

document.addEventListener('mousemove', (event) => {
    if(mouseInElement == true){
        hint.style.left = event.pageX + 20 + "px";
        hint.style.top = event.pageY + 20 + "px";
    }
})

function showId(){
    var table = activeElement.id;
    var id = activeElement.innerText;

    $.ajax({
        url: './return_record.php',         
        method: 'get',            
        dataType: 'html',
        data: {table: table, id: id},   
        success: function(data){
            hint.innerHTML = data;
        }  
    });
    return result;
}
