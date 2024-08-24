<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome</title>

    <style>
        body {
            background-color: #E4EEF8;
            font-family: sans-serif;
        }

        section {
            height: 40vh;
            width: 60vw;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 10px 20px;
            margin: auto;
            margin-top: 10%;
            background-color: white;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
            flex-wrap: wrap;
        }

        .text h1 {
            font-size: 38px;
            font-weight: bolder;
            color: #3D5A80;
        }

        @media screen and (max-width:700px) {

            .text h1 {
                font-size: 22px;
            }

        }

        @media screen and (max-width:320px) {

            .text h1 {
                font-size: 12px;
            }

            section{
                font-size: 12px;
                overflow-y: scroll;
            }

        }
    </style>
</head>

<body>

    <section>
        <div class="text">
            <h1>Congratulations you are successfully logged-in</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit ab maxime praesentium quos, reiciendis
                eos expedita, adipisci cum qui consectetur magnam perspiciatis quasi! In debitis id, eius impedit
                architecto eaque, repellendus.</p>

            <p><a href="login.php"> << Go back</a></p>
        </div>
    </section>



</body>

</html>