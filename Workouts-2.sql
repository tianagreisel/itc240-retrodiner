-- Adminer 4.2.2 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `Workouts`;
CREATE TABLE `Workouts` (
  `WorkoutID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `WorkoutName` varchar(50) DEFAULT NULL,
  `WorkoutDescription` text,
  `WorkoutType` varchar(80) DEFAULT NULL,
  `WorkoutDate` date DEFAULT NULL,
  PRIMARY KEY (`WorkoutID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `Workouts` (`WorkoutID`, `WorkoutName`, `WorkoutDescription`, `WorkoutType`, `WorkoutDate`) VALUES
(1,	'Michael',	'3 rounds for time:  Run 800m, 50 back extensions, 50 sit-ups',	'Running',	'2006-09-28'),
(2,	'Linda',	'10-9-8-7-6-5-4-3-2-1:  deadlift, bench press, clean',	'Strength',	'2006-09-26'),
(3,	'Fight Gone Bad!',	'3 rounds of:  Wall ball shot, sumo deadlift highpull, box jump, push press, row',	'Rounds for time',	'2006-09-16'),
(4,	'Diane',	'21-15-9:  deadlift, handstand push-ups',	'Strength',	'2006-09-04'),
(5,	'Fran',	'21-15-9:  thruster, pull ups',	'Rounds for time',	'2006-10-24'),
(6,	'Elizabeth',	'21-15-9:  clean, dips',	'Strength',	'2006-10-18'),
(7,	'Helen',	'21-15-9:  Run 400m, 21 Kettlebell swings, 12 pull ups',	'Running',	'2006-10-09'),
(8,	'Nasty Girls',	'3 rounds for time:  50 squats, 7 muscle-ups, 10 hang power cleans',	'Rounds for time',	'2006-10-01'),
(9,	'Barbara',	'5 rounds for time:  20 pull ups, 30 push ups, 40 sit ups, 50 squats',	'Rounds for time',	'2006-11-30'),
(10,	'Kelly',	'5 rounds for time:  Run 400m, 30 box jumps, 30 wall ball shots',	'Running',	'2006-11-01'),
(11,	'Nancy',	'5 rounds for time:  Run 400m, 95lb overhead squat',	'Running',	'2006-12-31'),
(12,	'Murph',	'For time:  Run 1 mile, 100 pull ups, 200 push ups, 300 squats, Run 1 mile',	'Running',	'2006-12-05'),
(13,	'Angie',	'For time:  100 pull ups, 100 push ups, 100 sit ups, 100 squats',	'Rounds for time',	'2006-01-29'),
(14,	'Jackie',	'For time:  1000 meter row, 50 45lb thrusters, 30 pull ups',	'Rounds for time',	'2007-02-07'),
(15,	'Filthy Fiftys',	'For time:  50 box jumps, 50 jumping pull ups, 50 Kettlebell swings, 50 walking lunges, 50 knees to elbows, 50 45lb push press, 50 back extensions, 50 wall ball shots, 50 burpees, 50 double unders',	'Chipper',	'2008-07-20'),
(16,	'Karen',	'For time:  150 wall ball shots',	'Rounds for time',	'2008-08-07'),
(17,	'Isabel',	'For time:  30 reps 135lb snatch',	'Strength',	'2008-08-10'),
(18,	'Grace',	'For time:  30 reps 135lb clean & jerk',	'Strength',	'2007-08-11'),
(19,	'Jack',	'20 minutes:  10 115lb push press, 10 kettlebell swings, 10 box jump',	'AMRAP',	'2014-03-24'),
(20,	'Daniel',	'For time:  50 pull ups, 400m run, 21 95lb thruster, 800m run, 21 95lb thruster, 400m run, 50 pull ups',	'Running',	'2014-03-18');

-- 2015-11-17 05:49:31
