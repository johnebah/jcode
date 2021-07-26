var users = document.querySelector("#users");
const form = document.querySelector("form");
var error = document.querySelector("#error");
setInterval(() => {
   let xhr = new XMLHttpRequest;
   xhr.open("GET","php/users.php");
   xhr.onload = () =>{
       if (xhr.readyState == XMLHttpRequest.DONE) {
           if (xhr.status == 200) {
               let data = xhr.response;
               users.innerHTML = data;
           }
       }
   } 
   xhr.send();
}, 500);


form.onsubmit = (e) =>{
    e.preventDefault();
}
function register(){
    let xhr = new XMLHttpRequest;
    xhr.open("POST","php/verify.php");
    xhr.onload = () =>{
        if (xhr.readyState = XMLHttpRequest.DONE) {
            if (xhr.status == 200) {
                let data = xhr.response;
                if (data == 'success') {
                    alert("verified");
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