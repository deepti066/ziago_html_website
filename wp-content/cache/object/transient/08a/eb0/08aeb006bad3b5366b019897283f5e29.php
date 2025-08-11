53h<?php exit; ?>a:2:{s:7:"content";a:6:{s:5:"child";a:1:{s:0:"";a:1:{s:3:"rss";a:1:{i:0;a:6:{s:4:"data";s:3:"


";s:7:"attribs";a:1:{s:0:"";a:1:{s:7:"version";s:3:"2.0";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:1:{s:0:"";a:1:{s:7:"channel";a:1:{i:0;a:6:{s:4:"data";s:61:"
	
	
	
	




















































";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:1:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:16:"WordPress Planet";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:28:"http://planet.wordpress.org/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:8:"language";a:1:{i:0;a:5:{s:4:"data";s:2:"en";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:47:"WordPress Planet - http://planet.wordpress.org/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"item";a:50:{i:0;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:63:"Gravatar: How to Configure Gravatar Image Size Across Your Site";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:32:"http://blog.gravatar.com/?p=3266";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:57:"https://blog.gravatar.com/2025/05/05/gravatar-image-size/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:12788:"<p>So, you’ve decided it’s time to improve the Gravatar images on your site. Maybe they’re too small, stretched oddly, or don’t match your stylish new design.</p>



<p>Whatever the reason, pic size matters. It can shape the feel of your comment threads, how fast pages load, and how polished your entire site looks at first glance.</p>



<p>Small tweak. Big impact.</p>



<p>Luckily, you don’t need to be a developer, designer, or go rage-Googling CSS selectors to pull this off. You just need a smart approach, and that’s exactly what you’ll find here.</p>



<p>In this guide, we’ll show you how to:</p>



<ul class="wp-block-list">
<li>Make site-wide Gravatar changes using WordPress’s built-in functions</li>



<li>Use CSS to finesse specific sections (think: Comments, author bios, anywhere Gravatar images show up)</li>



<li>Go responsive, so your Gravatar images look fabulous on every screen from the iPhone to large 4k monitors</li>
</ul>



<p>Let’s get started.</p>



<a href="https://docs.gravatar.com/getting-started/"><img width="3242" height="729" src="https://blog.gravatar.com/wp-content/uploads/2024/12/gravatar_integration_cta.png" alt="" class="wp-image-2632" /></a>



<h2 class="wp-block-heading">Default Gravatar sizes and why you might want to change them</h2>



<p>By default, Gravatar hands you an <a href="https://docs.gravatar.com/api/avatars/images/">80×80 pixel image</a>. WordPress then <a href="https://codex.wordpress.org/Using_Gravatars">ups that to 96×96</a>, because… reasons. But here’s where it gets messy: Your theme probably has <em>its</em> own ideas. Some use 60px. Others? 80px.</p>



<p>The result? Inconsistency. And that’s the enemy of good design.</p>



<p>Here’s why resizing is worth your time:</p>



<ul class="wp-block-list">
<li><strong>Visual hierarchy:</strong> Want admin replies to stand out? Bigger avatars can subtly guide the eye.</li>



<li><strong>Mobile friendliness:</strong> On smaller screens, smaller avatars = less chaos.</li>



<li><strong>Brand consistency:</strong> Everything should look intentional, including your floating faces.</li>



<li><strong>Engagement:</strong> Well-sized avatars make people feel seen (literally), boosting community engagement.</li>
</ul>



<p>And let’s not forget performance. Larger images = heavier pages = slower load times. Too small? You risk pixelation when scaled up via CSS. Lose-lose.</p>



<p>Luckily, many modern themes (looking at you, <a href="https://wordpress.org/themes/twentytwentyfive/">Twenty Twenty-Five</a>) let you adjust avatar sizes right from the design panel – no code required. Just head to the “Comments” section and tweak away.</p>



<p>But what if your theme lacks this functionality? Or if you want finer control?</p>



<p>That’s when custom solutions come into play via WordPress functions, a dash of CSS, or the occasional PHP snippet. Don’t worry, we’ll walk you through it.</p>



<p>Let’s get into the how.</p>



<h2 class="wp-block-heading">Method 1: Changing Gravatar size using WordPress functions</h2>



<p>If you want full control over how big (or small) your Gravatars show up – without relying on your theme’s whims – WordPress has your back.</p>



<p>Under the hood, <a href="https://docs.gravatar.com/sdk/images/">WordPress talks to Gravatar’s servers</a> using a handy little parameter: s= or size=. That’s how it tells Gravatar exactly what size image to serve up, rather than grabbing one and awkwardly stretching or shrinking it in the browser.</p>



<p>If you want to make a site-wide change, add this simple snippet to your <strong>child theme’s</strong> functions.php file:</p>



<pre class="wp-block-code"><code>function custom_avatar_size( $avatar_defaults ) {

return 120; // Change to your desired size in pixels

}

add_filter( 'avatar_defaults', 'custom_avatar_size' );</code></pre>



<p>Voilà,<strong> </strong>just like that, every Gravatar across your site obeys your chosen size like a well-trained pixel soldier.</p>



<p>Want to go a step further? You can tell WordPress to serve up different sizes depending on <em>where</em> the avatar appears. Here’s how:</p>



<pre class="wp-block-code"><code>function context_based_avatar_size( $args ) {
if ( is_single() ) {
$args&#091;'size'] = 150; // Larger on single posts
} elseif ( is_archive() ) {
$args&#091;'size'] = 80; // Smaller on archive pages
}
return $args;
}
add_filter( 'pre_get_avatar_data', 'context_based_avatar_size' );</code></pre>



<h3 class="wp-block-heading"><strong>Why this approach rocks:</strong></h3>



<ul class="wp-block-list">
<li>One change = site-wide consistency</li>



<li>WordPress handles all the caching and optimization behind the scenes</li>



<li>You can tailor avatar sizes by context (posts, archives, comments, you name it)</li>



<li>It taps directly into Gravatar’s API, so you’re getting the cleanest possible image at the right size</li>
</ul>



<h3 class="wp-block-heading"><strong>Bonus round: Smart Gravatar sizing in the comments section</strong></h3>



<p>Want to get <em>really</em> clever? Try creating a visual hierarchy in your comments section. For example: Larger avatars for parent comments, slightly smaller ones for replies. It helps users follow the conversational flow without even thinking about it.</p>



<p>Here’s a quick function that adjusts avatar size based on comment depth:</p>



<pre class="wp-block-code"><code>function comment_depth_avatar_size( $args, $id_or_email ) {

$comment = get_comment( $id_or_email );

if ( $comment ) {

$depth = 1; // Default depth

if ( isset( $comment-&gt;comment_parent ) &amp;&amp; $comment-&gt;comment_parent &gt; 0 ) {

$depth = 2; // Reply

}

// Set size based on comment depth

$args&#091;'size'] = 140 - (($depth - 1) * 20); // Parent: 140px, Reply: 120px

}

return $args;

}

add_filter( 'pre_get_avatar_data', 'comment_depth_avatar_size', 10, 2 );</code></pre>



<p>Suddenly, your comments section feels less like a block of text and more like a layered conversation.</p>



<h3 class="wp-block-heading"><strong>Pro Tip: Nudge users to create their own Gravatar</strong></h3>



<p>Lots of users will unintentionally default to the “Mystery Man” look if they haven’t gotten around to <a href="https://blog.gravatar.com/2024/07/19/wordpress-profile-picture/">customizing their Gravatar profile</a>. Want to fix that? Add a friendly prompt under your comment form:</p>



<pre class="wp-block-code"><code>function gravatar_comment_form_note( $defaults ) {

$defaults&#091;'comment_notes_after'] .= '

Need a profile picture? Create a free Gravatar.

';

return $defaults;

}

add_filter( 'comment_form_defaults', 'gravatar_comment_form_note' );</code></pre>



<p>Now you’re not just upgrading your design, you’re also helping your community show up in style.</p>



<p>And if you’re feeling adventurous, there’s room to dream even bigger. Think: Larger avatars for top commenters, custom styles for admins or team members, maybe even a “featured contributor” badge with its own Gravatar flair. Totally doable.</p>



<p>Just one golden rule: <strong>Always add your code to a child theme</strong>. Editing the parent theme directly is a one-way ticket to heartbreak when updates roll through. Protect your tweaks, keep them safe, and your beautifully resized avatars will live to see another theme update.</p>



<h2 class="wp-block-heading">Method 2: Styling Gravatar images with CSS (aka the quick-and-clean route)</h2>



<p>So maybe PHP isn’t your thing. Or maybe you just want a faster win – less code, more impact. Enter CSS: The styling powerhouse that lets you tweak how Gravatars <em>look</em> without changing how they’re fetched from the server.</p>



<p>Now, fair warning: This won’t change the file size of the image being downloaded (Gravatar’s still sending the default size), but it <em>will</em> control how those avatars show up on screen. Think of it like wardrobe tailoring for profile pics – same body, better fit.</p>



<p>Here’s how to get started:</p>



<ol class="wp-block-list">
<li>Head to your WordPress dashboard</li>



<li>Go to <strong>Appearance &gt; Customize</strong></li>



<li>Click on <strong>“Additional CSS”</strong></li>



<li>Drop in your magic below</li>
</ol>



<p>Want to resize comment Gravatars? Easy:</p>



<p>.comment-avatar img { width: 60px; height: 60px; }</p>



<p>Want to ditch the boxy default look and go full circle-chic? Say no more:</p>



<p>.avatar { border-radius: 50%; border: 2px solid #ddd; }</p>



<p>Designing for mobile, too (as you should be)? Add some media query magic:</p>



<p>@media (max-width: 768px) { .avatar { width: 40px; height: 40px; } }</p>



<p>And just like that, your Gravatar images adapt to screen sizes like design-savvy little shapeshifters.</p>



<h3 class="wp-block-heading"><strong>Ready to get extra? Let’s talk hover effects</strong></h3>



<p>Once you’ve nailed the sizing basics, there’s a whole world of style upgrades waiting. You could create a hover effect that reveals a mini bio – or even a clickable “Gravatar card” with links, job titles, or a cheeky quote from their profile.</p>



<p>With the right mix of CSS and PHP, you can turn every Gravatar image into a micro-interaction that deepens community engagement <em>without</em> sending users off-site.</p>



<p>Imagine: Someone hovers over a commenter’s face, and a sleek little popup shows their Gravatar bio, links, or even their other recent comments. Trust, familiarity, and engagement, all from a 60&#215;60 pixel image.</p>



<p>Bottom line: CSS is your best friend when you want fast, flexible avatar control – no server changes, no code anxiety. Just pure visual finesse.</p>



<h2 class="wp-block-heading">Go beyond size: Turn Gravatars into engagement powerhouses</h2>



<p>So, you’ve nailed the sizing. Your avatars are looking slick, snappy, and totally on-brand. But, plot twist: Gravatar isn’t <em>just</em> a pixel-perfect profile pic tool – it’s a full-blown identity engine. And you’re only scratching the surface.</p>



<p>Gravatar profiles come loaded with gold: Bios, websites, social links, even job titles. All that data lives on<a href="https://gravatar.com"> Gravatar.com</a>, just waiting to be pulled into your site.</p>



<p>What can you do with it? Oh, just a few small things like&#8230;</p>



<ul class="wp-block-list">
<li><strong>Auto-populate author bios</strong> with real backgrounds, no manual copy-pasting required </li>



<li><strong>Create hover cards</strong> that spill the tea (professionally, of course) when you hover over a commenter’s face</li>



<li><strong>Build a community directory</strong> that looks like LinkedIn, but without the corporate cringe</li>



<li><strong>Add verification badges</strong> to reward users with full, legitimate profiles</li>
</ul>



<p>The result? A more cohesive, more connected site experience, with <em>less</em> work for your users and <em>more</em> trust baked in.</p>



<p>Gravatar’s &#8220;update once, sync everywhere&#8221; model means no more tedious form-filling. Users update their info once, and it syncs across every site they interact with, including yours.</p>



<p>And if you’re running a site where you want users to change their avatar <em>without</em> leaving, <a href="https://docs.gravatar.com/guides/quickeditor/"><strong>Gravatar Quick Editor</strong></a> adds a sleek popup editor right on your site. <em>Very</em> user-friendly.</p>



<h3 class="wp-block-heading"><strong>Unlock the power of Gravatar</strong></h3>



<p>Now you’ve got resizing down, it&#8217;s time to have some fun. Use the code examples from this guide as your launchpad. Build confidence with each tweak. Try new things. Break stuff (safely). Learn. Repeat.</p>



<p>And when you’re ready to go full power-user? <a href="https://docs.gravatar.com/">Gravatar’s developer docs</a> are your secret weapon. They’re packed with everything from API tricks to integration ideas that’ll help you turn avatars into fully-fledged community features – everything you need to <a href="https://docs.gravatar.com/">explore the full power of Gravatar and supercharge your site</a>.&nbsp;</p>



<p>Gravatar isn’t just an image. It’s identity, personality, and participation, all rolled into one little square (or circle, thanks to your shiny new CSS).</p>



<p>Let’s turn those pixels into something powerful.</p>



<a href="https://docs.gravatar.com/getting-started/"><img width="3242" height="729" src="https://blog.gravatar.com/wp-content/uploads/2024/12/gravatar_integration_cta.png" alt="" class="wp-image-2632" /></a>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Mon, 05 May 2025 16:01:21 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:11:"Ronnie Burt";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:1;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:60:"Gravatar: 5 Ways Top Consultants Build Their Personal Brands";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:32:"http://blog.gravatar.com/?p=3160";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:71:"https://blog.gravatar.com/2025/05/05/personal-branding-for-consultants/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:18635:"<p>Consultants today face an intense competitive squeeze. On one side, established consulting giants with massive resources and brand recognition. On the other, a flood of independent specialists is expected as the consulting industry expands rapidly, now approaching <a href="https://www.statista.com/topics/8112/global-consulting-services-industry/#topicOverview">$1 trillion in value with over 838,000 management consultants in the US alone</a>.  </p>



<p>Yet, amid this competition, certain consultants consistently attract premium clients and command fees significantly above the industry average of $212,000 per consultant. Their secret? Strategic personal branding that showcases specialized expertise rather than mere availability.</p>



<p>These successful consultants understand that clients aren&#8217;t simply looking for someone who can help – they&#8217;re searching for the definitive authority who can solve their specific problems.</p>



<p>In this article, we&#8217;ll show proven methods that top consultants use to build authority and attract enterprise clients, helping you establish verified professional credibility across platforms.</p>



<h2 class="wp-block-heading"><strong>5 ways top consultants command premium fees through personal branding</strong></h2>



<p>Successful consultants understand that it’s not enough to just offer services; true success lies in creating a <a href="https://blog.gravatar.com/2024/04/10/personal-branding-tools/">strategic personal brand</a> that fosters trust and commands premium fees. In a consulting marketplace approaching $1 trillion in value, the difference between average and exceptional often comes down to brand positioning.</p>



<p>The most effective consultant brands aren&#8217;t created by accident. They&#8217;re built through deliberate strategies working in concert:</p>



<ol class="wp-block-list">
<li>Creating a verified consulting presence across multiple platforms.</li>



<li>Strategically collecting and showcasing client testimonials.</li>



<li>Developing authority-building professional partnerships.</li>



<li>Using content marketing to demonstrate specialized expertise.</li>



<li>Measuring and optimizing branding efforts based on revenue impact.</li>
</ol>



<p>Each of these approaches contributes to a cohesive brand that positions you as the go-to authority in your field. Let&#8217;s explore how successful consultants implement these strategies to attract high-value clients and command rates well above the industry average.</p>



<h3 class="wp-block-heading"><strong>1. Build authority with a verified consulting presence</strong></h3>



<p>Top consultants leverage a <a href="https://dotdigital.com/blog/a-complete-guide-on-cross-channel-omnichannel-and-multi-channel-marketing/">multi-channel strategy</a> to establish credibility and demonstrate expertise. This approach extends their reach while creating multiple touchpoints for potential clients to discover and validate their authority.</p>



<p>The most effective consultant brands maintain a consistent presence across various platforms:</p>



<ul class="wp-block-list">
<li><strong>Professional website</strong>: Your digital home base showcasing your services, expertise, and client results</li>



<li><a href="https://linkedin.com/"><strong>LinkedIn</strong></a>: Publishing thought leadership articles that demonstrate specialized knowledge</li>



<li><strong>Industry publications</strong>: Contributing expert insights to respected publications</li>



<li><strong>Speaking engagements</strong>: <a href="https://blog.gravatar.com/2024/06/16/how-to-network-at-a-conference/">Presenting at conferences</a> to build visibility and credibility</li>
</ul>



<p>What sets exceptional consultants apart is their ability to maintain a consistent voice and messaging across all channels. When potential clients encounter your content on LinkedIn, then visit your website, they should experience the same professional tone and expertise.</p>



<p>Another great tactic is to expand their influence through alternative content formats on the various platforms:&nbsp;</p>



<table class="has-fixed-layout"><tbody><tr><td><strong>Content type&nbsp;</strong></td><td><strong>Benefits</strong></td><td><strong>Example&nbsp;</strong></td><td><strong>Platform</strong></td></tr><tr><td><strong>Webinars</strong></td><td>Demonstrates expertise in real-time while capturing qualified leads</td><td>&#8220;Three Proven Financial Models for SaaS Startups&#8221; &#8211; live workshop with Q&amp;A</td><td><a href="https://www.zoom.com/">Zoom</a>, <a href="https://webinarpress.com/">WebinarPress</a> (for <a href="https://wordpress.org/">WordPress</a> sites), <a href="https://www.goto.com/webinar">GoToWebinar</a></td></tr><tr><td><strong>Video content</strong></td><td>Showcases problem-solving skills visually; reaches an audience that prefers watching to reading</td><td>&#8220;How to Implement Zero-Trust Architecture&#8221; &#8211; step-by-step tutorial repurposed from conference talk</td><td><a href="https://www.youtube.com/">YouTube</a>, <a href="https://www.linkedin.com/help/linkedin/answer/a554001">LinkedIn Video</a>, <a href="https://vimeo.com/">Vimeo</a></td></tr><tr><td><strong>White papers&nbsp;</strong></td><td>Positions you as a thought leader; provides depth that articles can&#8217;t match</td><td>&#8220;Navigating Supply Chain Disruptions: A Framework for Manufacturing Resilience&#8221; &#8211; research report</td><td>Your personal website, <a href="https://www.slideshare.net/">SlideShare</a>, <a href="https://www.researchgate.net/">ResearchGate</a></td></tr><tr><td><strong>Newsletters&nbsp;</strong></td><td>Creates regular touchpoints with prospects; builds an owned audience asset</td><td>&#8220;Weekly M&amp;A Insights&#8221; &#8211; curated analysis of industry deals with your expert commentary</td><td><a href="https://wordpress.com/newsletter/">WordPress.com</a>, <a href="https://substack.com/about">Substack</a>, <a href="https://mailchimp.com/">Mailchimp</a>, <a href="https://www.beehiiv.com/?srsltid=AfmBOoq0bEPFbIq5Q7zuIC2vHLoQzzJkONi9IWPGv5LLgPMGfoCNKS5x">Beehiiv</a></td></tr><tr><td><strong>Comments and opinions&nbsp;</strong></td><td>Demonstrates real-time relevance and thought leadership without requiring extensive content creation</td><td>Expert analysis on breaking industry news or trending topics</td><td><a href="https://linkedin.com/">LinkedIn</a>, <a href="https://medium.com/">Medium</a>, Industry forums</td></tr><tr><td><strong>Community platforms&nbsp;</strong></td><td>Creates high-value relationships with potential clients; positions you as the center of a knowledge network</td><td>Exclusive mastermind groups or premium Q&amp;A access to your expertise</td><td><a href="https://discord.com/">Discord</a>, <a href="https://circle.so/">Circle</a>, <a href="https://slack.com/">Slack</a>, <a href="https://www.mightynetworks.com/">Mighty Networks</a></td></tr><tr><td><strong>Technical platforms&nbsp;</strong></td><td>Essential for technical consultants to demonstrate practical implementation skills</td><td>Code repositories with documentation and examples solving specific problems</td><td><a href="https://github.com/">GitHub</a>, <a href="https://stackoverflow.com/">Stack Overflow</a>, <a href="https://codepen.io/">CodePen</a></td></tr><tr><td><strong>Subscription content</strong></td><td>Creates recurring revenue while pre-qualifying serious prospects</td><td>Monthly industry analysis or toolkit access for paying subscribers</td><td>Patreon, Podia, Gumroad</td></tr></tbody></table>



<h3 class="wp-block-heading"><strong>2. Create a professional Gravatar profile</strong></h3>



<img width="660" height="343" src="https://blog.gravatar.com/wp-content/uploads/2025/04/gravatar-new-homepage.png?w=660" alt="Gravatar homepage" class="wp-image-3162" />



<p>As already mentioned, a consistent online presence is one of the main components for consulting success, but it doesn’t come without its difficulties. For once, managing your professional image across dozens of platforms can be time-consuming. Thankfully, this is where <a href="https://gravatar.com/">Gravatar</a> becomes invaluable for consultants looking to maintain brand consistency.</p>



<p>Gravatar (Globally Recognized Avatar) functions as a centralized <a href="https://blog.gravatar.com/2024/07/10/online-presence-management/">profile management system</a> that follows you across the internet. Instead of creating separate profiles for each website you visit, Gravatar allows you to establish one professional identity that appears automatically on supported platforms.</p>



<p>For consultants, Gravatar offers several key advantages:</p>



<ul class="wp-block-list">
<li><strong>Centralized bio management</strong>: Create a compelling consultant profile highlighting your specialties, expertise, and professional background – update it once, and changes reflect everywhere</li>



<li><strong>Verified professional connections</strong>: Link to your verified social profiles, portfolio, and professional certifications in one accessible location</li>



<li><strong>Consistent visual identity</strong>: Your professional headshot automatically appears when you comment on blogs, contribute to forums, or interact on platforms like GitHub and Stack Overflow</li>



<li><strong>Time efficiency</strong>: No more maintaining separate profiles across dozens of websites – establish your brand once and focus on client work</li>
</ul>



<p>Gravatar is integrated with major platforms, including WordPress, Slack, and GitHub. When potential clients encounter you across these platforms, they&#8217;ll see a consistent, professional image that reinforces your expertise.</p>



<p>Setting up your Gravatar takes just minutes but establishes your consulting presence across thousands of websites instantly. Visit <a href="https://gravatar.com/">Gravatar.com</a> today to claim your professional digital identity.</p>



<a href="https://gravatar.com/connect/?gravatar_from=blog"><img width="3243" height="729" src="https://blog.gravatar.com/wp-content/uploads/2024/12/free_profile_cta.png" alt="" class="wp-image-2616" /></a>



<h3 class="wp-block-heading"><strong>3. Showcase client success and testimonials</strong></h3>



<p>Social proof is perhaps your most powerful consulting asset. Research shows that <a href="https://searchengineland.com/study-72-of-consumers-trust-online-reviews-as-much-as-personal-recommendations-114152">72% of potential clients place significantly more trust in a service after reading positive testimonials</a> – making client success stories essential for consultants looking to command premium rates.</p>



<p>The most effective social proof for consultants takes two forms:</p>



<ul class="wp-block-list">
<li><strong>Case studies</strong>: Detailed narratives that showcase the problem-solving process and measurable results.</li>



<li><strong>Client testimonials</strong>: Direct endorsements that build credibility and trust.</li>
</ul>



<p>Unlike generic &#8220;they were great to work with&#8221; testimonials, effective consulting social proof must demonstrate concrete business impact and ROI. Quantify your value with specific metrics: revenue increases, cost reductions, efficiency gains, or other tangible outcomes.</p>



<p>These success stories can appear as LinkedIn posts for wider visibility or as dedicated pages on your website for in-depth exploration. For consultants with broad specialties, consider creating industry-specific testimonial portfolios that target different client segments, allowing you to speak directly to distinct audience needs.</p>



<p><img src="https://s0.wp.com/wp-content/mu-plugins/wpcom-smileys/twemoji/2/72x72/1f4a1.png" alt="💡" class="wp-smiley" /><em>Develop a systematic approach to collecting case study material during projects. Document key challenges, strategies, and outcomes as they happen rather than scrambling to reconstruct them later.</em></p>



<p>Remember that confidentiality is paramount in consulting relationships. Always obtain express written permission before using any client information in marketing materials – even anonymous case studies require careful review to prevent identification of sensitive details.</p>



<h3 class="wp-block-heading"><strong>4. Strengthen your authority through strategic partnerships</strong></h3>



<p>Strategic partnerships offer consultants a powerful way to multiply their authority and extend their reach. By forming alliances with complementary experts, you can create value propositions that neither partner could deliver alone.</p>



<p>For example, a management consultant specializing in digital transformation might partner with a data privacy expert to offer comprehensive tech modernization services. This partnership creates multiple advantages:</p>



<ul class="wp-block-list">
<li><strong>Enhanced expertise</strong>: Combined knowledge fills gaps that clients might otherwise need to source separately</li>



<li><strong>Premium positioning</strong>: The unique combination justifies higher fees than either consultant could command individually</li>



<li><strong>Authority-building opportunities</strong>: Co-created research, whitepapers, and industry analyses demonstrate thought leadership while sharing production costs</li>



<li><strong>Expanded audience</strong>: Each partner gains access to the other&#8217;s client network and followers</li>
</ul>



<p>These partnerships work best when each consultant maintains their distinct brand identity while clearly communicating the collaborative relationship. Use your Gravatar profile to maintain a consistent professional presence across platforms, cross-linking to verified profiles of your strategic partners and collaborative work.</p>



<p>The most successful consulting partnerships start with clear agreements about lead sharing, revenue distribution, and service delivery responsibilities. Begin with small collaborative projects to test compatibility before committing to major initiatives or formal business structures.</p>



<h3 class="wp-block-heading"><strong>5. Measure and optimize your consulting brand&#8217;s ROI</strong></h3>



<p>Building a personal brand without measuring its impact is like navigating without a compass – you might be moving, but you won&#8217;t know if you&#8217;re heading in the right direction. Savvy consultants treat their personal branding as an investment that should generate measurable returns.</p>



<p>The most immediate indicator of effective personal branding is typically an increased rate of inquiries. When your brand resonates with your target audience, you&#8217;ll notice more potential clients reaching out through both word-of-mouth referrals and inbound marketing channels. However, this surface-level metric only tells part of the story.</p>



<p>To truly understand your branding ROI, track these critical metrics:</p>



<ul class="wp-block-list">
<li><a href="https://www.boutiqueconsultingclub.com/blog/client-acquisition-cost-consulting-firms"><strong>Client acquisition cost (CAC)</strong></a>: Calculate how much you spend on marketing, networking, and content creation to acquire each new client. As your brand strengthens, this cost should decrease.</li>



<li><strong>Lifetime client value (LCV)</strong>: Measure the total revenue generated from an average client relationship, including repeat engagements and referrals. Strong personal branding attracts clients who stay longer and spend more.</li>



<li><strong>Project value trends</strong>: Monitor how the average value of new projects changes over time. Rising project values indicate that your brand is attracting higher-quality opportunities.</li>



<li><strong>Time-to-close</strong>: Track how quickly leads convert into paying clients. A strong personal brand builds trust faster, shortening the sales cycle significantly.</li>
</ul>



<p>Set up systematic tracking through your website analytics, CRM system, and contact forms. Create a simple dashboard that connects these metrics to specific branding initiatives, allowing you to identify which elements of your brand strategy deliver the strongest ROI.</p>



<p>Review these metrics quarterly, looking for patterns that emerge alongside your branding activities. Did that series of LinkedIn articles correlate with higher-value inquiries? Did your speaking engagement at an industry conference shorten your sales cycle?</p>



<p>Use these insights to refine your approach – double down on high-performing channels and pivot away from efforts that aren&#8217;t delivering results. The most successful consultants continuously adjust their branding strategy based on data, not assumptions, creating a virtuous cycle of improvement that steadily enhances their market position and fee structure.</p>



<h2 class="wp-block-heading"><strong>Start winning better clients: Develop your brand action Plan</strong></h2>



<p>The difference between struggling consultants and those commanding premium fees isn&#8217;t luck – it&#8217;s strategic personal branding. Now it&#8217;s time to transform these insights into a focused action plan that elevates your consulting practice.</p>



<p>Start by implementing each of the five pillars we&#8217;ve covered:</p>



<ol class="wp-block-list">
<li><strong>Build your verified presence</strong> across multiple platforms where your ideal clients spend time</li>



<li><strong>Create a professional Gravatar profile</strong> that follows you across the internet with consistent branding</li>



<li><strong>Document client successes</strong> with measurable results and compelling testimonials</li>



<li><strong>Form strategic partnerships</strong> with complementary experts to expand your reach and capabilities</li>



<li><strong>Measure your brand&#8217;s ROI</strong> using clear metrics that track business impact</li>
</ol>



<p>The consulting landscape rewards those who demonstrate authority through high-value content distributed across carefully selected channels. Your insights should solve real problems, showcase your expertise, and position you as the obvious choice for complex challenges.</p>



<p>Begin today by creating your free profile at<a href="https://gravatar.com"> Gravatar.com</a>!</p>



<a href="https://gravatar.com/connect/?gravatar_from=blog"><img width="3243" height="729" src="https://blog.gravatar.com/wp-content/uploads/2024/12/free_profile_cta.png" alt="" class="wp-image-2616" /></a>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Mon, 05 May 2025 15:57:45 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:11:"Ronnie Burt";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:2;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:102:"Do The Woo Community: Unlocking Creative Content Management in WordPress with Derek Hanson &amp; BobWP";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:28:"https://dothewoo.io/?p=94962";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:95:"https://dothewoo.io/unlocking-creative-content-management-in-wordpress-with-derek-hanson-bobwp/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:203:"In this episode of Content Sparks, Derek Hanson discusses WordPress content management with BobWP, highlighting its flexibility and creativity for blogs, presentations, and multimodal content strategies.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Mon, 05 May 2025 09:56:58 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:5:"BobWP";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:3;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:43:"Do The Woo Community: BobWP, Bob Will Pivot";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:43:"https://dothewoo.io/?post_type=blog&p=96611";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:46:"https://dothewoo.io/blog/bobwp-bob-will-pivot/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:92:"I have pivoted a lot over the years. Impactful and subtle. This one is somewhere in-between.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Mon, 05 May 2025 07:57:12 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:5:"BobWP";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:4;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:51:"Do The Woo Community: Leading Up to the Finish Line";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:43:"https://dothewoo.io/?post_type=blog&p=96551";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:55:"https://dothewoo.io/blog/leading-up-to-the-finish-line/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:87:"Cheering on your friends and colleagues for finishing. But things happen along the way.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Sun, 04 May 2025 10:35:17 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:5:"BobWP";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:5;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:112:"Gutenberg Times: Four Block Plugins, three events, two live streams, one course and more — Weekend Edition 328";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:35:"https://gutenbergtimes.com/?p=40148";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:116:"https://gutenbergtimes.com/four-block-plugins-three-events-two-live-streams-one-course-and-more-weekend-edition-328/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:19611:"<p>Howdy,</p>



<p>Now is the time to skill up your block editor and theme knowledge and craft. The more quiet release cycle of WordPress gives everyone some breathing room. You can explore more opportunities, like attending the Page Builder Summit. You could invest in a course. You could join in free webinars. You could listen to successful experts in the field to learn how they approach their business.</p>



<p>What are your questions about core blocks, block themes etc.? You can ask via email, in the comments or <a href="https://discord.gg/ZyuRa2C6">join our new Discord space</a>. </p>



<p>Below, again a great mixture of plugins, live streams, upcoming events and tutorials. I hope you also have a great weekend! </p>



<p>Yours, <img src="https://s.w.org/images/core/emoji/15.1.0/72x72/1f495.png" alt="💕" class="wp-smiley" /><br /><em>Birgit</em></p>



<div class="wp-block-group has-light-background-background-color has-background"><div class="wp-block-group__inner-container is-layout-flow wp-block-group-is-layout-flow">
<p><strong>Table of Contents</strong></p>



<ol><li><a class="wp-block-table-of-contents__entry" href="https://gutenbergtimes.com/four-block-plugins-three-events-two-live-streams-one-course-and-more-weekend-edition-328/#0-word-press-release-information">Developing Gutenberg and WordPress</a></li><li><a class="wp-block-table-of-contents__entry" href="https://gutenbergtimes.com/four-block-plugins-three-events-two-live-streams-one-course-and-more-weekend-edition-328/#0-p">Plugins, Themes, and Tools for #nocode site builders and owners</a><ol><li><a class="wp-block-table-of-contents__entry" href="https://gutenbergtimes.com/four-block-plugins-three-events-two-live-streams-one-course-and-more-weekend-edition-328/#upcoming-events">Upcoming events</a></li></ol></li><li><a class="wp-block-table-of-contents__entry" href="https://gutenbergtimes.com/four-block-plugins-three-events-two-live-streams-one-course-and-more-weekend-edition-328/#2-word-press-6-0-1-and-6-1-scheduled">Theme Development for Full Site Editing and Blocks</a></li><li><a class="wp-block-table-of-contents__entry" href="https://gutenbergtimes.com/four-block-plugins-three-events-two-live-streams-one-course-and-more-weekend-edition-328/#3-building-themes-for-fse-and-word-press">Building Blocks and Tools for the Block editor</a></li></ol>
</div></div>



<h2 class="wp-block-heading" id="0-word-press-release-information">Developing Gutenberg and WordPress</h2>



<p>On April 30, <a href="https://wordpress.org/news/2025/04/wordpress-6-8-1-maintenance-release/"><strong>WordPress 6.8.1 Maintenance Release</strong></a> came out. Aaron Jorbin wrote in the release post that this minor release includes fixes for 15 bugs. These fixes span throughout Core and the Block Editor. They tackle issues affecting multiple areas of WordPress including the block editor, multi-site, and REST API.  The top three fixes are: </p>



<ul class="wp-block-list">
<li>A fix addresses the regression <a href="https://github.com/WordPress/gutenberg/issues/69923"><em>Meta boxes area showing unwanted resize handle</em></a>. It also addresses the issue that breaks auto-scroll. This was discovered right after the release of 6.8.</li>



<li>The Edit Site link is restored to its earlier link behavior. It links to the respective template displayed on the front end. (<a href="https://core.trac.wordpress.org/ticket/63358">#63358</a>). </li>



<li>The REST API&#8217;s handling of sticky posts has also been fixed.  (<a href="https://core.trac.wordpress.org/ticket/63307">#63307</a>, <a href="https://core.trac.wordpress.org/ticket/63339">#63339</a></li>
</ul>



<p>For a full list of bug fixes, please refer to the&nbsp;<a href="https://make.wordpress.org/core/2025/04/28/wordpress-6-8-1-rc1-is-now-available/">release candidate announcement.</a></p>



<div class="wp-block-group has-light-background-background-color has-background"><div class="wp-block-group__inner-container is-layout-constrained wp-block-group-is-layout-constrained">
<p><img src="https://s.w.org/images/core/emoji/15.1.0/72x72/1f399.png" alt="🎙" class="wp-smiley" /> Latest episode: <a href="https://gutenbergtimes.com/podcast/gutenberg-changelog-116-wordpress-6-8-field-guide/">Gutenberg Changelog 116 – WordPress 6.8, Source of Truth, Field Guide, Gutenberg 20.5 and 20.6</a> with special guest JC Palmes, WebDev Studios</p>



<img width="652" height="184" src="https://i0.wp.com/gutenbergtimes.com/wp-content/uploads/2025/04/Screenshot-2025-04-05-at-12.27.14.png?resize=652%2C184&ssl=1" alt="" class="wp-image-39894" />
</div></div>



<h2 class="wp-block-heading" id="0-p">Plugins, Themes, and Tools for #nocode site builders and owners</h2>



<p>In his post, <a href="https://theadminbar.com/building-a-custom-image-gallery-with-the-image-gallery-block/">Building a Custom Image Gallery with the Image Gallery Block</a>, <strong>Kyle Van Deusen</strong> provides guidance. He explains how to create a custom image gallery in WordPress. He uses the <a href="https://wordpress.org/plugins/image-gallery-block/">“Image Gallery Block”</a> plugin by WP Developer. This plugin offers more features than the default WordPress Gallery block.</p>



<p>Van Deusen covers installing the plugin, adding a gallery, and selecting images. The plugin provides flexible styling like grid or masonry layouts, caption options, image sizing, responsive settings, and a lightbox. Extra adjustments include borders, rounded corners, and caption colors. The post emphasizes the plugin&#8217;s user-friendliness and concludes with a preview of its interactive features.</p>



<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide" />



<p><strong>Wes Theron</strong> has some awesome tips to <strong><a href="https://www.youtube.com/watch?v=qwtR6Gr7rs4">Speed Up Your Workflow in WordPress</a></strong>. He’s sharing his favorite hidden gems of the Block Editor. You’ll get to know the Command Palette, different editing modes, List view, scheduling posts, and so much more. It’s a super quick video, and you’ll pick it all up in under six minutes. You probably already know most of it. You’re a long-time subscriber. You got the scoop when these features first dropped in the Block Editor. But still, this video shows you how those features have evolved and how they all work together for creating content.</p>


<div width="100%" class="wp-block-newsletterglue-showhide ng-block">
<div class="wp-block-embed__wrapper">

</div>
</div>


<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide" />



<p>In the latest episode of <strong><a href="https://www.youtube.com/watch?v=C7QInDAb6tE">Greyd Conversations #6 &#8211; Building upon WordPress</a></strong>, <strong>Mike McAlister</strong>, co-founder of Ollie, joined <strong>Jessica Lyschik</strong>. They discussed the advantages of their shared approach to developing products using WordPress&#8217;s Block &amp; Site Editor. They also looked into the future direction of WordPress. They discussed features that product companies like <a href="https://greyd.io/">Greyd</a> and <a href="https://olliewp.com/">Ollie</a> hope to see in the core.</p>


<div width="100%" class="wp-block-newsletterglue-showhide ng-block">
<div class="wp-block-embed__wrapper">

</div>
</div>


<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide" />



<p><a href="https://profiles.wordpress.org/mralaminahamed/"><strong>Al Amin Ahamed</strong></a>&#8216;s new plugin, <a href="https://wordpress.org/plugins/author-profile-blocks/"><strong>Author Profile Blocks</strong></a>, in now available in the WordPress Plugin Repository. With this plugin you can show user profiles in different styles using Gutenberg blocks. You can use it to highlight team members. It can also highlight contributors, authors, or any WordPress users you want to feature on your site.</p>



<p>&#8220;Unlike other plugins, Author Profile Blocks leverages your existing WordPress users rather than creating a separate custom post type. This means you can showcase all your site contributors without duplicating content.&#8221; Ahamed wrote in his description. </p>



<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide" />



<p><strong><a href="https://x.com/selimrana">Selim Rana</a></strong> and his team at <em>BdThemes</em> released the <a href="https://wordpress.org/plugins/zolo-advanced-heading/"><strong>Advanced Heading for the Gutenberg Block Editor</strong></a> plugin. It provides various options to style headings like text highlighting, gradient, image masking, drop shadows, and background effects.</p>



<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide" />



<p><strong>Bhargav (Bunty) Bhandari</strong> released a new plugin again: <a href="https://wordpress.org/plugins/thread-block/"><strong>Thread Block</strong></a> with which you can publish Twitter-like Thread posts. It can also be used to do some live blogging of an event or a breaking news story. &#8220;Perfect for storytelling, debates, or breaking down ideas step by step&#8221; Bhandari wrote. </p>



<a href="https://wordpress.org/plugins/thread-block/"><img width="652" height="346" src="https://i0.wp.com/gutenbergtimes.com/wp-content/uploads/2025/05/Thread-Block-screenshot-3.png?resize=652%2C346&ssl=1" alt="" class="wp-image-40207" /></a>



<h3 class="wp-block-heading" id="upcoming-events">Upcoming events</h3>



<p>On <strong>May 8, 2025, at 12:00 UTC,</strong> <strong>Anne-Mieke Bovelett</strong> will hold a free webinar for site builders and agencies. <a href="https://annebovelett.eu/discover-how-much-power-the-wordpress-block-editor-and-site-editor-give-you/"><strong>Discover how much power the WordPress Block Editor and Site Editor give you!</strong></a> She will walk you through what the WordPress Block Editor and Site Editor can do today. No custom code, no third-party builder, no bloated plugin stack. Just native WordPress, used to its full potential.<br /><br />Bovelett will cover:</p>



<ul class="wp-block-list">
<li>What the Block Editor and Site Editor actually are</li>



<li>How to build layouts and templates without code</li>



<li>How reusable patterns can simplify your workflow</li>



<li>Building post grids (query loops) and juggling dynamic data</li>
</ul>



<p><a href="https://annebovelett.eu/discover-how-much-power-the-wordpress-block-editor-and-site-editor-give-you/">Free registration is now open</a>. </p>



<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide" />



<p>The <a href="https://pagebuildersummit.com/"><strong>Page Builder summit 2025</strong></a> will take place from <strong>12th to 16th of May 2025.</strong> Hosts <strong><a href="https://x.com/anchenlr">Anchen le Roux</a></strong> and <strong><a href="https://bsky.app/profile/nathanwrigley.com">Nathan Wrigley</a></strong> published <a href="https://pagebuildersummit.com/schedule/">the schedule</a>. It is packed with fabulous speakers. The topics are perfect for site builders to enhance their business acumen. They will also expand their technical knowledge.</p>



<p>Here is my watch list: </p>



<ul class="wp-block-list">
<li><strong>Alicia St. Rose:</strong> Loop, There It Is! The Magic of the Query Loop Block</li>



<li><strong>Tony Cosentino</strong>: Supercharge Your WordPress Workflow: 10 AI Tools to Build Better Websites Faster</li>



<li><strong>PK Son:</strong> Supercharge Your Builds with ACF Flexible/Repeater Fields</li>



<li><strong>Luke Carbis</strong>: The Hidden Costs of Page Builders: Avoiding Technical Debt in No-Code Projects</li>



<li><strong>Tammie Lister</strong>: Design Once, Build Everywhere: The Lego Principle for Page Builders</li>



<li><strong>Benjamin Intal</strong>: <strong>Reimagine UX in the Block Editor with WP Interactions</strong></li>
</ul>



<p>The event is totally free, and the recordings will stay free for 48 hours after the last day. I will be traveling during the week. I am glad to pay for an extension of that watch time. $47 is quite affordable to get unlimited access to the recordings.</p>



<a href="https://pagebuildersummit.com/"><img width="652" height="421" src="https://i0.wp.com/gutenbergtimes.com/wp-content/uploads/2025/05/pageBuilderSummit-2025.jpg?resize=652%2C421&ssl=1" alt="" class="wp-image-40209" /></a>



<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide" />



<p><strong><a href="https://wordsesh.com/">WordSesh</a></strong>&nbsp;returns&nbsp;<strong>May 13–15, 2025</strong>. It is a virtual conference for&nbsp;WordPress professionals. Its host,&nbsp;<strong><a href="http://indieweb.social/@rzen">Brian Richards</a></strong>, is a seasoned virtual conference producer and WordPress educator. His speaker and session curation is top-notch. Sign up to get updates on the next event. </p>



<h2 class="wp-block-heading" id="2-word-press-6-0-1-and-6-1-scheduled">Theme Development for Full Site Editing and Blocks</h2>



<p>In his latest live stream, <strong>Ryan Welcher</strong> shared his process in real time. He refined features and experimented with block-based design. He also answered viewers&#8217; questions as we went along. The recording is now online on YouTube: <a href="https://www.youtube.com/watch?v=FEcADhAAvkc"><strong>WordPress Block Theming: Chat, Connect, and Chill!</strong></a></p>


<div width="100%" class="wp-block-newsletterglue-showhide ng-block">
<div class="wp-block-embed__wrapper">

</div>
</div>


<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide" />



<p><strong>&nbsp;<a href="https://make.wordpress.org/core/handbook/references/keeping-up-with-gutenberg-index/" target="_blank" rel="noreferrer noopener">&#8220;Keeping up with Gutenberg &#8211; Index 2025&#8221;</a>&nbsp;</strong><br />A chronological list of the WordPress Make Blog posts from various teams involved in Gutenberg development: Design, Theme Review Team, Core Editor, Core JS, Core CSS, Test, and Meta team from Jan. 2024 on. Updated by yours truly. The previous years are also available: <strong><strong><a href="https://make.wordpress.org/core/handbook/references/keeping-up-with-gutenberg-index/keeping-up-with-gutenberg-index-2020/">2020</a>&nbsp;|&nbsp;<a href="https://make.wordpress.org/core/handbook/references/keeping-up-with-gutenberg-index/keeping-up-with-gutenberg-index-2021/">2021</a></strong>&nbsp;|&nbsp;<strong><a href="https://make.wordpress.org/core/handbook/references/keeping-up-with-gutenberg-index/keeping-up-with-gutenberg-index-2022/">2022</a></strong></strong>&nbsp;|&nbsp;<strong><a href="https://make.wordpress.org/core/handbook/references/keeping-up-with-gutenberg-index/gutenberg-index-2023">2023</a></strong> | <a href="https://make.wordpress.org/core/handbook/references/keeping-up-with-gutenberg-index/gutenberg-index-2024/"><strong>2024</strong></a></p>



<h2 class="wp-block-heading" id="3-building-themes-for-fse-and-word-press">Building Blocks and Tools for the Block editor</h2>



<p>I answered a listener question from the Gutenberg changelog. I published a short post on <a href="https://gutenbergtimes.com/how-to-overwrite-or-remove-core-block-styles/"><strong>How to overwrite or remove core block styles</strong></a>. In a short video, you learn how to overwrite the styles through the <strong>Editor &gt; Styles</strong> section. Another way is via the theme&#8217;s <code>theme.json</code> file. If you want to remove core block styles entirely, you&#8217;ll find a code snippet to put into your <code>functions.php</code> or plugin files.  </p>



<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide" />



<p><strong>Milica Aleksandric</strong> announces a new <strong><a href="https://wpshout.com/meet-our-new-wordpress-development-course/">WordPress Development Course for the Modern Era</a></strong> on WPShout. The course, <em>Modern WordPress Fast Track</em>, is a &#8220;10-week program.&#8221; It is designed to take you from beginner to pro with the latest WordPress tech. Think block themes, Full Site Editing, AI tools, and modern workflows. It’s taught by <strong>Kaspars Dambis</strong>, a WordPress core contributor with tons of real-world experience. The course community on Discord connects you to other students. It starts on June 1, 2025. Until then, you can take advantage of the 40% discount for early birds.</p>



<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide" />



<p>In his latest recording of his twitch stream, <a href="https://www.youtube.com/watch?v=otj2-24XZ8s"><strong>AI Code Reviews | Jon learns to code</strong></a>, <strong>Jonathan Bossenger</strong> explored two AI code review tools. These tools hook right into your Git pull request workflow. He compared them to see how they work.</p>


<div width="100%" class="wp-block-newsletterglue-showhide ng-block">
<div class="wp-block-embed__wrapper">

</div>
</div>


<p><strong><a href="https://gutenbergtimes.com/need-a-zip-from-master/">Need a plugin .zip from Gutenberg&#8217;s master branch?</a></strong><br />Gutenberg Times provides daily build for testing and review. </p>



<p>Now also available via <a href="https://playground.wordpress.net/?blueprint-url=https://gutenbergtimes.com/wp-content/uploads/2020/11/playnightly.json">WordPress Playground</a>. There is no need for a test site locally or on a server. Have you been using it? <a href="mailto:pauli@gutenbergtimes.com">Email me </a>with your experience</p>



<p><img alt="GitHub all releases" src="https://img.shields.io/github/downloads/bph/gutenberg/total?style=for-the-badge" /></p>



<p class="has-text-align-center has-small-font-size"><em>Questions? Suggestions? Ideas? </em><br /><em>Don&#8217;t hesitate to send <a href="mailto:pauli@gutenbergtimes.com">them via email</a> or</em><br /><em> send me a message on WordPress Slack or Twitter @bph</em>.</p>



<hr class="wp-block-separator has-alpha-channel-opacity" />



<p class="has-text-align-center has-small-font-size">For questions to be answered on the <a href="http://gutenbergtimes.com/podcast">Gutenberg Changelog</a>, <br />send them to <a href="mailto:changelog@gutenbergtimes.com">changelog@gutenbergtimes.com</a></p>



<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide" />



<p>Featured Image: Photo by chuttersnap on Unsplash</p>



<hr class="wp-block-separator has-css-opacity is-style-wide" />



<p class="has-text-align-left"><strong>Don&#8217;t want to miss the next Weekend Edition? </strong></p>


<form class="wp-block-newsletterglue-form ngl-form ngl-portrait" action="https://gutenbergtimes.com/feed/" method="post"><div class="ngl-form-container"><div class="ngl-form-field"><label class="ngl-form-label" for="ngl_email"><br />Type in your Email address to subscribe.</label><div class="ngl-form-input"><input type="email" class="ngl-form-input-text" name="ngl_email" id="ngl_email" /></div></div><button type="submit" class="ngl-form-button">Subscribe</button><p class="ngl-form-text">We hate spam, too, and won&#8217;t give your email address to anyone <br />except Mailchimp to send out our Weekend Edition</p></div><div class="ngl-message-overlay"><div class="ngl-message-svg-wrap"></div><div class="ngl-message-overlay-text">Thanks for subscribing.</div></div><input type="hidden" name="ngl_list_id" id="ngl_list_id" value="26f81bd8ae" /><input type="hidden" name="ngl_double_optin" id="ngl_double_optin" value="yes" /></form>


<hr class="wp-block-separator has-css-opacity is-style-wide" />";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Sat, 03 May 2025 12:20:02 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:18:"Birgit Pauli-Haack";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:6;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:38:"Do The Woo Community: Enshittification";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:43:"https://dothewoo.io/?post_type=blog&p=96518";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:42:"https://dothewoo.io/blog/enshittification/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:44:"The progressive decline of digital platforms";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Sat, 03 May 2025 10:57:53 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:5:"BobWP";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:7;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:32:"Matt: Berkshire Hathaway Meeting";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:23:"https://ma.tt/?p=141784";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:32:"https://ma.tt/2025/05/berkshire/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:2885:"<p>I&#8217;ve checked off a bucket list item: I&#8217;m attending a <a href="https://www.berkshirehathaway.com/">Berkshire Hathaway</a> shareholder meeting. It&#8217;s really an event! Thousands flock to Omaha, Nebraska, for the legendary Q&amp;A sessions with Warren Buffett and shareholder deals. They&#8217;ve made it quite the circus, with every Berkshire Hathaway company having a booth of some sort, and typically selling their goods at a discount or with exclusive items you can only buy there, like Warren Buffett and Charlie Munger Squishmallows (which of course I got, to complement my <a href="https://www.berkshirenerds.store/">bronze busts</a>).</p>



<p>It&#8217;s strange to have a Dairy Queen booth selling $1 ice cream (cash only!) next to NetJets, but those juxtapositions are part of the Berkshire vibe—it&#8217;s very high/low, like Costco (a big Berkshire holding). There&#8217;s also an element of WordCamps or a Salesforce Trailblazer event in that you can tell there&#8217;s a &#8220;type&#8221; of person that&#8217;s easy to spot who&#8217;s a Berkshire enthusiast. A lot of Berkshire brands are also WordPress users: Duracell, GEICO, Acme Brick, Berxi, MiTek. I think there is a lot of mimetic overlap between the values of open source and the values of building a Berkshire company.</p>



<p>As with any big gathering, the side events are also great, and I was honored to have a fireside chat with a friend and Buffett protégé, <a href="https://en.wikipedia.org/wiki/Tracy_Britt_Cool">Tracy Britt Cool</a>. To an audience of about 60+ CEOs in the <a href="https://kanbrick.com/">Kanbrick</a> community, we talked about Automattic&#8217;s history and some of the latest happenings in tech; AI was definitely on people&#8217;s minds in the Q&amp;A. They had questions for me, but I also feel like I have a ton to learn from this group that has built founder or family-owned businesses with an average of 80-100M of revenue, the kind of thing that is the engine of the American economy. </p>



<p>It makes me pine for the day when we can have more shareholders in Automattic; I think it would be an amazing cohort of folks that believe in open source and the open web, invested together and learning from each other, and I could imagine an event very much like these shareholder meetings. It&#8217;s so much more powerful when you build a business where your customers are also a community.</p>



<p><strong>Update:</strong> I knew this would be a special one because it was Warren&#8217;s 60th, but he really went above and beyond by announcing his intention for Greg Abel to take over as CEO at the end of the year. The standing ovation was a special moment, 60 years of 19.9% compounding returns! I think the future of Berkshire is very bright because he&#8217;s shared so much of his worldview that there are others that have made it their own.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 02 May 2025 21:56:07 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:4:"Matt";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:8;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:61:"Gutenberg Times: How to overwrite or remove core block styles";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:35:"https://gutenbergtimes.com/?p=40172";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:72:"https://gutenbergtimes.com/how-to-overwrite-or-remove-core-block-styles/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:7696:"<p>The technical documented term for block styles is <a href="https://developer.wordpress.org/themes/features/block-style-variations/">Block Style Variations</a> and are the smallest unit of Styles. They are on the block level. The others are <a href="https://developer.wordpress.org/themes/global-settings-and-styles/style-variations/">Global Style Variations</a> coming with a block theme, and <a href="https://make.wordpress.org/core/2024/06/24/section-styles/">Sections Style variations</a>, that are for patterns and container blocks. </p>



<p>WordPress includes a few block-level styles. You might have an urge to change them. Adjust them to your theme or branding designs. This post shows you three ways on how to alter those styles. </p>



<h2 class="wp-block-heading">Use Editor &gt; Styles &gt; Blocks</h2>



<p>WordPress offers more than one style for certain blocks. For example, the <a href="https://wordpress.com/support/wordpress-editor/blocks/buttons-block/">Buttons block</a> has two styles: <strong>Fill</strong> and <strong>Outline</strong>.&nbsp;</p>



<p>Content creators and site builders can change the block’s style on a per-block basis. They can also change it on a per-site basis via the Styles area in the site editor.</p>



		
			<div class="jetpack-videopress-player__wrapper"> </div>
			
			
		
		


<h2 class="wp-block-heading">Overwrite core block styles via theme.json</h2>



<p>As a developer, you can overwrite the <strong>Outline</strong> button styles via theme.json file.</p>



<p>The example code below shows the modification of the core/button variation with a:&nbsp;</p>



<ul class="wp-block-list">
<li>0px border radius.</li>



<li>3px wide blue border.</li>
</ul>



<p>These styles will replace the default rounded, black, 2px borders.</p>



<div class="wp-block-kevinbatdorf-code-block-pro"><span></span><span tabindex="0" class="code-block-pro-copy-button"></span><pre class="shiki min-dark" tabindex="0"><code><span class="line"><span>{</span></span>
<span class="line"><span>	</span><span>"$schema"</span><span>:</span><span> </span><span>"https://schemas.wp.org/trunk/theme.json"</span><span>,</span></span>
<span class="line"><span>	</span><span>"version"</span><span>:</span><span> </span><span>2</span><span>,</span></span>
<span class="line"><span>	</span><span>"styles"</span><span>:</span><span> {</span></span>
<span class="line"><span>		</span><span>"blocks"</span><span>:</span><span> {</span></span>
<span class="line"><span>			</span><span>"core/button"</span><span>:</span><span> {</span></span>
<span class="line"><span>				</span><span>"variations"</span><span>:</span><span> {</span></span>
<span class="line"><span>					</span><span>"outline"</span><span>:</span><span> {</span></span>
<span class="line"><span>						</span><span>"border"</span><span>:</span><span> {</span></span>
<span class="line"><span>							</span><span>"color"</span><span>:</span><span> </span><span>"blue"</span><span>,</span></span>
<span class="line"><span>							</span><span>"radius"</span><span>:</span><span> </span><span>"0"</span><span>,</span></span>
<span class="line"><span>							</span><span>"style"</span><span>:</span><span> </span><span>"solid"</span><span>,</span></span>
<span class="line"><span>							</span><span>"width"</span><span>:</span><span> </span><span>"3px"</span></span>
<span class="line"><span>						}</span><span>,</span></span>
<span class="line"><span>					}</span></span>
<span class="line"><span>				}</span></span>
<span class="line"><span>			}</span></span>
<span class="line"><span>		}</span></span>
<span class="line"><span>	}</span></span>
<span class="line"><span>}</span></span></code></pre></div>



<p><img src="https://lh7-rt.googleusercontent.com/docsz/AD_4nXfd0mIsgSSO2-NvZqZye95RvTuNp0BPrccDmpYR6_pjT3_ajHCHwIMhLQh88BFyzMQPkKFaxv9rsnKV8ctR8UHyw9C-j2kdeV3xfdnWnbM6EA6nQXtjkZORsNtHxwDC-bTmS5PKmQ?key=NbFaJRWcQ2W-sRPuaZaOil0N" width="624" height="209" /><a href="https://drive.google.com/file/d/14jN1AK9Z0UFSRZ1Kw0vyZGUl6BJrbsOx/view?usp=drive_link"><img src="https://s.w.org/images/core/emoji/15.1.0/72x72/1f5bc.png" alt="🖼" class="wp-smiley" /></a></p>



<p>For other core/block styles, you can overwrite their styles in the <code>styles.blocks.core/[block]</code> section of your theme.json file—simply replace [block] above with the actual block name. You can find a detailed walk-through of this process, including a list of available core block styles, on the WordPress.org Developer Blog: <a href="https://developer.wordpress.org/news/2023/05/customizing-core-block-style-variations-via-theme-json/">Customizing core block style variations via theme.json</a>.</p>



<h2 class="wp-block-heading">Removing unwanted core block styles</h2>



<p>There are two functions you’ll need to address:&nbsp;</p>



<ul class="wp-block-list">
<li>The PHP function <a href="https://developer.wordpress.org/reference/functions/unregister_block_style/">unregister_block_style()</a></li>



<li>The JavaScript function <a href="https://developer.wordpress.org/block-editor/reference-guides/block-api/block-styles/">unregisterBlockStyle()</a>&nbsp;</li>
</ul>



<p>Block styles can only be unregistered in the same coding language used to register them. Core blocks are all registered via JavaScript. The example code removes the extra block style for the image block called rounded.</p>



<div class="wp-block-kevinbatdorf-code-block-pro"><span></span><span tabindex="0" class="code-block-pro-copy-button"></span><pre class="shiki min-dark" tabindex="0"><code><span class="line"><span>wp.domReady( function() {</span></span>
<span class="line"></span>
<span class="line"><span>   wp.blocks.unregisterBlockStyle( 'core/image', [ 'rounded' ] );</span></span>
<span class="line"></span>
<span class="line"><span>} );</span></span></code></pre></div>



<h2 class="wp-block-heading">Resources to learn more</h2>



<p>For more ways to change the block editor, read <a href="https://developer.wordpress.org/news/2024/07/15-ways-to-curate-the-wordpress-editing-experience/">15 ways to curate the WordPress editing experience</a>.</p>



<p>For more articles on the various styles, there are great articles on the WordPress Developer blog: </p>



<ul class="wp-block-list">
<li><a href="https://developer.wordpress.org/news/2024/06/21/styling-sections-nested-elements-and-more-with-block-style-variations-in-wordpress-6-6/">Styling sections, nested elements, and more with Block Style Variations in WordPress 6.6</a></li>



<li><a href="https://developer.wordpress.org/news/2022/12/leveraging-theme-json-and-per-block-styles-for-more-performant-themes/">Leveraging theme.json and per-block styles for more performant themes</a></li>



<li><a href="https://developer.wordpress.org/news/2023/04/per-block-css-with-theme-json/">Per-block CSS with theme.json</a></li>



<li><a href="https://developer.wordpress.org/news/2023/07/beyond-block-styles-part-1-using-the-wordpress-scripts-package-with-themes/">Beyond block styles, part 1: using the WordPress scripts package with themes</a></li>



<li><a href="https://developer.wordpress.org/news/2023/07/beyond-block-styles-part-2-building-a-custom-style-for-the-separator-block/">Beyond block styles, part 2: building a custom style for the Separator block</a></li>



<li><a href="https://developer.wordpress.org/news/2023/08/beyond-block-styles-part-3-building-custom-design-tools/">Beyond block styles, part 3: building custom design tools</a></li>
</ul>



<p><em>What are other questions you might have about changing core blocks via the Global Styles? Leave a comment</em> or <a href="https://discord.gg/ZyuRa2C6">join us on Discord</a></p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 02 May 2025 14:04:40 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:18:"Birgit Pauli-Haack";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:9;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:52:"Do The Woo Community: Friday Shares, May 2, 2025 v17";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:43:"https://dothewoo.io/?post_type=blog&p=96493";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:54:"https://dothewoo.io/blog/friday-shares-may-2-2025-v17/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:40:"Friday shares from us continues to grow.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 02 May 2025 12:58:07 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:5:"BobWP";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:10;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:68:"Do The Woo Community: Life’s Jerks and Flows: Lessons from Ma Joad";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:43:"https://dothewoo.io/?post_type=blog&p=96467";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:68:"https://dothewoo.io/blog/lifes-jerks-and-flows-lessons-from-ma-joad/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:141:"Life's either a series of jerks, or a flow like a stream, according to Ma Joad. We all ride those currents—career changes are no different.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 02 May 2025 08:40:05 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:5:"BobWP";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:11;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:107:"Do The Woo Community: Beyond Code: How the WordPress Photo Directory is Building a More Inclusive Community";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:43:"https://dothewoo.io/?post_type=blog&p=96469";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:110:"https://dothewoo.io/blog/beyond-code-how-the-wordpress-photo-directory-is-building-a-more-inclusive-community/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:228:"The WordPress Photo Directory offers an inclusive way to contribute, showcasing diverse cultures through photography. Anyone can participate, enhancing community creativity while gaining valuable skills and a sense of belonging.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 01 May 2025 13:35:32 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:5:"BobWP";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:12;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:58:"Do The Woo Community: Tech, You Gotta Love It. (Sometimes)";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:43:"https://dothewoo.io/?post_type=blog&p=96455";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:58:"https://dothewoo.io/blog/tech-you-gotta-love-it-sometimes/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:140:"Tech woes march on: hardware fails, Slack gets ditched, and buried settings lurk like ninjas. Fingers crossed for a happy tech day tomorrow!";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 01 May 2025 09:42:42 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:5:"BobWP";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:13;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:55:"WordPress.org blog: WordPress 6.8.1 Maintenance Release";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:35:"https://wordpress.org/news/?p=18721";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:71:"https://wordpress.org/news/2025/04/wordpress-6-8-1-maintenance-release/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:6925:"<h2 class="wp-block-heading">WordPress 6.8.1 is now available!</h2>



<p>This minor release includes fixes for 15 bugs <a href="https://core.trac.wordpress.org/query?resolution=fixed&milestone=6.8.1&group=component&col=id&col=summary&col=milestone&col=owner&col=type&col=status&col=priority&order=priority">throughout Core</a> and <a href="https://github.com/WordPress/wordpress-develop/pull/8752">the Block Editor</a> addressing issues affecting multiple areas of WordPress including the block editor, multisite, and REST API. For a full list of bug fixes, please refer to the <a href="https://make.wordpress.org/core/2025/04/28/wordpress-6-8-1-rc1-is-now-available/">release candidate announcement.</a></p>



<p>WordPress 6.8.1 is a short-cycle maintenance release. More maintenance releases will be made available throughout 2025.</p>



<p>If you have sites that support automatic background updates, the update process will begin automatically.</p>



<p>You can <a href="https://wordpress.org/wordpress-6.8.1.zip">download WordPress 6.8.1 from WordPress.org</a>, or visit your WordPress Dashboard, click “Updates”, and then click “Update Now”. For more information on this release, please <a href="https://wordpress.org/support/wordpress-version/version-6-8-1">visit the HelpHub site</a>.</p>



<h2 class="wp-block-heading">Thank you to these WordPress contributors</h2>



<p>This release was led by <a href="https://profiles.wordpress.org/jorbin/">Aaron Jorbin</a>.</p>



<p>WordPress 6.8.1 would not have been possible without the contributions of the following people. Their asynchronous coordination to deliver maintenance fixes into a stable release is a testament to the power and capability of the WordPress community.</p>



<p class="is-style-wporg-props-medium"><a href="https://profiles.wordpress.org/jorbin">Aaron Jorbin</a>, <a href="https://profiles.wordpress.org/adamsilverstein">Adam Silverstein</a>, <a href="https://profiles.wordpress.org/wildworks">Aki Hamano</a>, <a href="https://profiles.wordpress.org/ankitmaru">Ankit Panchal</a>, <a href="https://profiles.wordpress.org/bernhard-reiter">bernhard-reiter</a>, <a href="https://profiles.wordpress.org/poena">Carolina Nymark</a>, <a href="https://profiles.wordpress.org/codeamp">Code Amp</a>, <a href="https://profiles.wordpress.org/talldanwp">Daniel Richards</a>, <a href="https://profiles.wordpress.org/davidbaumwald">David Baumwald</a>, <a href="https://profiles.wordpress.org/justlevine">David Levine</a>, <a href="https://profiles.wordpress.org/dilipbheda">Dilip Bheda</a>, <a href="https://profiles.wordpress.org/dd32">Dion Hulse</a>, <a href="https://profiles.wordpress.org/dsawyers">dsawyers</a>, <a href="https://profiles.wordpress.org/eduwass">eduwass</a>, <a href="https://profiles.wordpress.org/ethitter">Erick Hitter</a>, <a href="https://profiles.wordpress.org/estelaris/">Estela Rueda</a>, <a href="https://profiles.wordpress.org/fabiankaegy">Fabian Kägy</a>, <a href="https://profiles.wordpress.org/mamaduka">George Mamadashvili</a>, <a href="https://profiles.wordpress.org/gziolo">Greg Ziółkowski</a>, <a href="https://profiles.wordpress.org/kabir93">H. Kabir</a>, <a href="https://profiles.wordpress.org/hideishi">hideishi</a>, <a href="https://profiles.wordpress.org/abcd95">Himanshu Pathak</a>, <a href="https://profiles.wordpress.org/jarekmorawski">jarekmorawski</a>, <a href="https://profiles.wordpress.org/audrasjb">Jb Audras</a>, <a href="https://profiles.wordpress.org/JeffPaul">Jeffrey Paul</a>, <a href="https://profiles.wordpress.org/jeffr0">Jeffro</a>, <a href="https://profiles.wordpress.org/jeremyfelt">Jeremy Felt</a>, <a href="https://profiles.wordpress.org/joedolson">Joe Dolson</a>, <a href="https://profiles.wordpress.org/joemcgill">Joe McGill</a>, <a href="https://profiles.wordpress.org/joen">Joen A.</a>, <a href="https://profiles.wordpress.org/johnjamesjacoby">John James Jacoby</a>, <a href="https://profiles.wordpress.org/desrosj">Jonathan Desrosiers</a>, <a href="https://profiles.wordpress.org/spacedmonkey">Jonny Harris</a>, <a href="https://profiles.wordpress.org/verygoode">Joshua Goode</a>, <a href="https://profiles.wordpress.org/karthikeya01">Karthikeya Bethu</a>, <a href="https://profiles.wordpress.org/iamkingsleyf">Kingsley Felix</a>, <a href="https://profiles.wordpress.org/obenland">Konstantin Obenland</a>, <a href="https://profiles.wordpress.org/0mirka00">Lena Morita</a>, <a href="https://profiles.wordpress.org/lilgames">LilGames</a>, <a href="https://profiles.wordpress.org/megane9988">megane9988</a>, <a href="https://profiles.wordpress.org/marktimemedia">Michelle Schulp Hunt</a>, <a href="https://profiles.wordpress.org/presstoke">Mitchell Austin</a>, <a href="https://profiles.wordpress.org/mukesh27">Mukesh Panchal</a>, <a href="https://profiles.wordpress.org/nickwilmot">nickwilmot</a>, <a href="https://profiles.wordpress.org/nikunj8866">Nikunj Hatkar</a>, <a href="https://profiles.wordpress.org/swissspidy">Pascal Birchler</a>, <a href="https://profiles.wordpress.org/pbiron">Paul Biron</a>, <a href="https://profiles.wordpress.org/peterwilsoncc">Peter Wilson</a>, <a href="https://profiles.wordpress.org/pratiklondhe">Pratik Londhe</a>, <a href="https://profiles.wordpress.org/presskopp">Presskopp</a>, <a href="https://profiles.wordpress.org/sainathpoojary">Sainath Poojary</a>, <a href="https://profiles.wordpress.org/sc0ttkclark">Scott Kingsley Clark</a>, <a href="https://profiles.wordpress.org/coffee2code/">Scott Reilly</a>, <a href="https://profiles.wordpress.org/SergeyBiryukov">Sergey Biryukov</a>, <a href="https://profiles.wordpress.org/SirLouen">SirLouen</a>, <a href="https://profiles.wordpress.org/soean">Sören Wünsch</a>, <a href="https://profiles.wordpress.org/sourav08">Sourav Pahwa</a>, <a href="https://profiles.wordpress.org/sabernhardt">Stephen Bernhardt</a>, <a href="https://profiles.wordpress.org/takuword">takuword</a>, <a href="https://profiles.wordpress.org/tusharaddweb">Tushar Patel</a>, <a href="https://profiles.wordpress.org/westonruter">Weston Ruter</a>, <a href="https://profiles.wordpress.org/yogeshbhutkar">Yogesh Bhutkar</a></p>



<h2 class="wp-block-heading">How to contribute</h2>



<p>To get involved in WordPress core development, head over to Trac, <a href="https://core.trac.wordpress.org/report/6">pick a ticket</a>, and join the conversation in the <a href="https://wordpress.slack.com/archives/C02RQBWTW">#core</a> and <a href="https://wordpress.slack.com/archives/C080HLPP2Q6">#6-8-release-leads</a> channels. Need help? Check out the <a href="https://make.wordpress.org/core/handbook/">Core Contributor Handbook</a>.</p>



<p><em>Props to <a href="https://profiles.wordpress.org/estelaris/" class="mention"><span class="mentions-prefix">@</span>estelaris</a> and <a href="https://profiles.wordpress.org/joedolson/" class="mention"><span class="mentions-prefix">@</span>joedolson</a> for proofreading.</em></p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Wed, 30 Apr 2025 17:17:09 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:12:"Aaron Jorbin";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:14;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:87:"WPTavern: #167 – Bud Kraus on Podcasting and Finding Inspiration in WordPress Stories";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:48:"https://wptavern.com/?post_type=podcast&p=195280";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:101:"https://wptavern.com/podcast/167-bud-kraus-on-podcasting-and-finding-inspiration-in-wordpress-stories";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:46549:"Transcript<div>
<p>[00:00:19] Nathan Wrigley: Welcome to the Jukebox Podcast from WP Tavern. My name is Nathan Wrigley.</p>



<p>Jukebox is a podcast which is dedicated to all things WordPress. The people, the events, the plugins, the blocks, the themes, and in this case, podcasting and finding inspiration in WordPress stories.</p>



<p>If you&#8217;d like to subscribe to the podcast, you can do that by searching for WP Tavern in your podcast player of choice. Or by going to wptavern.com/feed/podcast, and you can copy that URL into most podcast players.</p>



<p>If you have a topic that you&#8217;d like us to feature on the podcast, I&#8217;m keen to hear from you and hopefully get you, or your idea, featured on the show. Head to wptavern.com/contact/jukebox, and use the form there.</p>



<p>So on the podcast today we have Bud Kraus.</p>



<p>Bud&#8217;s name might ring a bell in the WordPress community, not only for his teaching and writing, but also as the host of the Seriously, BUD? Podcast.</p>



<p>Bud&#8217;s WordPress journey started back in 2009 when a client told him he had to learn WordPress, and ever since he&#8217;s been immersed in all aspects of it. From building sites to teaching, to creating content for major WordPress businesses. These days, Bud calls himself a WordPress content creative, focusing mainly on producing articles, videos, and of course, his own podcast.</p>



<p>In this episode, we turn the microphone around on Bud to talk about his transition from site building to content creation. He shares how the Seriously BUD? podcast came out of a desire to have real, unscripted conversations with people from around the WordPress community. Chats that go beyond plugins and code and dig into the stories, quirks and lives of the people behind the tech.</p>



<p>We talk about the format of the show, Bud&#8217;s technique for bringing out interesting stories, and the importance of really listening to guests. Bud explains his approach to podcast technology, why he thinks the tech stack doesn&#8217;t have to be intimidating or expensive, and he also offers insights into the editing process that makes his interviews come alive.</p>



<p>Towards the end, Bud shares his thoughts on the future of podcasting. Why it&#8217;s still such an appealing medium, and what it takes to keep a show fresh and enjoyable for the long haul.</p>



<p>If you&#8217;re curious about podcasting, interested in the art of conversation, or are thinking about starting your own show, this episode is for you.</p>



<p>If you&#8217;re interested in finding out more, you can find all of the links in the show notes by heading to wptavern.com/podcast. Where you&#8217;ll find all the other episodes as well.</p>



<p>And so without further delay, I bring you Bud Kraus.</p>



<p>I am joined on the podcast by Bud Kraus. Hello.</p>



<p>[00:03:12] Bud Kraus: Hi, Nathan. How are you?</p>



<p>[00:03:13] Nathan Wrigley: Yeah, very good. Nice to chat with you. The tables are turned because not that many weeks ago I appeared on your podcast, which is going to be the focus of this podcast today. So it&#8217;s kind of inception, WordPress Podcast inception.</p>



<p>[00:03:27] Bud Kraus: You know, podcasting is getting very incestuous. I mean, everybody&#8217;s on everybody&#8217;s show. It&#8217;s more convoluted than the Hapsburg Empire. I mean, it really is.</p>



<p>[00:03:36] Nathan Wrigley: That&#8217;s a description. I like it. Before we begin and start to explore your podcast, why you did it and so on, let&#8217;s just get into who you are. So a couple of minutes, really, your potted bio. Tell us anything that you like. This is obviously a WordPress podcast, so centering it around your WordPress journey would probably be ideal. So, couple of minutes, over to you.</p>



<p>[00:03:54] Bud Kraus: Alright. Well, I have a little elevator speech on this, or a little longer than an elevator. But in 2009 I had a friend client who sat me down at the Oyster Bar in New York City and said, you know, you really need to learn WordPress. And I said, no, I&#8217;m a Rage Against the Machine kind of guy.</p>



<p>And then he got very serious and then I started to learn. And once I learned that you could make a child theme and what that was all about, you know, I was hooked. And then I started teaching WordPress at FIT in New York City and everywhere. I was just teaching like crazy. And I was making websites, and eventually I got to hate making websites because I just wanted to do it my way, not the client&#8217;s way. That&#8217;s not really a good attitude.</p>



<p>And eventually in the last couple of years, I&#8217;ve really gotten into creating WordPress content for WordPress businesses. So I call myself a WordPress content creative. That also includes, of course, podcasting and my show Seriously, BUD? So that&#8217;s it.</p>



<p>[00:04:44] Nathan Wrigley: So are you still working with WordPress in any way, shape, or form for other people, or is it primarily just for yourself now?</p>



<p>[00:04:51] Bud Kraus: I try not to, unless you beg me. Now, occasionally, no, I do have a couple of sites that I do updates for. I could get rid of that business. It&#8217;s not really much, but I just like doing it and I like the people and so, you know, I do it. But I have my own two sites, joyofwp.com and seriouslybud.com. And I am the client, so I get to decide everything and that&#8217;s what I like about it.</p>



<p>So yes, I don&#8217;t want to stop doing WordPress, okay, the site stuff, because it will diminish my ability to write and create WordPress content, but I don&#8217;t want to get paid to do it for clients.</p>



<p>[00:05:27] Nathan Wrigley: And was the intuition to move into content, was that purposeful? In other words, did you sit yourself down and say, do you know what? I&#8217;m fed up of doing the client thing, I want to stay in the WordPress space, so what can I do? Well, content seems like a good thing. Or was it more an evolution where you just wrote a few pieces and discovered that you enjoyed that?</p>



<p>[00:05:44] Bud Kraus: Well, I am not that smart. The first way to do it, like to think logically I should be doing this, I don&#8217;t go that way. So, Vikas Singhal from in InstaWP got me really on this track a couple years ago when we first met online. And he said, why don&#8217;t you create a video for me on security? I said, okay. And I did.</p>



<p>And then I started doing some other things, and then Marcus Burnette said, why don&#8217;t you write articles for GoDaddy? And I started doing that. And I said, you know, I have written articles before, but I never got paid for it. And I thought like, you actually can get paid to create WordPress content. No way.</p>



<p>So that turned into, now I write for Hostinger on a regular basis. I write for Kinsta on a regular basis. And I could write for, name it, okay. But that&#8217;s not, the problem is I can only, you know, one person and I&#8217;m not interested in cloning myself and making myself into a content agency. And so this is it.</p>



<p>And the podcast, well, we&#8217;ll get into that. But I wish I were smart enough to plan. Life is what happens to you while you&#8217;re busy making other plans. That&#8217;s just the way it is.</p>



<p>[00:06:48] Nathan Wrigley: Yeah, I think the same is true for me. I was building client websites and straight into, I mean, all I do basically is create podcasts. I&#8217;ve never written much. I don&#8217;t really have the capacity to overcome the blank page at the beginning. But I stumbled into podcasting and it slowly became what I did.</p>



<p>And there was never an intention there. It surprised me that the WordPress ecosystem is actually big enough that that kind of thing is possible. Now, if everybody in the WordPress space decided to make a podcast, both you and I would be sunk.</p>



<p>[00:07:22] Bud Kraus: Wait a minute. Pardon for the interruption, but doesn&#8217;t everybody in the WordPress space have a podcast. Where are you going with this?</p>



<p>[00:07:29] Nathan Wrigley: Yeah, it does definitely sometimes feel that way. But if everybody did it, then we&#8217;d all be sunk. But the fact of the matter is, there are literally millions of people out there using WordPress. And so there&#8217;s a niche within a niche. You know, you can find, I don&#8217;t know, maybe you do a security podcast in the WordPress space or a community podcast or what have you.</p>



<p>You&#8217;ve settled on, Seriously, BUD? Tell us what that is then, and how you&#8217;ve settled on that format? And what is the format?</p>



<p>[00:07:55] Bud Kraus: Well, the idea came in an instant. This was after years of saying to Bob Dunn, you know, I will never make a podcast. What are you doing podcasts for? This is the most ridiculous thing. Why does anybody ever make a podcast? So I was not looking to do this.</p>



<p>But I was in an Uber leaving WordCamp US 2023 in Washington. I&#8217;m telling you, like a lightning bolt, this thing hit my head and it went like this. You know, I wish I could spend more time with Nathan Wrigley. I just got to wave at him and like say hi, and that was about it. But boy, I&#8217;d certainly like to know about his childhood, his life, whatever, I&#8217;d like to spend more time, and have a conversation about his life.</p>



<p>And in that instant, the show was born. Now, it wasn&#8217;t called Seriously, BUD? Right away it was called In Conversation With, but that&#8217;s such a boring subject title. But I knew right from the get go that this is what I wanted to do. And I also said, I don&#8217;t care if I ever get sponsors. Now I do. I don&#8217;t care if I ever get listeners. Now I do. But I just wanted to do it for myself because, you know, it was like, what do they say, scratch an itch or whatever it is. Itch a scratch or scratch an itch.</p>



<p>So that was it. And about four or five months later, I did my first episode with Marcus. And it&#8217;s been every Friday at eight o&#8217;clock in the morning, in Eastern Standard time, a new episode comes out and I&#8217;ve, I don&#8217;t miss. The really cool thing is that the stories are phenomenal. I mean, there is a certain, similarities between people, there definitely is and I can write a book now about the WordPress community.</p>



<p>And I&#8217;m also, you know, the purpose of the show too is not just to satisfy me, but to give people an opportunity to tell their stories. And not surprisingly, people like to talk about themselves. You know, so my job is sort of, let them do that, get out of the way, hopefully get them to say something that they don&#8217;t really want to say. It&#8217;s just been really, it&#8217;s taken over my life.</p>



<p>[00:09:47] Nathan Wrigley: Have you always been, how to describe it, a raconteur? Have you always been the kind of character that can fill a silence? Or is this something that you&#8217;ve had to develop and get out of your comfort zone a little bit?</p>



<p>[00:09:59] Bud Kraus: No. I&#8217;ve always been pretty good at talking to people. And I really started to realise that, or sort of got into that, I took this train trip around the United States in 2018. I was gone for 19 days, went all the way around the country, and I basically would interview people. Now, you know, I didn&#8217;t record much, but I would just go around and say, when you&#8217;re on a train for that long a period of time, you get to talk to people.</p>



<p>And I started realising, my God, everybody I&#8217;m talking to has the most unbelievable story. It wasn&#8217;t like right from there, I went from that to WordPress, to my podcast. But I, you know, in a very gradual process, I started to realise that I like doing this. And the other thing is I love radio and the spoken word, and I think you do too. Most people who are in podcasting are sort of like frustrated radio personalities or whatever. I don&#8217;t feel that&#8217;s what I am, but I&#8217;ve always listened to talk radio ever since I was a little kid so, yeah, it all fits together.</p>



<p>[00:10:56] Nathan Wrigley: I feel there is a certain skill if you are going to do interviews as you do, and it, I guess it&#8217;s more of a conversation what you have. I think most of content that I create is more of an interview where the person comes and I ask a series of questions, which hopefully elicit responses.</p>



<p>But I think there is a certain character trait about that. You know, the ability to ask questions and then sit back and listen. And that is one of the things that I discovered at the beginning was the most important skill is not necessarily the question, it&#8217;s the listening. Which sounds a bit the wrong way round. But if you&#8217;re not listening to each reply as it comes out the guest&#8217;s mouth, then the follow-up question is basically, you&#8217;re just following a proforma.</p>



<p>Okay, I&#8217;m going to ask this question, and then whatever comes out of their mouth when they finish saying that, I&#8217;ll go to this question. And that, for me, has never really worked. It&#8217;s been more a case of, okay, be quiet Nathan, listen to the reply, and then hopefully the conversation will flow, because a question that you didn&#8217;t anticipate will come out of your mouth. And so I wondered if that was a part that you&#8217;ve discovered as well as I did, that listening is equally important.</p>



<p>[00:12:03] Bud Kraus: It&#8217;s probably more important now. You know, it reminds me, in fourth grade, I had a music teacher that said, it&#8217;s not the note you&#8217;re playing, it&#8217;s the next note. And that&#8217;s very much like what you&#8217;re talking about, which is you&#8217;re listening and you&#8217;re figuring out, and it&#8217;s hard. It&#8217;s not that simple, because you&#8217;re listening to what they&#8217;re saying, but you&#8217;re also thinking, what&#8217;s going to be my follow up question? What&#8217;s the natural flow of the conversation?</p>



<p>You know, and if you&#8217;re really good at it, you&#8217;re not really thinking that way. It just flows natural, you know? So if they say something, I think the first thing you need is curiosity. Where did that come from? Or, why did you do that? Or, how come you didn&#8217;t do this? And in fact, we&#8217;re releasing a book, an ebook now called Questions I Wish I Had Asked. And I have five people who have answered each one, their own question that I should have asked them, or I forgot.</p>



<p>So when it comes to this kind of stuff, you can build like a little empire with eBooks and blogs and this, you know, it&#8217;s just amazing what can grow out of a podcast.</p>



<p>[00:12:55] Nathan Wrigley: I make sure that all of the guests have access to some sort of shared show notes, so that if I have a series of questions, at least they can be prepared. But also my weapon of choice is what you can now see, but the people listening to this can&#8217;t. It&#8217;s basically a pen and a piece of paper. When something during the course of our conversation occurs to me, I know that my job is to not interrupt you with that moment&#8217;s thought, but I just scribble it down and then when you&#8217;ve finished, see if that&#8217;s where the journey takes me. But it might be that something else comes along. So yeah, it&#8217;s kind of interesting.</p>



<p>I think we&#8217;re both very lucky though, in that we are in the technology space, and WordPress in particular is this perfect medium for getting a podcast out into the real world. Because I feel that for a lot of people, that&#8217;s another hurdle that they&#8217;ve got to go through. Okay, I want to make a podcast. How do I do that? Where do I put it? How do I get a website, and all of that? And so, what do you feel about that? Do you feel that you&#8217;re in a, you know, a lucky position that you knew WordPress when you started out this whole thing?</p>



<p>[00:13:55] Bud Kraus: Yeah, but I didn&#8217;t really launch with a website. I launched just by learning the software, Descript and SquadCast and the Riverside and this and that, you know? Because I didn&#8217;t know any of this. And, you know, some people were giving me, why don&#8217;t you check this, check that? And eventually I came up with my podcast stack. How do you like that?</p>



<p>But then after I had a couple episodes out, I thought like, you know, I should have a website. And then that came along. And of course that&#8217;s easy because, you know, we both know WordPress, so that part&#8217;s done.</p>



<p>Yeah, you&#8217;re right. I mean, we&#8217;re lucky also that we&#8217;re in a community who is technologically savvy and will listen to podcasts. And so that&#8217;s another thing that&#8217;s also fortunate that there are many corporate sponsors of WordPress podcasts. Although I don&#8217;t consider myself a WordPress podcast, but you know, I guess I am.</p>



<p>[00:14:43] Nathan Wrigley: Yeah, I guess the people that you&#8217;re interviewing are definitely bound to that subject, but you are very often not dealing with WordPress too much during the conversations, which is I think kind of nice. And we&#8217;ll get onto that in a minute.</p>



<p>But, do you mind if I obsess about the tech stack there? Because it may be that there&#8217;s people listening to this who have listened to this podcast and it just comes out of their phone or it comes out of their speakers, and they&#8217;ve never really thought too much about the bits and pieces that go on in the background. So let&#8217;s just share our similarities and differences there. What would you say is the tech stack that you&#8217;ve got? What are the three or four things which are essential that you&#8217;ve learned?</p>



<p>[00:15:16] Bud Kraus: Well, I start with SquadCast for the recording. And I&#8217;m not an expert on this because I&#8217;m still new at this and I don&#8217;t, you know, I haven&#8217;t used, I&#8217;ve experimented a little bit with Riverside, and I know there&#8217;s a whole bunch of other ones and free ones and this one, but SquadCast, you pay a little bit of money, so what. And I think it&#8217;s really good. You can do audio, you can do video, you can do all kinds of stuff. And then I use Descript to do the editing.</p>



<p>And you know, everybody has a different workflow. I will use the timeline, I will use the text-based editing. I&#8217;ll do it my way, you&#8217;ll do it your way. It&#8217;s always kind of interesting to learn how people use these tools in different ways. And then after the show is edited, and personally I find the editing to be the best part of the show, which is really, you know, you think talking to the people. Well, that&#8217;s fun but, you know, Nathan, going back to what you were talking about, about listening, I don&#8217;t really hear the show until I start editing.</p>



<p>That&#8217;s the first time I really hear it, because I&#8217;m not concentrating on the questions. I&#8217;m now focused on what the guest had to say. And then it&#8217;s a very creative process. Do you want to shorten the gaps between pauses? Do you want to take out all the ums, sos, you knows, all that stuff? You know, all those words that, the filler words, or do you want to let it fly? Do the Rob Cairn&#8217;s approach, no editing. There&#8217;s different ways of doing this.</p>



<p>I am more of a particular on the editing. I like to really clean things up and cut things out, especially if it&#8217;s me talking. I did this episode with Jeff Chandler where we went on and on and on about sports. That all got ripped out because like, come on, we&#8217;re both from Cleveland, Ohio. So you know, we start talking about Cleveland sports, get rid of this, no one&#8217;s going to listen. So I try to think of like the audience too.</p>



<p>But anyway, the editing is the most fun. A little tedious, but I think the most interesting part. And when it&#8217;s all done, then I run the file through, what did he take? It was a, I forgot what it&#8217;s called. Anyway, I run it through like a cleaner and then I published it to Buzzsprout, which seems to be doing a very good job publishing and putting it on all these platforms.</p>



<p>Because you don&#8217;t want, you need to have a podcast distribution service. You can&#8217;t go to all these different services and do it yourself. So it&#8217;s kind of, you know, it was sort of, because I had an understanding of technology and how things worked. The learning curve wasn&#8217;t too bad. It was pretty easy actually, when you think about it.</p>



<p>[00:17:37] Nathan Wrigley: I think when I started, I think I started in 2016 or something, it was definitely, it wasn&#8217;t difficult at that point. Many of the hurdles have been overcome, but it&#8217;s certainly easier now. When I did it, I began with Skype, which has just died actually, or at least Microsoft have said they&#8217;re going to kill it off.</p>



<p>I bought an app which would go on the Mac, and then that would record. But there was no clever sort of software like you described. We&#8217;re using now SquadCast, which is basically, you open it in the browser, send a link to somebody, and so long as they&#8217;ve got access to the internet and a microphone, we are good to go.</p>



<p>And it&#8217;ll record everything in separate isolated tracks. And then, as you said, both of us will throw it into Descript, which is a piece of software, it&#8217;s actually available in the browser, but you can also download it as app. And you can do all sorts. It&#8217;s amazing what it can do actually. It will bind the transcript that it creates to the timeline. And so you can delete portions of text by highlighting as if you&#8217;re in a Google Doc or something like that, so delete sentences and what have you. And it&#8217;s really sublime. So it&#8217;s much, much more straightforward.</p>



<p>But I&#8217;m, a bit like you, I&#8217;ve really enjoyed the editing experience because you can fiddle with it, can&#8217;t you? And you can decide which bits stay on the edit room floor and which bits go in, and sometimes you go off on different tangents. But the other side of it, that&#8217;s the software side. What are you using to actually record the audio? So microphones and computers and any of that.</p>



<p>[00:18:59] Bud Kraus: Okay, well, thank you Omnisend, my first sponsor. I have to get that in there, because they bought me, they said, we don&#8217;t want you using that crummy microphone anymore. Go out and buy yourself a nice microphone. Which is, it&#8217;s the same thing that you&#8217;re using. What is it?</p>



<p>[00:19:11] Nathan Wrigley: It&#8217;s a Shure MV7.</p>



<p>[00:19:13] Bud Kraus: Yes. And I really like it a lot. I have it on my desktop. I have a desktop stand for it. I have a hard time doing a boom microphone. So it&#8217;s a desktop, and it&#8217;s nice. But you know, you don&#8217;t need, I think a lot of people know, you don&#8217;t need a lot of heavy investment to do a podcast. It&#8217;s almost, talk about a barrier to entry being nothing or next to nothing. Podcasting certainly is that.</p>



<p>[00:19:35] Nathan Wrigley: Yeah, you really, really need very little. You and I have got this modestly priced mic. It&#8217;s not the top tier and it certainly isn&#8217;t the bottom tier. But when I began, for probably four or five years, I had a really cheap mic. And it&#8217;s about where you position it and how far away you are from it and refining all of that and, you know, not breathing too heavily over it and different bits and pieces.</p>



<p>But the barrier to entry really is, if you&#8217;ve got a phone, you&#8217;ve got everything that you need, because it&#8217;s got its own microphone built in, it&#8217;ll do a credible job. The audio software will kind of clean it up nicely. And the website, the WordPressy bit is icing on the cake. If you really wanted to keep it cheap and cheerful, Google&#8217;s YouTube will suffice. Really, you could just upload it to YouTube and they now offer podcast as an option. It doesn&#8217;t have to be a video. Well, it needs to be a video, but it doesn&#8217;t have to actually be a picture of you and your guest or anything like that.</p>



<p>[00:20:28] Bud Kraus: I upload, I mean I know I&#8217;m interrupting you, but I have a question. So, where do you think the future of all this podcasting is going? I mean, what&#8217;s podcasting going to be like in a couple of years, according to you?</p>



<p>[00:20:38] Nathan Wrigley: I will give you the answer to that in about.</p>



<p>[00:20:40] Bud Kraus: I&#8217;m sorry for interrupting.</p>



<p>[00:20:41] Nathan Wrigley: No, no it&#8217;s fine. I will give you the answer to that in a few weeks time. I&#8217;m going to, one of the biggest podcast shows in the world is held in London every May. I&#8217;m going to be going to that. 10,000 attendees. You know, I&#8217;m in this little WordPress bubble of podcasting, but it&#8217;s an absolutely gigantic industry. It&#8217;s occupying one of the biggest convention spaces in the UK in London, in Islington, if you&#8217;re a person that knows London. I will give you more of an answer then because it&#8217;ll be interesting to see what the trends are.</p>



<p>However, we did have a bit of a bump in credibility in podcasting for a while, and then I think it plateaued a little bit or perhaps went down. But more recently, I think it&#8217;s been going up again.</p>



<p>The reason I think it remains popular is the same reason that talk radio hasn&#8217;t gone away, is because you can really get into the subject matter. If you&#8217;re really into WordPress, then there&#8217;s a bunch of WordPress things, or if you&#8217;re into, I don&#8217;t know, skiing, there&#8217;ll be skiing podcast and what have you. And the crucial bit for me is that you can do other things at the same time.</p>



<p>[00:21:43] Bud Kraus: Well, that&#8217;s where I was going to go too, which is talk about a mobile media. You could take it wherever you go. You don&#8217;t have to sit at a computer or anything, it&#8217;s in your headphones.</p>



<p>[00:21:52] Nathan Wrigley: If you&#8217;re stuck in your own house, you know, just doing chores, it can be done at the same time. And even things like mowing the lawn, which is typically quite loud and probably would&#8217;ve gotten in the way, the noise canceling headphones that you can have nowadays. And for me, basically, when I&#8217;m not doing something which requires my eyes to be on something, if I&#8217;m alone and I&#8217;ve got nothing else to do, you can more or less guarantee that I will have a podcast plugged into my headphones.</p>



<p>[00:22:19] Bud Kraus: Well, you know, this is the perfect medium for the legally blind. I ought to know, I&#8217;m speaking from experience here, but it is, it&#8217;s all ears.</p>



<p>[00:22:27] Nathan Wrigley: So, I don&#8217;t know. I don&#8217;t really have an intuition about where it&#8217;s going to go, but I don&#8217;t see any signs of it as a medium going away. Because I think we all love to listen, well, not all of us, but many of us really enjoy listening to other people and their stories, and their trials and their tribulations and their expertise and whatever it may be. I think it&#8217;s going to stick around</p>



<p>[00:22:50] Bud Kraus: Now, you&#8217;re so lucky because you have those golden pipes, I have nothing. I have this old man&#8217;s voice. God, I would do anything like if AI could clean me up and make me sound like you, I know it could. That gives me an idea.</p>



<p>[00:23:02] Nathan Wrigley: You&#8217;re very kind. I&#8217;m not sure you&#8217;ve captured entirely what my.</p>



<p>[00:23:06] Bud Kraus: Oh no, I remember, whoa, hold on a second. I first saw you and heard your voice when you were doing the agency summit and you&#8217;re doing all those intros. I don&#8217;t know how long ago was that?</p>



<p>[00:23:15] Nathan Wrigley: Oh, probably about, I don&#8217;t know, 7 years or something like that, yeah.</p>



<p>[00:23:18] Bud Kraus: Yeah. And I was listening. I go, oh, I&#8217;d like to. Who&#8217;s this guy with a voice?</p>



<p>[00:23:22] Nathan Wrigley: You know we talked about editing bits out.</p>



<p>[00:23:25] Bud Kraus: That&#8217;s going to be edited out. Don&#8217;t you dare. You better not or you&#8217;ll be hearing from me.</p>



<p>[00:23:30] Nathan Wrigley: We&#8217;ll see. We&#8217;ll see if it makes it. Okay, let&#8217;s, dig into your podcast. We&#8217;ve talked a lot about how we go about making podcasts. What is the plan? What do you do during that podcast? Yeah, just tell us what you do on typical episode and what are you trying to achieve there.</p>



<p>[00:23:44] Bud Kraus: Okay. Well, I&#8217;m trying to get an unexpected conversation. I always say it&#8217;s an unexpected conversation of so and so in the WordPress community. What I do is a guest first has to come to my site and fill out a form, which everybody says is ridiculously long. And I mean, you know, I ask about like almost, every question I could think of. What&#8217;s your blood type? Things like that.</p>



<p>And then I, before the show starts, I really don&#8217;t do any prep, very little. But before the show starts, I&#8217;ll look at what you submitted, I&#8217;ll look for a question, my first question, whatever it is. And it&#8217;s not going to be like, where were you born? Okay. It&#8217;s going to be like how come you like to smoke or something, you know? What&#8217;s that? It&#8217;ll be something like that.</p>



<p>Off we go. The show does not follow a linear progression, because that&#8217;s, I look at it like if I&#8217;m talking to you like at a bar or something like that. I&#8217;m not going to start from the beginning of your life and go to the end. I&#8217;m going to go back and forth and whatever. It&#8217;s just going to be, it&#8217;s sort of like a show about nothing, you know?</p>



<p>[00:24:35] Nathan Wrigley: It&#8217;s like the Seinfeld of podcasts.</p>



<p>[00:24:38] Bud Kraus: Right, and it works. Seinfeld worked. So I figured maybe this will work. So it goes back and forth and I try not to talk too much about WordPress. Usually I&#8217;ll say something like, okay, let&#8217;s talk about WordPress. You know, what do you do? And then if I feel like the guest is talking about anything, I&#8217;ll just jump in and go, okay, that&#8217;s enough of that, and we&#8217;ll go on to something else. When you&#8217;re in real life, at least for me, I&#8217;m rude enough to say to somebody, okay, enough, let&#8217;s go on.</p>



<p>[00:25:01] Nathan Wrigley: So the intention then is to sort of figure out the personality behind the thing. So let&#8217;s say, for example, it&#8217;s somebody that we&#8217;ve all heard of in the WordPress space, they&#8217;ve got a thing, we&#8217;re all familiar with the thing that they&#8217;ve got. Okay, we know that about them. That&#8217;s a given. So your idea is to drill in and figure out, okay, just tell us something quirky and interesting about you, your life, and let&#8217;s talk about that.</p>



<p>[00:25:23] Bud Kraus: Yeah, I mean, I try to ask like crazy questions to elicit some unusual, crazy response. And sometimes it happens, you know? Sometimes it does and sometimes it does. A couple of things. one I find the older you are, the more interesting you are to me, because you&#8217;ve lived a life. I don&#8217;t have anything against 25 year olds. I&#8217;ve had them on the show, but they don&#8217;t have the breadth of time that I&#8217;m looking for. That&#8217;s one thing.</p>



<p>And the other thing is some of the people I know very well, and some of the people I don&#8217;t know at all. I think Brian Gardner, I didn&#8217;t know Brian, and I had a great time talking, you know? or Andrew Palmer, wow, those were so much fun. So it isn&#8217;t necessarily. In fact, to me, those are the best episodes when I don&#8217;t know the person, because I just, I&#8217;m more inquisitive.</p>



<p>[00:26:07] Nathan Wrigley: How do you handle, or maybe you&#8217;ve not had one yet, how do you handle the guest who is not quite as talkative as you&#8217;d hoped for?</p>



<p>[00:26:16] Bud Kraus: Boy, that&#8217;s a good question. I&#8217;ve had a few of those. I just do the best I can. You know, I mean, everybody&#8217;s a little different. You know, the other thing too is I do interviews with people that English is not their first language, and you&#8217;ve got to keep that in mind. You&#8217;ve got to give them the space to go slow, let them talk, and then do a lot of editing.</p>



<p>Because what they tend to do is have what I call warmup words, where they&#8217;ll say the, the, the, the, and I don&#8217;t want four the&#8217;s, one is enough, So I&#8217;ll cut out the three the&#8217;s. That&#8217;s very typical of somebody where English is not the native language, because they&#8217;re thinking of how to say something. And I don&#8217;t necessarily think that makes for a good listening experience. So out it goes, and then they sound really good. You know, and I can think of a whole lot of people that, you know, I&#8217;d made them sound a whole lot better.</p>



<p>Now, I want to tell you another little quirky thing about the show. I always think like, well, when I do Nathan Wrigley, which I&#8217;ve done, right? wow, everybody&#8217;s going to be listening to that episode, you know? Because he&#8217;s so well known. Now this is not necessarily you Nathan, but it doesn&#8217;t work that way. It does not work that way. At the end of the day, I&#8217;ve realised I don&#8217;t know how many people listen to an episode, there&#8217;s so many factors. But one of them is not how well known they are. That is not a factor. Contrary to Bob Dunn, who when I first started this, he said, well, if they know the person, if people are really well known, then everybody will listen to that episode. Not true.</p>



<p>[00:27:41] Nathan Wrigley: Well, I guess maybe there&#8217;s that whole thing, who would listen to a podcast with me on it, because they can always listen to podcast with me on it, because that&#8217;s what I do. So yeah, that makes sense. And also, if you&#8217;ve heard from them, whoever the guest may be in a thousand different places, then yeah, I can understand that.</p>



<p>[00:27:57] Bud Kraus: It turned out to be sort of like the lesser known people, if you will. They get more plays. It&#8217;s just that people are just more curious. You know, they maybe they&#8217;ve heard of that person and they&#8217;re a little more curious.</p>



<p>Or, here&#8217;s the other thing that really increases. If so and so, let&#8217;s say it&#8217;s somebody in India or Australia or whatever, you know If they wanted to share this with their family and their friends, I see a lot of that kind of stuff going on. You get a lot of plays. So I look at, my podcast as not a WordPress podcast per se, and that&#8217;s why I think it has legs and, potential beyond the WordPress world.</p>



<p>[00:28:28] Nathan Wrigley: Yeah, that was another question I was going to ask. Because you&#8217;re not really bound by anything other than, here&#8217;s a human being who can speak, and they&#8217;ve got a story to tell in some way, or at least we&#8217;ll try and pull a story out of them. I was going to ask if you were going to expand it beyond WordPress and just see where it leads you.</p>



<p>[00:28:43] Bud Kraus: I have no interest, but I have people coming, friends and stuff, will you interview me and stuff? No, I&#8217;m not interested. I don&#8217;t have time for that kind of stuff, There&#8217;s enough fascinating people in the WordPress world, and it&#8217;s definitely a way for people to get to know other people in the WordPress, see that&#8217;s, you know, it&#8217;s a platform. So that they can get to know you, me, whoever it is, beyond the typical, what&#8217;s your WordPress journey stuff, or what do you do with WordPress? It&#8217;s the story. It&#8217;s the person. It&#8217;s the biography.</p>



<p>[00:29:09] Nathan Wrigley: Have you ever had episodes that you were not able to get something that you&#8217;d hoped out of it? So in other words, you pressed record and then by the time you&#8217;d finished the episode, you thought, oh gosh, that didn&#8217;t work out as anticipated, or that just went off the rails, or there was nothing of interest there. Let&#8217;s can that one and either retry it or just bin it.</p>



<p>[00:29:30] Bud Kraus: Well, I&#8217;ve had two, one episode that the interviewee said, I don&#8217;t want you to air this, so, okay, I didn&#8217;t. And then another one said, there was a whole thing about something that this person said, I had it cut out because this person did not want me to air it. So I did. But for the most part, no. Now some of them I get off and I go, wow, that was really great. I do have that, like, whoa, what a story. And then sometimes it&#8217;s just okay, it didn&#8217;t go anywhere, or I thought it&#8217;d be better or whatever. So, I don&#8217;t know. I don&#8217;t know everybody that I interview and, the more I do this, the fewer people I really know, which is good.</p>



<p>[00:30:07] Nathan Wrigley: I set the expectations, like I said, with shared show notes, but also prior to hitting record, I mean, I know you so we didn&#8217;t do so much of that, but I always make time to, maybe even like half an hour or something just to chat before we hit record. So I&#8217;ll make sure that we just talk. And very, very often, very often I will do a call with somebody who wants to be on the podcast but doesn&#8217;t know if they can do a podcast. And we&#8217;ll just have a chat. And at the end of that chat, I&#8217;ll say, that&#8217;s what it&#8217;s like. Do you want to record it another day? And I&#8217;ve yet to find somebody that&#8217;s turned me down on that basis.</p>



<p>[00:30:45] Bud Kraus: You know, that&#8217;s an excellent point. because I&#8217;ve had a few people where English is not their language and they&#8217;ll say, well, I&#8217;ve never done a podcast. Now Anna Hurko, I was the first person, right the CEO of Crocoblock. My podcast was her first, her episode went through the roof. Absolutely went through the roof. And now you can&#8217;t get her off podcasts Like I see, she&#8217;s everywhere now, which is great. I love it. And you know, English is not her first. She speaks 85 languages, so it was great. Anna was fun. It&#8217;s an adventure. I guess it&#8217;s fun. I mean, God, Nathan, I have fun at everything I do, whether I&#8217;m writing, or spot podcasting or, you know, talking to you even.</p>



<p>[00:31:23] Nathan Wrigley: Even, yeah.</p>



<p>[00:31:24] Bud Kraus: One last thing I was about before the show, I try to keep that very short. Because I don&#8217;t want to not record something that&#8217;s really good. And I&#8217;ve noticed that a lot of really good stuff was being said before and after the recording. So I don&#8217;t want for that to happen. I want it to be recorded.</p>



<p>[00:31:40] Nathan Wrigley: Yeah, it&#8217;s interesting because I have the opposite intuition. I have the intuition that if I get to know them, and put them at their ease, that rapport that is built up over 20 minutes or half an hour, will then lead to a better experience because we&#8217;ll both feel a little bit more relaxed and comfortable.</p>



<p>[00:31:54] Bud Kraus: Well, for what you do and how you do it, that makes a lot of sense. For me, it doesn&#8217;t because I&#8217;m going to leave stuff out. Now, here&#8217;s the problem though, and you probably realize this too. If you don&#8217;t know somebody, you don&#8217;t have a pre-established speaking pattern, and you tend to step on their words and they tend to step on yours. But like you and I, we pretty much have talked to each other, you know, for a while and different times. And so we now know, this is when I stop and this is when he stopped. You know, that kind of thing. It&#8217;s really hard when you&#8217;re first talking to somebody on a podcast and you don&#8217;t know them, boy, you&#8217;re going to be stepping on each other like crazy, in many cases.</p>



<p>[00:32:29] Nathan Wrigley: Yeah, that&#8217;s kind of curious. So here&#8217;s an interesting thought then. You said that you&#8217;re enjoying it, which is lovely. I still very much enjoy doing podcasting. I have to pinch myself. What about the scenario where you have made podcasting the center, the fulcrum of what you do, and how you earn your money, and the sponsorships and all of those kinds of things. And then what if you don&#8217;t enjoy it anymore? Would it be a bit like the clients, would you be willing at that point to drop podcasting? Or do you feel like this is you for life now, this is what you&#8217;re doing?</p>



<p>[00:32:58] Bud Kraus: This is it now. I have to say, there are some days, if you ask my wife, that I get, oh, it&#8217;s not growing. It&#8217;s like flattened out. It&#8217;s like, she goes, because I realise well, what else are you going to do? There&#8217;s nothing else for you to do. This is like the perfect thing for legally blind people. What else are you going to do?</p>



<p>[00:33:14] Nathan Wrigley: You&#8217;re going to keep going.</p>



<p>[00:33:15] Bud Kraus: Well, as long as, I mean, I&#8217;m not a kid. I&#8217;m sort of, you know, on the senior side of life. But there&#8217;s no reason to stop as long as I can keep doing it, you know? And I just got started doing it, so who knows.</p>



<p>[00:33:26] Nathan Wrigley: The barrier to entry is low. The enjoyment is high. So it sounds like the perfect way to spend the next few years certainly.</p>



<p>I&#8217;ve discovered that about 35 to 40 minutes is about the sweet spot for a podcast episode, because it seems be the attention span that most people have got.</p>



<p>So that is a neat little segue for me to say we&#8217;re at minute 37 and a half, which is more or less exactly in the middle of that sweet spot. So I&#8217;m going to ask you just to sort of sign off. Tell us where we can find you. Where is the website, as in the URL? I know we&#8217;ve said the name of the podcast many, many times, but where can we find you? And where do we find you on socials and things like that?</p>



<p>[00:34:03] Bud Kraus: Oh God. Alright I have a website called seriouslybud.com It&#8217;s kind of easy to remember if you can remember the name. One little quick thing, I know we&#8217;re running out of time. It doesn&#8217;t have the word WordPress or WP in it, which is different than a lot of podcasts. So it could be done for anything. And it wasn&#8217;t a name that I came up with. It was my graphic designer came up with it.</p>



<p>Anyway, seriouslybud.com Now, the good thing about that is you can get all the episodes from the past. It&#8217;s very easy to access all those episodes. And eventually I&#8217;m going to be launching a blog which will discuss the show, the people in the show, the behind the scenes, all that kinda stuff. So I&#8217;m working on that. And as far as social, just, Bud Kraus, or seriously bud? That&#8217;s Kraus, No, E. Only one S. How&#8217;s that?</p>



<p>[00:34:45] Nathan Wrigley: Perfect. I will make sure that those links and any others that we mentioned during the course of this recording go into the show notes. Head to wptavern.com/podcast, search for the episode with Bud Kraus. And, Bud, it just remains for me to say thank you very much for chatting to me today.</p>



<p>[00:35:00] Bud Kraus: It&#8217;s always a pleasure to talk to. Well, let&#8217;s just say this. The pleasure was all yours, okay.</p>



<p>[00:35:05] Nathan Wrigley: You&#8217;re too modest.</p>



<p>[00:35:07] Bud Kraus: Alright, take care.</p>
</div>



<p>On the podcast today we have <a href="https://seriouslybud.com/">Bud Kraus</a>.</p>



<p>Bud’s name might ring a bell in the WordPress community, not only for his teaching and writing, but also as the host of the “Seriously, BUD?” podcast. Bud’s WordPress journey started back in 2009 when a client told him he had to learn WordPress, and ever since he’s been immersed in all aspects of it: from building sites, to teaching, to creating content for major WordPress businesses. These days, Bud calls himself a WordPress content creative, focusing mainly on producing articles, videos, and of course, his own podcast.</p>



<p>In this episode, we turn the microphone around on Bud to talk about his transition from site building to content creation. He shares how the “Seriously, BUD?” podcast came out of a desire to have real, unscripted conversations with people from around the WordPress community. Chats that go beyond plugins and code, and dig into the stories, quirks, and lives of the people behind the tech.</p>



<p>We talk about the format of the show, Bud’s techniques for bringing out interesting stories, and the importance of really listening to guests. Bud explains his approach to podcast technology, why he thinks the tech stack doesn’t have to be intimidating or expensive, and he also offers insights into the editing process that makes his interviews come alive.</p>



<p>Towards the end, Bud shares his thoughts on the future of podcasting, why it’s still such an appealing medium, and what it takes to keep a show fresh and enjoyable for the long haul.</p>



<p>If you’re curious about podcasting, interested in the art of conversation, or are thinking of starting your own show, this episode is for you.</p>



<h2 class="wp-block-heading">Useful links</h2>



<p><a href="https://seriouslybud.com/">Seriously, BUD? podcast</a></p>



<p><a href="https://joyofwp.com/a-list-of-videos-that-i-have-made/">Joy of WP</a></p>



<p><a href="https://seriouslybud.com/get-the-questions-i-wish-i-had-asked-ebook/">Questions I Wish I Had Asked</a> &#8211; Bud&#8217;s eBook</p>



<p><a href="https://www.descript.com/">Descript</a></p>



<p><a href="https://squadcast.fm/">SquadCast</a></p>



<p><a href="https://riverside.fm/">Riverside</a></p>



<p><a href="https://www.buzzsprout.com/">Buzzsprout</a></p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Wed, 30 Apr 2025 14:00:00 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Nathan Wrigley";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:15;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:65:"Do The Woo Community: Should You Add to the Plethora of Podcasts?";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:43:"https://dothewoo.io/?post_type=blog&p=95206";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:68:"https://dothewoo.io/blog/should-you-add-to-the-plethora-of-podcasts/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:181:"Content's everywhere, and you're thinking about starting a podcast. It's all about you, your co-host, and your guests, bringing unique vibes and insights. Just make it work for you.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Wed, 30 Apr 2025 10:56:00 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:5:"BobWP";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:16;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:41:"Do The Woo Community: Trusting Technology";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:43:"https://dothewoo.io/?post_type=blog&p=95416";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:45:"https://dothewoo.io/blog/trusting-technology/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:120:"This lead me to thinking about generations then and now, those who embrace technology, but there are some gaps in trust.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Wed, 30 Apr 2025 07:53:34 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:5:"BobWP";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:17;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:86:"Do The Woo Community: Embracing the Fediverse: Moving Beyond Traditional Cross Posting";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:43:"https://dothewoo.io/?post_type=blog&p=94609";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:89:"https://dothewoo.io/blog/embracing-the-fediverse-moving-beyond-traditional-cross-posting/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:118:"Understanding the need to rethink traditional social media practices like cross posting in this decentralized network.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Tue, 29 Apr 2025 12:54:20 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:5:"BobWP";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:18;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:75:"WordCamp Central: EmpowerWP Bhopal 2025: A Journey of Inclusion and Impact!";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:39:"https://central.wordcamp.org/?p=9933937";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:98:"https://central.wordcamp.org/news/2025/04/empowerwp-bhopal-2025-a-journey-of-inclusion-and-impact/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:15493:"<p>Some moments in life leave an indelible mark on our hearts, and for me, <a href="https://events.wordpress.org/bhopal/2025/WomensDay/">EmpowerWP Bhopal 2025</a> was one of them. As the lead organizer, I envisioned an event that would bring a positive change to the lives of people around us, in society, and not <em>just</em> in the community. And what an incredible experience it has been!</p>



<img src="https://events.wordpress.org/bhopal/2025/WomensDay/files/2025/03/IMG_1159-edited-scaled-e1742113068243-1024x398.jpg" alt="" class="wp-image-2209" />



<p><strong>A Vision Turned Reality</strong></p>



<p>As part of the global WordPress initiative, WP Bhopal organised EmpowerWP on March 9th to commemorate International Women’s Day 2025. What began as an ambitious goal turned into a milestone moment, proving the power of representation, inclusion, and collective support.<br /><br />I was introduced to the idea of #WomenInWordPress at WordCamp Bhopal 2023. But the purpose became clear only when the low ratio of women attendees in the monthly meetups became a constant. This event was important for several reasons, one of the major reasons globally was to bring in as many women in the radar as possible, to get them involved and change the already deteriorating state of women participation in the community &amp; STEM in general.</p>



<h2 class="wp-block-heading"><strong>Challenging Norms and Expanding Inclusion</strong></h2>



<p>For the first time in our chapter’s decade-long journey, we hosted a meetup with a female-majority audience. Going with the idea that empowerment doesn’t happen in isolation, we made this a <strong>woman-majority </strong>event. The point is that if we want women to upskill themselves, help &amp; empower their own kind, it is also for men to support in whatever capacity they can and make space. It is also about them showing and reflecting that they are there, and therefore, the event attendees were divided into two categories: <span>women and allies</span>. It’s about uplifting society and making it empowered in the truest sense. To give the credit and appreciation wherever due. And we’re so thankful we stuck with that.</p>



<img src="https://events.wordpress.org/bhopal/2025/WomensDay/files/2025/03/DSC08938-1-edited-scaled-e1742113109682-1024x469.jpg" alt="" class="wp-image-2198" />



<p>Secondly, these events are largely limited to targeting students &amp; professionals. But when we envisioned EmpowerWP Bhopal, we knew it had to be inclusive—not just for the conventional attendees but also for the very women who have shaped our lives. We wanted to utilize this opportunity to actually make a difference, not just for women already involved in WordPress or Tech but for those somewhat left behind from the active workforce due to family responsibilities, societal pressure, or other reasons. Our goal was to (re)introduce them to digital opportunities, help them upskill, and connect them to a supportive network.</p>



<p>So we decided to <strong>target homemakers </strong>with untapped potential<strong>, women on career breaks </strong>looking to upskill<strong>, small business owners</strong> who had yet to digitalise, apart from students &amp; professionals. The idea was to bring the digital revolution home.</p>



<h2 class="wp-block-heading"><strong>Execution: Bridging the Gap</strong></h2>



<p>Targeting this group required a different approach. Many of these women needed reassurance and encouragement. We had to instill in them the idea that it&#8217;s not difficult; it&#8217;s just different. Our team curated learning videos and motivational messages from tech professionals (special thanks to <a href="https://profiles.wordpress.org/michelleames/">Michelle</a> &amp; <a href="https://profiles.wordpress.org/krupajnanda/">Krupa</a>) as part of a dedicated social media campaign. We reached out via WhatsApp and Facebook, where these women were more active. </p>



<p>Even then, we were uncertain if we could achieve our ambitious goals. But the response exceeded our expectations—<strong>106 registrations and 70+ attendees</strong> on event day. The <strong>diversity</strong> in the room was incredible: <strong>students, entrepreneurs, journalists, homemakers, designers, freelancers, and social activists</strong>. Our youngest attendee? A <span>5th-grade schoolgirl</span>! That’s when we knew a difference had been made.</p>



<h2 class="wp-block-heading"><strong>EmpowerWP in Action</strong></h2>



<p>The event was designed as a full day of learning, inspiration, and contribution. We started with a fun ice-breaking activity where all the attendees were asked to define &#8217;empowerment&#8217;, and it was nice to gather all perspectives before we began.</p>



<img src="https://events.wordpress.org/bhopal/2025/WomensDay/files/2025/03/ANS00596-1024x769.jpg" alt="" class="wp-image-2203" />



<p>We had four technical sessions covering&nbsp;<strong>marketing, AI, WordPress, and design</strong>, by Nikita Varma, Purva Kushwah, Poonam Namdev, &amp; Saloni Rathore, respectively.</p>



<p>This was followed by a&nbsp;<strong>Contributor Hour</strong>, where attendees were guided to make contributions to Make WordPress—mostly as first-time contributors to the&nbsp;<strong>Photos and Translation teams</strong>. As sources tell us, more than 15 first-time contributions were made that day.</p>



<div><div class="has-rounded-corners-6"><div class="tiled-gallery__gallery"><div class="tiled-gallery__row"><div class="tiled-gallery__col"><a href="https://events.wordpress.org/bhopal/2025/WomensDay/files/2025/03/IMG_4360-1024x768.jpg"><img alt="" src="https://i1.wp.com/events.wordpress.org/bhopal/2025/WomensDay/files/2025/03/IMG_4360-1024x768.jpg?ssl=1" /></a></div><div class="tiled-gallery__col"><a href="https://events.wordpress.org/bhopal/2025/WomensDay/files/2025/03/IMG_4305.jpg"><img alt="" src="https://i2.wp.com/events.wordpress.org/bhopal/2025/WomensDay/files/2025/03/IMG_4305.jpg?ssl=1" /></a><a href="https://events.wordpress.org/bhopal/2025/WomensDay/files/2025/03/ANS00677-1024x769.jpg"><img alt="" src="https://i1.wp.com/events.wordpress.org/bhopal/2025/WomensDay/files/2025/03/ANS00677-1024x769.jpg?ssl=1" /></a></div></div><div class="tiled-gallery__row"><div class="tiled-gallery__col"><a href="https://events.wordpress.org/bhopal/2025/WomensDay/files/2025/03/IMG_4327-1024x768.jpg"><img alt="" src="https://i2.wp.com/events.wordpress.org/bhopal/2025/WomensDay/files/2025/03/IMG_4327-1024x768.jpg?ssl=1" /></a></div><div class="tiled-gallery__col"><a href="https://events.wordpress.org/bhopal/2025/WomensDay/files/2025/03/DSC08770-1024x576.jpg"><img alt="" src="https://i2.wp.com/events.wordpress.org/bhopal/2025/WomensDay/files/2025/03/DSC08770-1024x576.jpg?ssl=1" /></a></div><div class="tiled-gallery__col"><a href="https://events.wordpress.org/bhopal/2025/WomensDay/files/2025/03/DSC08728-1024x576.jpg"><img alt="" src="https://i0.wp.com/events.wordpress.org/bhopal/2025/WomensDay/files/2025/03/DSC08728-1024x576.jpg?ssl=1" /></a></div></div></div></div></div>



<p>We also hosted a&nbsp;<strong>panel discussion</strong>&nbsp;titled <span>Learners to Leaders</span>, featuring Parul Shrivastava, CEO of a tech-marketing company, Arshi Khan, a startup founder leveraging social media for her business, and Manisha Lakhwani, a freelancer. They shared personal experiences, career journeys, and practical guidance on the howabouts.</p>



<p>Before ending, we did a <strong>community talk</strong>, because, at the end of the day, awareness is what matters— What they can do for the community &amp; what the community can do for them. The attendees were informed about the current schemes available and how they can benefit from them by becoming an active member of the WP Community.</p>



<p>Additionally, every attendee’s ID card contained a link to a&nbsp;<strong>curated resources page</strong>, ensuring, at whatever stage of their journey they are at, they could continue learning even after the event.</p>



<p>To ensure accessibility, the event was conducted primarily in&nbsp;<strong>Hindi</strong>, our local language, along with English.</p>



<h2 class="wp-block-heading"><strong>Challenges and Triumphs</strong></h2>



<p>Gathering speakers was no easy task. As one of our panelists, Parul, rightly said, “<em>We need to be comfortable in our own skin. We need to believe that what we do is worth sharing</em>.” Thanks to the WP Bhopal community’s encouragement &amp; outreach, we were able to host an&nbsp;<strong>all-women speaker lineup</strong>!</p>



<p>It was inspiring to witness women from diverse domains, backgrounds, and experiences come together under one roof with a shared intent—to support, uplift, and empower each other.</p>



<p><a href="https://events.wordpress.org/bhopal/2025/WomensDay/speakers/" target="_blank" rel="noreferrer noopener">Know more about our speakers here.</a></p>



<p>The event ended on a perfect note—with a&nbsp;<strong>networking dinner at Raasta Cafe</strong>, as India played the Finals for&nbsp;<strong>Champions Trophy 2025</strong>. India won, and so did we (in our little way)!</p>



<h2 class="wp-block-heading"><strong>Gratitude and Acknowledgments</strong></h2>



<p>None of this would have been possible without the incredible people who believed in us. To our speakers, sponsors, and attendees—<strong>thank you</strong>&nbsp;for making this event meaningful. Every role mattered, and this success belongs to each one of you.</p>



<p>A huge&nbsp;<strong>shoutout to our sponsors</strong>—Jetpack, A2 Hosting, WooCommerce, Bluehost, Hostinger, Kinsta, SEOPress, and CreedAlly— for standing with us and making this dream a reality. Bluehost &amp; Jetpack’s swags were a hit among attendees and organizers alike!</p>



<p><a href="https://events.wordpress.org/bhopal/2025/WomensDay/sponsors/">Know more about our sponsors</a></p>



<div><div class=""><div class="tiled-gallery__gallery"><div class="tiled-gallery__row"><div class="tiled-gallery__col"><a href="https://events.wordpress.org/bhopal/2025/WomensDay/files/2025/03/ANS00581-1024x769.jpg"><img alt="" src="https://i1.wp.com/events.wordpress.org/bhopal/2025/WomensDay/files/2025/03/ANS00581-1024x769.jpg?ssl=1" /></a></div><div class="tiled-gallery__col"><a href="https://events.wordpress.org/bhopal/2025/WomensDay/files/2025/03/Screenshot-2025-03-15-at-11.22.23 PM-915x1024.png"><img alt="" src="https://i0.wp.com/events.wordpress.org/bhopal/2025/WomensDay/files/2025/03/Screenshot-2025-03-15-at-11.22.23%E2%80%AFPM-915x1024.png?ssl=1" /></a></div></div></div></div></div>



<p>This note would be incomplete without acknowledging my incredible team. <strong><a href="https://profiles.wordpress.org/poojapandey08/" target="_blank" rel="noreferrer noopener">Pooja</a></strong>, my indispensable support for all the right reasons; <strong><a href="https://profiles.wordpress.org/kartikami/" target="_blank" rel="noreferrer noopener">Amit</a></strong>, an all-rounder &amp; primarily the one behind our website; <strong><a href="https://profiles.wordpress.org/antraawasthi/" target="_blank" rel="noreferrer noopener">Antra</a>, <a href="https://profiles.wordpress.org/anukritijain/" target="_blank" rel="noreferrer noopener">Anukriti</a>, </strong>and<strong> <a href="https://profiles.wordpress.org/iamshashank/" target="_blank" rel="noreferrer noopener">Shashank</a></strong> from our social media team; <strong><a href="https://profiles.wordpress.org/ishita27/" target="_blank" rel="noreferrer noopener">Ishita</a> </strong>and<strong> <a href="https://profiles.wordpress.org/mansi1504/" target="_blank" rel="noreferrer noopener">Mansi</a></strong>, from our content team; <strong><a href="http://profiles.wordpress.org/ethicaladitya" target="_blank" rel="noreferrer noopener">Aditya</a></strong>, who guided us from behind the scenes as our local mentor &amp; <strong>Anshika</strong> who supported us on the final day of the event.</p>



<p>Having led numerous teams and been part of even more, I know how rare it is to find a team that not only shares your vision but also takes ownership of it. Each one of them was diligent in their roles, but what stood out was how seamlessly they managed everything on the event day, without needing my intervention. This may seem simple, but it’s anything but. People often stick to what they are asked to do, rarely taking initiative on their own. Yet, this team did just that, going above and beyond in ways I hadn’t even anticipated. I’m incredibly grateful to have worked alongside such an amazing bunch of people.</p>



<p><a href="https://events.wordpress.org/bhopal/2025/WomensDay/people/organizers/">Know more about our team</a></p>



<p>A special thanks to&nbsp;<strong><a href="https://profiles.wordpress.org/webtechpooja/" target="_blank" rel="noreferrer noopener">Pooja Derashri</a></strong>&nbsp;for taking the lead on a global level,&nbsp;<strong><a href="https://profiles.wordpress.org/ciudadanob/">Juan</a></strong>&nbsp;for preliminary checks, and&nbsp;<strong><a href="https://profiles.wordpress.org/yoga1103/">Yogesh</a></strong>, our mentor.</p>



<p>To the global community, especially the&nbsp;<strong>#WomenInWordPress</strong>—you inspire us. You embody the spirit of lifting each other up and making this space better, one step at a time.</p>



<p>Special thanks to our local sister community <strong>GDG Cloud Bhopal</strong>&nbsp;and a heartfelt token of appreciation to community members&nbsp;<strong><a href="https://in.linkedin.com/in/atharvakulkarni" target="_blank" rel="noreferrer noopener">Atharva</a> Kulkarni,&nbsp;<a href="https://kripeshadwani.com/" target="_blank" rel="noreferrer noopener">Kripesh</a> Adwani,&nbsp;</strong>and<strong>&nbsp;<a href="https://in.linkedin.com/in/deepanshgupta226" target="_blank" rel="noreferrer noopener">Deepansh</a></strong> <strong>Gupta</strong>, for extending their support wherever we required a hand. With the support of the <a href="https://www.meetup.com/wordpress-bhopal/">WP Bhopal</a> community, we were able to create a space where diversity thrived and new voices found confidence. </p>



<div><div class=""><div class="tiled-gallery__gallery"><div class="tiled-gallery__row"><div class="tiled-gallery__col"><a href="https://events.wordpress.org/bhopal/2025/WomensDay/files/2025/03/WhatsApp-Image-2025-03-11-at-6.44.12-PM-1024x689.jpeg"><img alt="" src="https://i0.wp.com/events.wordpress.org/bhopal/2025/WomensDay/files/2025/03/WhatsApp-Image-2025-03-11-at-6.44.12-PM-1024x689.jpeg?ssl=1" /></a></div><div class="tiled-gallery__col"><a href="https://events.wordpress.org/bhopal/2025/WomensDay/files/2025/03/Screenshot-2025-03-17-at-11.01.55 AM-1024x609.png"><img alt="" src="https://i1.wp.com/events.wordpress.org/bhopal/2025/WomensDay/files/2025/03/Screenshot-2025-03-17-at-11.01.55%E2%80%AFAM-1024x609.png?ssl=1" /></a></div></div></div></div></div>



<p>To every woman out there contemplating her first step, this is your sign. Tech is for your empowerment, and you don’t need a degree to be a part of it. The digital revolution is yours to embrace. Women’s Day isn’t <em>just</em> about celebrating ourselves, it’s about empowering each other in small yet meaningful ways<strong>.</strong>&nbsp;</p>



<p>Hopefully, we will witness a different picture at our next meetup.</p>



<p>For now, just grateful!</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Tue, 29 Apr 2025 10:06:01 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:10:"Astha Jain";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:19;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:49:"Do The Woo Community: The Blackout. Off the Grid.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:43:"https://dothewoo.io/?post_type=blog&p=95357";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:51:"https://dothewoo.io/blog/the-blackout-off-the-grid/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:23:"A blackout in Portugal.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Tue, 29 Apr 2025 08:40:08 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:5:"BobWP";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:20;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:95:"WordCamp Central: Uganda’s Website Projects Competition Returns in 2025 — Bigger and Bolder";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:40:"https://central.wordcamp.org/?p=10406420";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:113:"https://central.wordcamp.org/news/2025/04/ugandas-website-projects-competition-returns-in-2025-bigger-and-bolder/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:8146:"<a href="https://central.wordcamp.org/files/2025/04/COSS10971-scaled.jpg"><img width="1024" height="683" tabindex="0" src="https://central.wordcamp.org/files/2025/04/COSS10971-1024x683.jpg" alt="" class="wp-image-10406421" /></a>



<p>KAMPALA — After a groundbreaking <a href="https://events.wordpress.org/uganda/2024/competition/event-recap-and-photo-gallery-the-uganda-website-projects-competition-2024/">debut in 2024</a> that earned a proud mention at the prestigious <strong>State of the Word</strong> address, the <strong>Uganda Website Projects Competition</strong> is set to return for its second edition on <strong>Friday, 20th June 2025</strong>, at the <strong><a href="https://events.wordpress.org/uganda/2025/competition/location/">National ICT Innovation Hub</a></strong>, UICT <a href="https://maps.app.goo.gl/jPbcj1aQAyA933VUA">Nakawa</a>, Kampala.</p>



<p>Organized under the stirring theme, <strong>“Problem Solving with WordPress,”</strong> the 2025 competition promises to double its impact—expanding from last year&#8217;s 10 student projects to an ambitious <strong>20 innovative website showcases</strong>.</p>



<blockquote class="wp-block-quote is-layout-flow wp-block-quote-is-layout-flow">
<p><em>&#8220;In Uganda, the National ICT Innovation Hub hosted a competition where students from elementary to university level built and pitched WordPress projects&#8230;. showing how the platform can solve community needs and equip young people with valuable skills, confidence and experience.,&#8221;</em> &nbsp;&#8211; <strong>Mary Hubbard</strong>, Executive Director &#8211; WordPress.org, noted during her State of the Word Speech on Dec 16, 2024.</p>
</blockquote>



<div class="wp-block-embed__wrapper">

</div>Highlights of the Uganda Website Projects Competition during the State of the Word 2024. [Video starting from 41:43 minute mark]



<p><a href="https://youtu.be/KLybH5YvIPQ?t=2503"></a></p>



<h2 class="wp-block-heading"><strong>What’s New in 2025?</strong></h2>



<p>Building on last year’s success, organizers are introducing a <strong>third competition category</strong> aimed at nurturing even younger digital talent.</p>



<ul class="wp-block-list">
<li><strong>Junior Category</strong>: Primary school students</li>



<li><strong>Rising Stars</strong>: Secondary school students</li>



<li><strong>Explorers</strong>: Post-secondary students from vocational schools, technical institutes, universities, and colleges</li>
</ul>



<p>By widening the competition’s reach to include a dedicated category for primary schools, the organizers aim to plant seeds of digital literacy and problem-solving even earlier in students&#8217; academic journeys.</p>



<img src="https://events.wordpress.org/uganda/2025/competition/files/2025/04/DSC_7583-6-1024x652.jpg" alt="" class="wp-image-1453" />Pupils from New Jerusalem Mixed Junior School pitching their project, <a href="https://news-shelf.com/">News Shelf</a>, during the Uganda Website Projects Competition 2024



<p>Moreover, the number of project submissions is set to double. Up to <strong>20 teams</strong> will be selected to present their WordPress-powered innovations before a panel of expert adjudicators, competing for in-kind and cash prizes.</p>



<div class="wp-block-embed__wrapper">

</div>Watch: 9-minute recap of the Uganda Website Projects Competition 2024



<h2 class="wp-block-heading"><strong>A Full Day of Learning, Networking, and Celebration</strong></h2>



<p>The event is designed not just as a competition but as a holistic learning and networking opportunity. The tentative schedule includes:</p>



<ul class="wp-block-list">
<li>Hands-on <strong>Beginners Workshops</strong></li>



<li>Expert <strong>Panel Discussions and Q&amp;A sessions</strong></li>



<li>Project <strong>Pitch Presentations</strong> across all three categories</li>



<li>An <strong>Awards Ceremony</strong> celebrating innovation and ingenuity</li>
</ul>



<a href="https://central.wordcamp.org/files/2025/04/IMG_0015-scaled.jpg"><img width="1024" height="683" tabindex="0" src="https://central.wordcamp.org/files/2025/04/IMG_0015-1024x683.jpg" alt="" class="wp-image-10411524" /></a>Hands-on <strong>Beginners Workshop</strong> in Computer Lab at the National ICT Innovation Hub last year.



<table><tbody><tr><td class="has-text-align-center" colspan="3"><strong>Tentative Event Schedule</strong></td></tr><tr><td class="has-text-align-center"><strong>Time</strong></td><td><strong>Computer Lab</strong></td><td><strong>Auditorium</strong></td></tr><tr><td class="has-text-align-center">08:00-09:30am</td><td>Hands-On Beginners Workshop</td><td>Device Setup and Projection Testing</td></tr><tr><td class="has-text-align-center">09:30-10:00am</td><td></td><td>Tea Break</td></tr><tr><td class="has-text-align-center">10:00-10:30am</td><td></td><td>Introductions and Keynote Speech</td></tr><tr><td class="has-text-align-center">10:30-11:30am</td><td>&nbsp;</td><td>Pitch Presentations: <strong>Junior&nbsp;</strong>category</td></tr><tr><td class="has-text-align-center">11:30-12:30pm</td><td>&nbsp;</td><td>Pitch Presentations: <strong>Rising Stars&nbsp;</strong>category</td></tr><tr><td class="has-text-align-center">12:30-1:30pm</td><td>&nbsp;</td><td>Pitch Presentations: <strong>Explorers</strong>&nbsp;category</td></tr><tr><td class="has-text-align-center">1:30 &#8211; 2:30pm</td><td>&nbsp;</td><td>Lunch, and Networking</td></tr><tr><td class="has-text-align-center">2:30 &#8211; 3:30pm</td><td>&nbsp;</td><td>Panel Discussion and Q&amp;A session</td></tr><tr><td class="has-text-align-center">3:30 &#8211; 4:30pm</td><td>&nbsp;</td><td>Adjudicator Feedback, Award Ceremony and Closure</td></tr></tbody></table>



<p>Attendees will enjoy a highly subsidized experience, with <a href="https://events.wordpress.org/uganda/2025/competition/tickets/">ticket options</a> as low as $5 (<strong>UGX 20,000)</strong> — thanks to the generosity of <a href="https://events.wordpress.org/uganda/2025/competition/sponsors/">sponsors </a>— and <strong>VIP / micro-sponsor tickets</strong> available for $26 <strong>(UGX 100,000</strong>).</p>



<p>Students who submit projects and are selected to present will attend free of charge.</p>



<img src="https://events.wordpress.org/uganda/2025/competition/files/2025/04/IMG_0327-1024x683.jpg" alt="" class="wp-image-1454" />Mr. Abraham Waita from Automattic handing over gift bags to exhibitors during the Uganda Website Projects Competition 2024



<h2 class="wp-block-heading"><strong>Call for Participation and Sponsorship</strong></h2>



<p><strong>Institutions are encouraged to register their ICT Club students and teachers</strong> before the project submission deadline on <strong>June 6th, 2025</strong> via the <a href="https://events.wordpress.org/uganda/2025/competition/call-for-projects/">official event website</a>.</p>



<p>Organizers are also calling on the WordPress community and corporate partners to <strong><a href="https://events.wordpress.org/uganda/2025/competition/call-for-sponsors/">support the event through sponsorships</a></strong>. Sponsorship packages range from <strong>Platinum</strong> ($2500), <strong>Gold </strong>($1300), <strong>Silver </strong>($800), and <strong>Bronze </strong>($260), to <strong>Community Sponsorship </strong>($130) — each offering various visibility opportunities for businesses looking to support and invest in Africa&#8217;s growing digital talent.</p>



<p>For ticket registration, visit <a href="https://events.wordpress.org/uganda/2025/competition/tickets/">events.wordpress.org/uganda/2025/competition/tickets</a>.<br />For sponsorship opportunities or further inquiries, email <strong>ugandacompetition@events.wordpress.org</strong> or call <strong><a href="tel:+256708685472">+256 708 685 472</a></strong>.</p>



<hr class="wp-block-separator has-alpha-channel-opacity" />



<p><strong>Join us in shaping Africa’s digital future — one brilliant idea at a time!</strong><br /><strong>#WebsiteCompetitionUG #WordPress #EdTechInnovation #ProblemSolvingWithWordPress</strong></p>



<p></p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Mon, 28 Apr 2025 18:02:42 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:15:"Mukalele Rogers";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:21;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:71:"Do The Woo Community: Building a Community Around Your Podcast and Site";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:43:"https://dothewoo.io/?post_type=blog&p=95202";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:75:"https://dothewoo.io/blog/building-a-community-around-your-podcast-and-site/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:220:"BobWP and Birgit Pauli-Haack discuss community building for podcasts, emphasizing platform ownership, authentic storytelling, adaptability, engagement, handling challenges gracefully, and celebrating milestones together.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Mon, 28 Apr 2025 10:54:06 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:5:"BobWP";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:22;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:73:"Do The Woo Community: My Head is Spinning with the Next Big “Ship It”";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:43:"https://dothewoo.io/?post_type=blog&p=95318";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:71:"https://dothewoo.io/blog/my-head-is-spinning-with-the-next-big-ship-it/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:57:"Morning thoughts buried in something that I cannot share.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Mon, 28 Apr 2025 09:06:09 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:5:"BobWP";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:23;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:50:"Do The Woo Community: What Is My Favorite Website?";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:43:"https://dothewoo.io/?post_type=blog&p=95226";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:53:"https://dothewoo.io/blog/what-is-my-favorite-website/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:179:"On a lazy Sunday, I pondered my "favorite website," leading to a rabbit hole of indecision, endless projects, and a strong realization: favorites are just too complicated to pick.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Sun, 27 Apr 2025 07:55:00 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:5:"BobWP";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:24;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:46:"Do The Woo Community: Life Without a Computer?";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:43:"https://dothewoo.io/?post_type=blog&p=95175";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:49:"https://dothewoo.io/blog/life-without-a-computer/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:120:"Bob reflects on his life before computers, sharing experiences with radio and contemplating a future without technology.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Sat, 26 Apr 2025 09:12:49 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:5:"BobWP";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:25;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:126:"Gutenberg Times: WordPress 6.8.1, Tabs and CSS Slider Blocks, Sticky Header, ThemeSwitcherPro and more — Weekend Edition 327";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:35:"https://gutenbergtimes.com/?p=40064";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:130:"https://gutenbergtimes.com/wordpress-6-8-1-tabs-and-css-slider-blocks-sticky-header-themeswitcherpro-and-more-weekend-edition-327/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:20127:"<p>Hi there, </p>



<p>With WordPress 6.8 out the door, I start getting deeper into Block themes. What are you working on in the upcoming two months? </p>



<p>Below you find quite a few videos and podcast episodes for your Weekend entertainment. It&#8217;s hopefully a great mix, and you find something you are interested in. </p>





<p>Have a fantastic weekend! </p>



<p>Yours, <img src="https://s.w.org/images/core/emoji/15.1.0/72x72/1f495.png" alt="💕" class="wp-smiley" /><br /><em>Birgit</em></p>



<div class="wp-block-group has-light-background-background-color has-background"><div class="wp-block-group__inner-container is-layout-flow wp-block-group-is-layout-flow">
<p><strong>Table of Contents</strong></p>



<ol><li><a class="wp-block-table-of-contents__entry" href="https://gutenbergtimes.com/wordpress-6-8-1-tabs-and-css-slider-blocks-sticky-header-themeswitcherpro-and-more-weekend-edition-327/#0-word-press-release-information">Developing Gutenberg and WordPress</a></li><li><a class="wp-block-table-of-contents__entry" href="https://gutenbergtimes.com/wordpress-6-8-1-tabs-and-css-slider-blocks-sticky-header-themeswitcherpro-and-more-weekend-edition-327/#0-p">Plugins, Themes, and Tools for #nocode site builders and owners</a></li><li><a class="wp-block-table-of-contents__entry" href="https://gutenbergtimes.com/wordpress-6-8-1-tabs-and-css-slider-blocks-sticky-header-themeswitcherpro-and-more-weekend-edition-327/#2-word-press-6-0-1-and-6-1-scheduled">Theme Development for Full Site Editing and Blocks</a></li><li><a class="wp-block-table-of-contents__entry" href="https://gutenbergtimes.com/wordpress-6-8-1-tabs-and-css-slider-blocks-sticky-header-themeswitcherpro-and-more-weekend-edition-327/#3-building-themes-for-fse-and-word-press">Building Blocks and Tools for the Block editor</a></li></ol>
</div></div>



<h2 class="wp-block-heading" id="0-word-press-release-information">Developing Gutenberg and WordPress</h2>



<p>The <a href="https://make.wordpress.org/core/2025/04/24/wordpress-6-8-1-release-schedule/">schedule for WordPress 6.8.1 is out</a>. RC1 is to be ready for testing on April 28, 2025, and the final release two days later on April 30th, 2025. Here are the main issues that will be resolved with this release:</p>



<ul class="wp-block-list">
<li><a href="https://core.trac.wordpress.org/ticket/63285">Call to undefined function is_super_admin() in /wp-includes/ms-files.php</a>&nbsp;(This&nbsp;ticket&nbsp;is complete)</li>



<li><a href="https://github.com/WordPress/gutenberg/issues/69923" target="_blank" rel="noreferrer noopener">Regression in WP 6.8 – Meta boxes area shows unwanted resize handle (&lt;button role=”separator”>) and breaks auto-scroll</a></li>



<li><a href="https://github.com/WordPress/gutenberg/issues/68139" target="_blank" rel="noreferrer noopener">Keyboard Shortcuts: Revert delete shortcut to access + z</a></li>
</ul>



<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide" />



<p>In his post <a href="https://aaron.jorb.in/defining-minor-releases-for-wordpress-6-8-x/"><strong>Defining Minor Releases for WordPress 6.8.x</strong></a>, <strong>Aaron Jorbin</strong>, WordPress core committer, outlines recommendations for handling minor releases in WordPress 6.8.x, given the move to a yearly major release schedule. He argues that minor releases should be more risk-averse than majors, especially since everyone gets minor updates automatically and WordPress does not maintain multiple older versions. </p>



<p>Key Points: </p>



<ul class="wp-block-list">
<li><strong>No new files in minor releases: </strong>Adding new files can break auto-updates for some users and is considered too risky.</li>



<li><strong>Risk aversion:</strong> Keep changes minimal and package sizes small to reduce update failures.</li>



<li><strong>New features</strong> are allowed if they are well-tested and not too large, but major changes (like big redesigns) should be avoided.</li>



<li><strong>Refactors:</strong> Either avoid coding standard refactors or only backport them selectively alongside other necessary changes to avoid unnecessary package bloat.</li>



<li><strong>Default themes:</strong> Focus on improving existing default themes (e.g., adding new patterns) rather than introducing new ones in minor releases.</li>
</ul>



<p><em>Overall, the emphasis is on stability, minimal risk, and maintaining reliable automatic updates for security and maintenance.</em></p>



<div class="wp-block-group has-light-background-background-color has-background"><div class="wp-block-group__inner-container is-layout-constrained wp-block-group-is-layout-constrained">
<p><img src="https://s.w.org/images/core/emoji/15.1.0/72x72/1f399.png" alt="🎙" class="wp-smiley" /> Latest episode: <a href="https://gutenbergtimes.com/podcast/gutenberg-changelog-116-wordpress-6-8-field-guide/">Gutenberg Changelog 116 – WordPress 6.8, Source of Truth, Field Guide, Gutenberg 20.5 and 20.6</a> with special guest JC Palmes, WebDev Studios</p>



<img width="652" height="184" src="https://i0.wp.com/gutenbergtimes.com/wp-content/uploads/2025/04/Screenshot-2025-04-05-at-12.27.14.png?resize=652%2C184&ssl=1" alt="" class="wp-image-39894" />
</div></div>



<p>In this episode of The WordPress Way, <a href="https://dothewoo.io/first-time-contributors-and-wordpress-6-8-enhancements-with-birgit-pauli-haack-and-joe-mcgill"><strong>Exciting Highlights of WordPress 6.8 Release and Community Impact</strong></a>, I&#8217;m thrilled to be joined by my<br />fellow core contributors, <strong>Joe McGill</strong> and <strong>Abha Thakor</strong>, as we celebrate<br />the arrival of WordPress 6.8. As part of this special release show, we<br />dive into the latest and greatest features that make this version truly<br />stand out. From a polished user experience to updates that will benefit<br />content creators, developers, and extenders alike, I&#8217;m excited to share<br />my thoughts on what&#8217;s new and exciting in this latest release.</p>


<div width="100%" class="wp-block-newsletterglue-showhide ng-block">
<div class="wp-block-embed__wrapper">
<div>    <div></div>    </div>
</div>
</div>


<h2 class="wp-block-heading" id="0-p">Plugins, Themes, and Tools for #nocode site builders and owners</h2>



<p><strong>Wes Theron</strong> posted a video explaining <strong><a href="https://www.youtube.com/watch?v=62F1bxnqim0">How to enhance Navigation with a Sticky Header</a></strong>. In this 4-minute video, he walks you through how to create a sticky header and an optional sticky banner using the WordPress Site Editor with a block theme.</p>


<div width="100%" class="wp-block-newsletterglue-showhide ng-block">
<div class="wp-block-embed__wrapper">

</div>
</div>


<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide" />



<p><br />The <a href="https://wordpress.org/plugins/easy-tabs-block/"><strong>Easy Tabs Block</strong></a> plugin arrived from Bangladesh in the WordPress plugin repository. You can use it to build responsive tabbed content in WordPress. &#8220;Designed for both beginners and developers, it integrates seamlessly with the Gutenberg editor while keeping your site fast and clutter-free.&#8221; says the description. </p>



<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide" />



<p>The <strong>Multidots</strong> team has recently released a plugin designed to enable site owners and administrators to thoroughly analyze the usage of blocks. This plugin, titled <a href="https://wordpress.org/plugins/md-governance/"><strong>MD Governance</strong></a>, empowers WordPress administrators to adjust the access and settings of Gutenberg blocks according to various user roles. This functionality is particularly beneficial for teams, agencies, or site managers seeking to maintain comprehensive control over the editing process within the block editor.</p>



<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide" />



<p><strong>Jamie Marsland</strong> wanted to know: <a href="https://www.youtube.com/watch?v=sUizXb7IJ7A"><strong>Is the WordPress AI Website Builder Any Good?</strong> My Daughter Lily Checks It Out!</a>. You gotta see it! She whipped up the first version of her production company’s website in just 7 1/2 minutes, mostly using what the AI suggested. If you’re curious to give it a shot too, check out the <a href="https://wordpress.com/ai-website-builder/">AI builder link</a> again. Just a heads-up, though—you’re not really the target audience; this builder&#8217;s really meant for folks who aren’t too familiar with WordPress.</p>


<div width="100%" class="wp-block-newsletterglue-showhide ng-block">
<div class="wp-block-embed__wrapper">

</div>
</div>


<p>Currently, there are 1,229 Block Themes in the WordPress Theme Repository. Here are the latest six: </p>



<div class="wp-block-group is-nowrap is-layout-flex wp-container-core-group-is-layout-ad2f72ca wp-block-group-is-layout-flex">
<ul class="wp-block-list">
<li><a href="https://wordpress.org/themes/electronics-store-ecommerce/"><strong>Electronics Store eCommerce</strong></a> by <a href="https://superbthemes.com/">Superb Themes</a> with six Style Variations and 33 Patterns</li>



<li><a href="https://wordpress.org/themes/gutentools-charity/"><strong>Gutentools Charity</strong></a> by <a href="https://themegrove.com/">Themegrove</a> with four Style Variations and 13 Patterns</li>



<li><a href="https://wordpress.org/themes/divineyoga-fse/"><strong>Divine Yoga FSE</strong></a> by <a href="https://gracethemes.com/">Grace Themes</a> with seven Patterns</li>



<li><a href="https://wordpress.org/themes/lumivista/"><strong>Lumivista</strong></a> by <a href="https://realtimethemes.com/">Real Time Themes</a> with eleven Patterns</li>



<li><a href="https://wordpress.org/themes/emerge-business/"><strong>Emerge Business</strong></a> by <a href="https://kantipurthemes.com/">Kantipur Themes</a> with two Style Variations and ten Patterns</li>



<li><a href="https://wordpress.org/themes/blockskit-accounting/"><strong>Blockskit Accounting</strong></a> by <a href="https://blockskit.com/">Block Kit</a> with seven Style Variations and ten Patterns</li>
</ul>



<img src="https://secure.gravatar.com/avatar/ec72cdaef02760dcc902e83f872954cdb34bff4bcbd923a96baaa9ac34e5f205?s=24&d=mm&r=g" alt="realtimethemes Avatar" />
</div>



<a href="https://wordpress.org/themes/tags/full-site-editing/"><img width="652" height="392" src="https://i0.wp.com/gutenbergtimes.com/wp-content/uploads/2025/04/Screenshot-2025-04-25-at-17.46.17.png?resize=652%2C392&ssl=1" alt="Screenshot of the latest Block Themes in the WordPress Theme Repository" class="wp-image-40117" /></a>



<h2 class="wp-block-heading" id="2-word-press-6-0-1-and-6-1-scheduled">Theme Development for Full Site Editing and Blocks</h2>



<p><strong>Pascal Birchler</strong> explored on <a href="https://pascalbirchler.com/css-carousel-block/"><strong>how to build a CSS Carousel Block for WordPress</strong></a><br />TL;DR: &#8220;it allows for pure CSS-based carousels — no JavaScript required!&#8221; Birchler explains that this project aimed to simplify the process of building carousels on the web by introducing a reusable and modular component. The block allows developers to easily create responsive and interactive<br />carousels with minimal code. </p>



<p>By using a declarative syntax, users can simply define the content and layout they want to display, eliminating the need for complex JavaScript logic. This approach enables faster development and easier maintenance of carousel components across various websites. The code is available on GitHub: <a href="https://github.com/swissspidy/css-carousel-block">/swissspidy/css-carousel-block</a>.</p>



<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide" />



<p>As mentioned by <strong>JC Palmes</strong> on our <a href="https://gutenbergtimes.com/podcast/gutenberg-changelog-116-wordpress-6-8-field-guide/"><em>116th Gutenberg Changelog episode</em></a>, the team at <em>WebDevStudios</em> was working a process and a plugin that allows agencies to iteratively convert client&#8217;s old WordPress Classic website into a powerful WordPress Block Editor website over time, stretching out your time and budget investment. Within a short amount of time, clients can start producing Block-based content, while your old Classic setup powers the rest of your website. Over time, the old Classic theme would be retired in favor of the Block-based theme. </p>



<p>The plugin, <strong>ThemeSwitcherPro</strong>, has just been <a href="https://themeswitcher.com/introducing-themeswitcher-pro-seamlessly-run-multiple-wordpress-themes-on-a-single-site/"><strong>released and introduced on the new website for this product.</strong></a> Considering the amount of time it will save you and the fantastic additional service you can offer to our clients, $299 a year is well worth it. They offer a 20% discount for the first 100 customers, and a 30-day money-back guarantee. Brad Williams, co-founder of WebDevStudios, also <a href="https://www.youtube.com/watch?v=NIgM5Dzcc_k">recorded a demo video</a> for you.</p>



<p><strong>&nbsp;<a href="https://make.wordpress.org/core/handbook/references/keeping-up-with-gutenberg-index/" target="_blank" rel="noreferrer noopener">&#8220;Keeping up with Gutenberg &#8211; Index 2025&#8221;</a>&nbsp;</strong><br />A chronological list of the WordPress Make Blog posts from various teams involved in Gutenberg development: Design, Theme Review Team, Core Editor, Core JS, Core CSS, Test, and Meta team from Jan. 2024 on. Updated by yours truly. The previous years are also available: <strong><strong><a href="https://make.wordpress.org/core/handbook/references/keeping-up-with-gutenberg-index/keeping-up-with-gutenberg-index-2020/">2020</a>&nbsp;|&nbsp;<a href="https://make.wordpress.org/core/handbook/references/keeping-up-with-gutenberg-index/keeping-up-with-gutenberg-index-2021/">2021</a></strong>&nbsp;|&nbsp;<strong><a href="https://make.wordpress.org/core/handbook/references/keeping-up-with-gutenberg-index/keeping-up-with-gutenberg-index-2022/">2022</a></strong></strong>&nbsp;|&nbsp;<strong><a href="https://make.wordpress.org/core/handbook/references/keeping-up-with-gutenberg-index/gutenberg-index-2023">2023</a></strong> | <a href="https://make.wordpress.org/core/handbook/references/keeping-up-with-gutenberg-index/gutenberg-index-2024/"><strong>2024</strong></a></p>



<h2 class="wp-block-heading" id="3-building-themes-for-fse-and-word-press">Building Blocks and Tools for the Block editor</h2>



<p>In his video <a href="https://www.youtube.com/watch?v=9XcfNpe_H2M&t=1s"><strong>Custom Domains and HTTPS Support in WordPress Studio</strong></a>, <strong>Nick Diego</strong> teaches you how to set up a custom domain and enable HTTPS (SSL) support in <a href="https://developer.wordpress.com/studio/">WordPress Studio</a> for a more realistic, secure development experience. </p>


<div width="100%" class="wp-block-newsletterglue-showhide ng-block">
<div class="wp-block-embed__wrapper">

</div>
</div>


<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide" />



<p>In episode 166, <strong>Nathan Wrigley</strong> discussed with  <a href="https://wptavern.com/podcast/166-ryan-welcher-on-whats-new-for-developers"><strong>Ryan Welcher on What’s New for Developers</strong></a>. They talked about some of the biggest recent updates to WordPress Core, including the Block Bindings API, Plugin Template Registration API, Preview Options API, and the new Data Views. Welcher breaks down what these new tools are, why they matter, and how they’re making WordPress block development both more powerful and more accessible. &#8220;If you’re interested in what’s new in WordPress development, want to understand where the project is heading, or are curious about the real impact of recent changes and features, this episode is for you.&#8221; wrote Wrigley.</p>


<div width="100%" class="wp-block-newsletterglue-showhide ng-block">
<div class="wp-block-embed__wrapper">
<div>    <div></div>    </div>
</div>
</div>


<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide" />



<p>In his livestream, <strong><a href="https://www.youtube.com/watch?v=6tflq9LMiZY" target="_blank" rel="noreferrer noopener">More theme updates for the Block Developer Cookbook site</a></strong>, <strong>Ryan Welcher</strong> focused on completing the user profile system he has been building over the last few sessions.  He dove into some important design changes, tested key functionalities, and troubleshoot live on stream.&nbsp;</p>


<div width="100%" class="wp-block-newsletterglue-showhide ng-block">
<div class="wp-block-embed__wrapper">

</div>
</div>


<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide" />



<p><strong>JuanMa Garrido</strong> explored on how to <strong><a href="https://www.youtube.com/watch?v=g0RIwZmD540" target="_blank" rel="noreferrer noopener">Unit Tests for WordPress blocks</a>.</strong> He wrote some unit tests for the copyright block from the <a href="https://developer.wordpress.org/block-editor/getting-started/tutorial/">&#8220;Tutorial: Build your first block&#8221;</a></p>


<div width="100%" class="wp-block-newsletterglue-showhide ng-block">
<div class="wp-block-embed__wrapper">

</div>
</div>


<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide" />



<p><strong><a href="https://gutenbergtimes.com/need-a-zip-from-master/">Need a plugin .zip from Gutenberg&#8217;s master branch?</a></strong><br />Gutenberg Times provides daily build for testing and review. </p>



<p>Now also available via <a href="https://playground.wordpress.net/?blueprint-url=https://gutenbergtimes.com/wp-content/uploads/2020/11/playnightly.json">WordPress Playground</a>. There is no need for a test site locally or on a server. Have you been using it? <a href="mailto:pauli@gutenbergtimes.com">Email me </a>with your experience</p>



<p><img alt="GitHub all releases" src="https://img.shields.io/github/downloads/bph/gutenberg/total?style=for-the-badge" /></p>



<p class="has-text-align-center has-small-font-size"><em>Questions? Suggestions? Ideas? </em><br /><em>Don&#8217;t hesitate to send <a href="mailto:pauli@gutenbergtimes.com">them via email</a> or</em><br /><em> send me a message on WordPress Slack or Twitter @bph</em>.</p>



<hr class="wp-block-separator has-alpha-channel-opacity" />



<p class="has-text-align-center has-small-font-size">For questions to be answered on the <a href="http://gutenbergtimes.com/podcast">Gutenberg Changelog</a>, <br />send them to <a href="mailto:changelog@gutenbergtimes.com">changelog@gutenbergtimes.com</a></p>



<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide" />



<p>Featured Image:</p>



<hr class="wp-block-separator has-css-opacity is-style-wide" />



<p class="has-text-align-left"><strong>Don&#8217;t want to miss the next Weekend Edition? </strong></p>


<form class="wp-block-newsletterglue-form ngl-form ngl-portrait" action="https://gutenbergtimes.com/feed/" method="post"><div class="ngl-form-container"><div class="ngl-form-field"><label class="ngl-form-label" for="ngl_email"><br />Type in your Email address to subscribe.</label><div class="ngl-form-input"><input type="email" class="ngl-form-input-text" name="ngl_email" id="ngl_email" /></div></div><button type="submit" class="ngl-form-button">Subscribe</button><p class="ngl-form-text">We hate spam, too, and won&#8217;t give your email address to anyone <br />except Mailchimp to send out our Weekend Edition</p></div><div class="ngl-message-overlay"><div class="ngl-message-svg-wrap"></div><div class="ngl-message-overlay-text">Thanks for subscribing.</div></div><input type="hidden" name="ngl_list_id" id="ngl_list_id" value="26f81bd8ae" /><input type="hidden" name="ngl_double_optin" id="ngl_double_optin" value="yes" /></form>


<hr class="wp-block-separator has-css-opacity is-style-wide" />";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 25 Apr 2025 23:45:00 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:18:"Birgit Pauli-Haack";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:26;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:55:"Do The Woo Community: Friday Shares, April 25, 2025 v16";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:43:"https://dothewoo.io/?post_type=blog&p=95132";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:57:"https://dothewoo.io/blog/friday-shares-april-25-2025-v16/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:180:"Our curated content that is apparently expanding into the Open Web and Tech in general. As we grow this out we are sure you will find something you would have never found yourself.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 25 Apr 2025 10:39:03 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:5:"BobWP";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:27;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:42:"Do The Woo Community: Feeling Out of Place";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:43:"https://dothewoo.io/?post_type=blog&p=95103";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:46:"https://dothewoo.io/blog/feeling-out-of-place/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:68:"We all have felt out of place, somewhere, sometime. Even repeatedly.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 25 Apr 2025 08:00:00 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:5:"BobWP";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:28;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:115:"Do The Woo Community: First-Time Contributors and WordPress 6.8 Enhancements with Birgit Pauli-Haack and Joe McGill";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:28:"https://dothewoo.io/?p=94714";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:114:"https://dothewoo.io/first-time-contributors-and-wordpress-6-8-enhancements-with-birgit-pauli-haack-and-joe-mcgill/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:311:"In The WordPress Way episode, host Abha and guests, Birgit and Joe, discuss WordPress 6.8's launch, featuring core contributors who highlight improvements for user experience, including design tools, accessibility updates, and performance enhancements, alongside the community's impressive contribution efforts.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 24 Apr 2025 09:13:00 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:5:"BobWP";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:29;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:59:"Do The Woo Community: A Plethora of Rock n’ Roll Concerts";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:43:"https://dothewoo.io/?post_type=blog&p=95069";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:60:"https://dothewoo.io/blog/a-plethora-of-rock-n-roll-concerts/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:124:"Drifting back to my days in the 70's when I loved going to concerts ends up challenging myself to remember every band I saw.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 24 Apr 2025 08:53:00 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:5:"BobWP";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:30;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:16:"Matt: Reflecting";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:23:"https://ma.tt/?p=141539";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:33:"https://ma.tt/2025/04/reflecting/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:1632:"<p>I know there’s been a lot of frustration directed at me specifically. Some of it, I believe, is misplaced—but I also understand where it’s coming from.</p>



<p>The passing of Pope Francis has deeply impacted me. While I still disagree with the Church on many issues, he was the Pope who broke the mold in so many ways, inspiring me and drawing me back to the Catholic faith I grew up with, with an emphasis on service, compassion, and humility. His passing on Easter Monday, a holiday about rebirth, feels historic. Moments like that invite reflection—not just on personal choices, but on the broader systems we’re a part of.</p>



<p>My life, which was primarily about generative creative work that was free for everyone to use, has been subsumed by legal battles. From the start, I’ve said this: after many rounds of negotiation that I approached in good faith, WPE chose to sue. In hindsight, those conversations weren’t held in the same spirit, and that’s unfortunate.</p>



<p>But we can’t rewrite the past. What we can do is decide how we move forward.</p>



<p>The maker-taker problem, at the heart of what we’ve been wrestling with, doesn’t disappear by avoiding it. If we’re serious about contributing to the future of open source, and about preserving the legacy of what we’ve built together, we need space to reset. That can’t happen under the weight of ongoing litigation. The cards are in WPE hands, a fight they&#8217;ve started and refuse to end.</p>



<p>So I’m asking for a moment of reflection for us all as stewards of a shared ecosystem. Let’s not lose sight of that.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 24 Apr 2025 03:30:40 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:4:"Matt";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:31;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:62:"WPTavern: #166 – Ryan Welcher on What’s New for Developers";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:48:"https://wptavern.com/?post_type=podcast&p=195143";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:73:"https://wptavern.com/podcast/166-ryan-welcher-on-whats-new-for-developers";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:59084:"Transcript<div>
<p>[00:00:19] Nathan Wrigley: Welcome to the Jukebox Podcast from WP Tavern. My name is Nathan Wrigley.</p>



<p>Jukebox is a podcast which is dedicated to all things WordPress, the people, the events, the plugins, the blocks, the themes, and in this case, what&#8217;s new for developers.</p>



<p>If you&#8217;d like to subscribe to the podcast, you can do that by searching for WP Tavern in your podcast player of choice, or by going to wptavern.com/feed/podcast, and you can copy that URL into most podcast players.</p>



<p>If you have a topic that you&#8217;d like us to feature on the podcast, I&#8217;m keen to hear from you and hopefully get you, or your idea, featured on the show. Head to wptavern.com/contact/jukebox and use the form there.</p>



<p>So on the podcast today we have Ryan Welcher. Ryan is a developer advocate sponsored by Automattic. He focuses on removing barriers to adoption for developers working with Gutenberg and WordPress. He&#8217;s a seasoned WordPress developer, and regular contributor to WordPress and the Gutenberg project. He also streams on Twitch as RyanWelcherCodes, where he focuses on custom block development.</p>



<p>This interview was recorded at WordCamp Asia 2025 in Manila, where Ryan was giving his Block Developer Cookbook workshop for the second year running. Ryan spends much of his time creating documentation, running live streams, and writing articles, explaining the knots and bolts of new WordPress features for developers.</p>



<p>He shares his journey from admiring the platform evangelists of the Flash era, to finding his own dream job helping developers understand and implement the new technologies in WordPress.</p>



<p>We talk about some of the biggest recent updates to WordPress Core, including the Block Bindings API, Plugin Template Registration API, Preview Options API, and the new Data Views. Ryan breaks down what these new tools are, why they matter, and how they&#8217;re making WordPress Block development both more powerful and more accessible.</p>



<p>He also discusses the growing emphasis on intentional high quality documentation and resources over the past few years, and how many teams are working to make life easier for developers of all skill levels.</p>



<p>We chat about the balance between the increasing flexibility of WordPress&#8217; UI, and the risk of overwhelming new users, as well as exploring how emerging technologies like AI are shaping the future for WordPress developers and hobbyists alike.</p>



<p>If you&#8217;re interested in what&#8217;s new in WordPress development, want to understand where the project is heading, or are curious about the real impact of recent changes and features, this episode is for you.</p>



<p>If you want to find out more, you can find all of the links in the show notes by heading to wptavern.com/podcast, where you&#8217;ll find all the other episodes as well.</p>



<p>And so without further delay, I bring you Ryan Welcher.</p>



<p>I am joined on the podcast by Ryan Welcher. Hello, Ryan?</p>



<p>[00:03:37] Ryan Welcher: Hello. How are you?</p>



<p>[00:03:38] Nathan Wrigley: Yeah, I&#8217;m good. Very nice to meet you. This is my second interview in Manila. It&#8217;s WordCamp Asia. You have a presentation coming up. No. You&#8217;ve got a workshop.</p>



<p>[00:03:47] Ryan Welcher: I do. Yeah. I&#8217;m really excited. It&#8217;s actually the second year in a row that I&#8217;ve given this workshop at WordCamp Asia.</p>



<p>[00:03:52] Nathan Wrigley: And it&#8217;s a sellout.</p>



<p>[00:03:54] Ryan Welcher: It is a sellout, yeah. And not in the bad way. It&#8217;s a sellout in the sense that there&#8217;s a wait list apparently and everything. So I&#8217;m very excited. I&#8217;m very flattered and very excited about it.</p>



<p>[00:04:02] Nathan Wrigley: So before we get stuck into what it is that you are doing here, and that&#8217;s going to be the focus of this conversation around the topic of, well, I&#8217;ll explain that in a moment. Would you just tell us a little bit about who you are, what kind of work you do in the WordPress space and who you work for?</p>



<p>[00:04:16] Ryan Welcher: Sure. Well, I am a developer advocate. I&#8217;m sponsored by Automattic. I&#8217;ve been with Automattic for, I guess it&#8217;s going to be my third year. Prior to that I was, I used to work at 10up, I&#8217;ve been at a bunch of agencies. I&#8217;ve been using WordPress as a developer since maybe 2009.</p>



<p>I&#8217;ve been around in this space a while and, yeah, my current role is a lot of fun. I get to do things like this. I get to chat with people in exotic places, and go to conferences and lead workshops and write code that nobody ever has to use in production. It&#8217;s fantastic.</p>



<p>[00:04:43] Nathan Wrigley: So you&#8217;ve got a really public facing role. Is that the kind of job that you&#8217;ve always wished to do, or is it something that you more or less fell into?</p>



<p>[00:04:51] Ryan Welcher: If you&#8217;ll indulge me with a bit of an anecdotal story here. When I first started in web work, I used to do a lot of work with Flash. I don&#8217;t know if I&#8217;m aging myself by saying that, but we used to do a lot of work in Flash. And there was this conference called Flash in the Can, and it&#8217;s still around now, it&#8217;s not called that anymore. And there was this guy who used to work for Adobe, his name was Lee Brimlow. I think that&#8217;s how you say it. He was a platform evangelist. His job was literally go to conferences and give really fun, cool talks on the latest, greatest in Flash.</p>



<p>And I remember seeing this guy, going, this is like my dream job. This is phenomenal. And I just wasn&#8217;t at a place in my career where there was anything like that. And then, fast forward however many years later, and there was an opening for Dev Rel. And I was like, yes, this is exactly what I would love to do.</p>



<p>I love writing code. I&#8217;ve always enjoyed being a developer, but now this is kind of like, I&#8217;m also pretty outgoing, extroverted, so this kind of fills both. You know, I get to write code and like my dream is just like sitting down writing code with some obscure API, and that&#8217;s literally all, like I just get to tinker, and that&#8217;s what I love about it. It&#8217;s so much fun.</p>



<p>[00:05:50] Nathan Wrigley: And is that full-time then?</p>



<p>[00:05:52] Ryan Welcher: It is, yeah. I&#8217;m full-time. Yeah, it is fun. It is very cool. And I realise fully how lucky I am, because this is a fun job and I get to hang out with really cool people all the time. And being public facing is fun, but it&#8217;s, you know, it&#8217;s got its downsides too.</p>



<p>[00:06:06] Nathan Wrigley: We have this expression in the UK and it&#8217;s called painting the Forth Bridge. And there&#8217;s this bridge in Scotland called the Forth Bridge, and essentially when you&#8217;ve finished painting it from one end, you go to the other end and begin again. And I feel that WordPress, maybe for somebody in your position, is a little bit like that. It&#8217;s this constant treadmill of, okay, that&#8217;s changed. Yeah. Now we need to adapt new content. And yeah, okay, that bit&#8217;s changed over there in the meantime. New content. Is that what it&#8217;s like a bit?</p>



<p>[00:06:37] Ryan Welcher: A little bit, yeah. I mean it&#8217;s, when we started, there wasn&#8217;t really a Dev Rel team for the open source project that is WordPress. We were like, you know, there&#8217;s a joke, it&#8217;s like, yeah, there&#8217;s five of us or six of us for 43% of the internet. So there&#8217;s like a lot of work to be done, right?</p>



<p>And so there&#8217;s a lot of that. We are doing a lot of work around documentation and all that sort of stuff, so it&#8217;s like improving that. But every release, there&#8217;s like a new cycle of things that, you know, the new stuff like 6.7, all the block binding stuff and, you know, Interactivity API and all that really cool, fun stuff.</p>



<p>And we get to do that, but then it&#8217;s like, okay, well then now there&#8217;s new changes to the Interactivity API, so we have to kind of like talk about that a bit and stuff. It&#8217;s always new, but then there&#8217;s always, I love it when we&#8217;re like, hey, remember that bug that people have been talking about for two years? Like, oh, it&#8217;s fixed now. So we get to also be the harbinger of really good news about things like that.</p>



<p>[00:07:23] Nathan Wrigley: And do you get to put your own roster together of work each week, or does it come in from on high?</p>



<p>[00:07:28] Ryan Welcher: We kind of, it&#8217;s usually based around the next release. So whatever&#8217;s coming out in the next release, there&#8217;s always sort of like, you know, the featured items that are coming out. So that kind of dictates what we focus on for the next release.</p>



<p>There&#8217;s no like on high declaration of what we need to work on. It&#8217;s more like we&#8217;re fairly autonomous in what we do, but I mean, it makes the most sense. If there&#8217;s like new features coming with the next version of WordPress, we should probably get that out and, you know, talk to developers and get people testing it and get people working with it, so we can take that feedback, good and bad, and give it back to the teams that are actually working on those features and stuff like that.</p>



<p>[00:07:59] Nathan Wrigley: So given that it&#8217;s a Dev Rel job, developer relations, is that your target audience? It&#8217;s definitely developers, a hundred percent developers, not novices?</p>



<p>It could be a 101 article on how to use WordPress or, you know, a video piece of content or something like that. Right up to, okay, here&#8217;s the nuts and the bolts of exactly how this thing works.</p>



<p>[00:08:22] Ryan Welcher: Yeah, exactly. Like, I did an article on the developer blog, developer.wordpress.org/news. It was on like the internals of webpack, which is like, if you&#8217;ve ever messed with webpack, nobody ever wants to deal with internals of webpack, but WordPress handles it. It does this really elegant thing where you don&#8217;t have to actually install packages that WordPress provides. It kind of like all of a sudden just uses the ones that are coming, that are with the install.</p>



<p>So like explaining all that, it&#8217;s cool, I get to nerd out and get right into the details but, you know, it&#8217;s not for everyone. Yeah, but then we&#8217;re like, I&#8217;ve also written our articles on like an introduction to SlotFill or an introduction to Block Variation so, yeah.</p>



<p>[00:08:55] Nathan Wrigley: It feels like, if we were to rewind the clock like three or four years, there wasn&#8217;t so much emphasis put on documentation, knowledge base articles, video content, learn.wordpress.org. But it feels like in the last two or three years, a much greater emphasis has been put on getting the pieces of documentation right. Getting the Learn resources, you know, putting the courses together and those kind of things. Just looking at it from the outside, that&#8217;s what I think. But is this on the internal side, is this what&#8217;s happening?</p>



<p>[00:09:22] Ryan Welcher: Yeah, there&#8217;s definitely a focus on that. I mean, when you&#8217;re a developer and you don&#8217;t have the resources to get the answers that you&#8217;re looking for, that&#8217;s extremely frustrating. We&#8217;ve always had documentation, we&#8217;ve had, you know, it&#8217;s like 20-year-old documentation. It&#8217;s been around a long time.</p>



<p>But we&#8217;ve spent a lot of time improving that. Like, we&#8217;ve focused a lot on the Block Editor Handbook because block development is something that can be very difficult, especially if you&#8217;re coming from, you know, solely a PHP background, and you&#8217;re not really up to speed on React or you just don&#8217;t know JavaScript as deeply as other folks do.</p>



<p>And I mean, our job is to like make that transition easier, as much as possible, right? So that&#8217;s why there&#8217;s a lot of tooling around it that abstracts away the things, like the scripts package, which is like the build process that the Gutenberg plugin uses it, but it&#8217;s also like the defacto build process for building blocks.</p>



<p>That handles all that webpack stuff, that handles all that config stuff. You just have to like build your files. Like, you don&#8217;t have to worry about that. So there&#8217;s a lot of trying to make life easier, simpler. And a lot of that is in improvements to documentation, but there&#8217;s also like quality of life fixes for people who are working in the code specifically.</p>



<p>You know, like I spent a lot of time working, like the Create Block package is like my baby. I absolutely love it. It&#8217;s not my baby, like I didn&#8217;t build it, I&#8217;ve just been trying to maintain it as much as I can and adding new features to make life a little bit easier so you can like reuse it and, I don&#8217;t know, I could get into the minute details.</p>



<p>But I love that kind of stuff because as a developer, having been one for a long time, I know what I like and I think, I&#8217;m not saying like, what I like everyone should like, but I know when something is getting in my way versus helping me. And I think that&#8217;s a really, that&#8217;s kind of like my compass that I try to work with. It&#8217;s like, okay, it&#8217;s great, but it&#8217;s done all these things I don&#8217;t need, now I have to go and delete all that and figure out all this other stuff to get around this scaffold and, I don&#8217;t know, I&#8217;m really in the weeds right now.</p>



<p>[00:11:04] Nathan Wrigley: Yeah, yeah. But it feels like, I&#8217;m kind of asking the same question again really, about the materials being created in a much more, well, intentional way. Yeah, the backstory to that, presumably though, is that there&#8217;s more boots on the ground. And I don&#8217;t know if it&#8217;s, in your case, it&#8217;s Automattic sponsoring you into the project. Is there more focus on that from, well, let&#8217;s just go from the Auttomatic side, so more investment from them, yeah?</p>



<p>And if that&#8217;s the case, is that a reaction to anything? Like, perhaps the rise of SaaS platforms, proprietary platforms, you know, the Wixs and the Squarespaces. Because that&#8217;s interesting. It kind of feels like that&#8217;s always been talked about, you know, WordPress versus all the other platforms. Pay your $20 over there per month, and you get this, and you get access to their platform and it&#8217;s well documented and so on. So I didn&#8217;t know if it was connected to that.</p>



<p>[00:11:57] Ryan Welcher: I don&#8217;t think there was any, I think that the rise of Dev Rel played a large part in that. Like, I don&#8217;t know the reasoning behind the creation of the team, that was decided before I joined. But I think that in the past four and five years, there&#8217;s been a real, like just across the tech community, there&#8217;s been a real like surge in the concept of developer relations and improving developer experience.</p>



<p>Because I think people realise that developers, like a lot of these platforms, developers are literally their client base, right? And so I think Automattic recognised that and thought, hey, it&#8217;d be great if we had a dedicated team of folks that were just making life easier for developers. You know, I always say that there&#8217;s no, like I have no KPIs or whatever, I just make things, my mandate is to make things better, as much as possible.</p>



<p>[00:12:40] Nathan Wrigley: Where do you make things? So is it things like YouTube videos, written documentation, knowledge base articles, blog posts?</p>



<p>[00:12:48] Ryan Welcher: A bit of everything. I tend to focus a bit more on the, like I have a live stream that I do on Twitch every Thursday at 10:30 Eastern. I tend to do a lot more of that sort of stuff. That&#8217;s kind of like more my wheelhouse. I write articles. I&#8217;m not the best writer. I rely on ChatGPT to help me clean that up a little bit. I write the articles, but then I, you know, smarter brains than I help me make it nicer to read.</p>



<p>Yeah, so I think we all, like everyone across our team has their own sort of strengths and we all kind of like play to our strengths a bit. Mine is definitely more like in the video side. I try to use my development experience as much as possible to do more complicated things. That&#8217;s not to say that the other folks on our team don&#8217;t either, but, I mean, I think I&#8217;m in a position to be able to be like, here&#8217;s a really complicated issue that people are having and how would we solve that? And it&#8217;s fun because I get paid to solve that. And other people who have clients that don&#8217;t want to pay them 20 hours just to fart around on a problem is, that&#8217;s where I can come in and help with that.</p>



<p>[00:13:39] Nathan Wrigley: Give that to us again though. Where do you do your YouTube stuff? And what handle would that be?</p>



<p>[00:13:44] Ryan Welcher: I stream on Twitch and YouTube. I multistream to both platforms. Thursdays, 10:30 Eastern, every week.</p>



<p>[00:13:50] Nathan Wrigley: And what handle would that be?</p>



<p>[00:13:52] Ryan Welcher: Ryan Welcher Codes.</p>



<p>[00:13:53] Nathan Wrigley: We&#8217;ll drop all of the links that we stumble across during this episode into the show notes. Yeah, so you can find it all there.</p>



<p>So WordCamp Asia, the workshop that you are giving is called the Block Developer Cookbook. And I am just going to read the blurb so that you, dear listener, get some idea of what it is that Ryan&#8217;s doing. And it says, this is the second year for the Block Developer Cookbook Workshop at WordCamp Asia. Last year in Taipei, we covered lots of topics like block transforms, adding editorial notes, creating a custom format and more.</p>



<p>This year, in addition to the existing recipes from the last year, we will have new ones to choose from that leverage the newest features released in WordPress 6.7, such as Block Bindings API, Plugin Template Registration API, Preview Options API and more. And there&#8217;ll be a workshop all about that.</p>



<p>And so I think your intention at this workshop, should the internet hold up, is to do like an interactive thing where the audience say, I want to do this, and you hopefully help them out with that because that&#8217;s very brave.</p>



<p>[00:14:58] Ryan Welcher: You can say that, yeah. I&#8217;ve had this idea for a while of a workshop where the attendees pick the content. Because, especially with a topic like block development, it&#8217;s like saying, come to my WordPress workshop. Like, there&#8217;s so many things, right? So like picking something for everyone is really hard.</p>



<p>And so I thought, well you know what? I&#8217;ll build this little website and they can go in. It&#8217;s like chef theme because it&#8217;s block developer cookbooks. So, you know, you login, you have a little chef hat on your avatar and stuff like that. But you can vote on which of the recipes that you&#8217;d like to work on. And so that&#8217;s the idea. And then they vote and then we go from top to bottom. We get as many done as we can in the 90 minutes or whatever it is.</p>



<p>I&#8217;ve been going to conferences and speaking at conferences long enough to know better than to rely on the wifi, but I thought, I&#8217;m just going to do it. So this is the second year in a row. I did this last year as well at Taipei. So I&#8217;m like super flattered that they accepted my submission is a second time in a row, so.</p>



<p>[00:15:49] Nathan Wrigley: I think there&#8217;s a push to make WordCamps a little bit more, and I&#8217;m going to use air quotes, exciting, interactive. Yeah, it seems like, you know, Jamie Marsland&#8217;s, the thing that he does with the Speed Builds, just sort of grabbing the attention of the audience a bit more. Does it feel a bit like that?</p>



<p>And workshops, they seem to grab the audience a little bit more, because it&#8217;s more interactive. It&#8217;s kind of less being presented to and more interacting with. So I don&#8217;t know, kind of opening up the laptop, trying things out. What do you think? Is that a way that you think events should go in the future?</p>



<p>[00:16:23] Ryan Welcher: I think so too. I think for me personally, I gravitate towards workshops more than talks. I&#8217;ve given talks and I&#8217;ve done workshops before and I think I enjoy, personally enjoy the workshop aspect because there&#8217;s a lot more like interaction and back and forth. And like if you have a question, you just raise your hand and we answer, you know. And it&#8217;s just more organic, I guess is maybe how I&#8217;d describe it.</p>



<p>But, yeah, I think you&#8217;re right. These sort of like fun interactive things. I have some 3D printed swag that I&#8217;m bringing. I don&#8217;t have nearly enough, so I&#8217;m going to have to come up with a, maybe whoever asks a question gets a, it&#8217;s a little like key chain of like a chef hat with the WordCamp 2025 on it.</p>



<p>[00:16:57] Nathan Wrigley: I am sure it&#8217;ll come out on WordPress TV at some point in the near future. But yeah, good luck with that at least anyway.</p>



<p>But some of the bits and pieces that you are going to be talking about, we&#8217;re going to get into that now. And the way I want to take this interview is we&#8217;re at WordPress 6.7 at this point. It depends really on when you&#8217;re listening to this, but we&#8217;re at that point at the moment.</p>



<p>There&#8217;s a whole bunch of stuff that has dropped, and I feel that the audience for this podcast, there&#8217;s a ton of developers. But there&#8217;s also lots of people who are not really inside the ecosystem too much. You know, just regular users. Maybe they&#8217;re using a page builder, maybe they&#8217;re a freelancer, something like that, and they don&#8217;t follow the project, they don&#8217;t really obsess about it as much as I do, and probably as you do as well.</p>



<p>So let&#8217;s just take a couple of these and discuss them. And if we could go in at a low level. So we&#8217;re not able to do a video and open a code editor on this podcast, it&#8217;s all about the audio, but let&#8217;s start talking about the Block Bindings API. What does it do?</p>



<p>[00:17:56] Ryan Welcher: Oh, I love the Block Bindings API. So there has been a long standing need in WordPress to be able to connect custom meta or custom fields with displaying them basically. And so, in classic themes, we would always just have a meta box that you would put some stuff in, and then in your templates you would just pull that information out of the database and show it.</p>



<p>With block themes, it&#8217;s a little bit different because we don&#8217;t really have, you can do that in some places, anyways. The idea behind Block Bindings is that you can connect a block with a piece of post meta, or a custom field and have it display. So you take a paragraph block, let&#8217;s use the example of like a personnel list maybe.</p>



<p>And so you&#8217;ve got like job description, you&#8217;ve got the date hired, all these pieces of metadata. And so what you can do with the Block Bindings API is you can connect that to say a paragraph block. So you can insert just a regular old paragraph block and then in the UI you can go over and say, okay, I want to connect the content field of that paragraph block with this piece of post meta. And it just shows up in there.</p>



<p>And then you can actually edit it in the block editor, as opposed to having to open up like the custom fields panel down at the bottom. You can edit it and it goes both ways. And it&#8217;s like extremely powerful. It&#8217;s the beginning of how powerful it&#8217;s going to get, but currently it supports, there&#8217;s four blocks that are supported. There&#8217;s the paragraph block, header block, the image block, and the button block.</p>



<p>So you have to use one of those four blocks, unless you want to get into custom bindings, which is sort of the second piece of it, which is like a means of defining your own binding sources. And then you can connect those binding sources to a block as well.</p>



<p>So if you wanted to connect to any sort of custom field manager plugin that&#8217;s out there, you could write your own that connects to that, and then you can have the block just read from that and it&#8217;s inline. You get a visual representation of it. It&#8217;s really, really cool.</p>



<p>[00:19:41] Nathan Wrigley: So it&#8217;s the kind of thing that in the past you would probably have got a plugin to do. Something like, I don&#8217;t know, maybe you would&#8217;ve downloaded Pods or something like that to do that.</p>



<p>[00:19:50] Ryan Welcher: I mean, it doesn&#8217;t manage the custom fields for you. So some of those plugins do that very, very well. But what it does do is it connects the block editor with that meta, which has been the missing piece for a while. It&#8217;s still kind of in its infancy, but already it&#8217;s shown to be super powerful.</p>



<p>Like, now we&#8217;re seeing a lot of people who are not writing custom blocks for this anymore. Like, it used to be like, okay, I want to show the job description, so I have to write a custom block that introduces something in the sidebar where you input the meta there and then that block displays that because you&#8217;re handling that, it&#8217;s a dynamic block, you&#8217;re pulling the meta out and the PHP, all that sort of stuff.</p>



<p>Now you don&#8217;t have to do that. Now you can just do a block variation of a paragraph block to auto set the meta that you want. You don&#8217;t even have to do that. You can do it right in the admin. But I would recommend doing a block variation, because setting that up every single time is a bit tedious. And especially if you&#8217;re doing it for clients, you can just do a block variation that says like, job description, and then you click on it and it just goes in.</p>



<p>[00:20:46] Nathan Wrigley: So you, your face, gave away something a moment ago. And it sounds like you are quite excited about what&#8217;s coming and is not yet there. But I guess one of the nice things about your job is that you really have that high level view of what&#8217;s going on in the project. And you can imagine scenarios in the near term, maybe 6.8 or something like that. For example, in this case, the Block Bindings API will enable novice users to do, well, more than you&#8217;ve just described. Yeah, that&#8217;s kind of a nice position to be in.</p>



<p>[00:21:13] Ryan Welcher: I don&#8217;t have, I will say this for the record, I don&#8217;t have an inside track to anything that&#8217;s not available on like Make. But I know some of the folks that are working on it, and like just in conversation, I&#8217;m very excited. I can see where it&#8217;s going, and that&#8217;s not because I have inside information, it&#8217;s just because the logical next step, it looks really cool.</p>



<p>Like, more blocks. Being able to do it with custom blocks will be huge once you have a custom block that you can now connect it to meta and stuff like that. There are some technical hurdles that need to be addressed to do that, but it&#8217;s going to be a big, I hate using the word game changer, but it&#8217;s going to be a game changer.</p>



<p>[00:21:47] Nathan Wrigley: One of the things which I always find interesting when I speak to people who are really in the weeds of it all, is that the stuff just, well, it just keeps on coming out. Because you are in there every day and it&#8217;s so self-evident to you. You know, you use all these acronyms, you know where everything connects, and you know how to make everything work. How do you feel like that is project wide?</p>



<p>We&#8217;re sort of going off piste a little bit here, but we&#8217;ll come back to your presentation, your workshop in a minute. How straightforward is it for people to keep up to date with this, and where would you point them? If somebody was really wanting to find out, for example, about the Block Bindings API, where&#8217;s the best place?</p>



<p>And I think what I&#8217;m trying to say is, there&#8217;s so much coming that it&#8217;s hard to keep up, for somebody that it isn&#8217;t paid to do it like you are. Is the documentation easy to find? There&#8217;s not really a question in there, but it&#8217;s just a, well, everything&#8217;s just coming so quickly, so fast, and it&#8217;s so disparate and you&#8217;ve got to spend, you know, like a whole week trying to track everything down and map everything to everything else.</p>



<p>[00:22:48] Ryan Welcher: I would say start with, it is a bit like drinking from the fire hose for sure. Like, there&#8217;s a lot of information. You&#8217;ve got stuff on the make.wordpress.org. where they sort of talk about what&#8217;s coming. You&#8217;ve got the Gutenberg releases. Like the Gutenberg, it&#8217;s on a two week release cycle, so there&#8217;s constant things coming out.</p>



<p>So one really great way of keeping up with that is there&#8217;s a, what&#8217;s new in Gutenberg post that comes out every two weeks, that talks about high level features. And then it&#8217;s got like a change log of everything that was merged in those two weeks. So that&#8217;s a really great way to like see what&#8217;s coming at a higher level, but also really get in the weeds.</p>



<p>Like, you can say, okay, this bug that I know about, oh look, they fixed it or whatever. That&#8217;s a really great place to start. You can hang out in the WordPress Slack where they do the Core Editor meetings, the Block Editor meetings, and sort of like ask questions in the open floor or just see what people are talking about.</p>



<p>Depending on what you&#8217;re trying to do, the GitHub repo is kind of an okay place to get some information. You&#8217;re going to get a lot of information, but that would be a place. I mean, it&#8217;s, I do it full time and it&#8217;s hard, so I get it. But the reason, that&#8217;s why I exist because if I can compile this stuff and make it palatable and easy to find for others, that&#8217;s what Dev Rel is, right? Like that&#8217;s what a lot of what we do is.</p>



<p>So like I&#8217;ll spend the time messing around with the Block Bindings API, and then I&#8217;ll do a live stream on it, where I&#8217;m like, okay, so we&#8217;re going to do this, and this is why I did it this way, and this is why you should do it this way because it&#8217;s easier, you know? And so like I can do all that busy work to help others who don&#8217;t, you know, because ain&#8217;t nobody got time to do all that, right? You know what I mean? So.</p>



<p>[00:24:15] Nathan Wrigley: Yeah, that&#8217;s kind of a nice summation of where I was trying to get to. So let&#8217;s move on.</p>



<p>Another thing which is going to be mentioned, well, who knows whether it&#8217;ll come up, maybe somebody will ask about it. But the questions basically the same. What is the Plugin Template Registration API? What would that be and why would you want to use it?</p>



<p>[00:24:32] Ryan Welcher: So the example that I have is that you&#8217;ve registered a custom post type that manages people. This is going to be a common theme throughout this. And you want to inject a single page template for that particular post type that&#8217;s curated, that isn&#8217;t part of the theme that&#8217;s being shipped.</p>



<p>So it allows you to add templates to the active theme from a plugin, from a WordPress plugin. Which is really, really, really handy. Because if you have a plugin that, you know, you have a jobs list plugin, you probably want to provide some default templates so you can just display all the custom fields and everything, and the person that&#8217;s installed your plugin just gets that.</p>



<p>They can just go to the single page for each job and they have a default template. It&#8217;s a fairly straight, it&#8217;s like one hook, or a filter, I think. So it&#8217;s fairly straightforward, but it&#8217;s super powerful, it&#8217;s like a quality of life thing.</p>



<p>[00:25:16] Nathan Wrigley: I wondered if it was something that developers had been clamoring for.</p>



<p>[00:25:20] Ryan Welcher: I can remember like a year and a half ago spending half an afternoon figuring out, how can I do this? And it&#8217;s possible but, wow, is it ever in the weeds? So now it&#8217;s not. Now it&#8217;s like a filter that you just tell it where your template is and it shows up in your templates list.</p>



<p>[00:25:33] Nathan Wrigley: Once again, we&#8217;ll put the links into the show notes. Okay, next one. Alright, Preview Options API.</p>



<p>[00:25:41] Ryan Welcher: That&#8217;s a really big, fancy title for a new slot, for a slot fill. So in the preview panel where you can preview it as like a, you know, on mobile, desktop and tablet, there&#8217;s a slot that you can put something in there, and that&#8217;s kind of what it&#8217;s. So you can do whatever you want with it.</p>



<p>I&#8217;ve seen an example where people were toggling light and dark mode. You could have it, I mean, whatever you can imagine, you can put it in there because it&#8217;s a, like a slot is sort of like a hook, like an action.</p>



<p>[00:26:04] Nathan Wrigley: Yeah, nice and straightforward. This one for me is probably the most interesting one. I don&#8217;t know why, I just find myself drawn to this one. And it&#8217;s not an API, we&#8217;re talking about data views. What is that?</p>



<p>[00:26:16] Ryan Welcher: The data views is wildly powerful. It&#8217;s a component, a component in the sense of like a JavaScript component. It&#8217;s what powers a lot of the views that you get in the site editors. So if you go into like your templates, or your pages was the first one, you can see it in a grid view, you can see it in a list view.</p>



<p>I believe the intention is that, as the site editor sort of spreads into other parts, you&#8217;ll see it being used for things like the post list view and stuff like that. So it&#8217;s a super powerful component. It&#8217;s being used in Gutenberg. I believe it&#8217;s still technically experimental because they&#8217;re still working on it.</p>



<p>[00:26:48] Nathan Wrigley: Feels like a nice one, that one, not just for developers who are building websites, but also for clients themselves, because they can suddenly, I don&#8217;t know, you&#8217;re selling houses, real estate websites, something like that, and suddenly you&#8217;ve got this house, custom post type, something like that. And there&#8217;s this image and there&#8217;s a number of bedrooms and you can make it sortable and filterable. We want to drill into the houses that are between 150,000 and 300,000. We want to reverse the order, that kind of thing.</p>



<p>And the end user, the real estate agent will be able to do that. And so it&#8217;s going to make the whole project easier to understand, easier to maintain. So custom post types, pages, posts, users, that&#8217;s my understanding anyway. Is that done through a UI? Is that going to be done through a UI, or is that going to be something like opening up templates?</p>



<p>[00:27:37] Ryan Welcher: It&#8217;s a React component that you will provide the information. So right now it&#8217;s a little lower level I think, than they maybe want it to be because there&#8217;s a lot, I&#8217;m kind of just going off what I think rather than, like no one&#8217;s told me this. But having used it a little bit, there is definitely some API refinement that could be done, in the sense of like being able, because you have to provide literally everything for it to handle all of the actions for like sorting and all that stuff. And I think what they&#8217;re trying to do is make it a little bit easier to use. So you just give it data, as opposed to like having to define all the callbacks when you click a specific button and stuff like that.</p>



<p>[00:28:09] Nathan Wrigley: It&#8217;ll certainly make the UI, the admin area more, I don&#8217;t know, more feature rich. Hopefully this will bring it more into parity with all of those other platforms out there.</p>



<p>Have you, and again, this is not really something that you are talking about, but this was just something that occurred to me. The biggest visual change that I saw in WordPress 6.7 was zoom out, zoom out mode.</p>



<p>Yeah, I just think the first time I, okay, I&#8217;ll explain. So let&#8217;s say you drop a pattern into a post or a page or something like that. Suddenly the whole thing kind of just zooms away. The page, the pattern is somehow distant. Everything shrinks almost like a mobile view, and it kind of just happens without you invoking it. And so that&#8217;s what that is, I think. What&#8217;s the point of that?</p>



<p>[00:28:55] Ryan Welcher: So you could get a sense of what you&#8217;ve just inserted in the overall size of the content. So like, if you&#8217;re writing really long pieces, my workshop website, I have very long content because it&#8217;s like a step-by-step, huge code blocks. For me to be able to insert something and get a sense of where it is on the page and look at it, that&#8217;s kind of what that&#8217;s for.</p>



<p>[00:29:11] Nathan Wrigley: I have a fairly small laptop, and by the time that the left sidebar and the right sidebar and the block editor have all gone in there, by the time I&#8217;ve dropped a pattern in, there&#8217;s basically no real estate left on the screen for me to see what&#8217;s above it or below it. And this pulls it right out and gives you the impression of, well, there&#8217;s the whole blog post.</p>



<p>And although that sounds really trivial, if the branding and everything really matters and you want one thing to follow another, I don&#8217;t know, it&#8217;s a landing page or something like that. It just gives you that overview and you can obviously move things around. Yeah, it&#8217;s hard to describe how profound it is. But it makes that editing experience, especially for novices, just so much more straightforward.</p>



<p>[00:29:50] Ryan Welcher: Oh, for sure, like, and if you drop a complicated pattern in the wrong spot, you&#8217;ll see that immediately. So yeah, it&#8217;s like a, I keep using the phrase quality of life, but it really is like a, oh, that&#8217;s just a nice touch. It&#8217;s made your life a little easier. And that&#8217;s kind of like, you know, I know there&#8217;s a lot of refinements going into the UI to make the writing experience better and easier, so yeah.</p>



<p>[00:30:07] Nathan Wrigley: A little bit off piste, and I&#8217;m putting you on the spot here. If you had to pick one thing that&#8217;s coming that people may not know about, I mean, it doesn&#8217;t have to be something revolutionary, but just something that you are curious about that is going to drop soon. I don&#8217;t know, the next 6 or 12 months, something like that, that you think people will get something out of and enjoy and be excited about. I know that&#8217;s putting you on the spot.</p>



<p>[00:30:31] Ryan Welcher: I don&#8217;t have one thing per se. I&#8217;m super excited about the concept of bits. It&#8217;s a very complicated thing, but being able to define areas that you can edit in the editor. So for example, the example that probably makes the most sense without me showing, like using my hands because nobody can see me, is like when you have a block binding that is connected to a piece of post meta. That&#8217;s it. Let&#8217;s use the, whatever the byline aspect, you know? So it&#8217;s like a bio or something that&#8217;s connected in post meta.</p>



<p>If you just want to edit one part of it, you can&#8217;t. You could edit the whole field, but you can&#8217;t edit just one section of it. Or if you have something like, my block developer cookbook site&#8217;s got a cooking time block that says, it&#8217;s got a little like cooking timer icon, and then it&#8217;s got 10, and then it says minutes.</p>



<p>And, well, the 10 part is actually the post meta. But I can&#8217;t edit that in line in the block editor because the whole output is, it&#8217;s like a span tag with some stuff, right? And so what bits would allow me to do is delineate that, I want to be able to edit just the 10, just that number. And that&#8217;ll be super, super powerful. It&#8217;s like an editable area inside of a larger editable area.</p>



<p>[00:31:32] Nathan Wrigley: Oh yeah. And I can see that being powerful in a whole bunch of different ways. Yeah, that&#8217;s interesting.</p>



<p>[00:31:37] Ryan Welcher: Yes. Yeah. And there&#8217;s obviously the Interactivity API, obviously, but it is one of the most exciting things that I&#8217;ve, I mean, it&#8217;s already out and there&#8217;s just more stuff coming and they&#8217;re just doing really, really cool things. I just love it. It is so cool.</p>



<p>[00:31:50] Nathan Wrigley: Do you think, again, just kind of dropping you into it a little bit, do you think we&#8217;re at any risk of overcomplicating the amount of things that you can do in WordPress at the minute? Here&#8217;s an example. Let&#8217;s say I just took somebody off the street and said, here&#8217;s a brand new installed WordPress website. It allows you to make content, publish websites, off you go.</p>



<p>How realistic do you think it is with all the different bits and pieces that are dropping? I know you don&#8217;t have to get into the weeds of all this, but how easy do you think the UI is right now? Do you think it&#8217;s getting more complicated at the expense of, my question basically boils down to, are there too many options right now in the same UI, which make it difficult for people to understand who are new to the project?</p>



<p>[00:32:30] Ryan Welcher: That&#8217;s an interesting question. WordPress has had a philosophy of decisions, not options for a long time. And I think Gutenberg is providing more options now, which is good.</p>



<p>So like, if I were to take my mother who&#8217;s not technical at all and sit her down and say, build a website, she would probably have a better chance of doing it with Gutenberg than she would&#8217;ve pre 5.0, because she can control every part of it. I mean, I&#8217;d have to tell her how to do it all because she&#8217;s not technical.</p>



<p>But I think that there is a lot of options, but there&#8217;s also a lot of potential for creativity. And you have access to almost everything that you would need in the editor experience now, whereas you didn&#8217;t before. If you wanted to build a very customised theme, like in classic, and this isn&#8217;t like taking a shot at classic, but if you wanted to have a person post type, you couldn&#8217;t do that. You needed to edit code to be able to output that meta.</p>



<p>I mean, I&#8217;m sure there were plugins and stuff, but now you don&#8217;t really need to do that. You have everything that you need as long as you know where to click to find it. But it&#8217;s like, anybody who&#8217;s never used WordPress would have to figure that out in any platform. You&#8217;d have to sort that out. I mean, there&#8217;s a lot of options, which can be confusing, but now you can do whatever you want to do, for the most part.</p>



<p>[00:33:38] Nathan Wrigley: I think it&#8217;s curious because for the longest time people have been sort of saying, you know, the sky&#8217;s falling in, the job market for WordPress developers is just going to get hollowed out because the UI, you know, the ability to do things, a novice being able to do things, it&#8217;s difficult. We should make it more straightforward. There&#8217;s going to be no left work for, I don&#8217;t know, freelancers, implementers, that kind of thing.</p>



<p>I don&#8217;t think that&#8217;s the case. I think all of these options are getting put in and some of the things that we talked about, you know, the Interactivity API and all of that, that&#8217;s the technical stuff. So there&#8217;s all of these new possibilities that are getting created, but it&#8217;s not going to be, it&#8217;s not probably going to be in the boundaries, at the beginning anyway, of a complete novice.</p>



<p>So it&#8217;s creating new workflows for developers to push what&#8217;s possible inside of a WordPress website, and kind of maintaining the job market for people who are implementing already. But hopefully that fear will go away because of all these different things.</p>



<p>[00:34:32] Ryan Welcher: Yeah, I think it&#8217;s kind of like the way a lot of developers are looking at AI right now. People are terrified AI&#8217;s going to take over. It&#8217;s not, you&#8217;re just going going to have to learn to use AI to get the job done. You still need to have the skillset to tell it what you need to do, right?</p>



<p>It&#8217;s the same with all this. Like, so the interactivity API, it&#8217;s really cool, and it&#8217;s ripe for someone to write a library of interactions with a UI. So the implementers who don&#8217;t maybe write that level of JavaScript, or any JavaScript, can just install that plugin. And now they can make their animations, and it&#8217;s like an animation library that&#8217;s got a UI.</p>



<p>I think it&#8217;s just going to open up other opportunities for the people writing code and building plugins and things like that. I mean, I think with change, change is hard. People fear change, right? It&#8217;s figuring out what the new opportunities are.</p>



<p>[00:35:16] Nathan Wrigley: Okay, let&#8217;s just talk about AI for just a minute. I really don&#8217;t want to get too much into AI because I&#8217;m coming from a real point of ignorance. But like you said, there&#8217;s a ton of information, misinformation. I don&#8217;t know what the right word is, that AI is basically going to be able to make it possible for anybody to speak a sentence and have a website. Give me a website, I want to read all about cars. And you just go off and it&#8217;ll come up with a website for that particular purpose. Is WordPress aligning itself to be useful with AI, do you think?</p>



<p>[00:35:47] Ryan Welcher: Yeah, I think so. I mean, AI is the new hotness, right? And it&#8217;s getting less and less expensive to do the AI stuff, you know, the LLMs and all that stuff. And it&#8217;s getting better, and it&#8217;s only going to get better and smarter and faster. I think that there&#8217;s, again, it&#8217;s just going to change what you have to do as a developer, right?</p>



<p>I am behind on AI, but I&#8217;ve made a concerted effort to start using Cursor AI, which I think is a lot of fun. I&#8217;m finding that like, I still have to be a developer to tell it what I want, right? But you can absolutely say, hey, build me a website that sells cars. And it&#8217;ll build you a website that sells cars. Who knows what the code looks like, and if you can maintain it, and if there&#8217;s a bug in there, can you find it?</p>



<p>So I think there&#8217;s like, I don&#8217;t know, I&#8217;m sure there are people listening that are like, oh, you don&#8217;t know what you&#8217;re talking about. You can already do that in AI and it&#8217;s amazing. Because I&#8217;m just not, it&#8217;s like the running joke, in JavaScript it&#8217;s like, there&#8217;s a new library released every other weekend. I feel like there&#8217;s a new AI tool that&#8217;s like better and better and better like at every day.</p>



<p>[00:36:37] Nathan Wrigley: I am finding it fascinating that a lot of people who are putting out content into the WordPress space, videos and things like that, they&#8217;re making a concerted effort to bind AI into WordPress. It&#8217;s not like they&#8217;ve just pivoted completely to, let&#8217;s build websites with AI. It&#8217;s more, let&#8217;s find a thing in WordPress that we can do in a heartbeat, and we actually want to do it inside of WordPress, and let&#8217;s just add a piece of AI on top of that to enable me to do this curious thing, and solve this problem that I&#8217;ve got with a client website.</p>



<p>So it seems like people are using AI just to build stuff on top of WordPress, and not really the opposite. I haven&#8217;t seen any sort of move away. I don&#8217;t need WordPress anymore. That just doesn&#8217;t seem to be what I&#8217;m seeing.</p>



<p>[00:37:22] Ryan Welcher: And I think it&#8217;s because the people that are doing that are, that&#8217;s where they work is in WordPress, right? Like, if you&#8217;re using, I don&#8217;t know, Wix or whatever, or like Next.js or any sort of like other platform for web stuff, I think you would see people trying to apply these AI things to that.</p>



<p>I think it&#8217;s a huge opportunity for an AI to be able to create block patterns and create templates that work properly. It&#8217;s hard to do right now because I don&#8217;t think the LLMs really have the information for it. Like, it&#8217;s not because of the way that the data&#8217;s stored, it&#8217;s sort of different than, like it&#8217;s not really that well documented, maybe. I may not be making sense right now. There&#8217;s no real like example, right? Because it&#8217;s sort of different.</p>



<p>[00:37:58] Nathan Wrigley: We need you to create more examples, yeah.</p>



<p>[00:38:02] Ryan Welcher: I think what&#8217;s really exciting is that having to be in an, like an encyclopedia of APIs, having to like to the documentation site all the time, I think that&#8217;s going to go away. It&#8217;s already going away. Things like GitHub Copilot and these intergrated AI tools in IDEs and everything. Now you can just be like, write me a plugin that does this. Or like, what&#8217;s the parameter name that I need for WP Query to be able to do a taxonomy query, right? It&#8217;ll just tell you.</p>



<p>You can just do that. Let it do its thing while you&#8217;re working on other things. And I think the days of like Stack Overflow, you know what I mean? That&#8217;s like, you Google the problem and the first example, and most upvoted answer, gets copied and pasted, right? I think that&#8217;s going to, maybe not replace, but the new Stack Overflow is like these AI tools that you can ask questions on, how do I do this? I don&#8217;t know, I think it&#8217;s just changing things.</p>



<p>[00:38:45] Nathan Wrigley: I think it&#8217;s a really interesting time and it doesn&#8217;t make me feel I&#8217;m nervous. I&#8217;m more sanguine about it, in all honesty. Yeah, maybe a year ago I was kind of assuming a bit like the sky was going to fall in, but it really does appear that people who are making interesting things in the AI WordPress space are just finding curious holes, yeah. And filling them up.</p>



<p>Okay, so Jamie Marsland did something the other day where he put a video together where he created a little iPhone app where he could upload images and click a button and it was able to do what Jamie wanted. And I think the same will be true, you know, for clients that will come to you. I&#8217;ve got this unique problem. Maybe that would&#8217;ve taken a week of developer time in the past. Maybe now it will be able to be done in a heartbeat, in more like an hour or a couple of hours or something like that. So it makes the possibilities for real bespoke websites much more possible.</p>



<p>[00:39:33] Ryan Welcher: Yeah. And like hobbyists, kids who want to get into coding, that&#8217;s fantastic. You can just say, I want to build a website for my dog, and then all of a sudden they&#8217;re like learning by osmosis how coding works and that sort of stuff.</p>



<p>The number of times that I&#8217;ve talked to a developer, and I&#8217;ve done this myself, where I&#8217;ve built a little like one-off thing, like my wife likes to track, she&#8217;s really into gut health. So like all the different like vegetables and stuff, you know, this like little point system. So I built a, just a like a really simple little app for it. It was like a weekend project. I probably could&#8217;ve done it in like half an hour in AI, and like that would&#8217;ve been nice. And it&#8217;s, you know, she doesn&#8217;t care about the features. She doesn&#8217;t care about what the code looks like. She just wants this thing that she can track information on.</p>



<p>[00:40:13] Nathan Wrigley: Yeah, I think that&#8217;s going to be the curious thing. The thing that probably would&#8217;ve been a real cost benefit analysis in the past. They&#8217;re going to take, you know, something along the lines of that it would take three to six developers, six weeks to pull it off. Whereas now it&#8217;ll be, it&#8217;s going to take two developers an afternoon to pull it off. I mean, it might be that things need tidying up, but it just suddenly makes the possibilities, I don&#8217;t know, much more possible.</p>



<p>[00:40:38] Ryan Welcher: For sure. Like, there&#8217;s a classic joke about like unit tests in code. Like, ain&#8217;t nobody got time for unit tests, because once you&#8217;ve written the code, you&#8217;re never going to go back and write those tests. What if you told an AI, hey, go write all my unit tests for this code base. And even if it gets some of it wrong, you&#8217;re still going to get, you know, it&#8217;s going to save a lot of time, it&#8217;s going to do a lot of that busy work for you.</p>



<p>And I mean, I&#8217;ve never tested that. It would be really interesting to see, if we pointed it to like the WordPress repo, which has got, I don&#8217;t know what the percentage of test coverage is, but it just said, cover everything else in tests and see what happens. That&#8217;d be super fun. Who knows if it&#8217;d work, but yeah.</p>



<p>[00:41:11] Nathan Wrigley: I think it&#8217;s a really exciting time in WordPress. I think there&#8217;s so much going on. You&#8217;ve just described a whole ton of it over the past 40 minutes or so. Yeah, it&#8217;s really, genuinely feels like there&#8217;s a lot of scope for WordPress.</p>



<p>Well, whether the number goes up from 43 or stagnates kind of isn&#8217;t really what interests me. It&#8217;s more what&#8217;s possible, and the kind of crowd that you are going to be speaking to this week are the very, very audience that are going to make this stuff possible into the future.</p>



<p>So good luck and thank you. And I hope that the presentation goes well, and I pray that the internet holds up for you.</p>



<p>[00:41:43] Ryan Welcher: It&#8217;ll be a very one-sided, vote free presentation. So hopefully, hopefully they get it sorted out.</p>



<p>[00:41:50] Nathan Wrigley: Ryan Welcher, thank you so much for spending time with me today. It was really interesting. Thank you so much.</p>



<p>[00:41:55] Ryan Welcher: Thank you so much for having me.</p>
</div>



<p>On the podcast today we have <a href="https://www.youtube.com/c/RyanWelcherCodes">Ryan Welcher</a>.</p>



<p>Ryan is a Developer Advocate sponsored by Automattic. He focuses on removing barriers to adoption for developers working with Gutenberg and WordPress. He is a seasoned WordPress developer and regular contributor to WordPress and the Gutenberg project. He also streams on Twitch as RyanWelcherCodes where he focuses on custom block development.</p>



<p>This interview was recorded at WordCamp Asia 2025 in Manila, where Ryan was giving his “Block Developer Cookbook” workshop for the second year running. Ryan spends much of his time creating documentation, running live streams, and writing articles explaining the nuts and bolts of new WordPress features for developers. He shares his journey from admiring the “platform evangelists” of the Flash era to finding his own dream job helping developers understand and implement the newest technologies in WordPress.</p>



<p>We talk about some of the biggest recent updates to WordPress Core, including the Block Bindings API, Plugin Template Registration API, Preview Options API, and the new Data Views. Ryan breaks down what these new tools are, why they matter, and how they’re making WordPress block development both more powerful and more accessible.</p>



<p>He also discusses the growing emphasis on intentional, high-quality documentation and resources over the past few years, and how many teams are working to make life easier for developers of all skill levels.</p>



<p>We chat about the balance between the increasing flexibility of WordPress’s UI and the risk of overwhelming new users, as well as exploring how emerging technologies like AI are shaping the future for WordPress developers and hobbyists alike.</p>



<p>If you’re interested in what’s new in WordPress development, want to understand where the project is heading, or are curious about the real impact of recent changes and features, this episode is for you.</p>



<h2 class="wp-block-heading">Useful links</h2>



<p>Ryan&#8217;s session at WordCamp Asia: <a href="https://asia.wordcamp.org/2025/session/the-block-developer-cookbook-wc-asia-2025-edition/">The Block Developer Cookbook: WC Asia 2025 Edition</a></p>



<p><a href="https://developer.wordpress.org/block-editor/reference-guides/block-api/block-bindings/">Block Bindings API</a></p>



<p><a href="https://developer.wordpress.org/block-editor/reference-guides/interactivity-api/">Interactivity API</a></p>



<p><a href="https://developer.wordpress.org/news/">WordPress Developer News</a></p>



<p><a href="https://learn.wordpress.org/">Learn WordPress</a></p>



<p><a href="https://developer.wordpress.org/block-editor/">Block Editor Handbook</a></p>



<p><a href="https://www.twitch.tv/ryanwelchercodes">RyanWelcherCodes</a> on Twitch</p>



<p><a href="https://www.youtube.com/c/RyanWelcherCodes">RyanWelcherCodes</a> on YouTube</p>



<p><a href="https://make.wordpress.org/">Make WordPress</a></p>



<p><a href="https://make.wordpress.org/core/">Make WordPress Core</a></p>



<p><a href="https://github.com/WordPress/gutenberg">Gutenberg on GitHub</a></p>



<p><a href="https://make.wordpress.org/core/2024/10/20/new-plugin-template-registration-api-in-wordpress-6-7/">Plugin Template Registration API</a></p>



<p><a href="https://developer.wordpress.org/plugins/settings/options-api/">Preview Options API</a></p>



<p><a href="https://www.cursor.com/">Cursor AI</a></p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Wed, 23 Apr 2025 14:00:00 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Nathan Wrigley";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:32;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:86:"Do The Woo Community: Breaking Language Barriers: The Journey of Translating WordPress";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:43:"https://dothewoo.io/?post_type=blog&p=94712";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:89:"https://dothewoo.io/blog/breaking-language-barriers-the-journey-of-translating-wordpress/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:226:"The web connects diverse communities, yet language barriers persist. Open source translations enhance accessibility in platforms like WordPress, fostering collaboration and empowering users to create in their native languages.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Wed, 23 Apr 2025 13:13:00 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:5:"BobWP";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:33;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:46:"Do The Woo Community: Choosing the Brand BobWP";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:43:"https://dothewoo.io/?post_type=blog&p=95001";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:50:"https://dothewoo.io/blog/choosing-the-brand-bobwp/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:94:"There wasn't any complicated strategy choosing the brand BobWP. It came quickly and it worked.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Wed, 23 Apr 2025 08:00:00 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:5:"BobWP";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:34;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:83:"Do The Woo Community: Navigating the WordPress Media Ecosystem with Rae &amp; BobWP";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:28:"https://dothewoo.io/?p=94458";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:76:"https://dothewoo.io/navigating-the-wordpress-media-ecosystem-with-rae-bobwp/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:192:"In this episode of Content Sparks, hosts Rae Morey and BobWP explore the significance of media in the WordPress ecosystem, emphasizing relationship-building between businesses and journalists.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Tue, 22 Apr 2025 11:30:24 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:5:"BobWP";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:35;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:48:"Do The Woo Community: The Time We Lost to Boeing";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:43:"https://dothewoo.io/?post_type=blog&p=94939";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:52:"https://dothewoo.io/blog/the-time-we-lost-to-boeing/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:110:"With our previous business we were finalist for a Business Committed to Education. The other finalist, Boeing.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Tue, 22 Apr 2025 08:00:00 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:5:"BobWP";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:36;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:37:"WordPress.org blog: WordPress Jubilee";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:35:"https://wordpress.org/news/?p=18716";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:43:"https://wordpress.org/news/2025/04/jubilee/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:296:"<p>As I said, we&#8217;re dropping all the human blocks. Community guidelines, directory guidelines, and such will need to be followed going forward, but whatever blocks were in place before are now cleared. It may take a few days, but any pre-existing blocks are considered bugs to be fixed.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Tue, 22 Apr 2025 02:07:36 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Matt Mullenweg";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:37;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:41:"Do The Woo Community: A New Daily Routine";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:43:"https://dothewoo.io/?post_type=blog&p=94903";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:45:"https://dothewoo.io/blog/a-new-daily-routine/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:78:"Getting into a daily writing routine on the blog will never start out perfect.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Mon, 21 Apr 2025 09:20:34 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:5:"BobWP";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:38;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:73:"Do The Woo Community: The Art and Science of Conversion Rate Optimization";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:43:"https://dothewoo.io/?post_type=blog&p=94701";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:77:"https://dothewoo.io/blog/the-art-and-science-of-conversion-rate-optimization/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:228:"Learn the effective strategies for conversion rate optimization, emphasizing clarity, trust, and user experience. Key insights include prioritizing persuasive copy over flashy design and removing friction from user interactions.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Mon, 21 Apr 2025 08:49:00 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:5:"BobWP";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:39;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:33:"Do The Woo Community: Be Flexible";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:43:"https://dothewoo.io/?post_type=blog&p=94847";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:37:"https://dothewoo.io/blog/be-flexible/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:58:"I would not be where I am today if I hadn't been flexible.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Sun, 20 Apr 2025 08:11:21 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:5:"BobWP";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:40;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:19:"Matt: Greatest Hits";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:23:"https://ma.tt/?p=141409";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:36:"https://ma.tt/2025/04/greatest-hits/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:7892:"<p>I&#8217;ve been blogging now for approximately 8,465 days since my first post on Movable Type. My colleague <a href="https://danluu.com/">Dan Luu</a> helped me compile some of the &#8220;greatest hits&#8221; from the archives of ma.tt, perhaps some posts will stir some memories for you as well:</p>



<p><a href="https://ma.tt/2023/08/i-love-wordcamps/"><strong>Where Did WordCamps Come From? (2023)</strong></a></p>



<p>A look back at how Foo Camp and Bar Camp inspired WordCamps.</p>



<p><a href="https://ma.tt/2018/09/ceos-and-the-real-world/"><strong>Getting Real Feedback as a CEO (2018)</strong></a></p>



<p>How do you make sure you get good information when you’re CEO? Something we’ve been trying that’s been working is having an anonymous internal forum. Like Blind, but internal to the company, and really anonymous, without anything linking a user ID to a comment.</p>



<p><a href="https://ma.tt/2016/10/wix-and-the-gpl/"><strong>Wix and the GPL (2016)</strong></a></p>



<p>That time Wix built their closed-source mobile app on GPL code.</p>



<p><a href="https://ma.tt/2015/02/left-my-heart-in/"><strong>What I Miss and Don’t Miss About San Francisco (2015)</strong></a></p>



<p>Self explanatory <img src="https://s.w.org/images/core/emoji/15.1.0/72x72/1f642.png" alt="🙂" class="wp-smiley" /></p>



<p><a href="https://ma.tt/2015/02/advice-and-fallacies/"><strong>Advice About Advice (2015)</strong></a></p>



<p>Why you need to think things through from first principles and not just blindly follow advice.</p>



<p><a href="https://ma.tt/2014/04/the-web-matters/"><strong>Why the Web Still Matters (2014)</strong></a></p>



<p>A guest post by Ben Thompson of <a href="https://stratechery.com/">Stratechery</a> on why “the web is dead” comments were wrong in 2014. Still true today!</p>



<p><a href="https://ma.tt/2014/01/four-freedoms/"><strong>The Four Freedoms (2014)</strong></a></p>



<p>A discussion of Stallman’s four open source freedoms. Our open source Bill of Rights, if you will.</p>



<p><a href="https://ma.tt/2014/01/intrinsic-blogging/"><strong>The Intrinsic Value of Blogging (2014)</strong></a></p>



<p>On ignoring vanity metrics and blogging for intrinsic reasons</p>



<p><strong>What’s in My Bag </strong><a href="https://ma.tt/2015/01/whats-in-my-bag-2014/"><strong>2014</strong></a><strong>, </strong><a href="https://ma.tt/2016/03/whats-in-my-bag-2016-edition/"><strong>2016</strong></a><strong>, </strong><a href="https://ma.tt/2017/05/whats-in-my-bag-2017/"><strong>2017</strong></a><strong>, </strong><a href="https://ma.tt/2018/10/whats-in-my-bag-2018-edition/"><strong>2018</strong></a><strong>, </strong><a href="https://ma.tt/2021/01/whats-in-my-bag-2020/"><strong>2020</strong></a><strong>, </strong><a href="https://ma.tt/2023/12/the-bag-post/"><strong>2023</strong></a><strong>, </strong><a href="https://ma.tt/2025/01/2025-bag/"><strong>2025</strong></a></p>



<p>What I’ve been carrying in my travel bag&nbsp;</p>



<p><a href="https://ma.tt/2011/09/automattic-creed/"><strong>Why Your Company Should Have a Creed (2011)</strong></a></p>



<p>I&#8217;m really jazzed that dozens of companies have adopted this or similar ideas since then.</p>



<p><a href="https://ma.tt/2010/11/one-point-oh/"><strong>1.0 is the Loneliest Number (2010)</strong></a></p>



<p>On the importance of releasing quickly and getting feedback.</p>



<p><a href="https://ma.tt/2010/05/twitter-api/"><strong>The Twitter API (2010)</strong></a></p>



<p>A discussion on the Twitter API missing the boat on, as Jack Dorsey put it, becoming a protocol.</p>



<p><a href="https://ma.tt/2010/02/i-miss-school/"><strong>I Miss School (2010)</strong></a></p>



<p>Just like they say, youth is wasted on the young, I think I squandered school when I was in it.</p>



<p><a href="https://ma.tt/2009/08/starting-a-bank/"><strong>What Startup Idea Would I suggest? Start a Bank (2009)</strong></a></p>



<p>There’s been a lot of action in the payments space since 2009. For new companies, we have Square (2009), Stripe (2010), and Wealthsimple (2014), among others. Ally Bank (rebranded from GMAC in 2010) has also been trying to provide a modern customer-focused experience.</p>



<p><a href="https://ma.tt/2009/08/kill-your-community/"><strong>Six Steps to Kill Your Community (2009)</strong></a></p>



<p>Platform and product anti-patterns.</p>



<p><a href="https://ma.tt/2009/07/not-lonely-at-all/"><strong>In Defense of the GPL for Open Source Projects (2009)</strong></a></p>



<p>This was a response to a popular post about how GPL open source projects would lose out to projects under licenses like MIT, BSD, and Apache. I didn’t agree then and I don’t agree now.&nbsp;</p>



<p><a href="https://ma.tt/2009/06/the-way-i-work-annotated/"><strong>The Way I Work (2009)</strong></a></p>



<p>Self explanatory <img src="https://s.w.org/images/core/emoji/15.1.0/72x72/1f642.png" alt="🙂" class="wp-smiley" /></p>



<p><a href="https://ma.tt/2008/05/infrastructure-as-competitive-advantage/"><strong>Infrastructure as Competitive Advantage (2008)</strong></a></p>



<p>On the importance of performance, reliability, and security. This was a core priority for us and it shows. <span>We dominate the competition on third-party performance comparisons&nbsp;<a href="https://x.com/danluu/status/1890232671084900643" target="_blank">at the platform level</a>&nbsp;and on&nbsp;<a href="https://danluu.com/slow-device/" target="_blank">the default user experience,</a>&nbsp;and&nbsp;<a href="https://ma.tt/2025/03/real-wordpress-security/" target="_blank">our security is top-notch</a>.</span></p>



<p><a href="https://ma.tt/2007/07/price-of-freedom/"><strong>The Price of Freedom and Open Source Licenses (2007)</strong><strong><br /></strong><strong><br /></strong></a>A response to a user who wanted the ability to remove GPL freedoms from WordPress.</p>



<p><a href="https://ma.tt/2007/07/on-php/"><strong>The PHP5 Transition (2007)</strong></a></p>



<p>How PHP5 forced us to divert time and attention away from users to deal with migration costs.</p>



<p><a href="https://ma.tt/2007/03/kapor-vs-zuckerberg/"><strong>Mitch Kapor vs. Mark Zuckerberg (2007)</strong></a></p>



<p>At Startup School, Kapor advocated for having team diversity while Zuckerberg advocated for a “young and technical” because the best work comes from young people. Now that Facebook (Meta) has grown up, Zuckerberg is doing what Kapor said companies should do and not what Zuckerberg said companies should do! Zuckerberg’s trusted people aren’t young anymore and aren’t being replaced by the young.</p>



<p><a href="https://ma.tt/2007/01/relevant-sun/"><strong>Sun Isn’t Relevant to Startups (2007)</strong></a><strong>, and </strong><a href="https://ma.tt/2007/01/sun-followup/"><strong>Followup (2007)</strong></a></p>



<p>A discussion of Sun’s Startup Essentials program and Jonathan Schwartz&#8217;s (then CEO of Sun) reply.</p>



<p><a href="https://ma.tt/2006/04/feed-validator/"><strong>The RSS Feed Validator is Dead to Me (2006)</strong></a></p>



<p>The RSS 2.0 feed validator is old news today but the experience here is a good example of why people didn’t take any of these validators seriously and they’re all old news</p>



<p><a href="https://ma.tt/2006/03/hours-and-work/"><strong>There’s No Correlation Between Hours Worked and Work Done (2006)</strong></a></p>



<p>Self explanatory <img src="https://s.w.org/images/core/emoji/15.1.0/72x72/1f642.png" alt="🙂" class="wp-smiley" /></p>



<p><a href="https://ma.tt/2005/11/hidden-costs/"><strong>Should We Have Hidden Options? (2005)</strong></a></p>



<p>A discussion of the hidden cost of hidden options.</p>



<p>We probably missed some, if there’s a post you think should be included leave it in the comments.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Sat, 19 Apr 2025 23:56:17 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:4:"Matt";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:41;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:27:"Do The Woo Community: Vibes";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:43:"https://dothewoo.io/?post_type=blog&p=94797";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:31:"https://dothewoo.io/blog/vibes/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:176:"BobWP's short reflection on the resurgence of the term "vibes," expressing ambivalence, especially regarding its use in technology and media, and anticipating branded products.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Sat, 19 Apr 2025 08:24:53 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:5:"BobWP";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:42;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:124:"Gutenberg Times: WordPress 6.8 released, Block Accessibility checks, Stacking cards layout, and more — Weekend Edition 326";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:35:"https://gutenbergtimes.com/?p=39995";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:128:"https://gutenbergtimes.com/wordpress-6-8-released-block-accessibility-checks-stacking-cards-layout-and-more-weekend-edition-326/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:14980:"<p>Hi there, </p>



<p>In most European countries, Easter is a four-day weekend with two bank holidays, on Good Friday and Easter Monday. It&#8217;s a welcome occasion to unplug and enjoy the life right in front of you. For me, that&#8217;s organizing my home, celebrating Spring in the English Garden, friends coming over for a card game and lots of art. What are you doing to unplug?</p>



<p>A huge shoutout to <strong>Simon Kraft</strong>, Krautpress <img src="https://s.w.org/images/core/emoji/15.1.0/72x72/1f44b.png" alt="👋" class="wp-smiley" /> for inviting me to the WordPress Meetup in Konstanz this week! I had an awesome time and loved connecting with the German WordPress community. Plus, I&#8217;ve now got <a href="https://bit.ly/playground-wm-konstanz">the German version of the slidedeck </a>from my WordCamp Asia presentation!</p>



<p>This week, the final release of WordPress 6.8 came out &#8220;Cecil&#8221;, the last major WordPress version for 2025. We will see more minor releases for sure, the first one is scheduled tentatively for April 29, 2025.</p>



<p>And now, if you celebrate  it or not, I wish you and yours a Happy Easter! <img src="https://s.w.org/images/core/emoji/15.1.0/72x72/1f423.png" alt="🐣" class="wp-smiley" /><img src="https://s.w.org/images/core/emoji/15.1.0/72x72/1f430.png" alt="🐰" class="wp-smiley" /></p>



<p>CU next week again, <img src="https://s.w.org/images/core/emoji/15.1.0/72x72/1f495.png" alt="💕" class="wp-smiley" /><br /><em>Birgit</em></p>



<div class="wp-block-group has-light-background-background-color has-background"><div class="wp-block-group__inner-container is-layout-flow wp-block-group-is-layout-flow">
<p><strong>Table of Contents</strong></p>



<ol><li><a class="wp-block-table-of-contents__entry" href="https://gutenbergtimes.com/wordpress-6-8-released-block-accessibility-checks-stacking-cards-layout-and-more-weekend-edition-326/#wordpress-6-8">WordPress 6.8</a></li><li><a class="wp-block-table-of-contents__entry" href="https://gutenbergtimes.com/wordpress-6-8-released-block-accessibility-checks-stacking-cards-layout-and-more-weekend-edition-326/#0-p">Plugins and Tools for #nocode site builders and owners</a></li><li><a class="wp-block-table-of-contents__entry" href="https://gutenbergtimes.com/wordpress-6-8-released-block-accessibility-checks-stacking-cards-layout-and-more-weekend-edition-326/#3-building-themes-for-fse-and-word-press">Building Blocks and Tools for the Block editor</a></li></ol>
</div></div>



<h2 class="wp-block-heading" id="wordpress-6-8">WordPress 6.8</h2>



<p><a href="https://wordpress.org/news/2025/04/cecil/"><strong>WordPress 6.8 “Cecil”</strong></a> is out! It honors the legendary pianist and jazz pioneer Cecil Taylor. Congratulations to the <em>release quad</em> and the over 900 contributors from over 60 countries, 250 of them were first timers.</p>



<p><strong>Jeff Paul</strong> wrote in the release post: &#8220;WordPress 6.8 polishes and refines the tools that you use every day, making your site faster, more secure, and easier to manage.&nbsp; The Style Book now has a structured layout and works with Classic themes, giving you more control over global styles. Speculative loading speeds up navigation by preloading links before users navigate to them, bcrypt hashing strengthens password security automatically, and database optimizations improve performance.&#8221;</p>



<p>If you want to take a deep dive into all the updates, here are the couple of links, I shared before: </p>



<ul class="wp-block-list">
<li>The <a href="https://make.wordpress.org/core/2025/03/28/wordpress-6-8-field-guide/"><strong>WordPress 6.8 Field Guide</strong></a> has all the cool updates that matter to developers.</li>



<li>Don’t miss the <a href="https://gutenbergtimes.com/source-of-truth-wordpress-6-8/"><strong>Source of Truth (WordPress 6.8)</strong></a> for the latest on Block editor updates.</li>
</ul>



<p>More articles covering 6.8 from different point of views: </p>



<ul class="wp-block-list">
<li>In <a href="https://wordpress.com/blog/2025/04/15/wordpress-6-8/"><strong>WordPress 6.8: Feature Highlights and&nbsp;Improvements</strong></a>, <strong>Jonathan Bossenger</strong> compiled a comprehensive list of the user facing changes of the new version.</li>



<li><strong>Bud Kraus</strong> discovered <a href="https://www.hostinger.com/blog/wordpress-6-8"><strong>6 key changes in WordPress 6.8</strong></a> for the Hostinger Blog. </li>



<li><strong>Justin Tadlock</strong> published <a href="https://wordpress.com/blog/2025/04/16/wordpress-6-8-developers"><strong>The Developer’s Guide to WordPress&nbsp;6.8</strong></a></li>



<li><strong>Gianna Legate</strong>, HumanMade explained <a href="https://humanmade.com/wordpress-for-enterprise/what-wordpress-6-8-means-for-enterprise-features-and-benefits/"><strong>What WordPress 6.8 means for enterprise: Features and benefits</strong></a> </li>



<li><strong>Jeff Paul </strong>recounts how <a href="https://10up.com/blog/2025/team-contribute-wordpress-6-8/"><strong>Fueled+10up Leads the Way in the Making of WordPress 6.8</strong></a></li>
</ul>



<div class="wp-block-group has-light-background-background-color has-background"><div class="wp-block-group__inner-container is-layout-constrained wp-block-group-is-layout-constrained">
<p><img src="https://s.w.org/images/core/emoji/15.1.0/72x72/1f399.png" alt="🎙" class="wp-smiley" /> Latest episode: <a href="https://gutenbergtimes.com/podcast/gutenberg-changelog-116-wordpress-6-8-field-guide/">Gutenberg Changelog 116 – WordPress 6.8, Source of Truth, Field Guide, Gutenberg 20.5 and 20.6</a> with special guest JC Palmes, WebDev Studios</p>



<img width="652" height="184" src="https://i0.wp.com/gutenbergtimes.com/wp-content/uploads/2025/04/Screenshot-2025-04-05-at-12.27.14.png?resize=652%2C184&ssl=1" alt="" class="wp-image-39894" />
</div></div>



<h2 class="wp-block-heading" id="0-p">Plugins and Tools for #nocode site builders and owners<a href="https://bsky.app/profile/troychaplin.bsky.social"></a></h2>



<p>Last week, I mentioned the <a href="https://wordpress.com/ai-website-builder/"><em>new AI builder at WordPress.com</em></a>. <strong>Matt Medeiros</strong>, <em>WPMinute</em>, took it out for a spin and in his video you will be right there with him, getting a first impression. <a href="https://www.youtube.com/watch?v=SxrWvHv90wM"><strong>I Tried the WordPress.com AI Builder</strong></a>.</p>


<div width="100%" class="wp-block-newsletterglue-showhide ng-block">
<div class="wp-block-embed__wrapper">

</div>
</div>


<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide" />



<p><a href="https://bsky.app/profile/troychaplin.bsky.social"><strong>‪Troy Chaplin</strong>‬</a> continued his work on the <a href="https://wordpress.org/plugins/block-accessibility-checks/"><strong>Block Accessibility Checks plugin</strong></a>. For the new features he added to the existing image conditions a check for the alt text length and matches with captions, plus tools to help follow WP coding standards. <a href="https://wordpress.org/plugins/block-accessibility-checks/">Version 1.2.0</a> now is ready for download from the WordPress plugin repository. </p>



<img width="652" height="277" src="https://i0.wp.com/gutenbergtimes.com/wp-content/uploads/2025/04/Block-Accesibility-check-screenshot.png?resize=652%2C277&ssl=1" alt="Screenshot Block Accessibility Check plugin v. 1.2" class="wp-image-40006" />



<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide" />



<p><strong>Jean-Baptist Audras,</strong> a core committer and engineer at the Whodunit agency, just dropped the <a href="https://wordpress.org/plugins/who-inline-quote-format/"><strong>Inline Quote Format Button for the Block Editor</strong></a> plugin in the WordPress repository.  With this plugin activated, content creators can easily mark inline citations using the <code>q</code> HTML element right from the Format toolbar in the block editor. This way they make sure that assistive technologies get that the sentence is a citation, keeping things clear for everyone!  Using this plugin keeps your site inline with one of the European Accessibility Act&#8217;s (EAA) criteria to properly indicate inline citations, according to Audras. To style the inline quote use the <strong>Editor &gt; Styles &gt; Additional CSS</strong> and add CSS for the element q, i.e., <code>q {color:purple}</code>. </p>



<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide" />



<p>In his latest video, <strong>Jamie Marsland</strong> shows you <strong><a href="https://www.youtube.com/watch?v=IH3RINZ8rWI">how to create beautiful Stacking Cards in WordPress</a></strong>. &#8220;You’ll get a behind-the-scenes look at the process so you can understand how it works and tweak it for your own needs.&#8221; he wrote in the description. </p>


<div width="100%" class="wp-block-newsletterglue-showhide ng-block">
<div class="wp-block-embed__wrapper">

</div>
</div>


<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide" />



<p><strong>&nbsp;<a href="https://make.wordpress.org/core/handbook/references/keeping-up-with-gutenberg-index/" target="_blank" rel="noreferrer noopener">&#8220;Keeping up with Gutenberg &#8211; Index 2025&#8221;</a>&nbsp;</strong><br />A chronological list of the WordPress Make Blog posts from various teams involved in Gutenberg development: Design, Theme Review Team, Core Editor, Core JS, Core CSS, Test, and Meta team from Jan. 2024 on. Updated by yours truly. The previous years are also available: <strong><strong><a href="https://make.wordpress.org/core/handbook/references/keeping-up-with-gutenberg-index/keeping-up-with-gutenberg-index-2020/">2020</a>&nbsp;|&nbsp;<a href="https://make.wordpress.org/core/handbook/references/keeping-up-with-gutenberg-index/keeping-up-with-gutenberg-index-2021/">2021</a></strong>&nbsp;|&nbsp;<strong><a href="https://make.wordpress.org/core/handbook/references/keeping-up-with-gutenberg-index/keeping-up-with-gutenberg-index-2022/">2022</a></strong></strong>&nbsp;|&nbsp;<strong><a href="https://make.wordpress.org/core/handbook/references/keeping-up-with-gutenberg-index/gutenberg-index-2023">2023</a></strong> | <a href="https://make.wordpress.org/core/handbook/references/keeping-up-with-gutenberg-index/gutenberg-index-2024/"><strong>2024</strong></a></p>



<h2 class="wp-block-heading" id="3-building-themes-for-fse-and-word-press">Building Blocks and Tools for the Block editor</h2>



<p><strong>JuanMa Garrido</strong>, developer advocate at Automattic, takes you with him on <a href="https://juanma.codes/2025/04/17/a-deep-dive-into-a-blocks-attributes/"><strong>A deep dive into a block’s “attributes”</strong></a>. He explores how attributes work within WordPress blocks, focusing on their role in storing and managing block data. Garrido explains the different types of attributes, such as string, number, array, and object, and demonstrates how to define them in a block’s code. The article also covers how attributes are sourced from HTML, how they persist in the block’s markup, and how developers can use them to control block behavior and appearance. Practical code examples illustrate best practices for defining, accessing, and updating attributes in custom Gutenberg blocks.</p>



<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide" />



<p><strong>Riad Benguella</strong> announced new features for Studio app. <a href="https://wordpress.com/blog/2025/03/31/studio-custom-domains-https/"><strong>Add Custom Domains and HTTPS Support to Your Local WordPress Development</strong>.</a> User can now make local WordPress development more closely mirror live production environments. Developers can now assign custom wp<code>.local</code> domains and enable SSL for their local sites. It helps developer with better testing of plugins and themes that require specific domains or secure connections. The process is streamlined, with Studio handling most technical details automatically, though macOS users must manually install the SSL certificate. These updates aim to enhance flexibility and realism in local development workflows, based on user feedback, as Studio continues to evolve. You can <a href="https://developer.wordpress.com/studio/">download open-source Studio for free</a>. </p>



<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide" />



<p><strong><a href="https://gutenbergtimes.com/need-a-zip-from-master/">Need a plugin .zip from Gutenberg&#8217;s master branch?</a></strong><br />Gutenberg Times provides daily build for testing and review. </p>



<p>Now also available via <a href="https://playground.wordpress.net/?blueprint-url=https://gutenbergtimes.com/wp-content/uploads/2020/11/playnightly.json">WordPress Playground</a>. There is no need for a test site locally or on a server. Have you been using it? <a href="mailto:pauli@gutenbergtimes.com">Email me </a>with your experience</p>



<p><img alt="GitHub all releases" src="https://img.shields.io/github/downloads/bph/gutenberg/total?style=for-the-badge" /></p>



<p class="has-text-align-left has-small-font-size"><em>Questions? Suggestions? Ideas? </em> <em>Don&#8217;t hesitate to send <a href="mailto:pauli@gutenbergtimes.com">them via email</a> or</em><br /><em> send me a message on WordPress Slack or Twitter @bph</em>. </p>



<p class="has-text-align-left has-small-font-size">For questions to be answered on the <a href="http://gutenbergtimes.com/podcast">Gutenberg Changelog</a>, email to <a href="mailto:changelog@gutenbergtimes.com">changelog@gutenbergtimes.com</a></p>



<p>Featured Image: Skyline Chicago by Birgit Pauli-Haack</p>



<hr class="wp-block-separator has-css-opacity is-style-wide" />



<p class="has-text-align-left"><strong>Don&#8217;t want to miss the next Weekend Edition? </strong></p>


<form class="wp-block-newsletterglue-form ngl-form ngl-portrait" action="https://gutenbergtimes.com/feed/" method="post"><div class="ngl-form-container"><div class="ngl-form-field"><label class="ngl-form-label" for="ngl_email"><br />Type in your Email address to subscribe.</label><div class="ngl-form-input"><input type="email" class="ngl-form-input-text" name="ngl_email" id="ngl_email" /></div></div><button type="submit" class="ngl-form-button">Subscribe</button><p class="ngl-form-text">We hate spam, too, and won&#8217;t give your email address to anyone <br />except Mailchimp to send out our Weekend Edition</p></div><div class="ngl-message-overlay"><div class="ngl-message-svg-wrap"></div><div class="ngl-message-overlay-text">Thanks for subscribing.</div></div><input type="hidden" name="ngl_list_id" id="ngl_list_id" value="26f81bd8ae" /><input type="hidden" name="ngl_double_optin" id="ngl_double_optin" value="yes" /></form>


<hr class="wp-block-separator has-css-opacity is-style-wide" />";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 18 Apr 2025 23:27:00 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:18:"Birgit Pauli-Haack";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:43;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:116:"Do The Woo Community: From Page Views to Conversions: Improving Products with WordPress Analytics with Derek Ashauer";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:28:"https://dothewoo.io/?p=94460";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:114:"https://dothewoo.io/from-page-views-to-conversions-improving-products-with-wordpress-analytics-with-derek-ashauer/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:224:"In this episode of Woo ProductChat, James and Katie discuss user analytics with Derek Ashauer, emphasizing data-driven decisions for WordPress product owners, conversion tracking, and actionable insights for business growth.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 18 Apr 2025 14:34:48 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:5:"BobWP";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:44;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:57:"Gravatar: Best Digital Business Cards for Lead Generation";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:32:"http://blog.gravatar.com/?p=3062";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:64:"https://blog.gravatar.com/2025/04/18/best-digital-business-card/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:17000:"<p>Did you know that <a href="https://wavecnct.com/blogs/news/business-card-statistics">88% of paper business cards are thrown away within a week</a>? This staggering statistic highlights a common frustration for professionals – traditional business cards often fail to create lasting connections.</p>



<p>Digital business cards offer a smarter approach to networking. Unlike paper cards that get lost or discarded, these modern alternatives let you share contact details instantly through QR codes and track when recipients view your information. Plus, many digital cards integrate with Customer Relationship Management (CRM) systems, transforming simple contact sharing into a powerful lead generation tool.</p>



<p>In this article, we&#8217;ll explore the best digital business card options available so you can decide on the tools that will enhance your <a href="https://blog.gravatar.com/2024/04/10/personal-branding-tools/">personal brand</a>, help you build stronger professional relationships, or generate more leads.</p>



<h2 class="wp-block-heading"><strong>Why digital business cards are your new lead generation engine</strong></h2>



<p>Remember when business cards were just pieces of paper with your name and phone number? Those days are gone. Modern digital business cards work more like miniature marketing systems – they don&#8217;t just <a href="https://blog.gravatar.com/2024/08/02/organizational-benefits-of-efficient-contact-sharing/">share your contact info</a>; they help you build and nurture professional relationships.</p>



<p>The growth in digital business card adoption tells an interesting story. According to recent research, the <a href="https://www.globenewswire.com/news-release/2023/04/17/2647635/0/en/Digital-Business-Card-Market-Size-is-Estimated-to-Hit-US-500-Million-by-2033-North-America-Leads-the-Industry-Share-Fact-MR-Report.html#:~:text=Worldwide%20demand%20for%20digital%20business%20cards%20is%20forecasted%20to%20surge%20at%20a%20CAGR%20of%209.5%25%20during%20the%20forecast%20period%20(2023%20to%202033).">worldwide demand for digital business cards is forecasted to surge</a> at a rate of 9.5% during the forecast period (2023 to 2033). And it makes sense – who wouldn&#8217;t want a business card that automatically saves contacts and helps track potential leads?</p>



<p>Think of it like having a tiny personal assistant in your pocket. When you share your digital card via QR code, it transfers contact details and automatically logs the interaction in your CRM system. Some cards even notify you when someone views your profile or downloads your materials.&nbsp;</p>



<p>This tracking capability transforms how you follow up with contacts. Instead of playing the guessing game of &#8220;Should I reach out now?&#8221;, you can actively see who&#8217;s actively engaged with your profile and time your follow-ups perfectly. Spot a potential client who just viewed your portfolio? That&#8217;s your cue to send a friendly check-in message.</p>



<p>These tools come at various price points and with different features. Some focus on simple contact sharing, while others offer full suites of lead generation and analytics tools. For example, a sales team might want advanced CRM integration and tracking, while a freelance designer might just need basic contact sharing with a portfolio link.</p>



<p>Let&#8217;s explore some specific options and find out which might work best for your needs.</p>



<h2 class="wp-block-heading"><strong>Guide to the top digital business card platforms&nbsp;</strong></h2>



<h3 class="wp-block-heading"><strong>1. Gravatar</strong></h3>



<img width="1397" height="716" src="https://blog.gravatar.com/wp-content/uploads/2025/03/gravatar-new-homepage.png" alt="Gravatar homepage" class="wp-image-3064" />



<p><a href="https://gravatar.com/">Gravatar</a> is a versatile platform that can easily become your online business card that never runs out and updates itself everywhere at once. This free service from <a href="https://automattic.com/">Automattic</a> (the folks behind <a href="http://wordpress.com">WordPress.com</a>) turns your email address into a universal online identity that follows you across thousands of websites.</p>



<img width="1421" height="985" src="https://blog.gravatar.com/wp-content/uploads/2025/03/ronnie-gravatar-profile.png" alt="Example of a Gravatar profile" class="wp-image-3065" />



<p>What makes Gravatar special? Unlike standalone digital business cards, your Gravatar profile automatically appears whenever you comment, contribute, or interact on supported platforms – from WordPress blogs to <a href="https://github.com/trending">GitHub repositories</a>. Update your information once at Gravatar.com, and those changes instantly sync everywhere your profile appears.</p>



<p>Going to a <a href="https://blog.gravatar.com/2025/02/17/how-to-be-better-at-networking/">networking event</a> and need to share your details in person? Gravatar has you covered. Add your profile to <a href="https://www.apple.com/wallet/">Apple</a> or <a href="https://play.google.com/store/apps/details?id=com.google.android.apps.walletnfcrel">Google Wallet</a> for quick QR code sharing at networking events. Getting started takes just minutes – visit Gravatar.com, create a profile, and you&#8217;ve got a powerful <a href="https://blog.gravatar.com/2024/11/08/creating-a-digital-business-card/">digital business card</a> that works automatically across the web, completely free of charge.</p>



<a href="https://gravatar.com/connect/?gravatar_from=blog"><img width="3243" height="729" src="https://blog.gravatar.com/wp-content/uploads/2024/12/free_profile_cta.png" alt="" class="wp-image-2616" /></a>



<h3 class="wp-block-heading"><strong>2. HiHello</strong></h3>



<img width="1380" height="869" src="https://blog.gravatar.com/wp-content/uploads/2025/03/hihello-homepage.png" alt="HiHello homepage" class="wp-image-3067" />



<p><a href="https://www.hihello.com/">HiHello</a> is a full-featured digital business card platform that combines contact sharing with lead-tracking capabilities. Users can share their cards through NFC tapping or QR codes, with the option to add cards directly to Apple or Google Wallet for quick access.</p>



<p>The platform includes several practical features:&nbsp;</p>



<ul class="wp-block-list">
<li>CRM integration for automatic contact syncing.</li>



<li>Analytics to track card views and engagement.</li>



<li>An AI scanner that can digitize paper business cards.</li>



<li>Consistent branding through customizable templates, colors, and QR code designs.</li>
</ul>



<p>The pricing structure has four tiers:&nbsp;</p>



<ul class="wp-block-list">
<li>Free tier for personal use and some basic features.&nbsp;</li>



<li>Professional plan ($6/month), which adds features like custom branding, advanced analytics, and unlimited card designs.</li>



<li>Business tier ($5/user/month) that provides administrative controls, CRM integration, and team-wide templates.&nbsp;</li>



<li>Enterprise options with custom pricing, additional security features, and various deployment solutions.</li>
</ul>



<p><strong>Worth noting:</strong> While the free tier works well for individuals, many of the lead generation and tracking features require a paid subscription.</p>



<h3 class="wp-block-heading"><strong>3. Popl</strong></h3>



<img width="1351" height="749" src="https://blog.gravatar.com/wp-content/uploads/2025/03/popl-homepage.png" alt="Popl homepage" class="wp-image-3068" />



<p><a href="https://popl.co/">Popl</a> is an AI-powered digital business card platform with a focus on lead capture and event networking. The platform&#8217;s standout feature is its versatile scanning capability – not just for traditional business cards but also for conference badges, <a href="https://www.linkedin.com/help/linkedin/answer/a525286/using-a-linkedin-qr-code-to-connect-with-members">LinkedIn QR codes</a>, and even digital cards from other platforms.</p>



<p>The platform includes several conference-focused features:</p>



<ul class="wp-block-list">
<li>AI-powered contact enrichment to automatically fill in missing information.</li>



<li>Offline scanning capabilities for poor Wi-Fi environments.</li>



<li>Direct CRM synchronization.</li>



<li>Event-specific lead qualifiers and tagging.</li>



<li>Detailed marketing attribution tracking.</li>
</ul>



<p>The pricing structure is tiered:</p>



<ul class="wp-block-list">
<li>Free tier for basic individual digital cards.</li>



<li>Professional plan ($11.99/month), unlocking advanced CRM features, lead capture, and analytics.</li>



<li>Team plans with custom pricing, offering additional features like shared templates and administrative controls.</li>
</ul>



<p><strong>Worth noting:</strong> While Popl provides free digital business cards, its core strength lies in its lead capture and event management capabilities, which are only available in paid tiers.</p>



<h3 class="wp-block-heading"><strong>4. Wave</strong></h3>



<img width="660" height="393" src="https://blog.gravatar.com/wp-content/uploads/2025/03/wave-homepage.png?w=660" alt="Wave homepage" class="wp-image-3069" />



<p><a href="http://wavecnct.com">Wave</a> combines digital business card functionality with lead generation tools. The platform offers automatic synchronization – when users update their contact details, the changes reflect instantly across all shared cards and integrations.</p>



<p>The platform includes several networking-focused features:</p>



<ul class="wp-block-list">
<li>Deep customization options for fonts, colors, and design elements.</li>



<li>Quick-capture lead forms for events and conferences.</li>



<li>Integration with major CRMs, including <a href="https://www.hubspot.com/">HubSpot</a>.</li>



<li>PDF and video file hosting capabilities.</li>



<li>Real-time analytics and engagement tracking.</li>
</ul>



<p>The pricing structure follows a simple model:</p>



<ul class="wp-block-list">
<li>Free tier offering basic digital business cards and contact sharing.</li>



<li>Professional plan ($4.99/month) that adds features like video uploads, file hosting, and advanced analytics.</li>



<li>Business tier with custom pricing for team management and enterprise features.</li>
</ul>



<p><strong>Worth noting:</strong> While Wave provides comprehensive free features, some of its more advanced networking capabilities require a paid subscription.</p>



<h3 class="wp-block-heading"><strong>5. Mobilo&nbsp;</strong></h3>



<img width="660" height="322" src="https://blog.gravatar.com/wp-content/uploads/2025/03/mobilo-homepage.png?w=660" alt="Mobilo homepage" class="wp-image-3070" />



<p><a href="https://www.mobilocard.com/">Mobilo</a> positions itself as a business card solution designed specifically for professional teams, with an emphasis on personal branding and event networking. The platform treats each digital card as a mini landing page, allowing extensive customization.</p>



<p>The platform includes several team-focused features:</p>



<ul class="wp-block-list">
<li>Customizable headers, video embeds, and downloadable content hosting.</li>



<li>Event-focused lead capture with automated follow-ups.</li>



<li>Integration with email systems for automated presentation sharing.</li>



<li>Built-in calendar linking capabilities.</li>



<li>Detailed ROI tracking for events and networking activities.</li>
</ul>



<p>The pricing structure is flexible and based on several factors:</p>



<ul class="wp-block-list">
<li>Card material choice (recyclable plastic, wood, or stainless steel).</li>



<li>Number of team members.</li>



<li>Required features and integrations.</li>



<li>Physical NFC card requirements.</li>
</ul>



<p><strong>Worth noting: </strong>For specific pricing details and customized team solutions, interested users should visit <a href="https://www.mobilocard.com/pricing">Mobilo&#8217;s pricing page</a>, as costs vary based on organizational needs and setup requirements.</p>



<h2 class="wp-block-heading"><strong>Gravatar: Your universal digital identity solution</strong></h2>



<p>Gravatar takes a unique double approach to digital business cards – it integrates them automatically into the platforms professionals use daily and can serve offline networking with a dynamic QR code.&nbsp;</p>



<p>Simply add your Gravatar profile to Apple or Google Wallet for instant QR code sharing at events and meetings.</p>



<img width="660" height="466" src="https://blog.gravatar.com/wp-content/uploads/2025/03/gravatar-qr-code-example.png?w=660" alt="Example of a Gravatar profile QR code" class="wp-image-3071" />



<p>Unlike standalone solutions that mostly require manual sharing, your Gravatar profile appears naturally wherever you engage online – from WordPress blogs to <a href="https://github.com/">GitHub</a> repositories, <a href="https://slack.com/">Slack</a> channels, and <a href="https://www.atlassian.com/">Atlassian</a> products.</p>



<img width="1328" height="695" src="https://blog.gravatar.com/wp-content/uploads/2025/03/update-once-sync-everywhere-1.png" alt="Gravatar profile syncing capabilities" class="wp-image-3072" />



<p>Think of it as a self-maintaining digital business card. Update your Gravatar profile once, and those changes ripple across every platform where your email address appears. No more checking multiple profiles or worrying about outdated information. This works great for offline networking as well. When someone scans your QR code, they will be led to your profile, which is always up-to-date, unlike normal business cards.&nbsp;</p>



<p>For professionals managing multiple identities, Gravatar&#8217;s email-based system lets you maintain separate profiles – use one email for work-related platforms and another for personal projects. This separation ensures you present the right image in each context.</p>



<p>However, the true power of Gravatar lies in its organic reach. Rather than only actively exchanging contact information, potential connections discover your profile naturally as they interact with your comments, contributions, or collaborations across the web.&nbsp;</p>



<img width="660" height="366" src="https://blog.gravatar.com/wp-content/uploads/2025/03/gravatar-comment-section-1.png?w=660" alt="Example of a Gravatar profile showing automatically in a WordPress blog comment section" class="wp-image-3073" />



<table class="has-fixed-layout"><tbody><tr><td><img src="https://s0.wp.com/wp-content/mu-plugins/wpcom-smileys/twemoji/2/72x72/1f913.png" alt="🤓" class="wp-smiley" /><strong>Tip:</strong> <em>Add your Gravatar URL to your </em><a href="https://blog.gravatar.com/2024/12/20/link-in-bio-tools/"><em>social media bio links</em></a><em> to further expand this passive networking effect.</em></td></tr></tbody></table>



<h2 class="wp-block-heading"><strong>Create your digital business card with Gravatar today</strong></h2>



<p>Platforms like HiHello, Popl, Wave, and Mobilo offer solid digital business card features, but Gravatar stands apart with its unique integration-first approach. Unlike these services that require manual sharing or paid subscriptions for advanced features, Gravatar provides comprehensive functionality completely free of charge.</p>



<p>What makes Gravatar different? While other platforms focus on lead generation through active networking, Gravatar also creates opportunities passively through automatic integration into the tools professionals already use. Your profile appears organically across WordPress, GitHub, Slack, and other major platforms – no subscription fees or manual updates are required.</p>



<p>Think of Gravatar as your central command center for online identity. Update it once, and your information automatically syncs everywhere your email appears. No juggling multiple profiles or paying for team features. Plus, you get the same QR code sharing for offline meetings and social media integration capabilities as paid services, along with the flexibility to maintain separate professional and personal identities.</p>



<p>Ready to get started? Visit Gravatar.com and click &#8220;Get Started Now.&#8221; Simply enter your email address, customize your profile with a photo and details, and add verified links to your social media accounts and portfolio.&nbsp;</p>



<p>Don’t wait! <a href="https://gravatar.com/connect?gravatar_from=signup">Create your Gravatar profile</a> and experience the ease of a universally recognized digital business card that requires no active sharing – once set up, it works automatically across platforms where professionals already engage.</p>



<a href="https://gravatar.com/connect/?gravatar_from=blog"><img width="3243" height="729" src="https://blog.gravatar.com/wp-content/uploads/2024/12/free_profile_cta.png" alt="" class="wp-image-2616" /></a>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 18 Apr 2025 13:19:19 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:11:"Ronnie Burt";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:45;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:66:"Do The Woo Community: Do the Woo Friday Shares, April 18, 2025 v15";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:43:"https://dothewoo.io/?post_type=blog&p=94755";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:68:"https://dothewoo.io/blog/do-the-woo-friday-shares-april-18-2025-v15/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:135:"Curated content from the Woo, WordPress, and Open Web community is compiled in this comprehensive list for easy access and exploration.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 18 Apr 2025 10:00:00 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:5:"BobWP";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:46;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:51:"Do The Woo Community: Learning Computer Programming";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:43:"https://dothewoo.io/?post_type=blog&p=94737";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:46:"https://dothewoo.io/blog/computer-programming/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:112:"In the 80's I learned Basic, COBOL, Assembly Language, Fortran and Pascal, and a lot of it on a TRS-80 computer.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 18 Apr 2025 08:00:00 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:5:"BobWP";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:47;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:39:"Post Status: Decluttering Your Résumé";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:32:"https://poststatus.com/?p=163548";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:48:"https://poststatus.com/decluttering-your-resume/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:8809:"<p>I took a webinar recently on decluttering and stopping the re-cluttering. And although this seminar was about physical clutter, it got me thinking about job searching and my résumé. I&#8217;m not gonna lie &#8211; although I help other people all the time with their CVs and résumés &#8211; my CV is a cluttered mess. And it needs desperate attention.</p>



<p>So as I work on mine, I&#8217;m going to share some tips that might help others as they hone their résumés, too.</p>



<h2 class="wp-block-heading" id="h-decide-between-a-resume-and-a-cv-curriculum-vitae">Decide between a résumé and a CV (curriculum vitae)</h2>



<blockquote class="wp-block-quote is-layout-flow wp-block-quote-is-layout-flow">
<p>A resume focuses on your&nbsp;<a href="https://www.thehrdigest.com/job-skills-to-include-on-your-resume-with-examples/">job history and skills</a>, whereas a CV emphasizes your personal accomplishments. Both documents are essential, but they serve different purposes. Your resume is designed to get you noticed for a specific type of position where you can apply your skills as an entry-level sales job. In contrast, a CV shows employers and recruiters details about your life outside of work, such as previous volunteer activities and sports teams.<br /><em>from <a href="https://www.thehrdigest.com/cv-vs-resume-the-difference-between-a-resume-and-a-curriculum-vitae/">TheHRDigest.com</a></em></p>
</blockquote>



<p>Most of us in tech will want to use a résumé rather than a CV, although a hybrid may be considered. </p>



<p>For example, I still want to include a list of professional speaking engagements where I have been on stage. For a marketing and community position this is important, although not usually included in a traditional résumé.</p>



<h2 class="wp-block-heading" id="h-functional-resume-vs-chronological-resume">Functional résumé vs. chronological résumé</h2>



<p>A functional résumé and a chronological résumé serve different purposes depending on you background and career goals. A functional résumé emphasizes skills and competencies rather than work history, making it ideal for individuals with gaps in employment, career changers, or those with diverse but non-linear experiences. It groups qualifications under skill categories, helping highlight what you, the candidate, can do. </p>



<p>In contrast, a chronological résumé lists work experience in reverse chronological order, showcasing a clear employment timeline and career progression. This format is usually favored by most employers and is best suited for candidates with a steady, relevant work history in the same field. While the functional résumé focuses on what you <em>can</em> do, the chronological résumé highlights <em>where</em> and <em>when</em> you’ve done it.</p>



<p>You might choose a functional résumé over a chronological one if you want to shift the focus away from your work history and emphasize your skills and achievements instead. By organizing your résumé around what you <em>can do</em> rather than when and where you did it, a functional format allows you to present yourself in a stronger light if your job history doesn&#8217;t tell the full story of your qualifications.</p>



<h2 class="wp-block-heading" id="h-to-show-your-age-or-not-to">To show your age or not to?</h2>



<p>Typically, you should not include your age on a résumé. Age is considered personal information and isn&#8217;t relevant to your qualifications or ability to perform a job. Including it can unintentionally open the door to age discrimination, whether you&#8217;re younger or older. Instead, focus on your skills, experience, and accomplishments. </p>



<p>This means you should avoid including graduation dates if you&#8217;re concerned about age bias—what matters most to employers is <em>what you bring to the table</em>, not how old you are.</p>



<h2 class="wp-block-heading" id="h-should-you-list-out-hobbies">Should you list out hobbies?</h2>



<p>Listing hobbies on a résumé is optional and depends on the job you&#8217;re applying for. In general, you should only include hobbies if they are relevant to the position or help show skills that are transferable or desirable in the workplace—like leadership, creativity, teamwork, or dedication. For example, if you&#8217;re applying for a job in marketing, a hobby like managing a personal blog or creating social media content could be a plus. On the other hand, if your hobbies aren’t related to the job or don’t add value to your application, it&#8217;s best to leave them off and use the space for more impactful content like achievements or skills.</p>



<p>Listing some hobbies can share more information that you may want to. For example, listing something like being a scout leader might share that you have parenting responsibilities, which may make you seem less desirable (especially for women), as unconscious biases expect mothers to spend more time with family than at work.</p>



<h2 class="wp-block-heading" id="h-what-should-you-show-in-your-tech-stack">What should you show in your tech stack?</h2>



<p>Many times I have seen people list tech that is too basic to include on their résumé for the job they&#8217;re seeking. Including things like email, Google sheets, and Slack in today&#8217;s market are already expected of applicants and appear as résumé padding. When you list your tech stack on your résumé, take a careful look at each on your list to evaluate if it needs to be there. When in doubt, ask a friend in the industry.</p>



<h2 class="wp-block-heading" id="h-how-about-a-portfolio">How about a portfolio?</h2>



<p>For someone in the technology industry, a strong portfolio should showcase both technical skills and the impact of your work. Here’s what to include:</p>



<ol class="wp-block-list">
<li><strong>Projects</strong> – Highlight 3–5 of your best or most relevant projects. Include brief descriptions, your role, the technologies used, and outcomes or results (e.g., improved performance, user growth, bug fixes, etc.).</li>



<li>For developers, include <strong>Code Samples</strong> – Share links to GitHub or similar platforms where employers can see clean, well-documented code. Make sure it&#8217;s organized and shows your understanding of best practices.</li>



<li><strong>Case Studies</strong> – For more complex projects, write short case studies that outline the problem, your approach, tools used, and the result.</li>



<li><strong>Technical Skills</strong> – For developers, clearly list programming languages, frameworks, tools, and platforms you’re proficient in. For marketers, list the technology skills you have in media production and scheduling.</li>



<li><strong>Live Demos or Screenshots</strong> – If possible, provide links to live demos or include screenshots to make your work tangible—especially helpful for front-end or UX/UI roles and marketing.</li>



<li><strong>Resume &amp; Contact Info</strong> – Include a downloadable résumé and a clear way for potential employers to contact you.</li>



<li><strong>Certifications or Awards</strong> – Optional, but helpful if they’re relevant to the job (like AWS certification, hackathon wins, etc.).</li>
</ol>



<p>The key is to show not just what you can build, but how you think, collaborate, and solve problems—that&#8217;s what really stands out. Want help building or reviewing a portfolio?</p>



<h2 class="wp-block-heading" id="h-should-you-include-a-photo-on-your-resume">Should you include a photo on your résumé?</h2>



<p>While your photo is included in your social channels (including LinkedIn), it&#8217;s not necessary to include on a résumé, and may actually count against you if the reviewer has any conscious or unconscious biases.</p>



<h2 class="wp-block-heading" id="h-when-in-doubt-hire-help-for-your-resume">When in doubt, hire help for your résumé</h2>



<p>Finding your next job is important, so if you&#8217;re not confident in your résumé-building skills, spending some money up front to stand out in a sea of applicants is money well-spent.</p>



<h2 class="wp-block-heading" id="h-best-wishes">Best wishes</h2>



<p>Most of all, best wishes in your pursuit of your next great position. Wishing you an easy time and a great fit for the best salary. Your happiness and health deserve it.</p>



<hr class="wp-block-separator has-alpha-channel-opacity" />



<p>Find jobs to apply for on our <a href="https://poststatus.com/jobs/">Job Board</a>.</p>
<p>This article, <a href="https://poststatus.com/decluttering-your-resume/">Decluttering Your Résumé</a>, was published at  <a href="https://poststatus.com">Post Status</a> — the community for WordPress professionals.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 17 Apr 2025 21:30:26 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:18:"Michelle Frechette";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:48;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:31:"Post Status: Agency News Weekly";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:32:"https://poststatus.com/?p=163506";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:53:"https://poststatus.com/agency-news-weekly-2025-04-14/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:5858:"<h2 class="gb-headline gb-headline-3f9efd72 gb-headline-text">It&#8217;s Official &#8211; Only One Major WordPress Release for 2025</h2>



<ul class="wp-block-list">
<li>WordPress 6.8 will be the only major core release this year following <a href="https://make.wordpress.org/core/2025/04/04/dotorg-core-committers-check-in/">a meeting of Core Committers</a> on April 4.</li>



<li>The stated reason for the decision was a reduction in weekly core contribution hours by companies like Automattic (from 4000 to 16) and Newfold Digital (from 329 to 20).</li>



<li><a href="https://www.therepository.email/wordpress-scales-back-to-one-major-release-in-2025">The Repository&#8217;s story on this topic</a> brings excellent insight to some of the people and opinions associated with this decision. As usual, it&#8217;s a great read.</li>



<li><em><strong>What does this decision mean for those of us who run agencies or do client work?</strong></em></li>



<li>From a technical perspective, maybe not much unless you&#8217;re all in on the Site Editor (as <a href="https://poststatus.com/agency-news-weekly-2025-03-17/">I wrote on March 17</a> when the changes to the release schedule were first being discussed).</li>



<li>I&#8217;m particularly interested in <a href="https://www.therepository.email/wordpress-scales-back-to-one-major-release-in-2025#:~:text=A%20key%20area%20of%20focus%20moving%20forward%20will%20be%20canonical%20plugins">the focus on canonical plugins</a> to deliver new features rather than core development. </li>



<li>As an agency owner, my biggest concern is perceived stagnation of the project in the tech world, which is a big deal as WordPress struggles to compete with platforms like Wix, Squarespace, and Shopify.</li>



<li>It used to be easy to demonstrate how WordPress was a superior solution when clients had questions. Now that might be a harder sell, especially to those who hear tech industry chatter.</li>
</ul>



<h2 class="gb-headline gb-headline-930042ec gb-headline-text">Seeing More Form Spam Lately? This AI Bot May Be to Blame</h2>



<ul class="wp-block-list">
<li><a href="https://thehackernews.com/2025/04/akirabot-targets-420000-sites-with.html">An AI-powered spam bot called AkiraBot</a> has been targeting hundreds of thousands of websites with convincing spam messages generated by OpenAI technology.</li>



<li>The Python-based bot uses GPT-4 model to create genuine-looking form entries that are based on the website&#8217;s content.</li>



<li>The messages promote questionable SEO services under names like Akira and ServicewrapGO.</li>



<li>Akirabot has also demonstrated an ability to defeat popular CAPTCHA systems, including Turnstile, hCAPTCHA, and reCAPTCHA.</li>



<li>OpenAI has taken action by disabling the API key and associated assets used in this operation (at least for now).</li>
</ul>



<h2 class="gb-headline gb-headline-7643d17f gb-headline-text">If You Target Quebec Customers, Make Sure You Know About Bill 96</h2>



<ul class="wp-block-list">
<li><strong>By June 1, 2025, <a href="https://translatepress.com/bill-96-quebec-canada/">websites that target Quebec residents must be available in French</a> <em>at no disadvantage compared to other languages.</em></strong></li>



<li><a href="https://www.cfib-fcei.ca/en/site/qc-law-14-bill-96">Quebec’s Bill 96</a> is a sweeping law that expands the use of French across business, education, and public services.</li>



<li>For businesses, the bill introduces strict requirements around offering French-language services, signage, contracts, and digital content (including websites and mobile apps) when doing business in the province.</li>



<li>Companies located outside Quebec (or even outside Canada), must still comply <strong>if they target Quebec customers.</strong></li>



<li><a href="https://oxoinnovation.com/quebec-bill-96/">Non-compliance with the bill</a> can result in significant fines ranging from $3,000 to $30,000 per day, and company officers can being held personally liable.&nbsp;</li>



<li>If you or your clients target customers in Quebec, this is weighty legislation that needs attention.</li>
</ul>


<div class="gb-container gb-container-c34423a9">

<h2 class="gb-headline gb-headline-7813eada gb-headline-text">Worth a Look </h2>

</div>


<ul class="wp-block-list">
<li><strong><a href="https://theadminbar.com/2025-survey/">The Admin Bar&#8217;s 2025 Web Professionals Survey results are in</a></strong>.  Interesting stats here from more that 1200 respondents.</li>



<li><strong><a href="https://www.therepository.email/wordpress-foundation-secures-trademarks-for-managed-wordpress-and-hosted-wordpress-in-the-european-union">The WordPress Foundation has secured trademarks</a></strong> for &#8220;Managed WordPress&#8221; and &#8220;Hosted WordPress&#8221; in the EU (along with UK and Australia). <em><a href="https://poststatus.com/agency-news-weekly-2025-03-10/#:~:text=Sell%20WordPress%20Care%20Plans%3F%20You%20Might%20Need%20to%20Rename%20Them.">How this could impact your agency</a>.</em></li>



<li><strong>Corey Maass has released the <a href="https://pausetab.com/">PauseTab Chrome Extension</a></strong> &#8211; pause a tab now and bring it back exactly when you need it. Super cool.</li>



<li><strong><a href="https://wordpress.com/ai-website-builder/">WordPress.com has released an AI Website Builder</a></strong> that will create a WordPress site on their platform based on your prompts. <a href="https://www.youtube.com/watch?v=SxrWvHv90wM&ab_channel=WPMinuteTutorials">Here&#8217;s Matt Medeiros&#8217; take</a>.</li>
</ul>



<p></p>
<p>This article, <a href="https://poststatus.com/agency-news-weekly-2025-04-14/">Agency News Weekly</a>, was published at  <a href="https://poststatus.com">Post Status</a> — the community for WordPress professionals.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 17 Apr 2025 21:30:26 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Nathan Ingram";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:49;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:48:"Post Status: The Latest from Post Status Members";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:32:"https://poststatus.com/?p=163503";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:70:"https://poststatus.com/the-latest-from-post-status-members-2025-04-14/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:5657:"<p><strong>Howard Spaeth</strong> launched his new WAAS project, <a href="https://builtforservice.com/Home">Built for Service</a>.</p>



<p><strong>Rodolfo Melogli</strong> promoted his upcoming Business Bloomer classes on WooCommerce, including topics like syncing with Google Sheets, auditing conversion rates, and optimizing sales emails. <a href="https://www.businessbloomer.com/class/how-to-sync-woocommerce-google-sheets-without-plugins/">Explore the sessions</a></p>



<p><strong>Syed Balkhi</strong> shared new feature updates to the <a href="https://x.com/syedbalkhi/status/1909290149462089893">Charitable plugin</a>.</p>



<p><strong>Adam Weeks</strong> released a <a href="https://youtu.be/6Axur-phLQ8?si=J0DKz5Lw02wDqP4X">video conversation</a> with Marc Benzakein, discussing authenticity and their shared WordPress experiences.</p>



<p><strong>Joost de Valk</strong> introduced a new <a href="https://progressplanner.com/progress-planners-new-integration-with-yoast/">Progress Planner integration with Yoast SEO</a>, offering tailored improvement tips based on your SEO setup.</p>



<p><strong>Corey Maass</strong> launched <a href="https://pausetab.com">PauseTab</a>, his first Chrome extension, which lets users snooze browser tabs until needed.</p>



<p><strong>Mitch Canter</strong> unveiled <a href="https://mrsfallout.com/">a retro-styled WordPress website</a> for a popular Fallout content creator, designed as a throwback to early internet aesthetics.</p>



<p><strong>Dan Knauss</strong> shared a <a href="https://www.youtube.com/watch?v=oThwBJLM4zg">PublishPress podcast interview</a> with Kyle Van Deusen about his community-building work at The Admin Bar.</p>



<p><strong>Topher DeRosia</strong> published a new <a href="https://heropress.com/essays/how-wordpress-changed-my-life-gratitude/">HeroPress essay</a> by Caio Ferreira, also available in Brazilian Portuguese with audio.</p>



<p><strong>Bob Dunn</strong> shared a <a href="https://dothewoo.io/navigating-the-accessibility-landscape-real-stories-with-bud-kraus/">Do the Woo episode</a> focused on accessibility, featuring real stories and insights from Bud Kraus.</p>



<p><strong>Jessica Lyschik</strong> appeared on the <a href="https://hubs.ly/Q03dVWfh0">Greyd Conversations podcast</a> with Mike McAlister to discuss product development using the WordPress site editor.</p>



<p><strong>Tom Whitaker</strong> shared a video on <a href="https://youtu.be/sARqZwnYOPM">AI prompt enhancement</a>, encouraging better communication with AI for more accurate results.</p>



<p><strong>Matt Medeiros</strong> released a <a href="https://youtu.be/SxrWvHv90wM">review of WordPress.com’s new AI builder</a>, offering initial thoughts on its capabilities and usefulness.</p>



<p><strong>Michelle Frechette</strong> published the latest <a href="https://wpwonderwomen.kit.com/posts/wp-wonder-women-newsletter-vol-1-issue-29">WP Wonder Women newsletter</a>, featuring Stacy Carlson and updates from many women in the WordPress ecosystem.</p>



<p><strong>Juan Hernando</strong> wrote about his role as <a href="https://ciudadanob.com/en/blog/2025/04/10/the-life-of-a-wordpress-community-program-manager-whatever-that-is/">Program Manager for the WordPress Community team</a> and how Weglot supports his work.</p>



<p><strong>Brian Henry</strong> announced a major update to <a href="https://github.com/BrianHenryIE/strauss/releases/tag/0.22.10.22.1">Strauss</a>, his PHP namespacing tool, including a dry-run feature, config feedback, and compatibility with Composer workflows.</p>



<p><strong>Jonathan Bossenger</strong> hosted a live session comparing <a href="https://www.twitch.tv/jonathanbossenger">GitHub Copilot agent mode to Cursor</a> in VS Code for AI-assisted development.</p>



<p><strong>Topher DeRosia</strong> mentioned his daughter’s creative work on <a href="https://www.patreon.com/SpoonQueenCreative?redirect=true">Patreon</a>, encouraging the community to join the free level to support her.</p>



<p><strong>Bud Kraus</strong> published a <a href="https://seriouslybud.com/stephanie-hudson/">feature on Stephanie Hudson</a>, spotlighting her journey and the people who influenced her life.</p>



<p><strong>Daniel Post</strong> explained how he <a href="https://bsky.app/profile/danielpost.com/post/3lmmbjg54q22m">migrated from DeployHQ to GitHub Actions</a> for smoother deployment workflows.</p>



<p><strong>Bob Dunn</strong> relaunched <a href="https://dothewoo.io/bobwp-unplugged-do-the-woo-query-newsletter-and-daily-posts/">BobWP Unplugged</a>, including a new newsletter and daily WooCommerce posts.</p>



<p><strong>Topher DeRosia</strong> published a new photo on <a href="https://wpphotos.info/barek-tila/">WPPhotos</a> showing sand and rock harvesting in Bangladesh.</p>



<p><strong>Hudson Atwell</strong> shared an <a href="https://gbti.network/ai/mcp/new-england-clam-chowder-the-red-or-the-white/">MCP server boilerplate article</a>, explaining how to use MCP servers on the Windsurf IDE along with setup and debugging tools.</p>



<p><strong>Ronni K. Gothard Christiansen</strong> announced <a href="https://aesirx.io/blog/aesirx/aesirx-cmp-for-wordpress-v1-5-0-consent-logging-and-more-customizable-user-control">AesirX CMP for WordPress v1.5.0</a>, introducing consent logging, editable modal text, improved UI, and support for eight new languages.</p>
<p>This article, <a href="https://poststatus.com/the-latest-from-post-status-members-2025-04-14/">The Latest from Post Status Members</a>, was published at  <a href="https://poststatus.com">Post Status</a> — the community for WordPress professionals.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 17 Apr 2025 21:30:26 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Nathan Ingram";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}}}}}}}}}}}}s:4:"type";i:128;s:7:"headers";O:48:"WpOrg\Requests\Utility\CaseInsensitiveDictionary":1:{s:7:" * data";a:9:{s:6:"server";s:5:"nginx";s:4:"date";s:29:"Tue, 06 May 2025 04:05:08 GMT";s:12:"content-type";s:8:"text/xml";s:13:"last-modified";s:29:"Tue, 06 May 2025 03:45:29 GMT";s:4:"vary";s:15:"Accept-Encoding";s:15:"x-frame-options";s:10:"SAMEORIGIN";s:16:"content-encoding";s:2:"br";s:7:"alt-svc";s:19:"h3=":443"; ma=86400";s:4:"x-nc";s:9:"HIT ord 1";}}s:5:"build";i:1727716820;s:21:"cache_expiration_time";i:1746547509;s:23:"__cache_expiration_time";i:1746547509;}s:15:"key_version_all";i:6;}