<?php
/**
 * Plugin URI: https://gavamedia.com
 * Documentation URI: https://gavamedia.com
 * Author: GAVAMEDIA
 * Author URI: https://gavamedia.com
 * Version: 1.0.1
 * Text Domain: woocommerce-shipping-and-pickup-dates
 *
 * Copyright: Copyright (c) 2021 GAVAMEDIA Corporation (support@gavamedia.com)
 *
 * License: Server Side Public License VERSION 1 or later
 * License URI: https://www.mongodb.com/licensing/server-side-public-license
 *
 * @package   WooCommerceShippingAndPickupDates
 * @author    GAVAMEDIA
 * @category  Delivery and Shipping Options
 * @copyright Copyright (c) 2021 GAVAMEDIA Corporation (support@gavamedia.com)
 * @license   https://www.mongodb.com/licensing/server-side-public-license Server Side Public License VERSION 1 or later
 *
 * xxxWoo: 187234:2i3u4oiu234329a3242387
 * xxxWC requires at least: 3.5
 * xxxWC tested up to: 5.1.0
 */


echo <<<GAVA

<div class="wrap">
<h1 class="wp-heading-inline">
Listings</h1>

 <a href="/wp-admin/post-new.php?post_type=page" class="page-title-action">Add New</a>
<hr class="wp-header-end">


<h2 class="screen-reader-text">Filter pages list</h2><ul class="subsubsub">
	<li class="all"><a href="edit.php?post_type=page" class="current" aria-current="page">All <span class="count">(11)</span></a> |</li>
	<li class="publish"><a href="edit.php?post_status=publish&amp;post_type=page">Published <span class="count">(7)</span></a> |</li>
	<li class="draft"><a href="edit.php?post_status=draft&amp;post_type=page">Draft <span class="count">(1)</span></a> |</li>
	<li class="private"><a href="edit.php?post_status=private&amp;post_type=page">Private <span class="count">(3)</span></a> |</li>
	<li class="yoast_cornerstone"><a href="edit.php?yoast_filter=cornerstone&amp;post_type=page">Cornerstone content</a> (0)</li>
</ul>
<form id="posts-filter" method="get">

<p class="search-box">
	<label class="screen-reader-text" for="post-search-input">Search Pages:</label>
	<input type="search" id="post-search-input" name="s" value="">
		<input type="submit" id="search-submit" class="button" value="Search Pages"></p>
		
<input type="hidden" name="post_status" class="post_status_page" value="all">
<input type="hidden" name="post_type" class="post_type_page" value="page">



<input type="hidden" id="_wpnonce" name="_wpnonce" value="98935b35a9"><input type="hidden" name="_wp_http_referer" value="/wp-admin/edit.php?post_type=page">	<div class="tablenav top">

				<div class="alignleft actions bulkactions">
			<label for="bulk-action-selector-top" class="screen-reader-text">Select bulk action</label><select name="action" id="bulk-action-selector-top">
<option value="-1">Bulk Actions</option>
	<option value="edit" class="hide-if-no-js">Edit</option>
	<option value="trash">Move to Trash</option>
</select>
<input type="submit" name="doaction" id="doaction" class="button action" value="Apply">
		</div>
					<div class="alignleft actions">
				<label for="filter-by-date" class="screen-reader-text">Filter by date</label>
		<select name="m" id="filter-by-date">
			<option selected="selected" value="0">All dates</option>
		<option value="202003">March 2020</option>
<option value="202002">February 2020</option>
<option value="201912">December 2019</option>
		</select>
		<label class="screen-reader-text" for="wpseo-filter">Filter by SEO Score</label><select name="seo_filter" id="wpseo-filter"><option value="">All SEO Scores</option><option value="bad">SEO: Needs improvement</option><option value="ok">SEO: OK</option><option value="good">SEO: Good</option><option value="na">SEO: No Focus Keyphrase</option><option value="noindex">SEO: Post Noindexed</option></select><label class="screen-reader-text" for="wpseo-readability-filter">Filter by Readability Score</label><select name="readability_filter" id="wpseo-readability-filter"><option value="">All Readability Scores</option><option value="bad">Readability: Needs improvement</option><option value="ok">Readability: OK</option><option value="good">Readability: Good</option></select><input type="submit" name="filter_action" id="post-query-submit" class="button" value="Filter">		</div>
		<div class="tablenav-pages one-page"><span class="displaying-num">11 items</span>
<span class="pagination-links"><span class="tablenav-pages-navspan button disabled" aria-hidden="true">«</span>
<span class="tablenav-pages-navspan button disabled" aria-hidden="true">‹</span>
<span class="paging-input"><label for="current-page-selector" class="screen-reader-text">Current Page</label><input class="current-page" id="current-page-selector" type="text" name="paged" value="1" size="1" aria-describedby="table-paging"><span class="tablenav-paging-text"> of <span class="total-pages">1</span></span></span>
<span class="tablenav-pages-navspan button disabled" aria-hidden="true">›</span>
<span class="tablenav-pages-navspan button disabled" aria-hidden="true">»</span></span></div>
		<br class="clear">
	</div>
		<h2 class="screen-reader-text">Pages list</h2><table class="wp-list-table widefat fixed striped table-view-list pages">
	<thead>
	<tr>
		<td id="cb" class="manage-column column-cb check-column"><label class="screen-reader-text" for="cb-select-all-1">Select All</label><input id="cb-select-all-1" type="checkbox"></td><th scope="col" id="title" class="manage-column column-title column-primary sortable desc"><a href="/wp-admin/edit.php?post_type=page&amp;orderby=title&amp;order=asc"><span>Title</span><span class="sorting-indicator"></span></a></th><th scope="col" id="author" class="manage-column column-author">Author</th><th scope="col" id="comments" class="manage-column column-comments num sortable desc"><a href="/wp-admin/edit.php?post_type=page&amp;orderby=comment_count&amp;order=asc"><span><span class="vers comment-grey-bubble" title="Comments"><span class="screen-reader-text">Comments</span></span></span><span class="sorting-indicator"></span></a></th><th scope="col" id="date" class="manage-column column-date sortable asc"><a href="/wp-admin/edit.php?post_type=page&amp;orderby=date&amp;order=desc"><span>Date</span><span class="sorting-indicator"></span></a></th><th scope="col" id="wpseo-links" class="manage-column column-wpseo-links sortable desc"><a href="/wp-admin/edit.php?post_type=page&amp;orderby=wpseo-links&amp;order=asc" class="yoast-tooltip yoast-tooltip-alt yoast-tooltip-n yoast-tooltip-multiline" data-label="Number of outgoing internal links in this post. See &quot;Yoast Columns&quot; text in the help tab for more info." aria-label="Outgoing internal links"><span><span class="yoast-linked-to yoast-column-header-has-tooltip" data-tooltip-text="Number of outgoing internal links in this post. See &quot;Yoast Columns&quot; text in the help tab for more info."><span class="screen-reader-text">Outgoing internal links</span></span></span><span class="sorting-indicator"></span></a></th><th scope="col" id="wpseo-score" class="manage-column column-wpseo-score"><span class="yoast-tooltip yoast-tooltip-n yoast-tooltip-alt" data-label="SEO score"><span class="yoast-column-seo-score yoast-column-header-has-tooltip"><span class="screen-reader-text">SEO score</span></span></span></th><th scope="col" id="wpseo-score-readability" class="manage-column column-wpseo-score-readability"><span class="yoast-tooltip yoast-tooltip-n yoast-tooltip-alt" data-label="Readability score"><span class="yoast-column-readability yoast-column-header-has-tooltip"><span class="screen-reader-text">Readability score</span></span></span></th><th scope="col" id="wpseo-title" class="manage-column column-wpseo-title hidden">SEO Title</th><th scope="col" id="wpseo-metadesc" class="manage-column column-wpseo-metadesc hidden sortable desc"><a href="/wp-admin/edit.php?post_type=page&amp;orderby=wpseo-metadesc&amp;order=asc"><span>Meta Desc.</span><span class="sorting-indicator"></span></a></th><th scope="col" id="wpseo-focuskw" class="manage-column column-wpseo-focuskw hidden sortable desc"><a href="/wp-admin/edit.php?post_type=page&amp;orderby=wpseo-focuskw&amp;order=asc"><span>Keyphrase</span><span class="sorting-indicator"></span></a></th>	</tr>
	</thead>

	<tbody id="the-list">
					<tr id="post-438" class="iedit author-self level-0 post-438 type-page status-private hentry">
			<th scope="row" class="check-column">			<label class="screen-reader-text" for="cb-select-438">
				Select (BLOG TEMPLATE)			</label>
			<input id="cb-select-438" type="checkbox" name="post[]" value="438">
			<div class="locked-indicator">
				<span class="locked-indicator-icon" aria-hidden="true"></span>
				<span class="screen-reader-text">
				“(BLOG TEMPLATE)” is locked				</span>
			</div>
			</th><td class="title column-title has-row-actions column-primary page-title" data-colname="Title"><div class="locked-info"><span class="locked-avatar"></span> <span class="locked-text"></span></div>
