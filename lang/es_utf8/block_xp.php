<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Language file.
 *
 * @package    block_xp
 * @copyright  2014 Frédéric Massart
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityoresourceis'] = 'La actividad o el recurso es {$a}';
$string['addacondition'] = 'Añadir una condición';
$string['addarule'] = 'Añadir una regla';
$string['addrulesformhelp'] = 'La última columna define los puntos de experiencia que se obtendran cuando la condición se satisfaga.';
$string['awardaxpwhen'] = 'Ganarás <strong>{$a}</strong> puntos de experiencia cuando:';
$string['basexp'] = 'Base del algoritmo';
$string['changelevelformhelp'] = 'If you change the number of levels, the custom level badges will be temporarily disabled to prevent levels without badges. If you change the level count go to the page \'Visuals\' to re-enable the custom badges once you have saved this form.';
$string['cachedef_filters'] = 'Filtro de niveles';
$string['cachedef_ruleevent_eventslist'] = 'Lista de algunos eventos';
$string['cheatguard'] = 'Protección anti trampas';
$string['colon'] = '{$a->a}: {$a->b}';
$string['coefxp'] = 'Coeficiente del algoritmo';
$string['configdescription'] = 'Descripción a añadir';
$string['configheader'] = 'Configuración';
$string['configtitle'] = 'Título';
$string['congratulationsyouleveledup'] = 'Felicidades!';
$string['coolthanks'] = 'Genial, gracias!';
$string['courselog'] = 'Log del curso';
$string['coursereport'] = 'Reporte del curso';
$string['courserules'] = 'Reglas del curso';
$string['coursesettings'] = 'Configuración del curso';
$string['coursevisuals'] = 'Visuales del curso';
$string['customizelevels'] = 'Personalizar los niveles';
$string['defaultrules'] = 'Reglas predeterminadas';
$string['defaultrulesformhelp'] = 'Estas son las reglas predeterminadas del plugin, automaticamente dan algunos puntos de experiencia e ignoran algunos eventos redundantes. Al establecer tus propias reglas, estas tendrán prioridad.';
$string['deletecondition'] = 'Eliminar condición';
$string['deleterule'] = 'Eliinar regla';
$string['description'] = 'Descriptción';
$string['dismissnotice'] = 'Cerrar aviso';
$string['enableinfos'] = 'Habilitar la página de información';
$string['enableinfos_help'] = 'Cuando es \'No\', los estudiantes no pueden ver la pagina de información.';
$string['enableladder'] = 'Habilitar el ranking';
$string['enableladder_help'] = 'Cuando es \'No\', los estudiantes no pueden ver el ranking.';
$string['enablelevelupnotif'] = 'Habilitar la notificación al subir de nivel';
$string['enablelevelupnotif_help'] = 'Cuando es \'Si\', los estudiantes recibirán una notificación al subir de nivel.';
$string['enablelogging'] = 'Habilitar el registro';
$string['enablexpgain'] = 'Habilitar el gane de experiencia';
$string['enablexpgain_help'] = 'Cuando es \'No\', nadie podrá ganar experiencia en el curso. Esto es util para congelar la experiencia obtenida, o para habilitarla en un momento específico.

