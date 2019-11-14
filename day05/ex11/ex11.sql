SELECT UPPER(`last_name`) AS `NAME`, `first_name`, `subscription.price`
FROM `user_card, subscription`
WHERE (`subscription.price` >= 42)
ORDER BY `NAME` ASC, `first_name` ASC;