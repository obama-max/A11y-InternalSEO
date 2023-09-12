<h1 class="pt-4 fs-3 d-flex justify-content-center" tabindex="0">
		Псевдо елементи и класове:
	</h1>
	
    <p class="fs-6" tabindex="0">
        Голяма част от селекторите са псевдо-класове и псевдо-елементи. Има голям брой от тях и често служат за много конкретни цели. След като научите как да ги използвате, можете да погледнете списъка, за да видите дали има нещо, което работи за задачата, която се опитвате да постигнете.
    </p>

    <p class="fs-5" tabindex="0">
        Какво са псевдо-класове:
    </p>

    <p class="fs-6 mt-2" tabindex="0">
        Псевдо-клас е селектор, който избира елементи, които се намират в определено състояние, например първият елемент от своя вид или се намират под мишката. Те често действат като да сте приложили клас към част от вашия документ, което често помага да намалите излишните класове във вашия код и ви предоставя по-гъвкав и лесен за поддръжка код.
        Псевдо-класовете са ключови думи, които започват с двоеточие. Например, :hover е псевдо-клас.
    </p>

    <p class="fs-5 mt-2" tabindex="0">
        Ето прост пример за псевдо клас:
    </p>

    <p class="codepen" data-height="300" data-theme-id="dark" data-default-tab="html,result" data-slug-hash="bGOggPd" data-editable="true" data-user="BarinHD-YT" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
    <span>See the Pen <a href="https://codepen.io/BarinHD-YT/pen/bGOggPd">
    Untitled</a> by BarinHD YT (<a href="https://codepen.io/BarinHD-YT">@BarinHD-YT</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>

    <p class="fs-6 mt-2">
        Селекторът за псевдо-клас ":first-child" винаги ще насочва към първия детски елемент в статията, и няма да ни е необходимо да редактираме HTML-а.
    </p>

    <p class="fs-5 mt-2" tabindex="0">
        Ето пример и за интерактивни псевдо-класове:
    </p> 

    <p class="codepen" data-height="300" data-theme-id="dark" data-default-tab="html,result" data-slug-hash="xxmgqKj" data-editable="true" data-user="BarinHD-YT" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
    <span>See the Pen <a href="https://codepen.io/BarinHD-YT/pen/xxmgqKj">
    Untitled</a> by BarinHD YT (<a href="https://codepen.io/BarinHD-YT">@BarinHD-YT</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>

    <p class="fs-6 mt-2">
        Виждате как зеления фон не изпълва флоута. Това става, защото плаващият елемент е изваден извън нормалния поток. Може би бихте очаквали, че като обгърнете плаващата кутия и текста на първия параграф, който се обгръща около плаващия елемент, последващото съдържание ще се изчисти от кутията. Но това не е така. За да се справите с този проблем, стандартният метод е да създадете блокиращ контекст на форматиране (BFC), използвайки свойството "display". За да се справите с този проблем добавете следният код към CSS-a на 'wrapper' класа:
    </p>

    <p class="fs-6 mt-2">
        Ето и линк към лист с <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/Pseudo-classes#alphabetical_index" rel="noreferrer">всички псевдо-класове</a>.
    </p>

    <p class="fs-5" tabindex="0">
        Какво са псевдо-елементи:
    </p>

    <p class="fs-6 mt-2" tabindex="0">
        Псевдо-елементите се държат по подобен начин. Обаче те действат като да сте добавили цял нов HTML елемент към маркирането, вместо да прилагате клас към съществуващи елементи.

        Псевдо-елементите започват с двойно двоеточие ' :: '. Пример за псевдо-елемент е ::before.
    </p>

    <p class="fs-5 mt-2" tabindex="0">
        Ето прост пример за псевдо клас:
    </p>

    <p class="codepen" data-height="300" data-theme-id="dark" data-default-tab="html,result" data-slug-hash="bGOggPd" data-editable="true" data-user="BarinHD-YT" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
    <span>See the Pen <a href="https://codepen.io/BarinHD-YT/pen/bGOggPd">
    Untitled</a> by BarinHD YT (<a href="https://codepen.io/BarinHD-YT">@BarinHD-YT</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>

    <p class="fs-6 mt-2">
        Селекторът за псевдо-клас ":first-child" винаги ще насочва към първия детски елемент в статията, и няма да ни е необходимо да редактираме HTML-а.
    </p>

    <p class="fs-5 mt-2" tabindex="0">
        Създаване на съдържание с ::before и ::after:
    </p> 

    <p class="codepen" data-height="300" data-theme-id="dark" data-default-tab="html,result" data-slug-hash="gOZgmmb" data-editable="true" data-user="BarinHD-YT" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
    <span>See the Pen <a href="https://codepen.io/BarinHD-YT/pen/gOZgmmb">
    Untitled</a> by BarinHD YT (<a href="https://codepen.io/BarinHD-YT">@BarinHD-YT</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>

    <p class="fs-6 mt-2">
        Използването на псевдо-елементите ::before и ::after заедно със свойството "content" се нарича "Генерирано съдържание" в CSS, и често ще забележите тази техника да се използва за различни задачи. Голям пример е сайтът "<a href="https://cssarrowplease.com/" rel="noreferrer">CSS Arrow Please</a>", който ви помага да генерирате стрелка със CSS. При създаването на стрелката виждайте CSS-а и ще видите използването на псевдо-елементите ::before и ::after. Винаги, когато видите тези селектори, обърнете внимание на свойството "content", за да видите какво се добавя към HTML елемента.
    </p>

    <p class="fs-6 mt-2">
        Ето и линк към лист с <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/Pseudo-classes#alphabetical_index" rel="noreferrer">всички псевдо-елементи</a>.
    </p>

    <p class="fs-5 mt-2" tabindex="0">
        Заключение:
    </p> 

    <p class="fs-6 mt-2">
        Псевдо-класовете ви позволяват да насочите елемент, когато се намира в определено състояние, като че ли сте добавили клас за това състояние към DOM. Псевдо-елементите се държат като че ли сте добавили цял нов елемент към DOM и ви позволяват да стилизирате такъв. Псевдо-елементите ::before и ::after ви позволяват да вмъкнете съдържание в документа, използвайки CSS.
    </p>