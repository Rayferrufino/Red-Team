# WHOIS enumeration
```whois domain-name-here.com 
```
# Perform DNS IP Lookup
dig a domain-name-here.com @nameserver 
Perform MX Record Lookup
dig mx domain-name-here.com @nameserver
Perform Zone Transfer with DIG
dig axfr domain-name-here.com @nameserver
DNS Zone Transfers
COMMAND	DESCRIPTION
nslookup -> set type=any -> ls -d blah.com

Windows DNS zone transfer

dig axfr blah.com @ns1.blah.com

Linux DNS zone transfer
