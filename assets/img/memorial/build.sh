#!/bin/bash

SCRIPT_DIR="$( cd -- "$( dirname -- "${BASH_SOURCE[0]}" )" &> /dev/null && pwd )"
pushd "${SCRIPT_DIR}"

echo "#################### START ####################"
for image in ./*.{png,jpg}; do
    convert -thumbnail 160x90 "${image}" "./thumbnails/${image}"
    echo -e "<a href=\"<?=base_url(\"assets/img/memorial/${image#.\/}\")?>\">\n\t<img src=\"<?=base_url(\"assets/img/memorial/thumbnails/${image#.\/}\")?>\" loading=\"lazy\" />\n</a>"
done
echo "####################  END  ####################"
popd > /dev/null
