#!/bin/bash

if [ -d author/project ]; then
	mv author/project author/${REPO_NAME}
fi

if [ -d author ]; then
	mv author ${REPO_OWNER}
fi

if [ -e ${REPO_OWNER}/${REPO_NAME}/system/settings/*.sample ]; then
	for i in ${REPO_OWNER}/${REPO_NAME}/system/settings/*.sample; do
    cp "$$i" "$${i/.sample/}";
  done
fi
