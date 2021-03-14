#!/bin/bash

kubectl apply -f metallb_config.yaml
kubectl apply -f mysql_clusterip.yaml
kubectl apply -f nginx/nginx.yaml
kubectl apply -f wp/wp.yaml
kubectl apply -f lb.yaml
kubectl apply -f mysql/mysql.yaml
kubectl apply -f phpmyadmin/phpmyadmin.yaml
