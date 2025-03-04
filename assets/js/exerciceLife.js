const words =
  "in one good real one not school set they state high life consider on and not come what also for set point can want as while with of order child about school thing never hold find order each too between program work end you home place around while place problem end begin interest while public or where see time those increase interest be give end think seem small as both another a child same eye you between way do who into again good fact than under very head become real possible some write know however late each that with because that place nation only for each change form consider we would interest with world so order or run more open that large write turn never over open each over change still old take hold need give by consider line only leave while what set up number part form want against great problem can because head so first this here would course become help year first end want both fact public long word down also long for without new turn against the because write seem line interest call not if line thing what work people way may old consider leave hold want life between most place may if go who need fact such".split(
    " "
  );
const wordsCount = words.length;
let life = document.getElementById("lifeNumber").value;
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
function gameStarter() {
  life = document.getElementById("lifeNumber").value;
  if (life <= 0 || life == null){
    document.getElementById("life_option").style.visibility = "visible";
    document.getElementById("life_0").style.display ="block";
    gameStarter()
  } else{
    updateLife();
    document.getElementById("life_option").style.display = "none";
    newGame(life);
  }
}

function incrementLife() {
  life--;
  updateLife();
}

function decrementLife() {
  life--;
  updateLife();
}

function updateLife() {
  console.log(life);
  document.getElementById("life_changer").innerHTML = life;
  if (life <= 0) {
    gameOver();
  }
}

function newGame(life) {
  console.log(life);
  document.getElementById("words").innerHTML = "";
  for (i = 0; i < 200; i++) {
    document.getElementById("words").innerHTML += formatWord(randomWord());
  }
  addClass(document.querySelector(".word"), "current");
  addClass(document.querySelector(".letter"), "current");
  document.getElementById("cursor").style.display = "none"; // Make the cursor appear
  if (life <= 0) {
    gameOver();
  }
}

function gameOver() {
  addClass(document.getElementById("game"), "over");
  document.getElementById("cursor").style.display = "none";
}

// Refresh button
document.getElementById("refresh").addEventListener("click", () => {
  window.location.reload(true);
});

document.getElementById("game").addEventListener("keyup", (ev) => {
  const key = ev.key;
  const currentWord = document.querySelector(".word.current");
  const currentLetter = document.querySelector(".letter.current");
  const expected = currentLetter?.innerHTML || " ";
  console.log("expected = " + expected);
  const isLetter = key.length === 1 && key !== " ";
  const isSpace = key === " ";
  const isBackspace = key === "Backspace";
  const isFirstLetter = currentLetter === currentWord.firstChild;

  if (document.querySelector("#game.over")) {
    return;
  }

  if (isLetter) {
    document.getElementById("cursor").style.display = "block";
    if (currentLetter) {
      const isCorrect = key === expected;
      console.log("currentLetter = " + currentLetter);
      console.log(isCorrect);
      addClass(currentLetter, isCorrect ? "correct" : "incorrect");
      console.log(currentLetter);
      removeClass(currentLetter, "current");
      if (currentLetter.nextSibling) {
        addClass(currentLetter.nextSibling, "current");
      }
      if (!isCorrect) {
        decrementLife();
      }
    } else {
      const incorrectLetter = document.createElement("span");
      incorrectLetter.innerHTML = key;
      incorrectLetter.className = "letter incorrect extra";
      currentWord.appendChild(incorrectLetter);
      decrementLife();
    }
  }

  else if (isSpace) {
    if (expected !== " ") {
      const letterToInvalidate = [
        ...document.querySelectorAll(".word.current .letter:not(.correct)"),
      ];
      letterToInvalidate.forEach((letter) => {
        addClass(letter, "incorrect");
      });
      decrementLife();
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

  else if (isBackspace) {
    if (currentLetter && isFirstLetter && currentWord.previousSibling) {
      // make previous word current, last letter current
      removeClass(currentWord, "current");
      addClass(currentWord.previousSibling, "current");
      removeClass(currentLetter, "current");
      addClass(currentWord.previousSibling.lastChild, "current");
      removeClass(currentWord.previousSibling.lastChild, "incorrect");
      removeClass(currentWord.previousSibling.lastChild, "correct");
    }
    else if (currentLetter && !isFirstLetter) {
      // move back one letter, invalidate letter
      removeClass(currentLetter, "current");
      addClass(currentLetter.previousSibling, "current");
      removeClass(currentLetter.previousSibling, "incorrect");
      removeClass(currentLetter.previousSibling, "correct");
    }
    else if (!currentLetter) {
      if (!currentWord.lastChild.classList.contains("extra")) {
        addClass(currentWord.lastChild, "current");
        removeClass(currentWord.lastChild, "incorrect");
        removeClass(currentWord.lastChild, "correct");
      }
      else{
        currentWord.lastChild.remove();        
      }

    }
  }

  else if (currentLetter.getBoundingClientRect().top > 440) {
    // move lines / words
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