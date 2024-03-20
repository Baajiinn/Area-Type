const words =
  "in one good real one not school set they state high life consider on and not come what also for set point can want as while with of order child about school thing never hold find order each too between program work end you home place around while place problem end begin interest while public or where see time those increase interest be give end think seem small as both another a child same eye you between way do who into again good fact than under very head become real possible some write know however late each that with because that place nation only for each change form consider we would interest with world so order or run more open that large write turn never over open each over change still old take hold need give by consider line only leave while what set up number part form want against great problem can because head so first this here would course become help year first end want both fact public long word down also long for without new turn against the because write seem line interest call not if line thing what work people way may old consider leave hold want life between most place may if go who need fact such".split(
    " "
  );
const wordsCount = words.length;
window.timer = null;
window.gameStart = null;
let gameTime = 30 * 1000;

let intervalId; // Declare a variable to store the interval ID

async function updateGameTime(value) {
  clearInterval(intervalId); // Clear the interval if it exists
  gameTime = parseInt(value) * 1000;
  newGame();
  document.getElementById("info").innerHTML = gameTime / 1000 + ""; // Adjust the delay time if needed
  // Start the timer and store the interval ID
  intervalId = setInterval(function () {
    // Update the game time here
  }, gameTime);
}

document.getElementById("timeFixed30").addEventListener("click", () => {
  clearInterval(intervalId); // Clear the interval when the button is clicked
  updateGameTime(30);
});

document.getElementById("timeFixed60").addEventListener("click", () => {
  clearInterval(intervalId); // Clear the interval when the button is clicked
  updateGameTime(60);
});

document.getElementById("timeFixed120").addEventListener("click", () => {
  clearInterval(intervalId); // Clear the interval when the button is clicked
  updateGameTime(120);
});

document.getElementById("timeFixed").addEventListener("click", () => {
  clearInterval(intervalId); // Clear the interval when the button is clicked
  const customTime = document.getElementById("timeChoice").value;
  if (customTime !== "") {
    updateGameTime(customTime);
  }
});
function addClass(el, name) {
  el.className += " " + name;
}

function removeClass(el, name) {
  el.className = el.className.replace(name, "");
}

function randomWord() {
  const randomIndex = Math.ceil(Math.random() * wordsCount);
  return words[randomIndex - 1];
}

function formatWord(word) {
  return `<div class="word"><span class="letter">${word
    .split("")
    .join("</span><span class='letter'>")}</span></div>`;
}
function newGame() {
  clearInterval(intervalId);
  document.getElementById("words").innerHTML = "";
  for (i = 0; i < 200; i++) {
    document.getElementById("words").innerHTML += formatWord(randomWord());
  }
  addClass(document.querySelector(".word"), "current");
  addClass(document.querySelector(".letter"), "current");
  document.getElementById("info").innerHTML = gameTime / 1000 + "";
  window.timer = null;
  document.getElementById("cursor").style.display = "none";
}

async function updateTimer() {
  const currentTime = new Date().getTime();
  const msPassed = currentTime - window.gameStart;
  const sPassed = Math.round(msPassed / 1000);
  const sLeft = gameTime / 1000 - sPassed;

  if (sLeft <= 0) {
    gameOver();
    return;
  }

  document.getElementById("info").innerHTML = sLeft + "";
  requestAnimationFrame(updateTimer);
}

function gameOver() {
  clearInterval(window.timer);
  addClass(document.getElementById("game"), "over");
  const result = getWpm();
  document.getElementById("info").innerHTML = `WPM : ${getWpm()}`;
  document.getElementById("cursor").style.display = "none";
}

function getWpm() {
  const words = [...document.querySelectorAll(".word")];
  const lastTypedWord = document.querySelector(".word.current");
  const lastTypedWordIndex = words.indexOf(lastTypedWord);
  const typedWords = words.slice(0, lastTypedWordIndex);
  const correctWords = typedWords.filter((word) => {
    const letter = [...word.children];
    const incorrectLetters = letter.filter((letter) =>
      letter.className.includes("incorrect")
    );
    const correctLetters = letter.filter((letter) =>
      letter.className.includes("correct")
    );
    return (
      incorrectLetters.length === 0 && correctLetters.length === letter.length
    );
  });
  return (correctWords.length / gameTime) * 60000;
}

// HIDING TIMER
// Hide the timer when a button is clicked
document.getElementById("timeFixed30").addEventListener("click", () => {
  document.getElementById("info").style.display = "none";
  updateGameTime(30);
});

document.getElementById("timeFixed60").addEventListener("click", () => {
  document.getElementById("info").style.display = "none";
  updateGameTime(60);
});

