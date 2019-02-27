# PHP-Captcha
PHP Captcha Generator

To use this library, you need PHP 5.6+ used on your server

## AVAILABLE METHOD

### getImage()

Used to get base64 image of generated captcha

### getId()

Used to get captcha generation id, this id is used to validating the captcha input from client/user

## EXAMPLE USAGE

<pre><code>
&lt;?php

$captcha = new Captcha();
$captchaGen = $captcha-&gt;length(6)-&gt;size(170, 50)-&gt;generate();

?&gt;

&lt;form&gt;
  &lt;input type=&quot;hidden&quot; name=&quot;captcha_id&quot; value=&quot;&lt;?php echo $captchaGen-&gt;getId(); ?&gt;&quot;&gt;
  &lt;img src=&quot;&lt;?php echo $captchaGen-&gt;getImage(); ?&gt;&quot; /&gt;
  &lt;label for=&quot;captcha&quot;&gt;Captcha Code:&lt;/label&gt;
  &lt;br/&gt;
  &lt;input type=&quot;text&quot; name=&quot;captcha&quot; required&gt;
  &lt;br/&gt;&lt;br/&gt;
  &lt;input type=&quot;submit&quot; value=&quot;SUBMIT&quot;&gt;
&lt;/form&gt;
</pre></code>
