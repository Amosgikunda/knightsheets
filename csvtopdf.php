<!DOCTYPE html>
<html lang="en">

<head>
    <title> </title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/style.css">
    <?php require('./view/headercodes.php'); ?>
</head>

<body>
    <?php require('./view/nav.php'); ?>

    <p style="text-align:center;"> Drag and drop or Select your CSV file to convert it to PDF instantly</p>
    <center>
        <form action="upload.php" method="POST" enctype="multipart/form-data" class="body">
            <div id="drop_file_zone" ondrop="true" ondragover="true">
                <div id="drag_upload_file">
                    <p>Drop file here</p>
                    <p>or</p>
                    <p><input type="file" name="fileToUpload" value="Select File" id="fileToUpload" required /></p>


                </div>

                <button name="upload" class="btn">Upload</button>
        </form>

    </center>
    <?php require('./view/blocks.php'); ?>
    <?php require('./view/footer.php'); ?>
</body>

</html>