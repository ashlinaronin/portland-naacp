# NAACP Portland WordPress Theme

This theme uses FoundationPress. If you have not worked with a Sass-based workflow before, I would recommend reading [FoundationPress for beginners](https://foundationpress.olefredrik.com/posts/tutorials/foundationpress-for-beginners), a short blog post that explains what you need to know.

## Caching
There are several kinds of caching in place to ensure visitors to the site can load and view it quickly.

Our hosting provider Flywheel has setup server-side caching which pre-renders HTML pages from PHP to save processing speed.

Also, most browsers will cache static assets (e.g. CSS, images) by default to save bandwidth and improve performance when reloading a page they've already been to. Most of the time, this is a good thing, but it can be frustrating when users don't see the latest changes you have made, especially styling updates. To get around this, the current version number of the theme is appended in the query string to all static assets. If you are making a change that you want to ensure all users see, you can bump the version number to ensure that all user's browsers will download the new file (since the query string will have changed, essentially giving it a new filename and invalidating the browser's cached version with the old version number).

To bump the version number, update the version field in `style.css` and `package.json`. The version in `style.css` is the one that actually gets used for the query string, but it's good to be consistent so the version number is the same in both places.

The version number is in the format 1.2.3 where 1 is a major version, 2 is a minor version and 3 is a bug fix or tiny tweak. It's up to developer discretion what qualifies as each, but when you have decided on a new version number make sure to update it in both places, then save and commit the file and push to Github.

Once the CI build completes, you may need to clear the server cache on Flywheel as well. There is a button that says Flush Cache in the Advanced tab of the Portland NAACP site in the Flywheel admin.

## Collaboration
Let's follow these general guidelines to ensure a smooth collaboration process:
* Enter all data (copy, posts, etc.) on the Flywheel staging site at http://pdxnaacp.flywheelsites.com/
* If you want to pull data from Flywheel to your machine, use the WP Migrate DB plugin
* DON'T USE the Push to Flywheel or Pull from Flywheel functionality in Local by Flywheel (it is not designed for collaboration)
* When you've finished a change locally, commit it with Git and push to master (it will automatically be deployed to http://pdxnaacp.flywheelsites.com in ~5 minutes via TravisCI)

Here's a step-by-step guide to set up a local development site using the Local by Flywheel tool:
1. Download Local by Flywheel
2. Log in to your Flywheel account in the Local by Flywheel app
3. Pull down an initial copy of the NAACP Portland site from Flywheel through the app
4. Start the site from Local and view your local site to make sure everything is working
5. Make sure Dev mode is on in Local so that cache is disabled for local development (important!)
6. Navigate to the wp-content/themes folder on your computer (on my Mac, the address is /Users/ashlinaronin/Local Sites/portland-naacp/app/public/wp-content/themes)
7. Delete the portland-naacp folder (you can make a copy somewhere else on your computer if this makes you nervous!)
8. Open a Terminal/Command prompt window in the themes folder (I would open a new Terminal window on Mac and enter 'cd /Users/ashlinaronin/Local Sites/portland-naacp/app/public/wp-content/themes')
9. Via the command line, clone the git repository for the portland-naacp theme (Run the command `git clone https://github.com/naacp-portland/naacp-portland-wordpress-theme`)
10. Rename the resulting folder 'portland-naacp'
11. Enter the portland-naacp folder and run `npm install` to install dependencies

Daily workflow
1. Run `npm start` in the portland-naacp folder to run the front-end build every time you start a new work session. Keep the Terminal window running this command open while you are developing so that changes to SASS and JavaScript are compiled and visible on your local development site
2. If you want to take advantage of automatic browser reloading, open the access URL spit out by Browsersync in the Terminal after running `npm start`. For example, for me it is http://localhost:3001
3. Make changes to the code in your editor and observe them automatically update in your browser
4. When you make a change in the code, commit it with Git (w/ command line or GUI)
    * Command line Git commands: `git add .`, `git commit -m "My commit message here"`
    * When you're ready to push your changes to the Flywheel site, first run `git pull` to pull down the latest changes by your collaborators
    * Then run `git push` to push your changes to the Github repository. All code pushed to Github will start an automatic build on TravisCI and deploy to Flywheel. If you try to push changes before pulling down changes made by collaborators, Git will warn you and instruct you to pull first.
5. Avoid using the Push / Pull functionality of Flywheel after the initial pull. We should only be pushing code from our local machines to the staging site on Flywheel, which we can do with Git. If we need data from the DB that is on staging but we don't have locally, we should use the WP Migrate DB plugin or a DB-only export via Duplicator. In general, we should be editing all data on staging and pulling it down to local, not pushing data up from local to staging so that there is one master copy of the database that we all share and keep up-to-date.

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


