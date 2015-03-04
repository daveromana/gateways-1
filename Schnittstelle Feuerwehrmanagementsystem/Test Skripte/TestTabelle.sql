
CREATE TABLE `test2` (
  `id` int(11) NOT NULL,
  `einsatzNummer` int(11) NOT NULL,
  `stichwort` text NOT NULL,
  `alarm` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ausfahrt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ende` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ort` text NOT NULL,
  `einsatzleiter` text NOT NULL,
  `fahrzeuge` text NOT NULL,
  `beschreibung` text NOT NULL,
  `sichtbar` int(11) NOT NULL,
  `secretkey` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

