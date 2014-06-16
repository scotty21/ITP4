--
-- Datenbank: `kansimpleban`
--

-- --------------------------------------------------------


--
-- Tabellenstruktur für Tabelle 'User'
--

CREATE TABLE IF NOT EXISTS `user` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Firstname` varchar(50) NOT NULL,
  `Lastname` varchar (100) NOT NULL,
  `Username` varchar(32) NOT NULL,
  `Password` varchar(128) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;



--Hab mal folgende Tabellen erstellt, kA ob das passt. Angelika

--
-- Tabellenstruktur für Tabelle 'project'
--  (Speichert projektname mit id)
--

CREATE TABLE IF NOT EXISTS `project` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Projectname` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Tabellenstruktur für Tabelle 'user_project'
--  (Speichert projekt id und user id, um user mit projekten zu verknüpfen)
--

CREATE TABLE IF NOT EXISTS `user_project` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `userID` int(10) unsigned NOT NULL,
  `projectID` int(10) unsigned NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Tabellenstruktur für Tabelle 'story'
--  (Speichert stories mit projekt id)
--

CREATE TABLE IF NOT EXISTS `story` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `projectID` int(10) unsigned NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar (250) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;