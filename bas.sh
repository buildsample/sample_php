git --version
version=`git --version | awk '{print $3}'`
echo $version
version=( ${version//./ } )
echo ${version[0]}
echo ${version[1]}
if [ "${version[0]}" -gt "1" ] || ( [ "${version[0]}" -eq "1" ] && [ "${version[1]}" -gt "8" ] ); then
  echo "Compatible"
fi;
