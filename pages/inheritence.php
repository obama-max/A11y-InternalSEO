    <h1 class="pt-4 fs-3 d-flex justify-content-center" tabindex="0">
		Cascade, спецификации и наследяване:
	</h1>
	
    <p class="fs-6" tabindex="0">
        На някой етап, ще работите по проект и ще откриете, че CSS стиловете, които сте си представяли да се прилагат към един елемент, не функционират правилно. Често проблемът се дължи на факта, че сте създали две правила, които прилагат различни стойности на едно и също свойство към същия елемент. Каскадът и понятието за специфичност са механизми, които контролират кои правила да се прилагат, когато възникне такъв конфликт. Правилото, което стилизира вашия елемент, може да не бъде това, което очаквате, затова е важно да разберете как работят тези механизми.Също така значимо е понятието на наследяване, което означава, че някои CSS свойства по подразбиране наследяват стойностите, зададени на родителския елемент на текущия елемент, а други не. Това също може да доведе до непредвидимо поведение.
    </p>

    <p class="fs-4">
        Cascade
    </p>

    <p class="fs-6 mt-2" tabindex="0">
        Стиловете се каскадират — на много просто ниво това означава, че произходът, каскадния слой и редът на CSS правилата имат значение. Когато две правила от същия каскаден слой се прилагат и имената им имат еднаква специфичност, това, което е дефинирано последно в стиловете, е това, което ще се използва.
    </p>

    <p class="codepen" data-height="300" data-default-tab="html,result" data-slug-hash="VwqWvdp" data-editable="true" data-user="Boyan-Metodiev" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
    <span>See the Pen <a href="https://codepen.io/Boyan-Metodiev/pen/VwqWvdp">
    Untitled</a> by Boyan Metodiev (<a href="https://codepen.io/Boyan-Metodiev">@Boyan-Metodiev</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>

    </p>

    <p class="fs-6 mt-2">
        Както се вижда в горния пример имаме две правила, които могат да се приложат към елемента &lth1>. Съдържанието на &lth1> станасиньо. Това се дължи на факта, че и двете правила са от същия източник, имат идентичен селектор за елемент и следователно иматедна и съща специфичност, но последното написано в кода печели.
    </p>

    <p class="fs-4 mt-2">
        Специфичност
    </p>

    <p class="fs-6 mt-2">
        Специфичността е алгоритъмът, който браузърът използва, за да реши коя стойност на свойство се прилага към един елемент. Ако множество стилови блокове имат различни селектори, които конфигурират едно и също свойство с различни стойности и се насочват към същия елемент, специфичността решава коя стойност на свойството ще се приложи към елемента. Специфичността е основно измерение за това колко специфичен избор извършва селекторът. Ето и пример:
    </p>

    <p class="codepen" data-height="300" data-default-tab="html,result" data-slug-hash="bGORVQm" data-editable="true" data-user="Boyan-Metodiev" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
    <span>See the Pen <a href="https://codepen.io/Boyan-Metodiev/pen/bGORVQm">
    Untitled</a> by Boyan Metodiev (<a href="https://codepen.io/Boyan-Metodiev">@Boyan-Metodiev</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
    
    <p class="fs-6 mt-3">
        Пак имаме две правила, които могат да се приложат към елемента &lth1>. Съдържанието на &lth1> по-долу се оцветява в червено, защото селекторът с клас main-heading придава по-висока специфичност на своето правило. И така, въпреки че правилото със селектора за &lth1> елемента се появява по-надолу в източника, правилото с по-голяма специфичност, дефинирана с помощта на селектора за клас, ще бъде приложено.
    </p>

    <p class="fs-4 mt-3">
        Наследяване
    </p>

    <p class="fs-6 mt-2">
        някои стойности на CSS свойствата, зададени на родителски елементи, се наследяват от техните деца, а други не. Например, ако зададете цвят и шрифт на един елемент, всеки елемент вътре в него също ще бъде стилизиран с този цвят и шрифт, освен ако не сте приложили различни стойности за цвета и шрифта директно към тях.
    </p>

    <p class="fs-6 mt-2">
        В примера по-долу имаме елемент &ltul> с две нива на вкарани неподредени списъци. За външния &ltul> сме задали граници, отстъп и цвят на шрифта. Свойството за цвят е наследено свойство. Следователно стойността на свойството за цвят се прилага както към директните деца, така и към непосредствените деца (&ltli>) и към тези в първия вкаран списък. След това добавихме класа special на втория вкаран списък и приложихме различен цвят към него. Този цвят се наследява и от неговите деца.
    </p>

    <p class="codepen" data-height="300" data-default-tab="html,result" data-slug-hash="ZEVyQGG" data-editable="true" data-user="Boyan-Metodiev" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
    <span>See the Pen <a href="https://codepen.io/Boyan-Metodiev/pen/ZEVyQGG">
    Untitled</a> by Boyan Metodiev (<a href="https://codepen.io/Boyan-Metodiev">@Boyan-Metodiev</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>

    <p class="fs-6 mt-2">
        Свойства като ширина, отстъп, падинг и граница не се наследяват. Ако границата беше наследена от децата в този пример със списъците, всеки списък и елемент на списъка биха имали граница — вероятно не би бил ефект, който искаме да постигнем!
    </p>

    <p class="fs-6 mt-2">
        CSS предоставя пет специални универсални стойности за управление на наследяването. Всяко CSS свойство приема тези стойности:
    </p>

    <div class="row">
        <div class="col-12">
            <ul>
                <li class="fs-6">
                    <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/inherit" rel="noreferrer">
                        inherit
                    </a> - Задава стойността на свойството, приложена към избрания елемент, да бъде същата като тази на неговия родителски елемент. Ефективно това "включва наследяването".
                </li>

                <li class="fs-6 mt-2">
                    <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/initial" rel="noreferrer">
                        initial
                    </a> - Задава стойността на свойството, приложена към избрания елемент, да бъде началната стойност на това свойство.
                </li>

                <li class="fs-6 mt-2">
                    <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/revert" rel="noreferrer">
                        revert
                    </a> - Нулира стойността на свойството, приложена към избрания елемент, към стиловете по подразбиране на браузъра, а не към стойностите по подразбиране, приложени към това свойство. Тази стойност действа подобно на "unset" в много случаи.
                </li>

                <li class="fs-6 mt-2">
                    <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/revert-layer" rel="noreferrer">
                        revert-layer
                    </a> - Нулира стойността на свойството, приложена към избрания елемент, до стойността, установена в предишен каскаден слой.
                </li>

                <li class="fs-6 mt-2">
                    <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/unset" rel="noreferrer">
                        unset
                    </a> - 
                </li>
            </ul>
        </div>
    </div>

    <p class="fs-4 mt-2">
        Ето и пример:
    </p>
    
    <p class="codepen" data-height="300" data-default-tab="html,result" data-slug-hash="VwqWeQd" data-editable="true" data-user="Boyan-Metodiev" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
    <span>See the Pen <a href="https://codepen.io/Boyan-Metodiev/pen/VwqWeQd">
    Untitled</a> by Boyan Metodiev (<a href="https://codepen.io/Boyan-Metodiev">@Boyan-Metodiev</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>

    <p class="fs-3 mt-5">
        !important
    </p>

    <p class="fs-6 mt-2">
        Има специално CSS правило, което можете да използвате, за да отмените всички горепосочени изчисления, включително инлайн стилове - флагът !important. Все пак, трябва да бъдете много внимателни, когато го използвате. Този флаг се използва, за да направи индивидуална двойка свойство и стойност най-специфичното правило, презаписвайки така нормалните правила на каскадата, включително нормалните инлайн стилове. 
    </p>

    <p class="fs-6">
        <span class="fw-bold fs-5">Забележка:</span> Полезно е да знаете, че флагът !important съществува, така че да разберете какво представлява, когато го срещнете в код на други хора. Въпреки това настоятелно препоръчваме да го използвате само ако наистина е необходимо. Флагът !important променя начина, по който нормално работи каскадата, и може да затрудни отстраняването на проблеми с CSS, особено в големи стилови файлове.
    </p>

    <p class="fs-4 mt-2">
        Ето и пример за използването му:
    </p>

    <p class="codepen" data-height="300" data-default-tab="html,result" data-slug-hash="NWegxmG" data-editable="true" data-user="Boyan-Metodiev" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
    <span>See the Pen <a href="https://codepen.io/Boyan-Metodiev/pen/NWegxmG">
    Untitled</a> by Boyan Metodiev (<a href="https://codepen.io/Boyan-Metodiev">@Boyan-Metodiev</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>

    <p class="fs-4 mt-4">
        Cascade слоеве
    </p>

    <p class="fs-6 mt-2">
        Когато декларирате CSS в каскадни слоеве, редът на приоритет определя реда, в който слоевете се декларират. Стиловете на CSS, декларирани извън слой, се комбинират заедно,  в неименуван слой, като че ли той е последният деклариран слой. При конфликтни стилове, последните слоеве имат приоритет пред по-рано декларираните слоеве. За стилове, маркирани с !important, обаче редът се обърква, като важните стилове в по-ранни слоеве имат приоритет пред важни стилове, декларирани в последващи слоеве или извън всеки слой. Инлайн стиловете имат приоритет пред всички авторски стилове, независимо от слоя.
        Когато имате множество блокове със стилове в различни слоеве, предоставящи съперни стойности за свойство на един елемент, редът, в който се декларират слоевете, определя приоритета. Специфичността между слоевете не е важна, но специфичността в рамките на един слой все пак има значение.
    </p>

    <p class="codepen" data-height="300" data-default-tab="html,result" data-slug-hash="VwqWaNL" data-editable="true" data-user="Boyan-Metodiev" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
    <span>See the Pen <a href="https://codepen.io/Boyan-Metodiev/pen/VwqWaNL">
    Untitled</a> by Boyan Metodiev (<a href="https://codepen.io/Boyan-Metodiev">@Boyan-Metodiev</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>

    <p class="fs-6 mt-3">
        В горния пример са декларирани два слоя, firstLayer и secondLayer, в този ред. Въпреки че специфичността във втория слой е най-висока, няма свойства от тази декларация, които да бъдат използвани. Защо? Защото нормалните стилове извън слоевете винаги имат приоритет пред нормалните стилове в слоеве, независимо от специфичността, и важните стилове в слоеве имат приоритет пред важните стилове, декларирани в по-късни слоеве, отново независимо от специфичността. Ако промените първия ред на CSS в този пример, за да изглежда така: <br>
        <span style="background-color: #131314; padding:3px; border-radius: 3px; margin-right:3px;">
            <span style="color:#5863cc; font-weight:600;">
                @layer
            </span>

            <span style="color:#b89c51; font-weight:600;">
                secondLayer
            </span> 

            <span style="color:white; font-weight:600;">
                , 
            </span>

            <span style="color:#b89c51; font-weight:600;">
                firstLayer
            </span> 

            <span style="color:white; font-weight:600;">
                ; 
            </span>
        </span> ще промените реда на декларация на слоевете и всички важни стилове от firstLayer ще бъдат заменени със съответните им стойности от secondLayer.
    </p>

    <p class="fs-4 mt-3">
        Особености и специални правила:
    </p>

    <p class="fs-6 mt-2 mb-3">
        Често ще се сблъскате със ситуация, при която знаете, че едно правило е декларирано по-късно в стиловия файл, но по-ранното, конфликтно правило се прилага. Това се случва, защото по-ранното правило има по-висока специфичност — то е по-специфично и, следователно, браузърът го избира като това, което трябва да стилизира елемента. Както видяхме по-рано в този урок, селекторът с клас има по-голяма тежест от селектора за елемент, така че свойствата, дефинирани в блока за стил с клас, ще заменят тези, дефинирани в блока за стил с елемент. Важно е да се отбележи, че въпреки че разглеждаме селектори и правилата, които се прилагат към текста или компонента, който те избират, не се заменя цялото правило, а само свойствата, декларирани на няколко места. Това поведение помага да се избегне повторение в CSS. Обичайната практика е да се дефинират общи стилове за основните елементи и след това да се създадат класове за тези, които са различни. Например, в стиловия файл по-долу сме дефинирали общи стилове за заглавия от второ ниво, а след това сме създали някои класове, които променят само някои от свойствата и стойностите. Стойностите, дефинирани първоначално, се прилагат за всички заглавия, след което по-специфичните стойности се прилагат за заглавията с класове.
    </p>

    <p class="codepen" data-height="300" data-default-tab="html,result" data-slug-hash="RwEgRgp" data-editable="true" data-user="Boyan-Metodiev" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
    <span>See the Pen <a href="https://codepen.io/Boyan-Metodiev/pen/RwEgRgp">
    Untitled</a> by Boyan Metodiev (<a href="https://codepen.io/Boyan-Metodiev">@Boyan-Metodiev</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>

    <p class="fs-4 mt-5">
        Следната таблица представя няколко изолирани примера, за да ви въведе в джаза със спецификациите:
    </p>

    <div class="mt-2 d-flex justify-content-center">
        <img src="./assets/images/specificity.png" alt="Снимка показваща спецификацията на различните селектори." width="100%" height="100%" class="specificity-table">
    </div>

    <p class="fs-4 mt-4 mb-2">
        И последно пример, в който се показва как работи спецификацията:
    </p>

    <p class="codepen" data-height="300" data-default-tab="html,result" data-slug-hash="ZEVyOrN" data-editable="true" data-user="Boyan-Metodiev" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
    <span>See the Pen <a href="https://codepen.io/Boyan-Metodiev/pen/ZEVyOrN">
    Untitled</a> by Boyan Metodiev (<a href="https://codepen.io/Boyan-Metodiev">@Boyan-Metodiev</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>

    <p class="fs-5 mt-4">
        И така, какво се случва тук? Първо, ние се интересуваме само от първите седем правила в този пример, и както ще забележите, включили сме техните стойности на специфичност в коментар пред всяко едно от тях.
    </p>

    <div class="row">
        <div class="col-12">
            <ul>
                <li class="fs-6">
                    Първите два селектора конкурират за стилизирането на цвета на фона на връзката. Вторият печели и прави цвета на фона син, защото има допълнителен селектор с ID в веригата: неговата специфичност е 2-0-1 срещу 1-0-1.
                </li>

                <li class="fs-6 mt-2">
                    Селектори 3 и 4 се състезават за стилизирането на цвета на текста на връзката. Вторият печели и прави текста бял, защото въпреки че има един по-малко селектор за елемент, липсващият селектор е заменен с класов селектор, който има по-голяма тежест от безброй селектори за елементи. Специфичността на печелившия е 1-1-3 срещу 1-0-4.
                </li>

                <li class="fs-6 mt-2">
                    Селектори 5–7 се конкурират за стилизирането на границата на връзката при ховър. Селектор 6 явно загубва срещу селектор 5 със специфичност от 0-2-3 срещу 0-2-4; има един по-малко селектор за елемент в веригата. Селектор 7, обаче, побеждава и селекторите 5 и 6, защото има същия брой подселектори в веригата като селектор 5, но елемент е заменен с класов селектор. И така, специфичността на печелившия е 0-3-3 срещу 0-2-3 и 0-2-4.
                </li>
            </ul>
        </div>
    </div>