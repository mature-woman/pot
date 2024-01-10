#!/bin/bash

if [ -d author/project ]; then
	mv author/project author/${REPO_NAME}
fi

if [ -d author ]; then
	mv author ${REPO_OWNER}
fi

