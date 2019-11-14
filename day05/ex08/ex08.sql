SELECT `first_name`, `last_name`, DATE(`birthdate`) AS `birthdate`
FROM `user_card`
WHERE YEAR(`birthdate`) LIKE '%1989%';