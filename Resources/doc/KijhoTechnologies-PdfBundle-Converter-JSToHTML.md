KijhoTechnologies\PdfBundle\Converter\JSToHTML
===============

Given a HTML page, take the external JS files and put it in the HTML with
&lt;script&gt; tags.




* Class name: JSToHTML
* Namespace: KijhoTechnologies\PdfBundle\Converter
* This class implements: [KijhoTechnologies\PdfBundle\Converter\ConverterInterface](KijhoTechnologies-PdfBundle-Converter-ConverterInterface.md)




Properties
----------


### $basePath

```
protected string $basePath
```

The basepath for our JS files.

<p>This is basically the /web folder.</p>

* Visibility: **protected**


### $requestHandler

```
protected \KijhoTechnologies\PdfBundle\Util\RequestHandlerInterface $requestHandler
```

The request handler used for external calls.



* Visibility: **protected**


Methods
-------


### __construct

```
mixed KijhoTechnologies\PdfBundle\Converter\JSToHTML::__construct(\KijhoTechnologies\PdfBundle\Util\RequestHandlerInterface $handler)
```

Initiate the JSToHTML class with the request handler interface.



* Visibility: **public**

#### Arguments

* $handler **[KijhoTechnologies\PdfBundle\Util\RequestHandlerInterface](KijhoTechnologies-PdfBundle-Util-RequestHandlerInterface.md)**



### convertToString

```
string KijhoTechnologies\PdfBundle\Converter\JSToHTML::convertToString(string $html)
```

Extract all the linked JS files and put them in the proper place on the
given HTML string.



* Visibility: **public**

#### Arguments

* $html **string**



### extractExternalJavaScript

```
array KijhoTechnologies\PdfBundle\Converter\JSToHTML::extractExternalJavaScript(string $html)
```

Given a HTML string, find all the JS files that should be loaded.



* Visibility: **public**

#### Arguments

* $html **string**



### getBasePath

```
string KijhoTechnologies\PdfBundle\Converter\JSToHTML::getBasePath()
```

Retrieve the BasePath used for this inline action.



* Visibility: **public**



### getRequestHandler

```
\KijhoTechnologies\PdfBundle\Util\RequestHandlerInterface KijhoTechnologies\PdfBundle\Converter\JSToHTML::getRequestHandler()
```

Retrieve the Request Handler used for external calls.



* Visibility: **public**



### setBasePath

```
\KijhoTechnologies\PdfBundle\Converter\CssToInline KijhoTechnologies\PdfBundle\Converter\JSToHTML::setBasePath(string $basePath)
```

Set the base path we'll use to fetch our css files from.



* Visibility: **public**

#### Arguments

* $basePath **string** - The base path where our css files are.



### createJavaScriptPaths

```
array KijhoTechnologies\PdfBundle\Converter\JSToHTML::createJavaScriptPaths(array $javascripts)
```

Check if a JavaScript file is a local or externalJavaScript file or.

<p>If
it is a local file, prepend our basepath to the link so we can properly
fetch the data to insert.</p>

* Visibility: **private**

#### Arguments

* $javascripts **array**



### getExternalJavaScriptRegex

```
string KijhoTechnologies\PdfBundle\Converter\JSToHTML::getExternalJavaScriptRegex()
```

This contains the regex we'll use to find the JS files in a given string.



* Visibility: **private**



### getJavaScriptContent

```
string KijhoTechnologies\PdfBundle\Converter\JSToHTML::getJavaScriptContent(string $path)
```

Fetch the content of a JavaScript file from a given path.



* Visibility: **private**

#### Arguments

* $path **string**



### isExternalJavaScriptFile

```
boolean KijhoTechnologies\PdfBundle\Converter\JSToHTML::isExternalJavaScriptFile(string $url)
```

Check if the given string is a string for a local JavaScript file or an
external JavaScript.



* Visibility: **private**

#### Arguments

* $url **string**



### replaceJavaScriptTags

```
string KijhoTechnologies\PdfBundle\Converter\JSToHTML::replaceJavaScriptTags(string $html, array $javaScriptFiles)
```

Replace the JavaScript tags that do external requests with inline
script blocks.



* Visibility: **private**

#### Arguments

* $html **string**
* $javaScriptFiles **array**


