<?php
    $page = getPost("page","get","profile");

    header('Content-Type: application/json');
    $section['name'] = 'Perfil';
    $section['icon'] = 'fa fa-user';
    $section['current'] = false;
    $section['url'] = '/#/profile';
    $sections[] = $section;

    $section['name'] = 'Trabajo';
    $section['icon'] = 'fa fa-briefcase';
    $section['current'] = false;
    $section['url'] = '/#/work';
    $sections[] = $section;

    $section['name'] = 'Curriculum';
    $section['icon'] = 'fa fa-file-text';
    $section['current'] = false;
    $section['url'] = '/#/resume';
    $sections[] = $section;

    $section['name'] = 'Contacto';
    $section['icon'] = 'fa fa-envelope';
    $section['current'] = false;
    $section['url'] = '/#/contact';
    $sections[] = $section;

    $section['name'] = 'Blog';
    $section['icon'] = 'fa fa-comment';
    $section['current'] = false;
    $section['url'] = '/#/blog';
    $sections[] = $section;

    $json['sections'] = $sections;

    $footer['facebook'] =  "https://www.facebook.com/akira.fes";
    $footer['twitter'] =  "https://twitter.com/akira_fes";
    $footer['google'] =  "https://plus.google.com/+Fernandoespinosasalido/about";
    $footer['linkedin'] =  "https://www.linkedin.com/in/seniordeveloper1";
    $footer['text'] = '© 2014 Fernando Espinosa. Derechos Reservados';
    $json['footer'] = $footer;


   switch($page){
       case "work":
           $json = null;
           $json['title'] = 'Portafolio';
          // for($x = 1;$x <= 12; $x++){
               $project['id'] = "Online-Quotation-System";
               $project['image'] = "images/projects/thumb01.jpg";
               $project['title'] = "Cotizador en línea";
               $project['resume'] = "Cotizador de estancia en el hotel, inicia con un posible cliente y termina generando  la documentación de la reserva en PDF.";
               $project['boton'] = "Ver Detalles";
               $project['tags'] = "Html5, Css3, Angularjs, Laravel, git, boostrap, API";
               $json['projects'][] = $project;

           $project['id'] = "Club-Solaris-V5";
           $project['image'] = "images/projects/solarisv5/thumb01.jpg";
           $project['title'] = "Club Solaris V5 Sitio Web";
           $project['resume'] = "Sitio echo con joomla para el club vacacional, se programó el témplate y algunos modulos.";
           $project['boton'] = "Ver Detalles";
           $project['tags'] = "Joomla: Template, modules, plagins, php, html5 css3, jQuery";
           $json['projects'][] = $project;

           $project['id'] = "Club-Solaris-V6";
           $project['image'] = "images/projects/solarisv6/thumb01.jpg";
           $project['title'] = "Club Solaris V6 Sitio Web";
           $project['resume'] = "Sitio responsivo echo con joomla para el club vacacional, se programó el témplate y algunos modulos.";
           $project['boton'] = "Ver Detalles";
           $project['tags'] = "Joomla: Template, modules, plagins, php, html5 css3, jQuery";
           $json['projects'][] = $project;

           $project['id'] = "specials";
           $project['image'] = "images/projects/promoEditor/thumb01.jpg";
           $project['title'] = "Editor de promociones y landing pages";
           $project['resume'] = "Este programa se utilizó para editar las promociones y landing pages del club vacacional.";
           $project['boton'] = "Ver Detalles";
           $project['tags'] = "HTML5, less, jQuery, bootstrap, codeigniter";
           $json['projects'][] = $project;

           $project['id'] = "Lifestyle";
           $project['image'] = "images/projects/lifestyle/thumb01.jpg";
           $project['title'] = "Lifestylevillas Sitio Web";
           $project['resume'] = "Sitio web de la empresa Lifestyle Villas, esta integrado con el API de Escapia";
           $project['boton'] = "Ver Detalles";
           $project['tags'] = "Wordpress: template, plugins, XML, SOAP";
           $json['projects'][] = $project;

           $project['id'] = "alchemy";
           $project['image'] = "images/projects/alchemy/thumb01.jpg";
           $project['title'] = "Lead Alchemy";
           $project['resume'] = "Este es el CRM utilizador en Club Solaris, lleva todo el control desde el registro del lead, programación de citas, etc";
           $project['boton'] = "Ver Detalles";
           $project['tags'] = "php, javascript, jQuery, Html, css, mysql";
           $json['projects'][] = $project;
          // } 
           break;

       case "profile":
            $s["title"] = "Hola, Soy <span>Fernando Espinosa</span><br> desarrollador Back y Front-end";
            $s['msg'] = "<p>Tengo 8 años de experiencia como desarrollador web. Tengo mucha experiencia desarrollando CSS y HTML5 para producir sitios web modernos. Tengo bastante experiencia utilizando frameworks como Laravel y codeigniter para la parte del back-end y angularJS junto jquery para el Front-End. Conozco bien Bootstrap para la generación de interfaces responsivas.</p>";
            $s['subTitle'] = 'Información Personal';
            $s['name'] = "Fernando Espinosa S.";
            $s['email'] = "mail@fer.cc";
            $s['mobile'] = "+52 (624) 12745-05";
            $s['birthday'] = "1977-02-21";
            $s['livein'] = "Los Cabos, Mexico";
            $s['linkedin'] = '<a href="http://mx.linkedin.com/in/seniordeveloper1"> <img src="images/linkedin.png" width="126" height="32" border="0" alt="Ver el perfil de Fernando Espinosa Salido en LinkedIn"></a>
                              <a href="https://www.facebook.com/akira.fes"> <img src="images/facebook.png" width="126" height="32" border="0" alt="Ver el perfil de Fernando Espinosa Salido en facebook"></a>';
           $s['language'] = "es";
            $s['labels']['name'] = "Nombre";
            $s['labels']['bith'] = "Fecha de Nacimiento";
            $s['labels']['mail'] = "Correo";
            $s['labels']['live'] = "Vivo en";
            $s['labels']['mobile'] = "Celular";
            $s['labels']['website'] = "Sitio Web";
            $s['labels']['social'] = "M. Sociales";
            $s['labels']['projects'] = "Proyectos";

           $s['labels']['contact'] = "Contáctame";
           $s['labels']['goto'] = "Ir a página Siguiente/Anterior";
           $s['labels']['sendme'] = "Envíame un mensaje";
           $s['labels']['sendmessage'] = "Enviar";
           $s['labels']['message'] = "Mensage";
           $s['labels']['contactInfo'] = "Información de Contacto";
           $s['labels']['contactText'] = "Si deseas contactarme para saber un poco más acerca de mí y mi trabajo este es el lugar, yo vivo en el paraíso llamado Los Cabos, un lugar fantástico para vivir, 90% de los días son soleados y la playa es Hermosa.";
            //Contact Us
            //Go to next/previous page
            //Send me a message
            //Send Message
            //Message
            //Contact info
            //If you want to contact me, this is the place!,I live in the paradise called San Jose del Cabo, great place to live, 90% of the days are sunny and the beach is beautiful.
            $json['profile'] = $s;
            break;

       case "resume":
           $s["title"] = "Curriculum";
           $education['title'] = 'Club Solaris';
           $education['date'] = '2013 - 2014';
           $education['position'] = 'Gerente eBussiness';
           $education['info'] = 'Responsabilidades:<br><ul class="job"><li>Percibir y traducir las necesidades de los clientes y del Mercado en estrategias y planes de acción.</li>
           <li>Generación de clientes utilizando los sitios web, campañas y medios sociales de la empresa.</li>
           <li>Planeación, desarrollo y mantenimiento de los diferentes sitios de la compañía.</li>
           <li>Generar estrategias para incrementar la presencia y reputación en linea por medio de redes sociales.</li>
           <li>Desarrollar e implementar diferentes sistemas para incrementar la productividad del Call Center</li>
           <li>Trabajar en conjunto del equipo de diseño y tecnologías de la información para identificar y generar ideas para incrementar la funcionalidad de los diferentes sitios y sistemas.</li>
           <li>Organizar sprints y juntas del scrum</li>
           <li>Proveer de diferentes medidas para evaluar la productividad de los miembros del equipo</li>';
           $e[] = $education;
           $education['title'] = 'Club Solaris';
           $education['date'] = '2007 - 2014';
           $education['position'] = 'Programador Senior';
           $education['info'] = 'Responsabilidades:<br><ul class="job"><li>Convertir imagines y diseños de interface que el diseñador gráfico desarrolla en templates HTML/CSS.</li>
           <li>Programación de todas las interfaces Back y Front de los diferentes sistemas usando Frameworks de PHP, Frameworks de Javascipt y Frameworks para interfaces responsivas.</li>
           <li>Probar las aplicaciones en diferentes navegadores y realizar las modificaciones pertinentes para su correcta visualización.</li>
           <li>Diseñar e implementar templates impulsados por usuarios así como sus bases de datos e interfaces.</li>
           <li>Integrar  usando sistemas con base web las bases de datos y deferentes sistemas de información.</li>
           <li>Supervisar la producción y aplicación de los diferentes sistemas desarrolados</li>
           <li>Soporte de los diferentes sistemas desarrollados.</li>
           <li>Analizar las necesidades de los usuarios y determinar los diferentes requerimientos para los sistemas .</li></ul>';
           $e[] = $education;
           $education['title'] = 'Dibse';
           $education['date'] = '2005 - 2007';
           $education['position'] = 'Lider Tecnico';
           $education['info'] = 'Responsabilidades:<br><ul class="job"><li>Interface entre los clientes y el equipo de desarrollo.</li>
           <li>Asegurarme que las diferentes actividades de desarrollo se encuentren alineadas a los objetivos, tiempos y prioridades del negocio.</li>
           <li>Asegurar que todas las tareas y actividades relacionadas con el diseño técnico y desarrollo se han completado de acuerdo con las directrices de gestión de proyectos</li>
           <li>Proporcionar y gestionar las evaluaciones que miden el desempeño de cada miembro del equipo.</li>
           <li>Consultoría en cualquiera de los diferentes proyectos del cliente..</li>
           </ul>';
           $e[] = $education;
           $sub['title'] = "Experiencia Laboral";
           $sub['list'] = $e;
           $s['sub'] = $sub;


           $job['title'] = 'Graphic River';
           $job['date'] = '2001 - 2004';
           $job['info'] = "This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.";
           $j[] = $job;
           $job['title'] = 'Graphic River';
           $job['date'] = '2001 - 2004';
           $job['info'] = "This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.";
           $j[] = $job;
           $job['title'] = 'Graphic River';
           $job['date'] = '2001 - 2004';
           $job['info'] = "This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.";
           $j[] = $job;
           $sub = "";
           $sub['title'] = "Education";
           $sub['list'] = $j;
           $s['job'] = $sub;

           $skills['title'] = "Habilidades Back-End";
           $skill['name'] = "Programacion estructurada PHP";
           $skill['value'] = "95";
           $skill['color'] = "success";
           $skill['years'] = "8 años";
           $skills['skills'][] = $skill;

           $skill['name'] = "PHP POO";
           $skill['value'] = "90";
           $skill['color'] = "success";
           $skill['years'] = "2 años";
           $skills['skills'][] = $skill;

           $skill['name'] = "Webservices";
           $skill['value'] = "80";
           $skill['color'] = "success";
           $skill['years'] = "4 años";
           $skills['skills'][] = $skill;

           $skill['name'] = "Laravel";
           $skill['value'] = "85";
           $skill['color'] = "success";
           $skill['years'] = "2 años";
           $skills['skills'][] = $skill;

           $skill['name'] = "Programacion de Arañas y Webbots";
           $skill['value'] = "90";
           $skill['color'] = "success";
           $skill['years'] = "4 años";
           $skills['skills'][] = $skill;

           $skill['name'] = "Symfony";
           $skill['value'] = "70";
           $skill['color'] = "success";
           $skill['years'] = "2 años";
           $skills['skills'][] = $skill;

           $skills['skills'][] = $skill;
           $json = $s;
           $json['back'] = $skills;
           $skills = null;
           $skill = null;
           $skills['title'] = "Habilidades Front-End";

           $skill['name'] = "XHTML / CSS2";
           $skill['value'] = "96";
           $skill['color'] = "warning";
           $skill['years'] = "9 años";
           $skills['skills'][] = $skill;

           $skill['name'] = "HTML5 / CSS3";
           $skill['value'] = "80";
           $skill['color'] = "warning";
           $skill['years'] = "2 años";
           $skills['skills'][] = $skill;

           $skill['name'] = "Boostrap";
           $skill['value'] = "95";
           $skill['color'] = "warning";
           $skill['years'] = "2 años";
           $skills['skills'][] = $skill;

           $skill['name'] = "jQuery";
           $skill['value'] = "90";
           $skill['color'] = "warning";
           $skill['years'] = "4 años";
           $skills['skills'][] = $skill;

           $skill['name'] = "Javascript";
           $skill['value'] = "85";
           $skill['color'] = "warning";
           $skill['years'] = "8 años";
           $skills['skills'][] = $skill;

           $skill['name'] = "Angularjs";
           $skill['value'] = "85";
           $skill['color'] = "warning";
           $skill['years'] = "1 años";
           $skills['skills'][] = $skill;

           $skill['name'] = "LESS";
           $skill['value'] = "90";
           $skill['color'] = "warning";
           $skill['years'] = "1 año";
           $skills['skills'][] = $skill;
           $json['front'] = $skills;
           $skills = null;
           $skill = null;
           $skills['title'] = "CMS";

           $skill['name'] = "Programación de Temas Joomla";
           $skill['value'] = "85";
           $skill['color'] = "info";
           $skill['years'] = "4 años";
           $skills['skills'][] = $skill;

           $skill['name'] = "Programación de Módulos Joomla";
           $skill['value'] = "95";
           $skill['color'] = "info";
           $skill['years'] = "4 años";
           $skills['skills'][] = $skill;

           $skill['name'] = "Programación de Plugins Joomla";
           $skill['value'] = "70";
           $skill['color'] = "info";
           $skill['years'] = "2 años";
           $skills['skills'][] = $skill;

           $skill['name'] = "Programación Componentes de Joomla";
           $skill['value'] = "55";
           $skill['color'] = "info";
           $skill['years'] = "2 años";
           $skills['skills'][] = $skill;

           $skill['name'] = "Programación Temas Wordpress";
           $skill['value'] = "80";
           $skill['color'] = "info";
           $skill['years'] = "2 años";
           $skills['skills'][] = $skill;

           $skill['name'] = "Programación Shortcut de Wordpress";
           $skill['value'] = "70";
           $skill['color'] = "info";
           $skill['years'] = "2 años";
           $skills['skills'][] = $skill;

           $skill['name'] = "Programación de Widgets de Wordpress";
           $skill['value'] = "65";
           $skill['color'] = "info";
           $skill['years'] = "1 año";
           $skills['skills'][] = $skill;
           $json['CMS'] = $skills;
           $skills = null;
           $skill = null;
           $skills['title'] = "Otras Habilidades";

           $skill['name'] = "SEO";
           $skill['value'] = "80";
           $skill['color'] = "danger";
           $skill['years'] = "5 años";
           $skills['skills'][] = $skill;

           $skill['name'] = "Action Script 2, 3";
           $skill['value'] = "75";
           $skill['color'] = "danger";
           $skill['years'] = "8 años";
           $skills['skills'][] = $skill;

           $skill['name'] = "Visual Basic 6";
           $skill['value'] = "90";
           $skill['color'] = "danger";
           $skill['years'] = "9 años";
           $skills['skills'][] = $skill;

           $skill['name'] = "Scrumm";
           $skill['value'] = "80";
           $skill['color'] = "danger";
           $skill['years'] = "1 año";
           $skills['skills'][] = $skill;

           $skill['name'] = "Git";
           $skill['value'] = "70";
           $skill['color'] = "danger";
           $skill['years'] = "2 Year";
           $skills['skills'][] = $skill;

           $json['other'] = $skills;
           $json['skillTitles'] = array('back', 'front','CMS','other');
           break;
    }


echo json_encode($json);