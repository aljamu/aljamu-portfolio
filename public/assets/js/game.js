// // Faktor für die Darstellung 
// // 2 passt zu einer Canvas-Größe von 720x200 Pixel
// var fak = 2.5;

// // Speicher für die Anzeige zweidimensional 36x8
// var memory = [];

// // Initialisierung der Zeichenfläche
// function initCanvas() {
//     // auf die Canvaszeichenfläche zugreifen (ID="anzeige")
//     var c = document.getElementById("anzeige");
//     // den Speicher auf 0 setzen (alles leer)
//     for (var l = 0; l < 36; l++)
//         memory[l] = [0, 0, 0, 0, 0, 0, 0, 0];

//     // einen 2D-Context für den Zugriff auf die Zeichenfläche generieren lassen
//     var ctx = c.getContext("2d");
//     // Zeichenfläche leeren
//     ctx.clearRect(1, 1, c.width - 1, c.height - 1);

//     ctx.lineWidth = 1;
//     ctx.strokeStyle = "#555555";
//     ctx.beginPath();
//     // die linke vertikale Linie zeichnen
//     ctx.moveTo(fak * 10, fak * 5);
//     ctx.lineTo(fak * 10, fak * 95);
//     ctx.stroke();
//     // Die restlichen vertikalen Linien zeichnen
//     for (var l = 1; l <= 6 * 6; l++) {
//         ctx.beginPath();
//         // jede 6. vertikale Linie etwas länger zeichnen
//         if (l % 6 === 0) {
//             ctx.strokeStyle = "#555555";
//             ctx.moveTo(fak * 10 + fak * 10 * l, fak * 5);
//             ctx.lineTo(fak * 10 + fak * 10 * l, fak * 95);
//         } else {
//             ctx.strokeStyle = "#aaaaaa";
//             ctx.moveTo(fak * 10 + fak * 10 * l, fak * 10);
//             ctx.lineTo(fak * 10 + fak * 10 * l, fak * 90);
//         }
//         ctx.stroke();
//     }

//     // 9 horizontale Linien zeichnen
//     for (var k = 0; k < 9; k++) {
//         ctx.beginPath();
//         ctx.moveTo(fak * 10, fak * 10 + fak * 10 * k);
//         ctx.lineTo(fak * 6 * 10 * 6 + 20, fak * 10 + fak * 10 * k);
//         ctx.stroke();
//     }
// }

// // Zeichne einen "Punkt" an die Stelle x,y 
// // x: 1..36, y: 1..8
// // val = 0   => grau
// // val = 1   => schwarz
// // val = 2   => rot 
// function dot(x, y, val) {
//     // Speicher aktualisieren
//     memory[x - 1][y - 1] = val;
//     var c = document.getElementById("anzeige");
//     var ctx = c.getContext("2d");
//     switch (val) {
//         case 0:
//             ctx.fillStyle = "#f0f0f0"; // 0 = grau
//             break;
//         case 1:
//             ctx.fillStyle = "#000000"; // 1 = Schwarz
//             break;
//         case 2:
//             ctx.fillStyle = "#FF0000"; // 2 = Rot
//             break;

//     }

//     x = Math.round(x);
//     if (x < 1 || x > 36 || y < 1 || y > 8) {
//         return;
//     }
//     y = Math.round(y);
//     ctx.fillRect(fak * 10 + (x - 1) * fak * 10 + 1, fak * 10 + (y - 1) * fak * 10 + 1, fak * 10 - 2, fak * 10 - 2);
// }

// // Test, ob an der Stelle x,y ein Punkt gesetzt ist
// // Rückgabewert: true oder false
// function isDot(x, y) {
//     if (memory[x - 1][y - 1] != 0) return true;
//     return false;
// }

// // Setzen einer Zahl (value:0...255) in einen Bildschirmspeicher mem: 1...36
// // Die binäre Darstellung entspricht dann der entsprechenden Spalte
// function setMemory(mem, value) {
//     var myBin = value.toString(2);
//     if (myBin.length > 8)
//         myBin = myBin.substring(myBin.length - 8, myBin.length);
//     while (myBin.length < 8)
//         myBin = "0" + myBin;
//     for (var l = 0; l < 8; l++) {
//         dot(mem, l + 1, parseInt(myBin[l]));
//     }
// }

// // Abfrage des Wertes eines Bildschirmspeichers 
// // mem: 1...36
// // Rückgabewert: 0..255
// function getMemory(mem) {
//     var wert = 0;
//     for (var l = 0; l < 8; l++) {
//         wert += memory[mem - 1][l] == 1 ? Math.pow(2, 7 - l) : 0;
//     }
//     // console.log(memory[mem-1]+"->"+wert);
//     return wert;
// }
