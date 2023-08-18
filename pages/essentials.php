<h1 class="pt-4 d-flex justify-content-center fs-4">
	Топ 10 най-ключови моменти в Достъпността:
</h1>

<h2 class="pt-4 fs-4">	
	Номер 10: Добре написан HTML код
</h2>   

<p class="pt-4 fs-5">
	Добре написаният семантичен HTML код играе ключова роля за постигане на уеб страници, които са лесни за разбиранекакто от браузърите, така и от хората. Тук са някои важни аспекти за един добре написан семантичен HTML код:
</p>

<div class="row">
	<div class="col-6">
		<ul>
			<li class="fs-6">
				Използване на семантични елементи: Вместо да използвате общи контейнерни елементи (като &lt;div&gt; и &lt;span&gt;), използвайте семантични елементи (като &lt;header&gt;, &lt;nav&gt;, &lt;main&gt;, &lt;article&gt;, &lt;section&gt;, &lt;footer&gt; и други), които по-добре описват съдържанието и смисъла на страницата.
			</li>
			
			<li class="mt-2 fs-6">
				Правилно влагане на елементи: Следвайте структурата на HTML документите и правилното влагане на елементите. Това прави кода по-четлив и улеснява разбирането на структурата на страницата.
			</li>
			
			<li class="mt-2 fs-6">
				Подходящи атрибути: Използвайте подходящите атрибути за всеки елемент, които ясно обясняват неговата роля и функционалност.
			</li>
			
			<li class="mt-2 fs-6">
				Описателни имена на класове и идентификатори: Когато давате имена на класове и идентификатори, използвайте описателни имена, които отразяват смисъла и функцията на този елемент или компонент.
			</li>
			
			<li class="fs-6">
				Коректни връзки: Използвайте &lt;a&gt; елемента за връзки и задайте подходящи атрибути като href за URL и title за описание на връзката.
			</li>
		</ul>
	</div>

	<div class="col-6">
		<ul>
			<li class="mt-2 fs-6">
				Правилно използване на заглавия: Използвайте таговете за заглавия (&lt;h1&gt;, &lt;h2&gt;, ..., &lt;h6&gt;) по смислен начин, за да подчертаете структурата на информацията на страницата. &lt;h1&gt; трябва да бъде основното заглавие на страницата, последвано от по-малки заглавия, които описват подсекции.
			</li>

			<li class="mt-2 fs-6">
				Правилното използване на списъци: Използвайте &lt;ul&gt; за неорганизирани списъци и &lt;ol&gt; за организирани списъци. Използвайте &lt;li&gt; за елементите в списъците.
				
			</li>
			
			<li class="mt-2 fs-6">
				Форми и полета за въвеждане на данни: Използвайте семантични тагове за форми (&lt;form&gt;, &lt;input&gt;, &lt;label&gt;, &lt;select&gt;, &lt;textarea&gt; и други) и настройте атрибутите им коректно за ясно определяне на входните полета и тяхната функционалност.
			</li>
			
			<li class="mt-2 fs-6">
				Коментари и документация: Добавете коментари към своя HTML код, за да обясните специфични секции, компоненти или функционалности. Това помага на другите разработчици да разберат кода по-лесно.
			</li>
			
			<li class="mt-2 fs-6">
				Валидност на HTML: Проверете дали вашият HTML код е валиден, като използвате валидатори за HTML. Това осигурява правилното използване на елементи и синтаксис.
			</li>
		</ul>
	</div>
</div>

<p class="fs-6">
	Следвайки тези принципи, вашият семантичен HTML код ще бъде по-разбираем, лесен за поддръжка и подобрен по отношение на достъпност и SEO оптимизация.
</p>

<p class="fs-6">
	Достъпност: Вградете семантични елементи, които подобряват достъпността на уеб страницата за хора с увреждания. Използвайте атрибути като alt за изображения и поддръжка на клавишни комбинации за интерактивни елементи.
