# WP Google Maps - Force Importer API Key #

This plugin forces the WP Google Maps importer to use a different API key to the browser map, which solves "Request Denied" issues with geocoding on import where the server does not transmit the HTTP referrer field correctly. There is a field for an alternative key present in 8.1.0 which makes this plugin redundant.

## Installation ##

- Click "Download ZIP" on this screen
- Go to your WordPress dashboard
- Go to Plugins -> Add New -> Upload Plugins
- Upload the ZIP you downloaded just now
- *Do not* activate the plugin yet

## Usage ##

- You will need the IP address for your site. You can find that using a tool such as https://www.whatsmydns.net/
- Go to your Google API dashboard at https://console.cloud.google.com/apis/dashboard
- Create a new API key for your project
- Restrict the key using the IP address you obtained just now
- Go to your WordPress dashboard
- Go to Plugins -> Plugin Editor
- Open WP Google Maps - Force Importer API Key
- Paste your IP restricted key in, replacing `YOUR IP RESTRICTED KEY HERE`
- *Now* activate the plugin