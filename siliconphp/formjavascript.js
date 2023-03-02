$(document).ready
(
    function()
    {
        $("#student-first-name").change
        (function()
            {
                if($("#student-first-name").val().length<3)
                {
                   $("#student-first-name").css("background-color","red")
                }
                else
                   $("#student-first-name").css("background-color","white")
            }

        )

    }
)