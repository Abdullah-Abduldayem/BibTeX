<?php
# Select language (en, fr)
$wbibLang = 'en'; 

#Custom behaviour of extension
$wbib_allow_bibpopup = true;             # Show a link called "BibTex". It can pop with the bibtex reference like in ACM libraries
$wbib_allow_divpopup = true;             # Show a div popup when the cursor hovers over the "BibTeX" link
$wbib_usejavascript  = true;             # Disable javascript
$wbib_medianamespace = "Image:";         # Medianamespace in which pdf and pstscript files are uploaded on wiki
$wbib_pdficon        = "Pdf.png";        # The name of the icon for pdf files directly uploaded on wiki.
$wbib_psicon         = "Postscript.png"; # The name of the icon for postscript file directly uploaded on wiki.

switch($wbibLang){
  case 'en':
    $wbibmastersthesis = "Master's Thesis"; 
    $wbibphdthesis = "Ph.D. Thesis";
    $wbibtechreport = "Technical Report";
		$wbibunpublished = "Unpublished";
		$wbibauthor = "Author";
		$wbibtitle = "Title";
		$wbibin = "In";
		$wbibaddress = "Address";
		$wbibdate = "Date";
		$wbibmacros = array();
		$wbibmacros['@Jan'] = 'January';
		$wbibmacros['@Feb'] = 'February';
		$wbibmacros['@Mar'] = 'March';
		$wbibmacros['@Apr'] = 'April';
		$wbibmacros['@May'] = 'May';
		$wbibmacros['@Jun'] = 'June';
		$wbibmacros['@Jul'] = 'July';
		$wbibmacros['@Aug'] = 'August';
		$wbibmacros['@Sep'] = 'September';
		$wbibmacros['@Oct'] = 'October';
		$wbibmacros['@Nov'] = 'November';
		$wbibmacros['@Dec'] = 'December';
		$wbibmsg = array('bibtex_empty' => '<span style="color:red;"><big><b>Empty BibTeX Reference!</b></big></span>',
		 'bibtex_available_types' => 'Available BiBTeX Types are:',
		 'bibtex_help_type'  => 'You can type @type between <bibtex> and </bibtex> to obtain the corresponding help',
		 'bibtex_help_entry' => 'Here are the fields for the <big><b>$1</b></big> entry.<br/>In <span style="color:red;">red</span> are the alternative fields and in <span style="color:green;">green</span> are optional fields:<br/>',
		 'bibtex_click_here' => '$1 Click here $2 to paste this entry in textarea edit<br/>',
		 'bibtex_click_type' => 'Click on one type to pre-fill edit textarea',
		 'bibtex_copypaste'  => 'Copy and paste this entry into edit textarea'
		);
		break;
	
	case 'fr':
	default:
		$wbibmastersthesis = "Th&egrave;se de master"; 
		$wbibphdthesis = "Th&egrave;se de doctorat";
		$wbibtechreport = "Rapport technique";
		$wbibunpublished = "Non publi&eacute;";
		$wbibauthor = "Auteur";
		$wbibtitle = "Titre";
		$wbibin = "Dans";
		$wbibaddress = "Adresse";
		$wbibdate = "Date";
		$wbibmacros = array();
		$wbibmsg = array('bibtex_empty' => '<span style="color:red;"><big><b>R&eacute;f&eacute;rence BibTex vide !</big></b></span>',
		 'bibtex_available_types' => 'Les types Bibtex disponibles sont :',
		 'bibtex_help_type' => 'Vous pouvez taper @type entre les balises <bibtex> et </bibtex> pour avoir l\'aide correspondant au type.',
		 'bibtex_help_entry' => 'Voici les champs pour l\'entr&eacute;e <big><b>$1</b></big>.<br/>En <span style="color:red;"> rouge </span>sont les champs alternatifs et en <span style="color:green;">vert</span> les champs optionnels :<br/>',
		 'bibtex_click_here' => '$1 Cliquez ici $2 pour coller cette entr&eacute;e dans la zone d\'&eacute;dition.<br/>',
		 'bibtex_click_type' => 'Cliquer sur un type pour pr&eacute;-remplir la zone d\'&eacute;dition.',
		 'bibtex_copypaste' => 'Copier-coller ces renseignements dans la zone d\'&eacute;dition.'
		);
}

