#!/bin/bash

truncate -s 0 README.md

for item in *.php; do
	echo "https://wasasra04.github.io/$item" >> README.md
	echo >> README.md
done

sed -i '$ d' README.md
