#!/usr/bin/env bash

set -e

PROJECT_NAME="learn.moeys.gov.kh"
GIT_REMOTE="https://github.com/OpenInstituteCambodia/learning.moeys.gov.kh.git"

SOURCE_DIR="~/src/${PROJECT_NAME}"
DEPLOY_DIR="~/${PROJECT_NAME}"

main() {
    cd "$SOURCE_DIR"

    yarn
    yarn build

    if [ ! -d "$DEPLOY_DIR" ]; then
        mkdir -p $DEPLOY_DIR
    fi

    sudo cp -r "dist/*" $DEPLOY_DIR
}

main
