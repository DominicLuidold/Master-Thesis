# Build and start the Docker stack.
docker compose \
    --f ./docker/docker-compose.development.yml \
    -p ${PROJECT_NAME} \
    up -d --build

# Stop the Docker stack.
docker compose -p ${PROJECT_NAME} down
