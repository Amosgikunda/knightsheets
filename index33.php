<!DOCTYPE html>
<html lang="en">

<head>
    <title> </title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="assets/style.css" rel="stylesheet">
    <link href="assets/blockstyle.css" rel="stylesheet">
    <style>

    </style>
</head>
<style>

</style>

<body>
    <nav class="navbar">
        <div class="brand-title">Knight Sheets</div>
        <a href="#" class="toggle-button">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </a>
        <div class="navbar-links">

            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>

        </div>
    </nav>

    <script>
        const toggleButton = document.getElementsByClassName('toggle-button')[0]
        const navbarLinks = document.getElementsByClassName('navbar-links')[0]

        toggleButton.addEventListener('click', () => {
            navbarLinks.classList.toggle('active')
        })
    </script>


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
                <a href="#">
                    <h4>Coming Soon</h4>
                </a>
            </div>

            <div class="block blocka">
                <a href="#">
                    <h4>Coming Soon</h4>
                </a>
            </div>

            <div class="block blockb">
                <a href="#">
                    <h4>Coming Sooon</h4>
                </a>
            </div>

            <div class="block blockc">
                <a href="#">
                    <h4>Coming Soon</h4>
                </a>
            </div>
        </div>
    </center>


    <footer>
        <div class="footer-content">
            <h3>About Us</h3>
            <p>
                Knight Sheets is your go to library for Excel and Sheets related
                tools to make your work easier. If you are tired of using long
                formulas and methods try using our one-clicck free tools.
            </p>
        </div>

        <div class="footer-bottom">
            <p>
                Copyright &copy;
                <script>
                    document.write(new Date().getFullYear());
                </script>
                Knight Sheets
            </p>
        </div>
    </footer>


</body>

</html>