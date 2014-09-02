<?php
/**
 * English settings file for Userhomepage plugin
 * Previous authors: James GuanFeng Lin, Mikhail I. Izmestev, Daniel Stonier
 * @author: Simon Delage <simon.geekitude@gmail.com>
 * @license: CC Attribution-Share Alike 3.0 Unported <http://creativecommons.org/licenses/by-sa/3.0/>
 */

$lang['create_private_ns'] = 'Create user\'s private namespace';
$lang['use_name_string'] = 'Use user\'s full name instead of login for his namespace (will break <code>%USER%</code> wildcard in ACL for that namespace).';
$lang['use_start_page'] = 'Use the wiki\'s start page string instead of the user\'s namespace string set above for the start page of his namespace.';
$lang['users_namespace'] = 'Namespace under which user namespaces are created (can be anything but <code>user</code> without messing up with Dokuwiki default behaviour).';
$lang['set_permissions'] = 'Automatically configure acl for the namespace set above and give full rights to users on their own namespace.';
$lang['set_permissions_others'] = 'If set permission is enabled, what permission for other people (both <code>@ALL</code> and <code>@user</code> groups) ?';
$lang['set_permissions_others_o_0'] = 'None';
$lang['set_permissions_others_o_1'] = 'Read';
$lang['set_permissions_others_o_2'] = 'Edit';
$lang['set_permissions_others_o_4'] = 'Create';
$lang['set_permissions_others_o_8'] = 'Upload';
$lang['set_permissions_others_o_16'] = 'Delete';
$lang['group_by_name'] = 'Group users\' namespaces by the first character of user name?';
$lang['edit_before_create'] = 'Allow users to edit their namespace start page before create (this will only work if you disable [create_public_page]).';
$lang['create_public_page'] = 'Create a public page for user';
$lang['public_pages_ns'] = 'Namespace under wich public pages are created. If a value other than <code>user</code> is used, you will have to manually handle interwiki user link used by <code>showuseras</code> option (in Display settings).';
$lang['templates_path'] = 'Path from DokuWiki root to store templates (userhomepage_private_template.txt and userhomepage_public_template.txt). Examples: <code>data/pages/wiki</code> (wich will make templates editable within DokuWiki) or <code>lib/plugins/userhomepage</code> (usefull in a farm setup to centralize templates).';
