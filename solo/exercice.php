<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../assets/css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area Type - Exercice</title>
</head>

<?php include '../assets/php/nav2.php' ?>

<body style="transition: background 0.25s ease 0s, transform 0.05s ease 0s; cursor: default;" class="">
    <noscript>
        <div style="
      background: #333;
      width: 100vw;
      height: 100vh;
      left: 0;
      top: 0;
      position: fixed;
      display: grid;
      justify-content: center;
      align-content: center;
      color: #646669;
      font-size: 1rem;
      font-family: Arial Rounded MT Bold;
      z-index: 99999;
      padding: 6rem;
      box-sizing: border-box;
    ">
            <div style="
        display: grid;
        justify-content: center;
        align-content: center;
        max-width: 800px;
        gap: 1rem;
      ">
                <span style="font-size: 6rem; color: #e2b714">:(</span>
                <span style="font-size: 2rem; color: #d1d0c5">
                    Looks like JavaScript is disabled. Please enable JavaScript in order to
                    use this website.
                </span>
            </div>
        </div>
    </noscript>
    <div id="nocss" style="
    background: #333;
    width: 100vw;
    height: 100vh;
    left: 0;
    top: 0;
    position: fixed;
    display: grid;
    justify-content: center;
    align-content: center;
    color: #646669;
    font-size: 1rem;
    font-family: Arial Rounded MT Bold;
    z-index: 99999;
    padding: 6rem;
    box-sizing: border-box;
    overflow-y: scroll;
  ">
        <style>
        .noCssReinstallServiceWorker {
            margin-top: 1rem;
            padding: 1rem;
            display: inline-block;
            border-radius: 1rem;
            background: #2c2e31;
            transition: 0.125s;
        }

        .noCssReinstallServiceWorker:hover {
            background: #d1d0c5;
            color: #333;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        .noCssReinstallServiceWorker:active {
            background: #646669;
        }
        </style>
        <script>
        function reinstallServiceWorker() {
            navigator.serviceWorker.getRegistrations().then(function(registrations) {
                for (let registration of registrations) {
                    registration.unregister();
                }
                caches.keys().then((cacheNames) => {
                    for (let cacheName of cacheNames) {
                        caches.delete(cacheName);
                    }
                });
            });
            setTimeout(function() {
                window.location.reload();
            }, 500);
        }
        </script>
        <div style="
      display: grid;
      justify-content: center;
      align-content: center;
      max-width: 800px;
      gap: 1rem;
    ">
            <span style="font-size: 6rem; color: #e2b714">:(</span>
            <span style="font-size: 1.5rem; color: #d1d0c5">
                It seems like the CSS failed to load. Please try clearing your cache to
                redownload the styles:
                <br>
                <span class="keys">
                    <span style="
        padding: 1rem;
        display: inline-block;
        border-radius: 1rem;
        background: #2c2e31;
        margin-bottom: 1rem;
      ">
                        Ctrl
                    </span>
                    +
                    <span style="
        padding: 1rem;
        display: inline-block;
        border-radius: 1rem;
        background: #2c2e31;
      ">
                        Shift
                    </span>
                    +
                    <span style="
        padding: 1rem;
        display: inline-block;
        border-radius: 1rem;
        background: #2c2e31;
      ">
                        R
                    </span>
                </span>
                <br>
                You could also try to reinstall the service worker:
                <br>
                <span class="noCssReinstallServiceWorker" onclick="reinstallServiceWorker()"
                    style="margin-bottom: 1rem">
                    Reinstall
                </span>
                <br>
                Various dark mode extensions are also known to cause this issue.
            </span>
            <span>
                If that doesn't help contact support (support@monkeytype.com or
                discord.gg/monkeytype)
            </span>
            <span class="requestedStylesheets">Requested stylesheets:<br></span>
            <span class="requestedJs">Requested Javascript
                files:<br>https://monkeytype.com/js/monkeytype.DgqO9VpD.js<br><br>Client
                version:<br>2024.03.01_22.07.9a0d6bd5a9
            </span>
        </div>
    </div>
    <div id="fpsCounter" class="hidden"></div>
    <div class="customBackground"></div>
    <div id="backgroundLoader" style="display: none"></div>
    <div id="bannerCenter" class="">
        <div class="banner good" id="0">
            <div class="container">
                <div class="image" style="background-image: url(./images/plushiebanner.png)"></div>
                <div class="text">
                    George Plushie - available now for a limited time! <a target="_blank" rel="noopener"
                        href="https://mktp.co/plushie">monkeytype.store</a>
                </div>

                <div class="closeButton">
                    <i class="fas fa-fw fa-times"></i>
                </div>

            </div>
        </div>
    </div>
    <div id="notificationCenter" class="" style="margin-top: 56px;">
        <div class="clearAll button invisible" style="display: none">
            <i class="fas fa-times"></i>
            Clear all
        </div>
        <div class="history"></div>
    </div>
    <div id="timerWrapper" style="opacity: 0;">
        <div id="timer" class="timerMain"></div>
    </div>
    <div id="popups">





































    </div>

    <div id="app" class="wide125">
        <div>

        </div>
        <div id="contentWrapper" class="wide125" style="padding-top: 88px; opacity: 1;">
            <header class="">
                <a id="logo" href="/" router-link="">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            style="isolation: isolate" viewBox="-680 -1030 300 180">
                            <g>
                                <path
                                    d="M -430 -910 L -430 -910 C -424.481 -910 -420 -905.519 -420 -900 L -420 -900 C -420 -894.481 -424.481 -890 -430 -890 L -430 -890 C -435.519 -890 -440 -894.481 -440 -900 L -440 -900 C -440 -905.519 -435.519 -910 -430 -910 Z">
                                </path>
                                <path
                                    d=" M -570 -910 L -510 -910 C -504.481 -910 -500 -905.519 -500 -900 L -500 -900 C -500 -894.481 -504.481 -890 -510 -890 L -570 -890 C -575.519 -890 -580 -894.481 -580 -900 L -580 -900 C -580 -905.519 -575.519 -910 -570 -910 Z ">
                                </path>
                                <path
                                    d="M -590 -970 L -590 -970 C -584.481 -970 -580 -965.519 -580 -960 L -580 -940 C -580 -934.481 -584.481 -930 -590 -930 L -590 -930 C -595.519 -930 -600 -934.481 -600 -940 L -600 -960 C -600 -965.519 -595.519 -970 -590 -970 Z">
                                </path>
                                <path
                                    d=" M -639.991 -960.515 C -639.72 -976.836 -626.385 -990 -610 -990 L -610 -990 C -602.32 -990 -595.31 -987.108 -590 -982.355 C -584.69 -987.108 -577.68 -990 -570 -990 L -570 -990 C -553.615 -990 -540.28 -976.836 -540.009 -960.515 C -540.001 -960.345 -540 -960.172 -540 -960 L -540 -960 L -540 -940 C -540 -934.481 -544.481 -930 -550 -930 L -550 -930 C -555.519 -930 -560 -934.481 -560 -940 L -560 -960 L -560 -960 C -560 -965.519 -564.481 -970 -570 -970 C -575.519 -970 -580 -965.519 -580 -960 L -580 -960 L -580 -960 L -580 -940 C -580 -934.481 -584.481 -930 -590 -930 L -590 -930 C -595.519 -930 -600 -934.481 -600 -940 L -600 -960 L -600 -960 L -600 -960 L -600 -960 L -600 -960 L -600 -960 L -600 -960 L -600 -960 C -600 -965.519 -604.481 -970 -610 -970 C -615.519 -970 -620 -965.519 -620 -960 L -620 -960 L -620 -940 C -620 -934.481 -624.481 -930 -630 -930 L -630 -930 C -635.519 -930 -640 -934.481 -640 -940 L -640 -960 L -640 -960 C -640 -960.172 -639.996 -960.344 -639.991 -960.515 Z ">
                                </path>
                                <path
                                    d=" M -460 -930 L -460 -900 C -460 -894.481 -464.481 -890 -470 -890 L -470 -890 C -475.519 -890 -480 -894.481 -480 -900 L -480 -930 L -508.82 -930 C -514.99 -930 -520 -934.481 -520 -940 L -520 -940 C -520 -945.519 -514.99 -950 -508.82 -950 L -431.18 -950 C -425.01 -950 -420 -945.519 -420 -940 L -420 -940 C -420 -934.481 -425.01 -930 -431.18 -930 L -460 -930 Z ">
                                </path>
                                <path
                                    d="M -470 -990 L -430 -990 C -424.481 -990 -420 -985.519 -420 -980 L -420 -980 C -420 -974.481 -424.481 -970 -430 -970 L -470 -970 C -475.519 -970 -480 -974.481 -480 -980 L -480 -980 C -480 -985.519 -475.519 -990 -470 -990 Z">
                                </path>
                                <path
                                    d=" M -630 -910 L -610 -910 C -604.481 -910 -600 -905.519 -600 -900 L -600 -900 C -600 -894.481 -604.481 -890 -610 -890 L -630 -890 C -635.519 -890 -640 -894.481 -640 -900 L -640 -900 C -640 -905.519 -635.519 -910 -630 -910 Z ">
                                </path>
                                <path
                                    d=" M -515 -990 L -510 -990 C -504.481 -990 -500 -985.519 -500 -980 L -500 -980 C -500 -974.481 -504.481 -970 -510 -970 L -515 -970 C -520.519 -970 -525 -974.481 -525 -980 L -525 -980 C -525 -985.519 -520.519 -990 -515 -990 Z ">
                                </path>
                                <path
                                    d=" M -660 -910 L -680 -910 L -680 -980 C -680 -1007.596 -657.596 -1030 -630 -1030 L -430 -1030 C -402.404 -1030 -380 -1007.596 -380 -980 L -380 -900 C -380 -872.404 -402.404 -850 -430 -850 L -630 -850 C -657.596 -850 -680 -872.404 -680 -900 L -680 -920 L -660 -920 L -660 -900 C -660 -883.443 -646.557 -870 -630 -870 L -430 -870 C -413.443 -870 -400 -883.443 -400 -900 L -400 -980 C -400 -996.557 -413.443 -1010 -430 -1010 L -630 -1010 C -646.557 -1010 -660 -996.557 -660 -980 L -660 -910 Z ">
                                </path>
                            </g>
                        </svg>
                    </div>
                    <h1 class="text">
                        <div class="top">monkey see</div>
                        monkeytype
                    </h1>
                </a>
                <nav>
                    <a id="startTestButton" class="textButton view-start" href="/" onclick="this.blur();" router-link=""
                        title="start test">
                        <div class="icon">
                            <i class="fas fa-fw fa-keyboard"></i>
                        </div>
                    </a>
                    <button class="textButton leaderboards view-leaderboards" onclick="this.blur();"
                        title="leaderboard">
                        <div class="icon">
                            <i class="fas fa-fw fa-crown"></i>
                        </div>
                    </button>
                    <a class="textButton view-about" href="/about" onclick="this.blur();" router-link="" title="about">
                        <div class="icon">
                            <i class="fas fa-fw fa-info"></i>
                        </div>
                    </a>

                    <a class="textButton view-settings" href="/settings" onclick="this.blur();" router-link=""
                        title="settings">
                        <div class="icon">
                            <i class="fas fa-fw fa-cog"></i>
                        </div>
                    </a>
                    <div></div>
                    <a class="textButton hidden account view-account" href="/account" onclick="this.blur();"
                        router-link="" style="opacity: 1; pointer-events: auto;">
                        <div class="loading hidden" style="opacity: 0;">
                            <i class="fas fa-fw fa-spin fa-circle-notch"></i>
                        </div>
                        <div class="user" style="opacity: 1;">
                            <i class="fas fa-fw fa-user"></i>
                        </div>
                        <div class="avatar hidden"></div>
                        <div class="text"></div>
                        <div class="levelAndBar">
                            <div class="level">1</div>
                            <div class="xpBar">
                                <div class="bar"></div>
                                <div class="xpGain"></div>
                                <div class="xpBreakdown"></div>
                            </div>
                        </div>
                    </a>
                    <button class="text showAlerts" onclick="this.blur();">
                        <div class="icon">
                            <i class="fas fa-fw fa-bell"></i>
                        </div>
                        <div class="notificationBubble hidden">5</div>
                    </button>
                    <button class="text signInOut" onclick="this.blur();">
                        <div class="icon"><i class="far fa-fw fa-user"></i></div>
                    </button>
                </nav>
            </header>
            <main style="height: 100%" class="">







                <div class="page pageTest active" style="opacity: 1;">
                    <div id="testConfig">
                        <div class="row">
                            <div class="puncAndNum" style="opacity: 1;">
                                <div class="textButton punctuationMode">
                                    <i class="fas fa-fw fa-at"></i>
                                    punctuation
                                </div>
                                <div class="textButton numbersMode">
                                    <i class="fas fa-fw fa-hashtag"></i>
                                    numbers
                                </div>
                            </div>
                            <div class="spacer leftSpacer"></div>
                            <div class="mode">
                                <div class="textButton active" mode="time">
                                    <i class="fas fa-fw fa-clock"></i>
                                    time
                                </div>
                                <div class="textButton" mode="words">
                                    <i class="fas fa-fw fa-font"></i>
                                    words
                                </div>
                                <div class="textButton" mode="quote">
                                    <i class="fas fa-fw fa-quote-left"></i>
                                    quote
                                </div>
                                <div class="textButton" mode="zen">
                                    <i class="fas fa-fw fa-mountain"></i>
                                    zen
                                </div>
                                <div class="textButton" mode="custom">
                                    <i class="fas fa-fw fa-wrench"></i>
                                    custom
                                </div>
                            </div>
                            <div class="spacer rightSpacer"></div>
                            <div class="time">
                                <div class="textButton" timeconfig="15"><span>15</span></div>
                                <div class="textButton" timeconfig="30"><span>30</span></div>
                                <div class="textButton" timeconfig="60"><span>60</span></div>
                                <div class="textButton" timeconfig="120"><span>120</span></div>
                                <div class="textButton active" timeconfig="custom">
                                    <i class="fas fa-fw fa-tools"></i>
                                </div>
                            </div>
                            <div class="wordCount hidden">
                                <div class="textButton" wordcount="10"><span>10</span></div>
                                <div class="textButton" wordcount="25"><span>25</span></div>
                                <div class="textButton" wordcount="50"><span>50</span></div>
                                <div class="textButton" wordcount="100"><span>100</span></div>
                                <div class="textButton" wordcount="custom">
                                    <i class="fas fa-fw fa-tools"></i>
                                </div>
                            </div>
                            <div class="quoteLength hidden">
                                <div class="textButton" quotelength="-1">all</div>
                                <div class="textButton" quotelength="0">short</div>
                                <div class="textButton" quotelength="1">medium</div>
                                <div class="textButton" quotelength="2">long</div>
                                <div class="textButton" quotelength="3">thicc</div>
                                <div class="textButton favorite hidden" quotelength="-3">
                                    <i class="fas fa-heart"></i>
                                </div>
                                <div class="textButton" quotelength="-2">
                                    <i class="fas fa-search"></i>
                                </div>
                            </div>
                            <div class="zen hidden">
                                <div class="textButton" style="width: 0; padding-left: 0; padding-right: 0">
                                     
                                </div>
                            </div>
                            <div class="customText hidden">
                                <div class="textButton">change</div>
                            </div>
                        </div>
                    </div>
                    <div id="mobileTestConfig">
                        <div class="textButton">
                            <i class="fas fa-fw fa-cog"></i>
                            Test Settings
                        </div>
                    </div>
                    <div id="typingTest" style="opacity: 1;">
                        <div id="capsWarning" class="hidden">
                            <i class="fas fa-lock"></i>
                            Caps Lock
                        </div>
                        <div id="memoryTimer" style="opacity: 0;">Time left to memorise all words: 0s</div>
                        <div id="layoutfluidTimer" style="opacity: 0;">Time left to memorise all words: 0s</div>
                        <div id="testModesNotice">
                            <div class="textButton" commands="languages"><i class="fas fa-globe-americas"></i>english
                            </div>
                        </div>
                        <div id="timerNumber" class="timerMain" style="opacity: 0;">
                            <div>60</div>
                        </div>
                        <div id="miniTimerAndLiveWpm" class="timerMain" style="font-size: 1.5rem;">
                            <div class="time hidden" style="opacity: 0;">1:00</div>
                            <div class="wpm hidden">0</div>
                            <div class="acc hidden">100%</div>
                            <div class="burst hidden">0</div>
                        </div>

                        <input id="wordsInput" class="" type="text" autocomplete="off" autocapitalize="off"
                            autocorrect="off" data-gramm="false" data-gramm_editor="false" data-enable-grammarly="false"
                            list="autocompleteOff" spellcheck="false" style="left: 0px; top: 96px;">
                        <div id="wordsWrapper" translate="no" style="height: 117px; overflow: hidden;">
                            <div id="paceCaret" class="hidden default" style="font-size: 1.5rem;"></div>
                            <div id="caret" class="default hidden"
                                style="animation-name: caretFlashSmooth; opacity: 1; font-size: 1.5rem; display: block; top: 18.5px; left: 6px;">
                            </div>
                            <div id="words" class="highlight-letter blurred"
                                style="font-size: 1.5rem; transition: all 0.25s ease 0s; height: 156px; overflow: hidden; width: 100%; margin-left: unset;">
                                <div class="word active">
                                    <letter>m</letter>
                                    <letter>u</letter>
                                    <letter>c</letter>
                                    <letter>h</letter>
                                </div>
                                <div class="word">
                                    <letter>c</letter>
                                    <letter>o</letter>
                                    <letter>u</letter>
                                    <letter>l</letter>
                                    <letter>d</letter>
                                </div>
                                <div class="word">
                                    <letter>a</letter>
                                    <letter>s</letter>
                                </div>
                                <div class="word">
                                    <letter>c</letter>
                                    <letter>h</letter>
                                    <letter>i</letter>
                                    <letter>l</letter>
                                    <letter>d</letter>
                                </div>
                                <div class="word">
                                    <letter>m</letter>
                                    <letter>a</letter>
                                    <letter>n</letter>
                                    <letter>y</letter>
                                </div>
                                <div class="word">
                                    <letter>w</letter>
                                    <letter>h</letter>
                                    <letter>a</letter>
                                    <letter>t</letter>
                                </div>
                                <div class="word">
                                    <letter>w</letter>
                                    <letter>o</letter>
                                    <letter>r</letter>
                                    <letter>k</letter>
                                </div>
                                <div class="word">
                                    <letter>r</letter>
                                    <letter>u</letter>
                                    <letter>n</letter>
                                </div>
                                <div class="word">
                                    <letter>a</letter>
                                    <letter>l</letter>
                                    <letter>l</letter>
                                </div>
                                <div class="word">
                                    <letter>a</letter>
                                </div>
                                <div class="word">
                                    <letter>u</letter>
                                    <letter>p</letter>
                                </div>
                                <div class="word">
                                    <letter>a</letter>
                                    <letter>n</letter>
                                    <letter>d</letter>
                                </div>
                                <div class="word">
                                    <letter>o</letter>
                                    <letter>n</letter>
                                    <letter>e</letter>
                                </div>
                                <div class="word">
                                    <letter>t</letter>
                                    <letter>h</letter>
                                    <letter>e</letter>
                                    <letter>r</letter>
                                    <letter>e</letter>
                                </div>
                                <div class="word">
                                    <letter>f</letter>
                                    <letter>i</letter>
                                    <letter>n</letter>
                                    <letter>d</letter>
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
                                    <letter>o</letter>
                                    <letter>f</letter>
                                    <letter>f</letter>
                                </div>
                                <div class="word">
                                    <letter>b</letter>
                                    <letter>o</letter>
                                    <letter>t</letter>
                                    <letter>h</letter>
                                </div>
                                <div class="word">
                                    <letter>l</letter>
                                    <letter>a</letter>
                                    <letter>s</letter>
                                    <letter>t</letter>
                                </div>
                                <div class="word">
                                    <letter>r</letter>
                                    <letter>i</letter>
                                    <letter>g</letter>
                                    <letter>h</letter>
                                    <letter>t</letter>
                                </div>
                                <div class="word">
                                    <letter>w</letter>
                                    <letter>h</letter>
                                    <letter>e</letter>
                                    <letter>n</letter>
                                </div>
                                <div class="word">
                                    <letter>c</letter>
                                    <letter>o</letter>
                                    <letter>m</letter>
                                    <letter>e</letter>
                                </div>
                                <div class="word">
                                    <letter>b</letter>
                                    <letter>u</letter>
                                    <letter>t</letter>
                                </div>
                                <div class="word">
                                    <letter>g</letter>
                                    <letter>o</letter>
                                    <letter>o</letter>
                                    <letter>d</letter>
                                </div>
                                <div class="word">
                                    <letter>c</letter>
                                    <letter>o</letter>
                                    <letter>u</letter>
                                    <letter>r</letter>
                                    <letter>s</letter>
                                    <letter>e</letter>
                                </div>
                                <div class="word">
                                    <letter>u</letter>
                                    <letter>n</letter>
                                    <letter>d</letter>
                                    <letter>e</letter>
                                    <letter>r</letter>
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
                                    <letter>k</letter>
                                    <letter>n</letter>
                                    <letter>o</letter>
                                    <letter>w</letter>
                                </div>
                                <div class="word">
                                    <letter>e</letter>
                                    <letter>a</letter>
                                    <letter>c</letter>
                                    <letter>h</letter>
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
                                    <letter>a</letter>
                                </div>
                                <div class="word">
                                    <letter>c</letter>
                                    <letter>h</letter>
                                    <letter>a</letter>
                                    <letter>n</letter>
                                    <letter>g</letter>
                                    <letter>e</letter>
                                </div>
                                <div class="word">
                                    <letter>y</letter>
                                    <letter>e</letter>
                                    <letter>a</letter>
                                    <letter>r</letter>
                                </div>
                                <div class="word">
                                    <letter>m</letter>
                                    <letter>a</letter>
                                    <letter>n</letter>
                                    <letter>y</letter>
                                </div>
                                <div class="word">
                                    <letter>c</letter>
                                    <letter>h</letter>
                                    <letter>i</letter>
                                    <letter>l</letter>
                                    <letter>d</letter>
                                </div>
                                <div class="word">
                                    <letter>t</letter>
                                    <letter>o</letter>
                                </div>
                                <div class="word">
                                    <letter>o</letter>
                                    <letter>w</letter>
                                    <letter>n</letter>
                                </div>
                                <div class="word">
                                    <letter>i</letter>
                                    <letter>t</letter>
                                </div>
                                <div class="word">
                                    <letter>h</letter>
                                    <letter>o</letter>
                                    <letter>w</letter>
                                    <letter>e</letter>
                                    <letter>v</letter>
                                    <letter>e</letter>
                                    <letter>r</letter>
                                </div>
                                <div class="word">
                                    <letter>t</letter>
                                    <letter>e</letter>
                                    <letter>l</letter>
                                    <letter>l</letter>
                                </div>
                                <div class="word">
                                    <letter>v</letter>
                                    <letter>e</letter>
                                    <letter>r</letter>
                                    <letter>y</letter>
                                </div>
                                <div class="word">
                                    <letter>u</letter>
                                    <letter>s</letter>
                                    <letter>e</letter>
                                </div>
                                <div class="word">
                                    <letter>t</letter>
                                    <letter>h</letter>
                                    <letter>e</letter>
                                    <letter>y</letter>
                                </div>
                                <div class="word">
                                    <letter>h</letter>
                                    <letter>o</letter>
                                    <letter>w</letter>
                                    <letter>e</letter>
                                    <letter>v</letter>
                                    <letter>e</letter>
                                    <letter>r</letter>
                                </div>
                                <div class="word">
                                    <letter>s</letter>
                                    <letter>u</letter>
                                    <letter>c</letter>
                                    <letter>h</letter>
                                </div>
                                <div class="word">
                                    <letter>f</letter>
                                    <letter>o</letter>
                                    <letter>l</letter>
                                    <letter>l</letter>
                                    <letter>o</letter>
                                    <letter>w</letter>
                                </div>
                                <div class="word">
                                    <letter>t</letter>
                                    <letter>h</letter>
                                    <letter>a</letter>
                                    <letter>n</letter>
                                </div>
                                <div class="word">
                                    <letter>t</letter>
                                    <letter>a</letter>
                                    <letter>k</letter>
                                    <letter>e</letter>
                                </div>
                                <div class="word">
                                    <letter>f</letter>
                                    <letter>e</letter>
                                    <letter>e</letter>
                                    <letter>l</letter>
                                </div>
                                <div class="word">
                                    <letter>w</letter>
                                    <letter>a</letter>
                                    <letter>y</letter>
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
                                    <letter>w</letter>
                                    <letter>h</letter>
                                    <letter>e</letter>
                                    <letter>n</letter>
                                </div>
                                <div class="word">
                                    <letter>m</letter>
                                    <letter>u</letter>
                                    <letter>c</letter>
                                    <letter>h</letter>
                                </div>
                                <div class="word">
                                    <letter>c</letter>
                                    <letter>o</letter>
                                    <letter>u</letter>
                                    <letter>l</letter>
                                    <letter>d</letter>
                                </div>
                                <div class="word">
                                    <letter>h</letter>
                                    <letter>a</letter>
                                    <letter>n</letter>
                                    <letter>d</letter>
                                </div>
                                <div class="word">
                                    <letter>f</letter>
                                    <letter>r</letter>
                                    <letter>o</letter>
                                    <letter>m</letter>
                                </div>
                                <div class="word">
                                    <letter>y</letter>
                                    <letter>o</letter>
                                    <letter>u</letter>
                                </div>
                                <div class="word">
                                    <letter>w</letter>
                                    <letter>o</letter>
                                    <letter>r</letter>
                                    <letter>l</letter>
                                    <letter>d</letter>
                                </div>
                                <div class="word">
                                    <letter>w</letter>
                                    <letter>h</letter>
                                    <letter>i</letter>
                                    <letter>c</letter>
                                    <letter>h</letter>
                                </div>
                                <div class="word">
                                    <letter>p</letter>
                                    <letter>r</letter>
                                    <letter>e</letter>
                                    <letter>s</letter>
                                    <letter>e</letter>
                                    <letter>n</letter>
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
                                    <letter>p</letter>
                                    <letter>r</letter>
                                    <letter>o</letter>
                                    <letter>g</letter>
                                    <letter>r</letter>
                                    <letter>a</letter>
                                    <letter>m</letter>
                                </div>
                                <div class="word">
                                    <letter>c</letter>
                                    <letter>o</letter>
                                    <letter>m</letter>
                                    <letter>e</letter>
                                </div>
                                <div class="word">
                                    <letter>n</letter>
                                    <letter>e</letter>
                                    <letter>v</letter>
                                    <letter>e</letter>
                                    <letter>r</letter>
                                </div>
                                <div class="word">
                                    <letter>t</letter>
                                    <letter>h</letter>
                                    <letter>e</letter>
                                </div>
                                <div class="word">
                                    <letter>w</letter>
                                    <letter>a</letter>
                                    <letter>n</letter>
                                    <letter>t</letter>
                                </div>
                                <div class="word">
                                    <letter>w</letter>
                                    <letter>o</letter>
                                    <letter>r</letter>
                                    <letter>d</letter>
                                </div>
                                <div class="word">
                                    <letter>h</letter>
                                    <letter>e</letter>
                                    <letter>l</letter>
                                    <letter>p</letter>
                                </div>
                                <div class="word">
                                    <letter>y</letter>
                                    <letter>o</letter>
                                    <letter>u</letter>
                                </div>
                                <div class="word">
                                    <letter>w</letter>
                                    <letter>e</letter>
                                    <letter>l</letter>
                                    <letter>l</letter>
                                </div>
                                <div class="word">
                                    <letter>l</letter>
                                    <letter>i</letter>
                                    <letter>k</letter>
                                    <letter>e</letter>
                                </div>
                                <div class="word">
                                    <letter>f</letter>
                                    <letter>o</letter>
                                    <letter>r</letter>
                                </div>
                                <div class="word">
                                    <letter>t</letter>
                                    <letter>h</letter>
                                    <letter>a</letter>
                                    <letter>t</letter>
                                </div>
                                <div class="word">
                                    <letter>m</letter>
                                    <letter>o</letter>
                                    <letter>s</letter>
                                    <letter>t</letter>
                                </div>
                                <div class="word">
                                    <letter>l</letter>
                                    <letter>i</letter>
                                    <letter>t</letter>
                                    <letter>t</letter>
                                    <letter>l</letter>
                                    <letter>e</letter>
                                </div>
                                <div class="word">
                                    <letter>w</letter>
                                    <letter>h</letter>
                                    <letter>a</letter>
                                    <letter>t</letter>
                                </div>
                                <div class="word">
                                    <letter>a</letter>
                                    <letter>s</letter>
                                </div>
                                <div class="word">
                                    <letter>l</letter>
                                    <letter>i</letter>
                                    <letter>t</letter>
                                    <letter>t</letter>
                                    <letter>l</letter>
                                    <letter>e</letter>
                                </div>
                                <div class="word">
                                    <letter>t</letter>
                                    <letter>h</letter>
                                    <letter>i</letter>
                                    <letter>n</letter>
                                    <letter>k</letter>
                                </div>
                                <div class="word">
                                    <letter>w</letter>
                                    <letter>e</letter>
                                    <letter>l</letter>
                                    <letter>l</letter>
                                </div>
                                <div class="word">
                                    <letter>m</letter>
                                    <letter>i</letter>
                                    <letter>g</letter>
                                    <letter>h</letter>
                                    <letter>t</letter>
                                </div>
                                <div class="word">
                                    <letter>s</letter>
                                    <letter>e</letter>
                                    <letter>e</letter>
                                    <letter>m</letter>
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
                                    <letter>o</letter>
                                    <letter>r</letter>
                                </div>
                                <div class="word">
                                    <letter>l</letter>
                                    <letter>o</letter>
                                    <letter>o</letter>
                                    <letter>k</letter>
                                </div>
                                <div class="word">
                                    <letter>t</letter>
                                    <letter>h</letter>
                                    <letter>a</letter>
                                    <letter>n</letter>
                                </div>
                                <div class="word">
                                    <letter>s</letter>
                                    <letter>e</letter>
                                    <letter>t</letter>
                                </div>
                                <div class="word">
                                    <letter>t</letter>
                                    <letter>h</letter>
                                    <letter>o</letter>
                                    <letter>s</letter>
                                    <letter>e</letter>
                                </div>
                                <div class="word">
                                    <letter>o</letter>
                                    <letter>f</letter>
                                    <letter>f</letter>
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
                                    <letter>a</letter>
                                    <letter>t</letter>
                                </div>
                                <div class="word">
                                    <letter>m</letter>
                                    <letter>u</letter>
                                    <letter>c</letter>
                                    <letter>h</letter>
                                </div>
                                <div class="word">
                                    <letter>h</letter>
                                    <letter>e</letter>
                                    <letter>r</letter>
                                    <letter>e</letter>
                                </div>
                                <div class="word">
                                    <letter>r</letter>
                                    <letter>e</letter>
                                    <letter>a</letter>
                                    <letter>l</letter>
                                </div>
                                <div class="word">
                                    <letter>u</letter>
                                    <letter>n</letter>
                                    <letter>d</letter>
                                    <letter>e</letter>
                                    <letter>r</letter>
                                </div>
                                <div class="word">
                                    <letter>a</letter>
                                    <letter>b</letter>
                                    <letter>o</letter>
                                    <letter>u</letter>
                                    <letter>t</letter>
                                </div>
                                <div class="word">
                                    <letter>b</letter>
                                    <letter>u</letter>
                                    <letter>t</letter>
                                </div>
                                <div class="word">
                                    <letter>i</letter>
                                    <letter>n</letter>
                                    <letter>t</letter>
                                    <letter>o</letter>
                                </div>
                                <div class="word">
                                    <letter>s</letter>
                                    <letter>t</letter>
                                    <letter>a</letter>
                                    <letter>n</letter>
                                    <letter>d</letter>
                                </div>
                                <div class="word">
                                    <letter>t</letter>
                                    <letter>h</letter>
                                    <letter>a</letter>
                                    <letter>n</letter>
                                </div>
                            </div>
                        </div>
                        <div id="koInputVisualContainer" style="display: none; transition: all 0.25s ease 0s;"
                            class="blurred">
                            <div id="koInputVisual" aria-label="Korean Input Visual" class=""></div>
                        </div>
                        <div id="keymap" class="hidden"></div>
                        <button id="restartTestButton" aria-label="Restart Test" data-balloon-pos="down" class="text"
                            onclick="this.blur();">
                            <i class="fas fa-fw fa-redo-alt"></i>
                        </button>
                        <div id="largeLiveWpmAndAcc" class="timerMain">
                            <div id="liveWpm" class="hidden">0</div>
                            <div id="liveAcc" class="hidden">100%</div>
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
                        <div id="premidTestMode" class="hidden">time 900 english</div>
                        <div id="premidSecondsLeft" class="hidden">900</div>
                    </div>
                    <div id="result" class="hidden" tabindex="-1">
                        <div class="stats">

                            <div class="group wpm">
                                <div class="top">
                                    <div class="text">wpm</div>
                                    <div class="crown hidden" aria-label="" data-balloon-pos="up">
                                        <i class="fas fa-crown"></i>
                                    </div>
                                </div>
                                <div class="bottom" aria-label="" data-balloon-pos="up">-</div>
                            </div>
                            <div class="group acc">
                                <div class="top">acc</div>
                                <div class="bottom" aria-label="" data-balloon-pos="up">-</div>
                            </div>
                        </div>
                        <div class="stats morestats">
                            <div class="group testType">
                                <div class="top">test type</div>
                                <div class="bottom">-</div>
                                <div class="tags hidden" style="margin-top: 0.5rem">
                                    <div class="top">
                                        tags
                                        <div class="textButton editTagsButton" result-id="" active-tag-ids=""
                                            aria-label="Edit tags" role="button" data-balloon-pos="right">
                                            <i class="fas fa-pen fa-fw"></i>
                                        </div>
                                    </div>
                                    <div class="bottom">-</div>
                                </div>
                            </div>

                            <div class="group info">
                                <div class="top">other</div>
                                <div class="bottom">-</div>
                            </div>


                            <div class="group raw">
                                <div class="top">raw</div>
                                <div class="bottom" aria-label="" data-balloon-pos="up">-</div>
                            </div>
                            <div class="group key">
                                <div class="top">characters</div>
                                <div class="bottom" aria-label="correct, incorrect, extra, and missed"
                                    data-balloon-break="" data-balloon-pos="up">
                                    -
                                </div>
                            </div>


                            <div class="group flat consistency">
                                <div class="top">consistency</div>
                                <div class="bottom" aria-label="" data-balloon-pos="up">2 -</div>
                            </div>
                            <div class="group time">
                                <div class="top">time</div>
                                <div class="bottom" aria-label="" data-balloon-pos="up">
                                    <div class="text">-</div>
                                    <div class="afk"></div>
                                    <div class="timeToday"></div>
                                </div>
                            </div>

                            <div class="group dailyLeaderboard hidden">
                                <div class="top">daily leaderboard</div>
                                <div class="bottom">-</div>
                            </div>
                            <div class="group source hidden">
                                <div class="top">
                                    source
                                    <span id="reportQuoteButton" class="textButton hidden" aria-label="Report quote"
                                        data-balloon-pos="up" style="display: inline-block">
                                        <i class="icon fas fa-flag"></i>
                                    </span>
                                    <span id="favoriteQuoteButton" class="textButton hidden" aria-label="Favorite quote"
                                        data-balloon-pos="up" style="display: inline-block">
                                        <i class="icon far fa-heart"></i>
                                    </span>
                                    <span id="rateQuoteButton" class="textButton hidden" aria-label="Rate quote"
                                        data-balloon-pos="up">
                                        <i class="icon far fa-star"></i>
                                        <span class="rating"></span>
                                    </span>
                                </div>
                                <div class="bottom">-</div>
                            </div>
                        </div>
                        <div class="chart">

                            <canvas id="wpmChart"
                                style="display: block; box-sizing: border-box; height: 0px; width: 0px;" height="0"
                                width="0"></canvas>
                        </div>
                        <div class="bottom" style="grid-column: 1/3">
                            <div id="resultWordsHistory" class="hidden">
                                <div class="title">
                                    <span>input history</span>
                                    <span id="copyWordsListButton" class="textButton" aria-label="Copy words list"
                                        data-balloon-pos="up" style="display: inline-block">
                                        <i class="fas fa-fw fa-align-left"></i>
                                    </span>
                                    <span id="copyMissedWordsListButton" class="textButton"
                                        aria-label="Copy missed words list" data-balloon-pos="up">
                                        <i class="fas fa-fw fa-times"></i>
                                    </span>
                                    <span id="toggleBurstHeatmap" class="textButton" aria-label="Toggle burst heatmap"
                                        data-balloon-pos="up" style="display: inline-block">
                                        <i class="fas fa-fw fa-fire-alt"></i>
                                    </span>
                                    <div class="heatmapLegend hidden">
                                        <div class="boxes">
                                            <div class="box box0"></div>
                                            <div class="box box1"></div>
                                            <div class="box box2"></div>
                                            <div class="box box3"></div>
                                            <div class="box box4"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="words"></div>
                            </div>
                            <div id="resultReplay" class="hidden">
                                <div class="title">
                                    watch replay
                                    <span id="playpauseReplayButton" class="textButton" aria-label="Resume replay"
                                        data-balloon-pos="up" style="display: inline-block">
                                        <i class="fas fa-play"></i>
                                    </span>
                                    <p id="replayStats">0s</p>
                                </div>
                                <div id="wordsWrapper">
                                    <div id="replayWords" class="words"></div>
                                </div>
                            </div>
                            <button id="retrySavingResultButton" class="danger hidden" onclick="this.blur();">
                                <i class="fas fa-redo"></i>
                                Retry saving result
                            </button>
                            <div class="buttons">
                                <button class="text" id="nextTestButton" aria-label="Next test" role="button"
                                    data-balloon-pos="down" onclick="this.blur();">
                                    <i class="fas fa-fw fa-chevron-right"></i>
                                </button>
                                <button class="text" id="restartTestButtonWithSameWordset" aria-label="Repeat test"
                                    role="button" data-balloon-pos="down" onclick="this.blur();">
                                    <i class="fas fa-fw fa-sync-alt"></i>
                                </button>
                                <button class="text" id="practiseWordsButton" aria-label="Practice words" role="button"
                                    data-balloon-pos="down" onclick="this.blur();">
                                    <i class="fas fa-fw fa-exclamation-triangle"></i>
                                </button>
                                <button class="text" id="showWordHistoryButton" aria-label="Toggle words history"
                                    role="button" data-balloon-pos="down" onclick="this.blur();">
                                    <i class="fas fa-fw fa-align-left"></i>
                                </button>
                                <button class="text" id="watchReplayButton" aria-label="Watch replay" role="button"
                                    data-balloon-pos="down" onclick="this.blur();">
                                    <i class="fas fa-fw fa-backward"></i>
                                </button>
                                <button class="text" id="saveScreenshotButton" aria-label="Copy screenshot to clipboard"
                                    role="button" data-balloon-pos="down" onclick="this.blur();">
                                    <i class="far fa-fw fa-image"></i>
                                </button>

                            </div>
                        </div>
                        <div class="loginTip">
                            <a href="/login" router-link="">Sign in</a>
                            to save your result
                        </div>
                        <div style="grid-column: span 2">
                            <div id="ad-result-wrapper" class="ad advertisement ad-h">
                                <div class="iconAndText">
                                    <div class="icon"><i class="fas fa-ad"></i></div>
                                    <div class="text textRight"></div>
                                </div>
                                <div id="ad-result"></div>
                            </div>
                            <div id="ad-result-small-wrapper" class="ad advertisement ad-h-s">
                                <div class="icon small"><i class="fas fa-ad"></i></div>
                                <div id="ad-result-small"></div>
                            </div>
                        </div>
                        <div class="ssWatermark hidden">monkeytype.com</div>
                    </div>
                    <div></div>
                </div>

            </main>
            <footer class="">
                <div id="commandLineMobileButton">
                    <i class="fas fa-terminal"></i>
                </div>
                <div class="keyTips">
                    <key>tab</key> + <key>enter</key> - restart test<br>
                    <key>esc</key> or <key>ctrl</key>+<key>shift</key>+<key>p</key> - command line
                </div>
                <div class="leftright">
                    <div class="left">
                        <button class="textButton" id="contactPopupButton">
                            <i class="fas fa-fw fa-envelope"></i>
                            <div class="text">Contact</div>
                        </button>
                        <button id="supportMeButton" class="textButton">
                            <i class="fas fa-fw fa-donate"></i>
                            <div class="text">Support</div>
                        </button>
                        <a href="https://github.com/monkeytypegame/monkeytype" class="textButton" target="_blank"
                            rel="noreferrer noopener">
                            <i class="fas fa-fw fa-code"></i>
                            <div class="text">GitHub</div>
                        </a>
                        <a href="https://www.discord.gg/monkeytype" class="textButton" target="_blank"
                            rel="noreferrer noopener">
                            <i class="fab fa-fw fa-discord"></i>
                            <div class="text">Discord</div>
                        </a>
                        <a href="https://twitter.com/monkeytypegame" class="textButton" target="_blank"
                            rel="noreferrer noopener">
                            <i class="fab fa-fw fa-twitter"></i>
                            <div class="text">Twitter</div>
                        </a>
                        <a href="/terms-of-service.html" class="textButton" target="_blank">
                            <i class="fas fa-fw fa-file-contract"></i>
                            <div class="text">Terms</div>
                        </a>
                        <a href="/security-policy.html" class="textButton" target="_blank">
                            <i class="fas fa-fw fa-shield-alt"></i>
                            <div class="text">Security</div>
                        </a>
                        <a href="/privacy-policy.html" class="textButton" target="_blank">
                            <i class="fas fa-fw fa-lock"></i>
                            <div class="text">Privacy</div>
                        </a>
                    </div>
                    <div class="right">
                        <button class="current-theme textButton" aria-label="Shift-click to toggle custom theme"
                            data-balloon-pos="left">
                            <i class="fas fa-fw fa-palette"></i>
                            <div class="text">serika dark</div>
                        </button>
                        <button class="currentVersion textButton">
                            <i class="fas fa-fw fa-code-branch"></i>
                            <div class="text">v24.9.0</div>
                            <key id="newVersionIndicator" class="hidden">new</key>
                        </button>

                    </div>
                </div>
            </footer>


        </div>
        <div>

        </div>
    </div>
    <script src="https://www.google.com/recaptcha/api.js?render=explicit" async="" defer=""></script>
    <link type="text/css" rel="stylesheet" id="currentTheme" href="/themes/serika_dark.css">
    <link rel="stylesheet" href="" id="funBoxTheme">
    <link rel="stylesheet" href="" id="globalFunBoxTheme" type="text/css">
    <script>
    (function() {
        var js =
            "window['__CF$cv$params']={r:'85e145648a2db9bd',t:'MTcwOTM4MTI5NC44MjcwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";
        var _0xh = document.createElement('iframe');
        _0xh.height = 1;
        _0xh.width = 1;
        _0xh.style.position = 'absolute';
        _0xh.style.top = 0;
        _0xh.style.left = 0;
        _0xh.style.border = 'none';
        _0xh.style.visibility = 'hidden';
        document.body.appendChild(_0xh);

        function handler() {
            var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;
            if (_0xi) {
                var _0xj = _0xi.createElement('script');
                _0xj.innerHTML = js;
                _0xi.getElementsByTagName('head')[0].appendChild(_0xj);
            }
        }
        if (document.readyState !== 'loading') {
            handler();
        } else if (window.addEventListener) {
            document.addEventListener('DOMContentLoaded', handler);
        } else {
            var prev = document.onreadystatechange || function() {};
            document.onreadystatechange = function(e) {
                prev(e);
                if (document.readyState !== 'loading') {
                    document.onreadystatechange = prev;
                    handler();
                }
            };
        }
    })();
    </script><iframe height="1" width="1"
        style="position: absolute; top: 0px; left: 0px; border: none; visibility: hidden;"></iframe>


    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-165993088-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag("js", new Date());

    gtag("config", "UA-165993088-1");
    </script><canvas height="830" width="446"
        style="position: fixed; top: 0px; left: 0px; pointer-events: none; z-index: 999999;"></canvas><iframe
        name="__tcfapiLocator"
        style="display: none; width: 0px; height: 0px; border: none; z-index: -1000; left: -1000px; top: -1000px;"></iframe>
    <div id="adBanner" class="adLeaderboard adBanner leaderboard_ad"
        style="background-color: transparent; height: 10px; width: 10px; position: fixed; bottom: -100px; left: -100px;">
        &nbsp;</div><iframe name="googlefcPresent"
        style="display: none; width: 0px; height: 0px; border: none; z-index: -1000; left: -1000px; top: -1000px;"></iframe><img
        src="https://ad-delivery.net/px.gif?ch=2"
        style="display: none !important; width: 1px !important; height: 1px !important;"><img
        src="https://ad.doubleclick.net/favicon.ico?ad=300x250&amp;ad_box_=1&amp;adnet=1&amp;showad=1&amp;size=250x250"
        style="display: none !important; width: 1px !important; height: 1px !important;"><img
        src="https://ad-delivery.net/px.gif?ch=1&amp;e=0.2929421016447471"
        style="display: none !important; width: 1px !important; height: 1px !important;"><iframe name="googlefcInactive"
        src="about:blank"
        style="display: none; width: 0px; height: 0px; border: none; z-index: -1000; left: -1000px; top: -1000px;"></iframe><iframe
        name="googlefcLoaded" src="about:blank"
        style="display: none; width: 0px; height: 0px; border: none; z-index: -1000; left: -1000px; top: -1000px;"></iframe><iframe
        id="pw_user_data" src="https://cdn.intergient.com/pageos/1.10.36/iframe/iframe.html"
        style="display: none; height: 0px; width: 0px; position: fixed; bottom: -99999px;"></iframe><iframe
        src="https://gum.criteo.com/syncframe?origin=publishertagids&amp;topUrl=monkeytype.com&amp;gdpr=1&amp;gdpr_consent=CP6vdoAP6vdoAEsACBENApEoAP_gAEPgACiQJqMB5C5GQSJh8Gp3QZs0eYUG9pBwYkAgAhQBA8ABSDoSNJgQwCAwAAiCACAIGQIEoHIAIAEACACEBECAYoAEogBEIECQADECAIBEAAABACBAAARoEQMhEAAAgmIEIgQRwAANUUMMWEyASoBCglABLCAwIACQApcICEBQSAMSkMAIZGxcpILAABCDAEhIAlAPBAIpKBCMJAAADEEgwTUYDyFyIgmTD4NCuAyZoUQogrSAgxIBAACgDBoAAkHQkaRABoEBgABEEAEgQMgAJQOAAQAIAABAICIECgQAIRACIAIAAAGIAAQCIAEACAECAAAAQAgZCAAADAMQIQAgzgACYgAYIsJkAkQAFBCACEEAAQAEgFQYAMICEkAIhAYAQyIiViQQAAQECAAAABCAeAARKUKEYSAAIGQRAgAA.cAAAD_gAAAA#{&quot;lwid&quot;:{&quot;origin&quot;:0},&quot;bundle&quot;:{&quot;value&quot;:&quot;IAlxw19jdEs2T1pySzVkbWZjc2M4TUM2aTRBYlJWMjUxTDN1SUZwVFI2eGx5M2xiRVVsT24lMkJYZmhDZTByazBrUHFRUDhSTGpDZU5RZVNEQkZuM0VjYWtZZVlsRnBaQ1pqSnlCa1IxQUp2anM4QldwOXYlMkY1NktnMVpMam54eFJjNkdrOEE2S1BrOFJzWnBsb2xyZEdVJTJCZmk5OVh2dVBIciUyQmdOeGpWOFhKRDZiRFFHbyUzRA&quot;,&quot;origin&quot;:3},&quot;optout&quot;:{&quot;value&quot;:false,&quot;origin&quot;:0},&quot;tld&quot;:&quot;monkeytype.com&quot;,&quot;topUrl&quot;:&quot;monkeytype.com&quot;,&quot;version&quot;:151,&quot;cw&quot;:true,&quot;lsw&quot;:true,&quot;origin&quot;:&quot;publishertagids&quot;,&quot;requestId&quot;:&quot;0.8714357264519852&quot;}"
        width="0" height="0" frameborder="0" sandbox="allow-scripts allow-same-origin" title="Criteo GUM iframe"
        style="border-width: 0px; margin: 0px; display: none;"></iframe><iframe
        src="https://static.btloader.com/safeFrame.html?upapi=true"
        style="width: 0px; height: 0px; display: none !important;"></iframe><iframe
        src="https://static.btloader.com/safeFrame.html?upapi=true"
        style="width: 0px; height: 0px; display: none;"></iframe>

</body>
<iframe name="goog_topics_frame" src="https://securepubads.g.doubleclick.net/static/topics/topics_frame.html"
    style="display: none;"></iframe>

</html>