# Lists of bibtex entries and params
#Lists of types

$wfBibtexTypes = array(
		"article",
		"book", 
    "booklet",
		"inbook",
		"incollection",
		"inproceedings",
		"manual",
		"mastersthesis",
		"phdthesis",
		"proceedings",
		"techreport",
		"unpublished",
		"misc"
	); 

#Lists of fields by types, in emacs style. Alternate fields are signaled by ALT and optional fields are signaled by OPT.

$wfBibtexEntries = array();

$wfBibtexEntries['article'] = array(
		'author',
		'title',
		'journal',
		'year',
		'OPTvolume',
		'OPTnumber',
		'OPTpages',
		'OPTmonth'
	);

$wfBibtexEntries['book'] = array(
		'ALTauthor',
		'ALTeditor',
		'title',
		'publisher',
		'year',
		'OPTvolume',
		'OPTnumber',
    'OPTseries',
		'OPTaddress',
		'OPTedition',
		'OPTmonth'
	);

$wfBibtexEntries['booklet'] = array(
		'title',
		'OPTauthor',
		'OPThowpublished',
		'OPTaddress',
		'OPTmonth',
		'OPTyear'
	);
	
$wfBibtexEntries['inbook'] = array(
		'ALTauthor',
		'ALTeditor',
		'title',
		'chapter',
		'publisher',
    'year',
		'OPTvolume',
		'OPTnumber',
		'OPTseries',
		'OPTtype',
		'OPTaddress',
		'OPTedition',
		'OPTmonth',
		'OPTpages'
	);
	
$wfBibtexEntries['incollection'] = array(
    'author',
		'title',
		'booktitle',
		'OPTcrossref',
		'OPTpages',
		'OPTpublisher',
		'OPTyear',
		'OPTeditor',
    'OPTvolume',
		'OPTnumber',
		'OPTseries',
		'OPTtype',
		'OPTchapter',
		'OPTaddress',
		'OPTedition',
		'OPTmonth'
	);
	
$wfBibtexEntries['inproceedings'] = array(
		'author',
		'title',
		'OPTcrossref',
		'OPTbooktitle',
		'OPTpages',
		'OPTyear',
		'OPTeditor',
    'OPTvolume',
		'OPTnumber',
		'OPTseries',
		'OPTaddress',
		'OPTmonth',
		'OPTorganization',
		'OPTpublisher'
	);
	
$wfBibtexEntries['manual'] = array(
		'title',
		'OPTauthor',
		'OPTorganization',
		'OPTaddress',
		'OPTedition',
		'OPTmonth',
		'OPTyear'
	);
	
$wfBibtexEntries['mastersthesis'] = array(
		'author',
		'title',
		'school',
		'year',
		'OPTtype',
		'OPTaddress',
		'OPTmonth'
	);
		
$wfBibtexEntries['phdthesis']  = array(
		'author',
		'title',
		'school',
		'year',
		'OPTtype',
		'OPTaddress',
		'OPTmonth'
	);

$wfBibtexEntries['proceedings'] = array(
		'title',
		'year',
		'OPTbooktitle',
		'OPTeditor',
		'OPTvolume',
		'OPTnumber',
		'OPTseries',
		'OPTaddress',
    'OPTmonth',
		'OPTorganization',
		'OPTpublisher'
	);
	
$wfBibtexEntries['techreport'] = array(
		'author',
		'title',
		'institution',
		'year',
		'OPTtype',
		'OPTnumber',
		'OPTaddress',
		'OPTmonth'
	);
	
$wfBibtexEntries['misc'] = array(
		'OPTauthor',
		'OPTtitle',
		'OPThowpublished',
		'OPTmonth',
		'OPTyear'
	);
	
$wfBibtexEntries['options'] = array(
		'OPTnote',
		'OPTabstract',
		'OPTpdf',
		'OPTps',
		'OPTurl'
	); 
?>
