// récupération des element
const minWrapperTens = document.getElementById('min-ten');
const minWrapperOne = document.getElementById('min-one');
const secWrapperTens = document.getElementById('sec-ten');
const secWrapperOne = document.getElementById('sec-one');
const hunWrapperTens = document.getElementById('hun-ten');
const hunWrapperOne = document.getElementById('hun-one');

// récupération des minutes
const min = parseInt(document.getElementById('min').outerText);

// initialisation des delay
const delay = ms => new Promise(res => setTimeout(res, ms));

// arrêt les animations
const pauseMin = async (d) => {
    await delay(d);
    minWrapperTens.style.animation = 'none';
    minWrapperTens.offsetHeight;
    await delay(540000);
    minWrapperOne.style.animation = 'none';
    minWrapperOne.offsetHeight;
    await delay(50000);
    secWrapperTens.style.animation = 'none';
    secWrapperTens.offsetHeight;
    await delay(9000);
    secWrapperOne.style.animation = 'none';
    secWrapperOne.offsetHeight;
    await delay(900);
    hunWrapperTens.style.animation = 'none';
    hunWrapperTens.offsetHeight;
    await delay(90);
    hunWrapperOne.style.animation = 'none';
    hunWrapperOne.offsetHeight;
}

// préparation des fin d'animations
if (min === 10) {
    pauseMin(0);
} else if (min === 20) {
    pauseMin(1200000);
} else if (min === 30) {
    pauseMin(1800000);
} else if (min === 40) {
    pauseMin(2400000);
} else if (min === 50) {
    pauseMin(3000000);
} else if (min === 60) {
    pauseMin(3600000);
}