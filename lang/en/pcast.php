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
 * English strings for pcast
 *
 * You can have a rather longer description of the file as well,
 * if you like, and it can span multiple lines.
 *
 * @package   mod_pcast
 * @copyright 2010 Stephen Bourget
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();
$string['modulename'] = 'pcast';
$string['modulenameplural'] = 'pcasts';
$string['pcastfieldset'] = 'Custom example fieldset';
$string['pcastname'] = 'pcast name';
$string['pcast'] = 'pcast';

//Settings.php
$string['configenablerssfeeds'] = 'This switch will enable the possibility of RSS feeds for all podcasts.  You will still need to turn feeds on manually in the settings for each podcast.';
$string['configenablerssitunes'] = 'This switch will enable the possibility of itunes compatible RSS feeds for all podcasts.  You will still need to set Enable iTunes RSS Tags to yes podcast course settings.';
$string['configusemediafilter'] = 'Use moodle media filters';
$string['configenablerssfeeds2'] = 'Enable RSS Feeds:';
$string['configenablerssitunes2'] = 'Enable iTunes RSS:';
$string['configusemediafilter2'] = 'Use Media Filter:';

//mod_form.php
$string['setupposting']='Posting options';
$string['userscancomment']='Allow user comments';
$string['userscanpost']='Allow users to post episodes';
$string['requireapproval']='Require user posts to be approved';
$string['enablerssfeed']='Enable RSS';
$string['rssepisodes']='Number of episodes';
$string['rsssortorder']='RSS sort order';
$string['itunes']='iTunes';
$string['createasc']='Newest episode first';
$string['createdesc']='Oldest episode first';
$string['enablerssitunes']='Enable RSS for iTunes';
$string['subtitle']='Subtitle';
$string['keywords']='Keywords';
$string['category']='Category';
$string['clean']='Clean';
$string['explicit']='Explicit content';
$string['author']='Author';
$string['image']='Podcast image';
$string['imagefile']='Image';
$string['imageheight']='Height';
$string['imagewidth']='Width';
$string['noresize']='Do not resize';




//mod_form.php help
$string['userscanpost_help']='Allow users to post episodes.';
$string['userscancomment_help']='Allow users to post comments';
$string['requireapproval_help']='Require episodes to be approved before posting';
$string['enablerssfeed_help']='Enable RSS for this podcast';
$string['rssepisodes_help']='This option limits the number of episodes displayed on the RSS feed';
$string['rsssortorder_help']='This is the sort order for the episodes.  They can be sorted by date';
$string['enablerssitunes_help']='This enables iTunes specific tags in the RSS file';
$string['subtitle_help']='Subtitle for podcast';
$string['keywords_help']='Keywords describing this podcast';
$string['category_help']='iTunes category';
$string['explicit_help']='This specifies if the podcast contains explicit content.';
$string['author_help']='Author of this podcast';
$string['']='';

// Navigation Block
$string['pcastadministration']='Podcast administration';

//lib.php
$string['noviews']='No views';

// Errors
$string['invalidcmorid']='Error: You must specify a course_module ID or an instance ID';
$string['noeditprivlidges']='Error: You do not have editing rights.';
$string['errcannoteditothers']='Error: you cannot edit other users episodes';
$string['erredittimeexpired']='Error: Editing time has expired';
$string['nopermissiontodelepisode']='Error: You do not have permission to delete this episode';
$string['']='';
$string['']='';
$string['']='';
$string['']='';

//edit_form.php
$string['name']='Name';
$string['summary']='Summary';
$string['attachment']='Attachment';
$string['pcastmediafile']='Media file';
$string['']='';
$string['']='';

// view.php
$string['view']='View';
$string['standardview']='Alphabetical';
$string['categoryview']='By Category';
$string['dateview']='By Date';
$string['authorview']='By Author';
$string['approvalview']='Approve entries';
$string['addnewepisode']='Add a new episode';
$string['viewpcast']='View podcast: {$a}';
//TODO: CHANGE ME!
$string['pcast_help']= 'THIS IS A HELP FILE';


// locallib.php
$string['explainaddentry'] = 'Add a new episode to the current podcast.<br />name, summary, and attachment are mandatory fields.';
$string['explainall'] = 'Shows ALL entries on one page';
$string['explainalphabet'] = 'Browse the podcast using this index';
$string['explainspecial'] = 'Shows entries that do not begin with a letter';
$string['special'] = 'Special';
$string['allentries'] = 'ALL';
$string['allcategories'] = 'All categories';
$string['notcategorised']='Not categorised';
$string['episodeswithoutcategory']='Episodes without a category';
$string['ascending']='Acsending';
$string['descending']='Descending';
$string['changeto']='Change to {$a}';
$string['sortbycreation']='Sort by date created';
$string['sortbylastupdate']='Sort by date updated';
$string['sortchronogically']='Sort by date added';
$string['current']='current sort {$a}';
$string['sortby']='Sort by';
$string['']='';
$string['']='';


// deleteepisode.php
$string['areyousuredelete']='Are you sure you want to delete this episode';
$string['episodedeleted']='episode {$a} was sucessfully deleted';