<strong><a class="row-title" href="/wp-admin/post.php?post=438&amp;action=edit" aria-label="“(BLOG TEMPLATE)” (Edit)">(BLOG TEMPLATE)</a> — <span class="post-state">Private, </span><span class="post-state">Elementor</span></strong>

<div class="hidden" id="inline_438">
	<div class="post_title">(BLOG TEMPLATE)</div><div class="post_name">blog-template</div>
	<div class="post_author">1</div>
	<div class="comment_status">closed</div>
	<div class="ping_status">closed</div>
	<div class="_status">private</div>
	<div class="jj">31</div>
	<div class="mm">03</div>
	<div class="aa">2020</div>
	<div class="hh">19</div>
	<div class="mn">33</div>
	<div class="ss">23</div>
	<div class="post_password"></div><div class="post_parent">0</div><div class="page_template">elementor_header_footer</div><div class="menu_order">0</div></div><div class="row-actions"><span class="edit"><a href="/wp-admin/post.php?post=438&amp;action=edit" aria-label="Edit “(BLOG TEMPLATE)”">Edit</a> | </span><span class="inline hide-if-no-js"><button type="button" class="button-link editinline" aria-label="Quick edit “(BLOG TEMPLATE)” inline" aria-expanded="false">Quick&nbsp;Edit</button> | </span><span class="trash"><a href="/wp-admin/post.php?post=438&amp;action=trash&amp;_wpnonce=8fe446aa8d" class="submitdelete" aria-label="Move “(BLOG TEMPLATE)” to the Trash">Trash</a> | </span><span class="view"><a href="/blog-template/" rel="bookmark" aria-label="View “(BLOG TEMPLATE)”">View</a> | </span><span class="edit_with_elementor"><a href="/wp-admin/post.php?post=438&amp;action=elementor">Edit with Elementor</a></span></div><button type="button" class="toggle-row"><span class="screen-reader-text">Show more details</span></button></td><td class="author column-author" data-colname="Author"><a href="edit.php?post_type=page&amp;author=1">GAVAMEDIA</a></td><td class="comments column-comments" data-colname="Comments">		<div class="post-com-count-wrapper">
		<span aria-hidden="true">—</span><span class="screen-reader-text">No Comments</span><span class="post-com-count post-com-count-pending post-com-count-no-pending"><span class="comment-count comment-count-no-pending" aria-hidden="true">0</span><span class="screen-reader-text">No Comments</span></span>		</div>
		</td><td class="date column-date" data-colname="Date">Last Modified<br>2020/03/31 at 7:33 pm</td><td class="wpseo-links column-wpseo-links" data-colname="Outgoing internal links">0</td><td class="wpseo-score column-wpseo-score" data-colname="SEO score"><div aria-hidden="true" title="Focus keyphrase not set." class="wpseo-score-icon na"></div><span class="screen-reader-text wpseo-score-text">Focus keyphrase not set.</span></td><td class="wpseo-score-readability column-wpseo-score-readability" data-colname="Readability score"><div aria-hidden="true" title="Not available" class="wpseo-score-icon na"></div><span class="screen-reader-text wpseo-score-text">Not available</span></td><td class="wpseo-title column-wpseo-title hidden" data-colname="SEO Title">(BLOG TEMPLATE) - Explore St. Lawrence</td><td class="wpseo-metadesc column-wpseo-metadesc hidden" data-colname="Meta Desc."><span aria-hidden="true">—</span><span class="screen-reader-text">Meta description not set.</span></td><td class="wpseo-focuskw column-wpseo-focuskw hidden" data-colname="Keyphrase"><span aria-hidden="true">—</span><span class="screen-reader-text">Focus keyphrase not set.</span></td>		</tr>
					<tr id="post-194" class="iedit author-self level-0 post-194 type-page status-private hentry">
			<th scope="row" class="check-column">			<label class="screen-reader-text" for="cb-select-194">
				Select (FOOTER)			</label>
			<input id="cb-select-194" type="checkbox" name="post[]" value="194">
			<div class="locked-indicator">
				<span class="locked-indicator-icon" aria-hidden="true"></span>
				<span class="screen-reader-text">
				“(FOOTER)” is locked				</span>
			</div>
			</th><td class="title column-title has-row-actions column-primary page-title" data-colname="Title"><div class="locked-info"><span class="locked-avatar"></span> <span class="locked-text"></span></div>
<strong><a class="row-title" href="/wp-admin/post.php?post=194&amp;action=edit" aria-label="“(FOOTER)” (Edit)">(FOOTER)</a> — <span class="post-state">Private, </span><span class="post-state">Elementor</span></strong>

<div class="hidden" id="inline_194">
	<div class="post_title">(FOOTER)</div><div class="post_name">footer</div>
	<div class="post_author">1</div>
	<div class="comment_status">closed</div>
	<div class="ping_status">closed</div>
	<div class="_status">private</div>
	<div class="jj">12</div>
	<div class="mm">03</div>
	<div class="aa">2020</div>
	<div class="hh">15</div>
	<div class="mn">51</div>
	<div class="ss">25</div>
	<div class="post_password"></div><div class="post_parent">0</div><div class="page_template">elementor_header_footer</div><div class="menu_order">0</div></div><div class="row-actions"><span class="edit"><a href="/wp-admin/post.php?post=194&amp;action=edit" aria-label="Edit “(FOOTER)”">Edit</a> | </span><span class="inline hide-if-no-js"><button type="button" class="button-link editinline" aria-label="Quick edit “(FOOTER)” inline" aria-expanded="false">Quick&nbsp;Edit</button> | </span><span class="trash"><a href="/wp-admin/post.php?post=194&amp;action=trash&amp;_wpnonce=82fa6cb3e8" class="submitdelete" aria-label="Move “(FOOTER)” to the Trash">Trash</a> | </span><span class="view"><a href="/footer/" rel="bookmark" aria-label="View “(FOOTER)”">View</a> | </span><span class="edit_with_elementor"><a href="/wp-admin/post.php?post=194&amp;action=elementor">Edit with Elementor</a></span></div><button type="button" class="toggle-row"><span class="screen-reader-text">Show more details</span></button></td><td class="author column-author" data-colname="Author"><a href="edit.php?post_type=page&amp;author=1">GAVAMEDIA</a></td><td class="comments column-comments" data-colname="Comments">		<div class="post-com-count-wrapper">
		<span aria-hidden="true">—</span><span class="screen-reader-text">No Comments</span><span class="post-com-count post-com-count-pending post-com-count-no-pending"><span class="comment-count comment-count-no-pending" aria-hidden="true">0</span><span class="screen-reader-text">No Comments</span></span>		</div>
		</td><td class="date column-date" data-colname="Date">Last Modified<br>2020/03/12 at 3:51 pm</td><td class="wpseo-links column-wpseo-links" data-colname="Outgoing internal links">7</td><td class="wpseo-score column-wpseo-score" data-colname="SEO score"><div aria-hidden="true" title="Focus keyphrase not set." class="wpseo-score-icon na"></div><span class="screen-reader-text wpseo-score-text">Focus keyphrase not set.</span></td><td class="wpseo-score-readability column-wpseo-score-readability" data-colname="Readability score"><div aria-hidden="true" title="Not available" class="wpseo-score-icon na"></div><span class="screen-reader-text wpseo-score-text">Not available</span></td><td class="wpseo-title column-wpseo-title hidden" data-colname="SEO Title">(FOOTER) - Explore St. Lawrence</td><td class="wpseo-metadesc column-wpseo-metadesc hidden" data-colname="Meta Desc."><span aria-hidden="true">—</span><span class="screen-reader-text">Meta description not set.</span></td><td class="wpseo-focuskw column-wpseo-focuskw hidden" data-colname="Keyphrase"><span aria-hidden="true">—</span><span class="screen-reader-text">Focus keyphrase not set.</span></td>		</tr>
					<tr id="post-212" class="iedit author-self level-0 post-212 type-page status-private hentry">
			<th scope="row" class="check-column">			<label class="screen-reader-text" for="cb-select-212">
				Select (HEADER)			</label>
			<input id="cb-select-212" type="checkbox" name="post[]" value="212">
			<div class="locked-indicator">
				<span class="locked-indicator-icon" aria-hidden="true"></span>
				<span class="screen-reader-text">
				“(HEADER)” is locked				</span>
			</div>
			</th><td class="title column-title has-row-actions column-primary page-title" data-colname="Title"><div class="locked-info"><span class="locked-avatar"></span> <span class="locked-text"></span></div>
