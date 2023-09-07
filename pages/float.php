    <h1 class="pt-4 fs-3 d-flex justify-content-center" tabindex="0">
		Плаващ елемент - флоут:
	</h1>
	
    <p class="fs-6" tabindex="0">
        Първоначално предназначена за плуващи изображения в текстови блокове, свойството "float" стана един от най-често използваните инструменти за създаване на многоколонни макети на уебстраници. С настъпването на flexbox и grid то вече се връща към своето първоначално предназначение.
    </p>

    <p class="fs-5" tabindex="0">
        Ето и пример за флоут с код:
    </p>

    <p class="codepen" data-height="300" data-theme-id="dark" data-default-tab="html,result" data-slug-hash="XWopNyJ" data-editable="true" data-user="BarinHD-YT" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
    <span>See the Pen <a href="https://codepen.io/BarinHD-YT/pen/XWopNyJ">
    Untitled</a> by BarinHD YT (<a href="https://codepen.io/BarinHD-YT">@BarinHD-YT</a>)
     on <a href="https://codepen.io">CodePen</a>.</span>
    </p>

    <p class="fs-6 mt-2" tabindex="0">
       Хайде да размислим как работи плаващият (float) елемент. Елементът, на който е настроено плаването (в този случай &lt;div&gt; елементът), се изважда от нормалния поток на документа и се залепва в лявата страна на своя родителски контейнер (&lt;body&gt; в този случай). Всяко съдържание, което би трябвало да бъде под плаващия елемент в нормалния поток на макета, сега ще се обгръща около него, попълвайки пространството от дясната му страна до горната му част. Там тя ще спре.

        Плаването на съдържанието вдясно има точно същия ефект, но обратно: плаващият елемент ще се залепи в дясната страна, а съдържанието ще се обгърне около него в ляво. Опитайте да промените стойността на плаването на "right" и да замените "margin-right" с "margin-left" в последния правилник, за да видите какво резултира от това.
    </p>

    <p class="fs-5 mt-2" tabindex="0">
        Чистене на флоут:
    </p>

    <p class="fs-6 mt-2">
        Видяхме, че плаващият елемент се изважда от нормалния поток и други елементи ще се покажат до него. Ако искаме да спрем следващия елемент да се придвижи нагоре, трябва да го "изчистим"; това се постига с помощта на свойството "clear".
    </p>

    <p style="background-color: #293130; padding:15px; border-radius: 20px; width:250px;">
        <span style="color:#b89c51; font-weight:600">
            .cleared
        </span>

        <span style="color:white">
            {
        </span> 
            <br>
        <span style="color:#98677d; margin-left:10%;">
            clear
        </span> 

        <span style="color:white">
            : 
        </span>

        <span style="color:chocolate;">
           left
        </span>

        <span style="color:white;">
            ;
        </span>
            <br>
        <span style="color:white">
            }
        </span>
    </p>

    <p class="fs-5 mt-2">
        Ето още един пример с проблем:
    </p>

    <p class="codepen" data-height="300" data-theme-id="dark" data-default-tab="html,result" data-slug-hash="gOZggaj" data-editable="true" data-user="BarinHD-YT" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
    <span>See the Pen <a href="https://codepen.io/BarinHD-YT/pen/gOZggaj">
    Untitled</a> by BarinHD YT (<a href="https://codepen.io/BarinHD-YT">@BarinHD-YT</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>

    <p class="fs-6 mt-2">
        Виждате как зеления фон не изпълва флоута. Това става, защото плаващият елемент е изваден извън нормалния поток. Може би бихте очаквали, че като обгърнете плаващата кутия и текста на първия параграф, който се обгръща около плаващия елемент, последващото съдържание ще се изчисти от кутията. Но това не е така. За да се справите с този проблем, стандартният метод е да създадете блокиращ контекст на форматиране (BFC), използвайки свойството "display". За да се справите с този проблем добавете следният код към CSS-a на 'wrapper' класа:
    </p>

    <p style="background-color: #293130; padding:15px; border-radius: 20px; width:250px;">
        <span style="color:#98677d; font-weight:600">
            display
        </span>

        <span style="color:white">
            :
        </span> 

        <span style="color:chocolate;">
            flow-root
        </span> 

        <span style="color:white">
            ; 
        </span>
    </p>
