function bloodDonation()
{
    // access all Control
    var weight=document.getElementById("weight");
    var age=document.getElementById("age");
    var hp=document.getElementById("hp");
    var bp=document.getElementById("bp");
    var temp=document.getElementById("temp");
    var pulse=document.getElementById("pulse");

    if(weight.value<="50")
    {
        alert("Sorry Mr/Miss your weight is not correct!");
        weight.focus();
        return;
    }
    if(age.value<="20");
    {
        alert("Sorry Mr/Miss your age is not correct!");
        age.focus();
        return;
    }
    if(hp.value<="70");
    {
        alert("Sorry Mr/Miss your weight is not correct!");
        hp.focus();
        return;
    }
    if(bp.value<="70");
    {
        alert("Sorry Mr/Miss your weight is not correct!");
        bp.focus();
        return;
    }
    if(temp.value<="30");
    {
        alert("Sorry Mr/Miss your weight is not correct!");
        temp.focus();
        return;
    }
    if(pulse<="50");
    {
        alert("Sorry Mr/Miss your weight is not correct!");
        pulse.focus()
        return;
    }
    //read value for all input element
    var weightv=parseInt(weight.value);
    var agev=parseInt(age.value);
    var hpv=parseInt(hp.value);
    var bpv=parseInt(bp.value);
    var tempv=parseInt(temp.value);
    var pulsev=parseInt(pulse.value);




}
function resetBloodDonation()
{
    // set empty string in all element
    document.getElementById("weight").value="";
    document.getElementById("age").value="";
    document.getElementById("hp").value="";
    document.getElementById("bp").value="";
    document.getElementById("temp").value="";
    document.getElementById("pulse").value="";
}
