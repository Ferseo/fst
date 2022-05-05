<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href='https://fonts.googleapis.com/css?family=Allerta' rel='stylesheet'>
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <title>Reproductor</title>
</head>
<style>
    .body {
        width: 99%;
        background: url("../../img/background-image/auditorio1_mo.jpg");
        background-repeat: no-repeat;
        background-size: auto;
    }

    .container {
        height: 70vh;

    }

    /* Global Reset */
    * {
        font-family: 'Allerta', arial, Tahoma;
        box-sizing: border-box;
    }

    body {
        /*background: linear-gradient(to left, #7700aa, #8800ff);*/
        text-align: center;
        color: #fff;
    }

    h3 {
        text-shadow: 1px 1px 1px #fff;
    }

    /* Start  styling the page */
    .container-audio {
        width: 66%;
        height: auto;
        padding: 20px;
        border-radius: 5px;
        background-color: #eee;
        color: #444;
        margin: 20px auto;
        overflow: hidden;
    }

    audio {
        width: 100%;
    }

    audio:nth-child(2),
    audio:nth-child(4),
    audio:nth-child(6) {
        margin: 0;
    }

    .container-audio .colum1 {
        width: 23px;
        height: 5em;
        border-radius: 5px;
        margin: 0 10px 0 0;
        display: inline-block;
        position: relative;
    }


    @-webkit-keyframes Rofa {
        0% {
            height: 0%;
            -webkit-transform: translatey(0);
            transform: translatey(0);
            background-color: yellow;
        }

        5% {
            height: 100%;
            -webkit-transform: translatey(15px);
            transform: translatey(15px);
            background-color: fuchsia;
        }

        10% {
            height: 90%;
            transform: translatey(0);
            -webkit-transform: translatey(0);
            background-color: bisque;
        }

        15% {
            height: 80%;
            -webkit-transform: translatey(0);
            transform: translatey(0);

            background-color: cornflowerblue;
        }

        20% {
            height: 70%;
            -webkit-transform: translatey(0);
            transform: translatey(0);
            background-color: cornflowerblue;
        }

        25% {
            height: 0%;
            -webkit-transform: translatey(0);
            transform: translatey(0);
            background-color: cornflowerblue;
        }

        30% {
            height: 70%;
            -webkit-transform: translatey(0);
            transform: translatey(0);
            background-color: cornflowerblue;
        }

        35% {
            height: 0%;
            -webkit-transform: translatey(0);
            transform: translatey(0);

            background-color: cornflowerblue;
        }

        40% {
            height: 60%;
            -webkit-transform: translatey(0);
            transform: translatey(0);

            background-color: cornflowerblue;
        }

        45% {
            height: 0%;
            -webkit-transform: translatey(0);
            transform: translatey(0);

            background-color: cornflowerblue;
        }

        50% {
            height: 50%;
            -webkit-transform: translatey(0);
            transform: translatey(0);

            background-color: cornflowerblue;
        }

        55% {
            height: 0%;
            -webkit-transform: translatey(0);
            transform: translatey(0);

            background-color: cornflowerblue;
        }

        60% {
            height: 40%;
            -webkit-transform: translatey(0);
            transform: translatey(0);

            background-color: cornflowerblue;
        }

        65% {
            height: 0%;
            -webkit-transform: translatey(0);
            transform: translatey(0);

            background-color: cornflowerblue;
        }

        70% {
            height: 30%;
            -webkit-transform: translatey(0);
            transform: translatey(0);

            background-color: cornflowerblue;
        }

        75% {
            height: 0%;
            -webkit-transform: translatey(0);
            transform: translatey(0);

            background-color: cornflowerblue;
        }

        80% {
            height: 20%;
            -webkit-transform: translatey(0);
            transform: translatey(0);

            background-color: cornflowerblue;
        }

        85% {
            height: 0%;
            -webkit-transform: translatey(0);
            transform: translatey(0);

            background-color: cornflowerblue;
        }

        90% {
            height: 10%;
            -webkit-transform: translatey(0);
            transform: translatey(0);

            background-color: cornflowerblue;
        }

        95% {
            height: 5%;
            -webkit-transform: translatey(0);
            transform: translatey(0);

            background-color: cornflowerblue;
        }

        100% {
            height: 0;
            -webkit-transform: translatey(0);
            transform: translatey(0);

            background-color: cornflowerblue;
        }
    }

    label {
        cursor: pointer;
        border: 1px solid #939393;
        padding: 1px 6px;
        background-color: #efefef;
    }

    #file {
        visibility: hidden !important;
    }
</style>

<body class="body">
    <div class="row">
        <div class="col-12">
            <?php
            include('../templates/header.php');
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-2">
            <div class="col">
                <input type="file" id="files" name="files[]" class="btn " style="margin: 5%;" multiple>
                <!-- <input type="file" id="files" name="files[]" multiple /> -->
            </div>

        </div>
        <div class="col-8">
            <div class="container modal-content" style="align-content: center; width: 100%;">
                <output class="container">

                    <output id="list"></output>
                </output>
                <div class="container-audio">
                    <audio controls loop autoplay>
                        <!-- Esta es la cancion 2 -->
                        <!-- <source src="" type="audio/ogg">
                            Your browser dose not Support the audio Tag -->
                    </audio>
                </div>
            </div>

        </div>
        <div class="col-2">
            <div class="col">
                <button type="submit" class="btn btn-secondary" style="margin: 5%;">Intervalo tiempo</button>
            </div>
        </div>
    </div>

</body>

</html>
<!-- LINKS DE ARTICULOS QUE PUEDEN VALER PARA EL REPRODUCTOR -->
<!-- https://www.html5rocks.com/es/tutorials/file/dndfiles// -->
<!-- https://oscargascon.es/reproductor-de-audio-html5-con-javascript-un-ejemplo-aplicando-modelo-vista-controlador-y-programacion-orientada-a-objetos/ -->
<!-- http://www.jplayer.org/download/ -->
<script>
    function handleFileSelect(evt) {
        if (evt.target.files) {
            //var file = evt.currentTarget.files; 
            var reader = new FileReader();
            var files = evt.target.files;
            var url = files[0].url;
            console.log(url);
            var parent = document.getElementById("list");
            for (var i = 0, f; f = files[i]; i++) {
                var output = document.createElement("li");
                output.setAttribute("src", url);
                var name = document.createTextNode(f.name);
                var type = document.createTextNode(f.type);
                output.appendChild(name);
                output.appendChild(type);
                parent.appendChild(output);
            }
        }

    }

    document.getElementById('files').addEventListener('change', handleFileSelect, false);


    // function handleFileSelect(evt){
    //         var files = evt.target.files; 

    //         for (var i = 0, f; f = files[i]; i++) {
    //             var output = document.createElement("li");
    //             var name = document.createTextNode(f.name);
    //             var type = document.createTextNode( f.type);
    //             output.appendChild(name);
    //             output.appendChild(type);
    //             return output;
    //             console.log(output);
    //         }

    //             // output.innerHTML = escape(f.name), f.type;
    //             //readFile(output);
    //             // return output;
    //             // document.getElementById('list').innerHTML = '<ul>' + output.join('') + '</ul>';
    //                 }

    // document.getElementById('files').addEventListener('change', handleFileSelect, false);
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>