<?
$title = 'Предложение по мониторингу топливозаправщиков и топливораздаточных колонок';
$description = 'Система спутникового мониторинга Куратор. GSP мониторинг топливозаправщиков. Полный контроль за топливом.';
$keywords = 'топливозаправщик, бензовоз, rfid, GPS, ГЛОНАСС, GPS мониторинг, спутниковый мониторинг, контроль топлива, объем слива, заправки, азс, трк';
?>
<? require "../common/header.php"; ?>

<section class="section inner-page top">
    <div class="container">
        <div class="row pb-sm-0">
            <div class="col-md-12">
                <div class="section-header">
                    <h1 class="text-center">
                        Топливозаправщики и ТРК
                    </h1>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <blockquote class="blockquote mt-lg-2">
                            <p class="mb-0">
                                В основе решения лежит использование современного навигационного оборудования, идентификационных <strong>RFID-карт</strong> и системы контроля отгружаемого топлива. Это дает возможность с минимальной
                                погрешностью
                                контролировать
                                движение топлива.
                            </p>
                        </blockquote>
                        <div class="blockquote-footer d-none d-lg-block">Системный администратор <cite title="Source Title">Использование системы.</cite></div>
                    </div>
                    <div class="col-lg-6 d-none d-sm-block">
                        <canvas id="fuelChart" height="128"></canvas>
                    </div>
                    <div class="col-lg-6 d-block d-sm-none">
                        <canvas id="vfuelChart" height="256"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section inner-page">
    <div class="container">
        <div class="section-header">
            <!-- <img src="/img/infographics/shape.png" class="img-fluid float-left" alt="shape"> -->
            <h2><span class="page-header">Предложение по мониторингу топливозаправщиков</span></h2>
            <div class="header-underline d-sm-none"></div>
        </div>
        <p class="text-justify">
            Проблема контроля топливозаправщиков важна для сельскохозяйственных компаний, имеющих в составе парк топливозаправщиков. Топливозаправщики осуществляют оперативную заправку топливом агротехники на полях в сезон
            сельскохозяйственных работ. Топливо они получают на стационарных АЗС или нефтебазах. На всех этапах транспортировки и передачи топлива существует возможность для злоупотреблений. Поэтому очень важно осуществлять
            мониторинг цепочки потребителей топлива начиная с нефтебазы и заправочной станции и заканчивая агротехникой на поле.
        </p>
        <p class="text-justify">
            Наша компания предлагает решение для автоматизации учета отгрузки топлива с топливозаправщиков и АЗС.
        </p>
        <a href="/img/fuel/fuel_truck.jpg" data-lightbox="buklet" data-title='Контроль топлива в топливозаправщике'><img src="/img/fuel/fuel_truck_min.jpg" alt="Контроль топлива" class="my-3 mx-auto d-block img-fluid img-thumbnail"></a>

        <h4 class="text-center">Возможности системы</h4>
        <ul class="red-marked mx-auto">
            <li><strong>контроль местоположения топливозаправщика;</strong></li>
            <li><strong>контроль уровня топлива в цистерне и баке топливозаправщика;</strong></li>
            <li><strong>контроль выдачи топлива по пластиковым RFID картам;</strong></li>
            <li><strong>возможность использовать на один топливозаправщик до 500 пластиковых карт;</strong></li>
            <li><strong>блокировка отгрузки топлива отсечным клапаном (отгрузка только при наличии RFID карты в считывателе);</strong></li>
            <li><strong>получение отчетности о выдаче топлива в разрезе водителей и транспортных средств;</strong></li>
        </ul>
    </div>
    <div class="solutions">
        <div class="container">
            <h4 class="text-center my-4">Используемое оборудование</h4>
            <div class="media d-block d-md-flex mt-4 mx-2">
                <img class="d-flex mx-auto media-image" src="img/device/arnavi_dut_200.png" alt="ДУТ">
                <div class="media-body text-center text-md-left ml-md-3 ml-0">
                    <h5 class="mt-0 font-weight-bold">Датчик уровня топлива (ДУТ)</h5>
                    Устанавливается в цистерну, в горловину и топливный бак топливозаправщика. Предназначен для контроля сливов и заправок цистерны и самого топливозаправщика.
                </div>
            </div>
            <div class="media d-block d-md-flex mt-3 mx-2">
                <img class="d-flex mx-auto media-image" src="img/device/v_clapan_200.png" alt="клапан">
                <div class="media-body text-center text-md-left ml-md-3 ml-0">
                    <h5 class="mt-0 font-weight-bold">Отсечной (блокирующий) клапан</h5>
                    Клапан не позволяет произвести отгрузку топлива при отсутствии в считывателе заранее прописанной (валидной) RFID-карты.
                </div>
            </div>
            <div class="media d-block d-md-flex mt-3 mx-2">
                <img class="d-flex mx-auto media-image" src="img/device/v_meter_200.png" alt="Объемомер">
                <div class="media-body text-center text-md-left ml-md-3 ml-0">
                    <h5 class="mt-0 font-weight-bold">Объемомер</h5>
                    Предназначен для определения количества отпускаемого топлива. Его точность соизмерима с точностью объемомеров на коммерческих АЗС.
                    На топливозаправщиках устанавливается на замену ППО.
                </div>
            </div>
            <div class="media d-block d-md-flex mt-3 mx-2">
                <img class="d-flex mx-auto media-image" src="img/device/arnavi4_200.png" alt="Трекер">
                <div class="media-body text-center text-md-left ml-md-3 ml-0">
                    <h5 class="mt-0 font-weight-bold">Трекер</h5>
                    Для обработки информации с датчиков, карт-считывателя, спутников и передачи информации в систему мониторинга &quot;Куратор&quot;.
                </div>
            </div>
            <div class="media d-block d-md-flex my-3 mx-2">
                <img class="d-flex mx-auto media-image" src="img/device/ef_200.png" alt="Табло">
                <div class="media-body text-center text-md-left ml-md-3 ml-0">
                    <h5 class="mt-0 font-weight-bold">Табло индикатора</h5>
                    Предназначено для отображения объема выданного топлива. Табло оснащено специализированным микроконтроллером, который ведет подсчет выданного топлива и отправляет данные GPS-трекеру.
                    Табло содержит энергонезависимую память на случай пропадания питания.
                </div>
            </div>
            <div class="media d-block d-md-flex my-3 mx-2">
                <img class="d-flex mx-auto media-image" src="img/device/erfid_200.png" alt="Табло">
                <div class="media-body text-center text-md-left ml-md-3 ml-0">
                    <h5 class="mt-0 font-weight-bold">Считыватель RFID-карт</h5>
                    При внесении в поле действия считывателя карты происходит передача его идентификационного номера на считыватель
                    и дальнейшей передачи информации в систему мониторинга &quot;Куратор&quot;.
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <p class="text-justify mt-4">
            Для тотального контроля топливозаправщика и отслеживания сливов топлива минуя объемомер, в цистерну устанавливаются <strong>датчики уровня топлива (ДУТ)</strong>. Количество устанавливаемых датчиков зависит от типа и
            конструкции цистерны топливозаправщика. Данные от ДУТ так же передаются в Систему мониторинга и используются в отчетах по сливам/заправкам, определения текущего уровня топлива в цистерне и графического представления
            уровня за выбранный интервал.
        </p>
        <p class="text-justify">
            На случай нештатной ситуации, в кабине топливозаправщика устанавливается <strong>кнопка аварийного открытия клапана</strong>. Включить ее возможно, только сорвав пломбу.
        </p>
    </div>

    <div class="example container" role="alert">
        <h5 class="text-center my-4">Процесс отгрузки топлива</h5>
        <p>
            Процесс отгрузки топлива занимает примерно столько же времени, сколько и со штатным оборудованием топливозаправщика.
        </p>
        <p>
            Пример:
        </p>
        <ul>
            <li>Топливозаправщик подъезжает к транспортному средству (ТС), разворачивает шланги и вставляет заправочный пистолет в бак ТС. </li>
            <li>Водитель ТС вставляет свою карточку в считыватель на топливозаправщике. После этого открывается блокирующий клапан и оператор топливозаправщика может начать выдачу топлива.</li>
            <li>После окончания выдачи топлива, карточка изымается из считывателя.</li>
            <li>Топливозаправщик готов к выдаче топлива в другое ТС.</li>
        </ul>
    </div>

    </div>
