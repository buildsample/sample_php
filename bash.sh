version=`git --version | awk '{print $3}'`
version=( ${version//./ } )
if [ "${version[0]}" -ge "1" ] && [ "${version[1]}" -gt "8" ]; then
  echo "Compatible"
fi;
