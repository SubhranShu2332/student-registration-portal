function search()
{
    let text=document.getElementById("mypara").innerHTML;
    let search=document.getElementById("myInput1").value;
    let x=text.indexOf(search);
    if(x>=0)
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