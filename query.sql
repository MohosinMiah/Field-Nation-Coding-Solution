SELECT
    u.`user_id`,
    u.`first_name`,
    u.`last_name`,
    AVG( tr.`correct` ) AS averageCorrectAnswer,
    MAX( tr.`time_taken` ) AS recentExamTaken
FROM
    `user` AS u
    LEFT JOIN `test_result` AS tr ON u.`user_id` = tr.`user_id`
GROUP BY
    u.`user_id`
ORDER BY
    u.`user_id` ASC
;
