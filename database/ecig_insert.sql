START TRANSACTION;

INSERT INTO `users`(`lastname`, `firstname`, `adress`, `zip_code`, `city`,`email`, `pwd`) VALUES ('dufour','olivier','224 rue rosa luxemburg','62880','rouvroy','olivier.dufour62@yahoo.com','020988'),('delannoy', 'Jonathan', '1 rue de lièvin', '62800', 'liévin','jonathan.delannoy@yahoo.com', '070505'),
('dupont', 'jean', '12 rue danton', '62860', 'fion','jean.dupont@yahoo.com' ,'090406');

INSERT INTO `products`(`name`, `ref`, `description`, `img`, `prix`) VALUES ('Concentré French Dude','01F5D1','Toast myrtilles créme fouetté','projetolivierjonathan/public/assets/img/frenchdude.jpg','13.90'),
('Cinéma','01F5D6','Saveur Pop-corn','projetolivierjonathan/public/assets/img/cinema.jpg','25.90'),
('The Full Moon','01F5D7','Saveur Fruits Rouges','projetolivierjonathan/public/assets/img/fullmoon.jpg','13.90'),
('Concentré Ony','01F5D8','Saveur citron et agrumes','projetolivierjonathan/public/assets/img/ony.jpg','17.90'),
('Pulp cookie vanille','01F5D9','Saveur cookie vanille avec une pointe de caramel','projetolivierjonathan/public/assets/img/cookiecream.jpg','22.90');

COMMIT;