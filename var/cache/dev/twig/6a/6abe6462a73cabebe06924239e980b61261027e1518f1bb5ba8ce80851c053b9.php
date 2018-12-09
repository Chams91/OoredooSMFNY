<?php

/* test.html.twig */
class __TwigTemplate_22c589056a84301c01981c39601c314ab97267fee70641aee0528f0f7fdec6c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "test.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "test.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "test.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "View your Document";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/responsive.css"), "html", null, true);
        echo "\">

    <style type=\"text/css\">

        #upload-button {
            width: 150px;
            display: block;
            margin: 20px auto;
        }

        #file-to-upload {
            display: none;
        }

        #pdf-main-container {
            width: 400px;
            margin: 20px auto;
        }

        #pdf-loader {
            display: none;
            text-align: center;
            color: #999999;
            font-size: 13px;
            line-height: 100px;
            height: 100px;
        }

        #pdf-contents {
            display: none;
        }

        #pdf-meta {
            overflow: hidden;
            margin: 0 0 20px 0;
        }

        #pdf-buttons {
            float: left;
        }

        #page-count-container {
            float: right;
        }

        #pdf-current-page {
            display: inline;
        }

        #pdf-total-pages {
            display: inline;
        }

        #pdf-canvas {
            border: 1px solid rgba(0,0,0,0.2);
            box-sizing: border-box;
        }

        #page-loader {
            height: 100px;
            line-height: 100px;
            text-align: center;
            display: none;
            color: #999999;
            font-size: 13px;
        }

    </style>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 74
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 75
        echo "<h2>XXXXX</h2>
<button class=\"btn btn-success\" id=\"upload-button\">Select PDF</button>
<input type=\"file\" id=\"file-to-upload\" accept=\"application/pdf\" />


<table class=\"table table-hover table-dark\">
    <thead>
    <tr>
        <th scope=\"col\">File Name</th>
        <th scope=\"col\">Consultation Time</th>
        <th scope=\"col\">Client Phone No'</th>
    </tr>
    </thead>

    <tbody>
    <tr>
        <td id=\"pdf-title\"></td>
        <td id=\"pdf-time\"></td>
        <td id=\"pdf-pagina-contenido\"></td>
    </tr>
    </tbody>
</table>

