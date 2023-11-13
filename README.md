# Openshift & ChatGPT Legal Contract Documents Analyzer

An AI Tools that help Businesses, Companies etc. to Simplify, Analyze, Summarize and Translate Legal Contract Documents leveraging Openshift Technologies and ChatGPT AI

# License:  Open Source(MIT)
https://opensource.org/license/mit/


# How Install and Run the Application on Openshift

This application was written in PHP.

1.) Goto your Openshift Developer Sandbox Account and Login

2.) Goto OpenShift command line terminal

3.) Create persistent Database by running this Command **oc new-app mariadb-persistent** This command will create a persistent database called **sampledb** then copy the generated mysql database credentials.

Goto the application source code and locate **data6rst.php** file and update your Mysql Credentials where appropriates.

Run **oc status** to get the status of your application and also get **Mariadb host connection Ip address and port no** for your app mysql database connections

4.) Import and run the app from github by typing **oc new-app php~https://github.com/areaboy/legaldocumentanalyzerai**

5.) Run **oc logs -f buildconfig/legaldocumentanalyzerai** to track its progress.

6.) Run **oc expose service/legaldocumentanalyzerai** to expose your app to public

7.) Run **oc get routes** to get your application url. 

copy the url to browser  to load the applivation at **http://legaldocumentanalyzerai-fredolysis-dev.apps.sandbox-m4.g2pi.p1.openshiftapps.com/legaldocumentanalyzerai/**

Finally, when accessing the application online, remember to to install  database tables by clicking on button **install App
Database Table First**.  You can then signup and Login.  Remember to setup/add **ChatGPT API Key**  when you Login.    To obtain Chatgpt API Keys. Goto this link below and signup https://beta.openai.com/account/api-keys

After that go to this link and get and generate ChatGPT api key and click on View API Keys https://platform.openai.com/account/api-keys 

Thanks

