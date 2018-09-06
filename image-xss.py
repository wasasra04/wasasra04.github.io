#!/usr/bin/env python

import sys
import subprocess
 
exifs = [
   "ImageDescription",
   "Make",
   "Model",
   "Software",
   "Artist",
   "Copyright",
   "XPTitle",
   "XPComment",
   "XPAuthor",
   "XPSubject",
   "Location",
   "Description",
   "Author"
]
 
if sys.argv[1] and sys.argv[2]:
    image = sys.argv[1]
    xss = sys.argv[2]
 
    for exif in exifs:
        attribute = "-{0}={1}".format(exif, xss)
        subprocess.call(["exiftool", attribute, image])
 
    subprocess.call(["exiftool", image])
else:
    print("No source image given")
