octodex.php
===========

A PHP class for the Octodex API.

##Use
Use this class like any other PHP class:

```php
// include the PHP Octodex class
include('octodex.php');

// initialize the class and store it in $octodex
$octodex = new Octodex();

// fetch all octocats and print the returned array
print_r($octodex->completeOctodex());
```

For complete annotation, see [the actual class file (octodex.php)](octodex.php) as well as the [demo implementation](demo.php).

##Class Methods
Assuming `$octodex = new Octodex();`.  Check the [response example](#example-response) below, to see what these functions wil serve you.

###Complete Octodex
**`$octodex->completeOctodex()`** 

Returns an array containing every octocat from [the Octodex](https://octodex.github.com).

###Random Octocat
**`$octodex->randomOctocat()`** 

Returns an array containing a random octocat from [the Octodex](https://octodex.github.com).

###Octocat by Number
**`$octodex->numberedOctocat($number)`**

Where `$number` is a number between 1 and the number of the last Octocat (as of 1/12/14 this - 113), and returns that numbered Octocat from [the Octodex](https://octodex.github.com).  

The API checks if the number exists in the Octodex, so you don't have to check if it does.

##Example Response
```
Array
(
    [name] => Original
    [page] => http://octodex.github.com/original
    [image] => http://octodex.github.com/images/original.png
    [author] => http://octodex.github.com/original
    [number] => 1
    [authorURL] => http://www.idokungfoo.com
    [authorAvatar] => https://img.skitch.com/20110427-p3wtwcbu957cf9mm93s4sjqqci.png
)
```

###Keys
- `name` - the name of the octocat
- `page` - the webpage of the octocat
- `image` - the raw image URL of the octocat
- `author` - the creator of the octocat
- `number` - the number of the octocat in the series
- `authorURL` - the URL of the author (GitHub/Website)
- `authorAvatar` - the avatar of the author

##To Do
- Check for errors given by the API and handle them

##Use of Octocats
Check out the GitHub Octodex frequently asked questions (http://octodex.github.com/faq), for specific use.  GitHub owns all of the Octocats, this PHP class just uses an API that grabs all of their data.