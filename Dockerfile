FROM centos:7
LABEL maintainer="corey_robinson@mymail.eku.edu"
ENV container docker
RUN (cd /lib/systemd/system/sysinit.target.wants/; for i in *; do [ $i == \
systemd-tmpfiles-setup.service ] || rm -f $i; done); \
rm -f /lib/systemd/system/multi-user.target.wants/*;\
rm -f /etc/systemd/system/*.wants/*;\
rm -f /lib/systemd/system/local-fs.target.wants/*; \
rm -f /lib/systemd/system/sockets.target.wants/*udev*; \
rm -f /lib/systemd/system/sockets.target.wants/*initctl*; \
rm -f /lib/systemd/system/basic.target.wants/*;\
rm -f /lib/systemd/system/anaconda.target.wants/*;

RUN yum -y install epel-release;\
    yum -y install yum-utils;\
    yum -y install http://rpms.remirepo.net/enterprise/remi-release-7.rpm;\
    yum-config-manager -y --enable remi-php72;\
    yum -y update;\
    yum -y install php php-mysql;\
    yum -y install httpd;\
    yum clean all;\
    systemctl enable httpd.service;\
    yum -y install mariadb-server mariadb;\
    systemctl enable mariadb.service;

COPY index.php /var/www/html/
COPY ez-lamp.css /var/www/html/
COPY images /var/www/html/images

EXPOSE 80 443 3306
VOLUME [ "/sys/fs/cgroup" ]
CMD ["/usr/sbin/init"]