const a = 1
const b = 15
const c = 9

/**Si les trois variables sont égales, affiche "Les trois variables sont identiques" dans la console */
if (a === b && a === c && b === c){
    console.log("Les trois variables sont identiques")
}

/**Si seulement deux des variables sont égales, affiche "Deux des variables sont identiques" dans la console */
else if (a === b || a === c || b === c){
    console.log("Deux des variables sont identiques")

}

/**Si les variables sont toutes différentes, affiche "toutes les variables sont différentes" dans la console */
else{
    console.log("Toutes les variables sont différentes")
}