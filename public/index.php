<html>
    <head>
    <style type="text/css">
        * {
        font-family: Helvetica, Arial;
        }

        body {
        margin: 0;
        padding: 10px;
        background-color: lightcyan;
        text-align: center;
        }

        h2 {
        font-size: 50px;
        text-align: center;
        }

        h1 {
            writing-mode: vertical-rl;
            text-orientation: mixed;
        }

    </style>
    </head>
    <body>
        <h2>Velkommen til Norge.no</h2>
        <h1>Dagens dato er 25.08.2020</h1>
        <?php
        echo "<p>Hovedstaden i Norge er: ";
        echo "<strong>Oslo</strong>";
        echo "<br />";
        ?>

        I dag er det den <?php echo date("d.m.Y");?> <br><br>
        Det er faktisk helt sant, i dag er det <i>25.08.2020.</i> <br><br>
        </p>
        <p style="color:#FF2D00 ";> 5.08.2020 </p>
        

    </body>
</html>