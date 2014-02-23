
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Пример: выбор региона для отображения меток</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="//yandex.st/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
    <script src="//yandex.st/jquery/1.8.0/jquery.min.js" type="text/javascript"></script>
    <script src="//api-maps.yandex.ru/2.0/?load=package.standard&lang=ru-RU" type="text/javascript"></script>
    <script src="region-selector.js" type="text/javascript"></script>
    <script src="data.js" type="text/javascript"></script>
    <script src="multi-geocoder.js" type="text/javascript"></script>
    <script type="text/javascript">
        ymaps.ready(function () {
            var map = new ymaps.Map('YMapsID', {
                center: [55.753559, 37.609218],
                zoom: 9,
                type: 'yandex#map',
                behaviors: ['default', 'scrollZoom']
            });

            new RegionSelector(map, data, $('#regions'), $('#cities'));
        });
    </script>
    <style type="text/css">
        #YMapsID {
            width: 100%;
            height: 520px;
        }
        .hero-unit {
            background-color: #FFF;
        }
    </style>
</head>

<body>
    <div class="hero-unit">
        <div class="container fluid">
            <div class="row fluid">
                <div class="span12">
                    <p class="lead">Выбор региона для отображения меток.</p>
                </div>
            </div>
            <div class="row">
                <div class="well">
                    <select id="regions" class="btn btn-primary"></select>
                    <select id="cities" class="btn btn-primary"></select>
                </div>
            </div>
            <div class="row fluid">
                <div id="YMapsID" class="span8"></div>
            </div>
        </div>
    </div>
</body>

</html>
