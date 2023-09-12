    <h1 class="pt-4 fs-3 d-flex justify-content-center" tabindex="0">
		Background - заден фон:
	</h1>
	
    <p class="fs-6" tabindex="0">
        Свойството за фон (background) в CSS ти дава на разположение всички стилови настройки за фона едновременно, като цвят, изображение, начало и размер, или метод за повторение. Свойствата на компонентите, които не са зададени в стойността за фон, се настройват на техните стойности по подразбиране.
    </p>

    <div class="row">
        <div class="col-6">
            <p class="fs-5" tabindex="0">
            Background свойството е съкратената версия на следните стойности:
            </p>

            <ul>
                <li class="fs-6 mt-2"> 
                    background-attachment: scroll;
                </li>
                
                <li class="fs-6 mt-2"> 
                    background-clip: border-box;
                </li>

                <li class="fs-6 mt-2"> 
                    background-color: transparent;
                </li>

                <li class="fs-6 mt-2">
                    background-image: none;
                </li>

                <li class="fs-6 mt-2">
                    background-origin: padding-box;
                </li>

                <li class="fs-6 mt-2">
                    background-position: 0% 0%;
                </li>

                <li class="fs-6 mt-2">
                    background-repeat: repeat;
                </li>

                <li class="fs-6 mt-2">
                    background-size: auto auto;
                </li>
            </ul>
        </div>

        <div class="col-6">
            <p class="fs-5" tabindex="0">
                Ето и пример за възможни стойностите с код:
            </p>

            <p class="codepen" data-height="300" data-theme-id="dark" data-default-tab="css,result" data-slug-hash="PoXWZOZ" data-editable="true" data-user="BarinHD-YT" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
            <span>See the Pen <a href="https://codepen.io/BarinHD-YT/pen/PoXWZOZ">
            Untitled</a> by BarinHD YT (<a href="https://codepen.io/BarinHD-YT">@BarinHD-YT</a>)
            on <a href="https://codepen.io">CodePen</a>.</span>
            </p>
        </div>
    </div>

    <p class="fs-5 mt-2" tabindex="0">
        Вместо едно по едно отделните стойности да бъдат използвани, може да се използва съкратения вариант:
    </p>

    <p style="background-color: #293130; padding:3px; border-radius: 3px;">
        <span style="color:#b89c51; font-weight:600">
            background
        </span>

        <span style="color:white">
            : left
        </span> 
        
        <span style="color:chocolate;">
            5%
        </span> 

        <span style="color:white">
            / 
        </span>

        <span style="color:chocolate;">
            15%
        </span>

        <span style="color:chocolate;">
            60%
        </span>

        <span style="color:white">
            repeat-x
        </span>

        <span style="color:chocolate;">
            url("../../media/examples/star.png")
        </span>

        <span style="color:white">
            ;
        </span>

        <span style="color: #47d963;">
            // Възможни са много варианти
        </span>
    </p>
    
    <p class="fs-5 mt-2" tabindex="0">
        Ето и пример за заден фон с код:
    </p>

    <p class="codepen" data-height="300" data-theme-id="dark" data-default-tab="css,result" data-slug-hash="MWZJyaz" data-editable="true" data-user="BarinHD-YT" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
    <span>See the Pen <a href="https://codepen.io/BarinHD-YT/pen/MWZJyaz">
    Untitled</a> by BarinHD YT (<a href="https://codepen.io/BarinHD-YT">@BarinHD-YT</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>