<?php

$json = '[{ "name": "Necklace", "created_at": "2019-03-01" }, { "name": "Bracelet", "created_at": "2019-03-05" }, { "name": "Dog Chain", "created_at": "2020-05-27" }]';

$data = json_decode($json, true);

$march_entries = array_filter($data, function($entry) {
    return date('m', strtotime($entry['created_at'])) === '03';
});