</p>

<h2 class="pt-4 fs-4">	
	Номер 10: Използване на описания
</h2>

<p class="pt-4 fs-6">
	Описателният (`title`) и алтернативният текст (`alt`) са атрибути в HTML, които се използват за предоставяне на допълнителна информация за снимки и линкове. Тези атрибути са важни за улесняване на достъпността и подобряване на потребителския опит на хора, използващи помощни технологии или страдащи от увреждания.
</p>

<div class="row">
	<div class="col-6">
		<p class="fs-5">
			Алтернативен текст (`alt`) за снимки:
		</p>

		<ul>
			<li class="fs-6">
				Атрибутът `alt` се използва в елемента `&lt;img&gt;` за предоставяне на текстово описание на снимката.
			</li>

			<li class="fs-6 mt-2">
				Когато браузърът не може да зареди снимката или когато потребителят използва текстов браузър, `alt` текстът се показва вместо снимката.
			</li>

			<li class="fs-6 mt-2">
				`alt` текстът също така е изключително важен за достъпността, тъй като помага на хора със зрителни увреждания да разберат 	съдържанието на снимката. Това позволява на техните помощни устройства (като четци на екрани) да предоставят подходяща информация.
			</li>

			<li class="fs-6 mt-2">
			Когато дефинирате `alt` текст, бъдете сигурни, че описанието на снимката е ясно и информативно, без да бъде прекалено дълго.
			</li>
		</ul>


	</div>
	
	<div class="col-6">
		<p class="fs-5">
			Описание (`title`) за снимки и линкове:
		</p>

		<ul>
			<li class="fs-6 ">
				Атрибутът `title` се използва в елементите `&lt;img&gt;` и `&lt;a&gt;` за добавяне на допълнително описание на снимки и връзки.
			</li>

			<li class="fs-6 mt-2">
				Когато потребителят задържи курсора на мишката върху елемента, който има `title` атрибут, се показва подсказка със съдържанието на `title`.
			</li>

			<li class="fs-6 mt-2">
				Това може да бъде полезно за предоставяне на допълнителна информация за връзките или за подсказване на потребителите за съдържанието на снимките.
			</li>
		</ul>
	</div>
</div>

<div class="row">
	<div class="col-6">			
		<div class="bg-dark rounded mb-4">
			<div class="flex items-center relative text-gray-200 bg-gray-800 px-4 py-2 text-xs font-sans justify-between rounded-t-md">
				<span class="text-white fs-6">
					HTML
				</span>
			</div>

			<div class="p-3 bg-black rounded overflow-y-auto">
				<code class="m-0 fs-6">
					<span class="text-white">
						&lt;
						<span class="text-info">
							img
						</span>
						 <span style="color:#ffe69c;">
							src
						</span>
							=
						<span class="text-success">
							"image.jpg"
						</span>
						<span style="color:#ffe69c;">
							alt
						</span>
						=
						<span class="text-white">
							"Слон, който се къпе в река"
						</span>
						&gt;
					</span>
				</code>
			</div>
		</div>
	</div>

	<div class="col-6">
		<div class="bg-dark rounded mb-4">
			<div class="flex items-center relative text-gray-200 bg-gray-800 px-4 py-2 text-xs font-sans justify-between rounded-t-md">
				<span class="text-white fs-6">
					HTML
				</span>
			</div>

			<div class="p-3 bg-black rounded overflow-y-auto">
				<code class="m-0 fs-6">
					<span class="text-white">
						&lt;
						<span class="text-info">
							img
						</span>
						 <span style="color:#ffe69c;">
							src
						</span>
							=
						<span class="text-success">
							"image.jpg"
						</span>
						<span style="color:#ffe69c;">
							alt
						</span>
						=
						<span class="text-white">
							"Слон, който се къпе в река"
						</span>
						<span style="color:#ffe69c;">
							title
						</span>
						=
						<span class="text-white">
							"Снимка на слон, който се радва на къпане"
						</span>
						&gt;
					</span>

					<span class="text-white">
						&lt;
						<span class="text-info">
							a
						</span>
						<span style="color:#ffe69c;">
							href
						</span>
						=
						<span class="text-success">
							"https://example.com"
						</span>
						 <span style="color:#ffe69c;">
							title
						</span>
						=
						<span class="text-white">
							"Посетете нашия уебсайт"
						</span>
						&gt;
						</span>
						<span class="text-white">
							Нашата страница
						</span>
						<span class="text-white">
							&lt;/
							<span class="text-info">
								a
							</span>
							&gt;
					</span>
				</code>
			</div>
		</div>
	</div>
