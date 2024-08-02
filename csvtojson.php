<!DOCTYPE html>
<html lang="en">

<head>
    <title> CSV to JSON online free download </title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Convert CSV file to JSON format using Knight Sheets Converter. It only takes a few seconds to process the file ">
    <link rel="stylesheet" href="assets/style.css">
    <script src="http://code.jquery.com/jquery.js"></script>
    <?php require('./view/headercodes.php'); ?>


</head>


<body>
    <?php require('./view/nav.php'); ?>

    <p style="text-align:center;"> Drag and drop or Select your CSV file to convert it to JSON instantly
    </p>

    <center>
        <form action="csvtojsonupload.php" method="POST" enctype="multipart/form-data" class="body">
            <div id="drop_file_zone" ondrop="true" ondragover="true">
                <div id="drag_upload_file">
                    <p>Drop file here</p>
                    <p>or</p>
                    <p><input type="file" name="file" value="Select File" id="fileToUpload" required /></p>


                </div>

                <input type="submit" name="upload_file" value="convert" </input>
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
                        Convert Your CSV file to JSON within seconds
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
            <h3>What is JSON file format?</h3>
            <p>JSON stands for Javascript Object Notation. It is a file format that store data in human readable text objects. It also transmitts data objects inform of arrays and attribute-value pairs. JSON is a data format with several uses in web applications and servers. It was derived from Javascrpt but has become compatible with many modern languges.
                Sometimes you might need to convert CSV to other formats suchas JSON. Knightsheets provides a fast solution for users to convert CSV file to JSON with one click and no Email required.
                Our tool is 100% free to use. </p>
            &nbsp;

            <h3>How to use CSV to JSON Converter</h3>


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
                <b>4.</b> Your JSON file will download automatically
            </p>
            <br>

            <h3>Advantages of converting CSV to JSON</h3>

            <p>
                <b>1.</b> JSON is easy to read, learn and understand
            </p>
            <p>
                <b>2.</b> It features simple text
            </p>
            <p>
                <b>3.</b> JSON is self describing. This means that its hiracrchial structure and syntax can be interpreted by many applications
            </p>

            <p>

                <b>4.</b> JSON is easy to parse
            </p>
            <br>
            <h3>CSV Vs JSON</h3>
            <p>
                <b>1.Full Form:</b> CSV- Comma seperated values, JSON- Java Script Object Notation
            </p>
            <p>
                <b>2.Hierachy:</b> JSON displays a better hierachical and relational data compared to CSV
            </p>
            <p>
                <b>3. Versatility:</b> JSON is more versatile compared to CSV
            </p>
            <p>
                <b>4. Scalability:</b> JSON is more scalble interms of editing and adding content
            </p>
            <p>
                <b>5. Data Types:</b> JSON uses JS data types while CSV depends on external metadata to identify its data types
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