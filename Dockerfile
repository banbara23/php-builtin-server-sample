FROM php:5.6-alpine3.7
WORKDIR /workspace
EXPOSE 8000
CMD ["php","-S","0.0.0.0:8000"]