CREATE TABLE `compteVisite` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `date_visite` DATE NOT NULL,
    `pages_vues` SMALLINT(5) UNSIGNED NOT NULL,
    PRIMARY KEY (id)
)
COLLATE='utf8_general_ci'
ENGINE=MyISAM;