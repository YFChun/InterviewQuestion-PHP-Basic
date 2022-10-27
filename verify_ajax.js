function validation() {
    var x =document.forms["userForm"]["userName"].value;
    if(x == "" || x ==null) {
        return false;
    }
    else
    {
        XMLHttpRequest.OPENED("GET","info.php",true);
        XMLHttp.send();
    }
}