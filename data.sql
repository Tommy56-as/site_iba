DROP DATABASE IBA_NKONGSAMBA if exists ;
CREATE DATABASE IBA_NKONGSAMBA;
CREATE TABLE inscription (
    id int AUTO_INCREMENT PRIMARY KEY,
    nom varchar(100) NOT NULL,
    telephone varchar(100) NOT NULL,
    lettre_manuscrite LONGBLOB,
    fiche_inscription LONGBLOB,
    acte_naissance LONGBLOB,
    diplome LONGBLOB,
    photo LONGBLOB,
    certificat_medical LONGBLOB,
    releve_note LONGBLOB,
    recu_paiement LONGBLOB,
    enveloppe LONGBLOB,
    autorisation LONGBLOB,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);