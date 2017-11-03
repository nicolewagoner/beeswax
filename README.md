# Beeswax
Coding Challenge for Beeswax

## Explanation
While I typically prefer to avoid using hardcoded characters for comparison, I did so in this solution because the problem statment was to make this function run as efficiently as possible. 

The alternative approach that I was considering was to make an associative array, something like this:

``` $dict = ["{" => "}"]; ``` 

In which case our check for an opening brace would look more like this:

``` if(isset($char[$i]))```

And our check for a closing brace would look like this:

``` if(in_array($char, $array))``` <-- this check is not as efficient as checking against a hardcoded value

This dictionary approach would have been more useful in terms of maintenance if we were planning on expanding our checks to parenthesis or brackets. We would simply add the pairs to the ```$dict``` array. 

## Note
I just realized my system is running php version 5.5. I think the code I have should be compatible with the most recent version of PHP, but just as a side note :)
