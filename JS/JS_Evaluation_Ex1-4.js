//Exercice 1 : Calcul du nombre de jeunes, de moyens et de vieux
// let age = 0;
// const inf20 = [];
// const sup40 = [];
// const entre = [];

// while (age < 101) {
//     age = +prompt('Entrez un âge svp!', '');
//     if (age > 0 && age < 20) {
//         inf20.push(age);
//     }
//     if (age > 40 && age < 100) {
//         sup40.push(age);
//     }
//     if (age >= 20 && age <= 40) {
//         entre.push(age);
//     }
//     if (age == 100) {
//         sup40.push(age);
//         break;
//     }
// }
// document.write(`${inf20.length} personnes d'âge inférieur à 20 ans <br>
//         ${sup40.length} personnes d'âge supérieur à 40 ans <br>
//         ${entre.length} personnes d'âge entre 20 ans et 40 ans y compris`)
//================================================================================================

//Exercice 2 : Table de multiplication

// let num = +prompt('Entrez un paramètre svp!', '');
// for (let i = 1; i <= 10; i++) {
//     document.write(`${i}x${num}=${i*num}<br>`);
// }
//================================================================================================

// Exercice 3 : recherche d'un prénom

// let tab = ["Audrey", "Aurélien", "Flavien", "Jérémy", "Laurent", "Melik", "Nouara", "Salem", "Samuel", "Stéphane"];
// let name = prompt('Saisissez un prénom svp!', '');
// if (tab.includes(name)) {
//     tab.splice(tab.indexOf(name), 1);
//     document.write(tab);
//     console.log('ok');
// } else {
//     alert('erreur');
// }
//================================================================================================

//Exercice 4 : total d'une commande
let price = +prompt('Saisissez le prix svp!', '');
let amount = +prompt('Saisissez la quantité svp!', '');
let tot = price * amount;
let pdp;
let result;

if (tot >= 100 && tot <= 200) {
    pdp = tot * 0.95;
} else if (tot > 200) {
    pdp = tot * 0.9;
} else {
    pdp = tot;
}

if (pdp > 500) {
    result = pdp;
} else {
    result = pdp * 1.02;
}

if (pdp * 0.02 < 6) {
    result = pdp + 6;
}
document.write(`à payer ${result.toFixed(2)} €`);