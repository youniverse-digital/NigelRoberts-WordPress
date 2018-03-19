# Baryon
## A starter WordPress theme and build tool
___

To start the tool, run "npm run dev" in a command line from the root directory of the theme. The "config.js" file is the only file that needs to be altered in order to get started with a project, and only needs site-dependent information. Structure is explained below -

 - **projectName**: The name of the theme. This will be used to bundle the files into an installable .zip.
 - **projectDevURL**: The URL of the local PHP server to proxy. It's recommended to **not** use ".local" and ".dev" domains, as this causes conflicts with Bonjour and the Chromium HSTS Preload list. A subdomain, such as "dev.mysite.io", is best.
 - **buildDir**: The directory in which to build the theme. 
 - **buildInc**: An array of filetypes to include/exclude from the build process. It's recommended to leave this as-is, but can be customised if needed.

 Version 0.3.0.