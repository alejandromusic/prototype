<?php include ("header.php"); ?>

<h1>SCpedia: Sign-in</h1>
<p class="text-center"><i>The most authoritative site in the world</i></p>

<div class="container">
    <div class="row">
        <div class="col-sm-8">


        <h5>Key Features</h5>

        <ol>
            <li>Most reputable users have the highest control over content of expertise</li>
            <li>Highest reputation acquired by endorsement of a university</li>
            <li>Authentication and history of articles stored in blockchain</li>
            <li>You always know who wrote or contributed to each article</li>
            <li>Only people with higher knowledge than the author can edit an article</li>
            <li>Excellent way to learn about emergent research</li>
        </ol>
        </div>
        <div class="col-sm-4">

            <h2 id="info">Verifying Credentials...</h2>
        </div>


    </div>
</div>

<script>
setTimeout(function(){ 
    $("#info").text("verification ok");
    setTimeout(function(){ 
        $("#info").text("redirecting");
        setTimeout(function(){ location.href = "contribute"; }, 500);
    }, 1000);
}, 3000);

</script>

<?php include ("footer.php"); ?>