</section>
<section class="section inner-page">
    <div class="container">
        <div class="section-header">
            <!-- <img src="/img/infographics/shape.png" class="img-fluid float-left" alt="shape"> -->
            <h2><span class="page-header">Предложение по мониторингу топливораздаточных колонок (ТРК)</span></h2>
            <div class="header-underline d-sm-none"></div>
        </div>

        <a href="/img/fuel/trk.jpg" data-lightbox="buklet" data-title='Контроль выдачи топлива через ТРК'><img src="/img/fuel/trk.jpg" alt="Контроль топлива" class="my-3 mw-50 mx-auto d-block img-fluid img-thumbnail"></a>

        <h5 class="text-center">Возможности системы</h5>
        <ul class="red-marked w-75 mx-auto">
            <li><strong>контроль выдачи топлива по пластиковым RFID картам;</strong></li>
            <li><strong>возможность использовать на одну ТРК до 500 пластиковых карт;</strong></li>
            <li><strong>блокировка отгрузки топлива отсечным клапаном (отгрузка только при наличии RFID карты в считывателе);</strong></li>
            <li><strong>получение отчетности о выдаче топлива в разрезе водителей и транспортных средств;</strong></li>
        </ul>       
        <div class="example" role="alert">
            <h5 class="text-center my-4">Процесс отгрузки топлива</h5>
            <p>
                Процесс отгрузки топлива занимает примерно столько же времени, сколько в штатном режиме работы ТРК.
            </p>
            <p>Пример:</p>
            <ul>
                <li>ТС подъезжает к колонке. Водитель ТС вставляет свою карточку в считыватель на ТРК, либо в оператороской. После этого открывается блокирующий клапан и оператор может начать выдачу топлива.</li>
                <li>После окончания выдачи топлива, карточка изымается из считывателя;</li>
                <li>ТРК готова к выдаче топлива в другое ТС;</li>
            </ul>
        </div>
    </div>
