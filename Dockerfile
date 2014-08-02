# GitElephant tests
#
# VERSION       0.1.0

FROM ubuntu:14.04

MAINTAINER Matteo Giachino matteog@gmail.com

# apt packages
RUN apt-get update
RUN apt-get upgrade -y
RUN apt-get install -y openssh-server

EXPOSE 22
CMD    ["/usr/sbin/sshd", "-D"]