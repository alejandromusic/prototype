<?php include ("functions.php"); ?>
<?php include ("header.php"); ?>

<?php

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if($_POST["username"] == "alex") { redirect("keys"); }
    }
?>

<h1>Hello Alex</h1>

<div class="container">
    <div class="row">

        <h4>Official Information</h4>
        <table class="table table-bordered spaceTop">
            <tr>
                <td>First Name: </td><td>Alex</td>
            <tr>
            </tr>
                <td>Last Name: </td><td>Blake</td>
            <tr>
            </tr>
                <td>Degree: </td><td>Ph. D.</td>
            <tr>
            </tr>
                <td>Major: </td><td>Psychology</td>
            <tr>
            </tr>
                <td>Block: </td><td>a93948d58c70c7431fe2061afb5ad93649f277203879600d36b68fda1c72759e</td>
            <tr>
            </tr>
                <td>Private Key: </td><td>cacaff054725aa408e5090c56c86dd57cbfe8429049b57c86d66f163331ad530</td>
        </table>



    </div>
</div>

<?php include ("header.php"); ?>
