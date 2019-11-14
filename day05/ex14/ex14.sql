SELECT `floor_number` AS `Floor`, SUM(`nb_seats`) as `Seats` 
FROM `cinema`
GROUP BY `floor_number`
ORDER BY SUM(`nb_seats`) DESC;