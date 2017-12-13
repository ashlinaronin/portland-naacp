# NAACP Portland WordPress Theme

This theme uses FoundationPress. If you have not worked with a Sass-based workflow before, I would recommend reading [FoundationPress for beginners](https://foundationpress.olefredrik.com/posts/tutorials/foundationpress-for-beginners), a short blog post that explains what you need to know.

## Collaboration
To collaborate on this project, make code changes to this Git repository and push your changes to `master`. The theme is automatically deployed to http://pdxnaacp.flywheelsites.com/ via TravisCI whenever code is pushed to `master`. The Travis CI build config is accessible from the TravisCI website to any Github user that is part of the Portland NAACP organization.

We should have a fruitful collaboration process if we follow these general guidelines:
* Add all data on the Flywheel staging site at http://pdxnaacp.flywheelsites.com/
* If you want to pull data from Flywheel to your machine, use the WP Migrate DB plugin
* DON'T USE the Push to Flywheel or Pull from Flywheel functionality in Local by Flywheel (it is not designed for collaboration)
* When you've finished a change locally, commit it with Git and push to master

Here's a step-by-step guide to set up a local development site using the Local by Flywheel tool:
1. Download Local by Flywheel
2. Log in to your Flywheel account in the Local by Flywheel app
3. Pull down an initial copy of the NAACP Portland site from Flywheel through the app
4. Start the site from Local and view your local site to make sure everything is working
5. Navigate to the wp-content/themes folder on your computer (on my Mac, the address is /Users/ashlinaronin/Local Sites/portland-naacp/app/public/wp-content/themes)
6. Delete the portland-naacp folder (you can make a copy somewhere else on your computer if this makes you nervous!)
7. Open a Terminal/Command prompt window in the themes folder (I would open a new Terminal window on Mac and enter 'cd /Users/ashlinaronin/Local Sites/portland-naacp/app/public/wp-content/themes')
8. Clone the git repository for the portland-naacp theme (git clone https://github.com/naacp-portland/naacp-portland-wordpress-theme)
9. Rename the resulting folder 'portland-naacp'
10. Enter the portland-naacp folder and run `npm install` to install dependencies
11. Run `npm start` in the portland-naacp folder to run the front-end build. Keep this open while you are developing so that changes to SASS and JavaScript are compiled and visible on your local development site
12. Open your local site again and make sure it still works
13. Make changes to the code and observe them locally
14. When you are ready to push changes to the site, check them into Git (w/ command line or GUI) and push to master. All code pushed to master will start an automatic build on TravisCI and deploy to Flywheel
15. Avoid using the Push / Pull functionality of Flywheel after the initial pull. We should only be pushing code from our local machines to the staging site on Flywheel, which we can do with Git. If we need data from the DB that is on staging but we don't have locally, we should use the WP Migrate DB plugin. In general, we should be editing all data on staging and pulling it down to local, not pushing data up from local to staging so that there is one master copy of the database that we all share and keep up-to-date.


## Helpful Info from FoundationPress

### Requirements

**This project requires [Node.js](http://nodejs.org) v4.x.x to v6.11.x to be installed on your machine.** Please be aware that you might encounter problems with the installation if you are using the most current Node version (bleeding edge) with all the latest features.

FoundationPress uses [Sass](http://Sass-lang.com/) (CSS with superpowers). In short, Sass is a CSS pre-processor that allows you to write styles more effectively and tidy.

The Sass is compiled using libsass, which requires the GCC to be installed on your machine. Windows users can install it through [MinGW](http://www.mingw.org/), and Mac users can install it through the [Xcode Command-line Tools](http://osxdaily.com/2014/02/12/install-command-line-tools-mac-os-x/).

Dependencies can be installed by running `npm install`.

### Project Structure

In the `/src` folder you will the working files for all your assets. Every time you make a change to a file that is watched by Gulp, the output will be saved to the `/dist` folder. The contents of this folder is the compiled code that you should not touch (unless you have a good reason for it).

The `/page-templates` folder contains templates that can be selected in the Pages section of the WordPress admin panel. To create a new page-template, simply create a new file in this folder and make sure to give it a template name.

I guess the rest is quite self explanatory. Feel free to ask if you feel stuck.

### Styles and Sass Compilation

 * `style.css`: Do not worry about this file. (For some reason) it's required by WordPress. All styling are handled in the Sass files described below

 * `src/assets/scss/app.scss`: Make imports for all your styles here
 * `src/assets/scss/global/*.scss`: Global settings
 * `src/assets/scss/components/*.scss`: Buttons etc.
 * `src/assets/scss/modules/*.scss`: Topbar, footer etc.
 * `src/assets/scss/templates/*.scss`: Page template styling

 * `dist/assets/css/app.css`: This file is loaded in the `<head>` section of your document, and contains the compiled styles for your project.

If you're new to Sass, please note that you need to have Gulp running in the background (``npm start``), for any changes in your scss files to be compiled to `app.css`.

