# ACF-Local-JSON<br/>
**Contributors:** David Browne<br/>
**Tags:** acf, oxygen, json<br/>
**Requires at least:** ACF Pro 5.1.5<br/>
**License:** GPLv2 or later<br/>
**License URI:** http://www.gnu.org/licenses/gpl-2.0.html<br/>

Local JSON is a feature in Advanced Custom Fields Pro which saves field group and field settings as JSON files.

In short, the three main benefits to this feature are;

* Speeds up ACF as it reduces the amount of database queries on page load.
* Allows multiple devs to work on a project, use git to push / pull files, and keep all databases synchronized with the latest field group settings.
* Allows for version control over your field settings.

Usually, for this feature the files need to be stored inside a WordPress theme. This plugin just makes use of the filters to change the directory that ACF searches for, so they can be stored inside this plugin. Built especially for [Oxygen](http://oxygenbuilder.com/) where the theme is completely disabled.

See the official documentation, [overview of Local JSON in ACF](http://www.advancedcustomfields.com/resources/local-json/) for a better understanding.
 

## Installation ##

1. [Download the plugin here.](https://github.com/wplit/ACF-Local-JSON/archive/master.zip)
2. Go to Plugins > Add New in your WordPress admin. Click on `Upload Plugin` and browse for the zip file.
3. Activate the plugin.

## Usage ##

1. After installing, re-save your field groups and they will be now stored inside the acf-json directory in this plugin. 

## Changelog ##

### 1.0.0 - Oct 13, 2018 ###
* Initial Release
