# php-oop-2

Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:

- L'e-commerce vende prodotti per animali.
- I prodotti sono categorizzati, le categorie sono Cani o Gatti.
- I prodotti saranno oltre al cibo, anche giochi, cucce, etc.

Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).

BONUS (Opzionale):
Il cliente potrà sia comprare i prodotti come ospite, senza doversi registrarsi nello store, oppure può iscriversi e creare un account per ricevere cosi il 20% di sconto.
Il cliente effettua il pagamento dei prodotti nel carrello con la carta di credito, che non deve essere scaduta.



classe-> prodotti
    -nome
    -prezzo
    -brand
    -codice prodotto
    -descrizione
    -img prodotto

classe-> cani
    classe-> cibo
        -ingredienti
        -descrizione breve
        -categoria (secco, umido)
        -formato (es: peso 1kg, 2kg)

    classe-> toys
        -categorie (palline, corde)
        -materiali (stoffa, gomma, nylon)

    classe-> cucce
        -interno (cuscinoni-lettini ecc...)
        -esterno (casetta,legno ecc...)
        -taglia (s, m, l, xl ecc...)

    classe-> guinzaglieria
        -guinzagli
        -collari
        -pettorine

    classe-> antiparassitari
        -pipette
        -collari
        -ambientali

classe-> gatti
    classe-> cibo
        -ingredienti
        -descrizione breve
        -categoria (secco, umido)
        -formato (es: peso 1kg, 2kg)

    classe-> toys
        -categorie (palline, corde)
        -materiali (stoffa, gomma, nylon)

    classe-> cucce
        -interno (cuscinoni-lettini ecc...)
        -esterno (casetta,legno ecc...)
        -taglia (s, m, l, xl ecc...)
    
    classe-> antiparassitari
        -pipette
        -collari
        -ambientali