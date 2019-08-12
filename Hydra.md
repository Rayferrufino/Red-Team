# Basic Syntax

```sh
hydra -l/-L <user name / user list> -p/-P <password / password list> <protocol://hostname>
```
# Break Down
*-l/-L : Only one of these is needed. Little l is for nominating a single username, capital is for a username list*

*-p/-P : Only one of these is needed again. Little p for a single password, capital p for a password list.*

*<protocol://hostname> : This specifies the target and protocol.*

*For example cracking ssh on 192.168.1.1 would be ssh://192.168.1.1, while ftp on 10.1.2.3 would be ftp://10.1.2.3*

# Example
```sh
hydra -l bob -P /usr/share/wordlists/rockyou.txt ssh://192.168.1.15  # Cycle through a wordlist trying to log in as bob over ssh on 192.168.1.1
```
```sh
hydra -L usernames.txt -p password  192.168.1.1 http-get / -s 80   # Cycle through a list of usernames and try and log into the router at http://192.168.1.1:80/ with the password 'password'
```