<strong><a class="row-title" href="/wp-admin/post.php?post=212&amp;action=edit" aria-label="“(HEADER)” (Edit)">(HEADER)</a> — <span class="post-state">Private, </span><span class="post-state">Elementor</span></strong>

<div class="hidden" id="inline_212">
	<div class="post_title">(HEADER)</div><div class="post_name">header</div>
	<div class="post_author">1</div>
	<div class="comment_status">closed</div>
	<div class="ping_status">closed</div>
	<div class="_status">private</div>
	<div class="jj">16</div>
	<div class="mm">03</div>
	<div class="aa">2020</div>
	<div class="hh">14</div>
	<div class="mn">27</div>
	<div class="ss">37</div>
	<div class="post_password"></div><div class="post_parent">0</div><div class="page_template">elementor_header_footer</div><div class="menu_order">0</div></div><div class="row-actions"><span class="edit"><a href="/wp-admin/post.php?post=212&amp;action=edit" aria-label="Edit “(HEADER)”">Edit</a> | </span><span class="inline hide-if-no-js"><button type="button" class="button-link editinline" aria-label="Quick edit “(HEADER)” inline" aria-expanded="false">Quick&nbsp;Edit</button> | </span><span class="trash"><a href="/wp-admin/post.php?post=212&amp;action=trash&amp;_wpnonce=583357a4b7" class="submitdelete" aria-label="Move “(HEADER)” to the Trash">Trash</a> | </span><span class="view"><a href="/header/" rel="bookmark" aria-label="View “(HEADER)”">View</a> | </span><span class="edit_with_elementor"><a href="/wp-admin/post.php?post=212&amp;action=elementor">Edit with Elementor</a></span></div><button type="button" class="toggle-row"><span class="screen-reader-text">Show more details</span></button></td><td class="author column-author" data-colname="Author"><a href="edit.php?post_type=page&amp;author=1">GAVAMEDIA</a></td><td class="comments column-comments" data-colname="Comments">		<div class="post-com-count-wrapper">
		<span aria-hidden="true">—</span><span class="screen-reader-text">No Comments</span><span class="post-com-count post-com-count-pending post-com-count-no-pending"><span class="comment-count comment-count-no-pending" aria-hidden="true">0</span><span class="screen-reader-text">No Comments</span></span>		</div>
		</td><td class="date column-date" data-colname="Date">Last Modified<br>2020/03/16 at 2:27 pm</td><td class="wpseo-links column-wpseo-links" data-colname="Outgoing internal links">0</td><td class="wpseo-score column-wpseo-score" data-colname="SEO score"><div aria-hidden="true" title="Focus keyphrase not set." class="wpseo-score-icon na"></div><span class="screen-reader-text wpseo-score-text">Focus keyphrase not set.</span></td><td class="wpseo-score-readability column-wpseo-score-readability" data-colname="Readability score"><div aria-hidden="true" title="Not available" class="wpseo-score-icon na"></div><span class="screen-reader-text wpseo-score-text">Not available</span></td><td class="wpseo-title column-wpseo-title hidden" data-colname="SEO Title">(HEADER) - Explore St. Lawrence</td><td class="wpseo-metadesc column-wpseo-metadesc hidden" data-colname="Meta Desc."><span aria-hidden="true">—</span><span class="screen-reader-text">Meta description not set.</span></td><td class="wpseo-focuskw column-wpseo-focuskw hidden" data-colname="Keyphrase"><span aria-hidden="true">—</span><span class="screen-reader-text">Focus keyphrase not set.</span></td>		</tr>
					<tr id="post-31" class="iedit author-self level-0 post-31 type-page status-publish hentry">
			<th scope="row" class="check-column">			<label class="screen-reader-text" for="cb-select-31">
				Select About Us			</label>
			<input id="cb-select-31" type="checkbox" name="post[]" value="31">
			<div class="locked-indicator">
				<span class="locked-indicator-icon" aria-hidden="true"></span>
				<span class="screen-reader-text">
				“About Us” is locked				</span>
			</div>
			</th><td class="title column-title has-row-actions column-primary page-title" data-colname="Title"><div class="locked-info"><span class="locked-avatar"></span> <span class="locked-text"></span></div>
<strong><a class="row-title" href="/wp-admin/post.php?post=31&amp;action=edit" aria-label="“About Us” (Edit)">About Us</a> — <span class="post-state">Elementor</span></strong>

<div class="hidden" id="inline_31">
	<div class="post_title">About Us</div><div class="post_name">about-us</div>
	<div class="post_author">1</div>
	<div class="comment_status">closed</div>
	<div class="ping_status">closed</div>
	<div class="_status">publish</div>
	<div class="jj">11</div>
	<div class="mm">02</div>
	<div class="aa">2020</div>
	<div class="hh">18</div>
	<div class="mn">19</div>
	<div class="ss">50</div>
	<div class="post_password"></div><div class="post_parent">0</div><div class="page_template">elementor_header_footer</div><div class="menu_order">0</div></div><div class="row-actions"><span class="edit"><a href="/wp-admin/post.php?post=31&amp;action=edit" aria-label="Edit “About Us”">Edit</a> | </span><span class="inline hide-if-no-js"><button type="button" class="button-link editinline" aria-label="Quick edit “About Us” inline" aria-expanded="false">Quick&nbsp;Edit</button> | </span><span class="trash"><a href="/wp-admin/post.php?post=31&amp;action=trash&amp;_wpnonce=641917909f" class="submitdelete" aria-label="Move “About Us” to the Trash">Trash</a> | </span><span class="view"><a href="/about-us/" rel="bookmark" aria-label="View “About Us”">View</a> | </span><span class="edit_with_elementor"><a href="/wp-admin/post.php?post=31&amp;action=elementor">Edit with Elementor</a></span></div><button type="button" class="toggle-row"><span class="screen-reader-text">Show more details</span></button></td><td class="author column-author" data-colname="Author"><a href="edit.php?post_type=page&amp;author=1">GAVAMEDIA</a></td><td class="comments column-comments" data-colname="Comments">		<div class="post-com-count-wrapper">
		<span aria-hidden="true">—</span><span class="screen-reader-text">No Comments</span><span class="post-com-count post-com-count-pending post-com-count-no-pending"><span class="comment-count comment-count-no-pending" aria-hidden="true">0</span><span class="screen-reader-text">No Comments</span></span>		</div>
		</td><td class="date column-date" data-colname="Date">Published<br>2020/02/11 at 6:19 pm</td><td class="wpseo-links column-wpseo-links" data-colname="Outgoing internal links"></td><td class="wpseo-score column-wpseo-score" data-colname="SEO score"><div aria-hidden="true" title="Focus keyphrase not set." class="wpseo-score-icon na"></div><span class="screen-reader-text wpseo-score-text">Focus keyphrase not set.</span></td><td class="wpseo-score-readability column-wpseo-score-readability" data-colname="Readability score"><div aria-hidden="true" title="Not available" class="wpseo-score-icon na"></div><span class="screen-reader-text wpseo-score-text">Not available</span></td><td class="wpseo-title column-wpseo-title hidden" data-colname="SEO Title">About Us - Explore St. Lawrence</td><td class="wpseo-metadesc column-wpseo-metadesc hidden" data-colname="Meta Desc."><span aria-hidden="true">—</span><span class="screen-reader-text">Meta description not set.</span></td><td class="wpseo-focuskw column-wpseo-focuskw hidden" data-colname="Keyphrase"><span aria-hidden="true">—</span><span class="screen-reader-text">Focus keyphrase not set.</span></td>		</tr>
					<tr id="post-385" class="iedit author-self level-0 post-385 type-page status-publish hentry">
			<th scope="row" class="check-column">			<label class="screen-reader-text" for="cb-select-385">
				Select Blog			</label>
			<input id="cb-select-385" type="checkbox" name="post[]" value="385">
			<div class="locked-indicator">
				<span class="locked-indicator-icon" aria-hidden="true"></span>
				<span class="screen-reader-text">
				“Blog” is locked				</span>
			</div>
			</th><td class="title column-title has-row-actions column-primary page-title" data-colname="Title"><div class="locked-info"><span class="locked-avatar"></span> <span class="locked-text"></span></div>
