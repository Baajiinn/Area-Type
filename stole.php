<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div id="typingTest" style="opacity: 1;">
        <div id="capsWarning" class="hidden focus">
            <i class="fas fa-lock"></i>
            Caps Lock
        </div>
        <div id="memoryTimer" style="opacity: 0;">Time left to memorise all words: 0s</div>
        <div id="layoutfluidTimer" style="opacity: 0;">Time left to memorise all words: 0s</div>
        <div id="testModesNotice">
            <div class="textButton" commands="languages"><i class="fas fa-globe-americas"></i>english</div>
        </div>
        <div id="timerNumber" class="timerMain" style="opacity: 0;">
            <div>60</div>
        </div>
        <div id="miniTimerAndLiveWpm" class="timerMain" style="font-size: 1.5rem;">
            <div class="time" style="opacity: 1;">07:44</div>
            <div class="wpm hidden">0</div>
            <div class="acc hidden">0%</div>
            <div class="burst hidden">0</div>
        </div>
        <div class="outOfFocusWarning" style="line-height: 117px;">
            <i class="fas fa-mouse-pointer"></i>
            Click here or press any key to focus
        </div>
        <input id="wordsInput" class="" type="text" autocomplete="off" autocapitalize="off" autocorrect="off"
            data-gramm="false" data-gramm_editor="false" data-enable-grammarly="false" list="autocompleteOff"
            spellcheck="false" style="left: 0px; top: 96px;">
        <div id="wordsWrapper" translate="no" style="height: 117px; overflow: hidden;">
            <div id="paceCaret" class="hidden default" style="font-size: 1.5rem;"></div>
            <div id="caret" class="default hidden"
                style="animation-name: caretFlashSmooth; opacity: 1; font-size: 1.5rem; display: block; top: 18.5px; left: 20px;">
            </div>
            <div id="words" class="highlight-letter blurred"
                style="font-size: 1.5rem; height: 156px; overflow: hidden; width: 100%; margin-left: unset; transition: all 0.25s ease 0s;">
                <div class="word active">
                    <letter class="incorrect ">b</letter>
                    <letter class="">e</letter>
                    <letter class="">c</letter>
                    <letter class="">o</letter>
                    <letter class="">m</letter>
                    <letter class="">e</letter>
                </div>
                <div class="word">
                    <letter>m</letter>
                    <letter>o</letter>
                    <letter>s</letter>
                    <letter>t</letter>
                </div>
                <div class="word">
                    <letter>i</letter>
                    <letter>n</letter>
                    <letter>c</letter>
                    <letter>r</letter>
                    <letter>e</letter>
                    <letter>a</letter>
                    <letter>s</letter>
                    <letter>e</letter>
                </div>
                <div class="word">
                    <letter>m</letter>
                    <letter>u</letter>
                    <letter>c</letter>
                    <letter>h</letter>
                </div>
                <div class="word">
                    <letter>b</letter>
                    <letter>e</letter>
                </div>
                <div class="word">
                    <letter>t</letter>
                    <letter>h</letter>
                    <letter>a</letter>
                    <letter>t</letter>
                </div>
                <div class="word">
                    <letter>k</letter>
                    <letter>e</letter>
                    <letter>e</letter>
                    <letter>p</letter>
                </div>
                <div class="word">
                    <letter>u</letter>
                    <letter>n</letter>
                    <letter>d</letter>
                    <letter>e</letter>
                    <letter>r</letter>
                </div>
                <div class="word">
                    <letter>f</letter>
                    <letter>i</letter>
                    <letter>n</letter>
                    <letter>d</letter>
                </div>
                <div class="word">
                    <letter>p</letter>
                    <letter>u</letter>
                    <letter>b</letter>
                    <letter>l</letter>
                    <letter>i</letter>
                    <letter>c</letter>
                </div>
                <div class="word">
                    <letter>a</letter>
                    <letter>s</letter>
                </div>
                <div class="word">
                    <letter>p</letter>
                    <letter>e</letter>
                    <letter>o</letter>
                    <letter>p</letter>
                    <letter>l</letter>
                    <letter>e</letter>
                </div>
                <div class="word">
                    <letter>e</letter>
                    <letter>a</letter>
                    <letter>c</letter>
                    <letter>h</letter>
                </div>
                <div class="word">
                    <letter>s</letter>
                    <letter>c</letter>
                    <letter>h</letter>
                    <letter>o</letter>
                    <letter>o</letter>
                    <letter>l</letter>
                </div>
                <div class="word">
                    <letter>f</letter>
                    <letter>e</letter>
                    <letter>w</letter>
                </div>
                <div class="word">
                    <letter>o</letter>
                    <letter>n</letter>
                    <letter>l</letter>
                    <letter>y</letter>
                </div>
                <div class="word">
                    <letter>l</letter>
                    <letter>i</letter>
                    <letter>f</letter>
                    <letter>e</letter>
                </div>
                <div class="word">
                    <letter>i</letter>
                    <letter>n</letter>
                    <letter>c</letter>
                    <letter>r</letter>
                    <letter>e</letter>
                    <letter>a</letter>
                    <letter>s</letter>
                    <letter>e</letter>
                </div>
                <div class="word">
                    <letter>h</letter>
                    <letter>o</letter>
                    <letter>u</letter>
                    <letter>s</letter>
                    <letter>e</letter>
                </div>
                <div class="word">
                    <letter>e</letter>
                    <letter>v</letter>
                    <letter>e</letter>
                    <letter>n</letter>
                </div>
                <div class="word">
                    <letter>b</letter>
                    <letter>e</letter>
                    <letter>c</letter>
                    <letter>a</letter>
                    <letter>u</letter>
                    <letter>s</letter>
                    <letter>e</letter>
                </div>
                <div class="word">
                    <letter>m</letter>
                    <letter>u</letter>
                    <letter>c</letter>
                    <letter>h</letter>
                </div>
                <div class="word">
                    <letter>b</letter>
                    <letter>e</letter>
                    <letter>f</letter>
                    <letter>o</letter>
                    <letter>r</letter>
                    <letter>e</letter>
                </div>
                <div class="word">
                    <letter>g</letter>
                    <letter>e</letter>
                    <letter>n</letter>
                    <letter>e</letter>
                    <letter>r</letter>
                    <letter>a</letter>
                    <letter>l</letter>
                </div>
                <div class="word">
                    <letter>h</letter>
                    <letter>i</letter>
                    <letter>g</letter>
                    <letter>h</letter>
                </div>
                <div class="word">
                    <letter>s</letter>
                    <letter>h</letter>
                    <letter>o</letter>
                    <letter>w</letter>
                </div>
                <div class="word">
                    <letter>w</letter>
                    <letter>o</letter>
                    <letter>r</letter>
                    <letter>k</letter>
                </div>
                <div class="word">
                    <letter>a</letter>
                    <letter>n</letter>
                    <letter>y</letter>
                </div>
                <div class="word">
                    <letter>t</letter>
                    <letter>h</letter>
                    <letter>e</letter>
                    <letter>y</letter>
                </div>
                <div class="word">
                    <letter>b</letter>
                    <letter>e</letter>
                </div>
                <div class="word">
                    <letter>t</letter>
                    <letter>h</letter>
                    <letter>i</letter>
                    <letter>s</letter>
                </div>
                <div class="word">
                    <letter>a</letter>
                    <letter>f</letter>
                    <letter>t</letter>
                    <letter>e</letter>
                    <letter>r</letter>
                </div>
                <div class="word">
                    <letter>t</letter>
                    <letter>i</letter>
                    <letter>m</letter>
                    <letter>e</letter>
                </div>
                <div class="word">
                    <letter>d</letter>
                    <letter>u</letter>
                    <letter>r</letter>
                    <letter>i</letter>
                    <letter>n</letter>
                    <letter>g</letter>
                </div>
                <div class="word">
                    <letter>p</letter>
                    <letter>e</letter>
                    <letter>r</letter>
                    <letter>s</letter>
                    <letter>o</letter>
                    <letter>n</letter>
                </div>
                <div class="word">
                    <letter>s</letter>
                    <letter>e</letter>
                    <letter>e</letter>
                </div>
                <div class="word">
                    <letter>b</letter>
                    <letter>e</letter>
                    <letter>t</letter>
                    <letter>w</letter>
                    <letter>e</letter>
                    <letter>e</letter>
                    <letter>n</letter>
                </div>
                <div class="word">
                    <letter>f</letter>
                    <letter>i</letter>
                    <letter>n</letter>
                    <letter>d</letter>
                </div>
                <div class="word">
                    <letter>n</letter>
                    <letter>a</letter>
                    <letter>t</letter>
                    <letter>i</letter>
                    <letter>o</letter>
                    <letter>n</letter>
                </div>
                <div class="word">
                    <letter>e</letter>
                    <letter>a</letter>
                    <letter>c</letter>
                    <letter>h</letter>
                </div>
                <div class="word">
                    <letter>t</letter>
                    <letter>h</letter>
                    <letter>a</letter>
                    <letter>n</letter>
                </div>
                <div class="word">
                    <letter>n</letter>
                    <letter>u</letter>
                    <letter>m</letter>
                    <letter>b</letter>
                    <letter>e</letter>
                    <letter>r</letter>
                </div>
                <div class="word">
                    <letter>l</letter>
                    <letter>i</letter>
                    <letter>f</letter>
                    <letter>e</letter>
                </div>
                <div class="word">
                    <letter>s</letter>
                    <letter>i</letter>
                    <letter>n</letter>
                    <letter>c</letter>
                    <letter>e</letter>
                </div>
                <div class="word">
                    <letter>w</letter>
                    <letter>a</letter>
                    <letter>y</letter>
                </div>
                <div class="word">
                    <letter>b</letter>
                    <letter>u</letter>
                    <letter>t</letter>
                </div>
                <div class="word">
                    <letter>m</letter>
                    <letter>o</letter>
                    <letter>v</letter>
                    <letter>e</letter>
                </div>
                <div class="word">
                    <letter>d</letter>
                    <letter>e</letter>
                    <letter>v</letter>
                    <letter>e</letter>
                    <letter>l</letter>
                    <letter>o</letter>
                    <letter>p</letter>
                </div>
                <div class="word">
                    <letter>h</letter>
                    <letter>a</letter>
                    <letter>v</letter>
                    <letter>e</letter>
                </div>
                <div class="word">
                    <letter>s</letter>
                    <letter>t</letter>
                    <letter>a</letter>
                    <letter>n</letter>
                    <letter>d</letter>
                </div>
                <div class="word">
                    <letter>a</letter>
                    <letter>n</letter>
                    <letter>d</letter>
                </div>
                <div class="word">
                    <letter>t</letter>
                    <letter>h</letter>
                    <letter>e</letter>
                    <letter>n</letter>
                </div>
                <div class="word">
                    <letter>s</letter>
                    <letter>m</letter>
                    <letter>a</letter>
                    <letter>l</letter>
                    <letter>l</letter>
                </div>
                <div class="word">
                    <letter>p</letter>
                    <letter>l</letter>
                    <letter>a</letter>
                    <letter>c</letter>
                    <letter>e</letter>
                </div>
                <div class="word">
                    <letter>u</letter>
                    <letter>s</letter>
                    <letter>e</letter>
                </div>
                <div class="word">
                    <letter>n</letter>
                    <letter>e</letter>
                    <letter>w</letter>
                </div>
                <div class="word">
                    <letter>a</letter>
                    <letter>g</letter>
                    <letter>a</letter>
                    <letter>i</letter>
                    <letter>n</letter>
                    <letter>s</letter>
                    <letter>t</letter>
                </div>
                <div class="word">
                    <letter>a</letter>
                    <letter>n</letter>
                    <letter>d</letter>
                </div>
                <div class="word">
                    <letter>s</letter>
                    <letter>o</letter>
                </div>
                <div class="word">
                    <letter>o</letter>
                    <letter>n</letter>
                    <letter>e</letter>
                </div>
                <div class="word">
                    <letter>m</letter>
                    <letter>o</letter>
                    <letter>s</letter>
                    <letter>t</letter>
                </div>
                <div class="word">
                    <letter>t</letter>
                    <letter>h</letter>
                    <letter>e</letter>
                    <letter>y</letter>
                </div>
                <div class="word">
                    <letter>t</letter>
                    <letter>h</letter>
                    <letter>a</letter>
                    <letter>t</letter>
                </div>
                <div class="word">
                    <letter>h</letter>
                    <letter>e</letter>
                    <letter>l</letter>
                    <letter>p</letter>
                </div>
                <div class="word">
                    <letter>t</letter>
                    <letter>u</letter>
                    <letter>r</letter>
                    <letter>n</letter>
                </div>
                <div class="word">
                    <letter>s</letter>
                    <letter>e</letter>
                    <letter>e</letter>
                    <letter>m</letter>
                </div>
                <div class="word">
                    <letter>t</letter>
                    <letter>h</letter>
                    <letter>a</letter>
                    <letter>t</letter>
                </div>
                <div class="word">
                    <letter>s</letter>
                    <letter>t</letter>
                    <letter>a</letter>
                    <letter>n</letter>
                    <letter>d</letter>
                </div>
                <div class="word">
                    <letter>g</letter>
                    <letter>o</letter>
                    <letter>o</letter>
                    <letter>d</letter>
                </div>
                <div class="word">
                    <letter>s</letter>
                    <letter>c</letter>
                    <letter>h</letter>
                    <letter>o</letter>
                    <letter>o</letter>
                    <letter>l</letter>
                </div>
                <div class="word">
                    <letter>k</letter>
                    <letter>n</letter>
                    <letter>o</letter>
                    <letter>w</letter>
                </div>
                <div class="word">
                    <letter>w</letter>
                    <letter>h</letter>
                    <letter>i</letter>
                    <letter>c</letter>
                    <letter>h</letter>
                </div>
                <div class="word">
                    <letter>g</letter>
                    <letter>o</letter>
                </div>
                <div class="word">
                    <letter>b</letter>
                    <letter>e</letter>
                    <letter>f</letter>
                    <letter>o</letter>
                    <letter>r</letter>
                    <letter>e</letter>
                </div>
                <div class="word">
                    <letter>t</letter>
                    <letter>h</letter>
                    <letter>a</letter>
                    <letter>t</letter>
                </div>
                <div class="word">
                    <letter>e</letter>
                    <letter>a</letter>
                    <letter>c</letter>
                    <letter>h</letter>
                </div>
                <div class="word">
                    <letter>y</letter>
                    <letter>e</letter>
                    <letter>a</letter>
                    <letter>r</letter>
                </div>
                <div class="word">
                    <letter>h</letter>
                    <letter>o</letter>
                    <letter>m</letter>
                    <letter>e</letter>
                </div>
                <div class="word">
                    <letter>t</letter>
                    <letter>o</letter>
                    <letter>o</letter>
                </div>
                <div class="word">
                    <letter>i</letter>
                    <letter>n</letter>
                    <letter>c</letter>
                    <letter>r</letter>
                    <letter>e</letter>
                    <letter>a</letter>
                    <letter>s</letter>
                    <letter>e</letter>
                </div>
                <div class="word">
                    <letter>b</letter>
                    <letter>e</letter>
                    <letter>f</letter>
                    <letter>o</letter>
                    <letter>r</letter>
                    <letter>e</letter>
                </div>
                <div class="word">
                    <letter>t</letter>
                    <letter>h</letter>
                    <letter>r</letter>
                    <letter>o</letter>
                    <letter>u</letter>
                    <letter>g</letter>
                    <letter>h</letter>
                </div>
                <div class="word">
                    <letter>s</letter>
                    <letter>i</letter>
                    <letter>n</letter>
                    <letter>c</letter>
                    <letter>e</letter>
                </div>
                <div class="word">
                    <letter>a</letter>
                    <letter>l</letter>
                    <letter>l</letter>
                </div>
                <div class="word">
                    <letter>d</letter>
                    <letter>e</letter>
                    <letter>v</letter>
                    <letter>e</letter>
                    <letter>l</letter>
                    <letter>o</letter>
                    <letter>p</letter>
                </div>
                <div class="word">
                    <letter>r</letter>
                    <letter>i</letter>
                    <letter>g</letter>
                    <letter>h</letter>
                    <letter>t</letter>
                </div>
                <div class="word">
                    <letter>f</letter>
                    <letter>a</letter>
                    <letter>c</letter>
                    <letter>e</letter>
                </div>
                <div class="word">
                    <letter>c</letter>
                    <letter>a</letter>
                    <letter>n</letter>
                </div>
                <div class="word">
                    <letter>o</letter>
                    <letter>r</letter>
                </div>
                <div class="word">
                    <letter>t</letter>
                    <letter>o</letter>
                </div>
                <div class="word">
                    <letter>w</letter>
                    <letter>r</letter>
                    <letter>i</letter>
                    <letter>t</letter>
                    <letter>e</letter>
                </div>
                <div class="word">
                    <letter>n</letter>
                    <letter>e</letter>
                    <letter>w</letter>
                </div>
                <div class="word">
                    <letter>l</letter>
                    <letter>i</letter>
                    <letter>k</letter>
                    <letter>e</letter>
                </div>
                <div class="word">
                    <letter>t</letter>
                    <letter>h</letter>
                    <letter>e</letter>
                    <letter>y</letter>
                </div>
                <div class="word">
                    <letter>n</letter>
                    <letter>a</letter>
                    <letter>t</letter>
                    <letter>i</letter>
                    <letter>o</letter>
                    <letter>n</letter>
                </div>
                <div class="word">
                    <letter>s</letter>
                    <letter>t</letter>
                    <letter>a</letter>
                    <letter>n</letter>
                    <letter>d</letter>
                </div>
                <div class="word">
                    <letter>l</letter>
                    <letter>a</letter>
                    <letter>r</letter>
                    <letter>g</letter>
                    <letter>e</letter>
                </div>
                <div class="word">
                    <letter>p</letter>
                    <letter>r</letter>
                    <letter>o</letter>
                    <letter>b</letter>
                    <letter>l</letter>
                    <letter>e</letter>
                    <letter>m</letter>
                </div>
                <div class="word">
                    <letter>n</letter>
                    <letter>o</letter>
                    <letter>t</letter>
                </div>
                <div class="word">
                    <letter>l</letter>
                    <letter>i</letter>
                    <letter>n</letter>
                    <letter>e</letter>
                </div>
            </div>
        </div>
        <div id="koInputVisualContainer" style="display: none; transition: all 0.25s ease 0s;" class="blurred">
            <div id="koInputVisual" aria-label="Korean Input Visual" class=""></div>
        </div>
        <div id="keymap" class="hidden"></div>
        <button id="restartTestButton" aria-label="Restart Test" data-balloon-pos="down" class="text"
            onclick="this.blur();">
            <i class="fas fa-fw fa-redo-alt"></i>
        </button>
        <div id="largeLiveWpmAndAcc" class="timerMain">
            <div id="liveWpm" class="hidden">0</div>
            <div id="liveAcc" class="hidden">0%</div>
            <div id="liveBurst" class="hidden">0</div>
        </div>
        <div id="monkey" class="hidden" style="opacity: 1; animation-duration: 0s;">
            <div class="up"></div>
            <div class="left hidden"></div>
            <div class="right hidden"></div>
            <div class="both hidden"></div>
            <div class="fast" style="opacity: 0;">
                <div class="up"></div>
                <div class="left hidden"></div>
                <div class="right hidden"></div>
                <div class="both hidden"></div>
            </div>
        </div>
        <div id="premidTestMode" class="hidden">time 500 english</div>
        <div id="premidSecondsLeft" class="hidden">464</div>
    </div>
</body>

</html>