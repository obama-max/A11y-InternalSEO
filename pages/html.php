<h2 class="pt-4 fs-4">
Запознаване с HTML
</h2>

	<p class="pt-4 fs-6">
        В тази глава ще положим основите за вашето пътуване в света на HTML. Ще започнем с разгадаване на основите, разчистване на елементите, таговете и атрибутите, които образуват основите на HTML. Към края на тази глава, ще имате ясно разбиране какво е HTML и как функционира.    
    </p>

    <p class="fs-4">	
        Разбиране на HTML: Езикът на уеба    
    </p>

    <p class="pt-4 fs-6">
        HTML, или Hypertext Markup Language (Език за обозначаване на хипертекст), е основата на уеба. Това е език за обозначаване, който структурира съдържанието в интернет. Можете да си представите HTML като архитектурния чертеж на архитекта за уеб страница, който насочва браузъра как да покаже различни елементи като заглавия, параграфи, изображения, връзки и други.    
    </p>

    <p class="fs-4">	
        Елементи, Тагове и Атрибути: Разшифроване на Основите
    </p>

    <p class="pt-4 fs-6">
        HTML работи чрез система от елементи, тагове и атрибути. Елементите определят типа на съдържанието (като заглавия или параграфи), докато таговете са етикети, които обграждат тези елементи и им придават значение. Атрибутите предоставят допълнителна информация за елемент, влияещи на поведението или визуалния му вид.
    </p>

    <p class="fs-4">	
        Анатомия на HTML Елемент: По-подробен Преглед
    </p>

    <p class="pt-4 fs-6">
        Да разгледаме анатомията на HTML елемент: &lt;тагово_име атрибут="стойност"&gt;	съдържание&lt;/тагово_име&gt;. Тук отварящите &lt;тагово_име&gt; и затварящите &lt;/тагово_име&gt; тагове обграждат съдържанието. Атрибутите, като атрибут="стойност", модифицират поведението на елемента. Например, тагът &lt;img&gt; показва изображение, а атрибутът src определя източника на изображението.
    </p>

    <p class="fs-4">	
        Практическо Прилагане: Писане на Вашия Първи HTML
    </p>

    <p class="pt-4 fs-6">
        Да почваме практически! Отворете предпочитания от вас текстов редактор и създайте нов файл с разширение HTML. Започнете с основната структура, която обсъдихме:  &lt;!DOCTYPE html>,  &lt;html>,  &lt;head> и  &lt;body>. Експериментирайте, като добавяте елементи като заглавия и параграфи вътре в секцията  &lt;body>. Запазете файла с разширение .html и го отворете в уеб браузър, за да видите вашето творение.
    </p>

    
    <p class="fs-4">	
        Eдин прост пример на HTML документ, който включва някои от основните елементи:
    </p>

    <p class="codepen" data-height="300" data-theme-id="dark" data-default-tab="html,result" data-slug-hash="eYbORyv" data-editable="true" data-user="obama-max" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
    <span>See the Pen <a href="https://codepen.io/obama-max/pen/eYbORyv">
    Example first site with HTML</a> by Darius Popov (<a href="https://codepen.io/obama-max">@obama-max</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>


	<div class="row fs-6">
		<div class="col-12">
			<p>
				<ul>
					<li>
                        &lt;!DOCTYPE html> - Това е декларацията за типа на документа и показва, че сте започнали HTML5 документ.
                    </li>	

					<li class="mt-2">
                        &lt;html lang="bg"> - Този таг задава начин на кодиране на документа (в случая - български) и началото на HTML документа.
                    </li>

                    <li class="mt-2">
                        &lt;head> - Секцията, където се поставят метаданни за документа. Включва заглавието на страницата и настройки за символно кодиране и визуализация.
                    </li>

                    <li class="mt-2">
                        &lt;meta charset="UTF-8"> - Този таг задава Unicode символно кодиране, което позволява използването на символи от различни езици.
                    </li>

                    <li class="mt-2">
                        &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"> - Този таг се използва за оптимизиране на уеб страницата за мобилни устройства.
                    </li>

                    <li class="mt-2">
                        &lt;title>Пример на HTML &lt;/title> - Този таг задава заглавието на страницата, което се изобразява в заглавната част на браузъра.
                    </li>

                    <li class="mt-2">
                        &lt;body> - Тук започва видимото съдържание на уеб страницата.
                    </li>

                    <li class="mt-2">
                        &lt;h1>Заглавие на страницата&lt;/h1> - Този таг създава заглавие от първо ниво (най-важно) за страницата.
                    </li>

                    <li class="mt-2">
                        &lt;p>Това е параграф с текст. &lt;a href="#">Това е връзка към друга страница&lt;/a>.&lt;/p> - Този таг създава параграф с текст и вътре в него има връзка към друга страница.
                    </li>

                    <li class="mt-2">
                        &lt;h2>Списък&lt;/h2> - Този таг създава заглавие от второ ниво за секцията със списъка.                   
                    </li>

                    <li class="mt-2">
                        &lt;ul> - Този таг създава неореден списък.
                    </li>

                    <li class="mt-2">
                        &lt;li>Първи елемент&lt;/li> - Този таг създава елемент от списъка.
                    </li>

                    <li class="mt-2">
                        &lt;img src="https://via.placeholder.com/300" alt="Примерно изображение"> - Този таг вмъква изображение в страницата, задавайки източника и алтернативен текст.
                    </li>

                    <li class="mt-2">
                        &lt;form> - Този таг създава форма, която съдържа полета за въвеждане на данни.
                    </li>

                    <li class="mt-2">
                        &lt;br> - Този таг създава нов ред (празно пространство).
                    </li>

                    <li class="mt-2">
                        &lt;button type="submit">Вход&lt;/button> - Този таг създава бутон за изпращане на формата.
                    </li>
                </ul>	 
			</p>     
		</div>
	</div>
     
    <p class="pt-4 fs-6">
    Разбрахте как да създавате основни елементи като заглавия, параграфи, списъци, изображения и форми. Научихте как HTML структурира съдържанието на уеб страниците, като използвате тагове и атрибути.

    Това е само началото. Създаването на уеб страници с HTML е вълнуващо и креативно предизвикателство. Продължете да практикувате и изследвате по-дълбоки аспекти на HTML, като използвате различни елементи и структури.    
    </p>