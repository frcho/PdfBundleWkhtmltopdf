Frcho\PdfBundle\Generator\PdfGenerator
===============

The actual PDF Generator that&#039;ll transform a view into a proper PDF.




* Class name: PdfGenerator
* Namespace: Frcho\PdfBundle\Generator
* This class implements: Knp\Snappy\GeneratorInterface




Properties
----------


### $filename

```
protected string $filename = 'siphoc_pdfbundle.pdf'
```

The default filename we'll use for the downloadable file.



* Visibility: **protected**


### $cssToHTML

```
protected \Frcho\PdfBundle\Generator\CssToInline $cssToHTML
```

The CssToHTML Converter.



* Visibility: **protected**


### $jsToHTML

```
protected \Frcho\PdfBundle\Generator\JSToHTML $jsToHTML
```

The JSToHTML Converter.



* Visibility: **protected**


### $logger

```
protected \Symfony\Component\HttpKernel\Log\LoggerInterface $logger
```

The logging instance used to log our messages to.



* Visibility: **protected**


### $templateEngine

```
protected \Symfony\Component\Templating\EngineInterface $templateEngine
```

The template engine we'll use to process our views.



* Visibility: **protected**


Methods
-------


### __construct

```
mixed Frcho\PdfBundle\Generator\PdfGenerator::__construct(\Frcho\PdfBundle\Converter\ConverterInterface $cssToHTML, \Frcho\PdfBundle\Converter\ConverterInterface $jsToHTML, \Knp\Snappy\GeneratorInterface $generator, \Symfony\Component\Templating\EngineInterface $templateEngine, \Symfony\Component\HttpKernel\Log\LoggerInterface $logger)
```

Initiate the PDF Generator.



* Visibility: **public**

#### Arguments

* $cssToHTML **[Frcho\PdfBundle\Converter\ConverterInterface](Frcho-PdfBundle-Converter-ConverterInterface.md)**
* $jsToHTML **[Frcho\PdfBundle\Converter\ConverterInterface](Frcho-PdfBundle-Converter-ConverterInterface.md)**
* $generator **Knp\Snappy\GeneratorInterface**
* $templateEngine **Symfony\Component\Templating\EngineInterface**
* $logger **Symfony\Component\HttpKernel\Log\LoggerInterface**



### getCssConverter

```
\Frcho\PdfBundle\Generator\CssToHTML Frcho\PdfBundle\Generator\PdfGenerator::getCssConverter()
```

Get the CssToHTML Converter.



* Visibility: **public**



### getGenerator

```
\Knp\Snappy\GeneratorInterface Frcho\PdfBundle\Generator\PdfGenerator::getGenerator()
```

Retrieve the generator we're using to convert our data to HTML.



* Visibility: **public**



### getTemplatingEngine

```
\Symfony\Component\Templating\EngineInterface Frcho\PdfBundle\Generator\PdfGenerator::getTemplatingEngine()
```

Retrieve the templating engine.



* Visibility: **public**



### getJSConverter

```
\Frcho\PdfBundle\Generator\JSToHTML Frcho\PdfBundle\Generator\PdfGenerator::getJSConverter()
```

Get the JSToHTML Converter.



* Visibility: **public**



### getLogger

```
\Symfony\Component\HttpKernel\Log\LoggerInterface Frcho\PdfBundle\Generator\PdfGenerator::getLogger()
```

Retrieve the logging instance.



* Visibility: **public**



### getName

```
string Frcho\PdfBundle\Generator\PdfGenerator::getName()
```

Retrieve the name for this PDF file.



* Visibility: **public**



### generate

```
mixed Frcho\PdfBundle\Generator\PdfGenerator::generate(string $input, string $output, array $options, bool $overwrite)
```

Generates the output media file from the specified input HTML file



* Visibility: **public**

#### Arguments

* $input **string** - The input HTML filename or URL
* $output **string** - The output media filename
* $options **array** - An array of options for this generation only
* $overwrite **bool** - Overwrite the file if it exists. If not, throw an InvalidArgumentException



### generateFromHtml

```
mixed Frcho\PdfBundle\Generator\PdfGenerator::generateFromHtml(string $html, string $output, array $options, bool $overwrite)
```

Generates the output media file from the given HTML



* Visibility: **public**

#### Arguments

* $html **string** - The HTML to be converted
* $output **string** - The output media filename
* $options **array** - An array of options for this generation only
* $overwrite **bool** - Overwrite the file if it exists. If not, throw an InvalidArgumentException



### getOutput

```
string Frcho\PdfBundle\Generator\PdfGenerator::getOutput(string $input, array $options)
```

Returns the output of the media generated from the specified input HTML
file



* Visibility: **public**

#### Arguments

* $input **string** - The input HTML filename or URL
* $options **array** - An array of options for this output only



### getOutputFromHtml

```
string Frcho\PdfBundle\Generator\PdfGenerator::getOutputFromHtml(string $html, array $options)
```

Generate the PDF from a given HTML string.

<p>Replace all the CSS and JS
tags with inline blocks/code.</p>

* Visibility: **public**

#### Arguments

* $html **string**
* $options **array**



### getOutputFromView

```
string Frcho\PdfBundle\Generator\PdfGenerator::getOutputFromView(string $view, array $parameters, array $options)
```

Retrieve the output from a Symfony view.

<p>This uses the selected
template engine and renders it trough that.</p>

* Visibility: **public**

#### Arguments

* $view **string**
* $parameters **array**
* $options **array**



### downloadFromView

```
\Symfony\Component\HttpFoundation\Response Frcho\PdfBundle\Generator\PdfGenerator::downloadFromView(string $view, array $parameters, array $options)
```

From a given view and parameters, create the proper response so we can
easily download the file.



* Visibility: **public**

#### Arguments

* $view **string**
* $parameters **array**
* $options **array** - Additional options for WKHTMLToPDF.



### setName

```
\Frcho\PdfBundle\Generator\PdfGenerator Frcho\PdfBundle\Generator\PdfGenerator::setName(string $name)
```

Set the name we'll use for the PDF file.



* Visibility: **public**

#### Arguments

* $name **string**



### log

```
mixed Frcho\PdfBundle\Generator\PdfGenerator::log(string $message)
```

Log a message to the logging system.



* Visibility: **public**

#### Arguments

* $message **string**