<strong><a class="row-title" href="/wp-admin/post.php?post=385&amp;action=edit" aria-label="“Blog” (Edit)">Blog</a> — <span class="post-state">Elementor</span></strong>

<div class="hidden" id="inline_385">
	<div class="post_title">Blog</div><div class="post_name">blog</div>
	<div class="post_author">1</div>
	<div class="comment_status">closed</div>
	<div class="ping_status">closed</div>
	<div class="_status">publish</div>
	<div class="jj">23</div>
	<div class="mm">03</div>
	<div class="aa">2020</div>
	<div class="hh">14</div>
	<div class="mn">31</div>
	<div class="ss">50</div>
	<div class="post_password"></div><div class="post_parent">0</div><div class="page_template">elementor_header_footer</div><div class="menu_order">0</div></div><div class="row-actions"><span class="edit"><a href="/wp-admin/post.php?post=385&amp;action=edit" aria-label="Edit “Blog”">Edit</a> | </span><span class="inline hide-if-no-js"><button type="button" class="button-link editinline" aria-label="Quick edit “Blog” inline" aria-expanded="false">Quick&nbsp;Edit</button> | </span><span class="trash"><a href="/wp-admin/post.php?post=385&amp;action=trash&amp;_wpnonce=0a753372e5" class="submitdelete" aria-label="Move “Blog” to the Trash">Trash</a> | </span><span class="view"><a href="/blog/" rel="bookmark" aria-label="View “Blog”">View</a> | </span><span class="edit_with_elementor"><a href="/wp-admin/post.php?post=385&amp;action=elementor">Edit with Elementor</a></span></div><button type="button" class="toggle-row"><span class="screen-reader-text">Show more details</span></button></td><td class="author column-author" data-colname="Author"><a href="edit.php?post_type=page&amp;author=1">GAVAMEDIA</a></td><td class="comments column-comments" data-colname="Comments">		<div class="post-com-count-wrapper">
		<span aria-hidden="true">—</span><span class="screen-reader-text">No Comments</span><span class="post-com-count post-com-count-pending post-com-count-no-pending"><span class="comment-count comment-count-no-pending" aria-hidden="true">0</span><span class="screen-reader-text">No Comments</span></span>		</div>
		</td><td class="date column-date" data-colname="Date">Published<br>2020/03/23 at 2:31 pm</td><td class="wpseo-links column-wpseo-links" data-colname="Outgoing internal links">0</td><td class="wpseo-score column-wpseo-score" data-colname="SEO score"><div aria-hidden="true" title="Focus keyphrase not set." class="wpseo-score-icon na"></div><span class="screen-reader-text wpseo-score-text">Focus keyphrase not set.</span></td><td class="wpseo-score-readability column-wpseo-score-readability" data-colname="Readability score"><div aria-hidden="true" title="Not available" class="wpseo-score-icon na"></div><span class="screen-reader-text wpseo-score-text">Not available</span></td><td class="wpseo-title column-wpseo-title hidden" data-colname="SEO Title">Blog - Explore St. Lawrence</td><td class="wpseo-metadesc column-wpseo-metadesc hidden" data-colname="Meta Desc."><span aria-hidden="true">—</span><span class="screen-reader-text">Meta description not set.</span></td><td class="wpseo-focuskw column-wpseo-focuskw hidden" data-colname="Keyphrase"><span aria-hidden="true">—</span><span class="screen-reader-text">Focus keyphrase not set.</span></td>		</tr>
					<tr id="post-33" class="iedit author-self level-0 post-33 type-page status-publish hentry">
			<th scope="row" class="check-column">			<label class="screen-reader-text" for="cb-select-33">
				Select Contact Us			</label>
			<input id="cb-select-33" type="checkbox" name="post[]" value="33">
			<div class="locked-indicator">
				<span class="locked-indicator-icon" aria-hidden="true"></span>
				<span class="screen-reader-text">
				“Contact Us” is locked				</span>
			</div>
			</th><td class="title column-title has-row-actions column-primary page-title" data-colname="Title"><div class="locked-info"><span class="locked-avatar"></span> <span class="locked-text"></span></div>
<strong><a class="row-title" href="/wp-admin/post.php?post=33&amp;action=edit" aria-label="“Contact Us” (Edit)">Contact Us</a> — <span class="post-state">Elementor</span></strong>

<div class="hidden" id="inline_33">
	<div class="post_title">Contact Us</div><div class="post_name">contact-us</div>
	<div class="post_author">1</div>
	<div class="comment_status">closed</div>
	<div class="ping_status">closed</div>
	<div class="_status">publish</div>
	<div class="jj">11</div>
	<div class="mm">02</div>
	<div class="aa">2020</div>
	<div class="hh">18</div>
	<div class="mn">20</div>
	<div class="ss">05</div>
	<div class="post_password"></div><div class="post_parent">0</div><div class="page_template">elementor_header_footer</div><div class="menu_order">0</div></div><div class="row-actions"><span class="edit"><a href="/wp-admin/post.php?post=33&amp;action=edit" aria-label="Edit “Contact Us”">Edit</a> | </span><span class="inline hide-if-no-js"><button type="button" class="button-link editinline" aria-label="Quick edit “Contact Us” inline" aria-expanded="false">Quick&nbsp;Edit</button> | </span><span class="trash"><a href="/wp-admin/post.php?post=33&amp;action=trash&amp;_wpnonce=6e0c98dfa8" class="submitdelete" aria-label="Move “Contact Us” to the Trash">Trash</a> | </span><span class="view"><a href="/contact-us/" rel="bookmark" aria-label="View “Contact Us”">View</a> | </span><span class="edit_with_elementor"><a href="/wp-admin/post.php?post=33&amp;action=elementor">Edit with Elementor</a></span></div><button type="button" class="toggle-row"><span class="screen-reader-text">Show more details</span></button></td><td class="author column-author" data-colname="Author"><a href="edit.php?post_type=page&amp;author=1">GAVAMEDIA</a></td><td class="comments column-comments" data-colname="Comments">		<div class="post-com-count-wrapper">
		<span aria-hidden="true">—</span><span class="screen-reader-text">No Comments</span><span class="post-com-count post-com-count-pending post-com-count-no-pending"><span class="comment-count comment-count-no-pending" aria-hidden="true">0</span><span class="screen-reader-text">No Comments</span></span>		</div>
		</td><td class="date column-date" data-colname="Date">Published<br>2020/02/11 at 6:20 pm</td><td class="wpseo-links column-wpseo-links" data-colname="Outgoing internal links">0</td><td class="wpseo-score column-wpseo-score" data-colname="SEO score"><div aria-hidden="true" title="Focus keyphrase not set." class="wpseo-score-icon na"></div><span class="screen-reader-text wpseo-score-text">Focus keyphrase not set.</span></td><td class="wpseo-score-readability column-wpseo-score-readability" data-colname="Readability score"><div aria-hidden="true" title="Not available" class="wpseo-score-icon na"></div><span class="screen-reader-text wpseo-score-text">Not available</span></td><td class="wpseo-title column-wpseo-title hidden" data-colname="SEO Title">Contact Us - Explore St. Lawrence</td><td class="wpseo-metadesc column-wpseo-metadesc hidden" data-colname="Meta Desc."><span aria-hidden="true">—</span><span class="screen-reader-text">Meta description not set.</span></td><td class="wpseo-focuskw column-wpseo-focuskw hidden" data-colname="Keyphrase"><span aria-hidden="true">—</span><span class="screen-reader-text">Focus keyphrase not set.</span></td>		</tr>
					<tr id="post-5" class="iedit author-self level-0 post-5 type-page status-publish hentry">
			<th scope="row" class="check-column">			<label class="screen-reader-text" for="cb-select-5">
				Select Home			</label>
			<input id="cb-select-5" type="checkbox" name="post[]" value="5">
			<div class="locked-indicator">
				<span class="locked-indicator-icon" aria-hidden="true"></span>
				<span class="screen-reader-text">
				“Home” is locked				</span>
			</div>
			</th><td class="title column-title has-row-actions column-primary page-title" data-colname="Title"><div class="locked-info"><span class="locked-avatar"></span> <span class="locked-text"></span></div>
