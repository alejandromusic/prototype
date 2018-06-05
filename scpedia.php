<?php include ("header.php"); ?>

<h1>SCpedia</h1>
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

            <div class="spaceTop">
                <button id="contr" class="btn btn-default">Contribute</button><br><br>
                <button class="btn btn-primary">Explore Articles</button>
            </div>
        </div>


    </div>
</div>


<script>
$("#contr").click(function(){
    location.href = "signin.php";
});
</script>
<?php include ("footer.php"); ?>
