
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<?php
//adam please
$conn = mysqli_connect("localhost","root","","ajax");
?>

<form method="get"  id="frm">
<input type="text" name="product" id="insertval" placeholder="Enter name">
<input type="submit">
</form>

<div id="output"></div>

<script>
    
    $(document).ready(function(){
        select();
    });

    function select()
    {
        $.ajax({
            type: "GET",
            url: "select.php",
            data: "html",
            success: function(result){

                $("#output").html(result);

            }

        });
    }


    $("#frm").submit(function(e){
        e.preventDefault();
        $.ajax({
            type: "GET",
            url: "insert.php",
            data: $("#frm").serialize(),
            success: function(){
                select();
                alert("Done");
            }

        });
        $("#insertval").val("");
    });

</script>

