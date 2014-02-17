<script src="//api-maps.yandex.ru/2.0/?load=package.standard,package.geoObjects&lang=ru-RU" type="text/javascript"></script>
<script type="text/javascript">
ymaps.ready(init);
</script>
<script type="text/javascript">
ymaps.ready(init);
function init () {
    var myMap = new ymaps.Map("map", {
            center: [55.76, 37.64],
            zoom: 8
        }),

		Plamen = new ymaps.Placemark([55.70601, 37.404375], {
			iconContent: "1",
            hintContent: "ОстВестМото",
			balloonContentBody: "Содержимое <em>балуна</em> метки"
        }),
		
		OstWestMoto = new ymaps.Placemark([55.979601, 37.514464], {
            iconContent: "2",
            hintContent: "ТЕМП Мото"
        }),
		
		MegaActive = new ymaps.Placemark([55.607824, 37.656568], {
            iconContent: "3",
            hintContent: "Mega Active"
        });

	myMap.controls.add('zoomControl', { left: 5, top: 5 });
    myMap.geoObjects
        .add(Plamen)
        .add(OstWestMoto)
        .add(MegaActive);
		}
</script>

<div id="map" style="width:100%; height:400px; margin-top:7px"></div>
<div class="btn" id="moscow">MockBa</div>
<div class="btn" id="moscow">Koenig</div>