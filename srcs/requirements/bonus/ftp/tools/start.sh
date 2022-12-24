# create user
adduser --disabled-password --gecos "" ${USER}
echo "${USER}:${PASSWORD}" | chpasswd

service vsftpd start
service vsftpd stop

chown -R ${USER}:${USER} /home/${USER}
# start ftp daemon
vsftpd