// JS 05

// let nom = prompt("Entrez votre nom", "");
// let prenom = prompt("Entrez votre prenom", "");
// let sex = confirm("Etes-vous un homme?");

// if (sex === true) {
//     alert('Bonjour Monsieur ' + nom + ' ' + prenom + ' \n Bienvenue sur notre site web!');
// } else {
//     alert(`Bonjour Madame ${nom} ${prenom} \n Bienvenue sur notre site web!`);
// }

//============================================================================
// // JS 06

// let a = '100';
// let b = 100;
// let c = 1.00;
// let d = true;

// alert("Ceci est une chaîne de caractères " + a);
// b--;
// alert(b);
// // alert(parseInt(a) + c);
// alert(Number(a) + c);
// alert(!d);

//============================================================================
// JS 07 Ex1 'Parité'

// let nomb = prompt('Entrez un nomber!', '');
// if (nomb % 2 == 0) {
//     alert('nombre pair');
// } else {
//     alert('nomber impair');
// }

//============================================================================
// JS 07 Ex2 ' Age'

// let year = prompt('Vous êtes de quelle année?', '')
// let age = 2021 - year;
// if (age >= 18) {
//     alert('Votre age est ' + age + '\n Vous êtes majeur');
// } else {
//     alert('Votre age est ' + age + '\n Vous êtes mineur');
// }
// Une forme 'ternaire':
// (age >= 18) ? alert('Votre age est ' + age + '\n Vous êtes majeur'): alert('Votre age est ' + age + '\n Vous êtes mineur');

//============================================================================
// JS Ex3 'Calculette'

// let num1 = +prompt('Saisissez un premier nombre entier!', '');
// let num2 = +prompt('Saisissez un deuxième nombre entier!', '');
// let oper = prompt('Saisissez un opérateur +, -, * ou / ', '');
// let result;

// switch (oper) {
//     case '+':
//         result = num1 + num2;
//         alert('résultat est ' + result);
//         break;
//     case '-':
//         result = num1 - num2;
//         alert('résultat est ' + result);
//         break;
//     case '*':
//         result = num1 * num2;
//         alert('résultat est ' + result);
//         break;
//     case '/':
//         result = num1 / num2;
//         alert('résultat est ' + result);
//         break;
//     default:
//         alert('Vous avez saisi une erreur');
//         break;
// }

// Une autre manière:
// if (oper === '+') {
//     result = num1 + num2;
//     alert('résultat est ' + result);
// } else if (oper === '-') {
//     result = num1 - num2;
//     alert('résultat est ' + result);
// } else if (oper === '*') {
//     result = num1 * num2;
//     alert('résultat est ' + result);
// } else if (oper === '/') {
//     result = num1 / num2;
//     alert('résultat est ' + result);
// } else {
//     alert('Vous avez saisi une erreur');
// }

// while (true) {
//     let prenom = prompt('Saissisez votre prénom', '');

//     if (!prenom) break;
// }
// console.log(`Vous avez saisi ${length.prenom} prénoms: \n ${prenom}`)

//============================================================================
//JS 08: Les boucles, Ex1 - Saisie

// let i = 0;
// let prenom;
// let result = "";
// let boucle = true;
// while (boucle) {
//     i++;
//     prenom = prompt(`Saissisez le prénom N° ${i} \n ou Clic sur Annuler pour arrêter le saisie.`, '');
//     result += prenom + "\n";
//     if (!prenom) break;
// }
// console.log(`Vous avez saisi ${i} prénoms: \n ${result}`)

//============================================================================
// JS 08: Les boucles, Ex2 - Entiers inférieurs à N

// let num = prompt('Saissisez un nombre!', '')
// let i = 1;
// let result = '';
// while (i < num) {
//     result += i + ', ';
//     i++;
// }
// alert(`Les nombres inférieurs: \n ${result}`)

//============================================================================
// JS 08: Les boucles, Ex3 - Moyenne

// let i = 0;
// let num;
// let sum = 0;
// let ma = 0;
// while (num != 0) {
//     i++;
//     num = +prompt('Saissisez un entier!', '');
//     sum += num;
//     ma = sum / (i - 1);
// }
// alert(`La somme est: ${sum} \n La moyenne arithmétique est: ${ma}`);

//============================================================================
// JS 08: Les boucles, Ex4 - Multiples

// let n = +prompt('Entrez un nombre de premiers multiples!', '');
// let x = +prompt('Entrez un nombre entier!', '');

// for (i = 1; i <= n; i++) {
//     document.write(`${i} x ${x} = ${i * x}<br>`);
// }


//============================================================================
// JS 08: Les boucles, Ex5 - Nombre de voyelles

// let word = prompt('Saissisez un mot!', '');
// let letters = word.split('');
// let voyels = ['a', 'e', 'y', 'u', 'i', 'o', 'é', 'è', 'à', 'ù', 'â', 'ê', 'ô', 'û', 'î'];
// let count = 0;
// for (let i = 0; i < letters.length; i++) {
//     if (voyels.includes(letters[i])) {
//         count++
//     }
// };
// alert(`'${word}' comprend ${count} voyelles`);


//============================================================================
// JS 09: Fonctions, Ex1

// let num = +prompt('Entrez un nombre');
// let mult = +prompt('Entrez un multiplicateur');

// function papilon() {
//     document.write('<img src="papillon.jpg"><br>' +
//         `Le cube de ${num} est égal à ${num**3} <br>` +
//         `Le produit de ${num} x ${mult} est égal à ${num*mult}`)
// }
// papilon();


//============================================================================
// JS 09: Fonctions, Ex2 - String Token

// let str1 = prompt("Entrez votre liste de mot séparée par votre séparateur préféré");
// let str2 = prompt("Entrez le séparateur de votre liste de mot");
// let arr = str1.split(str2);
// let n = +prompt("Entrez le nième (nombre) mot à éxtraire");

// // Verification 'n' pas plus grand que le nombre d'item dans str1. 
// while (n <= 0 || n > arr.length) {
//     n = +prompt("Valeur invalide, entrez le nième (nombre) mot à éxtraire");
// }
// alert(`Le mot que vous avez choisi est : ${arr[(n-1)]}`);


//============================================================================
// JS 10: Tableaux, Ex1

// let size = +prompt('Saissisez la taille du tableau!', '');

// const arr = [];
// for (let i = 0; i < size; i++) {
//     let data = prompt('Saissisez les données!', '');
//     arr.push(data);
// }

// alert(`Votre tableau: [${arr}]`)


//============================================================================
// JS 13: Objets_Natifs

let num;
let sum = 0;
let ma = 0;
let i = 0;
while (num != 0) {
    i++;
    num = +prompt('Saissisez un entier!', '');
    sum += num;
    ma = sum / (i - 1);
}
alert(`Vous avez saisi ${i-1} valeurs \nLa somme est: ${sum} \nLa moyenne arithmétique est: ${ma}`);