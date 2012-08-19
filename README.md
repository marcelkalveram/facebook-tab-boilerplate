facebook-tab-template
=====================

A basic HTML facebook tab boilerplate.
It includes fan page gating and a simple language switch.

Requirements
--------------
You should have PHP 5+ installed on your server.
You need to have a facebook application set up to obtain an application ID and SECRET.
Your server should be equipped with an SSL certificate, since most of the users will have secure browsing enabled.

Basic Facebook setup
--------------
Simply set up a new application at developers.facebook.com, and point the following values to your webserver directory,
where your application resides:

**Basic configuration**

- Canvas URL
- Secure Canvas URL
- Page Tab URL
- Secure Pag Tab URL

The `address of your website` should be within the same domain as your application.
Under `app domains` you should provide the domain name where your app is running, e.g.:
yourdomain.com if your application can be accessed via https://yourdomain.com/myapplication

**Auth dialog**

Doesn't need to be touched if all you're running is a facebook tab.

**Advanced**

Here you can add a description of your app, and define the countries where it can be seen.
Be sure to provide a link to your privacy policy and insert a valid contact email.

Facebook regularly publishes new breaking changes, so be sure to keep up to date with the latest changes via this URL:
https://developers.facebook.com/roadmap/

Adding your application to a tab
--------------
Follow this link to assign the applicatio you have created to a new tab inside your fan page.
https://apps.facebook.com/pagetabgenerator/

Insert your APP ID and select the page you want to add the application to.
After submission, the application will appear in a new tab of your fan page.

Usage
--------------
Just download this repository, and insert your content in the designated content areas.

In the inc/config.php, insert your APP ID and APP SECRET.
The Facebook SDK will require these values to make API calls on behalf of your application.

In line 17, we detect if the user is a fan of the page that the app is running in.