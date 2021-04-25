@extends('layouts.app')

@section('content')

<section class="sectionOne_page3">
    <div class="contentFirstSection_page3">
        @include('components.breadcrumbs')
        <div class="contentMenu_page3">
            <div class="contentPart1Menu_page3">
                <div class="contentPart1_1Menu_page3">
                    <div class="contentPart1_1MenuSlider_page3">
                        <div class="contentPart1_1MenuSlider_1_page3">
                            @forelse($data['slides'] as $slide)
                            <div class="contentPart1_1MenuSlider_1Slide1_page3 contentPart1_1MenuSlider_1Slide_page3">
                                <img src="{{ $slide['img'] }}" alt="">
                            </div>
                            @empty
                            <div class="contentPart1_1MenuSlider_1Slide1_page3 contentPart1_1MenuSlider_1Slide_page3">
                                <img src="/img/jpg/contentPart1_1Menu_page3/Slider_page3/contentPart1_1MenuSlider_1Slide1_page3.jpg" alt="">
                            </div>
                            <div class="contentPart1_1MenuSlider_1Slide2_page3 contentPart1_1MenuSlider_1Slide_page3">
                                <img src="/img/jpg/contentPart1_1Menu_page3/Slider_page3/contentPart1_1MenuSlider_1Slide2_page3.jpg" alt="">
                            </div>
                            <div class="contentPart1_1MenuSlider_1Slide3_page3 contentPart1_1MenuSlider_1Slide_page3">
                                <img src="/img/jpg/contentPart1_1Menu_page3/Slider_page3/contentPart1_1MenuSlider_1Slide3_page3.jpg" alt="">
                            </div>
                            <div class="contentPart1_1MenuSlider_1Slide4_page3 contentPart1_1MenuSlider_1Slide_page3">
                                <img src="/img/jpg/contentPart1_1Menu_page3/Slider_page3/contentPart1_1MenuSlider_1Slide4_page3.jpg" alt="">
                            </div>
                            @endforelse
                        </div>
                        <div class="contentPart1_2MenuSlider_2_page3">
                            @forelse($data['slides'] as $slide)
                            <div class="contentPart1_1MenuSlider_1Slide1_page3 contentPart1_1MenuSlider_1Slide_page3">
                                <img src="{{ $slide['thumbs'] }}" alt="">
                            </div>

                            @empty
                            <div class="contentPart1_1MenuSlider_1Slide2_page3 contentPart1_1MenuSlider_1Slide_page3">
                                <img src="/img/jpg/contentPart1_1Menu_page3/Slider_page3/contentPart1_1MenuSlider_1Slide2_page3.jpg" alt="">
                            </div>
                            <div class="contentPart1_1MenuSlider_1Slide3_page3 contentPart1_1MenuSlider_1Slide_page3">
                                <img src="/img/jpg/contentPart1_1Menu_page3/Slider_page3/contentPart1_1MenuSlider_1Slide3_page3.jpg" alt="">
                            </div>
                            <div class="contentPart1_1MenuSlider_1Slide4_page3 contentPart1_1MenuSlider_1Slide_page3">
                                <img src="/img/jpg/contentPart1_1Menu_page3/Slider_page3/contentPart1_1MenuSlider_1Slide4_page3.jpg" alt="">
                            </div>
                            @endforelse
                        </div>
                    </div>
                    <div class="contentPart1_1MenuDescription_page3">
                        <div class="P1_1MenuDescriptionP1_page3">
                            <div class="P1_1MenuDescriptionP1Headline_page3">Описание</div>
                            <div class="P1_1MenuDescriptionP1Text_page3">
                                {{ $data['desription'] }}
                            </div>
                        </div>
                        <div class="P1_1MenuDescriptionP2_page3">
                            <div class="P1_1MenuDescriptionP2_1_page3">
                                <div class="P1_1MenuDescriptionP2_1Headline_page3">Характеристики</div>
                                <div class="P1_1MenuDescriptionP2_1Description_page3">
                                    @forelse($data['params'] as $param)
                                    <div class="P1_1MenuDescriptionP2_1Description1_page3">
                                        <div class="P1_1MenuDescriptionP2_1Description1Text1_page3">{{ $param['title'] }}</div>
                                        <div class="P1_1MenuDescriptionP2_1Description1Text2_page3">{{ $param['value'] }}</div>
                                    </div>
                                    @empty
                                        <div class="P1_1MenuDescriptionP2_1Description1_page3">
                                            <div class="P1_1MenuDescriptionP2_1Description1Text1_page3">СТРАНА</div>
                                            <div class="P1_1MenuDescriptionP2_1Description1Text2_page3">Россия</div>
                                        </div>
                                        <div class="P1_1MenuDescriptionP2_1Description2_page3">
                                            <div class="P1_1MenuDescriptionP2_1Description2Text1_page3">ОБЛИЦОВКА ПАНЕЛИ</div>
                                            <div class="P1_1MenuDescriptionP2_1Description2Text2_page3">Шпон лиственницы 2мм</div>
                                        </div>
                                        <div class="P1_1MenuDescriptionP2_1Description3_page3">
                                            <div class="P1_1MenuDescriptionP2_1Description3Text1_page3">ОСНОВАНИЕ ПАНЕЛИ</div>
                                            <div class="P1_1MenuDescriptionP2_1Description3Text2_page3">Четырех слойная конструкция из древесины хвойных пород</div>
                                        </div>
                                        <div class="P1_1MenuDescriptionP2_1Description4_page3">
                                            <div class="P1_1MenuDescriptionP2_1Description4Text1_page3">ПОКРЫТИЕ</div>
                                            <div class="P1_1MenuDescriptionP2_1Description4Text2_page3"><span class="popup1Word_page3 popupWord_page3">Масло</span>, <span class="popup2Word_page3 popupWord_page3">Лак</span>, <span class="popup3Word_page3 popupWord_page3">Лофт</span></div>
                                            <div class="popup1_page3 popup_page3">
                                                <div class="popup1Text1_page3">
                                                    ПОКРЫТИЕ МАСЛО
                                                    <button class="popup1Btn_page3 popupBtn_page3">
                                                        <img src="/img/svg/closeButton_page3.svg" alt="">
                                                    </button>
                                                </div>
                                                <div class="popup1Text2_page3">
                                                Красим все изделия в собственном покрасочном цехе лучшими составами для дерева от итальянских производителей Borma Washs и Sayerlack. Использование тщательно обработанных исходных материалов и безусловное соблюдение экологических норм позволили этим производителям получить сертификацию в соответствии с нормой ЕС ЕN 71, что является дополнительным свидетельством качества, надёжности и безопасности.
                                                Натуральное тиковое масло Borma Washs изготавливается из натуральных гипоаллергенных компонентов. Придаёт поверхности влагоустойчивый, антисептический эффект и защиту от ультрафиолетовых лучей. Позволяет создавать полупрозрачные и интенсивные оттенки покрытия, выгодно подчёркивая рельеф и натуральную красоту поверхности наших панелей. Надежно защищает деревянные панели от истирания и мелких механических дефектов наподобие царапин, продлевая срок их эксплуатации.
                                                </div>
                                            </div>
                                            <div class="popup2_page3 popup_page3">
                                                <div class="popup2Text1_page3">
                                                    ПОКРЫТИЕ ЛАК
                                                    <button class="popup2Btn_page3 popupBtn_page3">
                                                        <img src="/img/svg/closeButton_page3.svg" alt="">
                                                    </button>
                                                </div>
                                                <div class="popup2Text2_page3">
                                                Красим все изделия в собственном покрасочном цехе лучшими составами для дерева от итальянских производителей Borma Washs и Sayerlack. Использование тщательно обработанных исходных материалов и безусловное соблюдение экологических норм позволили этим производителям получить сертификацию в соответствии с нормой ЕС ЕN 71, что является дополнительным свидетельством качества, надёжности и безопасности.
                                                В своём производстве мы используем  лак для дерева только на водной основе. Лак на водной основе или аквалак это экологически чистый материал, который давно завоевал любовь обывателей, особенно тех, кто заботится о собственном здоровье и предпочитает окружать себя безопасными, в плане экологии, вещами. Лак на водной основе обеспечивает надежную защиту древесины и эффектно подчеркивает её природную красоту.
                                                </div>
                                            </div>
                                            <div class="popup3_page3 popup_page3">
                                                <div class="popup3Text1_page3">
                                                    ПОКРЫТИЕ
                                                    <button class="popup3Btn_page3 popupBtn_page3">
                                                        <img src="/img/svg/closeButton_page3.svg" alt="">
                                                    </button>
                                                </div>
                                                <div class="popup3Text2_page3">
                                                    Декоративная обработка - это придание панелям заданного внешнего вида. Применяется в эстетических целях для создания паркетной доски разных оттенков и стилей. Наиболее распространенными технологиями обработки паркета являются различные тонировки, браширование и другие технологии искусственного состаривания древесины.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="P1_1MenuDescriptionP2_1Description5_page3">
                                            <div class="P1_1MenuDescriptionP2_1Description5Text1_page3">СОЕДИНЕНИЕ</div>
                                            <div class="P1_1MenuDescriptionP2_1Description5Text2_page3"><span class="popup4Word_page3 popupWord_page3">Стык в стык</span>, <span class="popup6Word_page3 popupWord_page3">шип-паз</span>, <span class="popup7Word_page3 popupWord_page3">механическое</span>, <span class="popup5Word_page3 popupWord_page3">клеевое</span></div>
                                            <div class="popup4_page3 popup_page3">
                                                <div class="popup4Text1_page3">
                                                    СОЕДИНЕНИЕ МЕТОДОМ СТЫК В СТЫК
                                                    <button class="popup4Btn_page3 popupBtn_page3">
                                                        <img src="/img/svg/closeButton_page3.svg" alt="">
                                                    </button>
                                                </div>
                                                <div class="popup4Text2_page3">
                                                Стыковые соединения — это самый простой вид соединения деревянных панелей. Мы производим панели с прямым торцом. Все панели ровно обрезаны по торцу и по длине с формированием снятой фаски под углом 45 градусов шириной 1-2мм. При использовании такова метода крепления, панели могут собираться под любым углом наклона. Все панели крепятся монтажниками через шпильку или клей к плоскому деревянному основанию заранее подготовленной поверхности.
                                                </div>
                                            </div>
                                            <div class="popup6_page3 popup_page3">
                                                <div class="popup6Text1_page3">
                                                    СОЕДИНЕНИЕ МЕТОДОМ ШИП-ПАЗ  
                                                    <button class="popup6Btn_page3 popupBtn_page3">
                                                        <img src="/img/svg/closeButton_page3.svg" alt="">
                                                    </button>
                                                </div>
                                                <div class="popup6Text2_page3">
                                                При создании любой конструкции всегда разрабатывают методы крепления, способные обеспечить надёжность, возможность длительной эксплуатации и аккуратный внешний вид. Для решения этих задач в деревянных изделиях нашего производства применяется так называемое шиповое соединение. Основным принципом которого является крепления двух деталей. Для этого мы создаем в одной детали шип, а в другой паз (проушину), в которую вставляется шип. Используя столярные инструменты, мы обрабатываем обе детали с точным соблюдением геометрических размеров. Это обеспечивает надёжное зацепление. После этого изделие можно использовать без применения дополнительных скрепляющих элементов. Однако для повышения надёжности зацепления рекомендуем применять столярный клей или дополнительные крепёжные элементы.
                                                </div>
                                            </div>
                                            <div class="popup7_page3 popup_page3">
                                                <div class="popup7Text1_page3">
                                                    СОЕДИНЕНИЕ МЕХАНИЧЕСКИМ МЕТОДОМ  
                                                    <button class="popup7Btn_page3 popupBtn_page3">
                                                        <img src="/img/svg/closeButton_page3.svg" alt="">
                                                    </button>
                                                </div>
                                                <div class="popup7Text2_page3">
                                                Если у вас стены и потолок это бетонное основание и вам нужно качественное и долговечное крепление деревянного основания наших панелей через обрешётку или сразу к бетону. То в дополнение к простым клеям либо монтажной пене мы рекомендуем применить крепежные железные изделия, рассчитанные на высокие механические нагрузки.
                                                А для этого прикрепляйте тяжёлые деревянные детали при помощи саморезов, дюбель-гвоздей и анкерных болтов. Принцип работы этих крепежных элементов схож, поскольку по окончании того как они попадают в деревянную обрешётку или бетон, их тело вкручивается в рабочую часть что приводит к притягиванию основания панелей. В следствии чего крепление деревянных панелей к бетонному или гипсовому основанию получается весьма прочным.
                                                </div>
                                            </div>
                                            <div class="popup5_page3 popup_page3">
                                                <div class="popup5Text1_page3">
                                                    СОЕДИНЕНИЕ КЛЕЕВЫМ МЕТОДОМ  
                                                    <button class="popup5Btn_page3 popupBtn_page3">
                                                        <img src="/img/svg/closeButton_page3.svg" alt="">
                                                    </button>
                                                </div>
                                                <div class="popup5Text2_page3">
                                                Клеевое соединение полностью обеспечивает монолитность соединения. Применение клеевого соединения позволяет из маленьких элементов панелей создавать конструкции больших размеров, различных форм сечения и очертания.
                                                - Мы производим панели с маленькими и большими сечениями деталей. При использовании которых вы сможете дополнительно снизить стоимость конечного варианта панно так, как при покупке панелей вам не придется покупать основание под детали.
                                                - Еще одним не оспоримым преимуществом является то что приклеенные вами элементы придают повышенную прочностью, подготовленному вами основанию, а также вы всегда можете составить именно тот вариант раскладки деталей который понравится только вам.
                                                - Дополнительно при выборе клеевого метода самостоятельного приклеивания деталей вы или ваш мастер может использовать люк скрытого монтажа в качестве основания для сохранения доступа к скрытым техническими полостями. Как это делают при работе с кафелем.
                                                Перечисленные выше преимущества клеевых соединений и склеенных элементов дают основание считать клееные конструкции наиболее прогрессивной формой деревянных конструкций заводского изготовления.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="P1_1MenuDescriptionP2_1Description6_page3">
                                            <div class="P1_1MenuDescriptionP2_1Description6Text1_page3">ГАРАНТИЯ</div>
                                            <div class="P1_1MenuDescriptionP2_1Description6Text2_page3"><span class="popup8Word_page3 popupWord_page3">5 лет</span></div>
                                            <div class="popup8_page3 popup_page3">
                                                <div class="popup8Text1_page3">
                                                    ГАРАНТИЯ 5 ЛЕТ
                                                    <button class="popup8Btn_page3 popupBtn_page3">
                                                        <img src="/img/svg/closeButton_page3.svg" alt="">
                                                    </button>
                                                </div>
                                                <div class="popup8Text2_page3">
                                                    Декоративная обработка - это придание панелям заданного внешнего вида. Применяется в эстетических целях для создания паркетной доски разных оттенков и стилей. Наиболее распространенными технологиями обработки паркета являются различные тонировки, браширование и другие технологии искусственного состаривания древесины.
                                                </div>
                                            </div>
                                        </div>
                                    @endforelse
                                </div>
                            </div>
                            <div class="P1_1MenuDescriptionP2_2_page3">
                                <div class="P1_1MenuDescriptionP2_2Headline_page3">Доставка и оплата</div>
                                <div class="P1_1MenuDescriptionP2_2Description_page3">
                                    <div class="P1_1MenuDescriptionP2_2Description1_page3">
                                        <div class="P1_1MenuDescriptionP2_2Description1Text1_page3">ОПЛАТА</div>
                                        <div class="P1_1MenuDescriptionP2_2Description1Text2_page3"><span class="popup9Word_page3 popupWord_page3">Наличными</span>, <span class="popup10Word_page3 popupWord_page3">банковской картой</span></div>
                                        <div class="popup9_page3 popup_page3">
                                            <div class="popup9Text1_page3">
                                                ОПЛАТА
                                                <button class="popup9Btn_page3 popupBtn_page3">
                                                    <img src="/img/svg/closeButton_page3.svg" alt="">
                                                </button>
                                            </div>
                                            <div class="popup9Text2_page3">
                                                Декоративная обработка - это придание панелям заданного внешнего вида. Применяется в эстетических целях для создания паркетной доски разных оттенков и стилей. Наиболее распространенными технологиями обработки паркета являются различные тонировки, браширование и другие технологии искусственного состаривания древесины.
                                            </div>
                                        </div>
                                        <div class="popup10_page3 popup_page3">
                                            <div class="popup10Text1_page3">
                                                ОПЛАТА
                                                <button class="popup10Btn_page3 popupBtn_page3">
                                                    <img src="/img/svg/closeButton_page3.svg" alt="">
                                                </button>
                                            </div>
                                            <div class="popup10Text2_page3">
                                                Декоративная обработка - это придание панелям заданного внешнего вида. Применяется в эстетических целях для создания паркетной доски разных оттенков и стилей. Наиболее распространенными технологиями обработки паркета являются различные тонировки, браширование и другие технологии искусственного состаривания древесины.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="P1_1MenuDescriptionP2_2Description2_page3">
                                        <div class="P1_1MenuDescriptionP2_2Description2Text1_page3">ДОСТАВКА</div>
                                        <div class="P1_1MenuDescriptionP2_2Description2Text2_page3"><span class="popup11Word_page3 popupWord_page3">По всей России</span></div>
                                        <div class="popup11_page3 popup_page3">
                                            <div class="popup11Text1_page3">
                                                ДОСТАВКА
                                                <button class="popup11Btn_page3 popupBtn_page3">
                                                    <img src="/img/svg/closeButton_page3.svg" alt="">
                                                </button>
                                            </div>
                                            <div class="popup11Text2_page3">
                                                Декоративная обработка - это придание панелям заданного внешнего вида. Применяется в эстетических целях для создания паркетной доски разных оттенков и стилей. Наиболее распространенными технологиями обработки паркета являются различные тонировки, браширование и другие технологии искусственного состаривания древесины.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="P1_1MenuDescriptionP3_page3">
                            <div class="P1_1MenuDescriptionP3Element1_page3">
                                <span>Весь предлагаемый Вам ассортимент мы производим сами, что позволяет следить за высоким уровнем качества.</span>
                            </div>
                            <div class="P1_1MenuDescriptionP3Element2_page3">
                                <span>Функциональность и надежность в сравнении с привычным отделочным материалом.</span>
                            </div>
                            <div class="P1_1MenuDescriptionP3Element3_page3">
                                <span>Каждое изделие имеет неповторимый, природный рисунок, который мастер раскрыл в ручную</span>
                            </div>
                            <div class="P1_1MenuDescriptionP3Element4_page3">
                                <span>Доступная цена, при своей функциональности, надежности и неповторимости</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contentPart1_2Menu_page3">
                    <div class="contentPart1_2Menu_1_page3">
                        Вариации цветов
                    </div>
                    <div class="contentPart1_2Menu_2_page3">
                        <div class="contentPart1_2Menu_2Row_page3">
                            <div class="contentPart1_2Menu_2_Card1_page3 contentPart1_2Menu_2_Card_page3">
                                <div class="contentPart1_2Menu_2_Card1Img_page3 contentPart1_2Menu_2_CardImg_page3">
                                    <img src="/img/jpg/contentPart1_2Menu_page3/contentPart1_2Menu_2_Card1Img_page3.jpg" alt="">
                                </div>
                                <div class="contentPart1_2Menu_2_Card1Text_page3 contentPart1_2Menu_2_CardText_page3">№1 Белоснежно-белый</div>
                            </div>
                            <div class="contentPart1_2Menu_2_Card2_page3 contentPart1_2Menu_2_Card_page3">
                                <div class="contentPart1_2Menu_2_Card2Img_page3 contentPart1_2Menu_2_CardImg_page3">
                                    <img src="/img/jpg/contentPart1_2Menu_page3/contentPart1_2Menu_2_Card2Img_page3.jpg" alt="">
                                </div>
                                <div class="contentPart1_2Menu_2_Card2Text_page3 contentPart1_2Menu_2_CardText_page3">№2 Грецкий орех</div>
                            </div>
                            <div class="contentPart1_2Menu_2_Card3_page3 contentPart1_2Menu_2_Card_page3">
                                <div class="contentPart1_2Menu_2_Card3Img_page3 contentPart1_2Menu_2_CardImg_page3">
                                    <img src="/img/jpg/contentPart1_2Menu_page3/contentPart1_2Menu_2_Card3Img_page3.jpg" alt="">
                                </div>
                                <div class="contentPart1_2Menu_2_Card3Text_page3 contentPart1_2Menu_2_CardText_page3">№3 Естественный</div>
                            </div>
                            <div class="contentPart1_2Menu_2_Card4_page3 contentPart1_2Menu_2_Card_page3">
                                <div class="contentPart1_2Menu_2_Card4Img_page3 contentPart1_2Menu_2_CardImg_page3">
                                    <img src="/img/jpg/contentPart1_2Menu_page3/contentPart1_2Menu_2_Card4Img_page3.jpg" alt="">
                                </div>
                                <div class="contentPart1_2Menu_2_Card4Text_page3 contentPart1_2Menu_2_CardText_page3">№6 Океан</div>
                            </div>
                        </div>
                        <div class="contentPart1_2Menu_2Row_page3">
                            <div class="contentPart1_2Menu_2_Card5_page3 contentPart1_2Menu_2_Card_page3">
                                <div class="contentPart1_2Menu_2_Card5Img_page3 contentPart1_2Menu_2_CardImg_page3">
                                    <img src="/img/jpg/contentPart1_2Menu_page3/contentPart1_2Menu_2_Card5Img_page3.jpg" alt="">
                                </div>
                                <div class="contentPart1_2Menu_2_Card5Text_page3 contentPart1_2Menu_2_CardText_page3">№8 Дымчатый серый</div>
                            </div>
                            <div class="contentPart1_2Menu_2_Card6_page3 contentPart1_2Menu_2_Card_page3">
                                <div class="contentPart1_2Menu_2_Card6Img_page3 contentPart1_2Menu_2_CardImg_page3">
                                    <img src="/img/jpg/contentPart1_2Menu_page3/contentPart1_2Menu_2_Card6Img_page3.jpg" alt="">
                                </div>
                                <div class="contentPart1_2Menu_2_Card6Text_page3 contentPart1_2Menu_2_CardText_page3">№9 Горький шоколад</div>
                            </div>
                            <div class="contentPart1_2Menu_2_Card7_page3 contentPart1_2Menu_2_Card_page3">
                                <div class="contentPart1_2Menu_2_Card7Img_page3 contentPart1_2Menu_2_CardImg_page3">
                                    <img src="/img/jpg/contentPart1_2Menu_page3/contentPart1_2Menu_2_Card7Img_page3.jpg" alt="">
                                </div>
                                <div class="contentPart1_2Menu_2_Card7Text_page3 contentPart1_2Menu_2_CardText_page3">№10 Серый</div>
                            </div>
                            <div class="contentPart1_2Menu_2_Card8_page3 contentPart1_2Menu_2_Card_page3">
                                <div class="contentPart1_2Menu_2_Card8Img_page3 contentPart1_2Menu_2_CardImg_page3">
                                    <img src="/img/jpg/contentPart1_2Menu_page3/contentPart1_2Menu_2_Card8Img_page3.jpg" alt="">
                                </div>
                                <div class="contentPart1_2Menu_2_Card8Text_page3 contentPart1_2Menu_2_CardText_page3">№11 Серо-голубой</div>
                            </div>
                        </div>
                        <div class="contentPart1_2Menu_2Row_page3">
                            <div class="contentPart1_2Menu_2_Card9_page3 contentPart1_2Menu_2_Card_page3">
                                <div class="contentPart1_2Menu_2_Card9Img_page3 contentPart1_2Menu_2_CardImg_page3">
                                    <img src="/img/jpg/contentPart1_2Menu_page3/contentPart1_2Menu_2_Card9Img_page3.jpg" alt="">
                                </div>
                                <div class="contentPart1_2Menu_2_Card9Text_page3 contentPart1_2Menu_2_CardText_page3">№14 Белый античный</div>
                            </div>
                            <div class="contentPart1_2Menu_2_Card10_page3 contentPart1_2Menu_2_Card_page3">
                                <div class="contentPart1_2Menu_2_Card10Img_page3 contentPart1_2Menu_2_CardImg_page3">
                                    <img src="/img/jpg/contentPart1_2Menu_page3/contentPart1_2Menu_2_Card10Img_page3.jpg" alt="">
                                </div>
                                <div class="contentPart1_2Menu_2_Card10Text_page3 contentPart1_2Menu_2_CardText_page3">№15 Угольный</div>
                            </div>
                            <div class="contentPart1_2Menu_2_Card11_page3 contentPart1_2Menu_2_Card_page3">
                                <div class="contentPart1_2Menu_2_Card11Img_page3 contentPart1_2Menu_2_CardImg_page3">
                                    <img src="/img/jpg/contentPart1_2Menu_page3/contentPart1_2Menu_2_Card11Img_page3.jpg" alt="">
                                </div>
                                <div class="contentPart1_2Menu_2_Card11Text_page3 contentPart1_2Menu_2_CardText_page3">№16 Кофейный</div>
                            </div>
                            <div class="contentPart1_2Menu_2_Card12_page3 contentPart1_2Menu_2_Card_page3">
                                <div class="contentPart1_2Menu_2_Card12Img_page3 contentPart1_2Menu_2_CardImg_page3">
                                    <img src="/img/jpg/contentPart1_2Menu_page3/contentPart1_2Menu_2_Card12Img_page3.jpg" alt="">
                                </div>
                                <div class="contentPart1_2Menu_2_Card12Text_page3 contentPart1_2Menu_2_CardText_page3">№17 Олех лещина</div>
                            </div>
                        </div>
                        <div class="contentPart1_2Menu_2Row_page3">
                            <div class="contentPart1_2Menu_2_Card13_page3 contentPart1_2Menu_2_Card_page3">
                                <div class="contentPart1_2Menu_2_Card13Img_page3 contentPart1_2Menu_2_CardImg_page3">
                                    <img src="/img/jpg/contentPart1_2Menu_page3/contentPart1_2Menu_2_Card13Img_page3.jpg" alt="">
                                </div>
                                <div class="contentPart1_2Menu_2_Card13Text_page3 contentPart1_2Menu_2_CardText_page3">№18 Амарантовый</div>
                            </div>
                            <div class="contentPart1_2Menu_2_Card14_page3 contentPart1_2Menu_2_Card_page3">
                                <div class="contentPart1_2Menu_2_Card14Img_page3 contentPart1_2Menu_2_CardImg_page3">
                                    <img src="/img/jpg/contentPart1_2Menu_page3/contentPart1_2Menu_2_Card14Img_page3.jpg" alt="">
                                </div>
                                <div class="contentPart1_2Menu_2_Card14Text_page3 contentPart1_2Menu_2_CardText_page3">№19 Кленовый</div>
                            </div>
                            <div class="contentPart1_2Menu_2_Card15_page3 contentPart1_2Menu_2_Card_page3">
                                <div class="contentPart1_2Menu_2_Card15Img_page3 contentPart1_2Menu_2_CardImg_page3">
                                    <img src="/img/jpg/contentPart1_2Menu_page3/contentPart1_2Menu_2_Card15Img_page3.jpg" alt="">
                                </div>
                                <div class="contentPart1_2Menu_2_Card15Text_page3 contentPart1_2Menu_2_CardText_page3">№20 Яблоня</div>
                            </div>
                            <div class="contentPart1_2Menu_2_Card16_page3 contentPart1_2Menu_2_Card_page3">
                                <div class="contentPart1_2Menu_2_Card16Img_page3 contentPart1_2Menu_2_CardImg_page3">
                                    <img src="/img/jpg/contentPart1_2Menu_page3/contentPart1_2Menu_2_Card16Img_page3.jpg" alt="">
                                </div>
                                <div class="contentPart1_2Menu_2_Card16Text_page3 contentPart1_2Menu_2_CardText_page3">№21 Циан</div>
                            </div>
                        </div>
                    </div>
                    <div class="contentPart1_2Menu_3_page3">
                        <a href="#">Смотреть все цвета</a>
                    </div>
                </div>
                <div class="contentPart1_2_5Menu_page3">
                    <ul class="nav nav-tabs tabsMenu_page3">
                        <li class="active show filterTab_page3 filterTab1_page3 showFilterTab_page3"><a data-toggle="tab" href="#home">все размеры панелей</a></li>
                        <li class="filterTab_page3 filterTab2_page3"><a data-toggle="tab" href="#menu1">виды раскладок панелей</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="home" class="tab-pane fade in active show firstTab_page3">
                            <div class="lengthCharacteristics_page3">
                                <span class="lengthCharacteristicTitle_page3">ДЛИННА, мм</span>
                                <span class="lengthCharacteristic1_page3 lengthCharacteristic_page3">600</span>
                                <span class="lengthCharacteristic2_page3 lengthCharacteristic_page3">1200</span>
                                <span class="lengthCharacteristic3_page3 lengthCharacteristic_page3">1800</span>
                                <span class="lengthCharacteristic4_page3 lengthCharacteristic_page3 buttonOn_page3">2400</span>
                            </div>
                            <div class="widthCharacteristics_page3">
                                <span class="widthCharacteristicTitle_page3">ШИРИНА, мм</span>
                                <span class="widthCharacteristick1_page3 widthCharacteristick_page3">195</span>
                                <span class="widthCharacteristick2_page3 widthCharacteristick_page3">235</span>
                                <span class="widthCharacteristick3_page3 widthCharacteristick_page3">400</span>
                                <span class="widthCharacteristick4_page3 widthCharacteristick_page3">600</span>
                                <span class="widthCharacteristick5_page3 widthCharacteristick_page3">800</span>
                                <span class="widthCharacteristick6_page3 widthCharacteristick_page3">1000</span>
                                <span class="widthCharacteristick7_page3 widthCharacteristick_page3 buttonOn_page3">1200</span>
                            </div>    
                            <p class="firstTabTitle_page3">ПАНЕЛЬ BASIC 1800x800 мм</p>
                            <div class="firstTabImgGeometryControl_page3"></div> 
                        </div>
                        <div id="menu1" class="tab-pane fade secondTab_page3">
                            <div class="panelLayoutBtns_page3">
                                <button type="button" class="panelLayout1_page3 panelLayout_page3">
                                    <img src="/img/png/firstLayout_page3.png" alt="#">
                                </button>
                                <button type="button" class="panelLayout1_page3 panelLayout_page3">
                                    <img src="/img/png/secondLayout_page3.png" alt="#">
                                </button>
                                <button type="button" class="panelLayout1_page3 panelLayout_page3">
                                    <img src="/img/png/thirdLayout_page3.png" alt="#">
                                </button>
                            </div>
                            <div class="secondTabResult_page3">
                                <img src="/img/jpg/contentPart1_2Menu_page3/backgroundImg_page3.png" alt="#">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contentPart1_3Menu_page3">
                    <div class="contentPart1_3Menu_3_page3">
                        ДЛЯ ПРОИЗВОДСТВА ДЕКОРАТИВНЫХ ПАНЕЛЕЙ ИЗ ШПОНА ЛИСТВЕННИЦЫ МЫ ТЩАТЕЛЬНО ОТБИРАЕМ ТОЛЬКО САМОЕ ЛУЧШЕЕ СЫРЬЁ ОТ НАДЁЖНЫХ ПОСТАВЩИКОВ.
                    </div>
                    <div class="contentPart1_3Menu_4_page3">
                        <div class="contentPart1_3MenuAvatar_4_page3">
                            <img src="/img/jpg/contentPart1_3Menu_page3/contentPart1_3MenuAvatar_4_page3.jpg" alt="">
                        </div>
                        <div class="contentPart1_3MenuWho_4_page3">
                            <div class="contentPart1_3MenuName_4_page3">Дубинин Евгений Михайлович</div>
                            <div class="contentPart1_3MenuPosition_4_page3">Дирекор компании</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contentPart2Menu_page3">
                <div class="contentPart2MenuHeadline_page3"> {{ $data['title'] }} </div>
                <div class="contentPart2Size_page3">Размер панели: <span class="panelLength_page3">2400 мм </span>x<span class="panelWidth_page3"> 1200 мм</span></div>
                @if(!empty($data['price'])) 
                    <div>Покрытие: <span>{{ $data['price'][0]['name'] }}</span> </div>
                    <div class="contentPart2MenuCost_page3"><span class="contentPart2MenuCostNumber_page3">{{number_format($data['price'][0]['price'],0,'.',' ') }}</span> р/шт</div>
                @else 
                <div class="contentPart2MenuCost_page3"><span class="contentPart2MenuCostNumber_page3">Нет цены </span></div>
                @endif
                <div class="contentPart2MenuProductBrand_page3">Панель из коллекции <a href="{{ route('colection', ['colection'=>$data['collection'] ]) }}" class="contentPart2MenuProductBrandLink_page3">{{ $data['collection'] }}</a></div>
                <button class="contentPart2MenuBuyBtn_page3" type="button">КУПИТЬ</button>
                <button class="contentPart2MenuAskQuestionBtn_page3 button js-button-campaign">ХОЧУ ЗАДАТЬ ВОПРОС</button>     
                <!-- <a href="#" class="contentPart2MenuDownloadFile_page3">Скачать 3D модель в<br> 3Dsmax (150 мб)</a> -->
            </div>
        </div>
        <div class="contentPart1_4Menu_page3">
            <div class="contentPart1_4Menu_1_page3">
                Расчитайте стоимость вашей стены {{ $data['title'] }}
            </div>
            <div class="contentPart1_4Menu_2_page3">
                <div class="entryField1container_page3">
                    <div class="entryField1containerHeadline_page3">
                        Ширина стены
                    </div>
                    <input type="number" class="entryField1_page3" placeholder="мм">
                </div>
                <div class="entryField2container_page3">
                    <div class="entryField2containerHeadline_page3">
                        Длина стены
                    </div>
                    <input type="number" class="entryField2_page3" placeholder="мм">
                </div>
                <div class="entryField3container_page3">
                    <div class="entryField3containerHeadline_page3">
                        Выберите тип покрытия
                    </div>
                    <select class="form-control panelType_page3" id="exampleFormControlSelect1" >
                        <option selected>Выберите тип покрытия</option>
                        @foreach($data['price'] as $item)
                            <option  value="{{ $item['price'] }}">{{ $item['name'] }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="button" class="btn btn-primary contentPart1_4MenuBtn_page3" data-toggle="modal" data-target="#exampleModalCenter" data-backdrop="false">Расчитать</button>
                <input type="hidden" class="panelLength_page13" value="{{ $length }}">
                <input type="hidden" class="panelHeight_page13" value="{{ $width }}">
            </div>
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="padding-right: 0px;">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                            <button type="button" class="close" id="closeModalWindow_page13" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" id="closeModalWindowRow_page13">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="modalRow1_page13">
                                Количество панелей: <span class="panelQuantity_page13"></span> шт.
                            </div>
                            <div class="modalRow2_page13">
                                Цена за 1 шт.: <span class="pricePerPanel_page13"></span> руб.
                            </div>
                            <div class="modalRow3_page13">
                                Цена: <span class="panelPrice_page13"></span> руб.
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" id="buyBtnModal_page13">Купить</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contentPart1_5Menu_page3">
            <div class="contentPart1_5Menu_1_page3">
                Похожие товары
            </div>
            <div class="contentPart1_5Menu_2_page3">
                @forelse($data['recomended'] as $recomended)
                <div class="contentPart1_5Menu_2_Card1_page3 contentPart1_5Menu_2_Card_page3">
                    <div class="contentPart1_5Menu_2_Card1Img_page3 contentPart1_5Menu_2_CardImg_page3">
                        <a href="{{ $recomended['url'] }}"><img src="{{ asset($recomended['img']) }}" alt=""></a>
                    </div>
                    <div class="contentPart1_5Menu_2_Card1Text_page3 contentPart1_5Menu_2_CardText_page3">
                        <a href="{{ $recomended['url'] }}">{{ $recomended['title']}}</a>
                    </div>
                </div>
                @empty
                <div class="contentPart1_5Menu_2_Card1_page3 contentPart1_5Menu_2_Card_page3">
                    <div class="contentPart1_5Menu_2_Card1Img_page3 contentPart1_5Menu_2_CardImg_page3">
                        <a href="#"><img src="/img/jpg/contentPart1_5Menu_page3/contentPart1_5Menu_2_Card1_page3.jpg" alt=""></a>
                    </div>
                    <div class="contentPart1_5Menu_2_Card1Text_page3 contentPart1_5Menu_2_CardText_page3">
                        <a href="#">PARTITO</a>
                    </div>
                </div>
                <div class="contentPart1_5Menu_2_Card2_page3 contentPart1_5Menu_2_Card_page3">
                    <div class="contentPart1_5Menu_2_Card2Img_page3 contentPart1_5Menu_2_CardImg_page3">
                        <a href="#"><img src="/img/jpg/contentPart1_5Menu_page3/contentPart1_5Menu_2_Card2_page3.jpg" alt=""></a>
                    </div>
                    <div class="contentPart1_5Menu_2_Card2Text_page3 contentPart1_5Menu_2_CardText_page3">
                        <a href="#">CHOKOLATTO</a>
                    </div>
                </div>
                <div class="contentPart1_5Menu_2_Card3_page3 contentPart1_5Menu_2_Card_page3">
                    <div class="contentPart1_5Menu_2_Card3Img_page3 contentPart1_5Menu_2_CardImg_page3">
                        <a href="#"><img src="/img/jpg/contentPart1_5Menu_page3/contentPart1_5Menu_2_Card3_page3.jpg" alt=""></a>
                    </div>
                    <div class="contentPart1_5Menu_2_Card3Text_page3 contentPart1_5Menu_2_CardText_page3">
                        <a href="#">ROBLE</a>
                    </div>
                </div>
                <div class="contentPart1_5Menu_2_Card4_page3 contentPart1_5Menu_2_Card_page3">
                    <div class="contentPart1_5Menu_2_Card4Img_page3 contentPart1_5Menu_2_CardImg_page3">
                        <a href="#"><img src="/img/jpg/contentPart1_5Menu_page3/contentPart1_5Menu_2_Card4_page3.jpg" alt=""></a>
                    </div>
                    <div class="contentPart1_5Menu_2_Card4Text_page3 contentPart1_5Menu_2_CardText_page3">
                        <a href="#">LA HAVANNA</a>
                    </div>
                </div>
                @endforelse
            </div>
        </div>
    </div>
</section>
<div class="overlay js-overlay-campaign">
    <div class="popup js-popup-campaign">
        <p class="overlayTitle_page3">Поможем с любым вопросом!</p>
        <p class="overlayText_page3">Если у Вас есть вопросы о материале, сфере его применения, оставьте свою электронную почту или телефон и мы свяжемся с Вами указанным способом.</p>
        <div class="close-popup js-close-campaign"></div>
        <form action="#" method="post" class="overlayLoginForm_page3">
            <div class="overlayButtons_page3">
                <a href="#" class="overlayMailBtn_page3 showOverlayBtn_page3">
                    <img src="/img/svg/overlayMesageWhiteIcon_page3.svg" alt="#" id="mailBtnPic_page3">
                    По эл. почте
                </a>
                <a href="#" class="overlayPhoneBtn_page3">
                    <img src="/img/svg/overlayPhoneBlackIcon_page3.svg" alt="#" id="phoneBtnPic_page3">
                    По телефону
                </a>
            </div>
            <input type="text" name="inputYourName" id="name_page3" placeholder="Имя" required>
            <input type="mail" name="inputYourMail" id="mail_page3" class="showOverlayForm" placeholder="Электронная почта">
            <input type="tel" name="inputYourPhoneNumber" id="phoneNumber_page3" placeholder="Номер телефона">
            <textarea name="questionText" id="sendYourQuestion_page3" cols="30" rows="10" placeholder="Текст вопроса"></textarea>
            <label class="overlayAccept_page3">
                <input type="checkbox"> Я согласен с условиями обработки  <a href="#" class="overlayLink_page3">персональных данных</a>
            </label>
            <button type="submit" class="overlaySubmitBtn_page3">ОТПРАВИТЬ НА ПОЧТУ</button>
        </form>
    </div>
</div>
<script>
    let panelLength = document.querySelector('.entryField1_page3');
    let panelHeight = document.querySelector('.entryField2_page3');
    let btn = document.querySelector('.contentPart1_4MenuBtn_page3');
    let showPrice = document.querySelector('.panelQuantity_page13');
    let defaultWidth = document.querySelector('.panelLength_page13');
    let defaultHeight = document.querySelector('.panelHeight_page13');
    let panelPerRow;
    let rowQuantity;
    let price = document.querySelector('.panelPrice_page13');
    let pricePerMeter = document.querySelector('.contentPart2MenuCostNumber_page3');
    let pricePerPanel = document.querySelector('.pricePerPanel_page13');
    let pricePanel = document.getElementById('exampleFormControlSelect1');
   

    btn.onclick = function() {

        panelPerRow = Math.ceil(panelLength.value / defaultWidth.value);
        rowQuantity = Math.ceil(panelHeight.value / defaultHeight.value);
        showPrice.textContent = panelPerRow * rowQuantity;
        price.textContent = Math.round(showPrice.textContent * pricePanel.value);
        pricePerPanel.textContent = pricePanel.value; 
        
    };
    
    var popupSource1_page3 = document.querySelector('.popup1Word_page3');
    var closePopup1Btn_page3 = document.querySelector('.popup1Btn_page3');
    var popup1_page3 = document.querySelector('.popup1_page3');

    var popupSource2_page3 = document.querySelector('.popup2Word_page3');
    var closePopup2Btn_page3 = document.querySelector('.popup2Btn_page3');
    var popup2_page3 = document.querySelector('.popup2_page3');

    var popupSource3_page3 = document.querySelector('.popup3Word_page3');
    var closePopup3Btn_page3 = document.querySelector('.popup3Btn_page3');
    var popup3_page3 = document.querySelector('.popup3_page3');

    var popupSource4_page3 = document.querySelector('.popup4Word_page3');
    var closePopup4Btn_page3 = document.querySelector('.popup4Btn_page3');
    var popup4_page3 = document.querySelector('.popup4_page3');

    var popupSource5_page3 = document.querySelector('.popup5Word_page3');
    var closePopup5Btn_page3 = document.querySelector('.popup5Btn_page3');
    var popup5_page3 = document.querySelector('.popup5_page3');

    var popupSource6_page3 = document.querySelector('.popup6Word_page3');
    var closePopup6Btn_page3 = document.querySelector('.popup6Btn_page3');
    var popup6_page3 = document.querySelector('.popup6_page3');

    var popupSource7_page3 = document.querySelector('.popup7Word_page3');
    var closePopup7Btn_page3 = document.querySelector('.popup7Btn_page3');
    var popup7_page3 = document.querySelector('.popup7_page3');

    var popupSource8_page3 = document.querySelector('.popup8Word_page3');
    var closePopup8Btn_page3 = document.querySelector('.popup8Btn_page3');
    var popup8_page3 = document.querySelector('.popup8_page3');

    var popupSource9_page3 = document.querySelector('.popup9Word_page3');
    var closePopup9Btn_page3 = document.querySelector('.popup9Btn_page3');
    var popup9_page3 = document.querySelector('.popup9_page3');

    var popupSource10_page3 = document.querySelector('.popup10Word_page3');
    var closePopup10Btn_page3 = document.querySelector('.popup10Btn_page3');
    var popup10_page3 = document.querySelector('.popup10_page3');

    var popupSource11_page3 = document.querySelector('.popup11Word_page3');
    var closePopup11Btn_page3 = document.querySelector('.popup11Btn_page3');
    var popup11_page3 = document.querySelector('.popup11_page3');
        
        /* Первый попап */
    popupSource1_page3.onclick = function () {
        popup1_page3.classList.add('showPopup_page3');
        popup_page3.classList.remove('showPopup_page3');
    }
    closePopup1Btn_page3.onclick = function() {
        popup1_page3.classList.remove('showPopup_page3');
    }
        /* Второй попап */
    popupSource2_page3.onclick = function () {
        popup2_page3.classList.add('showPopup_page3');
        popup_page3.classList.remove('showPopup_page3');
    }
    closePopup2Btn_page3.onclick = function() {
        popup2_page3.classList.remove('showPopup_page3');
    }
        /* Третий попап */
    popupSource3_page3.onclick = function () {
        popup3_page3.classList.add('showPopup_page3');
        popup_page3.classList.remove('showPopup_page3');
    }
    closePopup3Btn_page3.onclick = function() {
        popup3_page3.classList.remove('showPopup_page3');
    }
        /* Четвёртый попап */
    popupSource4_page3.onclick = function () {
        popup4_page3.classList.add('showPopup_page3');
        popup_page3.classList.remove('showPopup_page3');
    }
    closePopup4Btn_page3.onclick = function() {
        popup4_page3.classList.remove('showPopup_page3');
    }
        /* Пятый попап */
    popupSource5_page3.onclick = function () {
        popup5_page3.classList.add('showPopup_page3');
        popup_page3.classList.remove('showPopup_page3');
    }
    closePopup5Btn_page3.onclick = function() {
        popup5_page3.classList.remove('showPopup_page3');
    }
        /* Шестой попап */
    popupSource6_page3.onclick = function () {
        popup6_page3.classList.add('showPopup_page3');
        popup_page3.classList.remove('showPopup_page3');
    }
    closePopup6Btn_page3.onclick = function() {
        popup6_page3.classList.remove('showPopup_page3');
    }
        /* Седьмой попап */
    popupSource7_page3.onclick = function () {
        popup7_page3.classList.add('showPopup_page3');
        popup_page3.classList.remove('showPopup_page3');
    }
    closePopup7Btn_page3.onclick = function() {
        popup7_page3.classList.remove('showPopup_page3');
    }
        /* Восьмой попап */
    popupSource8_page3.onclick = function () {
        popup8_page3.classList.add('showPopup_page3');
        popup_page3.classList.remove('showPopup_page3');
    }
    closePopup8Btn_page3.onclick = function() {
        popup8_page3.classList.remove('showPopup_page3');
    }
        /* Девятый попап */
    popupSource9_page3.onclick = function () {
        popup9_page3.classList.add('showPopup_page3');
        popup_page3.classList.remove('showPopup_page3');
    }
    closePopup9Btn_page3.onclick = function() {
        popup9_page3.classList.remove('showPopup_page3');
    }
        /* Десятый попап */
    popupSource10_page3.onclick = function () {
        popup10_page3.classList.add('showPopup_page3');
        popup_page3.classList.remove('showPopup_page3');
    }
    closePopup10Btn_page3.onclick = function() {
        popup10_page3.classList.remove('showPopup_page3');
    }
        /* Одинадцатый попап */
    popupSource11_page3.onclick = function () {
        popup11_page3.classList.add('showPopup_page3');
        popup_page3.classList.remove('showPopup_page3');
    }
    closePopup11Btn_page3.onclick = function() {
        popup11_page3.classList.remove('showPopup_page3');
    }
</script>
<script>
    // Модальное окно
    // открыть по кнопке
    $(document).ready(function() {

        $('.js-button-campaign').click(function() { 
            $('.sectionOne_page3').css('filter', 'blur(5px)');
            $('.js-overlay-campaign').fadeIn();
            $('.js-overlay-campaign').addClass('disabled');
        });

        // закрыть на крестик
        $('.js-close-campaign').click(function() { 
            $('.js-overlay-campaign').fadeOut();
            $('.sectionOne_page3').css('filter', 'blur(0px)');
        });

        $('.overlaySubmitBtn_page3').click(function() { 
            $('.js-overlay-campaign').fadeOut();
            $('.sectionOne_page3').css('filter', 'blur(0px)');
        });

        // закрыть по клику вне окна
        $(document).mouseup(function (e) { 
            var popup = $('.js-popup-campaign');
            if (e.target!=popup[0]&&popup.has(e.target).length === 0){
                $('.js-overlay-campaign').fadeOut();
                $('.sectionOne_page3').css('filter', 'blur(0px)');
            }
        });
    });
</script>
<script>
    // Переключатель форм
    let mailBtn_page3 = document.querySelector('.overlayMailBtn_page3');
    let phoneBtn_page3 = document.querySelector('.overlayPhoneBtn_page3');
    let inputMail_page3 = document.querySelector('#mail_page3');
    let inputPhoneNum_page3 = document.querySelector('#phoneNumber_page3');

    mailBtn_page3.onclick = function() {
        mailBtn_page3.classList.add('showOverlayBtn_page3');
        phoneBtn_page3.classList.remove('showOverlayBtn_page3');
        inputMail_page3.classList.add('showOverlayForm');
        inputPhoneNum_page3.classList.remove('showOverlayForm');
        document.getElementById("phoneBtnPic_page3").src = "/img/svg/overlayPhoneBlackIcon_page3.svg";
        document.getElementById("mailBtnPic_page3").src = "/img/svg/overlayMesageWhiteIcon_page3.svg";
    };
    phoneBtn_page3.onclick = function() {
        mailBtn_page3.classList.remove('showOverlayBtn_page3');
        phoneBtn_page3.classList.add('showOverlayBtn_page3');
        inputMail_page3.classList.remove('showOverlayForm');
        inputPhoneNum_page3.classList.add('showOverlayForm');
        document.getElementById("mailBtnPic_page3").src = "/img/svg/overlayMessageBlackIcon_page3.svg";
        document.getElementById("phoneBtnPic_page3").src = "/img/svg/overlayPhoneWhiteIcon_page3.svg"
    };
</script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    // Настройки длины панели
    $(".lengthCharacteristic_page3").click(function(e) {
        e.preventDefault();
        $(".lengthCharacteristic_page3").removeClass('buttonOn_page3');
        $(this).addClass('buttonOn_page3');
    });
    // Настройки ширины панели
    $(".widthCharacteristick_page3").click(function(e) {
        e.preventDefault();
        $(".widthCharacteristick_page3").removeClass('buttonOn_page3');
        $(this).addClass('buttonOn_page3');
    });
</script>
<script>
        // Настройки длинны
    $(".lengthCharacteristic1_page3").on('click', function(){
        $('.firstTabImgGeometryControl_page3').animate({
        "width": "25%",
        }, 300, "linear");
    });

    $(".lengthCharacteristic2_page3").on('click', function(){
    $('.firstTabImgGeometryControl_page3').animate({
        "width": "50%",
    }, 300, "linear");
    });

    $(".lengthCharacteristic3_page3").on('click', function(){
    $('.firstTabImgGeometryControl_page3').animate({
        "width": "75%",
    }, 300, "linear");
    });

    $(".lengthCharacteristic4_page3").on('click', function(){
    $('.firstTabImgGeometryControl_page3').animate({
        "width": "100%",
    }, 300, "linear");
    });

    // Настройки ширины
    $(".widthCharacteristick1_page3").on('click', function(){
    $('.firstTabImgGeometryControl_page3').animate({
        "height": "50px",
    }, 300, "linear");
    });

    $(".widthCharacteristick2_page3").on('click', function(){
    $('.firstTabImgGeometryControl_page3').animate({
        "height": "100px",
    }, 300, "linear");
    });

    $(".widthCharacteristick3_page3").on('click', function(){
    $('.firstTabImgGeometryControl_page3').animate({
        "height": "150px",
    }, 300, "linear");
    });

    $(".widthCharacteristick4_page3").on('click', function(){
    $('.firstTabImgGeometryControl_page3').animate({
        "height": "200px",
    }, 300, "linear");
    });

    $(".widthCharacteristick5_page3").on('click', function(){
    $('.firstTabImgGeometryControl_page3').animate({
        "height": "250px",
    }, 300, "linear");
    });

    $(".widthCharacteristick6_page3").on('click', function(){
    $('.firstTabImgGeometryControl_page3').animate({
        "height": "300px",
    }, 300, "linear");
    });

    $(".widthCharacteristick7_page3").on('click', function(){
    $('.firstTabImgGeometryControl_page3').animate({
        "height": "350px",
    }, 300, "linear");
    });
</script>
<script>
    let filterTab1 = document.querySelector('.filterTab1_page3');
    let filterTab2 = document.querySelector('.filterTab2_page3');

    filterTab1.onclick = function() {
        filterTab1.classList.add('showFilterTab_page3');
        filterTab2.classList.remove('showFilterTab_page3');
    }

    filterTab2.onclick = function() {
        filterTab1.classList.remove('showFilterTab_page3');
        filterTab2.classList.add('showFilterTab_page3');
    }
</script>
<script>
    let lengthValues = document.querySelectorAll('.lengthCharacteristic_page3');
    let widthValues = document.querySelectorAll('.widthCharacteristick_page3');
    let lengthValueText = document.querySelector('.panelLength_page3');
    let widthValueText = document.querySelector('.panelWidth_page3');

    // Вывод значения длины
    for (let lengthValue of lengthValues) {
        lengthValue.onclick = function () {
            lengthValueText.textContent = lengthValue.textContent + ' мм ';
        }
    };

    // Вывод значения высоты
    for (let widthValue of widthValues) {
        widthValue.onclick = function () {
            widthValueText.textContent = ' ' + widthValue.textContent + ' мм ';
        }
    };
</script>
@endsection