function readURL(input) 
{
    if (input.files && input.files[0]) 
    {
        var reader = new FileReader();

        reader.onload = function (e) 
        {
            $('#p')
            .attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}
$(function(){
    $("#addRows").click(function () {
        $("#educationtable").append("<tr id = 'r' name = 'r'><td><input></input></td><td><input></input></td><td><input></input></td><td><input></input></td><td><input></input></td><td><input></input></td><td><input></input></td><tr>")
    });
})


