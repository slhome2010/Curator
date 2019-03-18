<?
$title = 'Контроль местоположения';
$description = 'Система спутникового мониторинга Куратор. Контроль местоположения техники. Онлайн мониторинг транспорта.';
$keywords = 'GPS, ГЛОНАСС, GPS мониторинг, спутниковый мониторинг, местоположение, онлайн слежение, где техника';
?>
<? require "../common/header.php"; ?>

<section class="section devices">
    <div class="container">
        <div class="row row-content">
            <div class="col-md-12">
                <h1 class="text-center">
                    Контроль местоположения
                </h1>

                <p class="text-justify">
                    Контроль местоположения является наиболее важной задачей для GPS мониторинга. Данные о состоянии датчиков или обнаружении факта слива топлива не имеют смысла без привязки их к географическим координатам и визуального
                    отображения на карте.
                </p>
                <p class="text-justify">
                    Система мониторинга позволяет не только контролировать местоположение транспорта, но и более эффективно планировать маршруты, производить оперативную погрузку/разгрузку, сокращать несанкционированные простои. Опыт
                    показывает, что системы слежения за транспортом способствуют повышению эффективности использования транспортных средств от 15% до 50%.
                </p>
                <p class="text-justify">
                    Функционирование систем спутникового мониторинга основано на определении положения наблюдаемого объекта относительно точек с известными координатами – спутников. Работа навигационных решений основана на ГЛОНАСС и GPS
                    технологиях. Двухстандартное оборудование повышает надежность работы систем слежения благодаря увеличению числа спутниковых группировок ГЛОНАСС и GPS.
                </p>
                <p>
                    Контроль местоположения может производиться и в режиме онлайн и в виде отчетов за произвольный отрезок времени.
                </p>
                <p>
                    В режиме построения треков можно нанести на карту любое количество треков за разные промежутки времени, причем как по разным объектам, так и для одного и того же объекта. Чтобы треки не сливались друг с другом, можно
                    задавать для их отображения разные цвета, причем цвет может быть разным даже внутри одного трека — в зависимости от скорости движения, показаний датчика и т.п.
                </p>

                <p>
                    <a href="/img/position/tracks.jpg" data-lightbox="tracks" data-title='Треки поездок'><img src="/img/position/tracks-min.jpg" alt="Пример визуализации трека поездок" class="center-block img-fluid img-in-text"></a>
                    <a href="/img/position/trips.png" data-lightbox="trips" data-title='Отчет по поездкам'><img src="/img/position/trips-min.png" alt="Пример отчета по поездкам" class="center-block img-fluid img-in-text"></a>
                </p>
                <p class="text-justify">
                    Для более детального ознакомления с возможностями нашей системы предлагаем Вам перейти на <a href="http://gps1.curator.kz/?token=7c855223f884a6a9ff49b5d875ea743655862237ED749BD39315AB7F543093D807513339"
                        target="_blank">сайт спутникового мониторинга</a>.
                </p>
            </div>
        </div>

    </div>
</section>
<? require "../common/footer.php"; ?>