FROM nginx:1.15.5-alpine

RUN apk add --no-cache perl

RUN rm -rf /etc/nginx/conf.d/default.conf

COPY nginx.conf /etc/nginx/conf.d/default.template

