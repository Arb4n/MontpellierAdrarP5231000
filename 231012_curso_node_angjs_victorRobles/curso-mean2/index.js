// 4.13.1 : CREATION de
// >>
// index.js

// 4.13.2 : 
// >>
// 'user strict'
// pour pouvoir intégrer les nouvelles instructions de js
//  ↓           ↓
'user strict'

// 4.13.3 : charger le module de mongodb
// ↓           ↓
let mongoose = require('mongoose');

// 4.13.4 : faire la connection à mongodb:
// // ↓           ↓
mongoose.connect('mongodb://localhost:27017/curso_mean2', (err, res) => {
    if (err) {
        throw err;
    } else {
        console.log("Tkt, la base de données s'est lancée en toute sérénité");
    }
});
// NB>>>> mot-clé "throw" = utilisé pour générer une exception/ erreur, qui peut être
// capturée et gérée plus tard dans le code << <NB
// OU >>>
//     mongoose.connect('mongodb://localhost:27017/curso_mean2', (err, res) => {
//         try {
//             if (err) {
//                 throw err;
//             } else {
//                 console.log("la base de données s'est correctement lancée");
//             }
//         } catch (error) {
//             console.error("Une erreur s'est produite : ", error);
//         }
//     });
// <<<OU
// COMMENT UTILISER LA FONCTION ? → nodemon ; aller à : package.json (l.7)
// >>> ajouter une commande start : 
// >> 
//     "scripts" : {
//     "start": "nodemon index.js",
//             ...
    
// }