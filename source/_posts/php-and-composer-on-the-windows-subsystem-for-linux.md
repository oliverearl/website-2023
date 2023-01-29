---
extends: _layouts.post
section: content
title: PHP and Composer on the Windows Subsystem for Linux
date: 2020-09-30
description: "A guide for getting PHP and Composer up and running under WSL"
featured: false
cover_image: /assets/img/posts/php-and-composer-on-the-windows-subsystem-for-linux/cover.jpg
categories: [php, computing, software-engineering]
---

In this guide, I'll be showing you step-by-step what you need to do to install the Windows Subsystem for Linux, and
then both PHP and the Composer package manager.

As a prerequisite, this requires an up-to-date version of Windows 10. Windows 8.1, 7, and below are unsupported. I 
will write about setting up PHP environments under legacy Windows versions in a later article.

## Step One - Installing WSL

![Adding features to Windows](/assets/img/posts/php-and-composer-on-the-windows-subsystem-for-linux/startmenu.jpg)

First, use your start menu or Cortana search bar to search for "**windows features**" - the first option provided will
be a tool to add or remove features to your Windows installation. Select this.

![Turn Windows features on or off](/assets/img/posts/php-and-composer-on-the-windows-subsystem-for-linux/features.jpg)

Once the dialogue appears, scroll down until you can find Windows Subsystem for Linux. Tick the box and click **OK**. 
Windows will download and install this functionality, and may require a system restart afterwards.

## Step Two - Installing a Linux distribution

![Microsoft Store and Linux distributions](/assets/img/posts/php-and-composer-on-the-windows-subsystem-for-linux/store.jpg)

After a restart, we can now choose a Linux distribution. Open the Microsoft Store app that you can find in your start 
menu. On the app, search for **linux** to bring up a list of available distributions.

You're free to choose whatever distribution I want, but for a beginner, it's my personal recommendation that you install
Ubuntu as it's well supported, easy-to-use, and does not require any complex configuration. Click on the one you want,
and choose either **Get** or **Install** \- depending on your system's locale. Once it's downloaded, the button's text
should change to **Launch** and Ubuntu will appear in your start menu. Fire it up.

### Step Three - Installation and UNIX username

![Installation of Ubuntu and setting a username](/assets/img/posts/php-and-composer-on-the-windows-subsystem-for-linux/unix.jpg)

After opening the app, it will take a few minutes to install. This can take a while on older systems, but fret not, 
it will finish!

After a short while, it will prompt you to set a UNIX username. This should be a single word, all lowercase, with no
spaces or symbols. My name is Oliver, so **oliver** is fine. Then set a password. This does not need to be the same as 
the password you use to log in to Windows. Don't forget, your password won't actually appear as asterisks as you type 
it, but it's definitely there - it's normal on these platforms.

Once that's done, you'll be presented with a command line and information regarding the system information.

### Step Four - Installation of PHP

![Installation of PHP from the Ubuntu terminal](/assets/img/posts/php-and-composer-on-the-windows-subsystem-for-linux/php.jpg)

Before you install PHP, you might need to refresh Ubuntu's repositories. I know this sounds complicated, but think of 
it like Ubuntu checking an app store for what's available. Type the following command to do this:

`sudo apt update`

It might prompt you that there are updates available, but you can take care of that later. Once update is done, we can
install PHP. Type the following command:

`sudo apt install php`

Sudo (short for superuser do) allows you to run commands as an administrator (root) - which is necessary for installing
new software. Apt is Ubuntu's package manager - necessary for pulling in said software. It will prompt you for the
password you set earlier.

The package manger may be different if you installed a different Linux distribution. openSUSE for example uses Zypper 
instead.

Give the package manager some time to install and configure PHP and all of its prerequisites. Once it's done, you can
check that it's fully installed using the following command:

`php -v`

This should print PHP's version to the screen. As of this time of writing, Ubuntu installs PHP 7.4 by default. My 
output looks like this:

`PHP 7.4.3 (cli) (built: May 26 2020 12:24:22) ( NTS ) Copyright (c) The PHP Group Zend Engine v3.4.0, Copyright (c) 
Zend Technologies with Zend OPcache v7.4.3, Copyright (c), by Zend Technologies`

### Installing Composer

![Composer post-installation](/assets/img/posts/php-and-composer-on-the-windows-subsystem-for-linux/composer.jpg)

All this talk of package managers, when yes, PHP has its own package manager! If you're familiar with JavaScript and/or
Node.js, you'll have definitely encountered NPM or Yarn, which perform basically the same functionality.

PHP's package manager is called Composer, and this can be easily installed at the command line in the same way you 
did PHP:

`sudo apt install composer`

Similarly, you can check the version and status of Composer using

`composer -v`

Your output will look similar to mine, along with a long list of commands and some ASCII art:

`Composer 1.10.1 2020-03-13 20:34:27`

Now Composer will be available at the command line for you to install global packages with, or to install local 
dependencies outlined in a project's `composer.json` file.

### Optional: Update Linux

As previously mentioned, you should update your Linux installation from time to time. You can do this by running the
following command:

`sudo apt update && sudo apt upgrade`

This double command will ensure that Ubuntu has the most up-to-date list of software, **and then** upgrade your 
software to the latest versions.

### Optional: Install the Laravel installer and add Composer binaries to PATH

First, install the Laravel installer using Composer:

`composer global require laravel/installer`

After this is installed, you should normally be able to type `laravel` to access its installer, but you should get an 
error. Why?

By default, any software you install globally via Composer won't be instantly accessible from your command line, 
because Composer's directories have not been added to your PATH. If you're not sure what this is, don't worry - in a 
nutshell, this is information that tells your terminal where it can find the programs that you type in 
(like `apt` or `php`) so they can be ran. Windows has this too.

![Nano editor](/assets/img/posts/php-and-composer-on-the-windows-subsystem-for-linux/aliases.jpg)

To fix this, you need to open your aliases file in a text editor. We'll use Nano, but feel free to use something else:

`nano ~/.bash_aliases`

In this file, type:

`export PATH=~/.config/composer/vendor/bin:$PATH`

Press **CTRL+O** to save, and **CTRL+X** to close Nano. With this change in place, we need to reload Bash's 
configuration. You only need to do this once.

`source ~/.bashrc`

Now, your Composer global applications will work. Type `laravel` to confirm this.

## Conclusions

By following this guide, you should be able to install the WSL under Windows 10 with Ubuntu, and have a functioning 
installation of PHP and Composer ready to go. I hope that this helps.

Please leave your comments below and if you found this useful, please let me know!
