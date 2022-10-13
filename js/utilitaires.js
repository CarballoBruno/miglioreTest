function remplacementDesEspace(motOuPhrase) {
    let maVar = motOuPhrase;
    maVar = maVar.replaceAll(" ", "");
    return maVar
}

function comptezUniquementChiffrePositif(monTabl) {
    let maVar = monTabl;
    let resultat = 0;
    for (let index = 0; index < maVar.length; index = index + 1){
        if (maVar[index] > 0) {
            resultat = resultat + maVar[index]
        } else {
            resultat = resultat
        }
    }
    return resultat;
}
