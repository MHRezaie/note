FROM composer:latest

ENV COMPOSERUSER=mhubuntu
ENV COMPOSERGROUP=mhubuntu

RUN adduser -g ${COMPOSERGROUP} -s /bin/sh -D ${COMPOSERUSER}