<strong><a class="row-title" href="/wp-admin/post.php?post=5&amp;action=edit" aria-label="“Home” (Edit)">Home</a> — <span class="post-state">Front Page, </span><span class="post-state">Elementor</span></strong>

<div class="hidden" id="inline_5">
	<div class="post_title">Home</div><div class="post_name">elementor-5</div>
	<div class="post_author">1</div>
	<div class="comment_status">closed</div>
	<div class="ping_status">closed</div>
	<div class="_status">publish</div>
	<div class="jj">11</div>
	<div class="mm">02</div>
	<div class="aa">2020</div>
	<div class="hh">12</div>
	<div class="mn">46</div>
	<div class="ss">24</div>
	<div class="post_password"></div><div class="post_parent">0</div><div class="page_template">elementor_header_footer</div><div class="menu_order">0</div></div><div class="row-actions"><span class="edit"><a href="/wp-admin/post.php?post=5&amp;action=edit" aria-label="Edit “Home”">Edit</a> | </span><span class="inline hide-if-no-js"><button type="button" class="button-link editinline" aria-label="Quick edit “Home” inline" aria-expanded="false">Quick&nbsp;Edit</button> | </span><span class="trash"><a href="/wp-admin/post.php?post=5&amp;action=trash&amp;_wpnonce=eb01248a80" class="submitdelete" aria-label="Move “Home” to the Trash">Trash</a> | </span><span class="view"><a href="/" rel="bookmark" aria-label="View “Home”">View</a> | </span><span class="edit_with_elementor"><a href="/wp-admin/post.php?post=5&amp;action=elementor">Edit with Elementor</a></span></div><button type="button" class="toggle-row"><span class="screen-reader-text">Show more details</span></button></td><td class="author column-author" data-colname="Author"><a href="edit.php?post_type=page&amp;author=1">GAVAMEDIA</a></td><td class="comments column-comments" data-colname="Comments">		<div class="post-com-count-wrapper">
		<span aria-hidden="true">—</span><span class="screen-reader-text">No Comments</span><span class="post-com-count post-com-count-pending post-com-count-no-pending"><span class="comment-count comment-count-no-pending" aria-hidden="true">0</span><span class="screen-reader-text">No Comments</span></span>		</div>
		</td><td class="date column-date" data-colname="Date">Published<br>2020/02/11 at 12:46 pm</td><td class="wpseo-links column-wpseo-links" data-colname="Outgoing internal links"></td><td class="wpseo-score column-wpseo-score" data-colname="SEO score"><div aria-hidden="true" title="Focus keyphrase not set." class="wpseo-score-icon na"></div><span class="screen-reader-text wpseo-score-text">Focus keyphrase not set.</span></td><td class="wpseo-score-readability column-wpseo-score-readability" data-colname="Readability score"><div aria-hidden="true" title="Not available" class="wpseo-score-icon na"></div><span class="screen-reader-text wpseo-score-text">Not available</span></td><td class="wpseo-title column-wpseo-title hidden" data-colname="SEO Title">Home - Explore St. Lawrence</td><td class="wpseo-metadesc column-wpseo-metadesc hidden" data-colname="Meta Desc."><span aria-hidden="true">—</span><span class="screen-reader-text">Meta description not set.</span></td><td class="wpseo-focuskw column-wpseo-focuskw hidden" data-colname="Keyphrase"><span aria-hidden="true">—</span><span class="screen-reader-text">Focus keyphrase not set.</span></td>		</tr>
					<tr id="post-24" class="iedit author-self level-0 post-24 type-page status-publish hentry">
			<th scope="row" class="check-column">			<label class="screen-reader-text" for="cb-select-24">
				Select Our Story			</label>
			<input id="cb-select-24" type="checkbox" name="post[]" value="24">
			<div class="locked-indicator">
				<span class="locked-indicator-icon" aria-hidden="true"></span>
				<span class="screen-reader-text">
				“Our Story” is locked				</span>
			</div>
			</th><td class="title column-title has-row-actions column-primary page-title" data-colname="Title"><div class="locked-info"><span class="locked-avatar"></span> <span class="locked-text"></span></div>
<strong><a class="row-title" href="/wp-admin/post.php?post=24&amp;action=edit" aria-label="“Our Story” (Edit)">Our Story</a> — <span class="post-state">Elementor</span></strong>

<div class="hidden" id="inline_24">
	<div class="post_title">Our Story</div><div class="post_name">our-story</div>
	<div class="post_author">1</div>
	<div class="comment_status">closed</div>
	<div class="ping_status">closed</div>
	<div class="_status">publish</div>
	<div class="jj">11</div>
	<div class="mm">02</div>
	<div class="aa">2020</div>
	<div class="hh">18</div>
	<div class="mn">18</div>
	<div class="ss">32</div>
	<div class="post_password"></div><div class="post_parent">0</div><div class="page_template">elementor_header_footer</div><div class="menu_order">0</div></div><div class="row-actions"><span class="edit"><a href="/wp-admin/post.php?post=24&amp;action=edit" aria-label="Edit “Our Story”">Edit</a> | </span><span class="inline hide-if-no-js"><button type="button" class="button-link editinline" aria-label="Quick edit “Our Story” inline" aria-expanded="false">Quick&nbsp;Edit</button> | </span><span class="trash"><a href="/wp-admin/post.php?post=24&amp;action=trash&amp;_wpnonce=fb115b01fb" class="submitdelete" aria-label="Move “Our Story” to the Trash">Trash</a> | </span><span class="view"><a href="/our-story/" rel="bookmark" aria-label="View “Our Story”">View</a> | </span><span class="edit_with_elementor"><a href="/wp-admin/post.php?post=24&amp;action=elementor">Edit with Elementor</a></span></div><button type="button" class="toggle-row"><span class="screen-reader-text">Show more details</span></button></td><td class="author column-author" data-colname="Author"><a href="edit.php?post_type=page&amp;author=1">GAVAMEDIA</a></td><td class="comments column-comments" data-colname="Comments">		<div class="post-com-count-wrapper">
		<span aria-hidden="true">—</span><span class="screen-reader-text">No Comments</span><span class="post-com-count post-com-count-pending post-com-count-no-pending"><span class="comment-count comment-count-no-pending" aria-hidden="true">0</span><span class="screen-reader-text">No Comments</span></span>		</div>
		</td><td class="date column-date" data-colname="Date">Published<br>2020/02/11 at 6:18 pm</td><td class="wpseo-links column-wpseo-links" data-colname="Outgoing internal links"></td><td class="wpseo-score column-wpseo-score" data-colname="SEO score"><div aria-hidden="true" title="Focus keyphrase not set." class="wpseo-score-icon na"></div><span class="screen-reader-text wpseo-score-text">Focus keyphrase not set.</span></td><td class="wpseo-score-readability column-wpseo-score-readability" data-colname="Readability score"><div aria-hidden="true" title="Not available" class="wpseo-score-icon na"></div><span class="screen-reader-text wpseo-score-text">Not available</span></td><td class="wpseo-title column-wpseo-title hidden" data-colname="SEO Title">Our Story - Explore St. Lawrence</td><td class="wpseo-metadesc column-wpseo-metadesc hidden" data-colname="Meta Desc."><span aria-hidden="true">—</span><span class="screen-reader-text">Meta description not set.</span></td><td class="wpseo-focuskw column-wpseo-focuskw hidden" data-colname="Keyphrase"><span aria-hidden="true">—</span><span class="screen-reader-text">Focus keyphrase not set.</span></td>		</tr>
					<tr id="post-27" class="iedit author-self level-0 post-27 type-page status-publish hentry">
			<th scope="row" class="check-column">			<label class="screen-reader-text" for="cb-select-27">
				Select Places to Go			</label>
			<input id="cb-select-27" type="checkbox" name="post[]" value="27">
			<div class="locked-indicator">
				<span class="locked-indicator-icon" aria-hidden="true"></span>
				<span class="screen-reader-text">
				“Places to Go” is locked				</span>
			</div>
			</th><td class="title column-title has-row-actions column-primary page-title" data-colname="Title"><div class="locked-info"><span class="locked-avatar"></span> <span class="locked-text"></span></div>
