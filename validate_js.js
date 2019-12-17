function check_empty(){
    if(document.getElementById('fname').value == "" || document.getElementById('lname').value == "" || document.getElementById('email').value == "" || document.getElementById('subject').value == "" || document.getElementById('message').value == "" ||){
       alert("Fill all the fields!!");

    }
    else{
        document.getElementById('form').submit();
        alert("Form submitted successfully....");
    }}
    