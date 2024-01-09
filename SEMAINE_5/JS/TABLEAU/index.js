const monsters = ["Nargacuga", "Rathalos", "Uragaan", "Kushala Daora"]; // Array of monsters
console.log(monsters); // Monsters are: Nargacuga, Rathalos, Uragaan, Kushala Daora
console.log(monsters.length); // 4
console.log(monsters[0]); // Nargacuga
console.log(monsters[1]); // Rathalos
console.log(monsters[2]); // Uragaan
console.log(monsters[3]); // Kushala Daora

monsters.unshift("Deviljho"); // Add Deviljho to the beginning of the array
console.log(monsters); // Monsters are: Deviljho, Nargacuga, Rathalos

monsters.push("Yian Garuga"); // Add Yian Garuga to the end of the array
console.log(monsters); // Monsters are: Deviljho, Nargacuga, Rathalos, Yian Garuga

monsters.pop(); // Remove the last element of the array
console.log(monsters); // Monsters are: Deviljho, Nargacuga, Rathalos

monsters.shift(); // Remove the first element of the array
console.log(monsters); // Monsters are: Nargacuga, Rathalos
