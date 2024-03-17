<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Vegetable Classifier</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/show_images.css" />
        <link rel="stylesheet" href="css/blogstyle.css" />
    </head>

    <body>
    <?php include("header.php");?>
        <div class="main">
            <div class="title">
                <h3>Vegetable detection</h3>
            </div>
        </div>

        <div class="panel">
            <input id="file-upload" class="hidden" type="file" accept="image/x-png,image/gif,image/jpeg" />
            <label for="file-upload" id="file-drag" class="upload-box">
                <div id="upload-caption">Click to upload image</div>
                <img id="image-preview" class="hidden" />
            </label>
        </div>

        <div class="button_group">
            <input type="button" value="Clear" class="button" onclick="clearImage();" />
            <input type="button" value="Predict" class="button" onclick="predict();" />
        </div>

        <!-- <div id="image-box">
            <img id="image-display" />
        </div> -->
        <div id="pred-result" class="pred_result hidden"></div>
    </body>

    <footer>
        <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs/dist/tf.min.js"> </script>
        <script src="js/show_images.js"></script>
    </footer>

</html>
