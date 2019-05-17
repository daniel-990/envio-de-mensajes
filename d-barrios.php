<?php
header('Access-Control-Allow-Origin: *');
/**para evitar el bloqueo de cors para origenes desconocidos */
header('Content-Type: application/json');

$datos = '{
  "barrios": [
    {
      "barrio": "elegir",
      "tarifa": ""
    },
    {
      "barrio": "Popular Nº 1",
      "tarifa": "7000"
    },
    {
      "barrio": "Popular Nº 2",
      "tarifa": "7000"
    },
    {
      "barrio": "Santo Domingo Savio Nº 1",
      "tarifa": "7000"
    },
    {
      "barrio": "Santo Domingo Savio Nº 2",
      "tarifa": "7000"
    },
    {
      "barrio": "Granizal",
      "tarifa": "7000"
    },
    {
      "barrio": "Moscú Nº 2",
      "tarifa": "7000"
    },
    {
      "barrio": "Villa Guadalupe",
      "tarifa": "7000"
    },
    {
      "barrio": "San Pablo",
      "tarifa": "7000"
    },
    {
      "barrio": "Aldea Pablo VI",
      "tarifa": "7000"
    },
    {
      "barrio": "La Esperanza Nº 2",
      "tarifa": "7000"
    },
    {
      "barrio": "El Compromiso",
      "tarifa": "7000"
    },
    {
      "barrio": "La Avanzada",
      "tarifa": "7000"
    },
    {
      "barrio": "Carpinelo",
      "tarifa": "7000"
    },
    {
      "barrio": "Santa Cruz",
      "tarifa": "7000"
    },
    {
      "barrio": "La Isla",
      "tarifa": "7000"
    },
    {
      "barrio": "El Playón de Los Comuneros",
      "tarifa": "7000"
    },
    {
      "barrio": "Pablo VI",
      "tarifa": "7000"
    },
    {
      "barrio": "La Frontera",
      "tarifa": "7000"
    },
    {
      "barrio": "La Francia",
      "tarifa": "7000"
    },
    {
      "barrio": "Andalucía",
      "tarifa": "7000"
    },
    {
      "barrio": "Villa del Socorro",
      "tarifa": "7000"
    },
    {
      "barrio": "Villa Niza",
      "tarifa": "7000"
    },
    {
      "barrio": "Moscú Nº 1",
      "tarifa": "7000"
    },
    {
      "barrio": "La Rosa",
      "tarifa": "7000"
    },
    {
      "barrio": "La Salle",
      "tarifa": "7000"
    },
    {
      "barrio": "Las Granjas",
      "tarifa": "7000"
    },
    {
      "barrio": "Campo Valdes Nº 2",
      "tarifa": "7000"
    },
    {
      "barrio": "Santa Inés",
      "tarifa": "7000"
    },
    {
      "barrio": "El Raizal",
      "tarifa": "7000"
    },
    {
      "barrio": "El Pomar",
      "tarifa": "7000"
    },
    {
      "barrio": "Manrique Central Nº 2",
      "tarifa": "7000"
    },
    {
      "barrio": "Manrique Oriental",
      "tarifa": "7000"
    },
    {
      "barrio": "Versalles Nº 1",
      "tarifa": "7000"
    },
    {
      "barrio": "Versalles Nº 2",
      "tarifa": "7000"
    },
    {
      "barrio": "La Cruz",
      "tarifa": "7000"
    },
    {
      "barrio": "La Honda",
      "tarifa": "7000"
    },
    {
      "barrio": "Oriente",
      "tarifa": "7000"
    },
    {
      "barrio": "Maria Cano - Carambolas",
      "tarifa": "7000"
    },
    {
      "barrio": "San José La Cima Nº 1",
      "tarifa": "7000"
    },
    {
      "barrio": "San José La Cima Nº 2",
      "tarifa": "7000"
    },
    {
      "barrio": "Aranjuez",
      "tarifa": "7000"
    },
    {
      "barrio": "Berlín",
      "tarifa": "7000"
    },
    {
      "barrio": "San Isidro",
      "tarifa": "7000"
    },
    {
      "barrio": "Palermo",
      "tarifa": "7000"
    },
    {
      "barrio": "Bermejal - Los Álamos",
      "tarifa": "7000"
    },
    {
      "barrio": "Moravia",
      "tarifa": "7000"
    },
    {
      "barrio": "Sevilla",
      "tarifa": "7000"
    },
    {
      "barrio": "San Pedro",
      "tarifa": "7000"
    },
    {
      "barrio": "Manrique Central Nº 1",
      "tarifa": "7000"
    },
    {
      "barrio": "Campo Valdes Nº 1",
      "tarifa": "7000"
    },
    {
      "barrio": "Las Esmeraldas",
      "tarifa": "7000"
    },
    {
      "barrio": "La Piñuela",
      "tarifa": "7000"
    },
    {
      "barrio": "Brasilia",
      "tarifa": "7000"
    },
    {
      "barrio": "Miranda",
      "tarifa": "7000"
    },
    {
      "barrio": "Castilla",
      "tarifa": "7000"
    },
    {
      "barrio": "Toscana",
      "tarifa": "7000"
    },
    {
      "barrio": "Héctor Abad Gómez",
      "tarifa": "7000"
    },
    {
      "barrio": "La Paralela",
      "tarifa": "7000"
    },
    {
      "barrio": "Las Brisas",
      "tarifa": "7000"
    },
    {
      "barrio": "Florencia",
      "tarifa": "7000"
    },
    {
      "barrio": "Tejelo",
      "tarifa": "7000"
    },
    {
      "barrio": "Boyacá",
      "tarifa": "7000"
    },
    {
      "barrio": "Belalcazar",
      "tarifa": "7000"
    },
    {
      "barrio": "Girardot",
      "tarifa": "7000"
    },
    {
      "barrio": "Tricentenario",
      "tarifa": "7000"
    },
    {
      "barrio": "Francisco Antonio Zea",
      "tarifa": "7000"
    },
    {
      "barrio": "Alfonso López",
      "tarifa": "7000"
    },
    {
      "barrio": "Caribe",
      "tarifa": "7000"
    },
    {
      "barrio": "El Progreso",
      "tarifa": "7000"
    },
    {
      "barrio": "Doce de Octubre Nº 1",
      "tarifa": "7000"
    },
    {
      "barrio": "Doce de Octubre Nº 2",
      "tarifa": "7000"
    },
    {
      "barrio": "Santander",
      "tarifa": "7000"
    },
    {
      "barrio": "Pedregal",
      "tarifa": "7000"
    },
    {
      "barrio": "La Esperanza",
      "tarifa": "7000"
    },
    {
      "barrio": "San Martín de Porres",
      "tarifa": "7000"
    },
    {
      "barrio": "Kennedy",
      "tarifa": "7000"
    },
    {
      "barrio": "Picacho",
      "tarifa": "7000"
    },
    {
      "barrio": "Picachito",
      "tarifa": "7000"
    },
    {
      "barrio": "Mirador del Doce",
      "tarifa": "7000"
    },
    {
      "barrio": "El Progreso Nº 2",
      "tarifa": "7000"
    },
    {
      "barrio": "El Triunfo",
      "tarifa": "7000"
    },
    {
      "barrio": "Robledo",
      "tarifa": "7000"
    },
    {
      "barrio": "El Volador",
      "tarifa": "7000"
    },
    {
      "barrio": "San Germán",
      "tarifa": "7000"
    },
    {
      "barrio": "Barrio Facultad de Minas",
      "tarifa": "7000"
    },
    {
      "barrio": "La Pilarica",
      "tarifa": "7000"
    },
    {
      "barrio": "Bosques de San Pablo",
      "tarifa": "7000"
    },
    {
      "barrio": "Altamira",
      "tarifa": "7000"
    },
    {
      "barrio": "Córdoba",
      "tarifa": "7000"
    },
    {
      "barrio": "López de Mesa",
      "tarifa": "7000"
    },
    {
      "barrio": "El Diamante",
      "tarifa": "7000"
    },
    {
      "barrio": "Aures Nº 1",
      "tarifa": "7000"
    },
    {
      "barrio": "Aures Nº 2",
      "tarifa": "7000"
    },
    {
      "barrio": "Bello Horizonte",
      "tarifa": "7000"
    },
    {
      "barrio": "Villa Flora",
      "tarifa": "7000"
    },
    {
      "barrio": "Palenque",
      "tarifa": "7000"
    },
    {
      "barrio": "Cucaracho",
      "tarifa": "7000"
    },
    {
      "barrio": "Fuente Clara",
      "tarifa": "7000"
    },
    {
      "barrio": "Santa Margarita",
      "tarifa": "7000"
    },
    {
      "barrio": "Olaya Herrera",
      "tarifa": "7000"
    },
    {
      "barrio": "Pajarito",
      "tarifa": "7000"
    },
    {
      "barrio": "Monteclaro",
      "tarifa": "7000"
    },
    {
      "barrio": "Villa de La Iguaná",
      "tarifa": "7000"
    },
    {
      "barrio": "La Cuchilla",
      "tarifa": "7000"
    },
    {
      "barrio": "La Aurora",
      "tarifa": "7000"
    },
    {
      "barrio": "Villa Hermosa",
      "tarifa": "7000"
    },
    {
      "barrio": "La Mansión",
      "tarifa": "7000"
    },
    {
      "barrio": "San Miguel",
      "tarifa": "7000"
    },
    {
      "barrio": "La Ladera",
      "tarifa": "7000"
    },
    {
      "barrio": "Golondrinas",
      "tarifa": "7000"
    },
    {
      "barrio": "Batallón Girardot",
      "tarifa": "7000"
    },
    {
      "barrio": "Llanaditas",
      "tarifa": "7000"
    },
    {
      "barrio": "Los Mangos",
      "tarifa": "7000"
    },
    {
      "barrio": "Enciso",
      "tarifa": "7000"
    },
    {
      "barrio": "Sucre",
      "tarifa": "7000"
    },
    {
      "barrio": "El Pinal",
      "tarifa": "7000"
    },
    {
      "barrio": "Trece de Noviembre",
      "tarifa": "7000"
    },
    {
      "barrio": "La Libertad",
      "tarifa": "7000"
    },
    {
      "barrio": "Villatina",
      "tarifa": "7000"
    },
    {
      "barrio": "San Antonio",
      "tarifa": "7000"
    },
    {
      "barrio": "Las Estancias",
      "tarifa": "7000"
    },
    {
      "barrio": "Villa Turbay",
      "tarifa": "7000"
    },
    {
      "barrio": "La Sierra",
      "tarifa": "7000"
    },
    {
      "barrio": "Villa Lilliam",
      "tarifa": "7000"
    },
    {
      "barrio": "Esfuerzos de Paz Nº 1",
      "tarifa": "7000"
    },
    {
      "barrio": "Esfuerzos de Paz Nº 2",
      "tarifa": "7000"
    },
    {
      "barrio": "Buenos Aires",
      "tarifa": "7000"
    },
    {
      "barrio": "Caicedo",
      "tarifa": "7000"
    },
    {
      "barrio": "Juan Pablo II",
      "tarifa": "7000"
    },
    {
      "barrio": "Ocho de Marzo",
      "tarifa": "7000"
    },
    {
      "barrio": "Barrios de Jesús",
      "tarifa": "7000"
    },
    {
      "barrio": "Bomboná Nº 2",
      "tarifa": "7000"
    },
    {
      "barrio": "Los Cerros - El Vergel",
      "tarifa": "7000"
    },
    {
      "barrio": "Alejandro Echavarría",
      "tarifa": "7000"
    },
    {
      "barrio": "Miraflores",
      "tarifa": "7000"
    },
    {
      "barrio": "Cataluña",
      "tarifa": "7000"
    },
    {
      "barrio": "La Milagrosa",
      "tarifa": "7000"
    },
    {
      "barrio": "Gerona",
      "tarifa": "7000"
    },
    {
      "barrio": "El Salvador",
      "tarifa": "7000"
    },
    {
      "barrio": "Loreto",
      "tarifa": "7000"
    },
    {
      "barrio": "Asomadera Nº 1",
      "tarifa": "7000"
    },
    {
      "barrio": "Asomadera Nº 2",
      "tarifa": "7000"
    },
    {
      "barrio": "Asomadera Nº 3",
      "tarifa": "7000"
    },
    {
      "barrio": "Quinta Linda",
      "tarifa": "7000"
    },
    {
      "barrio": "Barrio Pablo Escobar",
      "tarifa": "7000"
    },
    {
      "barrio": "La Candelaria",
      "tarifa": "7000"
    },
    {
      "barrio": "Prado",
      "tarifa": "7000"
    },
    {
      "barrio": "Jesús Nazareno",
      "tarifa": "7000"
    },
    {
      "barrio": "El Chagualo",
      "tarifa": "7000"
    },
    {
      "barrio": "Estación Villa",
      "tarifa": "7000"
    },
    {
      "barrio": "San Benito",
      "tarifa": "7000"
    },
    {
      "barrio": "Guayaquil",
      "tarifa": "7000"
    },
    {
      "barrio": "Corazón de Jesús - Barrio Triste",
      "tarifa": "7000"
    },
    {
      "barrio": "Calle Nueva",
      "tarifa": "7000"
    },
    {
      "barrio": "Perpetuo Socorro",
      "tarifa": "7000"
    },
    {
      "barrio": "Barrio Colón",
      "tarifa": "7000"
    },
    {
      "barrio": "Las Palmas",
      "tarifa": "7000"
    },
    {
      "barrio": "Bomboná Nº 1",
      "tarifa": "7000"
    },
    {
      "barrio": "Boston",
      "tarifa": "7000"
    },
    {
      "barrio": "Los Ángeles",
      "tarifa": "7000"
    },
    {
      "barrio": "Villa Nueva",
      "tarifa": "7000"
    },
    {
      "barrio": "San Diego",
      "tarifa": "7000"
    },
    {
      "barrio": "Los Conquistadores",
      "tarifa": "7000"
    },
    {
      "barrio": "Laureles",
      "tarifa": "7000"
    },
    {
      "barrio": "Carlos E. Restrepo",
      "tarifa": "7000"
    },
    {
      "barrio": "Suramericana",
      "tarifa": "7000"
    },
    {
      "barrio": "Naranjal",
      "tarifa": "7000"
    },
    {
      "barrio": "San Joaquín",
      "tarifa": "7000"
    },
    {
      "barrio": "Bolivariana",
      "tarifa": "7000"
    },
    {
      "barrio": "Las Acacias",
      "tarifa": "7000"
    },
    {
      "barrio": "La Castellana",
      "tarifa": "7000"
    },
    {
      "barrio": "Lorena",
      "tarifa": "7000"
    },
    {
      "barrio": "El Velódromo",
      "tarifa": "7000"
    },
    {
      "barrio": "Estadio",
      "tarifa": "7000"
    },
    {
      "barrio": "Los Colores",
      "tarifa": "7000"
    },
    {
      "barrio": "Cuarta Brigada",
      "tarifa": "7000"
    },
    {
      "barrio": "Florida Nueva",
      "tarifa": "7000"
    },
    {
      "barrio": "La América",
      "tarifa": "7000"
    },
    {
      "barrio": "Ferrini",
      "tarifa": "7000"
    },
    {
      "barrio": "Calasanz",
      "tarifa": "7000"
    },
    {
      "barrio": "Los Pinos",
      "tarifa": "7000"
    },
    {
      "barrio": "La Floresta",
      "tarifa": "7000"
    },
    {
      "barrio": "Santa Lucía",
      "tarifa": "7000"
    },
    {
      "barrio": "El Danubio",
      "tarifa": "7000"
    },
    {
      "barrio": "Campo Alegre",
      "tarifa": "7000"
    },
    {
      "barrio": "Santa Mónica",
      "tarifa": "7000"
    },
    {
      "barrio": "Barrio Cristóbal",
      "tarifa": "7000"
    },
    {
      "barrio": "Simón Bolívar",
      "tarifa": "7000"
    },
    {
      "barrio": "Santa Teresita",
      "tarifa": "7000"
    },
    {
      "barrio": "Calasanz Parte Alta",
      "tarifa": "7000"
    },
    {
      "barrio": "San Javier Nº 1",
      "tarifa": "7000"
    },
    {
      "barrio": "San Javier Nº 2",
      "tarifa": "7000"
    },
    {
      "barrio": "El Pesebre",
      "tarifa": "7000"
    },
    {
      "barrio": "Blanquizal",
      "tarifa": "7000"
    },
    {
      "barrio": "Santa Rosa de Lima",
      "tarifa": "7000"
    },
    {
      "barrio": "Los Alcázares",
      "tarifa": "7000"
    },
    {
      "barrio": "Metropolitano",
      "tarifa": "7000"
    },
    {
      "barrio": "La Pradera",
      "tarifa": "7000"
    },
    {
      "barrio": "Juan XXIII",
      "tarifa": "7000"
    },
    {
      "barrio": "La Divisa",
      "tarifa": "7000"
    },
    {
      "barrio": "Veinte de Julio",
      "tarifa": "7000"
    },
    {
      "barrio": "Belencito",
      "tarifa": "7000"
    },
    {
      "barrio": "Betania",
      "tarifa": "7000"
    },
    {
      "barrio": "El Corazón",
      "tarifa": "7000"
    },
    {
      "barrio": "Las Independencias",
      "tarifa": "7000"
    },
    {
      "barrio": "Nuevos Conquistadores",
      "tarifa": "7000"
    },
    {
      "barrio": "El Salado",
      "tarifa": "7000"
    },
    {
      "barrio": "Eduardo Santos",
      "tarifa": "7000"
    },
    {
      "barrio": "Peñitas",
      "tarifa": "7000"
    },
    {
      "barrio": "Antonio Nariño",
      "tarifa": "7000"
    },
    {
      "barrio": "El Socorro",
      "tarifa": "7000"
    },
    {
      "barrio": "Calasania",
      "tarifa": "7000"
    },
    {
      "barrio": "Castropol",
      "tarifa": "7000"
    },
    {
      "barrio": "Barrio Colombia",
      "tarifa": "7000"
    },
    {
      "barrio": "Villa Carlota",
      "tarifa": "7000"
    },
    {
      "barrio": "Lalinde",
      "tarifa": "7000"
    },
    {
      "barrio": "Manila",
      "tarifa": "7000"
    },
    {
      "barrio": "Las Lomas Nº 1",
      "tarifa": "7000"
    },
    {
      "barrio": "Las Lomas Nº 2",
      "tarifa": "7000"
    },
    {
      "barrio": "Altos del Poblado",
      "tarifa": "7000"
    },
    {
      "barrio": "El Tesoro",
      "tarifa": "7000"
    },
    {
      "barrio": "Los Naranjos",
      "tarifa": "7000"
    },
    {
      "barrio": "Los Balsos Nº 1",
      "tarifa": "7000"
    },
    {
      "barrio": "Los Balsos Nº 2",
      "tarifa": "7000"
    },
    {
      "barrio": "San Lucas",
      "tarifa": "7000"
    },
    {
      "barrio": "El Diamante",
      "tarifa": "7000"
    },
    {
      "barrio": "El Castillo",
      "tarifa": "7000"
    },
    {
      "barrio": "Alejandría",
      "tarifa": "7000"
    },
    {
      "barrio": "La Florida",
      "tarifa": "7000"
    },
    {
      "barrio": "El Poblado",
      "tarifa": "7000"
    },
    {
      "barrio": "Astorga",
      "tarifa": "7000"
    },
    {
      "barrio": "Patio Bonito",
      "tarifa": "7000"
    },
    {
      "barrio": "La Aguacatala",
      "tarifa": "7000"
    },
    {
      "barrio": "Santa María de Los Ángeles",
      "tarifa": "7000"
    },
    {
      "barrio": "Tenche",
      "tarifa": "7000"
    },
    {
      "barrio": "Trinidad",
      "tarifa": "7000"
    },
    {
      "barrio": "Santa Fe",
      "tarifa": "7000"
    },
    {
      "barrio": "Campo Amor",
      "tarifa": "7000"
    },
    {
      "barrio": "Cristo Rey",
      "tarifa": "7000"
    },
    {
      "barrio": "Guayabal",
      "tarifa": "7000"
    },
    {
      "barrio": "La Colina",
      "tarifa": "7000"
    },
    {
      "barrio": "Belén",
      "tarifa": "7000"
    },
    {
      "barrio": "Cerro Nutibara",
      "tarifa": "7000"
    },
    {
      "barrio": "Fátima",
      "tarifa": "7000"
    },
    {
      "barrio": "Rosales",
      "tarifa": "7000"
    },
    {
      "barrio": "Granada",
      "tarifa": "7000"
    },
    {
      "barrio": "San Bernardo",
      "tarifa": "7000"
    },
    {
      "barrio": "Las Playas",
      "tarifa": "7000"
    },
    {
      "barrio": "Diego Echavarria",
      "tarifa": "7000"
    },
    {
      "barrio": "La Mota",
      "tarifa": "7000"
    },
    {
      "barrio": "El Rincón",
      "tarifa": "7000"
    },
    {
      "barrio": "La Hondonada",
      "tarifa": "7000"
    },
    {
      "barrio": "La Loma de Los Bernal",
      "tarifa": "7000"
    },
    {
      "barrio": "La Gloria",
      "tarifa": "7000"
    },
    {
      "barrio": "Altavista",
      "tarifa": "7000"
    },
    {
      "barrio": "La Palma",
      "tarifa": "7000"
    },
    {
      "barrio": "Zafra",
      "tarifa": "7000"
    },
    {
      "barrio": "Los Alpes",
      "tarifa": "7000"
    },
    {
      "barrio": "Las Violetas",
      "tarifa": "7000"
    },
    {
      "barrio": "Las Mercedes",
      "tarifa": "7000"
    },
    {
      "barrio": "Nueva Villa de Aburrá",
      "tarifa": "7000"
    },
    {
      "barrio": "Miravalle",
      "tarifa": "7000"
    },
    {
      "barrio": "El Nogal - Los Almendros",
      "tarifa": "7000"
    },
    {
      "barrio": "Envigado y Sabaneta",
      "tarifa": "8000"
    },
    {
      "barrio": "Bello",
      "tarifa": "9000"
    },
    {
      "barrio": "La Estrella y Caldas",
      "tarifa": "10000"
    },
    {
      "barrio": "Girardota",
      "tarifa": "15000"
    },
    {
      "barrio": "Rionegro",
      "tarifa": "25000"
    }
  ],
  "ciudades": [
    {
      "ciudad":"elegir",
      "tarifa":""
    },
    {
      "ciudad":"Armenia",
      "tarifa":"10000"
    },
    {
      "ciudad":"Barrancabermeja",
      "tarifa":"10000"
    },
    {
      "ciudad":"Barranquilla",
      "tarifa":"10000"
    },
    {
      "ciudad":"Bogotá",
      "tarifa":"10000"
    },
    {
      "ciudad":"Bucaramanga",
      "tarifa":"10000"
    },
    {
      "ciudad":"Buga",
      "tarifa":"10000"
    },
    {
      "ciudad":"Cali",
      "tarifa":"10000"
    },
    {
      "ciudad":"Cartagena",
      "tarifa":"10000"
    },
    {
      "ciudad":"Chía",
      "tarifa":"10000"
    },
    {
      "ciudad":"Cúcuta",
      "tarifa":"10000"
    },
    {
      "ciudad":"Duitama",
      "tarifa":"10000"
    },
    {
      "ciudad":"Florencia",
      "tarifa":"10000"
    },
    {
      "ciudad":"Fusagasugá",
      "tarifa":"10000"
    },
    {
      "ciudad":"Girardot",
      "tarifa":"10000"
    },
    {
      "ciudad":"Honda",
      "tarifa":"10000"
    },
    {
      "ciudad":"Ibagué",
      "tarifa":"10000"
    },
    {
      "ciudad":"Ipiales",
      "tarifa":"10000"
    },
    {
      "ciudad":"Jamundí",
      "tarifa":"10000"
    },
    {
      "ciudad":"Leticia",
      "tarifa":"10000"
    },
    {
      "ciudad":"Manizales",
      "tarifa":"10000"
    },
    {
      "ciudad":"Mariquita",
      "tarifa":"10000"
    },
    {
      "ciudad":"Medellín",
      "tarifa":""
    },
    {
      "ciudad":"Mompox",
      "tarifa":"10000"
    },
    {
      "ciudad":"Montería",
      "tarifa":"10000"
    },
    {
      "ciudad":"Murillo",
      "tarifa":"10000"
    },
    {
      "ciudad":"Neiva",
      "tarifa":"10000"
    },
    {
      "ciudad":"Pamplona",
      "tarifa":"10000"
    },
    {
      "ciudad":"Pasto",
      "tarifa":"10000"
    },
    {
      "ciudad":"Pereira",
      "tarifa":"10000"
    },
    {
      "ciudad":"Popayán",
      "tarifa":"10000"
    },
    {
      "ciudad":"Riohacha",
      "tarifa":"10000"
    },
    {
      "ciudad":"San Andrés y Providencia",
      "tarifa":"10000"
    },
    {
      "ciudad":"San Antero",
      "tarifa":"10000"
    },
    {
      "ciudad":"Santa Marta",
      "tarifa":"10000"
    },
    {
      "ciudad":"Santafé de Antioquia",
      "tarifa":"10000"
    },
    {
      "ciudad":"Sevilla",
      "tarifa":"10000"
    },
    {
      "ciudad":"Sincelejo",
      "tarifa":"10000"
    },
    {
      "ciudad":"Sogamoso",
      "tarifa":"10000"
    },
    {
      "ciudad":"Tabio",
      "tarifa":"10000"
    },
    {
      "ciudad":"Tocancipá",
      "tarifa":"10000"
    },
    {
      "ciudad":"Tolú",
      "tarifa":"10000"
    },
    {
      "ciudad":"Tuluá",
      "tarifa":"10000"
    },
    {
      "ciudad":"Tumaco",
      "tarifa":"10000"
    },
    {
      "ciudad":"Tunja",
      "tarifa":"10000"
    },
    {
      "ciudad":"Valledupar",
      "tarifa":"10000"
    },
    {
      "ciudad":"Villavicencio",
      "tarifa":"10000"
    },
    {
      "ciudad":"Yopal",
      "tarifa":"10000"
    },
    {
      "ciudad":"Zipaquirá",
      "tarifa":"10000"
    }
  ],
  "restopais": [
    {
      "Amazonas": [
        "Leticia",
        "Puerto Narino"
      ],
      "Antioquia": [
        "Abejorral",
        "Abriaqui",
        "Alejandria",
        "Amaga",
        "Amalfi",
        "Andes",
        "Angelopolis",
        "Angostura",
        "Anori",
        "Antioquia",
        "Anza",
        "Apartado",
        "Arboletes",
        "Argelia",
        "",
        "Barbosa",
        "Belmira",
        "Bello",
        "Betania",
        "Betulia",
        "Bolivar",
        "Briseno",
        "Buritica",
        "Caceres",
        "Caicedo",
        "Caldas",
        "Campamento",
        "Canasgordas",
        "Caracoli",
        "Caramanta",
        "Carepa",
        "Carmen de Viboral",
        "Carolina",
        "Caucasia",
        "Chigorodo",
        "Cisneros",
        "Cocorna",
        "Concepcion",
        "Concordia",
        "Copacabana",
        "Dabeiba",
        "Don Matias",
        "Ebejico",
        "El Bagre",
        "Entrerrios",
        "Envigado",
        "Fredonia",
        "Frontino",
        "Giraldo",
        "Girardota",
        "Gomez Plata",
        "Granada",
        "Guadalupe",
        "Guarne",
        "Guatape",
        "Heliconia",
        "Hispania",
        "Itagui",
        "Ituango",
        "Jardin",
        "Jerico",
        "La Ceja",
        "La Estrella",
        "La Pintada",
        "La Union",
        "Liborina",
        "Maceo",
        "Marinilla",
        "Medellin",
        "Montebello",
        "Murindo",
        "Mutata",
        "Narino",
        "Necocli",
        "Nechi",
        "Olaya",
        "Penol",
        "Peque",
        "Pueblorrico",
        "Puerto Berrio",
        "Puerto Nare",
        "Puerto Triunfo",
        "Remedios",
        "Retiro",
        "Rionegro",
        "Sabanalarga",
        "Sabaneta",
        "Salgar",
        "San Andres",
        "San Carlos",
        "San francisco",
        "San Jeronimo",
        "San Jose de Montana",
        "San Juan de Uraba",
        "San Luis",
        "San Pedro",
        "San Pedro de Uraba",
        "San Rafael",
        "San Roque",
        "San Vicente",
        "Santa Barbara",
        "Santa Rosa de Osos",
        "Santo Domingo",
        "Santuario",
        "Segovia",
        "Sonson",
        "Sopetran",
        "Tamesis",
        "Taraza",
        "Tarso",
        "Titiribi",
        "Toledo",
        "Turbo",
        "Uramita",
        "Urrao",
        "Valdivia",
        "Valparaiso",
        "Vegachi",
        "Venecia",
        "Vigia del Fuerte",
        "Yali",
        "Yarumal",
        "Yolombo",
        "Yondo (Casabe)",
        "Zaragoza"
      ],
      "Arauca": [
        "Arauca",
        "Arauquita",
        "Cravo Norte",
        "Fortul",
        "Saravena",
        "Tame"
      ],
      "Atlantico": [
        "Barranquilla",
        "Baranoa",
        "Campo de la Cruz",
        "Candelaria",
        "Galapa",
        "Juan de Acosta",
        "Luruaco",
        "Malambo",
        "Manati",
        "Palmar de Varela",
        "Piojo",
        "Polonuevo",
        "Ponedera",
        "Puerto Colombia",
        "Repelon",
        "Sabanagrande",
        "Sabanalarga",
        "Santa Lucia",
        "Santo Tomas",
        "Soledad",
        "Suan",
        "Tubara",
        "Usiacuri",
        "Cartagena",
        "Achi",
        "Altos del Rosario",
        "Arenal",
        "Arjona",
        "Arroyohondo",
        "Barranco de Loba",
        "Calamar",
        "Cantagallo",
        "Cicuto",
        "Cordoba",
        "Clemencia",
        "El Carmen de Bolivar",
        "El Guamo",
        "El Penon",
        "Hatillo de Loba",
        "Magangue",
        "Mahates",
        "Margarita",
        "Maria la Baja",
        "Montecristo",
        "Mompos",
        "Morales",
        "Pinillos",
        "Regidor",
        "Rio Viejo",
        "San Cristobal",
        "San Estanislao",
        "San Fernando",
        "San Jacinto",
        "San Jacinto del Cauca",
        "San Juan Nepomuceno",
        "San Martin de Loba",
        "San Pablo",
        "Santa Catalina",
        "Santa Rosa",
        "Santa Rosa del Sur",
        "Simiti",
        "Soplaviento",
        "Talaigua Nuevo",
        "Tiquisio (Puerto Rico)",
        "Turbaco",
        "Turbana",
        "Villanueva",
        "Zambrano"
      ],
      "Boyaca": [
        "Almeida",
        "Aquitania",
        "Arcabuco",
        "Belen",
        "Berbeo",
        "Beteitiva",
        "Boavita",
        "Boyaca",
        "Briseno",
        "Buenavista",
        "Busbanza",
        "Caldas",
        "Campohermoso",
        "Cerinza",
        "Chinavita",
        "Chiquinquira",
        "Chiscas",
        "Chita",
        "Chitaranque",
        "Chivata",
        "Cienaga",
        "Combita",
        "Coper",
        "Corrales",
        "Covarachia",
        "Cubar",
        "Cucaita",
        "Cuitiva",
        "Chiquiza",
        "Chivor",
        "Duitama",
        "El Cocuy",
        "El Espino",
        "Firavitoba",
        "Floresta",
        "Gachantiva",
        "Gameza",
        "Garagoa",
        "Guacamayas",
        "Guateque",
        "Guayata",
        "Guican",
        "Iza",
        "Jenesano",
        "Jerico",
        "Labranzagrande",
        "La Capilla",
        "La Victoria",
        "La Ubita",
        "Villa de Leyva",
        "Macanal",
        "Maripi",
        "Miraflores",
        "Mongua",
        "Mongui",
        "Moniquira",
        "Motavita",
        "Muzo",
        "Nobsa",
        "Nuevo Colon",
        "Oicata",
        "Otanche",
        "Pachavita",
        "Paez",
        "Paipa",
        "Pajarito",
        "Panqueba",
        "Pauna",
        "Paya",
        "Paz de Rio",
        "Pesca",
        "Pisva",
        "Puerto Boyaca",
        "Quipama",
        "Ramiquiri",
        "Raquira",
        "Rondon",
        "Saboya",
        "Sachica",
        "Samaca",
        "San Eduardo",
        "San Jose de Pare",
        "San Luis de Gaceno",
        "San Mateo",
        "San Miguel de Sema",
        "San Pablo de Borbur",
        "Santana",
        "Santa Maria",
        "Santa Rosa de Viterbo",
        "Santa Sofia",
        "Sativanorte",
        "Sativasur",
        "Siachoque",
        "Soata",
        "Socota",
        "Socha",
        "Sogamoso",
        "Somondoco",
        "Sora",
        "Sotaquira",
        "Soraca",
        "Susacon",
        "Sutamarchan",
        "Sutatenza",
        "Tasco",
        "Tenza",
        "Tibana",
        "Tibasosa",
        "Tinjaca",
        "Tipacoque",
        "Toca",
        "Togui",
        "Topaga",
        "Tota",
        "Tunja",
        "Tunungua",
        "Turmeque",
        "Tuta",
        "Tutaza",
        "Umbita",
        "Ventaquemada",
        "Viracacha",
        "Zetaquira"
      ],
      "Caldas": [
        "Aguadas",
        "Anserma",
        "Aranzazu",
        "Belalcazar",
        "Chinchina",
        "Filadelfia",
        "La Dorada",
        "La Merced",
        "Manizales",
        "Manzanares",
        "Marmato",
        "Marquetalia",
        "Marulanda",
        "Neira",
        "Pacora",
        "Palestina",
        "Pensilvania",
        "Riosucio",
        "Risaralda",
        "Salamina",
        "Samana",
        "San Jose",
        "Supia",
        "Victoria",
        "Villamaria",
        "Viterbo"
      ],
      "Caqueta": [
        "Albania",
        "Belen de los Andaquies",
        "Cartagena del Chaira",
        "Curillo",
        "El Doncello",
        "El Paujil",
        "Florencia",
        "La Montanita",
        "Milan",
        "Morelia",
        "Puerto Rico",
        "San Jose del Fragua",
        "San Vicente del Caguan",
        "Solano",
        "Solita",
        "Valparaiso"
      ],
      "Casanare": [
        "Aguazul",
        "Chameza",
        "Hato Corozal",
        "La Salina",
        "Mani",
        "Monterrey",
        "Nunchia",
        "Orocue",
        "Paz de Ariporo",
        "Pore",
        "Recetor",
        "Sabalarga",
        "Sacama",
        "San Luis de Palenque",
        "Tamara",
        "Tauramena",
        "Trinidad",
        "Villanueva",
        "Yopal"
      ],
      "Cauca": [
        "Almaguer",
        "Argelia",
        "Balboa",
        "Bolivar",
        "Buenos Aires",
        "Cajibio",
        "Caldono",
        "Caloto",
        "Corinto",
        "El Tambo",
        "Florencia",
        "Guapi",
        "Inza",
        "Jambalo",
        "La Sierra",
        "La Vega",
        "Lopez (Micay)",
        "Mercaderes",
        "Miranda",
        "Morales",
        "Padilla",
        "Paez (Belalcazar)",
        "Patia (El Bordo)",
        "Piamonte",
        "Piendamo",
        "Popayan",
        "Puerto Tejada",
        "Purace (Coconuco)",
        "Rosas",
        "San Sebastian",
        "Santander de Quilichao",
        "Santa Rosa",
        "Silvia",
        "Sotara (Paispamba)",
        "Suarez",
        "Timbio",
        "Timbiqui",
        "Toribio",
        "Totoro"
      ],
      "Cesar": [
        "Aguachica",
        "Agustin Codazzi",
        "Astrea",
        "Becerril",
        "Bosconia",
        "Chimichagua",
        "Chiriguana",
        "Curumani",
        "El Copey",
        "El Paso",
        "Gamarra",
        "Gonzalez",
        "La Gloria",
        "La Jagua de Ibirico",
        "Manaure Balcon Cesar",
        "Pailitas",
        "Pelaya",
        "Pueblo Bello",
        "Rio de Oro",
        "La Paz (Robles)",
        "San Alberto",
        "San Diego",
        "San Martin",
        "Tamalameque",
        "Valledupar"
      ],
      "Cordoba": [
        "Ayapel",
        "Buenavista",
        "Canalete",
        "Cerete",
        "Chima",
        "Chinu",
        "Cienaga de Oro",
        "Cotorra",
        "La Apartada (Frontera)",
        "Lorica",
        "Los Cordobas",
        "Momil",
        "Monitos",
        "Montelibano",
        "Monteria",
        "Planeta Rica",
        "Pueblo Nuevo",
        "Puerto Escondido",
        "Puerto Libertador",
        "Purisima",
        "Sahagun",
        "San Andres Sotavento",
        "San Antero",
        "San Bernardo del Viento",
        "San Carlos",
        "San Pelayo",
        "Tierralta",
        "Valencia"
      ],
      "Cundinamarca": [
        "Agua de Dios",
        "Alban",
        "Anapoima",
        "Anolaima",
        "Arbelaez",
        "Beltran",
        "Bituima",
        "Bojaca",
        "Cabrera",
        "Cachipay",
        "Cajica",
        "Caparrapi",
        "Caqueza",
        "Carmen de Carupa",
        "Chaguani",
        "Chia",
        "Chipaque",
        "Choachi",
        "Choconta",
        "Cogua",
        "Cota",
        "Cucunuba",
        "El Colegio",
        "El Penon",
        "El Rosal",
        "Facatativa",
        "Fomeque",
        "Fosca",
        "Funza",
        "Fuquene",
        "Fusagasuga",
        "Gachala",
        "Gachancipa",
        "Gacheta",
        "Gama",
        "Girardot",
        "Granada",
        "Guacheta",
        "Guaduas",
        "Guasca",
        "Guataqui",
        "Guatavita",
        "Guayabal de Siquima",
        "Guayabetal",
        "Gutierrez",
        "Jerusalen",
        "Junin",
        "La Calera",
        "La Mesa",
        "La Palma",
        "La Pena",
        "La Vega",
        "Lenguazaque",
        "Macheta",
        "Madrid",
        "Manta",
        "Medina",
        "Mosquera",
        "Narino",
        "Nemocon",
        "Nilo",
        "Nimaima",
        "Nocaima",
        "Venecia (Ospina Perez)",
        "Pacho",
        "Paime",
        "Pandi",
        "Paratebueno",
        "Pasca",
        "Puerto Salgar",
        "Puli",
        "Quebradanegra",
        "Quetame",
        "Quipile",
        "Rafael",
        "Ricaurte",
        "San Antonio de Tequendama",
        "San Bernardo",
        "San Cayetano",
        "San Francisco",
        "San Juan de Rioseco",
        "Sasaima",
        "Sesquile",
        "Sibate",
        "Silvania",
        "Simijaca",
        "Soacha",
        "Sopo",
        "Subachoque",
        "Suesca",
        "Supata",
        "Susa",
        "Sutatausa",
        "Tabio",
        "Tausa",
        "Tena",
        "Tenjo",
        "Tibacuy",
        "Tibirita",
        "Tocaima",
        "Tocancipa",
        "Topaipi",
        "Ubala",
        "Ubaque",
        "Ubate",
        "Une",
        "utica",
        "Vergara",
        "Viani",
        "Villagomez",
        "Villapinzon",
        "Villeta",
        "Viota",
        "Yacopi",
        "Zipacon",
        "Zipaquira"
      ],
      "Choco": [
        "Acandi",
        "Alto Baudo (Pie de Pato)",
        "Atrato (Yuto)",
        "Bagado",
        "Bahia Solano (Mutis)",
        "Bajo Baudo (Pizarro)",
        "Bojaya (Bellavista)",
        "Canton de San Pablo",
        "Condoto",
        "El Carmen",
        "El Litoral de San Juan",
        "Itsmina",
        "Jurado",
        "Lloro",
        "Novita",
        "Nuqui",
        "Quibdo",
        "Riosucio",
        "San Jose del Palmar",
        "Sipi",
        "Tado",
        "Unguia"
      ],
      "Guainia": [
        "Puerto Inirida"
      ],
      "Guaviare": [
        "Calamar",
        "El Retorno",
        "Miraflores",
        "San Jose del Guaviare"
      ],
      "Huila": [
        "Acevedo",
        "Agrado",
        "Aipe",
        "Algeciras",
        "Altamira",
        "Baraya",
        "Campoalegre",
        "Colombia",
        "Elias",
        "Garzon",
        "Gigante",
        "Guadalupe",
        "Hobo",
        "Iquira",
        "Isnos",
        "La Argentina",
        "La Plata",
        "Nataga",
        "Neiva",
        "Oporapa",
        "Paicol",
        "Palermo",
        "Palestina",
        "Pital",
        "Pitalito",
        "Rivera",
        "Saladoblanco",
        "San Agustin",
        "Santa Maria",
        "Suaza",
        "Tarqui",
        "Tesalia",
        "Tello",
        "Teruel",
        "Timana",
        "Villavieja",
        "Yaguara"
      ],
      "La Guajira": [
        "Barrancas",
        "Dibulla",
        "Distraccion",
        "El Molino",
        "Fonseca",
        "Hatonuevo",
        "Maicao",
        "Manaure",
        "Riohacha",
        "San Juan del Cesar",
        "Uribia",
        "Urumita",
        "Villanueva"
      ],
      "Magdalena": [
        "Aracataca",
        "Ariguani (El Dificil)",
        "Cerro San Antonio",
        "Chivolo",
        "Cienaga",
        "El Banco",
        "El Pinon",
        "El Reten",
        "Fundacion",
        "Guamal",
        "Pedraza",
        "Pijino del Carmen",
        "Pivijay",
        "Plato",
        "Publoviejo",
        "Remolino",
        "Salamina",
        "San Sebastian de Buuenavista",
        "San Zenon",
        "Santa Ana",
        "Santa Marta",
        "Sitionuevo",
        "Tenerife"
      ],
      "Meta": [
        "Acacias",
        "Barranca de Upia",
        "Cabuyaro",
        "Castilla la Nueva",
        "Cubarral",
        "Cumaral",
        "El Calvario",
        "El Castillo",
        "El Dorado",
        "Fuente de Oro",
        "Granada",
        "Guamal",
        "Mapiripan",
        "Mesetas",
        "La Macarena",
        "La Uribe",
        "Lejanias",
        "Puerto Concordia",
        "Puerto Gaitan",
        "Puerto Lopez",
        "Puerto Lleras",
        "Puerto Rico",
        "Restrepo",
        "San Carlos de Guaroa",
        "San Juan de Arama",
        "San Juanito",
        "San Martin",
        "Villavicencio",
        "Vistahermosa"
      ],
      "Narino": [
        "Alban (San Jose)",
        "Aldana",
        "Ancuya",
        "Arboleda (Berruecos)",
        "Barbacoas",
        "Belen",
        "Buesaco",
        "Colon (Genova)",
        "Consaca",
        "Contadero",
        "Cordoba",
        "Cuaspud (Carlosama)",
        "Cumbal",
        "Cumbitara",
        "Chachagui",
        "El Charco",
        "El Rosario",
        "El Tablon",
        "El Tambo",
        "Francisco Pizarro",
        "Funes",
        "Guachucal",
        "Guaitarilla",
        "Gualmatan",
        "Iles",
        "Imues",
        "Ipiales",
        "La Cruz",
        "La Florida",
        "La Llanada",
        "La Tola",
        "La Union",
        "Leiva",
        "Linares",
        "Los Andes (Sotomayor)",
        "Magui (Payan)",
        "Mallama (Piedrancha)",
        "Mosquera",
        "Olaya",
        "Ospina",
        "Pasto",
        "Policarpa",
        "Potosi",
        "Providencia",
        "Puerres",
        "Pupiales",
        "Ricaurte",
        "Roberto Payan (San Jose)",
        "Samaniego",
        "Sandona",
        "San Bernardo",
        "San Lorenzo",
        "San Pablo",
        "San Pedro de Cartago",
        "Santa Barbara (Iscuande)",
        "Santa Cruz (Guachavez)",
        "Sapuyes",
        "Taminango",
        "Tangua",
        "Tumaco",
        "Tuquerres",
        "Yacuanquer"
      ],
      "Norte de Santander": [
        "Abrego",
        "Arboledas",
        "Bochalema",
        "Bucarasica",
        "Cacota",
        "Cachira",
        "Chinacota",
        "Chitaga",
        "Convencion",
        "Cucuta",
        "Cucutilla",
        "Durania",
        "El Carmen",
        "El Tarra",
        "El Zulia",
        "Gramalote",
        "Hacari",
        "Herran",
        "Labateca",
        "La Esperanza",
        "La Playa",
        "Los Patios",
        "Lourdes",
        "Mutiscua",
        "Ocana",
        "Pamplona",
        "Pamplonita",
        "Puerto Santander",
        "Ragonvalia",
        "Salazar",
        "San Calixto",
        "San Cayetano",
        "Santiago",
        "Sardinata",
        "Silos",
        "Teorama",
        "Tibu",
        "Toledo",
        "Villacaro",
        "Villa del Rosario"
      ],
      "Putumayo": [
        "Colon",
        "Mocoa",
        "Orito",
        "Puerto Asis",
        "Puerto Caicedo",
        "Puerto Guzman",
        "Puerto Leguizamo",
        "Sibundoy",
        "San Francisco",
        "San Miguel",
        "Santiago",
        "Villa Gamuez (La Hormiga)",
        "Villa Garzon"
      ],
      "Quindio": [
        "",
        "Buenavista",
        "Calarca",
        "Circasia",
        "Cordoba",
        "Filandia",
        "Genova",
        "La Tebaida",
        "Montenegro",
        "Pijao",
        "Quimbaya",
        "Salento"
      ],
      "Risaralda": [
        "Apia",
        "Balboa",
        "Belen de Umbria",
        "Dos Quebradas",
        "Guatica",
        "La Celia",
        "La Virginia",
        "Marsella",
        "Mistrato",
        "Pereira",
        "Pueblo Rico",
        "Quinchia",
        "Santa Rosa de Cabal",
        "Santuario"
      ],
      "San Andres": [
        "Providencia",
        "San Andres"
      ],
      "Santafe de Bogota": [
        "Santafe de Bogota"
      ],
      "Santander": [
        "Aguada",
        "Albania",
        "Aratoca",
        "Barbosa",
        "Barichara",
        "Barrancabermeja",
        "Betulia",
        "Bolivar",
        "Bucaramanga",
        "Cabrera",
        "California",
        "Capitanejo",
        "Carcasi",
        "Cepita",
        "Cerrito",
        "Charala",
        "Charta",
        "Chima",
        "Chipata",
        "Cimitarra",
        "Concepcion",
        "Confines",
        "Contratacion",
        "Coromoro",
        "Curiti",
        "El Carmen",
        "El Guacamayo",
        "El Penon",
        "El Playon",
        "Encino",
        "Enciso",
        "Florian",
        "Floridablanca",
        "Galan",
        "Gambita",
        "Giron",
        "Guaca",
        "Guadalupe",
        "Guapota",
        "Guavata",
        "Guepsa",
        "Hato",
        "Jesus Maria",
        "Jordan",
        "La Belleza",
        "Landazuri",
        "La Paz",
        "Lebrija",
        "Los Santos",
        "Macaravita",
        "Malaga",
        "Matanza",
        "Mogotes",
        "Molagavita",
        "Ocamonte",
        "Oiba",
        "Onzaga",
        "Palmar",
        "Palmas del Socorro",
        "Paramo",
        "Pie de Cuesta",
        "Pinchote",
        "Puente Nacional",
        "Puerto Parra",
        "Puerto Wilches",
        "Rionegro",
        "Sabana de Torres",
        "San Andres",
        "San Benito",
        "San Gil",
        "San Joaquin",
        "San Jose de Miranda",
        "San Miguel",
        "San Vicente de Chucuri",
        "Santa Barbara",
        "Santa Helena del Opon",
        "Simacota",
        "Socorro",
        "Suaita",
        "Sucre",
        "Surata",
        "Tona",
        "Valle de San Jose",
        "Velez",
        "Vetas",
        "Villanueva",
        "Zapatoca"
      ],
      "Sucre": [
        "Buenavista",
        "Caimito",
        "Coloso (Ricaurte)",
        "Corozal",
        "Chalan",
        "Galeras (Nueva Granada)",
        "Guaranda",
        "La Union",
        "Los Palmitos",
        "Majagual",
        "Morroa",
        "Ovejas",
        "Palmito",
        "Sampues",
        "San Benito Abad",
        "San Juan de Betulia",
        "San Marcos",
        "San Onofre",
        "San Pedro",
        "Since",
        "Sincelejo",
        "Sucre",
        "Tolu",
        "Toluviejo"
      ],
      "Tolima": [
        "Alpujarra",
        "Alvarado",
        "Ambalema",
        "Anzoategui",
        "Armero (Guayabal)",
        "Ataco",
        "Cajamarca",
        "Carmen de Apicala",
        "Casabianca",
        "Chaparral",
        "Coello",
        "Coyaima",
        "Cunday",
        "Dolores",
        "Espinal",
        "Falan",
        "Flandes",
        "Fresno",
        "Guamo",
        "Herveo",
        "Honda",
        "Ibague",
        "Icononzo",
        "Lerida",
        "Libano",
        "Mariquita",
        "Melgar",
        "Murillo",
        "Natagaima",
        "Ortega",
        "Palocabildo",
        "Piedras",
        "Planadas",
        "Prado",
        "Purificacion",
        "Rioblanco",
        "Roncesvalles",
        "Rovira",
        "Saldana",
        "San Antonio",
        "San Luis",
        "Santa Isabel",
        "Suarez",
        "Valle de San Juan",
        "Venadillo",
        "Villahermosa",
        "Villarrica"
      ],
      "Valle": [
        "Alcala",
        "Andalucia",
        "Ansermanuevo",
        "Argelia",
        "Bolivar",
        "Buenaventura",
        "Buga",
        "Bugalagrande",
        "Caicedonia",
        "Cali",
        "Calima (Darien)",
        "Candelaria",
        "Cartago",
        "Dagua",
        "El aguila",
        "El Cairo",
        "El Cerrito",
        "El Dovio",
        "Florida",
        "Ginebra",
        "Guacari",
        "Jamundi",
        "La Cumbre",
        "La Union",
        "La Victoria",
        "Obando",
        "Palmira",
        "Pradera",
        "Restrepo",
        "Riofrio",
        "Roldanillo",
        "San Pedro",
        "Sevilla",
        "Toro",
        "Trujillo",
        "Tulua",
        "Ulloa",
        "Versalles",
        "Vijes",
        "Yotoco",
        "Yumbo",
        "Zarzal"
      ],
      "Vaupes": [
        "Caruru",
        "Mitu",
        "Tatama"
      ],
      "Vichada": [
        "La Primavera",
        "Puerto Carreno",
        "Santa Rosalia",
        "Cumaribo"
      ]
    }
  ]
}';

$row = json_decode($datos);

echo json_encode($row);
