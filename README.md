# MediaBlanket Code Test

An application to connect to the server through an API for creation of leads.

## Requirement

PHP : 8.1

This is required to run the application successfully.

## Install

Clone the repo to your working directory using your favorite CLI console (eg: GitBash, PowerShell, cmd or any of your choice) 

```bash
$ git clone https://github.com/sundew28/mediablanket.git
```

Once you are done cloning the repo next would be to run composer in your console to install laravel framework dependencies by running the below composer command. Make sure you have composer installed

Via Composer

```bash
$ composer install
```

Once your dependencies are downloaded next would be setting up your in the .env or enviorment file. 
```bash
TEST_LEAD=true // set it true or false as you wish
TEST_AFF_ID=161 // set it as you wish
TEST_AFF_PASSWORD=XfXaQWmUWjhhBZKWv0gwHTa // set it as you wish
TEST_FIRST_NAME=TestCharles // set it as you wish
TEST_LAST_NAME=TestCharles // set it as you wish
TEST_MOBILE_NUMBER=07000000001 // set it as you wish
TEST_SORT_CODDE="12-34-56" // set it as you wish
TEST_URL="https://dev-leads.supadata.co.uk/submit-lead"
LIVE_URL="https://leads.supadata.co.uk/submit-lead"
TEST_FAKE_WEBSITE="www.some-loan-company.co.uk"
```

Now lets move on to installing the required node packages

```bash
$ npm install
```
After that run dev should spin up

```bash
$ npm run dev
```
