# SMB Enumeration Tools
```
nmblookup -A target
```
```
smbclient //MOUNT/share -I target -N
```
```
rpcclient -U "" target
```
```
enum4linux target
```
```
nbtscan 192.168.1.0/24
```

# Fingerprint SMB Version

```
smbclient -L //192.168.1.100 

```

# Find open SMB Shares

```
nmap -T4 -v -oA shares --script smb-enum-shares --script-args smbuser=username,smbpass=password -p445 192.168.1.0/24   
```

# Enumerate SMB Users

```
nmap -sU -sS --script=smb-enum-users -p U:137,T:139 192.168.11.200-254 
```
```
python /usr/share/doc/python-impacket-doc/examples
/samrdump.py 192.168.XXX.XXX

```
# Manual Null session testing:
## Windows:
```
net use \\TARGET\IPC$ "" /u:""
```

## Linux:
```
smbclient -L //192.168.99.131
```
# NBTScan unixwiz
```
nbtscan-unixwiz -f 192.168.0.1-254 > nbtscan
```


