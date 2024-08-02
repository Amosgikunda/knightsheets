<!DOCTYPE html>
<html lang="en">

<head>
    <title>Convert Excel files to CSV automatically</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/style.css">
    <meta name="description" content="Looking for way to convert your excel files to CSV automatically? Use Knight Sheets one-click converter free ">
    <?php require('./view/headercodes.php'); ?>
</head>



<body>
    <?php require('./view/nav.php'); ?>

    <p style="text-align:center;"> Drag and drop or Select your Excel file to convert it to CSV instantly</p>
    <center>
        <form action="exceltocsvupload.php" method="POST" enctype="multipart/form-data" class="body">
            <div id="drop_file_zone" ondrop="" ondragover="true">
                <div id="drag_upload_file">
                    <p>Drop file here</p>
                    <p>or</p>
                    <p><input type="file" name="fileToUpload" value="Select File" id="fileToUpload" /></p>




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
                        Convert Your excel file to CSV within seconds
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
            <h3>What is a CSV file format?</h3>
            <p>CSV stands for Comma Seperated Values. Just like the full name depicts, CSV is a comma delimited text file that seperates its values using commas.Each record can feature one or more fields seperated by commas.
                At times when dealing with excel you might need to convert it to other formats such as CSV. Knightsheets provides a fast solution for users to convert their spreadsheet to CSV with one click and no Email required.
                Our tool is 100% free to use. </p>
            &nbsp;



            <h3>How to use Excel to CSV Converter</h3>


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
                <b>4.</b> Your file will download automatically
            </p>
            <br>

            <h3>Advantages of converting Excel to CSV</h3>

            <p>
                <b>1.</b>CSV files can be read by most text Editors
            </p>
            <p>
                <b>2.</b> CSV is easy to create compared to XLS, XLSX and XML
            </p>
            <p>
                <b>3.</b> Its easy to parse CSV compared to JSON and XML formats
            </p>

            <p>
                <b>4.</b> CSV features a straightforward schema which makes it useful for in many applications
            </p>
            <p>
                <b>5.</b> Its easy to manipulate a CSV file because of its simplicity
            </p>
            <p>
                <b>6.</b> The CSV format is compact as it you dont have to worrry about tags like other formats such as JSON and XML. All you need is start and end tags to distinguish rows and columns
            </p>
            &nbsp;
            <h3> Excel Vs CSV</h3>
            <p>Excel and CSV store data in a tabular format hence confusing most people to think they are the same. But there are several differences in terms features and functions. Here are some key differences</p>
            <p>
                <b>1. Extensions:</b> Excel saves files on its own unique formats such as XLSX,XLS and VIZ. On the other hand CSV saves data on a .CSV extension
            </p>
            <p>
                <b>2.Formating, Formulas, Macros and Funtions: </b> Excel formats supports these operations while CSV does not.
            </p>
            <p>
                <b>3. Reading and Writing: </b> Excel requires special spreadshhet software to read and and write. Contrary, you can read and write CSV files using Text editors such as Notepad
            </p>
            <p>
                <b>4. Safety </b> Excel contains autoformating which can mess with your data incase there is no clear seperation or distinction of numerical values. Conversely, CSV can differentiate between plain text and numerical values.
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