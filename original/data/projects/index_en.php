<?php
header('Content-Type: application/json');

switch($title) {
    case "Online-Quotation-System":
        $project['name'] = "Online Quotation System";
        $project['tags'] = "Html5, Css3, Angularjs, Laravel, git, boostrap, API";
        $project['resume'] = "This quotation system starts with a lead and end generating all documentation in pdf to make a reservation";
        $project['desc'] = "This is a online quotation system, the front end was made with HTML 5,CSS, bootstrap as responsive framework and for all the interaction and data connection i used Angularjs. For The back end part and API i used Laravel PHP framework.";
        $project['date'] = '2014-02-20';
        $project['images'][] = "/images/projects/cotizador01.png";
        $project['images'][] = "/images/projects/cotizador02.png";
        $project['images'][] = "/images/projects/cotizador03.png";
        $project['images'][] = "/images/projects/cotizador04.png";
    break;

    case "Club-Solaris-V6":
        $project['name'] = "Club Solaris V6 Web Site";
        $project['tags'] = "Joomla: Template, modules, plagins, php, html5 css3, jQuery";
        $project['resume'] = "This quotation system starts with a lead and end generating all documentation in pdf to make a reservation";
        $project['desc'] = "This is the website of club solaris, is was made using joomla 3, i  programmed the template, 4 modules and 1 plugin also i wrote the html5 and css and the js code. I defined the behavior of animated / interactive components and I participated in the development of the User Interface (UI), User Experience (UX)";
        $project['date'] = '2014-11-01';
        $project['images'][] = "/images/projects/solarisv6/solaris01.jpg";
        $project['images'][] = "/images/projects/solarisv6/solaris02.jpg";
        $project['images'][] = "/images/projects/solarisv6/solaris03.jpg";
        $project['images'][] = "/images/projects/solarisv6/solaris04.jpg";
        break;


    case "Club-Solaris-V5":
        $project['name'] = "Club Solaris V5 Web Site";
        $project['tags'] = "Joomla: Template, modules, plagins, php, html5 css3, jQuery";
        $project['resume'] = "This quotation system starts with a lead and end generating all documentation in pdf to make a reservation";
        $project['desc'] = "This is the website of club solaris, is was made using joomla 3, i  programmed the template, 4 modules and 1 plugin also i wrote the html5 and css and the js code. I defined the behavior of animated / interactive components and I participated in the development of the User Interface (UI), User Experience (UX)";
        $project['date'] = '2013-12-20';
        $project['images'][] = "/images/projects/solarisv5/solaris01.jpg";
        $project['images'][] = "/images/projects/solarisv5/solaris02.jpg";
        $project['images'][] = "/images/projects/solarisv5/solaris03.jpg";
        $project['images'][] = "/images/projects/solarisv5/solaris04.jpg";
    break;

    case "specials":
        $project['name'] = "Specials & promotions Editor and landing page";
        $project['tags'] = "HTML5, less, jQuery, bootstrap, codeigniter";
        $project['resume'] = "This quotation system starts with a lead and end generating all documentation in pdf to make a reservation";
        $project['desc'] = "This program is used to control and edit the specials and promos of the vacation club, also include a landing page.For this project i used for de front end html5, less, bootstrap, jquery and for the data connection and back end i was used codeigniter. I contributed to the research and system flow requirements, i participated in the development of the User Interface (UI), User Experience (UX)";
        $project['date'] = '2013-02-15';
        $project['images'][] = "/images/projects/promoEditor/editor01.jpg";
        $project['images'][] = "/images/projects/promoEditor/editor02.jpg";
        $project['images'][] = "/images/projects/promoEditor/editor03.jpg";
        $project['images'][] = "/images/projects/promoEditor/editor04.jpg";
    break;

    case "Lifestyle":
        $project['name'] = "Lifestylevillas Web site";
        $project['tags'] = "Wordpress: template, plugins, XML, SOAP";
        $project['resume'] = "This quotation system starts with a lead and end generating all documentation in pdf to make a reservation";
        $project['desc'] = "This is the website for a villa rental company, i programmed the wordpress theme aun 3 plugins  among them one that connects to the escapia API in  XML SOAP.";
        $project['date'] = '2012-11-05';
        $project['images'][] = "/images/projects/lifestyle/lifestyle01.jpg";
        $project['images'][] = "/images/projects/lifestyle/lifestyle02.jpg";
        $project['images'][] = "/images/projects/lifestyle/lifestyle03.jpg";
        $project['images'][] = "/images/projects/lifestyle/lifestyle04.jpg";
    break;

    case "alchemy":
        $project['name'] = "Lead Alchemy";
        $project['tags'] = "php, javascript, jQuery, Html, css, mysql";
        $project['resume'] = "This quotation system starts with a lead and end generating all documentation in pdf to make a reservation";
        $project['desc'] = "This is the CRM of the call center, I contributed programming the front-end using web standards (HTML, CSS), jQuery, bootstrap 2, for the back-end part i used POO PHP and mysql. This system also have a rate calculator , a power line administrator, rate administrator for the booking engine, reports and statistics.";
        $project['date'] = '2011-11-20';
        $project['images'][] = "/images/projects/alchemy/alchemy01.jpg";
        $project['images'][] = "/images/projects/alchemy/alchemy02.jpg";
        $project['images'][] = "/images/projects/alchemy/alchemy03.jpg";
        $project['images'][] = "/images/projects/alchemy/alchemy04.jpg";
    break;
}
echo json_encode($project);
