const form = document.querySelector("form");
var error = document.querySelector("#error");
form.onsubmit = (e) =>{
    e.preventDefault();
}
function register(){
    let xhr = new XMLHttpRequest;
    xhr.open("POST","php/signin.php");
    xhr.onload = () =>{
        if (xhr.readyState = XMLHttpRequest.DONE) {
            if (xhr.status == 200) {
                let data = xhr.response;
                if (data == 'success') {
                    location.href = 'admin.php';
                }else{
                    error.textContent = data;
                }
            }
        }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}