<!DOCTYPE html>
<html lang="en">

<head>
    <title> Excel to PDF converter online free without email</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/style.css">
    <meta name="description" content=" Convert Excel To PDF using Knightsheets Free Tool. It only takes one click and annd a few seconds using this Excel to PDF converter">
    <?php require('./view/headercodes.php'); ?>
</head>

<body>
    <?php require('./view/nav.php'); ?>

    <p style="text-align:center;"> Drag and drop or Select your Excel file to convert it to PDF instantly</p>
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
    <center>
        <div class="icon-container gray-background">

            <div class="icon lefticon">
                <figure>
                    <img src="images/secureicon.png" class="img-responsive center-block" style=" height:auto; width:30%;">
                    <Figcaption>
                        <h3>1) Secure </h3>
                        We do not collect any data. The file is processed on the users browser.
                    </Figcaption>
                </figure>
            </div>
            <div class="icon middleicon">
                <figure>
                    <img src="images/fasticon.png" class="img-responsive center-block" style=" height:auto; width:30%;">
                    <figcaption>
                        <h3>2) Fast </h3>
                        Convert Your excel file to PDF within seconds
                    </figcaption>
                </figure>

            </div>

            <div class="icon righticon">
                <figure>
                    <img src="images/easyicon.png" class="img-responsive center-block" style=" height:auto; width:30%;">
                    <figcaption>
                        <h3>3) Easy</h3>

                        <P> No complicated formulas or method just One click Conversion</P>

                    </figcaption>
                </figure>

            </div>

    </center>

    <center>

        <div class="description">
            <h3>What is a PDF?</h3>
            <p> PDF stands for Portable Document Format in full. It is a format that can display documents in many types of electronic devices. It was originally developed by Adobe as a universl file format, and since become the internatinal standard for exchanging documents.
                Some times when dealing with excel you might need to convert it to other formats suchas PDF. Knightsheets provides a fast solution for users to convert their spreadsheet to PDF with one click and no Email required.
                Our tool is 100% free to use. </p>
            &nbsp;

            <h3>How to use Excel to PDF Converter</h3>


            <p>
                <b>1.</b> Click on the dropzone to browse files or drag and drop your excel file
            </p>
            <p>
                <b>2.</b> Click on convert
            </p>
            <p>
                <b>3.</b> Wait for a few seconds for the file to be processed by the server
            </p>
            <br>

            <h3>Advantages of converting Excel to PDF</h3>

            <p>
                <b>1.</b> Accessible by most devices
            </p>
            <p>
                <b>2.</b> PDF is the best format for longterm archiving as it doesnt change versions like Excel
            </p>
            <p>
                <b>3.</b> Mantain your files' integrity as it cannot be easily edited
            </p>

            <p>
                <b>4.</b> PDF's are easy to share since they do not require specific software
            </p>
            <p>
                <b>5.</b> You can decrease the file size by lowering its quality
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

    </div>
    <?php require('./view/blocks.php'); ?>
    <?php require('./view/footer.php'); ?>
</body>

</html>