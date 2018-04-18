# Etdslideshow Plugin

The *Etdslideshow* Plugin is a Grav plugin displaying a slideshow. It is for [Grav CMS](http://github.com/getgrav/grav).

## Installation

Installing the Etdslideshow plugin can be done in one of two ways. The GPM (Grav Package Manager) installation method enables you to quickly and easily install the plugin with a simple terminal command, while the manual method enables you to do so via a zip file.

### GPM Installation (Preferred)

The simplest way to install this plugin is via the [Grav Package Manager (GPM)](http://learn.getgrav.org/advanced/grav-gpm) through your system's terminal (also called the command line).  From the root of your Grav install type:

```
bin/gpm install etdslideshow
```

This will install the Etdslideshow plugin into your `/user/plugins` directory within Grav. Its files can be found under `/your/site/grav/user/plugins/etdslideshow`.

### Manual Installation

To install this plugin, just download the zip version of this repository and unzip it under `/your/site/grav/user/plugins`. Then, rename the folder to `etdslideshow`. You can find these files on [GitHub](https://github.com/etd-solutions/grav-plugin-etdslideshow) or via [GetGrav.org](http://getgrav.org/downloads/plugins#extras).

You should now have all the plugin files under

```
/your/site/grav/user/plugins/etdslideshow
```
	
> NOTE: This plugin is a modular component for Grav which requires [Grav](http://github.com/getgrav/grav) and the [Error](https://github.com/getgrav/grav-plugin-error) and [Problems](https://github.com/getgrav/grav-plugin-problems) to operate.

### Admin Plugin

If you use the admin plugin, you can install directly through the admin plugin by browsing the `Plugins` tab and clicking on the `Add` button.

## Updating

As development for the Etdslideshow plugin continues, new versions may become available that add additional features and functionality, improve compatibility with newer Grav releases, and generally provide a better user experience.

### GPM Update (Preferred)

The simplest way to update this theme is via the Grav Package Manager (GPM). You can do this with this by navigating to the root directory of your Grav install using your system's Terminal (also called command line) and typing the following:

```
bin/gpm update etdslideshow
```

This command will check your Grav install to see if your Etdslideshow plugin is due for an update. If a newer release is found, you will be asked whether or not you wish to update. To continue, type y and hit enter. The plugin will automatically update and clear Grav's cache.

## Configuration

Before configuring this plugin, you should copy the `user/plugins/etdslideshow/etdslideshow.yaml` to `user/config/plugins/etdslideshow.yaml` and only edit that copy.

Here is the default configuration and an explanation of available options:

```yaml
enabled: true
loadjquery: true
loadtwtbsjs: true
loadtwtbscss: true
```

Note that if you use the admin plugin, a file with your configuration, and named etdslideshow.yaml will be saved in the `user/config/plugins/` folder once the configuration is saved in the admin.

## Usage
```
[etdslideshow interval=5000 keyboard=true pause='hover' ride=false wrap=true show_controls=false show_indicators=false]
Caption text 1
___
Caption text 2
[/etdslideshow]
```
* Insert the images with the page of the code above.

## Credits

* [Twitter Bootstrap](https://getbootstrap.com)