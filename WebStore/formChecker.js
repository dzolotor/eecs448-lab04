function reset()
{
    document.getElementById("email").value="";
    document.getElementById("pw").value="";
    document.getElementById("p1").value="";
    document.getElementById("p2").value="";
    document.getElementById("p3").value="";
    document.getElementById("shipping").checked = false;
}

function isValid()
{
    var email    = document.getElementById("email").value;

    if(email == "" || !(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/).test(email))
    {
        alert("Please enter a valid email");
        return(false);
    }
 
    var pw       = document.getElementById("pw").value;
    if(pw == "")
    {
        alert("Please enter a password");
        return(false);
    }
 
    var p1       = document.getElementById("p1").value;
    var p2       = document.getElementById("p2").value;
    var p3       = document.getElementById("p3").value;
    if(p1 < 0 || p1 == "" || p2 < 0 || p2 == "" || p3 < 0 || 3 == "")
    {
        alert("Please enter the number of contracts at each price ( >= 0 )!");
        return(false);
    }
    
    var shipping = document.getElementById("shipping");
    if(!(ship1.checked || ship2.checked ||ship3.checked))
    {
        alert("You must choose a shipment");
        return(false);
    }
    
    return true;
}
