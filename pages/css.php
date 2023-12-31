<h2 class="pt-4 fs-4">
		CSS
	</h2>

	<p class="pt-4 fs-6">
        CSS означава "Cascading Style Sheets" (Каскадни стилови листове). Това е език за стилове, използван за описание на визуалната представяне на документ, написан на HTML или XML, като уеб страница. CSS се използва за контролиране на оформлението, форматирането и външния вид на уеб съдържание, като позволява на разработчиците да отделят структурата и съдържанието на уеб страница от нейния дизайн и стилизация.

	</p>

	<p class="pt-4 fs-4">	
        Ето какво прави CSS:
	</p>	

	<div class="row fs-6">
		<div class="col-6">
			<p>
				<ul>
					<li>
                    Стилизация: CSS ви позволява да дефинирате как трябва да изглеждат елементите на уеб страницата. Можете да задавате свойства като цветове, шрифтове, отстъпи, падинг, граници и други.					</li>	

					<li class="mt-2">
                    Оформление: CSS ви помага да контролирате позиционирането и подреждането на елементите на страницата. Можете да контролирате размера, разположението и подравняването на различни елементи.					</li>

					<li class="mt-2"> 
                    Адаптивен дизайн: CSS позволява създаването на адаптивни дизайни, които се приспособяват към различни размери на екрана и устройства. Това е важно за предоставянето на последователен потребителски опит на устройства като настолни компютри, таблети и смартфони.					</li>               
				</ul>	 
			</p>     
		</div>

		<div class="col-6">
			<p>
				<ul>
					<li>
                    Анимации и преходи: CSS поддържа анимации и преходи, които ви позволяват да добавите интерактивни и визуално привлекателни ефекти на елементите на страницата.					</li>

					<li class="mt-2">
                    Типография: CSS ви позволява да контролирате типографията на съдържанието си, включително избора на шрифтове, размери, междуредово разстояние и други.

					</li>
					
					<li class="mt-2"> 
                    Гъвкавост: CSS предлага широка гама от селектори и правила, които ви позволяват да насочвате конкретни елементи, класове, идентификатори или дори конкретни състояния (като плъзгане на мишката над елемент) за прилагане на различни стилове.

					</li>   
				</ul>	
			</p>     
		</div>
	</div>	
	
	<p class="pt-4 fs-6">
    Общо взето, CSS играе важна роля в подобряването на визуалната привлекателност и потребителския опит на уеб съдържанието, като позволява на разработчиците да контролират как елементите се показват на уеб страница	
    </p>

    <p class="codepen" data-height="300" data-theme-id="dark" data-default-tab="html,result" data-slug-hash="MWzNpNR" data-editable="true" data-user="obama-max" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  	<span>See the Pen <a href="https://codepen.io/obama-max/pen/MWzNpNR">
  	css</a> by Darius Popov (<a href="https://codepen.io/obama-max">@obama-max</a>)
  	on <a href="https://codepen.io">CodePen</a>.</span>
	</p>

	<p class="pt-4 fs-6">
		В CSS, мерните единици и работата с изображения и медия са важни аспекти, които се използват за определяне на размери, 	позициониране и стилове на елементи на уеб страницата, както и за адаптиране на дизайна спрямо различни устройства и 	екрани. Ето обяснение на тези концепции:
	</p>

	<p class="pt-4 fs-6">
	Мерни Единици (Units of Measurement): <br>
	Мерните единици в CSS се използват за дефиниране на размери, разтояния и други стойности във стиловете на уеб страницата. </p>
	<p class="pt-4 fs-6">
	Най-често използваните мерни единици в CSS включват: <br>

	<ul class="pt-2 fs-6">
		<li>	
			Пиксели (px): Фиксирана мерна единица, която представлява един пиксел на екрана. Например, width: 200px; означава ширина от 200 	пиксела.
		</li>

		<li>
		Проценти (%): Относителна мерна единица, която се базира на размера на родителския елемент. Например, width: 50%; означава 	половината ширина на родителския елемент.
		</li>

		<li>
			EM и REM: Относителни мерни единици, които се използват за размери на шрифтове и разстояния. 1em е равен на текущия размер на 	шрифта, а 1rem е равен на размера на шрифта на кореновия елемент (HTML).
		</li>

		<li>
			Вюпорти (Viewport) Мерни Единици: Като vw (1/100 от ширината на вюпорта) и vh (1/100 от височината на вюпорта), които се 	използват за реагиране на размерите на екрана.
		</li>
	</ul>	
	</p>

	<p class="col-12 text-center fs-4 my-3">Какво е медията в CSS?</p>

	<div class="col-12 row my-3">
    <div class="col-6">
    <ul class="col-12">
        <li class="pt-4 fs-6 col-12">   
			Изображения в CSS: <br>
			Изображения могат да се използват като фонове за HTML елементи с помощта на свойството background-image.
			Можете да контролирате повторението на изображението със свойства като background-repeat и background-size.
        </li>

        <li class="pt-4 fs-6 col-12">   
			Адаптивни Изображения: <br>
			За създаване на адаптивни изображения, които се приспособяват към различни размери на екрана, използвайте CSS 	медийни 		запитвания.
			Използвайте правило max-width: 100%; за елементите <img>, за да предотвратите излишното им разширение извън контейнера.
        </li>

        <li class="pt-4 fs-6 col-12">   
			Формати на Изображения: <br>
			Избирайте подходящи формати на изображения (JPEG, PNG, GIF, SVG) в зависимост от типа на съдържанието и желаното 	качество.
        </li>

        <li class="pt-4 fs-6 col-12">   
			Дисплеи Retina: <br>
			Разгледайте възможността да използвате високорезолюционни изображения (2x или 3x) за дисплеи Retina, като използвате 	CSS 		медийни запитвания.
        </li>

        <li class="pt-4 fs-6 col-12">   
			Аудио и Видео: <br>
			HTML5 предоставя елементите <audio> и <video> за вграждане на аудио и видео съдържание.
			Използвайте атрибута controls, за да добавите контроли (пускане, пауза, звук) към мултимедийните елементи.
        </li>

        <li class="pt-4 fs-6 col-12">   
			остъпност: <br>
			Предоставяйте алтернативен текст (атрибут alt) за изображенията, за да направите съдържанието достъпно за потребители 	с 		увреждания.
			Уверете се, че видео и аудио съдържанието е подписано или транскрибирано, за да бъде достъпно.
        </li>
        
        </div>
    
    <div class="col-6">
    <li class="pt-4 fs-6 col-12">   
		Елементи на Формуляри: <br>
		Персонализирайте външния вид на елементите на формулярите (input, button) с CSS, за да създадете съгласувани дизайни.
    </li>

    <li class="pt-4 fs-6 12">   
		Стилизиране на Връзки: <br>
		Стилизирайте връзките с CSS свойства като color, text-decoration и псевдо-класове като :hover и :visited.
    </li>

    <li class="pt-4 fs-6 col-12">   
		Съвместимост с Браузъри: <br>
		Бъдете информирани относно проблемите със съвместимостта на браузъра и използвайте техники за проверка или полифили, когато 	е необходимо.
    </li>
    
    <li class="pt-4 fs-6 col-12">   
		Медийни Запитвания (Media Queries): <br>
		Използвайте медийни запитвания, за да прилагате специфични стилове на CSS, в зависимост от характеристиките на устройството 	или екрана, като ширина или ориентация.
    </li>
    
    <li class="pt-4 fs-6 col-12">   
		Адаптивен Дизайн: <br>
		Създавайте адаптивни дизайни, които се приспособяват към различни размери на екрана и устройства, подобрявайки потребителския опит.
    </li>

    <li class="pt-4 fs-6 col-12">   
		Тестване и Дебъгване: <br>
		Тествайте медийните елементи и адаптивните дизайни в различни браузъри и на различни устройства.
		Използвайте инструментите за разработчици на браузъра, за да инспектирате и дебъгнете CSS и HTML.
    </li>

	<li class="pt-4 fs-6 col-12">   
		Задачи за Производителност: <br>
		Оптимизирайте изображения и мултимедийни файлове за уеб, за да подобрите времето за зареждане на страницата.
		Използвайте подходящи техники за компресия на изображенията и формати.
    </li>
    </ul>
    </div>
</div>

<p class="pt-4 fs-6">
	Мерните единици и медията в CSS са инструменти, които уеб разработчиците използват, за да създадат дизайни, които са не само 	визуално привлекателни, но и функционални и адаптивни към различни устройства и екрани. Разбирането и правилната употреба на 	тези концепции е от съществено значение за успешната разработка на уебсайтове, които предоставят отличен потребителски опит на 	различни устройства и сценарии.
</p>