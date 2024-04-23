# gazsearch
# to install

- Add the repos to your composer.json:

    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/morrisrobinson/inspire"
        }
    ],
  
•	composer require morrisrobinson/ukgazsearch:dev

•	php artisan vendor:publish --provider=" morrisrobinson\ukgazsearch"

Add valid GAZSEARCH_API_KEY to env
