function isCompatible(){if(navigator.appVersion.indexOf('MSIE')!==-1&&parseFloat(navigator.appVersion.split('MSIE')[1])<6){return false;}return true;}var startUp=function(){mw.config=new mw.Map(true);mw.loader.addSource({"local":{"loadScript":"/load.php","apiScript":"/api.php"}});mw.loader.register([["site","1396446811",[],"site"],["noscript","1396446811",[],"noscript"],["startup","1429004692",[],"startup"],["filepage","1396446811"],["user.groups","1396446811",[],"user"],["user","1396446811",[],"user"],["user.cssprefs","1429004692",["mediawiki.user"],"private"],["user.options","1429004692",[],"private"],["user.tokens","1396446811",[],"private"],["mediawiki.language.data","1396446811",["mediawiki.language.init"]],["skins.chick","1396446811"],["skins.cologneblue","1396446811"],["skins.modern","1396446811"],["skins.monobook","1396446811"],["skins.nostalgia","1396446811"],["skins.simple","1396446811"],["skins.standard","1396446811"],["skins.vector","1396446811"],["jquery","1396446811"],[
"jquery.appear","1396446811"],["jquery.arrowSteps","1396446811"],["jquery.async","1396446811"],["jquery.autoEllipsis","1396446811",["jquery.highlightText"]],["jquery.badge","1396446811"],["jquery.byteLength","1396446811"],["jquery.byteLimit","1396446811",["jquery.byteLength"]],["jquery.checkboxShiftClick","1396446811"],["jquery.client","1396446811"],["jquery.collapsibleTabs","1396446811"],["jquery.color","1396446811",["jquery.colorUtil"]],["jquery.colorUtil","1396446811"],["jquery.cookie","1396446811"],["jquery.delayedBind","1396446811"],["jquery.expandableField","1396446811",["jquery.delayedBind"]],["jquery.farbtastic","1396446811",["jquery.colorUtil"]],["jquery.footHovzer","1396446811"],["jquery.form","1396446811"],["jquery.getAttrs","1396446811"],["jquery.highlightText","1396446811",["jquery.mwExtension"]],["jquery.hoverIntent","1396446811"],["jquery.json","1396446811"],["jquery.localize","1396446811"],["jquery.makeCollapsible","1422968423"],["jquery.mockjax","1396446811"],[
"jquery.mw-jump","1396446811"],["jquery.mwExtension","1396446811"],["jquery.placeholder","1396446811"],["jquery.qunit","1396446811"],["jquery.qunit.completenessTest","1396446811",["jquery.qunit"]],["jquery.spinner","1396446811"],["jquery.jStorage","1396446811",["jquery.json"]],["jquery.suggestions","1396446811",["jquery.autoEllipsis"]],["jquery.tabIndex","1396446811"],["jquery.tablesorter","1426039747",["jquery.mwExtension"]],["jquery.textSelection","1396446811",["jquery.client"]],["jquery.validate","1396446811"],["jquery.xmldom","1396446811"],["jquery.tipsy","1396446811"],["jquery.ui.core","1396446811",["jquery"],"jquery.ui"],["jquery.ui.widget","1396446811",[],"jquery.ui"],["jquery.ui.mouse","1396446811",["jquery.ui.widget"],"jquery.ui"],["jquery.ui.position","1396446811",[],"jquery.ui"],["jquery.ui.draggable","1396446811",["jquery.ui.core","jquery.ui.mouse","jquery.ui.widget"],"jquery.ui"],["jquery.ui.droppable","1396446811",["jquery.ui.core","jquery.ui.mouse","jquery.ui.widget",
"jquery.ui.draggable"],"jquery.ui"],["jquery.ui.resizable","1396446811",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui"],["jquery.ui.selectable","1396446811",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui"],["jquery.ui.sortable","1396446811",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui"],["jquery.ui.accordion","1396446811",["jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.ui.autocomplete","1396446811",["jquery.ui.core","jquery.ui.widget","jquery.ui.position"],"jquery.ui"],["jquery.ui.button","1396446811",["jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.ui.datepicker","1396446811",["jquery.ui.core"],"jquery.ui"],["jquery.ui.dialog","1396446811",["jquery.ui.core","jquery.ui.widget","jquery.ui.button","jquery.ui.draggable","jquery.ui.mouse","jquery.ui.position","jquery.ui.resizable"],"jquery.ui"],["jquery.ui.progressbar","1396446811",["jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.ui.slider",
"1396446811",["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui"],["jquery.ui.tabs","1396446811",["jquery.ui.core","jquery.ui.widget"],"jquery.ui"],["jquery.effects.core","1396446811",["jquery"],"jquery.ui"],["jquery.effects.blind","1396446811",["jquery.effects.core"],"jquery.ui"],["jquery.effects.bounce","1396446811",["jquery.effects.core"],"jquery.ui"],["jquery.effects.clip","1396446811",["jquery.effects.core"],"jquery.ui"],["jquery.effects.drop","1396446811",["jquery.effects.core"],"jquery.ui"],["jquery.effects.explode","1396446811",["jquery.effects.core"],"jquery.ui"],["jquery.effects.fade","1396446811",["jquery.effects.core"],"jquery.ui"],["jquery.effects.fold","1396446811",["jquery.effects.core"],"jquery.ui"],["jquery.effects.highlight","1396446811",["jquery.effects.core"],"jquery.ui"],["jquery.effects.pulsate","1396446811",["jquery.effects.core"],"jquery.ui"],["jquery.effects.scale","1396446811",["jquery.effects.core"],"jquery.ui"],["jquery.effects.shake",
"1396446811",["jquery.effects.core"],"jquery.ui"],["jquery.effects.slide","1396446811",["jquery.effects.core"],"jquery.ui"],["jquery.effects.transfer","1396446811",["jquery.effects.core"],"jquery.ui"],["mediawiki","1396446811"],["mediawiki.api","1396446811",["mediawiki.util"]],["mediawiki.api.category","1396446811",["mediawiki.api","mediawiki.Title"]],["mediawiki.api.edit","1396446811",["mediawiki.api","mediawiki.Title"]],["mediawiki.api.parse","1396446811",["mediawiki.api"]],["mediawiki.api.titleblacklist","1396446811",["mediawiki.api","mediawiki.Title"]],["mediawiki.api.watch","1396446811",["mediawiki.api","user.tokens"]],["mediawiki.debug","1396446811",["jquery.footHovzer"]],["mediawiki.debug.init","1396446811",["mediawiki.debug"]],["mediawiki.feedback","1396446811",["mediawiki.api.edit","mediawiki.Title","mediawiki.jqueryMsg","jquery.ui.dialog"]],["mediawiki.htmlform","1396446811"],["mediawiki.notification","1396446811",["mediawiki.page.startup"]],["mediawiki.notify","1396446811"],
["mediawiki.searchSuggest","1422968423",["jquery.autoEllipsis","jquery.client","jquery.placeholder","jquery.suggestions"]],["mediawiki.Title","1396446811",["mediawiki.util"]],["mediawiki.Uri","1396446811"],["mediawiki.user","1396446811",["jquery.cookie","mediawiki.api"]],["mediawiki.util","1422968423",["jquery.client","jquery.cookie","jquery.mwExtension","mediawiki.notify"]],["mediawiki.action.edit","1396446811",["jquery.textSelection","jquery.byteLimit"]],["mediawiki.action.edit.preview","1396446811",["jquery.form","jquery.spinner"]],["mediawiki.action.history","1396446811",[],"mediawiki.action.history"],["mediawiki.action.history.diff","1396446811",[],"mediawiki.action.history"],["mediawiki.action.view.dblClickEdit","1396446811",["mediawiki.util"]],["mediawiki.action.view.metadata","1423112712"],["mediawiki.action.view.rightClickEdit","1396446811"],["mediawiki.action.watch.ajax","1396446811",["mediawiki.page.watch.ajax"]],["mediawiki.language","1396446811",["mediawiki.language.data",
"mediawiki.cldr"]],["mediawiki.cldr","1396446811",["mediawiki.libs.pluralruleparser"]],["mediawiki.libs.pluralruleparser","1396446811"],["mediawiki.language.init","1396446811"],["mediawiki.jqueryMsg","1396446811",["mediawiki.util","mediawiki.language"]],["mediawiki.libs.jpegmeta","1396446811"],["mediawiki.page.ready","1396446811",["jquery.checkboxShiftClick","jquery.makeCollapsible","jquery.placeholder","jquery.mw-jump","mediawiki.util"]],["mediawiki.page.startup","1396446811",["jquery.client","mediawiki.util"]],["mediawiki.page.watch.ajax","1422968423",["mediawiki.page.startup","mediawiki.api.watch","mediawiki.util","mediawiki.notify","jquery.mwExtension"]],["mediawiki.special","1396446811"],["mediawiki.special.block","1396446811",["mediawiki.util"]],["mediawiki.special.changeemail","1396446811",["mediawiki.util"]],["mediawiki.special.changeslist","1396446811",["jquery.makeCollapsible"]],["mediawiki.special.movePage","1396446811",["jquery.byteLimit"]],["mediawiki.special.preferences",
"1396446811"],["mediawiki.special.recentchanges","1396446811",["mediawiki.special"]],["mediawiki.special.search","1423012909"],["mediawiki.special.undelete","1396446811"],["mediawiki.special.upload","1423101717",["mediawiki.libs.jpegmeta","mediawiki.util"]],["mediawiki.special.javaScriptTest","1396446811",["jquery.qunit"]],["mediawiki.tests.qunit.testrunner","1396446811",["jquery.qunit","jquery.qunit.completenessTest","mediawiki.page.startup","mediawiki.page.ready"]],["mediawiki.legacy.ajax","1396446811",["mediawiki.util","mediawiki.legacy.wikibits"]],["mediawiki.legacy.commonPrint","1396446811"],["mediawiki.legacy.config","1396446811",["mediawiki.legacy.wikibits"]],["mediawiki.legacy.IEFixes","1396446811",["mediawiki.legacy.wikibits"]],["mediawiki.legacy.protect","1396446811",["mediawiki.legacy.wikibits","jquery.byteLimit"]],["mediawiki.legacy.shared","1396446811"],["mediawiki.legacy.oldshared","1396446811"],["mediawiki.legacy.upload","1396446811",["mediawiki.legacy.wikibits",
"mediawiki.util"]],["mediawiki.legacy.wikibits","1396446811",["mediawiki.util"]],["mediawiki.legacy.wikiprintable","1396446811"],["ext.cite","1396446811",["jquery.tooltip"]],["jquery.tooltip","1396446811"],["ext.rtlcite","1396446811"]]);mw.config.set({"wgLoadScript":"/load.php","debug":false,"skin":"monobook","stylepath":"/skins","wgUrlProtocols":"http\\:\\/\\/|https\\:\\/\\/|ftp\\:\\/\\/|irc\\:\\/\\/|ircs\\:\\/\\/|gopher\\:\\/\\/|telnet\\:\\/\\/|nntp\\:\\/\\/|worldwind\\:\\/\\/|mailto\\:|news\\:|svn\\:\\/\\/|git\\:\\/\\/|mms\\:\\/\\/|\\/\\/","wgArticlePath":"/index.php/$1","wgScriptPath":"","wgScriptExtension":".php","wgScript":"/index.php","wgVariantArticlePath":false,"wgActionPaths":{},"wgServer":"http://10.120.10.100:9002","wgUserLanguage":"zh-cn","wgContentLanguage":"en","wgVersion":"1.20.2","wgEnableAPI":true,"wgEnableWriteAPI":true,"wgMainPageTitle":"Main Page","wgFormattedNamespaces":{"-2":"Media","-1":"Special","0":"","1":"Talk","2":"User","3":"User talk","4":
"CKT Chengdu Wiki","5":"CKT Chengdu Wiki talk","6":"File","7":"File talk","8":"MediaWiki","9":"MediaWiki talk","10":"Template","11":"Template talk","12":"Help","13":"Help talk","14":"Category","15":"Category talk"},"wgNamespaceIds":{"media":-2,"special":-1,"":0,"talk":1,"user":2,"user_talk":3,"ckt_chengdu_wiki":4,"ckt_chengdu_wiki_talk":5,"file":6,"file_talk":7,"mediawiki":8,"mediawiki_talk":9,"template":10,"template_talk":11,"help":12,"help_talk":13,"category":14,"category_talk":15,"image":6,"image_talk":7,"project":4,"project_talk":5},"wgSiteName":"CKT_Chengdu_Wiki","wgFileExtensions":["png","gif","jpg","jpeg","doc","xls","mpp","pdf","ppt","tiff","bmp","docx","xlsx","pptx","ps","odt","ods","odp","odg","7z","rar","zip","gz","txt","mpeg","swf","bin","swc"],"wgDBname":"wikidb","wgFileCanRotate":false,"wgAvailableSkins":{"monobook":"MonoBook","chick":"Chick","modern":"Modern","cologneblue":"CologneBlue","standard":"Standard","nostalgia":"Nostalgia","vector":"Vector","myskin":"MySkin",
"simple":"Simple"},"wgExtensionAssetsPath":"/extensions","wgCookiePrefix":"wikidb","wgResourceLoaderMaxQueryLength":-1,"wgCaseSensitiveNamespaces":[]});};if(isCompatible()){document.write("\x3cscript src=\"/load.php?debug=false\x26amp;lang=zh-cn\x26amp;modules=jquery%2Cmediawiki\x26amp;only=scripts\x26amp;skin=monobook\x26amp;version=20121220T090501Z\"\x3e\x3c/script\x3e");}delete isCompatible;
/* cache key: wikidb:resourceloader:filter:minify-js:7:80038ebe35e24c80af83f7029a036a38 */