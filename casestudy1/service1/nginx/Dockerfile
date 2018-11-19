FROM nginx:1.15.5-alpine

RUN apk add --no-cache perl

RUN rm -f /etc/nginx/conf.d/default.conf

COPY nginx.conf /etc/nginx/conf.d/default.template

#RUN chmod +x ./run.sh
#RUN nginx -g "daemon off;"
#CMD ["./run.sh"]
