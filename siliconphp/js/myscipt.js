function changebutton(){
    document.getElementById("mybutton").innerHTML="click mee";
}
function time(){
    document.getElementById("mybutton2").innerHTML=Date();
    alert("ohk good")
}
function toogle(){
    document.getElementById("light").scr="https://toppng.com/uploads/preview/light-bulb-on-off-png-11553940319kdxsp3rf0i.png"
    alert("don't on with a wet hand");
    }
//function hide()
{

   let hide_element=document.getElementById("mypara");
   hide_element.style.display="none";
   document.getElementById("myhide").innerHTML="unhide";
   sleep(100) 
     
    unhide() 
   
}
function unhide()
{
    let unhide_element=document.getElementById("mypara");
    unhide_element.style.display="block";

}
function calculate(){
    let cal1=document.getElementById("val1").value;
    let cal2=document.getElementById("val2").value;
    let cal3=document.getElementById("val3").value;
    z=(cal1+cal2+cal3);
    document.getElementById("final").value=z;
    
}
//function search()
/*{
    let text=document.getElementById("mypara").innerHTML;
    if(text.indexOf(document.getElementById("myInput1").value)==0)
        alert("word not found");
    else
        alert("Found!!");
}*/
function search()
{
    let text=document.getElementById("mypara").innerHTML;
    let search=document.getElementById("myInput1").value;
    let x=text.indexOf(search);
    if(x>0)
    {
        $("#success").show();
        $("#failed").hide();
    }
    else
    {
        $("#success").hide();
        $("#failed").show();
    }
}