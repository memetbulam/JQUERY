<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Ders 10 show ve hide efekti(php)</title>
    <script src="JS/jquery-3.6.0.min.js"></script>
    <style>
        a {
            color: dimgray;
            font-size: 12px;
        }

        textarea {
            border: none;
            border-bottom: 2px solid #403E3E;
            width: 400px;
            margin-bottom: 10px;
            resize: none;
            outline: none;
            font-size: 16px;
        }

        button {
            border: none;
            border-radius: 5px;
            padding: 10px;
            width: 100px;
            background-color: black;
            color: white;
        }

        button:hover {
            padding: 10px;
            width: 100px;
            border-radius: 10px;
            background-color: darkgray;
            color: black;
        }
    </style>
</head>

<body>
    <h2>JQuery Eğitim Seti</h2>
    <?php
    for ($i = 1; $i <= 5; $i++) {
        echo 'Bu bir yorumdur. Alttaki linkten cevap yazabilirsiniz<br>
        <a onClick="show(' . $i . ')">YANITLA</a><br>
        <div class="hide" id="answer' . $i . '">
        <textarea id="comment" name="comment"></textarea><br>
        <button type="button" id="cancel" onClick="hide(' . $i . ')">İptal</button>
        <button type="button" id="answer">Yanıtla</button>
        </div><br>';
    }
    ?>
    <script>
        $(function() {
            $(".hide").hide();
        });

        function show(ID) {
            $("#answer" + ID).show();
        }

        function hide(ID) {
            $("#answer" + ID).hide();
        }
    </script>
</body>

</html>