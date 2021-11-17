CREATE DATABASE lab8;
USE lab8;
/*
	It's not good practice to use SELECT in large databases due to the possibility of it returning a boatload of results. 
    It could also crash the computer with the sheer amount of stuff and things. 
*/
DROP TABLE IF EXISTS Teams;
CREATE TABLE Teams(
    teamId INT AUTO_INCREMENT PRIMARY KEY,
    teamName VARCHAR(255),
    homeCity VARCHAR(255),
    league VARCHAR(255)
);

INSERT INTO Teams(teamName, homeCity, league)
VALUES
("Buckeyes", "Columbus", "NCAAF"),
("Blue Jackets", "Columbus", "NHL"),
("Browns", "Cleveland", "NFL"),
("Reds", "Cincinnati", "MLB");
   
DROP TABLE IF EXISTS Players;
CREATE TABLE Players(
    playerId INT AUTO_INCREMENT PRIMARY KEY,
    jerseyNumber INT,
    playerName VARCHAR(255),
    team INT,
    FOREIGN KEY (team) REFERENCES teams(teamId) ON DELETE CASCADE
);
   
INSERT INTO Players(jerseyNumber, playerName, team)
VALUES
("7", "CJ Stroud", "1"),
("2", "Chris Olave", "1"),
("28", "Oliver Bjorkstrand", "2"),
("13", "Odell Beckham Jr.", "3"),
("6", "Lebron James", NULL),
("8", "Cal Ripken Jr.", NULL);

# returns the number of records in the playerName column
select count(playerName) from Players;

# this works the same way. 
# literally saying get the number of players from the player table whose jersey number is less than 10
select count(playerName) from Players where jerseyNumber < 10;

# can use this too. Does the same thing as select *
select count(*) from Players;

# allows you to set the maximum number of records that are returned.
# prevents a ton of things coming back and potentially messing everything up
select * from Players limit 5;

select count(teamName) from Teams where homeCity= "Columbus" limit 1;

# creating an alias for the variables jerseyNumber and playerName. 
# makes it a tad easier to understand. 
# are helpful when including multiple tables in one select statement and you want to differeneitate what table the info is in
select jerseyNumber As number, playerName as name from Players;

/*
	Like creating foreign keys. But way easier. 
    Join statements are made from the following:
		the specific tables that the columns are coming from. So in the Players table we are getting the column playerName.
        Next, we select all of the info we want from both tables. The base table is specified using from.
        Finally, specifiy which kind of join you're using. In this case, we used the inner join.
        Then we specifiy which columns are being joined across. Might want to also use a foreign key.
        
*/
select Teams.teamName, Players.playerName
from Players
inner join Teams on Players.team=Teams.teamId;

select Players.playerName, Players.jerseyNumber, Teams.homeCity, Teams.teamName
from Players
inner join Teams on Players.team=Teams.teamId
# modifies to only have people based out of Columbus
where Teams.homeCity="Columbus"
# creates the table so that the players are in order based on their jersey number
order by jerseyNumber;

SELECT Teams.teamName, Players.playerName
FROM Players
LEFT JOIN Teams ON Players.team=Teams.teamId;

SELECT Teams.teamName, Players.playerName
FROM Players
RIGHT JOIN Teams ON Players.team=Teams.teamId;

/*
	In venn diagram terms. Inner join is the center of the diagram where both of the tables overlap. Information that does not overlap between tables is not shown. 
    Right and left join grabs the information from the right or left side of the table, as well as the stuff that overlaps. 
*/

