<style>
    div .container flex-container {
        color: #00d123;
        padding-top: 14px;
    }

    h4 {
        font-size: 25px;
        margin: 0 !important;
        font-style: bold;
        text-align: center;
        /* font-family: "Buernard", Garamond, "Buenard", "EB Garamond", "EB Garamond"; */
        text-decoration-color: white;
    }

    a {
        text-decoration: none;
        /* border-bottom: dashed 1px; */
        text-decoration-color: white;
        color: azure;
    }

    a:hover {
        color: white;
        border-bottom: solid 1px;


    }

    .flex-container {
        display: flex;
        flex-wrap: wrap;
        max-width: 960px;
        width: 100%;
    }

    .block {
        flex: 0 0 30.1%;
        height: 150px;
        margin-bottom: 25px;
        margin-top: 20px;
        margin-left: 15px;

        background-position: center center;
        /* center the image in the div */
        background-size: cover;
        /* cover the entire div */
        background-repeat: no-repeat;
        background-size: 100%;
        border: 1px solid black;
        /* align-items: center;
  justify-content: center; */
        display: flex;
        align-items: center;
        justify-content: center;
    }


    .blockx {
        margin-right: 10px;
        background-color: #097bc0;
        border-radius: 4px;
    }

    .blocky {
        background-position: center center;
        margin-right: 10px;
        background-color: #28282B;
        border-radius: 4px;
    }

    .blockz {
        border-radius: 4px;
        background-color: gray;
    }

    .blocka {
        background-position: center center;
        margin-right: 10px;
        border-radius: 4px;
        background-color: gray;
    }

    .blockb {

        margin-right: 10px;
        border-radius: 4px;
        background-color: #097bc0;
    }

    .blockc {


        border-radius: 4px;
        background-color: #28282B;
    }

    @media screen and (max-width:960px) {
        .block {
            flex: none;
            position: static;
            min-width: 90%;
        }

    }
</style>
<center>
    <div class="container flex-container">
        <div class="block blockx">
            <a href="exceltopdf.php">
                <h4>Excel To PDF</h4>
            </a>
        </div>

        <div class="block blocky">
            <a href="exceltocsv.php">
                <h4>Excel To CSV</h4>
            </a>
        </div>

        <div class="block blockz">
            <a href="exceltohtml.php">
                <h4>Excel To HTML</h4>
            </a>
        </div>

        <div class="block blocka">
            <a href="csvtoexcel.php">
                <h4>CSV To XLSX</h4>
            </a>
        </div>

        <div class="block blockb">
            <a href="csvtohtml.php">
                <h4>CSV TO HTML</h4>
            </a>
        </div>

        <div class="block blockc">
            <a href="csvtojson.php">
                <h4>CSV TO JSON</h4>
            </a>
        </div>
    </div>
</center>