<?php
/**
 * Translation file
 *
 * Note: don't change the return array to short notation because Transifex can't handle those during `tx push -s`
 */

return array(

	/**
	 * Menu items and titles
	 */

	'item:object:page' => 'Sider',
	'collection:object:page' => 'Sider',
	'collection:object:page:all' => "Alle sider",
	'collection:object:page:owner' => "%s's sider",
	'collection:object:page:friends' => "Venners sider",
	'collection:object:page:group' => "Gruppe sider",
	'add:object:page' => "Tilføj en side",
	'edit:object:page' => "Rediger denne side",

	'groups:tool:pages' => 'Aktiver gruppe sider',

	'pages:delete' => "Slet denne side",
	'pages:history' => "Sidehistorik",
	'pages:view' => "Se side",
	'pages:revision' => "Revision",

	'pages:navigation' => "Navigation",

	'pages:notify:summary' => 'Ny side kaldt %s',
	'pages:notify:subject' => "En ny side: %s",
	'pages:notify:body' =>
'',

	'pages:more' => 'Flere sider',
	'pages:none' => 'Der er ikke oprettet sider endnu',

	/**
	* River
	**/
	
	/**
	 * Form fields
	 */

	'pages:title' => 'Side titel',
	'pages:description' => 'Side indhold',
	'pages:tags' => 'Tags',
	'pages:parent_guid' => 'Parent page',
	'pages:access_id' => 'Læseadgang',
	'pages:write_access_id' => 'Skriveadgang',

	/**
	 * Status and error messages
	 */
	'pages:cantedit' => 'Du kan ikke redigere denne side',
	'pages:saved' => 'Siden gemt',
	'pages:notsaved' => 'Siden kunne ikke gemmes',
	'pages:error:no_title' => 'Din side skal have en titel.',
	'entity:delete:object:page:success' => 'Din side er blevet slettet',
	'pages:revision:delete:success' => 'Denne side revision blev hermed slettet.',
	'pages:revision:delete:failure' => 'Denne side revision kunne ikke slettes.',

	/**
	 * History
	 */
	'pages:revision:subtitle' => 'Revision created %s by %s',

	/**
	 * Widget
	 **/

	'pages:num' => 'Antal sider, der skal vises',
	'widgets:pages:name' => 'Sider',
	'widgets:pages:description' => "Dette er en liste med dine sider.",

	/**
	 * Submenu items
	 */
	'pages:label:view' => "Se side",
	'pages:label:edit' => "Rediger side",
	'pages:label:history' => "Sidehistorik",

	'pages:newchild' => "Opret en underside",
);
