# ACF-Local-JSON
**Contributors:** David Browne  
**Tags:** acf, oxygen, json 
**Requires at least:** RCP 2.6.6
**License:** GPLv2 or later  
**License URI:** http://www.gnu.org/licenses/gpl-2.0.html

Local JSON is a feature in Advanced Custom Fields Pro which saves field group and field settings as .json files.

In short, the three main benefits to this featuere are;

* Speeds up ACF as it reduces the amount of database queries on page load.
* Allows multiple devs to work on a project, use git to push / pull files, and keep all databases synchronized with the latest field group settings.
* Allows for version control over your field settings.

Usually, for this feature the files are stores in a WordPress theme. This plugin allow you to store them inside the plugin. Built especially for [Oxygen](http://oxygenbuilder.com/) where the theme is completely disabled.

See the official documentation, [overview of Local JSON in ACF](http://www.advancedcustomfields.com/resources/local-json/) for better understanding.
 

## Installation ##

1. [Download the plugin here.](https://github.com/wplit/ACF-Local-JSON/archive/master.zip)
2. Go to Plugins > Add New in your WordPress admin. Click on `Upload Plugin` and browse for the zip file.
3. Activate the plugin.

## Usage ##

1. After installing, resave your field groups and they will be now stored inside the acf-json directory in this plugin. 

## Changelog ##

### 1.0.0 - Oct 13, 2018 ###
* Initial Release
