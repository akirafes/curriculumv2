<?php

header('Content-Type: application/json');

switch($title) {
    case "Online-Quotation-System":
        $project['name'] = "Sistema de Reservaciones en Línea";
        $project['tags'] = "Html5, Css3, Angularjs, Laravel, git, boostrap, API";
        $project['resume'] = "This quotation system starts with a lead and end generating all documentation in pdf to make a reservation";
        $project['desc'] = "Este es un Sistema de cotización en línea usado por los bookers del call center, la parte del Front-end se realizó usando HTML5, CSS3, boostrap y para la integración de los datos utilice angularJS. En la parte del Back de utilizo Laravel para la generación del API JSON.<br><br>
Este sistema Tiene la facultad de poder cotizar N número de habitaciones usando diferentes tarifarios y promociones. Al final se genera un documento en PDF con el cual se realiza la reservación.
";
        $project['date'] = '2014-02-20';
        $project['images'][] = "/images/projects/cotizador01.png";
        $project['images'][] = "/images/projects/cotizador02.png";
        $project['images'][] = "/images/projects/cotizador03.png";
        $project['images'][] = "/images/projects/cotizador04.png";
        break;

    case "Club-Solaris-V5":
        $project['name'] = "Sitio web Club Solaris V5";
        $project['tags'] = "Joomla: Template, modules, plagins, php, html5 css3, jQuery";
        $project['resume'] = "This quotation system starts with a lead and end generating all documentation in pdf to make a reservation";
        $project['desc'] = "Esta es la sexta versión del sitio web del club vacacional, se utilizó el CMS joomla y se programó desde el template usando boostrap hasta algunos módulos y plugins, participe en la creación y programación de la interface de usuario, se usaron también algunos plugins de Jquery para crear los módulos como por ejemplo los slideshows.";
        $project['date'] = '2013-12-20';
        $project['images'][] = "/images/projects/solarisv5/solaris01.jpg";
        $project['images'][] = "/images/projects/solarisv5/solaris02.jpg";
        $project['images'][] = "/images/projects/solarisv5/solaris03.jpg";
        $project['images'][] = "/images/projects/solarisv5/solaris04.jpg";
        break;

    case "Club-Solaris-V6":
        $project['name'] = "Sitio web Club Solaris V6";
        $project['tags'] = "Joomla: Template, modules, plagins, php, html5 css3, jQuery";
        $project['resume'] = "This quotation system starts with a lead and end generating all documentation in pdf to make a reservation";
        $project['desc'] = "Esta es la sexta versión del sitio web del club vacacional, se utilizó el CMS joomla y se programó desde el template usando boostrap hasta algunos módulos y plugins, participe en la creación y programación de la interface de usuario, se usaron también algunos plugins de Jquery para crear los módulos como por ejemplo los slideshows.";
        $project['date'] = '2014-11-01';
        $project['images'][] = "/images/projects/solarisv6/solaris01.jpg";
        $project['images'][] = "/images/projects/solarisv6/solaris02.jpg";
        $project['images'][] = "/images/projects/solarisv6/solaris03.jpg";
        $project['images'][] = "/images/projects/solarisv6/solaris04.jpg";
        break;



    case "specials":
        $project['name'] = "Editor de promociones y landig page";
        $project['tags'] = "HTML5, less, jQuery, bootstrap, codeigniter";
        $project['resume'] = "This quotation system starts with a lead and end generating all documentation in pdf to make a reservation";
        $project['desc'] = "Este programa es usando para llevar el control de todas las promociones desplegadas dentro de los sitios web del club vacacional, también incluye la creación de landing page a partir de dichas promos. <br> Para este proyecto se utilizó en la parte del front html5, less, boostrap y jQuery. Para la parte del back de utilizo codeigniter.<br> Yo participe en el análisis de requerimientos y flujo del sistema, así como en el desarrollo de la interface de usuario (UI) y experiencia de usuario (UX).";
        $project['date'] = '2013-02-15';
        $project['images'][] = "/images/projects/promoEditor/editor01.jpg";
        $project['images'][] = "/images/projects/promoEditor/editor02.jpg";
        $project['images'][] = "/images/projects/promoEditor/editor03.jpg";
        $project['images'][] = "/images/projects/promoEditor/editor04.jpg";
        break;

    case "Lifestyle":
        $project['name'] = "Sitio web Lifestyle villas";
        $project['tags'] = "Wordpress: template, plugins, XML, SOAP";
        $project['resume'] = "This quotation system starts with a lead and end generating all documentation in pdf to make a reservation";
        $project['desc'] = "Este es el sitio web de una compañía que renta villas, yo programe el tema de wordpress y 3 plugins que se conectan a un sistema de publicación y renta de villas llamado Escapia por medio de su API programando con XML SOAP.";
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
        $project['desc'] = "Este es el CRM que se utiliza en el call center del club vacacional, este sistema tiene 4 años funcionando y lo he programado prácticamente en un 100%, se utilizó html, css y plugins de jquery para la parte del front y php POO con mysql en la del back. <br> Este sistema incluye también una calculadora de tarifas, administrador tarifario para el sistema de reservas, reportes, estadísticas, control de clientes, citas, status y documentos, así como la asignación automatizada de los leads en base a un powerline.";
        $project['date'] = '2011-11-20';
        $project['images'][] = "/images/projects/alchemy/alchemy01.jpg";
        $project['images'][] = "/images/projects/alchemy/alchemy02.jpg";
        $project['images'][] = "/images/projects/alchemy/alchemy03.jpg";
        $project['images'][] = "/images/projects/alchemy/alchemy04.jpg";
        break;
}
echo json_encode($project);
