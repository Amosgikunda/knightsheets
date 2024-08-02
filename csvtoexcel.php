<!DOCTYPE html>
<html lang="en">

<head>
    <title> Convert CSV to XLSX online </title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/style.css">
    <meta name="description" content="Looking to Convert CSV to XLSX online for free? Use Knight Sheets one click tool.> ">
    <?php require('./view/headercodes.php'); ?>
</head>


<body>
    <?php require('./view/nav.php'); ?>

    <p style="text-align:center;"> Drag and drop or Select your CSV file to convert it to Excel instantly
    </p>

    <center>
        <form action="csvtoexcelupload.php" method="POST" enctype="multipart/form-data" class="body">
            <div id="drop_file_zone" ondrop="true" ondragover="true">
                <div id="drag_upload_file">
                    <p>Drop file here</p>
                    <p>or</p>
                    <p><input type="file" name="fileToUpload" value="Select File" id="fileToUpload" required /></p>


                </div>

                <button name="upload" class="btn">Upload</button>
        </form>

    </center>
    <center>
        <div class="icon-container gray-background">

            <div class="icon lefticon">
                <figure>
                    <img src="images/secureicon.png" class="img-responsive center-block" style=" height:auto; width:30%;">
                    <Figcaptiopn>
                        <h3>1) Secure </h3>
                        We do not collect any data. The file is processed on the users browser.
                    </Figcaptiopn>
                </figure>
            </div>
            <div class="icon middleicon">
                <figure>
                    <img src="images/fasticon.png" class="img-responsive center-block" style=" height:auto; width:30%;">
                    <figcaption>
                        <h3>2) Fast </h3>
                        Convert Your CSV file to XLSX within seconds
                    </figcaption>
                </figure>

            </div>

            <div class="icon righticon">
                <figure>
                    <img src="images/easyicon.png" class="img-responsive center-block" style=" height:auto; width:30%;">
                    <figcaption>
                        <h3>3) Easy</h3>

                        No complicated formulas or method just One click Conversion

                    </figcaption>
                </figure>

            </div>

    </center>

    <center>

        <div class="description">
            <h3>What is an XLSX file format? </h3>
            <p>XLSX initials stand for Microsoft Excel Open XML spreadsheet. It is an extension for saving modern Microsoft excel formats. You need to open it using an Excel program or 3rd partY apss such as Google Sheets, OpenOffice and so on. Excel is one of the most used platforms by corporates and organizations to store and manage data.
                Sometimes you might need to convert CSV to other formats suchas XLSX. Knightsheets provides a fast solution for users to convert their CSV files with one click and no Email required.
                Our tool is 100% free to use. </p>
            &nbsp;

            <h3>How to use CSV to XLSX Converter</h3>


            <p>
                <b>1.</b> Click on the dropzone to browse files or drag and drop your excel file
            </p>
            <p>
                <b>2.</b> Click on convert
            </p>
            <p>
                <b>3.</b> Wait for a few seconds for the file to be processed by the server
            </p>
            <p>
                <b>4.</b> Your XLSX file will download automatically
            </p>
            <br>

            <h3>Advantages of converting CSV to XLSX</h3>

            <p>
                <b>1.</b> XLSX is the best format for storing more complex data
            </p>
            <p>
                <b>2.</b> XLSX file can be encrypted using a password
            </p>
            <p>
                <b>3.</b> XLSX format can perform formulas, functions, and formating easily
            </p>

            <p>
                <b>4.</b> Its easier to read large data sets using XLSX than CSV
            </p>
            <p>
                <b>5.</b> You can link external data and use custom add-ins
            </p>


        </div>

    </center>

    <style>
        .description {

            text-align: justify;

            width: 85%;

            Height: auto;

            border: #097bc0 5px solid;
            border-radius: 4px;

            padding: 10px;





        }

        .icon-container {
            display: flex;
            flex-wrap: wrap;
            max-width: 960px;
            width: 100%;

            margin: 10px;
            text-align: center;

        }



        .icon {
            flex: 0 0 30.1%;
            height: 150px;
            margin-bottom: 25px;
            margin-top: 20px;
            margin-left: 10px;

            background-position: center center;
            /* center the image in the div */
            background-size: cover;
            /* cover the entire div */
            background-repeat: no-repeat;
            background-size: 100%;

            /*  align-items: center;
                justify-content: center; */
            display: flex;
            align-items: center;
            justify-content: center;
        }

        @media screen and (max-width: 960px) {

            .icon,
            .description {
                flex: none;
                position: static;
                width: 90%;

            }
        }
    </style>

    <?php require('./view/blocks.php'); ?>
    <?php require('./view/footer.php'); ?>
</body>

</html>