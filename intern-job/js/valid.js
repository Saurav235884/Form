function validate(){
    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let mob = document.getElementById("mob").value;
    let dob = document.getElementById("dob").value;

    var email_chk = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var mob_chk = /^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[789]\d{9}$/;

    if(name == "")
    {
        document.getElementById("err-name").innerHTML=" *Please Enter the Name";
        document.getElementById("err-name").style.color="red";
        return false;
    }
    if(name.length < 3 || name.length > 20)
    {
        document.getElementById("err-name").innerHTML=" *UserName must be greater than 3 and less than 20";
        document.getElementById("err-name").style.color="red";
        return false;
    }
    else{
        name_val = " *Valid";
        document.getElementById("err-name").innerHTML=name_val;
        document.getElementById("err-name").style.color="green";
    }
    if(email == "")
    {
        document.getElementById("err-email").innerHTML=" *Please Enter the email";
        document.getElementById("err-email").style.color="red";
        return false;
    }
    if(!email_chk.test(email))
    {
        document.getElementById("err-email").innerHTML=" *Please Enter Valid Email";
        document.getElementById("err-email").style.color="red";
        return false;
    }
    else{
        email_val = " *Valid";
        document.getElementById("err-email").innerHTML= email_val;
        document.getElementById("err-email").style.color="green";
    }
    if(mob=="")
    {
        document.getElementById("err-mob").innerHTML=" *Please Enter the phone no.";
        document.getElementById("err-mob").style.color="red";
        return false;   
    }
    if(isNaN(mob))
    {
        document.getElementById("err-mob").innerHTML=" *Please Enter Only Digits";
        document.getElementById("err-mob").style.color="red";
        return false;
    }
    if(!mob.match(mob_chk))
    {
        document.getElementById("err-mob").innerHTML=" *Please Enter the 10 Digit phone no. Start[7 to 9]";
        document.getElementById("err-mob").style.color="red";
        return false;
    }
    else{
        mob_val = " *Valid";
        document.getElementById("err-mob").innerHTML= mob_val;
        document.getElementById("err-mob").style.color="green";
    }
    if(dob=="")
    {
        document.getElementById("err-dob").innerHTML=" *Please Date of Birth";
        document.getElementById("err-dob").style.color="red";
        return false;
    }
    if(dob.match(/^d{4}-{2}-{2}$/))
    {
        dob = " *Valid";
        document.getElementById("err-dob").innerHTML=dob;
        return false;
    }
    
    // document.writeln(name);
    // document.writeln(email);
    // document.writeln(mob);
    // document.writeln(dob);
};