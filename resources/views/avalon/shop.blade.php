@extends('layouts.design')
@section('content')

<div class="page_wrapper">
    <div class="container">
        <div class="section_offset">
            <div class="row">
                <!-- - - - - - - - - - - - - - Page Wrapper - - - - - - - - - - - - - - - - -->
                <div class="secondary_page_wrapper">
                    <div class="container">
                        <!-- - - - - - - - - - - - - - Breadcrumbs - - - - - - - - - - - - - - - - -->
                        <ul class="breadcrumbs">
                            <li><a href="{{ route('index') }}">Начало</a></li>
                            <li>Магазин Горна Оряховица</li>
                        </ul>
                        <div class="row">
                            <aside class="col-md-3 col-sm-4">
                                <!-- - - - - - - - - - - - - - Information - - - - - - - - - - - - - - - - -->
                                <section class="section_offset">
                                    <h3>Информация</h3>
                                    <ul class="theme_menu">
                                        <li><a href="{{ route('for_us') }}">За нас</a></li>
                                        <li><a href="{{ route('contact') }}">За контакт</a></li>
                                        <li class="current"><a href="{{ route('avalon.shop') }}">Магазин Горна Оряховица</a></li>
                                        <li><a href="{{ route('avalon.service') }}">Компютърен сервиз</a></li>
                                        <li><a href="{{ route('avalon.service-printeri') }}">Сервиз принтери</a></li>
                                        <li><a href="{{ route('avalon.mrezi') }}">Компютърни мрежи</a></li>
                                        <li><a href="{{ route('news.all') }}">Новини</a></li>
                                        <li><a href="{{ route('faqs.all') }}">Често задавани въпроси</a>
                                        <li><a href="{{ route('terms') }}">Общи условия</a></li>
                                        <li><a href="{{ route('politika') }}">Политика на поверителност</a></li>
                                        <li><a href="{{ route('gdpr') }}">Инструкция за обработка на лични данни</a>
                                        </li>
                                        <li><a href="{{ route('dostavka') }}">Доставка и плащане</a></li>
                                        <li><a href="{{ route('vrashtane') }}">Връщане на продукт</a></li>
                                    </ul>
                                </section>
                                <!--/ .section_offset -->
                                <!-- - - - - - - - - - - - - - End of information - - - - - - - - - - - - - - - - -->
                                <!-- - - - - - - - - - - - - - Banner - - - - - - - - - - - - - - - - -->
                                <div class="section_offset">
                                    <a href="{{ route('product', ['id' => 'max-cmr']) }}" class="banner">
                                        <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" 
                                        data-src="/images/cmr.png" alt="">
                                    </a>
                                </div>
                                <!-- - - - - - - - - - - - - - End of banner - - - - - - - - - - - - - - - - -->
                                <!-- - - - - - - - - - - - - - Testimonials - - - - - - - - - - - - - - - - -->
                                <section class="section_offset">
                                    <h3 class="offset_title">Мнения за нас</h3>
                                    <!-- - - - - - - - - - - - - - Carousel of testimonials - - - - - - - - - - - - - - - - -->
                                    <div class="owl_carousel widgets_carousel">
                                        <blockquote>
                                            <div class="author_info"><b>Референтно писмо – АРКУС АД</b></div>
                                            <p>АРКУС АД изразява своето удовлетворение от услугите предлагани от Авалон
                                                ООД, гр. Лясковец и особено от възможността за директен контакт с екипа
                                                на дружеството. Коректността и лоялността към нас съчетани с качеството
                                                на предлаганите услуги, покриват нашите изисквания към партньорите ни.
                                                Смятаме и за в бъдеще да използваме предлаганите услуги от Авалон ООД.
                                            </p>
                                        </blockquote>
                                        <blockquote>
                                            <div class="author_info"><b>Референтно писмо - ЗАХАРНИ ЗАВОДИ АД</b></div>
                                            <p>Авалон ООД гр. Лясковец, ул Васил Левски 8Б е наш партньор в доставката
                                                на компютърни системи и технологии и техните консумативи. Преките ни
                                                впечатления от тяхната работа са в професионално отношение, коректно,
                                                точно и навременно изпълнение на доставките, което улеснява работата на
                                                целия екип. С настоящата референция представяме Авалон ООД на новите им
                                                партньори и им желаем ползотворно сътрудничество.</p>
                                        </blockquote>
                                        <blockquote>
                                            <div class="author_info"><b>Референтно писмо - Прити 95 ООД</b></div>
                                            <p>Ползваме услугите предлагани от Авалон ООД от началото на 2003 г. Доволни
                                                сме от техниката предлагана ни от Авалон ООД и особено от гаранционния и
                                                извънгаранционен сервиз осъществяван от техния екип. Досега сме
                                                закупували от Авалон ООД компютърна техника и периферни устройства.
                                                Добро впечатление ни прави възможността за директен контакт с екипа на
                                                фирмата, както и тяхната отзивчивост при възникнали проблеми. Коректни
                                                са към нас и засега покриват изискванията ни за качество на използваните
                                                от нас продукти и услуги.</p>
                                        </blockquote>
                                        <blockquote>
                                            <div class="author_info"><b>Референтно писмо - Складова техника АД</b></div>
                                            <p>С настоящето, аз, долуподписаният инж. ЮЛИАН ЦВЕТАНОВ ГЕЧЕВ, ЕГН
                                                6806101467, л.к №112555202м издадена на 19.02.2000г. от МВР Велико
                                                Търново, тел. : 60077. На длъжност Директор "Външна Търговия" при фирма
                                                "Складова Техника" АД декларирам, че фирма "Складова Техника" АД. Се
                                                намира в перфектни взаимоотношения с фирма "Авалон" ООД с адрес на
                                                управление в гр. Лясковец 5140, ул. "Васил Левски" № 8Б Досега фирма
                                                "Авалон" ООД е изградила компютърни мрежи в Управлението на фирма
                                                "Складова техника" АД и в Направление "Битова Техника" към "Складова
                                                Техника" АД. Предвижда се свързване между отделните направления на
                                                нашето Дружество. Поради проявявания изключителен професионализъм,
                                                перфектно качество и добри цени, то също така ще бъде изпълнено от фирма
                                                "Авалон" ООД. Фирма "Складова Техника" АД е закупила над двадесет броя
                                                нови компютърни конфигурации от фирма "Авалон" ООД. Също така и девет
                                                броя употребявани принтери и др. техника. Фирма "Авалон" ООД осигурява
                                                отличен сервиз и поддръжка на техниката, отстранява в много кратки
                                                срокове с голяма вещина каквито и да са възникнали проблеми. Изложеното
                                                по-горе е гаранция за продължаване и в бъдеще на успешната съвсместна
                                                дейност между фирма "Аскладова Техника" АД и фирма Авалон ООД.</p>
                                        </blockquote>
                                        <blockquote>
                                            <div class="author_info"><b>Референтно писмо - Каси Темпра Пак ООД</b></div>
                                            <p>Каси Темпра Пак ООД сме клиенти на фирма "Авалон" ООД от 2003г., когато
                                                сме закупили първата конфигурация от тях. Удовлетворени сме от
                                                качеството на предлаганата техника и преди всичко от професионалната
                                                консултация, която не предложиха, за да изберем техника, необходима за
                                                нашите нужди. Избрахме Авалон ООД заради коректността, професионализма и
                                                ангажираното отношение към нас.</p>
                                        </blockquote>
                                        <blockquote>
                                            <div class="author_info"><b>Референтно писмо - Винпром АД</b></div>
                                            <p>Винпром АД, град Велико Търново, издава настоящата референция на "Авалон"
                                                ООД, град Лясковец, регистрирано по ф.д.№486 / 2003 година на ВТОС, със
                                                седалище и адрес на управление гр. Лясковец, ул. "Васил Левски" №8.
                                                Фирмата се представлява от Илко Николов Иванов - управител. Регистрации
                                                : шифър по Булстат № 104605318, Данъчен № 10550002434, ТДД град Горна
                                                Оряховица. С "Авалон" ООД работим от месец май 2003 година. От тогава до
                                                сега "Винпром" АД купува компютърни системи и консумативи за тях само от
                                                "Авалон" ООД. Фирмата се наложи в нашия регион като изключително
                                                коректен доставчик в областта на компютърните системи и технологии.
                                                Дружеството е специализирано в изграждане и поддръжка на компютърни
                                                мрежи. "Авалон" ООД разполага със собствен магазин, сервизна база и
                                                квалифициран персонал. Към настоящия момент не сме предявявали абсолютно
                                                никакви претенции относно качеството на работа и коректността на фирма
                                                Авалон ООД.</p>
                                        </blockquote>
                                        <blockquote>
                                            <div class="author_info"><b>VT Services Ltd.</b></div>
                                            <p>We, VT Services Ltd., have used the services of Avalon Limited. Bulgarian
                                                registered company who is extremely capabe and apcialise in the various
                                                fields of computer technology. They have installed the office computer
                                                system for our company, plus website design. The equipment and products
                                                provided by Avalon Limited have performed excellently. They provide
                                                excellent after sales service together with ongoing help and support
                                                when needed. We would highly recomment Avalon Ltd to any company or
                                                organisation who require a first class service.</p>
                                        </blockquote>
                                        <blockquote>
                                            <div class="author_info"><b>Референтно писмо - Георгиев 2000 ЕООД</b></div>
                                            <p>От Георгиев 2000 ЕООД работим с фирма "Авалон" ООД от създаването на
                                                нашата организация. Фирмата е наш основен партньор при закупуване на
                                                персонални компютри, периферни устройства за тях и друга офис техника.
                                                Както и при закупуването на софтуер. Висококвалифицираните специалисти
                                                на фирмата са с богат опит и защитили професионалния си имидж.
                                                Консултациите предоставени ни от тях за изключително полезни и ценни за
                                                нас. Деловите отношения с "Авалон" ООД се основават на професионализъм,
                                                коректност и акуратност. Проявяват се от служителите на фирмата при
                                                изпълнение на поетите ангажименти към нас като клиенти. Показаните
                                                качества от експертите на фирмата ни позволяват да дадем висока оценка
                                                на услугите на фирмата и да ги препоръчаме като партньори. Даваме
                                                съгласието си настоящата референция да се използва от Авалон ООД като
                                                търговска препоръка пред нагови потенциални бизнес партьори с цел
                                                доказване на коректност и квалификация.</p>
                                        </blockquote>
                                        <blockquote>
                                            <div class="author_info"><b>Референтно писмо - Монилит-99</b></div>
                                            <p>От Монилит-99 ползваме услугите предлагани от фирма Авалон ООД гр.
                                                Лясковец от началото на 2003г. Доволни сме от техникара предлагана ни от
                                                Авалон и особено от гаранционния и извънгаранционен сервиз осъществяван
                                                от техния екип. Досега сме закупували от Авалон компютърна техника и
                                                периферни устройства. Добро впечатление ни прави възможността за
                                                директен контакт с екипа на фирмата, както и тяхната отзивчивост при
                                                възникнали проблеми. Коректни са към нас и засега покриват изискванията
                                                ни за качество на използваните от нас продукти и услуги.</p>
                                        </blockquote>
                                        <blockquote>
                                            <div class="author_info"><b>Референтно писмо - Булмекс</b></div>
                                            <p>От Булмекс удостоверяваме пред всички заинстересовани страни, че при
                                                всички случаи когато сме закупували компютърна техника и консумативи от
                                                "Авалон" ООД сме били обслужвани коректно и в срок. Не сме имали
                                                проблеми с качеството на продуктите. Изградили сме си мнението, че можем
                                                винаги да разчитаме на височкоквалифицираните им специалисти. Както и на
                                                добрата им организация във всички направления касаещи тяхната дейност.
                                                Настоящото писмо се издава в полза на Авалон ООД, за да послужи пред
                                                други заинтересовани организации.</p>
                                        </blockquote>
                                        <blockquote>
                                            <div class="author_info"><b>Референтно писмо - Еурокс Промарк Консултинг</b>
                                            </div>
                                            <p>С настоящата, ние от Еурокс Промарк Консултинг, удостоверяваме пред
                                                всички заинтересовани страни. В досегашните ни бизнес взаимоотношения с
                                                "Авалон" ООД сме констатирали единствено и само изключително съвестно и
                                                професионално изпълнение на поетите от тях ангажименти. Високо качество,
                                                както на предлаганите продукти, така и на извършваните от тх услуги. От
                                                впечатленията, които вече имаме, сме си изградили мнението, че фирмата
                                                разполага с висококвалифицирани специалисти. Много добра организация във
                                                всички направления касаещи тяхната дейност. Настоящата референция се
                                                издава в полза на Авалон ООД за да послужи пред други заинтересовани
                                                организации.</p>
                                        </blockquote>
                                        <blockquote>
                                            <div class="author_info"><b>Референтно писмо - Канак ЕООД</b></div>
                                            <p>Фирма Канак ЕООД ползва продукти и услуги предлагани от фирма Авалон ООД
                                                от началото на 2003г. Закупената компютърна техника и периферни
                                                устройства. Както и помощта при изграждането на локалната мрежа и
                                                Интернет връзката на територията на нашето предприятие са факти. Те
                                                определят Авалон ООД като надежден, отговорен и коректен партньор. На
                                                тях винаги може да се разчита и да се има доверие. Оценката на
                                                качествата, взаимоотношенията и съвместната ни работа ни позволява да
                                                изберем Авалон ООД като наш собствен доставчик и засега оставаме с
                                                намерението за по-успешна и ползотворна дейност в бъдеще.</p>
                                        </blockquote>
                                        <blockquote>
                                            <div class="author_info"><b>Референтно писмо - Медия 5100</b></div>
                                            <p>От Медия 5100 ползваме услугите на фирма Авалон ООД - гр. Лясковец от
                                                началото на 2003г. Досега сме купували от Авалон компютърна техника и
                                                периферни устройства. Доволни сме от техниката предлагана ни от Авалон,
                                                но особено ценен за нас е геранционният и извънгаранционен сервиз,
                                                осъществяван от техния екип. Изключително сме доволни от възможността за
                                                директен контакт с екипа на фирмата и най-вече от тяхната отзивчивост
                                                при възникнали проблеми. Коректни са към нас и засега покриват
                                                изискванията ни за качество на ползваните от нас продукти и услуги.
                                                Категорични сме, че и в бъдеще ще продължаваме да работим заедно. Затова
                                                смело ги препоръчваме и на други фирми, които в лицето на Авалон ООД ще
                                                намерят наистина сигурен и надежден партньор в бизнеса си.</p>
                                        </blockquote>
                                        <blockquote>
                                            <div class="author_info"><b>Референтно писмо - СОТ В. Търново ЕООД</b></div>
                                            <p>Партньорството между СОТ В. Търново ЕООД и Авалон ООД започна преди
                                                повече от 2 години. Отношенията между двете фирми са както служеби, така
                                                и приятелски. Изключително сме доволни от предлаганите стоки и услуги.
                                                Бързите отговори, реакции и перфектния сервиз, гарантират за бъдещите
                                                взаимоотношения между двете фирми! Фирма Авалон ООД покрива изцяло
                                                нуждите ни, свързани с техния бранш.</p>
                                        </blockquote>
                                        <blockquote>
                                            <div class="author_info"><b>Референтно писмо - МСМ ГАЗ</b></div>
                                            <p>Нашето Дружество, МСМ ГАЗ, се ползва от слугите на Авалон ООД в областта
                                                на поддръжката на компютърната ни техника, софтуера и web дизайна от
                                                самото и създаване в началото на 2003г. С колегите от фирмата
                                                поддържваме работни взаимоотношения и дълго преди създаването на Авалон
                                                ООД. Доволни сме от експедитивността и коректността в работата им. Почти
                                                цялата ни компютърна техника е закупена от Авалон ООД и чрез
                                                съдействието на нейните специалисти. Проектът и поддръжката на
                                                страницата на фирмата ни в Интернет е осъществен и се извършва изцяло от
                                                Авалон ООД. Имайки предвид дългогодишното ни успешно сътрудничество със
                                                специалистите от Авалон ООД, бихме препоръчвали техните услуги в
                                                областта на компютърните технологии и на други фирми.</p>
                                        </blockquote>
                                        <blockquote>
                                            <div class="author_info"><b>Референтно писмо - Полет 90</b></div>
                                            <p>ЕТ Полет 90 в качеството си на клиент на Авалон ООД гр. Лясковец издава
                                                настоящата референция в уверение на това, че те са наш лоялен и коректен
                                                партньор и доставчик. Нашите търговски взаимоотношения датират от 2004г.
                                                И от тогава досега всички наши заявки и запитвания са били навременно и
                                                правилно обработвани и доставяни. За времето през което те са наш
                                                доставчик не сме предявявали рекламации по отношение на доставените от
                                                тях услуги, консумативи и техника. Винаги са реагирали бързо и адекватно
                                                към нашите запитвания и проблеми. По наше мнение Авалон ООД е дружество
                                                с добра система на организация и изграден авторитет на българския пазар,
                                                което е също причина да ги изберем за наш партьор. Издаваме тази
                                                референция на Авалон ООД с цел тя да им послуци при контактите им с
                                                техни потенциални партньори.</p>
                                        </blockquote>
                                        <blockquote>
                                            <div class="author_info"><b>Референтно писмо - Грид</b></div>
                                            <p>С настоящата референция от Грид бихме желали да изразим своята висока
                                                оценка за осъществените съвсемстно с Авалон ООД проекти. За изработка и
                                                дизайн в сферата на информационните технологии. Професионализма на екипа
                                                на Авалон ООД е осонован с коректността, точността и отзивчивостта
                                                относно иновациите в бранша. Множество консултации предоставени от екипа
                                                работил по проектите допринесоха за създаването на функционалност,
                                                предлагаща съществени предимства на всички наши клиенти. Успешната
                                                съвместна работа с Авалон ООД ни дава основание да дадем висока оценка
                                                за качеството на обслужване и навременните срокове за изпълнение на
                                                задачите. Горещо препоръчваме Авалон ООД като компетентен, надежден и
                                                коректен бизнес партньор.</p>
                                        </blockquote>
                                        <blockquote>
                                            <div class="author_info"><b>Референтно писмо - Държавен резерв и
                                                    военновременни запаси</b></div>
                                            <p>С настоящето референтно писмо от Държавен резерв и военновременни запаси.
                                                Имаме удоволствието да изразим своето удовлетворение от фирма Авалон ООД
                                                като коректен и надежден партньор. Работата на екипа на фирмата се
                                                отличава с истински професионализъм и високо качество. Авалон ООД
                                                стриктно е изпълнявал своите задължения. Съобразявайки се с поетите към
                                                деловите си контрагенти ангажименти и извършване на уговорените услуги,
                                                с качество и в рамките на уфоворените срокове. В тази връзка
                                                препоръчваме Авалон ООД при изпълнението на дейности, свързани с
                                                доставката на висококачествени IT продъкти, консултации и решаване на
                                                проблеми на клиентите.</p>
                                        </blockquote>
                                        <blockquote>
                                            <div class="author_info"><b>Референтно писмо - Булгарконтрола</b></div>
                                            <p>Булгарконтрола ЕАД гр. Горна Оряховица ползва компютърни услуги и
                                                консумативи на Авалон ООД гр. Лясковец. Удовлетворени сме от лоялността
                                                и коректността към нас. Предлаганите услуги са качествени и най-важно
                                                своевременни. От поддръжката на компютърната техника и ползваните
                                                консумативи на фирмата сме много довлни. Лоялност, качество и
                                                своевременност са качества, които ценим. И за в бъдеще ще продължаваме
                                                да работим с тях.</p>
                                        </blockquote>
                                    </div>
                                    <!--/ .widgets_carousel-->
                                    <!-- - - - - - - - - - - - - - End of carousel of testimonials - - - - - - - - - - - - - - - - -->
                                    <footer class="bottom_box">
                                        <a href="{{ route('klienti') }}" class="button_grey middle_btn">Виж всички мнения</a>
                                    </footer>
                                </section>
                                <!--/ .section_offset.animated.transparent-->
                                <!-- - - - - - - - - - - - - - End of testimonials - - - - - - - - - - - - - - - - -->
                            </aside>
                            <!--/ [col]-->
                            <main class="col-md-9 col-sm-8">
                                <h1>Магазин гр. Горна Оряховица</h1>
                                <div class="theme_box clearfix">
                                    <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" 
                                    data-src="/images/shop.jpg" class="alignleft" width="310" alt="">
                                    <p>Магазин гр. Горна Оряховица работи вече повече от 10 години. Ние предлагаме на своите клиенти висок клас техника и професионална помощ при избора й.</p>
                                    <p>При нас можете да намерите всичко, от което имате нужда за вашият компютър:</p>
                                    <p>Нови компютри, Употребявани компютри, Асемблирани компютри, Принтери, Скенери, Мултифункц. устройства, Консумативи, Мишки, Клавиатури, Слушалки, Колони, Уеб камери, Дънни платки, Процесори, Вентилатори, Видео карти, Памет, Вентилатори, Десктоп програми, WEB софтуер, Поръчкови сайтове и програми, Антивирусни програми, Lenovo, Asus, Acer, HP, Samsung, Brother, Epson, Iiyama, LG, MSI, Logitech, A4Tech, Genius, Gigabyte, Asrock, Intel, Kaspersky, Microsoft, CAD, Maxtrade Software</p>
                                    <p><a href="{{ route('index') }}">Можете да закупите нашите продукти онлайн</a></p>
                                </div>
                                <!--/ .theme_box-->
                            </main>
                            <!--/ [col]-->
                            <!--/ [col]-->
                        </div>
                        <!--/ .row-->
                    </div>
                    <!--/ .container-->
                </div>
                <!--/ .page_wrapper-->
                <!-- - - - - - - - - - - - - - End Page Wrapper - - - - - - - - - - - - - - - - -->
            </div>
        </div>
    </div>
</div>

@endsection
