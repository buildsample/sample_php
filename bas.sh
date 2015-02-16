git --version
version=`git --version | awk '{print $3}'`
echo $version
version=( ${version//./ } )
echo $version
if [ "${version[0]}" -ge "1" ] && [ "${version[1]}" -gt "8" ]; then
  echo "Compatible"
fi;
