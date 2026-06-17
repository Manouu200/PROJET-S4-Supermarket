PRAGMA foreign_keys = ON;
-- ==========================
-- TABLE CLIENT
-- ==========================
CREATE TABLE client (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    nom TEXT NOT NULL,
    telephone TEXT NOT NULL,
    email TEXT NOT NULL UNIQUE,
    mot_de_passe TEXT NOT NULL
);
-- ==========================
-- TABLE CAISSE
-- ==========================
CREATE TABLE caisse (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    numero_caisse TEXT NOT NULL UNIQUE,
    nom_caisse TEXT NOT NULL
);
-- ==========================
-- TABLE PRODUIT
-- ==========================
CREATE TABLE produit (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    designation TEXT NOT NULL,
    prix_unitaire REAL NOT NULL CHECK(prix_unitaire >= 0)
);
-- ==========================
-- TABLE STOCK
-- ==========================
CREATE TABLE stock (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    id_produit INTEGER NOT NULL,
    quantite_stock INTEGER NOT NULL CHECK(quantite_stock >= 0),
    date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_produit) REFERENCES produit(id) ON UPDATE CASCADE ON DELETE CASCADE
);
-- ==========================
-- TABLE ACHAT
-- ==========================
CREATE TABLE achat (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    id_client INTEGER NOT NULL,
    id_caisse INTEGER NOT NULL,
    id_produit INTEGER NOT NULL,
    quantite INTEGER NOT NULL CHECK(quantite > 0),
    FOREIGN KEY (id_client) REFERENCES client(id) ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY (id_caisse) REFERENCES caisse(id) ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY (id_produit) REFERENCES produit(id) ON UPDATE CASCADE ON DELETE CASCADE
);
-- ==========================
-- INSERT CAISSES
-- ==========================
INSERT INTO caisse (numero_caisse, nom_caisse)
VALUES ('CS01', 'Caisse principale'),
    ('CS02', 'Caisse secondaire');
-- ==========================
-- INSERT PRODUITS
-- ==========================
INSERT INTO produit (designation, prix_unitaire)
VALUES ('Pain', 1000),
    ('Lait', 2500),
    ('Sucre', 1800),
    ('Riz', 3000),
    ('Huile', 5000);
-- ==========================
-- INSERT CLIENTS
-- ==========================
INSERT INTO client (nom, telephone, email, mot_de_passe)
VALUES (
        'Rakoto',
        '0341234567',
        'rakoto@gmail.com',
        'pass123'
    ),
    (
        'Rabe',
        '0339876543',
        'rabe@gmail.com',
        'pass456'
    );