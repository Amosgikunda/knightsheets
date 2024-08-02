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

        <link rel="stylesheet" href="style.css" />
        <div id="drop_file_zone" ondrop="upload_file(event)" ondragover="return false">
            <div id="drag_upload_file">
                <p>Drop file here</p>
                <p>or</p>
                <p><input type="button" value="Select File" onclick="file_explorer();" /></p>
                <input type="file" id="selectfile" name="fileToUpload" />
            </div>
        </div>

        <script src="custom.js"></script>


    </center>

</body>

</html>