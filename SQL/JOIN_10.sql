SELECT client.cli_nom, reservation.res_date, hotel.hot_nom FROM client 
JOIN reservation 
ON client.cli_id = reservation.res_cli_id
JOIN chambre
ON reservation.res_cha_id = chambre.cha_id
JOIN hotel
ON chambre.cha_hot_id = hotel.hot_id


SELECT station.sta_nom, hotel.hot_nom, chambre.cha_numero, chambre.cha_capacite FROM station
JOIN hotel
ON station.sta_id = hotel.hot_sta_id
JOIN chambre
ON hotel.hot_id = chambre.cha_hot_id


SELECT client.cli_nom, hotel.hot_nom, reservation.res_date_debut, datediff(reservation.res_date_fin, reservation.res_date_debut) AS 'La durée' FROM client
JOIN reservation
ON client.cli_id = reservation.res_cli_id
JOIN chambre
ON reservation.res_cha_id = chambre.cha_id
JOIN hotel
ON chambre.cha_hot_id = hotel.hot_id


SELECT station.sta_nom, COUNT(hotel.hot_nom) FROM hotel
JOIN station
ON hotel.hot_sta_id = station.sta_id
GROUP BY hotel.hot_sta_id


SELECT station.sta_nom, COUNT(chambre.cha_hot_id) FROM chambre
JOIN hotel
ON hotel.hot_id = chambre.cha_hot_id
JOIN station
ON station.sta_id = hotel.hot_sta_id
GROUP BY station.sta_nom


SELECT station.sta_nom, COUNT(chambre.cha_hot_id) FROM chambre
JOIN hotel
ON hotel.hot_id = chambre.cha_hot_id
AND chambre.cha_capacite>1
JOIN station
ON station.sta_id = hotel.hot_sta_id
GROUP BY station.sta_nom


SELECT client.cli_nom, hotel.hot_nom FROM client
JOIN reservation
ON client.cli_nom = 'Squire'
AND client.cli_id = reservation.res_cli_id
JOIN chambre
ON reservation.res_cha_id = chambre.cha_id
JOIN hotel
ON chambre.cha_hot_id = hotel.hot_id
