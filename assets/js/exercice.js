document.addEventListener('DOMContentLoaded', function () {
    const texteNonTape = document.getElementById('texteNonTape').textContent.trim();
    const sequenceAttendue = texteNonTape.replace(/\s+/g, ' '); // Remplace les espaces blancs multiples par un seul

    document.getElementById('zoneDeTexte').addEventListener('keydown', function (event) {
        comparerFrappeUtilisateur();
    });

    function comparerFrappeUtilisateur() {
        const frappeUtilisateur = document.getElementById('zoneDeTexte').value;

        if (frappeUtilisateur === sequenceAttendue) {
            // La frappe est correcte, prendre des mesures appropriées
            arreterChronometre();
        } else {
            // La frappe est incorrecte, prendre des mesures appropriées
        }
    }

    let tempsDebut;

    function demarrerChronometre() {
        tempsDebut = new Date().getTime();
    }

    function arreterChronometre() {
        const tempsFin = new Date().getTime();
        const tempsTotal = (tempsFin - tempsDebut) / 1000; // convertir en secondes

        const vitesseFrappe = (sequenceAttendue.length / tempsTotal).toFixed(2);
        console.log('Vitesse de frappe : ' + vitesseFrappe + ' caractères par seconde');
    }
});
