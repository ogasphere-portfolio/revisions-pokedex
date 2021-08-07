SELECT pokemon.*, `type`.`name` as typename
FROM   `pokemon` P
       INNER JOIN `type` T
             ON P.`numero` = T.`pokemon_numero`
 INNER JOIN `pokemon_type` R
             ON R.`typeid` = T.`id`


SELECT
   `pokemon`.*,
   `type`.`name`
   FROM
   `pokemon`,
   `type`,
   `pokemon_type`
WHERE
`pokemon`.`numero` = `pokemon_type`.`pokemon_numero` AND
`type`.`id` = `pokemon_type`.`type_id`
GROUP BY
`pokemon`.`nom`