<strong><a class="row-title" href="/wp-admin/post.php?post=27&amp;action=edit" aria-label="“Places to Go” (Edit)">Places to Go</a> — <span class="post-state">Elementor</span></strong>

<div class="hidden" id="inline_27">
	<div class="post_title">Places to Go</div><div class="post_name">places-to-go</div>
	<div class="post_author">1</div>
	<div class="comment_status">closed</div>
	<div class="ping_status">closed</div>
	<div class="_status">publish</div>
	<div class="jj">11</div>
	<div class="mm">02</div>
	<div class="aa">2020</div>
	<div class="hh">18</div>
	<div class="mn">19</div>
	<div class="ss">04</div>
	<div class="post_password"></div><div class="post_parent">0</div><div class="page_template">elementor_header_footer</div><div class="menu_order">0</div></div><div class="row-actions"><span class="edit"><a href="/wp-admin/post.php?post=27&amp;action=edit" aria-label="Edit “Places to Go”">Edit</a> | </span><span class="inline hide-if-no-js"><button type="button" class="button-link editinline" aria-label="Quick edit “Places to Go” inline" aria-expanded="false">Quick&nbsp;Edit</button> | </span><span class="trash"><a href="/wp-admin/post.php?post=27&amp;action=trash&amp;_wpnonce=f93f6a223f" class="submitdelete" aria-label="Move “Places to Go” to the Trash">Trash</a> | </span><span class="view"><a href="/places-to-go/" rel="bookmark" aria-label="View “Places to Go”">View</a> | </span><span class="edit_with_elementor"><a href="/wp-admin/post.php?post=27&amp;action=elementor">Edit with Elementor</a></span></div><button type="button" class="toggle-row"><span class="screen-reader-text">Show more details</span></button></td><td class="author column-author" data-colname="Author"><a href="edit.php?post_type=page&amp;author=1">GAVAMEDIA</a></td><td class="comments column-comments" data-colname="Comments">		<div class="post-com-count-wrapper">
		<span aria-hidden="true">—</span><span class="screen-reader-text">No Comments</span><span class="post-com-count post-com-count-pending post-com-count-no-pending"><span class="comment-count comment-count-no-pending" aria-hidden="true">0</span><span class="screen-reader-text">No Comments</span></span>		</div>
		</td><td class="date column-date" data-colname="Date">Published<br>2020/02/11 at 6:19 pm</td><td class="wpseo-links column-wpseo-links" data-colname="Outgoing internal links"></td><td class="wpseo-score column-wpseo-score" data-colname="SEO score"><div aria-hidden="true" title="Focus keyphrase not set." class="wpseo-score-icon na"></div><span class="screen-reader-text wpseo-score-text">Focus keyphrase not set.</span></td><td class="wpseo-score-readability column-wpseo-score-readability" data-colname="Readability score"><div aria-hidden="true" title="Not available" class="wpseo-score-icon na"></div><span class="screen-reader-text wpseo-score-text">Not available</span></td><td class="wpseo-title column-wpseo-title hidden" data-colname="SEO Title">Places to Go - Explore St. Lawrence</td><td class="wpseo-metadesc column-wpseo-metadesc hidden" data-colname="Meta Desc."><span aria-hidden="true">—</span><span class="screen-reader-text">Meta description not set.</span></td><td class="wpseo-focuskw column-wpseo-focuskw hidden" data-colname="Keyphrase"><span aria-hidden="true">—</span><span class="screen-reader-text">Focus keyphrase not set.</span></td>		</tr>
					<tr id="post-3" class="iedit author-self level-0 post-3 type-page status-draft hentry">
			<th scope="row" class="check-column">			<label class="screen-reader-text" for="cb-select-3">
				Select Privacy Policy			</label>
			<input id="cb-select-3" type="checkbox" name="post[]" value="3">
			<div class="locked-indicator">
				<span class="locked-indicator-icon" aria-hidden="true"></span>
				<span class="screen-reader-text">
				“Privacy Policy” is locked				</span>
			</div>
			</th><td class="title column-title has-row-actions column-primary page-title" data-colname="Title"><div class="locked-info"><span class="locked-avatar"></span> <span class="locked-text"></span></div>
<strong><a class="row-title" href="/wp-admin/post.php?post=3&amp;action=edit" aria-label="“Privacy Policy” (Edit)">Privacy Policy</a> — <span class="post-state">Draft, </span><span class="post-state">Privacy Policy Page</span></strong>

<div class="hidden" id="inline_3">
	<div class="post_title">Privacy Policy</div><div class="post_name">privacy-policy</div>
	<div class="post_author">1</div>
	<div class="comment_status">closed</div>
	<div class="ping_status">open</div>
	<div class="_status">draft</div>
	<div class="jj">11</div>
	<div class="mm">12</div>
	<div class="aa">2019</div>
	<div class="hh">11</div>
	<div class="mn">14</div>
	<div class="ss">09</div>
	<div class="post_password"></div><div class="post_parent">0</div><div class="page_template">default</div><div class="menu_order">0</div></div><div class="row-actions"><span class="edit"><a href="/wp-admin/post.php?post=3&amp;action=edit" aria-label="Edit “Privacy Policy”">Edit</a> | </span><span class="inline hide-if-no-js"><button type="button" class="button-link editinline" aria-label="Quick edit “Privacy Policy” inline" aria-expanded="false">Quick&nbsp;Edit</button> | </span><span class="trash"><a href="/wp-admin/post.php?post=3&amp;action=trash&amp;_wpnonce=7e1c377947" class="submitdelete" aria-label="Move “Privacy Policy” to the Trash">Trash</a> | </span><span class="view"><a href="/?page_id=3&amp;preview=true" rel="bookmark" aria-label="Preview “Privacy Policy”">Preview</a></span></div><button type="button" class="toggle-row"><span class="screen-reader-text">Show more details</span></button></td><td class="author column-author" data-colname="Author"><a href="edit.php?post_type=page&amp;author=1">GAVAMEDIA</a></td><td class="comments column-comments" data-colname="Comments">		<div class="post-com-count-wrapper">
		<span aria-hidden="true">—</span><span class="screen-reader-text">No Comments</span><span class="post-com-count post-com-count-pending post-com-count-no-pending"><span class="comment-count comment-count-no-pending" aria-hidden="true">0</span><span class="screen-reader-text">No Comments</span></span>		</div>
		</td><td class="date column-date" data-colname="Date">Last Modified<br>2019/12/11 at 11:14 am</td><td class="wpseo-links column-wpseo-links" data-colname="Outgoing internal links"></td><td class="wpseo-score column-wpseo-score" data-colname="SEO score"><div aria-hidden="true" title="Focus keyphrase not set." class="wpseo-score-icon na"></div><span class="screen-reader-text wpseo-score-text">Focus keyphrase not set.</span></td><td class="wpseo-score-readability column-wpseo-score-readability" data-colname="Readability score"><div aria-hidden="true" title="Not available" class="wpseo-score-icon na"></div><span class="screen-reader-text wpseo-score-text">Not available</span></td><td class="wpseo-title column-wpseo-title hidden" data-colname="SEO Title">Privacy Policy - Explore St. Lawrence</td><td class="wpseo-metadesc column-wpseo-metadesc hidden" data-colname="Meta Desc."><span aria-hidden="true">—</span><span class="screen-reader-text">Meta description not set.</span></td><td class="wpseo-focuskw column-wpseo-focuskw hidden" data-colname="Keyphrase"><span aria-hidden="true">—</span><span class="screen-reader-text">Focus keyphrase not set.</span></td>		</tr>
					<tr id="post-2" class="iedit author-self level-0 post-2 type-page status-publish hentry">
			<th scope="row" class="check-column">			<label class="screen-reader-text" for="cb-select-2">
				Select Visit Us			</label>
			<input id="cb-select-2" type="checkbox" name="post[]" value="2">
			<div class="locked-indicator">
				<span class="locked-indicator-icon" aria-hidden="true"></span>
				<span class="screen-reader-text">
				“Visit Us” is locked				</span>
			</div>
			</th><td class="title column-title has-row-actions column-primary page-title" data-colname="Title"><div class="locked-info"><span class="locked-avatar"></span> <span class="locked-text"></span></div>
