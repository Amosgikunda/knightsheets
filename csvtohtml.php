<!DOCTYPE html>
<html lang="en">

<head>
    <title> Convert CSV to HTML online free download </title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/style.css">
    <meta name="description" content="Convert CSV file to HTML file for Free using Knight Sheets' converter. Enjoy fast, secure and easy conversion.">
    <?php require('./view/headercodes.php'); ?>
</head>


<body>
    <?php require('./view/nav.php'); ?>

    <p style="text-align:center;"> Drag and drop or Select your CSV file to convert it to HTML instantly
    </p>

    <center>
        <form action="csvtohtmlupload.php" method="POST" enctype="multipart/form-data" class="body">
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
                        Convert Your CSV file to HTML within seconds
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
            <p>sometimes you might need to convert CSV to other formats such as HTML. Knightsheets provides a fast solution for users to convert CSV to HTML with one click and no Email required.
                Our tool is 100% free to use. </p>
            &nbsp;

            <h3>How to use CSV to HTML Converter</h3>


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
                <b>4.</b> The html file will download automatically
            </p>
            <br>

            <h3>Advantages of converting CSV to HTML</h3>

            <p>
                <b>1.</b> HTML can be viewed by all browsers
            </p>
            <p>
                <b>2.</b> HTML is lightweight
            <p>
                <b>3.</b> HTML does not require special softwre to edit. You ca use any simple text editor like notepad, Sublime, and VS.
            </p>

            <p>
                <b>4.</b> HTML integrates easily with other languases such as Javascript, CSS and PHP.
            </p>
            <p>
                <b>5.</b> HTML is Easy to learn
            </p>
            <br>

            <h3>CSV Vs HTML</h3>
            <p>
                <b>1.Full Form</b> CSV stands for comma seperated values while HTML stands for hypertext markup language
            </p>
            <p>
                <b>2 Graphics.</b> HTML can display graphics images and videos
            </p>
            <p>
                <b>3. Portability.</b> HTML can be accesed by any web browser while CSV is limited to text editors and document readers
            </p>

        </div>

    </center>

    <style>
        .description {

            text-align: justify;

            width: 85vw;

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