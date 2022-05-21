DELETE FROM jalon;
ALTER TABLE jalon auto_increment=1;

insert into jalon(
    jalon_titre,
    jalon_image ,
    jalon_resume ,
    jalon_debut ,
    jalon_fin,
    jalon_lien
     ) values
    ("Faire le cahier des charges", -- titre
    "cahier_des_charges.jpg", -- nom image
    "Le cahier des charges a été réalisé grâce à un template qui a été fourni.", -- resume/description
    "22 octobre", -- date de début puis fin
    "9 novembre",
    "../fichierslivrables/cahierdescharges.pdf"
    ),
    ("Regarder l'état de la salle", -- titre
    "ordinateur.jpg", -- nom image
    "Nous avons dû tout d'abord mettre à jour l'ensemble des logiciels sur les ordinateurs. Puis nous avons pu essayer plusieurs jeux sur les ordinateurs", -- resume/description
    "12 novembre", -- date de début puis fin
    "17 décembre",
    "../fichierslivrables/etatsalle.pdf"
    ),
        ("Envoyer un formulaire aux joueurs intéressés", -- titre
    "formulaire.jpg", -- nom image
    "Ce formulaire questionne les personnes sur leur envie de faire partie d'une équipe de l'ENSC sur le jeu League of Legends", -- resume/description
    "1 janvier", -- date de début puis fin
    "4 février",
    "https://docs.google.com/forms/d/1CXUSVzTgcyu6K9bT7LY4EgQRkRnBwvmysKlVmh0Kj3Q/prefill"
    ),
        ("Faire la commande Dell", -- titre
    "Dell.jpg", -- nom image
    "Nous avons dû passer par Dell pour réaliser les commandes du matériel informatique", -- resume/description
    "12 novembre", -- date de début puis fin
    "1 mai",
    "../fichierslivrables/devisPc.pdf"
    ) ,
        ("Reunir les joueurs", -- titre
    "travail_équipe.jpg", -- nom image
    "Nous avons réuni les joueurs dans des équipes", -- resume/description
    "28 janvier", -- date de début puis fin
    "4 mars",
    "../fichierslivrables/compterenduquestionnaire.pdf"
    ) ,
        ("Faire des livrables pour mieux organiser les équipes", -- titre
    "livrables.jpg", -- nom image
    "Nous avons réalisé plusieurs livrables concernant les critères qui permettent de créer une équipe performante.", -- resume/description
    "1 janvier", -- date de début puis fin
    "1 mai",
    "../fichierslivrables/livrablePersonnalite/"
    )  ,
        ("Verifier nos hypothèses", -- titre
    "validification.jpg", -- nom image
    "Nous avons réalisé un questionnaire afin de vérifier les hypothèses émises dans les livrables", -- resume/description
    "1 mai", -- date de début puis fin
    "20 mai",
    "https://docs.google.com/forms/d/e/1FAIpQLSf2EDo2Kow9spyTirpBysK65vszrgBlxobgQK-CIofoepw_sQ/viewform?vc=0&c=0&w=1&flr=0"
    ) 
    ;
