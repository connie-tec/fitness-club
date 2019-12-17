

function subscription(){

    var subscribe = document.getElementById("subscribe").value;

    var text;

    error_message = document.getElementById("error_message");

    if(subscribe==0){
        text="Please enter your email address";
        error_messsage.innerHTML = text;
        return false
    }

    alert("Thank you for Subscribing!!")
   return true; 

}

function validation(){
    var firstname = document.getElementById("fname").value;
    var lastname = document.getElementById("lname").value;
    var email = document.getElementById("email").value;
    var subject = document.getElementById("subject").value;
    var message = document.getElementById("message").value;
    var error_message = document.getElementById("error_message");

    var text;

    error_message.style.padding = "10px";

    if(firstname.length<4){
        text="Please Enter Valid First Name";
        error_message.innerHTML = text;
        return false;

    }

    if(lastname.length<4){
        text="Please Enter Valid Last Name";
        error_message.innerHTML = text;
        return false;

    }
    
    if(email .indexOf("@") == -1){
        text="Please Enter Valid Email";
        error_message.innerHTML = text;
        return false;

    }
    if(subject.length<10){
        text="Please Enter Correct Values of Subject";
        error_message.innerHTML = text;
        return false;

    }
    if(message.length<=50){
        text="Please Enter atleast 140  characters";
        error_message.innerHTML = text;
        return false;

    }

    alert("Form submitted successfuly!!")
   return true; 

    
}