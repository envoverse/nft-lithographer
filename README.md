# nft-lithographer

A simple PHP command line tool to add a counting number to an image.
You can set the X and Y coordinates and choose a font, set the color and size.

It then executes "exiftool" to add your info to the created image.
The exiftool is available for various systems. On Ubuntu just do an apt-install, if the package is missing.

Define source and a target directory.

We use it for our METIS drop.
