#!/bin/sh -eux

docker pull -q gcr.io/google.com/cloudsdktool/cloud-sdk:$2
CONTAINER=`docker run \
  -d \
  -p 8085:8085 \
  gcr.io/google.com/cloudsdktool/cloud-sdk:$2 gcloud beta emulators $1 start --host-port=0.0.0.0:8085 --project=emulator-project`
sleep 10
docker logs $CONTAINER
