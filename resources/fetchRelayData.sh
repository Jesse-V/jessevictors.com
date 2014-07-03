#!/bin/bash

relay0='BFA0E9F3E6F446BB538877D89CD57DB1362E799C';
relay1='40DF7E2EDE33DFCB126D241BD1907EED70925498';
relay2='4B8C39A51FD0BE3F91E0A1C3F5AA67A17EC56EB7';
relay3='2FC06226AE152FBAB7620BB107CDEF0E70876A7B';
relay4='1946F5E4748B069D3B989B5AF50C7DDD3AC61859';

exit1='2FC06226AE152FBAB7620BB107CDEF0E70876A7B';
exit2='1946F5E4748B069D3B989B5AF50C7DDD3AC61859';

prefix='https://onionoo.torproject.org/details?fingerprint=';
postfix='&fields=observed_bandwidth';

r0JSON=$(wget --timeout=60 --tries=3 --quiet -O - $prefix$relay0$postfix 2>/dev/null);
r1JSON=$(wget --timeout=60 --tries=3 --quiet -O - $prefix$relay1$postfix 2>/dev/null);
r2JSON=$(wget --timeout=60 --tries=3 --quiet -O - $prefix$relay2$postfix 2>/dev/null);
r3JSON=$(wget --timeout=60 --tries=3 --quiet -O - $prefix$relay3$postfix 2>/dev/null);
r4JSON=$(wget --timeout=60 --tries=3 --quiet -O - $prefix$relay4$postfix 2>/dev/null);

e1JSON=$(wget --timeout=60 --tries=3 --quiet -O - $prefix$exit1$postfix 2>/dev/null);
e2JSON=$(wget --timeout=60 --tries=3 --quiet -O - $prefix$exit2$postfix 2>/dev/null);

dbFile='../../_private/sqlite.db';

sqlite3 $dbFile "UPDATE TorRelays SET bandwidth='$r0JSON' WHERE name='UtahState0';";
sqlite3 $dbFile "UPDATE TorRelays SET bandwidth='$r1JSON' WHERE name='UtahState1';";
sqlite3 $dbFile "UPDATE TorRelays SET bandwidth='$r2JSON' WHERE name='UtahState2';";
sqlite3 $dbFile "UPDATE TorRelays SET bandwidth='$r3JSON' WHERE name='UtahState3';";

sqlite3 $dbFile "UPDATE TorRelays SET bandwidth='$e1JSON' WHERE name='UtahStateExit';";
sqlite3 $dbFile "UPDATE TorRelays SET bandwidth='$e2JSON' WHERE name='UtahStateExit2';";

echo "Update finished";