<strong><a class="row-title" href="/wp-admin/post.php?post=2&amp;action=edit" aria-label="“Visit Us” (Edit)">Visit Us</a> — <span class="post-state">Elementor</span></strong>

<div class="hidden" id="inline_2">
	<div class="post_title">Visit Us</div><div class="post_name">visit-us</div>
	<div class="post_author">1</div>
	<div class="comment_status">closed</div>
	<div class="ping_status">open</div>
	<div class="_status">publish</div>
	<div class="jj">11</div>
	<div class="mm">12</div>
	<div class="aa">2019</div>
	<div class="hh">11</div>
	<div class="mn">14</div>
	<div class="ss">09</div>
	<div class="post_password"></div><div class="post_parent">0</div><div class="page_template">elementor_header_footer</div><div class="menu_order">0</div></div><div class="row-actions"><span class="edit"><a href="/wp-admin/post.php?post=2&amp;action=edit" aria-label="Edit “Visit Us”">Edit</a> | </span><span class="inline hide-if-no-js"><button type="button" class="button-link editinline" aria-label="Quick edit “Visit Us” inline" aria-expanded="false">Quick&nbsp;Edit</button> | </span><span class="trash"><a href="/wp-admin/post.php?post=2&amp;action=trash&amp;_wpnonce=e591765c23" class="submitdelete" aria-label="Move “Visit Us” to the Trash">Trash</a> | </span><span class="view"><a href="/visit-us/" rel="bookmark" aria-label="View “Visit Us”">View</a> | </span><span class="edit_with_elementor"><a href="/wp-admin/post.php?post=2&amp;action=elementor">Edit with Elementor</a></span></div><button type="button" class="toggle-row"><span class="screen-reader-text">Show more details</span></button></td><td class="author column-author" data-colname="Author"><a href="edit.php?post_type=page&amp;author=1">GAVAMEDIA</a></td><td class="comments column-comments" data-colname="Comments">		<div class="post-com-count-wrapper">
		<span aria-hidden="true">—</span><span class="screen-reader-text">No Comments</span><span class="post-com-count post-com-count-pending post-com-count-no-pending"><span class="comment-count comment-count-no-pending" aria-hidden="true">0</span><span class="screen-reader-text">No Comments</span></span>		</div>
		</td><td class="date column-date" data-colname="Date">Published<br>2019/12/11 at 11:14 am</td><td class="wpseo-links column-wpseo-links" data-colname="Outgoing internal links"></td><td class="wpseo-score column-wpseo-score" data-colname="SEO score"><div aria-hidden="true" title="Focus keyphrase not set." class="wpseo-score-icon na"></div><span class="screen-reader-text wpseo-score-text">Focus keyphrase not set.</span></td><td class="wpseo-score-readability column-wpseo-score-readability" data-colname="Readability score"><div aria-hidden="true" title="Not available" class="wpseo-score-icon na"></div><span class="screen-reader-text wpseo-score-text">Not available</span></td><td class="wpseo-title column-wpseo-title hidden" data-colname="SEO Title">Visit Us - Explore St. Lawrence</td><td class="wpseo-metadesc column-wpseo-metadesc hidden" data-colname="Meta Desc."><span aria-hidden="true">—</span><span class="screen-reader-text">Meta description not set.</span></td><td class="wpseo-focuskw column-wpseo-focuskw hidden" data-colname="Keyphrase"><span aria-hidden="true">—</span><span class="screen-reader-text">Focus keyphrase not set.</span></td>		</tr>
			</tbody>

	<tfoot>
	<tr>
		<td class="manage-column column-cb check-column"><label class="screen-reader-text" for="cb-select-all-2">Select All</label><input id="cb-select-all-2" type="checkbox"></td><th scope="col" class="manage-column column-title column-primary sortable desc"><a href="/wp-admin/edit.php?post_type=page&amp;orderby=title&amp;order=asc"><span>Title</span><span class="sorting-indicator"></span></a></th><th scope="col" class="manage-column column-author">Author</th><th scope="col" class="manage-column column-comments num sortable desc"><a href="/wp-admin/edit.php?post_type=page&amp;orderby=comment_count&amp;order=asc"><span><span class="vers comment-grey-bubble" title="Comments"><span class="screen-reader-text">Comments</span></span></span><span class="sorting-indicator"></span></a></th><th scope="col" class="manage-column column-date sortable asc"><a href="/wp-admin/edit.php?post_type=page&amp;orderby=date&amp;order=desc"><span>Date</span><span class="sorting-indicator"></span></a></th><th scope="col" class="manage-column column-wpseo-links sortable desc"><a href="/wp-admin/edit.php?post_type=page&amp;orderby=wpseo-links&amp;order=asc" class="yoast-tooltip yoast-tooltip-alt yoast-tooltip-n yoast-tooltip-multiline" data-label="Number of outgoing internal links in this post. See &quot;Yoast Columns&quot; text in the help tab for more info." aria-label="Outgoing internal links"><span><span class="yoast-linked-to yoast-column-header-has-tooltip" data-tooltip-text="Number of outgoing internal links in this post. See &quot;Yoast Columns&quot; text in the help tab for more info."><span class="screen-reader-text">Outgoing internal links</span></span></span><span class="sorting-indicator"></span></a></th><th scope="col" class="manage-column column-wpseo-score"><span class="yoast-tooltip yoast-tooltip-n yoast-tooltip-alt" data-label="SEO score"><span class="yoast-column-seo-score yoast-column-header-has-tooltip"><span class="screen-reader-text">SEO score</span></span></span></th><th scope="col" class="manage-column column-wpseo-score-readability"><span class="yoast-tooltip yoast-tooltip-n yoast-tooltip-alt" data-label="Readability score"><span class="yoast-column-readability yoast-column-header-has-tooltip"><span class="screen-reader-text">Readability score</span></span></span></th><th scope="col" class="manage-column column-wpseo-title hidden">SEO Title</th><th scope="col" class="manage-column column-wpseo-metadesc hidden sortable desc"><a href="/wp-admin/edit.php?post_type=page&amp;orderby=wpseo-metadesc&amp;order=asc"><span>Meta Desc.</span><span class="sorting-indicator"></span></a></th><th scope="col" class="manage-column column-wpseo-focuskw hidden sortable desc"><a href="/wp-admin/edit.php?post_type=page&amp;orderby=wpseo-focuskw&amp;order=asc"><span>Keyphrase</span><span class="sorting-indicator"></span></a></th>	</tr>
	</tfoot>

</table>
			<div class="tablenav bottom">

				<div class="alignleft actions bulkactions">
			<label for="bulk-action-selector-bottom" class="screen-reader-text">Select bulk action</label><select name="action2" id="bulk-action-selector-bottom">
<option value="-1">Bulk Actions</option>
	<option value="edit" class="hide-if-no-js">Edit</option>
	<option value="trash">Move to Trash</option>
</select>
<input type="submit" name="doaction2" id="doaction2" class="button action" value="Apply">
		</div>
					<div class="alignleft actions">
				</div>
		<div class="tablenav-pages one-page"><span class="displaying-num">11 items</span>
<span class="pagination-links"><span class="tablenav-pages-navspan button disabled" aria-hidden="true">«</span>
<span class="tablenav-pages-navspan button disabled" aria-hidden="true">‹</span>
<span class="screen-reader-text">Current Page</span><span id="table-paging" class="paging-input"><span class="tablenav-paging-text">1 of <span class="total-pages">1</span></span></span>
<span class="tablenav-pages-navspan button disabled" aria-hidden="true">›</span>
<span class="tablenav-pages-navspan button disabled" aria-hidden="true">»</span></span></div>
		<br class="clear">
	</div>
		
