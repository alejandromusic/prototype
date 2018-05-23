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

            <form role="form" method="post" action="signed">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username"
                        placeholder="Enter username" name="username" autofocus>
                </div>
                <div class="form-group">
                    <label for="username">First Name</label>
                    <input type="text" class="form-control" id="firstName"
                        placeholder="Enter first name" name="firstName">
                </div>
                <div class="form-group">
                    <label for="username">Last Name</label>
                    <input type="text" class="form-control" id="lastName"
                        placeholder="Enter lastName" name="lastName">
                </div>
                <div class="form-group">
                    <label for="email1">Email</label>
                    <input type="text" class="form-control" id="email1"
                        placeholder="Enter email" name="email">
                </div>
                <div class="form-group">
                    <label for="block">Block Endorsement</label>
                    <input type="text" class="form-control" id="block"
                        placeholder="Enter block" name="block">
                </div>
                <div class="form-group">
                    <label for="token">Token</label>
                    <input type="text" class="form-control" id="token"
                        placeholder="Enter token" name="token">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" 
                        id="password" name="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="confirm">Confirm Password</label>
                    <input type="confirm" class="form-control" 
                        id="confirm" name="confirm" placeholder="confirm">
                </div>

                <button type="submit" class="btn btn-default" value="Sign-in">Sign-In</button>
            </form>
        </div>


    </div>
</div>


<?php include ("footer.php"); ?>

