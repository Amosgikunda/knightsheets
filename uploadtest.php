<!DOCTYPE html>
<html lang="en">
<meta charset="UT-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<head>
    <title> Convert Excel File To PDF</title>

    <link rel="stylesheet" href="style.css" />


</head>

<body>
    <p style="text-align:center;"> Drg and drop or Select your Excel file to convert it to PDF instantly</p>
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

</body>

</html>