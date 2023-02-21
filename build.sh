docker build -t dashboard .
docker run --network host --name dashboard -it -d dashboard