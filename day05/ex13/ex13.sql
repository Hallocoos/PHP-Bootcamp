SELECT `floor_number`, ROUND(AVG(`nb_seats`) + 1, 0)
FROM `cinema`
GROUP BY `floor_number`;