document.getElementById("timeFixed120").addEventListener("click", () => {
  document.getElementById("info").style.display = "none";
  updateGameTime(120);
});

document.getElementById("timeFixed").addEventListener("click", () => {
  document.getElementById("info").style.display = "none";
  const customTime = document.getElementById("timeChoice").value;
  if (customTime !== "") {
    updateGameTime(customTime);
  }
});

// Show the timer when the user starts typing
document.getElementById("game").addEventListener("keyup", (ev) => {
  const tab_b = document.getElementById("time-b");
  document.getElementById("info").style.display = ""; // Reset the display property
  tab_b.style.position = "relative";
  tab_b.style.transition = "0.3s";
  tab_b.style.transform = "translateY(1px)";
  // Rest of your keyup event handler...
});

// Refresh button
document.getElementById("refresh").addEventListener("click", () => {
  window.location.reload(true);
});

document.getElementById("game").addEventListener("keyup", (ev) => {
  const key = ev.key;
  const currentWord = document.querySelector(".word.current");
  const currentLetter = document.querySelector(".letter.current");
  const expected = currentLetter?.innerHTML || " ";
  const isLetter = key.length === 1 && key !== " ";
  const isSpace = key === " ";
  const isBackspace = key === "Backspace";
  const isFirstLetter = currentLetter === currentWord.firstChild;

  if (document.querySelector("#game.over")) {
    return;
  }

  if (!window.timer && isLetter) {
    window.timer = true;
    window.gameStart = new Date().getTime();
    document.getElementById("cursor").style.display = "block";
    updateTimer();
  }

  if (isLetter) {
    if (currentLetter) {
      addClass(currentLetter, key === expected ? "correct" : "incorrect");
      removeClass(currentLetter, "current");
      if (currentLetter.nextSibling) {
        addClass(currentLetter.nextSibling, "current");
      }
    } else {
      const incorrectLetter = document.createElement("span");
      incorrectLetter.innerHTML = key;
      incorrectLetter.className = "letter incorrect extra";
      currentWord.appendChild(incorrectLetter);
    }
  }

  if (isSpace) {
    if (expected !== " ") {
      const letterToInvalidate = [
        ...document.querySelectorAll(".word.current .letter:not(.correct)"),
      ];
      letterToInvalidate.forEach((letter) => {
        addClass(letter, "incorrect");
      });
    }
    removeClass(currentWord, "current");
    addClass(currentWord.nextSibling, "current");
    if (currentLetter) {
      removeClass(currentLetter, "current");
    }
    addClass(currentWord.nextSibling.firstChild, "current");
    const nextLetter = document.querySelector(".word.current .letter");
    const nextWord = document.querySelector(".word.current");
    const cursor = document.getElementById("cursor");
    cursor.style.top =
      (nextLetter || nextWord || isSpace || isBackspace).getBoundingClientRect()
        .top +
      4 +
      "px";
    cursor.style.left =
      (nextLetter || nextWord || isSpace || isBackspace).getBoundingClientRect()
        .left + "px";
  }

  if (isBackspace) {
    if (currentLetter && isFirstLetter && currentWord.previousSibling) {
      // make previous word current, last letter current
      removeClass(currentWord, "current");
      addClass(currentWord.previousSibling, "current");
      removeClass(currentLetter, "current");
      addClass(currentWord.previousSibling.lastChild, "current");
      removeClass(currentWord.previousSibling.lastChild, "incorrect");
      removeClass(currentWord.previousSibling.lastChild, "correct");
    }
    if (currentLetter && !isFirstLetter) {
      // move back one letter, invalidate letter
      removeClass(currentLetter, "current");
      addClass(currentLetter.previousSibling, "current");
      removeClass(currentLetter.previousSibling, "incorrect");
      removeClass(currentLetter.previousSibling, "correct");
    }
    if (!currentLetter) {
      addClass(currentWord.lastChild, "current");
      removeClass(currentWord.lastChild, "incorrect");
      removeClass(currentWord.lastChild, "correct");
    }
  }

  // move lines / words
  if (currentLetter.getBoundingClientRect().top > 440) {
    const words = document.getElementById("words");
    const margin = parseInt(words.style.marginTop || "0px");
    words.style.marginTop = margin - 35 + "px";
  }

  // cursor movement
  const nextLetter = document.querySelector(".letter.current");
  const nextWord = document.querySelector(".word.current");
  const cursor = document.getElementById("cursor");
  cursor.style.top =
    (nextLetter || nextWord || isSpace || isBackspace).getBoundingClientRect()
      .top +
    4 +
    "px";
  cursor.style.left =
    (nextLetter || nextWord || isSpace || isBackspace).getBoundingClientRect()[
      nextLetter ? "left" : "right"
    ] + "px";
});

newGame();
