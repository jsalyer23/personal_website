<?php
	$thisPage = "What Makes Up An HTML Document?"; 
	include("top.php"); 
?>
			<div class="titles">
				<h2 class="articleTitles">What Makes Up An HTML Document?</h2>
			</div>
				
			<div class="content">
				<p>There are many possible parts to a HTML document but every website has the same basic structure. The basic HTML document is made up of html, head, body, and footer tags. Many more tags can be added within these but we'll focus on the basic ones.</p>

				<p>Every HTML document starts by declaring the &lt;DOCTYPE html&gt;. If you don't tell the browser how to interperet your HTML doument it won't know what to do with it. The second tag needed to start an HTML document is the &lt;html&gt; tags which surround everything besides the doctype decloration. The &lt;html&gt; tags also tell the browser that everything within them should be interpereted as HTML script.</p>

				<p>Within the &lt;html&gt; tags are the head, body, and footer. The head tags come before the body and include all of the head elements. Elements within the head tags could include &lt;title&gt;(adds a title to your webpage and is also required for a valid HTML document), &lt;style&gt;(contains CSS directly within your HTML document), &lt;link&gt;(links other files with the current file), &lt;script&gt;(adds JavaScript into your HTML document), or &lt;meta&gt; tags(provide meta data about the HTML document).</p>

				<p>The body tags contain the contents of your webpage. Your contents could be paragraphs of text, titles of articles, links to your other pages(or other sites), navigation menus, lists, tables, forms, and so on. The body will make up most of what the user will see when they visit your website.</p>

				<p>The last part of basic HTML structure is the footer. The footer goes at the bottom of the HTML document below the body. It usually contains information like the author of the page, copy right date, "back to the top" links, or even social media links/contact information. You can have several footer elements on the same HTML document.</p>

				<p>The basic structure of a HTML document is pretty much the same for all websites but the things that people can create with it are amazing. There are an enless amount of ways to create a website from the same HTML elements. What will you create?</p>
			</div>
		</div>
	</div>
		
<?php include("bottom.php"); ?>
