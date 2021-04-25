<main>
    <section class="sectionOne_page1">
            @forelse($mainBlocks as $str)
                <div class="content1FirstSection_page1">
                    <div class="firstSectionContent1_page1">
                        <div class="content1Product1Title_page1">
                            <a href="{{ $str['mm1']['link'] }}" class="content1Product1Link1_page1">{{ $str['mm1']['title'] }}</a>
                            @if (!empty($str['mm1']['subtitle']))
                                <a href="{{ $str['mm1']['link'] }}" class="content1Product1Link2_page1">{{ $str['mm1']['subtitle'] }}</a>
                            @endif
                        </div>
                        <div class="content1Product1Picture">
                            <a href="{{ $str['mm1']['link'] }}"><img src="{{ $str['mm1']['img'] }}" alt=""></a>
                        </div>
                    </div>
                    <div class="firstSectionContent2_page1">
                        <div class="content2Product2Picture">
                            <a href="{{ $str['mm2']['link'] }}"><img src="{{ $str['mm2']['img'] }}" alt=""></a>
                        </div>
                        <div class="content2Product2Title_page1">
                            <a href="{{ $str['mm2']['link'] }}" class="content2Product2Link1_page1">{{ $str['mm2']['title'] }}</a>
                            @if (!empty($str['mm2']['subtitle']))
                                <a href="{{ $str['mm2']['link'] }}" class="content2Product2Link2_page1">{{ $str['mm2']['subtitle'] }}</a>
                            @endif
                            
                        </div>
                    </div>
                    <div class="firstSectionContent3_page1">
                        <div class="content3Product3Title_page1">
                            <a href="{{ $str['mm3']['link'] }}" class="content3Product3Link1_page1">{{ $str['mm3']['title'] }}</a>
                            @if (!empty($str['mm3']['subtitle']))
                                <a href="{{ $str['mm3']['link'] }}" class="content3Product3Link2_page1">{{ $str['mm3']['subtitle'] }}</a>
                            @endif
                        </div>
                        <div class="content3Product3Picture">
                            <a href="{{ $str['mm3']['link'] }}"><img src="{{ $str['mm3']['img'] }}" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="content2FirstSection_page1">
                    <div class="content2FirstSectionPart1_page1">
                        <div class="content2FirstSectionPart1Content1">
                            <a href="{{ $str['xm']['link'] }}"><img src="{{ $str['xm']['img'] }}" alt=""></a>
                            <div class="part1Content1Title_page1">
                                <div class="part1Content1Title1_page1">
                                    <a href="{{ $str['xm']['link'] }}">{{ $str['xm']['title'] }}</a>
                                </div>
                                <div class="part1Content1Title2_page1">
                                @if (!empty($str['xm']['subtitle']))
                                    <a href="{{ $str['xm']['link'] }}">{{ $str['xm']['subtitle'] }}</a>
                                @endif
                                </div>
                            </div>
                        </div>
                        <div class="content2FirstSectionPart1Content2_page1">
                            <div class="content2FirstSectionPart1Content2_1_page1">
                                <a href="{{ $str['ss1']['link'] }}"><img src="{{ $str['ss1']['img'] }}" alt=""></a>
                                <div class="content2Part1Content2_1Links_page1">
                                    <a href="{{ $str['ss1']['link'] }}" class="content2Part1Content2_1Link1_page1">{{ $str['ss1']['title'] }}</a>
                                    @if (!empty($str['ss1']['subtitle']))
                                        <a href="{{ $str['ss1']['link'] }}" class="content2Part1Content2_1Link2_page1">{{ $str['ss1']['subtitle'] }}</a>
                                    @endif
                                </div>
                            </div>
                            <div class="content2FirstSectionPart1Content2_1_page1">
                            <a href="{{ $str['ss2']['link'] }}"><img src="{{ $str['ss2']['img'] }}" alt=""></a>
                                <div class="content2Part1Content2_1Links_page1">
                                    <a href="{{ $str['ss2']['link'] }}" class="content2Part1Content2_1Link1_page1">{{ $str['ss2']['title'] }}</a>
                                    @if (!empty($str['ss2']['subtitle']))
                                        <a href="{{ $str['ss2']['link'] }}" class="content2Part1Content2_1Link2_page1">{{ $str['ss2']['subtitle'] }}</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content2FirstSectionPart2_page1">
                        <div class="content2FirstSectionPart2Title_page1">
                            <a href="{{ $str['mx']['link'] }}" class="content2Part2ProductLink1_page1">{{ $str['mx']['title'] }}</a>
                            @if (!empty($str['mx']['subtitle']))
                                <a href="{{ $str['mx']['link'] }}" class="content2Part2ProductLink2_page1">{{ $str['mx']['subtitle'] }}</a>
                            @endif
                        </div>
                        <div class="content2Part2ProductPicture_page1">
                            <a href="{{ $str['mx']['link'] }}"><img src="{{ $str['mx']['img'] }}" alt=""></a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="content1FirstSection_page1">
                    <div class="firstSectionContent1_page1">
                        <div class="content1Product1Title_page1">
                            <a href="#" class="content1Product1Link1_page1">ПАНЕЛИ BASIC</a>
                            <a href="#" class="content1Product1Link2_page1">РАЗМЕРЫ ПОД ЛЮБЫЕ НУЖДЫ В КОЛЛЕКЦИИ BASIC</a>
                        </div>
                        <div class="content1Product1Picture">
                            <a href="#"><img src="/public/img/jpg/firstSection_page1/firstSectionContent1Pic1_page1.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="firstSectionContent2_page1">
                        <div class="content2Product2Picture">
                            <a href="#"><img src="/public/img/jpg/firstSection_page1/firstSectionContent2Pic2_page1.jpg" alt=""></a>
                        </div>
                        <div class="content2Product2Title_page1">
                            <a href="#" class="content2Product2Link1_page1">ПАНЕЛИ ITALIA</a>
                            <a href="#" class="content2Product2Link2_page1">РАЗМЕРЫ ПОД ЛЮБЫЕ НУЖДЫ В КОЛЛЕКЦИИ ITALIA</a>
                        </div>
                    </div>
                    <div class="firstSectionContent3_page1">
                        <div class="content3Product3Title_page1">
                            <a href="#" class="content3Product3Link1_page1">ПАНЕЛИ CUBA</a>
                            <a href="#" class="content3Product3Link2_page1">РАЗМЕРЫ ПОД ЛЮБЫЕ НУЖДЫ В КОЛЛЕКЦИИ CUBA</a>
                        </div>
                        <div class="content3Product3Picture">
                            <a href="#"><img src="/public/img/jpg/firstSection_page1/firstSectionContent3Pic3_page1.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="content2FirstSection_page1">
                    <div class="content2FirstSectionPart1_page1">
                        <div class="content2FirstSectionPart1Content1">
                            <a href="#"><img src="/public/img/jpg/firstSection_page1/firstSectionContent2Part1Content1_page1.jpg" alt=""></a>
                            <div class="part1Content1Title_page1">
                                <div class="part1Content1Title1_page1">
                                    <a href="#"><img src="/public/img/png/content2Part1Content1Title1_page1.png" alt=""></a>
                                </div>
                                <div class="part1Content1Title2_page1">
                                    <a href="#">ДИЗНАЙРЕАМ, СТРОИТЕЛЯМ, АРХИТЕКТОРАМ, ДИСТРИБЬЮТОРАМ</a>
                                </div>
                            </div>
                        </div>
                        <div class="content2FirstSectionPart1Content2_page1">
                            <div class="content2FirstSectionPart1Content2_1_page1">
                                <a href="#"><img src="/public/img/jpg/firstSection_page1/content2Part1Content2_1_page1.jpg" alt=""></a>
                                <div class="content2Part1Content2_1Links_page1">
                                    <a href="#" class="content2Part1Content2_1Link1_page1">МОНТАЖ</a>
                                    <a href="#" class="content2Part1Content2_1Link2_page1">СМОТРИТЕ, КАК ВСЕ ПРОСТО</a>
                                </div>
                            </div>
                            <div class="content2FirstSectionPart1Content2_2_page1">
                                <a href="#"><img src="/public/img/jpg/firstSection_page1/content2Part1Content2_2_page1.jpg" alt=""></a>
                                <a href="#" class="content2Part1Content2_2Link1_page1">ЭКОЛОГИЯ</a>
                            </div>
                        </div>
                    </div>
                    <div class="content2FirstSectionPart2_page1">
                        <div class="content2FirstSectionPart2Title_page1">
                            <a href="" class="content2Part2ProductLink1_page1">ПАНЕЛИ NORGE</a>
                            <a href="" class="content2Part2ProductLink2_page1">РАЗМЕРЫ ПОД ЛЮБЫЕ НУЖДЫ В КОЛЛЕКЦИИ NORGE</a>
                        </div>
                        <div class="content2Part2ProductPicture_page1">
                            <a href="#"><img src="/public/img/jpg/firstSection_page1/content2Part2Product_page1.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
            
                <div class="content3FirstSection_page1">
                    <div class="firstSectionContent3_1_page1">
                        <div class="content3Product1Title_page1">
                            <a href="#" class="content3Product1Link1_page1">ПАНЕЛЬ ПО РАЗМЕРАМ КЛИЕНТА</a>
                            <a href="#" class="content3Product1Link2_page1">ИЗГОТОВИМ ПАНЕЛИ ПО ВАШИМ РАЗМЕРАМ</a>
                        </div>
                        <div class="content3Product1Picture">
                            <a href="#"><img src="/public/img/jpg/firstSection_page1/firstSectionContent3Pic4_page1.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="firstSectionContent3_2_page1">
                        <div class="content3Product2Picture">
                            <a href="#"><img src="/public/img/jpg/firstSection_page1/firstSectionContent3Pic5_page1.jpg" alt=""></a>
                        </div>
                        <div class="content3Product2Title_page1">
                            <a href="#" class="content3Product2Link1_page1">ПАННО</a>
                        </div>
                    </div>
                    <div class="firstSectionContent3_3_page1">
                        <div class="content3Product3Title_page1">
                            <a href="#" class="content3Product3Link1_page1">СТОЛЕШНИЦЫ И ПОЛКИ</a>
                        </div>
                        <div class="content3Product3Picture">
                            <a href="#"><img src="/public/img/jpg/firstSection_page1/firstSectionContent3Pic6_page1.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="content4FirstSection_page1">
                    <div class="content4FirstSectionPart1_page1">
                        <div class="content4FirstSectionPart1Content4_1">
                            <a href="#"><img src="/public/img/jpg/firstSection_page1/firstSectionContent4Part1Content4_1_page1.jpg" alt=""></a>
                            <div class="part1Content4_1Title_page1">
                                <div class="part1Content4_1Title1_page1">
                                    <a href="#">МЕБЕЛЬ</a>
                                </div>
                                <div class="part1Content4_1Title2_page1">
                                    <a href="#">ДИВАНЫ, КРЕСЛА, СТОЛЫ, КОМОДЫ, ТУМБЫ</a>
                                </div>
                            </div>
                        </div>
                        <div class="content4FirstSectionPart1Content4_2_page1">
                            <div class="content4FirstSectionPart1Content4_2_1_page1">
                                <a href="#"><img src="/public/img/jpg/firstSection_page1/content4Part1Content4_2_1_page1.jpg" alt=""></a>
                                <div class="content4Part1Content4_2_1Links_page1">
                                    <a href="#" class="content4Part1Content4_2_1Link1_page1">О PLYDEX</a>
                                    <a href="#" class="content4Part1Content4_2_1Link2_page1">ДАВАЙТЕ ЗНАКОМИТЬСЯ!</a>
                                </div>
                            </div>
                            <div class="content4FirstSectionPart1Content4_2_2_page1">
                                <a href="#"><img src="/public/img/jpg/firstSection_page1/content4Part1Content4_2_2_page1.jpg" alt=""></a>
                                <a href="#" class="content4Part1Content4_2_2Link1_page1">НОВОСТИ</a>
                            </div>
                        </div>
                    </div>
                    <div class="content4FirstSectionPart2_page1">
                        <div class="content4FirstSectionPart2Title_page1">
                            <a href="" class="content4Part2ProductLink1_page1">ДВЕРИ И ОТКОСЫ</a>
                            <a href="" class="content4Part2ProductLink2_page1">ОТКОСЫ ДЛЯ ДВЕРНЫХ И ОКОННЫХ ПРОЕМОВ</a>
                        </div>
                        <div class="content4Part2ProductPicture_page1">
                            <a href="#"><img src="/public/img/jpg/firstSection_page1/content4Part2Product_page1.jpg" alt=""></a>
                        </div>
                    </div>
                </div>

                <div class="content5FirstSection_page1">
                    <div class="firstSectionContent5_1_page1">
                        <div class="content5Product1Title_page1">
                            <a href="#" class="content5Product1Link1_page1">ПОДОКОННИКИ И ОТКОСЫ</a>
                            <a href="#" class="content5Product1Link2_page1">ДЛЯ ОКОН</a>
                        </div>
                        <div class="content5Product1Picture">
                            <a href="#"><img src="/public/img/jpg/firstSection_page1/firstSectionContent5Pic7_page1.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="firstSectionContent5_2_page1">
                        <div class="content5Product2Picture">
                            <a href="#"><img src="/public/img/jpg/firstSection_page1/firstSectionContent5Pic8_page1.jpg" alt=""></a>
                        </div>
                        <div class="content5Product2Title_page1">
                            <a href="#" class="content5Product2Link1_page1">УФ ПЕЧАТЬ / ИЗГОТОВЛЕНИЕ</a>
                            <a href="#" class="content5Product2Link2_page1">ИЗГОТОВЛЕНИЕ И ПЕЧАТЬ РЕЛЬЕФНЫХ КАРТИН</a>
                        </div>
                    </div>
                    <div class="firstSectionContent5_3_page1">
                        <div class="content5Product3Title_page1">
                            <a href="#" class="content5Product3Link1_page1">ФАЛЬШ БАЛКИ</a>
                            <a href="#" class="content5Product3Link2_page1">ПРОФИЛЬ Г,П,О - ОБРАЗНЫЙ</a>
                        </div>
                        <div class="content5Product3Picture">
                            <a href="#"><img src="/public/img/jpg/firstSection_page1/firstSectionContent5Pic9_page1.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="content6FirstSection_page1">
                    <div class="content6FirstSectionPart1_page1">
                        <div class="content6FirstSectionPart1Content6_1">
                            <a href="#"><img src="/public/img/jpg/firstSection_page1/firstSectionContent6Part1Content6_1_part1.jpg" alt=""></a>
                            <div class="part1Content6_1Title_page1">
                                <div class="part1Content6_1Title1_page1">
                                    <a href="#">НАЙДИТЕ БЛИЖАЙШИЙ МАГАЗИН</a>
                                </div>
                            </div>
                        </div>
                        <div class="content6FirstSectionPart1Content6_2_page1">
                            <div class="content6FirstSectionPart1Content6_2_1_page1">
                                <a href="#"><img src="/public/img/jpg/firstSection_page1/content6Part1Content6_2_1_page1.jpg" alt=""></a>
                                <div class="content6Part1Content6_2_1Links_page1">
                                    <a href="#" class="content6Part1Content6_2_1Link1_page1">ЦВЕТА</a>
                                    <a href="#" class="content6Part1Content6_2_1Link2_page1">БОЛЕЕ 36 ЦВЕТОВ НА ВЫБОР</a>
                                </div>
                            </div>
                            <div class="content6FirstSectionPart1Content6_2_2_page1">
                                <a href="#"><img src="/public/img/jpg/firstSection_page1/content6Part1Content6_2_2_page1.jpg" alt=""></a>
                                <a href="#" class="content6Part1Content6_2_2Link1_page1">ВДОХНОВЕНИЕ</a>
                            </div>
                        </div>
                    </div>
                    <div class="content6FirstSectionPart2_page1">
                        <div class="content6FirstSectionPart2Title_page1">
                            <a href="" class="content6Part2ProductLink1_page1">ДЕКОРАТИВНЫЕ РЕЙКИ</a>
                        </div>
                        <div class="content6Part2ProductPicture_page1">
                            <a href="#"><img src="/public/img/jpg/firstSection_page1/content6Part2Product_page1.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
            @endforelse
    </section>
</main>

 