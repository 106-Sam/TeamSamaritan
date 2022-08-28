*Isolate the network*


Vbox-Settings> Network>Adapter1

Attached to : _Internal Network_
Name : <As you wish>

Ok

*DHCP server* 

- navigate to VBox files and perform that settings

```cmd 
cd /Program Files/Oracle/VirtualBox

vboxmanage dhcpserver add --network=<internal network name> --sever-ip=192.168.1.1 --lower-ip=192.168.1.2 --upper-ip=192.168.1.25 --netmask=255.255.255.0 --enable
```

