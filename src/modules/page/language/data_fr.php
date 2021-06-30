<?php

/**
 * NUKEVIET Content Management System
 * @version 5.x
 * @author VINADES.,JSC <contact@vinades.vn>
 * @copyright (C) 2009-2021 VINADES.,JSC. All rights reserved
 * @license GNU/GPL version 2 or any later version
 * @see https://github.com/nukeviet The NukeViet CMS GitHub project
 */

if (!defined('NV_ADMIN')) {
    exit('Stop!!!');
}

/**
 * Note:
 * 	- Module var is: $lang, $module_file, $module_data, $module_upload, $module_theme, $module_name
 * 	- Accept global var: $db, $db_config, $global_config
 */
if ($module_name == 'siteterms') {
    $sth = $db->prepare('INSERT INTO ' . $db_config['prefix'] . '_' . $lang . '_' . $module_data . " (id, title, alias, image, imagealt, description, bodytext, keywords, socialbutton, activecomm, layout_func, weight, admin_id, add_time, edit_time, status) VALUES (1, 'Termes Et Conditions', 'Termes-Conditions', '', '', '', :bodytext, '', 0, 4, '', 1, 1, " . NV_CURRENTTIME . ', ' . NV_CURRENTTIME . ', 1)');
    $bodytext = '(Réactualisation)';
    $sth->bindParam(':bodytext', $bodytext, PDO::PARAM_STR, strlen($bodytext));
    $sth->execute();
} elseif ($module_name == 'about') {
    $sth = $db->prepare('INSERT INTO ' . $db_config['prefix'] . '_' . $lang . '_' . $module_data . " (id, title, alias, image, imagealt, description, bodytext, keywords, socialbutton, activecomm, layout_func, weight, admin_id, add_time, edit_time, status) VALUES (1, 'Qu’est ce que Nukeviet?', 'Qu-est-ce-que-Nukeviet', '', '', '', :bodytext, '', 0, 4, '', 1, 1, 1280634933, 1280634933, 1)");
    $bodytext = '<p> NukeViet est un système de gestion de contenu open source. Les utilisateurs l’appellent habituellement Portail parce qu&#039;il est capable d&#039;intégrer plusieurs applications sur le Web. Nguyễn Anh Tú, un ex-étudiant vietnamien en Russie, avec la communauté a développé NukeViet en une application purement vietnamienne en basant sur PHP-Nuke. Similaire à PHP-Nuke, NukeViet est écrit en langage PHP et utilise la base de données MySQL, permet aux utilisateurs de publier, de gérer facilement leur contenu sur Internet ou Intranet.<br />  </p><p> <strong>* Fonctionnalités de base de NukeViet: </strong></p><p> - News: Gestion d’articles: créer les articles multi-niveau, générer la page d’impression, permettre le téléchargement, les commentaires.</p><p> -&nbsp; Download: Gestion de téléchargement des fichier</p><p> - Vote: sondage</p><p> - Contact</p><p> -&nbsp; Search: Rechercher</p><p> -&nbsp; RSS</p><p> <strong>* Caractéristiques: </strong></p><p> - Supporter le multi-langage</p><p> - Permettre le changement de l’interface (theme)</p><p> - Monter le pare-feu pour limiter DDOS ...</p><p> Nukeviet est utilisé dans de nombreux sites Web, de sites personnels aux sites professionnels. Il offre de nombreux services et applications grâce à la capacité d&#039;accroître la fonctionnalité en installant des modules, blocks additionnels ... Cependant, Nukeviet est utilisé principalement pour les sites d’actualités vietnamiens par ce que son module News conforme bien aux exigences et habitudes des Vietnamiens. Il est très facile d’installer, de gérer Nukeviet, même avec les débutants, il est donc un système favorable des amateurs.</p><p> NukeViet est open source, et totalement gratuit pour tout de monde de tous les pays. Toutefois, les Vietnamiens sont les utilisateurs principales en raison des caractéristiques de la code source (provenant de PHP-Nuke) et de la politique des développeurs &quot;Système de Portail Pour les Vietnamiens&quot;.</p>';
    $sth->bindParam(':bodytext', $bodytext, PDO::PARAM_STR, strlen($bodytext));
    $sth->execute();

    $sth = $db->prepare('INSERT INTO ' . $db_config['prefix'] . '_' . $lang . '_' . $module_data . " (id, title, alias, image, imagealt, description, bodytext, keywords, socialbutton, activecomm, layout_func, weight, admin_id, add_time, edit_time, status) VALUES (2, 'Introduction de NukeViet 3', 'Introduction-de-NukeViet-3', '', '', '', :bodytext, '', 0, 4, '', 3, 1, 1280637520, 1280637520, 1) ");
    $bodytext = '<p> NukeViet 3 est une nouvelle génération de Système de Gestion de Contenu développée par les Vietnamiens. Pour la première fois au Vietnam, un noyau de Open Source ouverte est investi professionnelement en financement, en ressources humaines et en temps. Le résultat est que 100% de ligne de code de NukeViet est écrit entièrement neuf. Nukeviet 3.0 utilise XHTML, CSS et jQuery avec Xtemplate permettant une application souple de Ajax, même au niveau de noyau.</p><p> Profiter les fruits de Open Source, mais chaque ligne de code de NukeViet est écrit manuellement. NukeViet 3 n&#039;utilise aucune plateforme. Cela signifie que Nukeviet 3 est complètement indépendant dans son développemnt. Il est très facile à lire, à comprendre le code de NukeViet pour programmer tout seul si vous avez les connaissances de base sur PHP et MySQL. NukeViet 3.0 est complètement ouvert et facile à apprendre pour tous ceux qui veulent étudier le code de NukeViet.</p><p> Hériter la simplicité de Nukeviet mais NukeViet 3 n&#039;oublie pas de se renouveller. Le système de Nukeviet 3 supporte le multi-noyau du module. Nous appelons cela la technologie de virtualisation de module. Cette technologie permet aux utilisateurs de créer automatiquement de milliers de modules sans toucher une seule ligne de code. Le module né de cette technologie est appelé module virtuel. Il est cloné à partir de n&#039;importe quel module du système de NukeViet si ce module-ci permet la création des modules virtuels.</p><p> NukeViet 3 prend en charge l&#039;installation automatique de modules, de blocks, de thèmes dans la section d&#039;administration, les utilisateurs peuvent installer le module sans faire de tâches complexes. NukeViet 3.0 permet également le paquetage des modules pour partager aux autres utilisateus.</p><p> Le multi-langage de NukeViet 3 est parfait avec le multi-langage de l&#039;interface et celui de données. NukeViet 3.0 supporte aux administrateurs de créer facilement de nouvelles langues pour le site. Le paquetage des fichiers de langue est également supporté pour faciliter la contribution du travai à la communauté.</p><p> L&#039;histoire de NukeViet sera encore très longue&nbsp; par ce qu’une variété de fonctionnalités avancées sont encore en cours d&#039;élaboration.</p><p> Utilisez et diffusez NukeViet 3 pour jouir les récents fruits de la technologies de web open source.</p><p> Enfin, NukeViet 3 est un cadeau que VINADES voudrait envoyer à la communauté pour remercier son soutient. NukeViet retourne maintenant à la communauté dans l’espoir à son développement continu.</p><p> Si vous intéressez à NukeViet, n’hésitez pas à nous joindre au Forum de NukeViet.Vn.</p>';
    $sth->bindParam(':bodytext', $bodytext, PDO::PARAM_STR, strlen($bodytext));
    $sth->execute();

    $sth = $db->prepare('INSERT INTO ' . $db_config['prefix'] . '_' . $lang . '_' . $module_data . " (id, title, alias, image, imagealt, description, bodytext, keywords, socialbutton, activecomm, layout_func, weight, admin_id, add_time, edit_time, status) VALUES (3, 'Ouverture de VINADES', 'Ouverture-de-VINADES', '', '', '', :bodytext, '', 0, 4, '', 2, 1, 1280637944, 1280637944, 1)");
    $bodytext = '<p> Depuis quelques années, NukeViet est devenu une application Open Source tres familière de la communauté informatique du Vietnam. Étant donnée qu&#039;il n&#039;y a pas encore les activités officielles, Nukeviet est utilisé dans presque toutes les domaines, de l&#039;actualité, de la commerce électronique, de site personnel aux site professionle.<br />  </p><p> Pour professionaliser la publication de NukeViet,&nbsp; l&#039;administration de NukeViet a décidé de créer une société spécialisant la&nbsp; gestion de NukeViet avec la raison sociale en vietnamien “Công ty cổ phần Phát triển Nguồn mở Việt Nam”, en anglais &quot;VIET NAM OPEN SOURCE DEVELOPMENT JOINT STOCK COMPANY&quot; et en abrégé VINADES.,JSC. Cette société est ouverte officiellement au&nbsp; 25-2-2010 avec le bureau à&nbsp; Chambre 1706 – CT2 Nang Huong building, 583 Nguyen Trai, Hanoi, Vietnam. Son but est de développer et de diffuser NukeViet au Vietnam.<br /> <br /> D&#039;après M. Nguyễn Anh Tú, président de VINADES, cette société développera le source de NukeViet sous forme open source, professionnel, et totalement gratuit selon l&#039;esprit mondial de open source.<br /> <br /> NukeViet est un système de gestion de contenu open source (Open Source Content Management System) purement vietnamien développé à la base de PHP-Nuke et base de données MySQL. Les utilisateurs l&#039;appellent habituellement Portail par ce qu&#039;ils puissent intégrer de multiples applications permettant la publication et la gestion facile de contenu sur l&#039;internet ou sur l&#039;intranet.</p><p> <br /> NukeViet peut fournir plusieurs services et appliations grace aux modules, blocks... L&#039;installation, la gestion de NukeViet 3 est très facile,&nbsp; même avec les débutants.</p><p> Pour avoir les details plus amples sur NukeViet, veuillez consulter le site http://nukeviet.vn.</p>';
    $sth->bindParam(':bodytext', $bodytext, PDO::PARAM_STR, strlen($bodytext));
    $sth->execute();
}

$db->query('UPDATE ' . $db_config['prefix'] . "_config SET config_value = '0' WHERE module = '" . $module_name . "' AND config_name = 'activecomm' AND lang='" . $lang . "'");