<div id=\"pdf-main-container\">
    <div id=\"pdf-loader\">Loading document ...</div>
    <div id=\"pdf-contents\">
        <div id=\"pdf-meta\">
            <div id=\"pdf-buttons\">
                <button class=\"btn btn-warning\" id=\"pdf-prev\">Previous</button>
                <button class=\"btn btn-warning\" id=\"pdf-next\">Next</button>
            </div>
            <div id=\"page-count-container\">Page <div id=\"pdf-current-page\"></div> of <div id=\"pdf-total-pages\"></div></div>
        </div>
        <canvas id=\"pdf-canvas\" width=\"400\"></canvas>
        <div id=\"page-loader\">Loading page ...</div>
    </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 114
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 115
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/pdf.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/pdf.worker.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment.js"), "html", null, true);
        echo "\"></script>
    <script>

    var __PDF_DOC,
        __CURRENT_PAGE,
        __TOTAL_PAGES,
        __PAGE_RENDERING_IN_PROGRESS = 0,
        __CANVAS = \$('#pdf-canvas').get(0),
        __TITLE,
        __TIME,

        __CANVAS_CTX = __CANVAS.getContext('2d');


    function showPDF(pdf_url) {
        \$(\"#pdf-loader\").show();

        PDFJS.workerSrc = \"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/pdf.worker.js"), "html", null, true);
        echo "\";
        PDFJS.getDocument({url:pdf_url}).then(function (PDFDocumentInstance) {

            // Use the PDFDocumentInstance To extract the text later

            var pdfDocument = PDFDocumentInstance;
            // Create an array that will contain our promises
            var pagesPromises = [];
            var pageNumber= 1;

            // Store the promise of getPageText that returns the text of a page
            pagesPromises.push(getPageText(pageNumber, pdfDocument));


            // Execute all the promises
            Promise.all(pagesPromises).then(function (pagesText) {

                \$(\"#pdf-pagina-contenido\").append(pagesText);

            });

        }, function (reason) {
            // PDF loading error
            console.error(reason);
        });

        PDFJS.getDocument({ url: pdf_url }).then(function(pdf_doc) {
            __PDF_DOC = pdf_doc;
            __TOTAL_PAGES = __PDF_DOC.numPages;
            __TITLE=\$(\"#file-to-upload\").get(0).files[0].name;
            __TIME= moment(new Date().getTime()).format('DD-MM-YYYY HH:mm:ss');
            // Hide the pdf loader and show pdf container in HTML
            \$(\"#pdf-loader\").hide();
            \$(\"#pdf-contents\").show();
            \$(\"#pdf-total-pages\").text(__TOTAL_PAGES);
            \$(\"#pdf-title\").text(__TITLE);
            \$(\"#pdf-time\").text(__TIME);

            // Show the first page
            showPage(1);
        }).catch(function(error) {
            // If error re-show the upload button
            \$(\"#pdf-loader\").hide();
            \$(\"#upload-button\").show();

            alert(error.message);
        });;
    }

    /**
     * Retrieves the text of a specif page within a PDF Document obtained through pdf.js
     *
     * @param {Integer} pageNum Specifies the number of the page
     * @param {PDFDocument} PDFDocumentInstance The PDF document obtained
     **/
    function getPageText(pageNum, PDFDocumentInstance) {
        // Return a Promise that is solved once the text of the page is retrieven
        return new Promise(function (resolve, reject) {
            PDFDocumentInstance.getPage(pageNum).then(function (pdfPage) {
                // The main trick to obtain the text of the PDF page, use the getTextContent method
                pdfPage.getTextContent().then(function (textContent) {
                    var textItems = textContent.items;
                    var finalString = \"\";

                    // Concatenate the string of the item to the final string
                    for (var i = 9; i < 10; i++) {
                        var item = textItems[i];

                        finalString += item.str + \" \";
                    }

                    // Solve promise with the text retrieven from the page
                    resolve(finalString);
                });
            });
        });
    }

    function showPage(page_no) {
        __PAGE_RENDERING_IN_PROGRESS = 1;
        __CURRENT_PAGE = page_no;

        // Disable Prev & Next buttons while page is being loaded
        \$(\"#pdf-next, #pdf-prev\").attr('disabled', 'disabled');

        // While page is being rendered hide the canvas and show a loading message
        \$(\"#pdf-canvas\").hide();
        \$(\"#page-loader\").show();

        // Update current page in HTML
        \$(\"#pdf-current-page\").text(page_no);

        // Fetch the page
        __PDF_DOC.getPage(page_no).then(function(page) {
            // As the canvas is of a fixed width we need to set the scale of the viewport accordingly
            var scale_required = __CANVAS.width / page.getViewport(1).width;

            // Get viewport of the page at required scale
            var viewport = page.getViewport(scale_required);

            // Set canvas height
            __CANVAS.height = viewport.height;

            var renderContext = {
                canvasContext: __CANVAS_CTX,
                viewport: viewport
            };

            // Render the page contents in the canvas
            page.render(renderContext).then(function() {
                __PAGE_RENDERING_IN_PROGRESS = 0;

                // Re-enable Prev & Next buttons
                \$(\"#pdf-next, #pdf-prev\").removeAttr('disabled');

                // Show the canvas and hide the page loader
                \$(\"#pdf-canvas\").show();
                \$(\"#page-loader\").hide();
            });
        });
    }

    // Upon click this should should trigger click on the #file-to-upload file input element
    // This is better than showing the not-good-looking file input element
    \$(\"#upload-button\").on('click', function() {
        \$(\"#file-to-upload\").trigger('click');
    });

    // When user chooses a PDF file
    \$(\"#file-to-upload\").on('change', function() {
        // Validate whether PDF
        if(['application/pdf'].indexOf(\$(\"#file-to-upload\").get(0).files[0].type) == -1) {
            alert('Error : Not a PDF');
            return;
        }

        \$(\"#upload-button\").hide();

        // Send the object url of the pdf
        showPDF(URL.createObjectURL(\$(\"#file-to-upload\").get(0).files[0]));
    });

    // Previous page of the PDF
    \$(\"#pdf-prev\").on('click', function() {
        if(__CURRENT_PAGE != 1)
            showPage(--__CURRENT_PAGE);
    });

    // Next page of the PDF
    \$(\"#pdf-next\").on('click', function() {
        if(__CURRENT_PAGE != __TOTAL_PAGES)
            showPage(++__CURRENT_PAGE);
    });



    \$( document ).ready(function() {

        \$( \"#pdf-pagina-contenido\" ).bind(\"DOMSubtreeModified\",function() {
            var title = \$( \"#pdf-title\" ).text();
            var time = \$(\"#pdf-time\").text();
            var phoneNo = \$(\"#pdf-pagina-contenido\").text();
            storeData(title,time,phoneNo);
        });

    });


    function storeData(title,time,phoneNo)
    {
        \$.ajax({
            type: \"POST\",
            url: '";
        // line 308
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("store");
        echo "',
            data: { title: title ,
                time : time,
                phoneNo: phoneNo
            } ,

            success: function (data) {
                // this is executed when ajax call finished well
                alert('Content of the executed page: ' + title +' - Time: '+time);
            },
            error:function(error){
                alert('Error: data couldnt be created');
                console.log(error);
            }
        });
    }



</script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  432 => 308,  257 => 136,  237 => 119,  233 => 118,  229 => 117,  225 => 116,  220 => 115,  211 => 114,  163 => 75,  154 => 74,  75 => 5,  70 => 4,  61 => 3,  43 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
    {% block title %}View your Document{% endblock %}
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/responsive.css') }}\">

    <style type=\"text/css\">

        #upload-button {
            width: 150px;
            display: block;
            margin: 20px auto;
        }

        #file-to-upload {
            display: none;
        }

        #pdf-main-container {
            width: 400px;
            margin: 20px auto;
        }

        #pdf-loader {
            display: none;
            text-align: center;
            color: #999999;
            font-size: 13px;
            line-height: 100px;
            height: 100px;
        }

        #pdf-contents {
            display: none;
        }

        #pdf-meta {
            overflow: hidden;
            margin: 0 0 20px 0;
        }

        #pdf-buttons {
            float: left;
        }

        #page-count-container {
            float: right;
        }

        #pdf-current-page {
            display: inline;
        }

        #pdf-total-pages {
            display: inline;
        }

        #pdf-canvas {
            border: 1px solid rgba(0,0,0,0.2);
            box-sizing: border-box;
        }

        #page-loader {
            height: 100px;
            line-height: 100px;
            text-align: center;
            display: none;
            color: #999999;
            font-size: 13px;
        }

    </style>
    {% endblock %}
{% block content %}
<h2>XXXXX</h2>
<button class=\"btn btn-success\" id=\"upload-button\">Select PDF</button>
<input type=\"file\" id=\"file-to-upload\" accept=\"application/pdf\" />


<table class=\"table table-hover table-dark\">
    <thead>
    <tr>
        <th scope=\"col\">File Name</th>
        <th scope=\"col\">Consultation Time</th>
        <th scope=\"col\">Client Phone No'</th>
    </tr>
    </thead>

    <tbody>
    <tr>
        <td id=\"pdf-title\"></td>
        <td id=\"pdf-time\"></td>
        <td id=\"pdf-pagina-contenido\"></td>
    </tr>
    </tbody>
</table>

<div id=\"pdf-main-container\">
    <div id=\"pdf-loader\">Loading document ...</div>
    <div id=\"pdf-contents\">
        <div id=\"pdf-meta\">
            <div id=\"pdf-buttons\">
                <button class=\"btn btn-warning\" id=\"pdf-prev\">Previous</button>
                <button class=\"btn btn-warning\" id=\"pdf-next\">Next</button>
            </div>
            <div id=\"page-count-container\">Page <div id=\"pdf-current-page\"></div> of <div id=\"pdf-total-pages\"></div></div>
        </div>
        <canvas id=\"pdf-canvas\" width=\"400\"></canvas>
        <div id=\"page-loader\">Loading page ...</div>
    </div>
</div>

{% endblock %}
    {% block javascripts %}
    <script src=\"{{ asset('js/jquery-3.2.1.min.js') }}\"></script>
    <script src=\"{{ asset('js/pdf.js') }}\"></script>
    <script src=\"{{ asset('js/pdf.worker.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset(\"js/moment.js\") }}\"></script>
    <script>

    var __PDF_DOC,
        __CURRENT_PAGE,
        __TOTAL_PAGES,
        __PAGE_RENDERING_IN_PROGRESS = 0,
        __CANVAS = \$('#pdf-canvas').get(0),
        __TITLE,
        __TIME,

        __CANVAS_CTX = __CANVAS.getContext('2d');


    function showPDF(pdf_url) {
        \$(\"#pdf-loader\").show();

        PDFJS.workerSrc = \"{{ asset('js/pdf.worker.js') }}\";
        PDFJS.getDocument({url:pdf_url}).then(function (PDFDocumentInstance) {

            // Use the PDFDocumentInstance To extract the text later

            var pdfDocument = PDFDocumentInstance;
            // Create an array that will contain our promises
            var pagesPromises = [];
            var pageNumber= 1;

            // Store the promise of getPageText that returns the text of a page
            pagesPromises.push(getPageText(pageNumber, pdfDocument));


            // Execute all the promises
            Promise.all(pagesPromises).then(function (pagesText) {

                \$(\"#pdf-pagina-contenido\").append(pagesText);

            });

        }, function (reason) {
            // PDF loading error
            console.error(reason);
        });

        PDFJS.getDocument({ url: pdf_url }).then(function(pdf_doc) {
            __PDF_DOC = pdf_doc;
            __TOTAL_PAGES = __PDF_DOC.numPages;
            __TITLE=\$(\"#file-to-upload\").get(0).files[0].name;
            __TIME= moment(new Date().getTime()).format('DD-MM-YYYY HH:mm:ss');
            // Hide the pdf loader and show pdf container in HTML
            \$(\"#pdf-loader\").hide();
            \$(\"#pdf-contents\").show();
            \$(\"#pdf-total-pages\").text(__TOTAL_PAGES);
            \$(\"#pdf-title\").text(__TITLE);
            \$(\"#pdf-time\").text(__TIME);

            // Show the first page
            showPage(1);
        }).catch(function(error) {
            // If error re-show the upload button
            \$(\"#pdf-loader\").hide();
            \$(\"#upload-button\").show();

            alert(error.message);
        });;
    }

    /**
     * Retrieves the text of a specif page within a PDF Document obtained through pdf.js
     *
     * @param {Integer} pageNum Specifies the number of the page
     * @param {PDFDocument} PDFDocumentInstance The PDF document obtained
     **/
    function getPageText(pageNum, PDFDocumentInstance) {
        // Return a Promise that is solved once the text of the page is retrieven
        return new Promise(function (resolve, reject) {
            PDFDocumentInstance.getPage(pageNum).then(function (pdfPage) {
                // The main trick to obtain the text of the PDF page, use the getTextContent method
                pdfPage.getTextContent().then(function (textContent) {
                    var textItems = textContent.items;
                    var finalString = \"\";

                    // Concatenate the string of the item to the final string
                    for (var i = 9; i < 10; i++) {
                        var item = textItems[i];

                        finalString += item.str + \" \";
                    }

                    // Solve promise with the text retrieven from the page
                    resolve(finalString);
                });
            });
        });
    }

    function showPage(page_no) {
        __PAGE_RENDERING_IN_PROGRESS = 1;
        __CURRENT_PAGE = page_no;

        // Disable Prev & Next buttons while page is being loaded
        \$(\"#pdf-next, #pdf-prev\").attr('disabled', 'disabled');

        // While page is being rendered hide the canvas and show a loading message
        \$(\"#pdf-canvas\").hide();
        \$(\"#page-loader\").show();

        // Update current page in HTML
        \$(\"#pdf-current-page\").text(page_no);

        // Fetch the page
        __PDF_DOC.getPage(page_no).then(function(page) {
            // As the canvas is of a fixed width we need to set the scale of the viewport accordingly
            var scale_required = __CANVAS.width / page.getViewport(1).width;

            // Get viewport of the page at required scale
            var viewport = page.getViewport(scale_required);

            // Set canvas height
            __CANVAS.height = viewport.height;

            var renderContext = {
                canvasContext: __CANVAS_CTX,
                viewport: viewport
            };

            // Render the page contents in the canvas
            page.render(renderContext).then(function() {
                __PAGE_RENDERING_IN_PROGRESS = 0;

                // Re-enable Prev & Next buttons
                \$(\"#pdf-next, #pdf-prev\").removeAttr('disabled');

                // Show the canvas and hide the page loader
                \$(\"#pdf-canvas\").show();
                \$(\"#page-loader\").hide();
            });
        });
    }

    // Upon click this should should trigger click on the #file-to-upload file input element
    // This is better than showing the not-good-looking file input element
    \$(\"#upload-button\").on('click', function() {
        \$(\"#file-to-upload\").trigger('click');
    });

    // When user chooses a PDF file
    \$(\"#file-to-upload\").on('change', function() {
        // Validate whether PDF
        if(['application/pdf'].indexOf(\$(\"#file-to-upload\").get(0).files[0].type) == -1) {
            alert('Error : Not a PDF');
            return;
        }

        \$(\"#upload-button\").hide();

        // Send the object url of the pdf
        showPDF(URL.createObjectURL(\$(\"#file-to-upload\").get(0).files[0]));
    });

    // Previous page of the PDF
    \$(\"#pdf-prev\").on('click', function() {
        if(__CURRENT_PAGE != 1)
            showPage(--__CURRENT_PAGE);
    });

    // Next page of the PDF
    \$(\"#pdf-next\").on('click', function() {
        if(__CURRENT_PAGE != __TOTAL_PAGES)
            showPage(++__CURRENT_PAGE);
    });



    \$( document ).ready(function() {

        \$( \"#pdf-pagina-contenido\" ).bind(\"DOMSubtreeModified\",function() {
            var title = \$( \"#pdf-title\" ).text();
            var time = \$(\"#pdf-time\").text();
            var phoneNo = \$(\"#pdf-pagina-contenido\").text();
            storeData(title,time,phoneNo);
        });

    });


    function storeData(title,time,phoneNo)
    {
        \$.ajax({
            type: \"POST\",
            url: '{{ path('store') }}',
            data: { title: title ,
                time : time,
                phoneNo: phoneNo
            } ,

            success: function (data) {
                // this is executed when ajax call finished well
                alert('Content of the executed page: ' + title +' - Time: '+time);
            },
            error:function(error){
                alert('Error: data couldnt be created');
                console.log(error);
            }
        });
    }



</script>
        {% endblock %}", "test.html.twig", "C:\\wamp64\\www\\OoredooSMF\\app\\Resources\\views\\test.html.twig");
    }
}
