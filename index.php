<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('./include/header.php');
    ?>
</head>

<body>

    <div class="container">
        <form action="" class="form mb-4" method="POST">
            <div class="heading my-3">
                <h1 class="display-5">Word Counter</h1>
            </div>

            <div class="legend">
                <legend class="text-center text-muted">Paste/write your text below to count!</legend>
            </div>

            <div class="form-group m-5">
                <textarea id="words" rows="15" class="form-control shadow" placeholder="enter texts..." name="words" onkeyup="showResult(this.value)"></textarea>
            </div>

            <div class="text-center" id="result"></div>
        </form>

        <div class="row m-4 shadow">
            <button class="btn btn-success col-sm" name="view">View Text</button>
            <button class="btn btn-info col-sm" name="format">Format Text</button>
            <button class="btn btn-secondary col-sm" name="copy">Copy Text</button>
        </div>

    </div>

    <script>
        function showResult(str) {
            if (str.length == 0) {
                document.getElementById("result").innerHTML = "";
                document.getElementById("result").style.border = "0px";
                return;
            }
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("result").innerHTML = this.responseText;
                    document.getElementById("result").style.border = "1px solid #A5ACB2";
                }
            }
            xmlhttp.open("GET", "include/function.php?q=" + str, true);
            xmlhttp.send();
        }
    </script>
    <script src="bootstrap/js/bootstrap.js"></script>

</body>

<!-- Footer Section -->
<div class="footer">
    <p>
        <?php include('./include/footer.php');
        ?>
    </p>
</div>

</html>