#!/bin/bash
# Deploy script

SCRIPT_DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"

cat <<-HELP
Deploying process will:
1. Remove all vendor data from directory:
    ${SCRIPT_DIR}/vendor
2. Setup PHP vendor dependencies
3. Remove all cache from directory:
    ${SCRIPT_DIR}/var/cache
4. Apply all DB migrations
HELP

while true; do
    read -p "Are you sure you want to deploy(y/n)? " ANSWER
    case $ANSWER in
        [Yy]* )
            printf "Start deploying...\n"
            cd ${SCRIPT_DIR}

            cp .env.example .env

            # Install PHP vendor dependencies
            rm -rf vendor
            rm -rf var/cache/*
            rm -rf node_modules/*
            composer install

            # Apply migrations
            rm -r migrations/*
            mkdir migrations
            php bin/console doctrine:database:create --if-not-exists
            php bin/console doctrine:migration:diff
            php bin/console doctrine:migration:migrate --no-interaction
            
        exit;;
        [Nn]* )
            printf "\nExit with no changes\n"
        exit;;
        * ) printf "Please answer yes or no.\n\n";;
    esac
done