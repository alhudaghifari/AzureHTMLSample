<!DOCTYPE html>
<html>

<head>
    <title>Analyze Sample</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
</head>

<body>
    <br /><br />
    <script src="js/somefunc.js"></script>
    <div class="container">
        <h1>Upload Image to Blob</h1>

        <?php
        if (isset($_GET["uploadimg"])) {
            include("uploadimage.php");
        }
        ?>

        <form action="imagepage.php?uploadimg" method="post" enctype="multipart/form-data">
            Select image to upload:
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Upload Image" name="submit" class="btn btn-primary">
        </form>

        <h3>Daftar File</h3>
        <?php
        include("readblobimg.php");
        ?>

        <h1>Analyze image:</h1>
        Enter the URL to an image, then click the <strong>Analyze image</strong> button.
        <br><br>
        Image to analyze:
        <input type="text" name="inputImage" id="inputImage" value="http://upload.wikimedia.org/wikipedia/commons/3/3c/Shaki_waterfall.jpg" />
        <button onclick="processImage()" class="btn btn-primary">Analyze image</button>
        <br><br>
        <div id="wrapper" style="width:1020px; display:table;">
            <div id="jsonOutput" style="width:600px; display:table-cell;">
                Response:
                <br><br>
                <textarea id="responseTextArea" class="UIInput" style="width:580px; height:400px;"></textarea>
            </div>
            <div id="imageDiv" style="width:420px; display:table-cell;">
                Source image:
                <br><br>
                <img id="sourceImage" width="400" />
            </div>
        </div>
    </div>
</body>

</html>