CREATE DATABASE scoreboard_db;

USE scoreboard_db;

CREATE TABLE scoreboard (
    id INT AUTO_INCREMENT PRIMARY KEY,
    teamA VARCHAR(255) NOT NULL,
    scoreA INT NOT NULL,
    teamB VARCHAR(255) NOT NULL,
    scoreB INT NOT NULL,
    fontColor VARCHAR(7) NOT NULL,
    backgroundColor VARCHAR(7) NOT NULL,
    teamFont VARCHAR(255) NOT NULL,
    teamFontSize VARCHAR(10) NOT NULL,
    scoreFont VARCHAR(255) NOT NULL,
    scoreFontSize VARCHAR(10) NOT NULL
);

INSERT INTO scoreboard (teamA, scoreA, teamB, scoreB, fontColor, backgroundColor, teamFont, teamFontSize, scoreFont, scoreFontSize) 
VALUES ('Team A', 0, 'Team B', 0, '#000000', '#ffffff', 'Arial, sans-serif', '2em', 'Courier New, monospace', '3em');