</div>

<p class="fs-6">
	Използването на `alt` и `title` атрибути е важен аспект от добра практика за уеб разработка, който помага за създаването на по-достъпни и полезни уеб страницы за всички потребители.
</p>


<h2 class="pt-4 fs-4">	
	Номер 10: Правилна подредба на код
</h2>

<p class="fs-5 pt-4">
	Правилната подредба на елементите на уебсайта е от съществено значение за създаването на добър потребителски опит и лесно навигиране. Тук са някои основни принципи за правилната подредба на елементите на сайта:
</p>

<div class="row">
	<div class="col-6">
		<ul>
			<li class="fs-6">
				Лесна навигация: Осигурете лесен и интуитивен начин за навигация през уебсайта. Поставете менюта, линкове и бутони за навигация на видни места, като ги подредите така, че потребителите да могат бързо да намерят това, което търсят.
			</li>
			
			<li class="fs-6 mt-2">
				Визуална йерархия: Използвайте различни размери на шрифтове, цветове, отстъпи и бордери, за да създадете визуална йерархия на информацията. Това помага на потребителите да разберат каква част от страницата е по-важна и как да проследват пътя на окото си.
			</li>
			
			<li class="fs-6 mt-2">
				Избягване на претоварване: Не претоварвайте страницата със съдържание и елементи. Подберете внимателно, кои елементи са наистина необходими и кои могат да бъдат изключени, за да поддържате страницата чиста и лесна за възприемане.
			</li>
		</ul>
	</div>

	<div class="col-6">
		<ul>
			<li class="fs-6">
				Респонсивен дизайн: Ако желаете уебсайтът ви да бъде достъпен и на мобилни устройства, уверете се, че подредбата на елементите се променя така, че да се адаптира към различните екрани и разделителни способности.
			</li>
			
			<li class="fs-6 mt-2">
				Тестване на потребители: Извършвайте тестове с реални потребители, за да оцените ефективността на подредбата на елементите. Това ви позволява да идентифицирате проблеми и да направите подобрения, за да създадете оптимален потребителски опит.
			</li>
			
			<li class="fs-6 mt-2">
				Внимание към скоростта на зареждане: Подредете елементите така, че страницата да зарежда бързо и ефективно. Оптимизирайте размера на изображенията и използвайте кеширане, за да намалите времето на зареждане.
			</li>
		</ul>
	</div>
</div>

<p class="fs-6">
	Следвайки тези принципи, можете да създадете уебсайт с добре подредени елементи, който е лесен за разбиране и навигиране, и предоставя отличен потребителски опит.
</p>


