/*N°1*/
SELECT customers.CompanyName as Société,
customers.ContactName as contact,
customers.ContactTitle as Fonction,
customers.Phone as Téléphone
FROM customers
WHERE customers.Country = 'France'

/*N°2*/
SELECT products.ProductName as Produit,
products.UnitPrice as Prix
FROM products
WHERE products.SupplierID = '1'

/*N°3*/
SELECT suppliers.CompanyName as Fournisseur,
COUNT(products.SupplierID) AS 'Nombre produits'
FROM products
JOIN suppliers
ON suppliers.SupplierID = products.SupplierID
WHERE suppliers.Country = 'France'
GROUP BY suppliers.SupplierID
ORDER BY COUNT(products.SupplierID) DESC

/*N°4*/
SELECT customers.CompanyName as Client,
COUNT(orders.CustomerID) as 'Nombre commandes'
FROM orders
JOIN customers
ON orders.CustomerID = customers.CustomerID
WHERE customers.Country = 'France'
GROUP BY customers.CustomerID
HAVING COUNT(orders.CustomerID) > 10

/*N°5*/
SELECT customers.CompanyName as Client,
SUM(UnitPrice*Quantity) as CA,
customers.Country as Pays
FROM `order details`
JOIN orders
ON orders.OrderID = `order details`.`OrderID`
JOIN customers
ON customers.CustomerID = orders.CustomerID
GROUP BY customers.CompanyName
HAVING SUM(UnitPrice*Quantity) > 30000  
ORDER BY `CA`  DESC

/*N°6*/
SELECT DISTINCT customers.Country
FROM customers
JOIN orders
ON customers.CustomerID = orders.CustomerID
JOIN `order details`
ON orders.OrderID = `order details`.OrderID
JOIN products
ON `order details`.ProductID = products.ProductID
JOIN suppliers
ON suppliers.SupplierID = products.SupplierID
WHERE suppliers.CompanyName = 'Exotic Liquids'
ORDER BY customers.Country

/*N°7*/
SELECT SUM(UnitPrice*Quantity) as 'Montant des ventes de 1997'
FROM `order details`
JOIN orders
ON orders.OrderID = `order details`.`OrderID`
WHERE YEAR(orders.OrderDate) = 1997

/*N°8*/
SELECT MONTH(orders.OrderDate) as 'Mois 97',
SUM(UnitPrice*Quantity) as 'Montant des ventes de 1997'
FROM `order details`
JOIN orders
ON orders.OrderID = `order details`.`OrderID`
WHERE YEAR(orders.OrderDate) = 1997
GROUP BY MONTH(orders.OrderDate)

/*N°9*/
SELECT orders.OrderDate as 'Date de dernière commande'
FROM orders
JOIN customers
ON customers.CustomerID = orders.CustomerID
WHERE customers.CompanyName = 'Du monde entier'
ORDER BY orders.OrderDate DESC
LIMIT 1

/*N°10*/
SELECT ROUND(AVG(DATEDIFF(orders.ShippedDate, orders.OrderDate)))
AS 'Délai moyen de livraison en jours'
FROM orders