</section>
<section class="section inner-page">
    <div class="container">
        <div class="section-header">
            <!-- <img src="/img/infographics/shape.png" class="img-fluid float-left" alt="shape"> -->
            <h2><span class="page-header">Отчеты по отгрузке топлива</span></h2>
            <div class="header-underline d-sm-none"></div>
        </div>
        <p class="text-justify">
            В системе &quot;Куратор&quot; для обработки и визуализации получаемых данных разработан специализированный отчет.
        </p>
        <a href="/img/fuel/template.png" data-lightbox="template" data-title='Структура отчета'><img src="/img/fuel/template.png" alt="Шаблон и результат отчета" class="mx-auto d-block img-fluid img-thumbnail"></a>
        <p class="text-center underpicture">Рисунок 1 – Шаблон и результат отчета</p>
        <p class="text-justify">
            В разделе &quot;Статистика&quot; отображается информация о ТС, временном интервале для отчета и общий объем топлива, отпущенный с бензовоза.
        </p>
        <a href="/img/fuel/stat.png" data-lightbox="stat" data-title='Раздел статистики'><img src="/img/fuel/stat_min.png" alt="Общая статистика по объекту" class="mx-auto d-block img-fluid img-thumbnail"></a>
        <p class="text-center underpicture">Рисунок 2 – Общая статистика по объекту</p>
        <p class="text-justify">
            Раздел &quot;Заправки в цистерну&quot; отображает дату, время, местоположение и объем заправки в цистерну топливозаправщика с указанием начального и конечного уровней топлива.
        </p>
        <a href="/img/fuel/fill.png" data-lightbox="fill" data-title='Заправки в цистерну'><img src="/img/fuel/fill_min.png" alt="Отчет по заправкам в цистерну" class="mx-auto d-block img-fluid img-thumbnail"></a>
        <p class="text-center underpicture">Рисунок 3 – Отчет по заправкам в цистерну</p>
        <p class="text-justify">
            Для каждой RFID-карты существует отдельный раздел, в котором указаны дата, время, местоположение и объем отпущенного топлива по этой карте.
        </p>
        <a href="/img/fuel/detail.png" data-lightbox="detail" data-title='Детализация по карте'><img src="/img/fuel/detail_min.png" alt="Детализация по карте" class="mx-auto d-block img-fluid img-thumbnail"></a>
        <p class="text-center underpicture">Рисунок 4 – Детализация по карте</p>
        <p class="text-justify">
            Изменение уровня топлива в цистерне топливозаправщика за указанный период можно просмотреть в виде графика
        </p>
        <a href="/img/fuel/chart.png" data-lightbox="chart" data-title='График уровня топлива в цистерне'><img src="/img/fuel/chart_min.png" alt="График уровня топлива в цистерне" class="mx-auto d-block img-fluid img-thumbnail"></a>
        <p class="text-center underpicture">Рисунок 5 – График уровня топлива в цистерне</p>
        <p class="text-justify">
            Для удобства, маркеры заправок в цистерну и отпуска топлива в технику отображаются на карте.
        </p>
        <a href="/img/fuel/mapmarkers.png" data-lightbox="mapmarkers" data-title='Маркеры заправок и сливов из цистерны'><img src="/img/fuel/mapmarkers.png" alt="Маркеры заправок и сливов из цистерны"
                class="mx-auto d-block img-fluid img-thumbnail"></a>
        <p class="text-center underpicture">Рисунок 6 – Маркеры заправок и сливов из цистерны</p>
    </div>
</section>
<? require "../common/footer.php"; ?>