Please note that this can also be controlled more granularly using the capability \'block/xp:earnxp\'.';
$string['errorformvalues'] = 'There are some issues in the form values, please fix them.';
$string['errorlevelsincorrect'] = 'The minimum number of levels is 2';
$string['errornotalllevelsbadgesprovided'] = 'Not all the level badges have been provided. Missing: {$a}';
$string['errorunknownevent'] = 'Error: unknown event';
$string['errorunknownmodule'] = 'Error: unknown module';
$string['errorxprequiredlowerthanpreviouslevel'] = 'The XP required is lower than or equal to the previous level.';
$string['eventis'] = 'El evento es {$a}';
$string['event_user_leveledup'] = 'El usuario subió de nivel';
$string['eventname'] = 'Nombre del evento';
$string['eventproperty'] = 'Propiedad del evento';
$string['eventtime'] = 'Momento del evento';
$string['for1day'] = 'Por 1 día';
$string['for1month'] = 'Por 1 més';
$string['for1week'] = 'Por 1 semana';
$string['for3days'] = 'Por 3 días';
$string['forever'] = 'Por siempre';
$string['forthewholesite'] = 'Para todo el sitio';
$string['give'] = 'dar';
$string['incourses'] = 'En cursos';
$string['infos'] = 'Información';
$string['invalidxp'] = 'Invalid XP value';
$string['keeplogs'] = 'Matener registros';
$string['ladder'] = 'Ranking';
$string['level'] = 'Nivel';
$string['levelbadges'] = 'Medallas de nivel';
$string['levelbadgesformhelp'] = 'Nobre los archivos de la siguiente manera: [nivel].[extensión], por ejemplo: 1.png, 2.jpg, etc... El tamaño recomendado de la imagen es 100x100.';
$string['levelcount'] = 'Conteo de niveles';
$string['leveldesc'] = 'Descripción de niveles';
$string['levels'] = 'Niveles';
$string['levelswillbereset'] = 'Advertencia! Grabar esto recalculará los niveles de todos los estudiantes!';
$string['levelup'] = 'Level up!';
$string['levelx'] = 'Nivel #{$a}';
$string['likenotice'] = '<strong>Te gusta el plugin?</strong> Por favor dese un momento para <a href="{$a->moodleorg}" target="_blank">añadirlo a tus favoritos</a> on Moodle.org and <a href="{$a->github}" target="_blank">star it on GitHub</a>.';
$string['logging'] = 'Registrando';
$string['maxactionspertime'] = 'Máximo número de acciones en un tiempo determinado';
$string['maxactionspertime_help'] = 'El numero máximo de acciones que se pueden realizar en un tiempo determinado. Las demás serán ignoradas.';
$string['movecondition'] = 'Mover condición';
$string['moverule'] = 'Mover regla';
$string['navinfos'] = 'Información';
$string['navladder'] = 'Ranking';
$string['navlevels'] = 'Niveles';
$string['navlog'] = 'Registro';
$string['navreport'] = 'Reporte';
$string['navrules'] = 'Reglas';
$string['navsettings'] = 'Configuración';
$string['navvisuals'] = 'Visuales';
$string['pickaconditiontype'] = 'Elija un tipo de condición';
$string['pluginname'] = 'Level up!';
$string['progress'] = 'Progreso';
$string['property:action'] = 'Acción del evento';
$string['property:component'] = 'Componente del evento';
$string['property:crud'] = 'Evento CRUD';
$string['property:eventname'] = 'Nombre del evento';
$string['property:target'] = 'Objetivo del evento';
$string['participatetolevelup'] = 'Participa en el curso para ganar experiencia y subir de nivel!';
$string['rank'] = 'Rango';
$string['reallyresetdata'] = 'Really reset the levels and experience points of everyone in this course?';
$string['reallyresetgroupdata'] = 'Really reset the levels and experience points of everyone in this group?';
$string['resetcoursedata'] = 'Reset course data';
$string['resetgroupdata'] = 'Reset group data';
$string['rule'] = 'Regla';
$string['rule:contains'] = 'contiene';
$string['rule:eq'] = 'es igual a';
$string['rule:eqs'] = 'es exactamente igual a';
$string['rule:gt'] = 'es mayor que';
$string['rule:gte'] = 'es mayor o igual que';
$string['rule:lt'] = 'es menor que';
$string['rule:lte'] = 'es menor o igual';
$string['rule:regex'] = 'satiface la expresion regular';
$string['rulecm'] = 'Actividad o recurso';
$string['rulecmdesc'] = 'La actividad o recuro es \'{$a->contextname}\'.';
$string['ruleevent'] = 'Evento específico';
$string['ruleeventdesc'] = 'El evento es \'{$a->eventname}\'';
$string['ruleproperty'] = 'Propiedad del eento';
$string['rulepropertydesc'] = 'La propiedad \'{$a->property}\' {$a->compare} \'{$a->value}\'.';
$string['ruleset'] = 'Grupo de condiciones';
$string['ruleset:all'] = 'ALL of the conditions are true';
$string['ruleset:any'] = 'ANY of the conditions are true';
$string['ruleset:none'] = 'NONE of the conditions are true';
$string['rulesformhelp'] = '<p>This plugin is making use of the events to attribute experience points to actions performed by the students. You can use the form below to add your own rules and view the default ones.</p>
<p>It is advised to check the plugin\'s <a href="{$a->log}">log</a> to identify what events are triggered as you perform actions in the course, and also to read more about events themselves: <a href="{$a->list}">list of all events</a>, <a href="{$a->doc}">developer documentation</a>.</p>
<p>Finally, please note that the plugin always ignores:
<ul>
    <li>The actions performed by administrators, guests or non-logged in users.</li>
    <li>The actions performed by users not having the capability <em>block/xp:earnxp</em>.</li>
    <li>Repeated actions within a short time interval, to prevent cheating.</li>
    <li>Events that are flagged as <em>anonymous</em>, e.g. in an anonymous Feedback.</li>
    <li>And the events of educational level not equal to <em>Participating</em>.</li>
</ul>
</p>';
$string['timebetweensameactions'] = 'Time required between identical actions';
$string['timebetweensameactions_help'] = 'In seconds, the minimum time required between identical actions. An action is considered identical if it was placed in the same context and object, reading a forum post will be considered identifical if the same post is read again.';
$string['timeformaxactions'] = 'Time frame for max. actions';
$string['timeformaxactions_help'] = 'The time frame (in seconds) during which the user should not exceed a maximum number of actions.';
$string['value'] = 'Value';
$string['valuessaved'] = 'The values have been successfully saved.';
$string['viewtheladder'] = 'View the ladder';
$string['wherearexpused'] = 'Where are experience points used?';
$string['wherearexpused_desc'] = 'When set to \'In courses\', the experience points gained will only account for the course in which the block was added to. When set to \'Por the whole site\', a user will "level up" in the site rather than selectively per course, all the experience gained throughout the site will be used.';
$string['updateandpreview'] = 'Update and preview';
$string['usealgo'] = 'Use the algorithm';
$string['usecustomlevelbadges'] = 'Use custom level badges';
$string['usecustomlevelbadges_help'] = 'When set to yes, you must provide an image for each level.';
$string['when'] = 'When';
$string['xp'] = 'Experience points';
$string['xp:addinstance'] = 'Añadir a new XP block';
$string['xp:earnxp'] = 'Earning experience points';
$string['xp:myaddinstance'] = 'Añadir the block to my dashboard';
$string['xp:view'] = 'View the block and its related pages';
$string['xprequired'] = 'XP required';
$string['xpgaindisabled'] = 'XP gain disabled';
$string['youreachedlevela'] = 'You reached level {$a}!';
$string['yourownrules'] = 'Your own rules';
