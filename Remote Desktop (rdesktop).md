# Basic Syntax

```bash
rdesktop -u <username> -p <password> <ip address> -g <percentage / resolution></percentage></ip></password></username>
```
# Break Down

> -u : Username you wish to log in as

> -p : Password you wish to use

> <ip address> : Host you wish to connect to
  
> -g : Set’s the resolution you want to interact with the machine over. You can do a percentage of your own desktop (i.e 90%) or a set resolution (i.e. 800×600)

## Example
```bash
rdesktop -u Administrator -p sup3rs3cr3tp4ass 192.168.1.123 -g 90%
```
## Handy Hint

### This registry value when added will enable RDP

```bash
reg add "HKEY_LOCAL_MACHINE\SYSTEM\CurrentControlSet\Control\Terminal Server" /v fDenyTSConnections /t REG_DWORD /d 0 /f

```