<div class="row">
	<div class="col-12 d-flex justify-content-center fs-6">
		<div class="bg-dark rounded mb-4 w-50">
			<div class="flex items-center relative text-gray-200 bg-gray-800 px-4 py-2 text-xs font-sans justify-between rounded-t-md">
				<span class="text-white fs-6">
					HTML
				</span>
			</div>
		
			<div class="p-3 bg-black rounded overflow-y-auto">
				<code class="m-0 fs-6">
					<span class="text-white">
						&lt;<span class="text-info">html</span> <span class="text-warning">lang</span>="<span class="text-success">en</span>"&gt;
						
					</span> <br>
						<span style="margin-left: 45px;" class="text-white">
							&lt;<span class="text-info">head</span>&gt; <br>
								<span style="margin-left: 80px;" class="text-white">
									&lt;<span class="text-info">meta</span> <span class="text-warning">charset</span>="<span class="text-success">UTF-8</span>"&gt;
								</span> <br>
								<span style="margin-left: 80px;" class="text-white">
									&lt;<span class="text-info">meta</span> <span class="text-warning">name</span>="<span class="text-success">viewport</span>" <span class="text-warning">content</span>="<span class="text-success">width=device-width</span>, <span class="text-warning">initial-scale</span>=<span class="text-success">1.0</span>"&gt;
								</span> <br>
								<span style="margin-left: 80px;" class="text-white">
									&lt;<span class="text-info">title</span>&gt;Пример за правилна подредба на елементи&lt;/<span class="text-info">title</span>&gt;
								</span><br>
							<span style="margin-left: 45px;">&lt;/<span class="text-info">head</span>&gt;</span>
						</span>
					</span><br> <br>
		
					<span class="text-white" style="margin-left: 45px;">
						&lt;<span class="text-info">body</span>&gt;
						  <span class="text-white"> <br>
							<span style="margin-left: 80px;">&lt;<span class="text-info">header</span>&gt;</span> <br>
								<span style="margin-left: 125px;" class="text-white">
									&lt;<span class="text-info">h1</span>&gt;Добре дошли на нашия уебсайт&lt;/<span class="text-info">h1</span>&gt;
								</span><br>
							<span style="margin-left: 80px;">&lt;/<span class="text-info">header</span>&gt;</span>
						  </span><br> <br>
		
						  <span class="text-white">
							<span style="margin-left: 80px;">&lt;<span class="text-info">nav</span>&gt</span> <br>
								<span style="margin-left: 125px;" class="text-white">&lt;<span class="text-info">a</span> <span class="text-warning">href</span>="<span class="text-success">#</span>">Начало&lt;/<span class="text-info">a</span>&gt;</span> <br>
								<span style="margin-left: 125px;" class="text-white">&lt;<span class="text-info">a</span> <span class="text-warning">href</span>="<span class="text-success">#</span>">За нас&lt;/<span class="text-info">a</span>&gt;</span> <br>
								<span style="margin-left: 125px;" class="text-white">&lt;<span class="text-info">a</span> <span class="text-warning">href</span>="<span class="text-success">#</span>">Услуги&lt;/<span class="text-info">a</span>&gt;</span> <br>
								<span style="margin-left: 125px;" class="text-white">&lt;<span class="text-info">a</span> <span class="text-warning">href</span>="<span class="text-success">#</span>">Контакти&lt;/<span class="text-info">a</span>&gt;</span><br>
							<span style="margin-left: 80px;">&lt;/<span class="text-info">nav</span>&gt;</span>
						  </span><br> <br>
		
						  <span class="text-white">
							<span style="margin-left: 80px;">&lt;<span class="text-info">main</span>&gt;</span><br>
								<span class="text-white">
									<span style="margin-left: 125px;">&lt;<span class="text-info">section</span>&gt;</span><br>
									  <span style="margin-left: 175px;" class="text-white">
										&lt;<span class="text-info">h2</span>&gt;За нас&lt;/<span class="text-info">h2</span>&gt;
									  </span><br>
		
									  <span style="margin-left: 175px;" class="text-white">
										&lt;<span class="text-info">p</span>&gt;Ние сме уеб разработчици, които създават креативни и функционални <span style="margin-left: 175px;">уебсайтове за нашите клиенти.&lt;/<span class="text-info">p</span>&gt;</span>
									  </span><br>
									<span style="margin-left: 125px;">&lt;/<span class="text-info">section</span>&gt;</span>
								</span><br> <br>
		
								<span class="text-white">
									<span style="margin-left: 125px;">&lt;<span class="text-info">section</span>&gt;</span><br>
									  <span style="margin-left: 175px;" class="text-white">
										&lt;<span class="text-info">h2</span>&gt;Услуги&lt;/<span class="text-info">h2</span>&gt;
									  </span><br> <br>
		
									  <span style="margin-left: 175px;" class="text-white">
										&lt;<span class="text-info">ul</span>&gt;<br>
											<span style="margin-left: 200px;" class="text-white">
												&lt;<span class="text-info">li</span>&gt;Уеб дизайн&lt;/<span class="text-info">li</span>&gt;
											</span><br>
		
											<span style="margin-left: 200px;" class="text-white">
												&lt;<span class="text-info">li</span>&gt;Уеб разработка&lt;/<span class="text-info">li</span>&gt;
											</span><br>
		
											<span style="margin-left: 200px;" class="text-white">
												&lt;<span class="text-info">li</span>&gt;SEO оптимизация&lt;/<span class="text-info">li</span>&gt;
											</span><br>
										<span style="margin-left: 175px;">&lt;/<span class="text-info">ul</span>&gt;</span>
									  </span><br>
									<span style="margin-left: 125px;">&lt;/<span class="text-info">section</span>&gt;</span>
								</span><br>
							<span style="margin-left: 80px;">&lt;/<span class="text-info">main</span>&gt;</span><br>
						  </span><br>
						  <span class="text-white">
							<span style="margin-left: 80px;">&lt;<span class="text-info">footer</span>&gt;</span><br>
								<span style="margin-left: 125px;" class="text-white">
									&lt;<span class="text-info">p</span>&gt;&copy; 2023 Нашият Уебсайт. Всички права запазени.&lt;/<span class="text-info">p</span>&gt;<br>
								</span>
							<span style="margin-left: 80px;">&lt;/<span class="text-info">footer</span>&gt;</span><br>
						  </span>
						<span style="margin-left: 45px;">&lt;/<span class="text-info">body</span>&gt;<br></span>
					</span>
					<span class="text-white">&lt;/<span class="text-info">html</span>&gt;<br></span>
				</code>
			</div>
		</div>
	</div>
