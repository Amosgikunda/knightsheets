<!DOCTYPE html>
<html lang="en">

<head>
    <title> Knight Sheets /Home Page </title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/style.css">
    <?php require('./view/headercodes.php'); ?>

</head>



<body>
    <?php require('./view/nav.php'); ?>

    <center>

        <p>Welcome to Knightsheets, The home to the best Free Excel tools to make your work easier and help you to save time. </p>
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
                        Fast Excel tools to process you files within seconds
                    </figcaption>
                </figure>

            </div>

            <div class="icon righticon">
                <figure>
                    <img src="images/easyicon.png" class="img-responsive center-block" style=" height:auto; width:30%;">
                    <figcaption>
                        <h3>3) Easy</h3>

                        <P> No complicated formulas or method just One click action</P>

                    </figcaption>
                </figure>

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



    </div>
    <?php require('./view/footer.php'); ?>
</body>