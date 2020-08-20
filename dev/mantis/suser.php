<?php
curl --location --request POST 'http://www.istm.online/zzmantis/api/rest/users/' \
--header 'Authorization: DJUR_n18h3jjaMDtgAA2St0D48KKbuGZ' \
--header 'Content-Type: application/json' \
--data-raw '{
  "username": "testuser",
  "password": "p@ssw0rd",
  "real_name": "Victor Boctor",
  "email": "victor@yet-another-domain.com",
  "access_level": { "name": "updater" },
  "enabled": false,
  "protected": false
}'
  ?>