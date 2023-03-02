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
        $("#failed!").show();
    }
}
$(document).ready
(
    function()
    {
        $("#search_btn").click(function()
        {
            $("#success").toggle(500,function()
            {
                $("#mypara").append("<br> aniamation");
            })
            $("#search_btn").on({
                mouseenter:function(){$(this).css("background-color","red");},
                mouseleave:function(){$(this).css("background-color","green");},
                click:search
            })
        })
    }
)
$(document).ready(function(){
$("#text").keyup(function(){
var text = $("#text"). val()

var count = text.length;
document. getElementById("len").innerHTML=count;
if(count>50)
    $("#failed1").show();
})}
)