# Usuful commands to scape ssh limited/restricted shell

## Example
```bash

hacker@beta:~$ whoami
-rbash: /usr/bin/python: restricted: cannot specify `/' in command names

```

# Solution

```bash

/bin/bash
export PATH=$PATH:/bin/
export PATH=$PATH:/usr/bin

ryuu@beta:~/usr$ whoami
ryuu
```



