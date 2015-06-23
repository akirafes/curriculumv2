<?php

    $page = getPost("page","get","profile");
/*echo getPost("page","get","profile");;
exit();*/

    header('Content-Type: application/json');
    $section['name'] = 'profile';
    $section['icon'] = 'fa fa-user';
    $section['current'] = false;
    $section['url'] = '/#/profile';
    $sections[] = $section;

    $section['name'] = 'work';
    $section['icon'] = 'fa fa-briefcase';
    $section['current'] = false;
    $section['url'] = '/#/work';
    $sections[] = $section;

    $section['name'] = 'resume';
    $section['icon'] = 'fa fa-file-text';
    $section['current'] = false;
    $section['url'] = '/#/resume';
    $sections[] = $section;

    $section['name'] = 'contact';
    $section['icon'] = 'fa fa-envelope';
    $section['current'] = false;
    $section['url'] = '/#/contact';
    $sections[] = $section;

    $section['name'] = 'blog';
    $section['icon'] = 'fa fa-comment';
    $section['current'] = false;
    $section['url'] = '/#/blog';
    $sections[] = $section;

    $json['sections'] = $sections;

    $footer['facebook'] =  "https://www.facebook.com/akira.fes";
    $footer['twitter'] =  "https://twitter.com/akira_fes";
    $footer['google'] =  "https://plus.google.com/+Fernandoespinosasalido/about";
    $footer['linkedin'] =  "https://www.linkedin.com/in/seniordeveloper1";
    $footer['text'] = '© 2014 Fernando Espinosa. All Rights Reserved';
    $json['footer'] = $footer;


   switch($page){
       case "work":
           $json = null;
           $json['title'] = 'Portfolio';
          // for($x = 1;$x <= 12; $x++){
               $project['id'] = "Online-Quotation-System";
               $project['image'] = "images/projects/thumb01.jpg";
               $project['title'] = "Online Quotation System";
               $project['resume'] = "This quotation system starts with a lead and end generating all documentation in pdf to make a reservation";
               $project['boton'] = "View Detals";
               $project['tags'] = "Html5, Css3, Angularjs, Laravel, git, boostrap, API";
               $json['projects'][] = $project;

           $project['id'] = "Club-Solaris-V6";
           $project['image'] = "images/projects/solarisv6/thumb01.jpg";
           $project['title'] = "Club Solaris V6 Web Site";
           $project['resume'] = "Joomla website for the hoteles solaris vacation club";
           $project['boton'] = "View Detals";
           $project['tags'] = "Joomla: Template, modules, plagins, php, html5 css3, jQuery";
           $json['projects'][] = $project;

           $project['id'] = "Club-Solaris-V5";
           $project['image'] = "images/projects/solarisv5/thumb01.jpg";
           $project['title'] = "Club Solaris V5 Web Site";
           $project['resume'] = "Joomla website for the hoteles solaris vacation club";
           $project['boton'] = "View Detals";
           $project['tags'] = "Joomla: Template, modules, plagins, php, html5 css3, jQuery";
           $json['projects'][] = $project;

           $project['id'] = "specials";
           $project['image'] = "images/projects/promoEditor/thumb01.jpg";
           $project['title'] = "Promotions Editor and landing page";
           $project['resume'] = "This program is used to control and edit the specials and promos of the vacation club";
           $project['boton'] = "View Detals";
           $project['tags'] = "HTML5, less, jQuery, bootstrap, codeigniter";
           $json['projects'][] = $project;

           $project['id'] = "Lifestyle";
           $project['image'] = "images/projects/lifestyle/thumb01.jpg";
           $project['title'] = "Lifestylevillas Web Site";
           $project['resume'] = "Website with Escapia Api integration";
           $project['boton'] = "View Detals";
           $project['tags'] = "Wordpress: template, plugins, XML, SOAP";
           $json['projects'][] = $project;

           $project['id'] = "alchemy";
           $project['image'] = "images/projects/alchemy/thumb01.jpg";
           $project['title'] = "Lead Alchemy";
           $project['resume'] = "This is a CRM used by de Call Center in Club Solaris";
           $project['boton'] = "View Detals";
           $project['tags'] = "php, javascript, jQuery, Html, css, mysql";
           $json['projects'][] = $project;
          // } 
           break;

       case "profile":
            $s["title"] = "Hello, I am <span>Fernando Espinosa</span><br>Back and Front-end Developer";
            $s['msg'] = "<p>I have eight years experience as a web/Developer. I have lots of experience in the production of CSS and HTML5 for modern websites. I have a reasonable knowledge of using frameworks like laravel and codeigniter for the backend and Angularjs for the front end.</p>";
            $s['subTitle'] = 'Personal Info';
            $s['name'] = "Fernando Espinosa S.";
            $s['email'] = "mail@fer.cc";
            $s['mobile'] = "+52 (624) 12745-05";
            $s['birthday'] = "1977-02-21";
            $s['livein'] = "Los Cabos, Mexico";
            $s['linkedin'] = '<a href="http://mx.linkedin.com/in/seniordeveloper1"> <img src="images/linkedin.png" width="126" height="32" border="0" alt="Ver el perfil de Fernando Espinosa Salido en LinkedIn"></a>
                              <a href="https://www.facebook.com/akira.fes"> <img src="images/facebook.png" width="126" height="32" border="0" alt="Ver el perfil de Fernando Espinosa Salido en facebook"></a>';
            $s['language'] = "en";
           $s['labels']['name'] = "Name";
           $s['labels']['bith'] = "Date of birth";
           $s['labels']['mail'] = "e-mail";
           $s['labels']['live'] = "Live in";
           $s['labels']['mobile'] = "Mobile";
           $s['labels']['website'] = "Website";
           $s['labels']['social'] = "Social Media";

           $s['labels']['contact'] = "Contact me";
           $s['labels']['goto'] = "Go to next/previous page";
           $s['labels']['sendme'] = "Send me a message";
           $s['labels']['sendmessage'] = "Send Message";
           $s['labels']['message'] = "Message";
           $s['labels']['contactInfo'] = "Contact info";
           $s['labels']['contactText'] = "If you want to contact me, this is the place!,I live in the paradise called San Jose del Cabo, great place to live, 90% of the days are sunny and the beach is beautiful.";
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
           $s["title"] = "Resume";
           $education['title'] = 'Club Solaris';
           $education['date'] = '2013 - 2014';
           $education['position'] = 'eBussiness Manager';
           $education['info'] = 'Responsibilities:<br><ul class="job"><li>Perceive and translate customer and market needs into actionable business strategies, plans, and onsite programs and functionality. </li>
           <li>Generate leads for the call center through websites, e-marketing campaigns and social media.</li>
           <li>Development and maintenance of company websites.</li>
           <li>Generate strategies to increase online presence through social media.</li>
           <li>Development and maintenance of systems that increase the productivity of call center.</li>
           <li>Work with design and IT team to identify and submit ideas for new onsite assets and functionality.</li>
           <li>Organize sprints and scrum meetings</li>
           <li>Provide input to management for individual team member performance appraisals</li>';
           $e[] = $education;
           $education['title'] = 'Club Solaris';
           $education['date'] = '2007 - 2014';
           $education['position'] = 'Senior Web Developer';
           $education['info'] = 'Responsibilities:<br><ul class="job"><li>Convert raw images and layouts from a graphic designer into CSS/HTML themes.</li>
           <li>Programming all Back and Front End interfases using PHP frameworks, Javascript Frameworks and Responsive Frameworks</li>
           <li>Test applications on various browsers and modify if necessary.</li>
           <li>Design and implement user-driven templates, databases and interfaces.</li>
           <li>Use web development software to integrate databases and other information systems.</li>
           <li>Oversee production and implementation.</li>
           <li>Support existing infrastructure.</li>
           <li>Analyze user needs to determine technical requirements.</li></ul>';
           $e[] = $education;
           $education['title'] = 'Dibse';
           $education['date'] = '2005 - 2007';
           $education['position'] = 'Tech Lead';
           $education['info'] = 'Responsibilities:<br><ul class="job"><li>Interface between team and clients</li>
           <li>Ensure development activities are aligned with scope, schedule, priority and business objectives</li>
           <li>Ensure all tasks and milestones associated with technical design and development  are completed according to project management guidelines</li>
           <li>Provide input to management for individual team member performance evaluations</li>
           <li>Consult on client projects.</li>
           <li>Participate in the creation of high-level comprehensive solution designs.</li></ul>';
           $e[] = $education;
           $sub['title'] = "Work Experience";
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

           $skills['title'] = "Back-End Skills";
           $skill['name'] = "PHP Structured Programming";
           $skill['value'] = "95";
           $skill['color'] = "success";
           $skill['years'] = "8 years";
           $skills['skills'][] = $skill;

           $skill['name'] = "PHP POO";
           $skill['value'] = "90";
           $skill['color'] = "success";
           $skill['years'] = "2 Years";
           $skills['skills'][] = $skill;

           $skill['name'] = "Webservices";
           $skill['value'] = "80";
           $skill['color'] = "success";
           $skill['years'] = "4 Years";
           $skills['skills'][] = $skill;

           $skill['name'] = "Laravel";
           $skill['value'] = "85";
           $skill['color'] = "success";
           $skill['years'] = "2 Years";
           $skills['skills'][] = $skill;

           $skill['name'] = "Webbots & Spiders Programming";
           $skill['value'] = "90";
           $skill['color'] = "success";
           $skill['years'] = "4 Years";
           $skills['skills'][] = $skill;

           $skill['name'] = "Symfony";
           $skill['value'] = "70";
           $skill['color'] = "success";
           $skill['years'] = "2 Years";
           $skills['skills'][] = $skill;

           $skills['skills'][] = $skill;
           $json = $s;
           $json['back'] = $skills;
           $skills = null;
           $skill = null;
           $skills['title'] = "Front-End Skills";

           $skill['name'] = "XHTML / CSS2";
           $skill['value'] = "96";
           $skill['color'] = "warning";
           $skill['years'] = "9 Years";
           $skills['skills'][] = $skill;

           $skill['name'] = "HTML5 / CSS3";
           $skill['value'] = "80";
           $skill['color'] = "warning";
           $skill['years'] = "2 Years";
           $skills['skills'][] = $skill;

           $skill['name'] = "Boostrap";
           $skill['value'] = "95";
           $skill['color'] = "warning";
           $skill['years'] = "2 Years";
           $skills['skills'][] = $skill;

           $skill['name'] = "jQuery";
           $skill['value'] = "90";
           $skill['color'] = "warning";
           $skill['years'] = "4 Years";
           $skills['skills'][] = $skill;

           $skill['name'] = "Javascript";
           $skill['value'] = "85";
           $skill['color'] = "warning";
           $skill['years'] = "8 Years";
           $skills['skills'][] = $skill;

           $skill['name'] = "Angularjs";
           $skill['value'] = "85";
           $skill['color'] = "warning";
           $skill['years'] = "1 Year";
           $skills['skills'][] = $skill;

           $skill['name'] = "LESS";
           $skill['value'] = "90";
           $skill['color'] = "warning";
           $skill['years'] = "1 year";
           $skills['skills'][] = $skill;
           $json['front'] = $skills;
           $skills = null;
           $skill = null;
           $skills['title'] = "CMS";

           $skill['name'] = "Joomla Template Programming";
           $skill['value'] = "85";
           $skill['color'] = "info";
           $skill['years'] = "4 years";
           $skills['skills'][] = $skill;

           $skill['name'] = "Joomla Module Programming";
           $skill['value'] = "95";
           $skill['color'] = "info";
           $skill['years'] = "4 Years";
           $skills['skills'][] = $skill;

           $skill['name'] = "Joomla Plugins Programming";
           $skill['value'] = "70";
           $skill['color'] = "info";
           $skill['years'] = "2 Years";
           $skills['skills'][] = $skill;

           $skill['name'] = "Joomla Component Programming";
           $skill['value'] = "55";
           $skill['color'] = "info";
           $skill['years'] = "2 Years";
           $skills['skills'][] = $skill;

           $skill['name'] = "Wordpress Theme Programming";
           $skill['value'] = "80";
           $skill['color'] = "info";
           $skill['years'] = "2 Years";
           $skills['skills'][] = $skill;

           $skill['name'] = "Wordpress Shortcut Programming";
           $skill['value'] = "70";
           $skill['color'] = "info";
           $skill['years'] = "2 Year";
           $skills['skills'][] = $skill;

           $skill['name'] = "Wordpress Widgets Programming";
           $skill['value'] = "65";
           $skill['color'] = "info";
           $skill['years'] = "1 year";
           $skills['skills'][] = $skill;
           $json['CMS'] = $skills;
           $skills = null;
           $skill = null;
           $skills['title'] = "Other Skills";

           $skill['name'] = "SEO";
           $skill['value'] = "80";
           $skill['color'] = "danger";
           $skill['years'] = "5 years";
           $skills['skills'][] = $skill;

           $skill['name'] = "Action Script 2, 3";
           $skill['value'] = "75";
           $skill['color'] = "danger";
           $skill['years'] = "8 Years";
           $skills['skills'][] = $skill;

           $skill['name'] = "Visual Basic";
           $skill['value'] = "90";
           $skill['color'] = "danger";
           $skill['years'] = "9 Years";
           $skills['skills'][] = $skill;

           $skill['name'] = "Scrumm";
           $skill['value'] = "80";
           $skill['color'] = "danger";
           $skill['years'] = "1 Year";
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