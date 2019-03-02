# PHP Captcha Generator

To use this library, make sure you are using PHP 5.6 or latest

## AVAILABLE METHOD

### image()

Used to get base64 image of generated captcha

### id()

Used to get captcha generation id, this id is used to validate the captcha input from client/user

### chars($chars)

Set the character list that will be used to generate captcha code

### length($length)

Define the captcha code length

### size($width, $height)

Set the width and height of captcha image

### generate()

Generate captcha

### validate($id, $captchaCode)

Validate captcha from user input

## EXAMPLE USAGE

### HTML Form
<pre><code>
&lt;?php

require &apos;/path/to/src/Captcha.php&apos;;

$captcha = new ZerosDev\Captcha();
$generate = $captcha-&gt;length(6)-&gt;chars('ABCDEFGHIJKLMNOPQRSTUVWXYZ')-&gt;size(170, 50)-&gt;generate();

?&gt;

&lt;form&gt;
  &lt;input type=&quot;hidden&quot; name=&quot;captcha_id&quot; value=&quot;&lt;?php echo $generate-&gt;id(); ?&gt;&quot;&gt;
  &lt;img src=&quot;&lt;?php echo $generate-&gt;image(); ?&gt;&quot; /&gt;
  &lt;label for=&quot;captcha&quot;&gt;Captcha Code:&lt;/label&gt;
  &lt;br/&gt;
  &lt;input type=&quot;text&quot; name=&quot;captcha&quot; required&gt;
  &lt;br/&gt;&lt;br/&gt;
  &lt;input type=&quot;submit&quot; value=&quot;SUBMIT&quot;&gt;
&lt;/form&gt;
</pre></code>

### Validation
<pre><code>
&lt;?php

require &apos;/path/to/src/Captcha.php&apos;;

$captcha = new ZerosDev\Captcha();

if( $captcha-&gt;validate($_POST[&apos;captcha_id&apos;], $_POST[&apos;captcha&apos;]) )
{
    echo &apos;Valid!&apos;;
}
else
{
    echo &apos;Invalid&apos;;
}

?&gt;
</pre></code>