</div>

<div class="row ">
	<div class="col-3 p-4 ">
		<div class="col-12 ">
			<img class="pb-4" src="./assets/images/SEO11.png" alt="">

			<p>Ние сме търговска компания, която се занимава с продажбата на различни видове електроинструменти, ръчни инструменти, други машини и консумативи.</p>
		</div>
	</div>

	<div class="col-9 ">
		<div class="col-12 p-4 ">
			<img src="./assets/images/CSS1.png" alt="">
		</div>

		<div class="row">
			<div class="col-4 p-4 ">
			<p>ИНФОРМАЦИЯ</p>

			<ul>
				<li>Рекламация</li>
				<li>Условия за доставка</li>
				<li>Купи на лизинг</li>
				<li>Удължаване на гаранцията</li>
				Производители
				<li>Правилник за използване на уеб сайта и Защита на личните данни</li>
			</ul>
			</div>

			<div class="col-4 p-4 ">
			<p>НАВИГАЦИЯ</p>

			 <ul>
				<li>Начало</li>
				<li>За нас</li>
				<li>Магазин</li>
				<li>Блог</li>
				<li>Контакти</li>
			 </ul>
			</div>

			<div class="col-4 p-4 ">
			<p>ПОСЛЕДНИ СТАТИИ</p>

			 <ul>
				<li>Видове бормашини и тяхното приложение</li>
				<li>Ремонт вкъщи: какви инструменти са ни необходими, за да ремонтираме сами?</li>
				<li>Безопасна работа и поддръжка на ръчни и преносими инструменти</li>
			 </ul>
			</div>
		</div>
	</div>
</div>