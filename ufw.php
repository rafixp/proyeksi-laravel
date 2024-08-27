<?php

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://game.quizizz.com/play-api/reactionUpdate');
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"playerId":"Rafi Ahfa","roomHash":"66cd2b6a77e31be623954258","hostId":"605d8eacd3d64e001b1e7a55","questionId":"","triggerType":"live-reaction","reactionDetail":{"id":6,"intensity":1}}');

print_r(curl_exec($ch));