</form>


		<form method="get">
		<table style="display: none"><tbody id="inlineedit">
					<tr id="inline-edit" class="inline-edit-row inline-edit-row-page quick-edit-row quick-edit-row-page inline-edit-page" style="display: none">
			<td colspan="8" class="colspanchange">

			<fieldset class="inline-edit-col-left">
				<legend class="inline-edit-legend">Quick Edit</legend>
				<div class="inline-edit-col">

				
					
						<label>
							<span class="title">Title</span>
							<span class="input-text-wrap"><input type="text" name="post_title" class="ptitle" value=""></span>
						</label>

						
							<label>
								<span class="title">Slug</span>
								<span class="input-text-wrap"><input type="text" name="post_name" value=""></span>
							</label>

						
					
				
									<fieldset class="inline-edit-date">
						<legend><span class="title">Date</span></legend>
						<div class="timestamp-wrap"><label><span class="screen-reader-text">Month</span><select name="mm">
			<option value="01" data-text="Jan">01-Jan</option>
			<option value="02" data-text="Feb">02-Feb</option>
			<option value="03" data-text="Mar" selected="selected">03-Mar</option>
			<option value="04" data-text="Apr">04-Apr</option>
			<option value="05" data-text="May">05-May</option>
			<option value="06" data-text="Jun">06-Jun</option>
			<option value="07" data-text="Jul">07-Jul</option>
			<option value="08" data-text="Aug">08-Aug</option>
			<option value="09" data-text="Sep">09-Sep</option>
			<option value="10" data-text="Oct">10-Oct</option>
			<option value="11" data-text="Nov">11-Nov</option>
			<option value="12" data-text="Dec">12-Dec</option>
</select></label> <label><span class="screen-reader-text">Day</span><input type="text" name="jj" value="31" size="2" maxlength="2" autocomplete="off"></label>, <label><span class="screen-reader-text">Year</span><input type="text" name="aa" value="2020" size="4" maxlength="4" autocomplete="off"></label> at <label><span class="screen-reader-text">Hour</span><input type="text" name="hh" value="19" size="2" maxlength="2" autocomplete="off"></label>:<label><span class="screen-reader-text">Minute</span><input type="text" name="mn" value="33" size="2" maxlength="2" autocomplete="off"></label></div><input type="hidden" id="ss" name="ss" value="23">					</fieldset>
					<br class="clear">
				
				
					<label class="inline-edit-author"><span class="title">Author</span><select name="post_author" class="authors">
	<option value="2">alisha@goroguepenguin.com (alisha@goroguepenguin.com)</option>
	<option value="1">GAVAMEDIA (GAVAMEDIA)</option>
	<option value="3">sid@goroguepenguin.com (sid@goroguepenguin.com)</option>
</select></label>
				
					<div class="inline-edit-group wp-clearfix">
						<label class="alignleft">
							<span class="title">Password</span>
							<span class="input-text-wrap"><input type="text" name="post_password" class="inline-edit-password-input" value=""></span>
						</label>

						<span class="alignleft inline-edit-or">
							–OR–						</span>
						<label class="alignleft inline-edit-private">
							<input type="checkbox" name="keep_private" value="private">
							<span class="checkbox-title">Private</span>
						</label>
					</div>

				
				</div>
			</fieldset>

			
			<fieldset class="inline-edit-col-right">
				<div class="inline-edit-col">

				
				
					
						<label>
							<span class="title">Parent</span>
							<select name="post_parent" id="post_parent">
	<option value="0">Main Page (no parent)</option>
	<option class="level-0" value="31">About Us</option>
	<option class="level-0" value="385">Blog</option>
	<option class="level-0" value="33">Contact Us</option>
	<option class="level-0" value="5">Home</option>
	<option class="level-0" value="24">Our Story</option>
	<option class="level-0" value="27">Places to Go</option>
	<option class="level-0" value="2">Visit Us</option>
</select>
						</label>

					
					
						<label>
							<span class="title">Order</span>
							<span class="input-text-wrap"><input type="text" name="menu_order" class="inline-edit-menu-order-input" value="0"></span>
						</label>

					
				
				
					<label>
						<span class="title">Template</span>
						<select name="page_template">
																					<option value="default">Default template</option>
							
	<option value="elementor_canvas">Elementor Canvas</option>
	<option value="elementor_header_footer">Elementor Full Width</option>						</select>
					</label>

				
				
				
					
						<div class="inline-edit-group wp-clearfix">

						
							<label class="alignleft">
								<input type="checkbox" name="comment_status" value="open">
								<span class="checkbox-title">Allow Comments</span>
							</label>

						
						
						</div>

					
				
					<div class="inline-edit-group wp-clearfix">

						<label class="inline-edit-status alignleft">
							<span class="title">Status</span>
							<select name="_status">
								
																	<option value="publish">Published</option>
									<option value="future">Scheduled</option>
																	
								<option value="pending">Pending Review</option>
								<option value="draft">Draft</option>
							</select>
						</label>

						
					</div>

				
				</div>
			</fieldset>

			
			<div class="submit inline-edit-save">
				<button type="button" class="button cancel alignleft">Cancel</button>

									<input type="hidden" id="_inline_edit" name="_inline_edit" value="e25aa4ed6e">					<button type="button" class="button button-primary save alignright">Update</button>
					<span class="spinner"></span>
				
				<input type="hidden" name="post_view" value="list">
				<input type="hidden" name="screen" value="edit-page">
								<br class="clear">

				<div class="notice notice-error notice-alt inline hidden">
					<p class="error"></p>
				</div>
			</div>

			</td></tr>

						<tr id="bulk-edit" class="inline-edit-row inline-edit-row-page bulk-edit-row bulk-edit-row-page bulk-edit-page" style="display: none">
			<td colspan="8" class="colspanchange">

			<fieldset class="inline-edit-col-left">
				<legend class="inline-edit-legend">Bulk Edit</legend>
				<div class="inline-edit-col">

				
					
						<div id="bulk-title-div">
							<div id="bulk-titles"></div>
						</div>

					
				
				
				
					
				
				</div>
			</fieldset>

			
			<fieldset class="inline-edit-col-right">
				<div class="inline-edit-col">

				<label class="inline-edit-author"><span class="title">Author</span><select name="post_author" class="authors">
	<option value="-1">— No Change —</option>
	<option value="2">alisha@goroguepenguin.com (alisha@goroguepenguin.com)</option>
	<option value="1">GAVAMEDIA (GAVAMEDIA)</option>
	<option value="3">sid@goroguepenguin.com (sid@goroguepenguin.com)</option>
</select></label>
				
					
						<label>
							<span class="title">Parent</span>
							<select name="post_parent" id="post_parent">
	<option value="-1">— No Change —</option>
	<option value="0">Main Page (no parent)</option>
	<option class="level-0" value="31">About Us</option>
	<option class="level-0" value="385">Blog</option>
	<option class="level-0" value="33">Contact Us</option>
	<option class="level-0" value="5">Home</option>
	<option class="level-0" value="24">Our Story</option>
	<option class="level-0" value="27">Places to Go</option>
	<option class="level-0" value="2">Visit Us</option>
</select>
						</label>

					
					
				
				
					<label>
						<span class="title">Template</span>
						<select name="page_template">
														<option value="-1">— No Change —</option>
																					<option value="default">Default template</option>
							
	<option value="elementor_canvas">Elementor Canvas</option>
	<option value="elementor_header_footer">Elementor Full Width</option>						</select>
					</label>

				
				
				
					
						<div class="inline-edit-group wp-clearfix">

						
							<label class="alignleft">
								<span class="title">Comments</span>
								<select name="comment_status">
									<option value="">— No Change —</option>
									<option value="open">Allow</option>
									<option value="closed">Do not allow</option>
								</select>
							</label>

						
						
						</div>

					
				
					<div class="inline-edit-group wp-clearfix">

						<label class="inline-edit-status alignleft">
							<span class="title">Status</span>
							<select name="_status">
																	<option value="-1">— No Change —</option>
								
																	<option value="publish">Published</option>
									
																			<option value="private">Private</option>
																	
								<option value="pending">Pending Review</option>
								<option value="draft">Draft</option>
							</select>
						</label>

						
					</div>

				
				</div>
			</fieldset>

			
			<div class="submit inline-edit-save">
				<button type="button" class="button cancel alignleft">Cancel</button>

									<input type="submit" name="bulk_edit" id="bulk_edit" class="button button-primary alignright" value="Update">				
				<input type="hidden" name="post_view" value="list">
				<input type="hidden" name="screen" value="edit-page">
								<br class="clear">

				<div class="notice notice-error notice-alt inline hidden">
					<p class="error"></p>
				</div>
			</div>

			</td></tr>

					</tbody></table>
		</form>
		
<div id="ajax-response"></div>
<br class="clear">
</div>


GAVA;
