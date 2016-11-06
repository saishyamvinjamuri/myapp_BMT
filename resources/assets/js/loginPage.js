/**
 * Created by shyam on 5/4/2016.
 */
function redirect_Guestuser()
    {
        console.log("inside java script");
        var username1, password1;
        var url = "http://localhost:63342/untitled/src/BMT_User.html";
        username1 = document.getElementById("uname");
        password1 = document.getElementById("pword");
        console.log("password value is: "+password1.value);
        //alert("Your username is "+username1.value +" and your passoword is "+password1.value);
        if(username1.value == "shyam" && password1.value == "vinjamuri")
        {
            alert("Login successful");
            window.open(url);
            console.log("before redirection");
        }else{
            alert("Login failed");
        }
    }