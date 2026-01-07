#!/bin/bash

if [ -d author/project ]; then
	mv author/project author/${REPO_NAME}
fi

if [ -d author ]; then
	mv author ${REPO_OWNER}
fi

for i in ${REPO_OWNER}/${REPO_NAME}/system/settings/*.sample; do
  echo $$i;
  if [ ! -f "$${i/.sample/}" ]; then
    cp "$$i" "$${i/.sample/}";
    echo $${i/.sample/};
  fi
done
