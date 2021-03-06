<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# index.php
	#
	# Author: 		
	# Date:			2009-06-09
	#
	# Description: Eclipse project development main page
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse 3.5 Acknowledgements";
	$pageKeywords	= "eclipse, 3.5 acknowledgements, thanks";
	$pageAuthor		= "";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
		
	# Paste your HTML content between the markers!	
ob_start();
?>		

	<div id="midcolumn">


<div class="homeitem3col">
<h3>Eclipse 3.5 Acknowledgements</h3>


<p>
The Eclipse and RT projects (Platform, JDT, PDE, Equinox) development team received a tremendous amount of support from the Eclipse community throughout the 3.5 release cycle. 
The enormous collective effort of opening bug reports, providing patches, testing, consuming the latest builds and participating in discussions always results in a better 
release. To everyone that helped a big "Thank you!/Merci!/Danke!".  In particular, the team would like to express its appreciation to the following people.
</p>


<p>
The Platform and JDT Text team would like to thank everyone who filed good bug reports and enhancement requests. Special thanks go to:<br>
Tom Hofmann, Tomasz Zarna, Benjamin Muskalla, Anton Leherbauer, Eric Rizzo, and Florian Albrecht.
</p>

<p>
JDT UI sends thanks to:<br>
Benjamin Muskalla, Brock Janiczak, Ferenc Hechler, Francis Upton IV, and Mateusz Matela.
</p>

<p>
PDE would like to thank everyone that sent in patches! Special thanks to:<br>
Simon Archer, Benjamin Cabe, Jakub Jurkiewicz, Philipp Kursawe, Jeff McAffer, Ketan Padegaonkar, Jacek Pospychala, Ankur Sharma, Remy Suen, Rafael Oliveira N&oacute;brega, Bartosz Michalik and Thomas Watson.
</p>

<p>
Platform Workspace sends thanks to Dani Megert who significantly helped with the compare framework.
Thanks to John Arthorne from the rest of the team for constant help with the resources related issues.
</p>

<p>
The User Assistance team would like to thank everyone who filed bug reports, 
sent in patches or participated in the eclipse.platform.ua newsgroup. 
Special thanks go to Guillermo Hurtado for contributing the custom TOC icon feature, 
Chris Austin for contributing the checkbox to always open intro on startup and John Chen, 
Sheila Xu and Mei Yang for contributing the quick search feature.
</p>

<p>Platform releng would like to thank Andrew Niefer for help transitioning the build to use the p2 publisher and product builds, 
 John Arthorne and DJ Houghton who assisted with composite repos and Pascal Rapicault for the p2's slicer task 
and other implementation details. I'd also like to extend a special thanks to Jenn Charland our super sysadmin who keeps our build lab in good shape.
A sincere merci to Fr&eacute;d&eacute;ric Fusier for his work improving the performance framework and verifying the performance results.Thanks to Olivier
Thomann for the pde api tools ant tasks we use in the build.   
</p>    
</p> 

<p>The Platform UI team would like to thank everyone who filed bugs, asked and answered newsgroup questions,
and contributed patches. For 3.5, we have included contributions from an unprecedented number of people:
Heiko Ahlig, Chris Audley, Chris Austin, Matthew Bisson, David Black, Nikolay Botev, Chuck Bridgham,
Alban Browaeys, Benjamin Cab&eacute;, Keith W. Campbell, Matt Carter, Peter Centgraf, Mariot Chauvin,
Sebastian Davids, Carlos Devoto, Murat Eken, Martin Frey, Peter Friese, Sebastian Fuchs, Lidija Grahek,
Micah Hainline, Dan Heidinga, Gordon Hirsch, Marc R. Hoffmann, Konstantin Komissarchik, Blazej Kroll,
Markus Alexander Kuppe, Alena Laskavaia, Anton Leherbauer, Jamie Liu, Andrei Loskutov, Ovidio Mallo,
Lubomir Marinov, Chris McGee, Lars Millberg, Peter Nehrer, Hiroyuki Okamoto, Andrew Overholt,
Carsten Pfeiffer, Ian Phillips, Eric Rizzo, Stefan R&ouml;ck, Michael Scharf, Kai Schlamp, Rob Stryker,
Andi Thomas, Antoine Toulm&eacute;, Ben Vitale, Elias Volanakis, Wayne Diu, Ryan Wilhm, Mario Winterer,
Fabio Zadrozny, and Simon Zambrovski. Thank you!
</p>

<p>For the Common Navigator component of Platform UI, Francis thanks Anton Leherbauer for a number of patches
and much guidance, Dani Megert for working diligently on issues
related to Java and beyond (and keeping me honest), Simon Zambrovski for documentation help, and Rob Stryker for patches.  
Also thanks to the rest of the Platform UI and JDT UI teams for all of their help and support.  Finally thanks to everyone who 
submitted bug/enhancement reports.
</p>

<p>JDT/Core would like to thank everyone who submitted bug reports, sent in patches or participated in the eclipse.tools.jdt newsgroup.
A special thanks to Irwin Boutboul and Stephan Herrmann.
</p>

<p>The SWT team would like to thank everyone who filed bugs and helped improve the
toolkit.  Special thanks go to:<br>
Bryan Hunt, David Green, Andrew Overholt, Boris Bokowski, Christopher Deckers, 
Daniel Megert, Eric Rizzo, Markus Keller, McQ, Mik Kersten, Remy Suen, Scott Kovatch,
Tom Schindl, Pascal Rapicault, and Chris Aniszczyk.
</p>

<p>
The Equinox team (framework, p2, compendium, components, server side) would like to thank (in no particular order):
<ul>
<li>Troy Bishop for his contribution to improving and enhancing Equinox trace APIs</li>
<li>Rob Harrop for his contribution to fixing some very difficult threading issues in the Framework</li>
<li>Tomer Mahlin for his contribution to supporting unicode locale extensions</li>
<li>Ikuo Yamasaki for his contribution to implementing OSGi RFC 131 in the Framework</li>
<li>Thomas Hallgren for p2 omni-version support, transport layer code, and various bug fixes</li>
<li>Mark Melvin, Miles Parker, James Miles, Dennis O'Flynn, Zviki Cohen, Andrew Overholt, and countless others who rode the bleeding edge
of new p2 developments and provided valuable feedback</li>
<li>Kevin McGuire the Eclipse SDK usability architect for always being available to look at UI issues big and small, and providing feedback and advice.</li>
<li>The Eclipse UI Working Group (UIWG) for providing valuable feedback during p2 UI walkthroughs</li>
<li>Gunnar Wagenknecht for his contributions to server-side Equinox</li>
<li>Our co-op students Matthew "Coding Machine" Piggott and Andrew "Guitar Hero" Cattle for their avalanche of code contributions</li>
<li>Paul Webster the Eclipse newsgroup ninja for jumping in and answering questions on the Equinox newsgroup</li>
<li>Kim Moir the build wizard for integrating and testing countless build changes in support of p2 and PDE build</li>
<li>A special thanks to our new committers Daniel Le Berre, Henrik Lindberg, and Ian Bull 
for their countless hours of work to help make this release such a success.
</ul>
</p>

  </div>
  </div>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

