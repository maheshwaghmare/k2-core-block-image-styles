<!-- wp:paragraph -->
<p>This plugin adds a new image style for the Core Image block.</p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":39639,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="https://maheshwaghmare.com/wp-content/uploads/2022/01/K2-Core-Block-Image-Styles-1024x502.png" alt="" class="wp-image-39639"/><figcaption>Introduction</figcaption></figure>
<!-- /wp:image -->

<!-- wp:heading -->
<h2>How to use?</h2>
<!-- /wp:heading -->

<!-- wp:list -->
<ul><li>Go to <strong>Gutenberg Editor</strong> and add a image block.</li></ul>
<!-- /wp:list -->

<!-- wp:paragraph -->
<p>e.g.</p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":39642,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="https://maheshwaghmare.com/wp-content/uploads/2022/01/add-new-image-block-1024x502.png" alt="" class="wp-image-39642"/><figcaption>Add new image block</figcaption></figure>
<!-- /wp:image -->

<!-- wp:list -->
<ul><li>Now Choose Image from:<ol><li>Upload New Image<br><strong>Or</strong></li><li>Choose from Library<br><strong>Or</strong></li><li>Insert from URL</li></ol></li></ul>
<!-- /wp:list -->

<!-- wp:paragraph -->
<p>E.g.</p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":39644,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="https://maheshwaghmare.com/wp-content/uploads/2022/01/upload-new-image-or-select-from-existing-library-1024x502.png" alt="" class="wp-image-39644"/><figcaption>Upload or Select Image</figcaption></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":39647,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="https://maheshwaghmare.com/wp-content/uploads/2022/01/selected-image-from-library-1024x502.png" alt="" class="wp-image-39647"/><figcaption>Select Image</figcaption></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p>The uploaded image looks like this:</p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":39649,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="https://maheshwaghmare.com/wp-content/uploads/2022/01/uploaded-image-1024x502.png" alt="" class="wp-image-39649"/><figcaption>Uploaded Image</figcaption></figure>
<!-- /wp:image -->

<!-- wp:list -->
<ul><li>Select Image Styles from the Styles List:</li></ul>
<!-- /wp:list -->

<!-- wp:video {"autoplay":true,"guid":"8uUUGEHm","id":39651,"playsinline":true,"src":"https://videos.files.wordpress.com/8uUUGEHm/select-image-styles.mp4","videoPressTracks":[],"videoPressClassNames":"wp-block-embed is-type-video is-provider-videopress"} -->
<figure class="wp-block-video wp-block-embed is-type-video is-provider-videopress"><div class="wp-block-embed__wrapper">
https://videopress.com/v/8uUUGEHm?resizeToParent=true&amp;cover=true&amp;autoPlay=true&amp;playsinline=true&amp;preloadContent=metadata
</div></figure>
<!-- /wp:video -->

<!-- wp:heading -->
<h2>Features:</h2>
<!-- /wp:heading -->

<!-- wp:list -->
<ul><li>Zero configuration</li><li>Easy to use.</li><li>25+ image styles.<ul><li>Triangle</li><li>Trapezoid</li><li>Parallelogram</li><li>Rhombus</li><li>Pentagon</li><li>Hexagon</li><li>Heptagon</li><li>Octagon</li><li>Nonagon</li><li>Decagon</li><li>Bevel</li><li>Rabbet</li><li>Left Arrow</li><li>Right Arrow</li><li>Left Point</li><li>Right Point</li><li>Left Chevron</li><li>Right Chevron</li><li>Star</li><li>Cross</li><li>Message</li><li>Close</li><li>Frame</li><li>Inset</li><li>Custom Polygon</li><li>Circle</li><li>Ellipse</li></ul></li><li>Add new styles with filter.</li><li>Remove existing styles with filter.</li><li>Modify existing styles with filter.</li><li>Quick support</li></ul>
<!-- /wp:list -->

<!-- wp:paragraph -->
<p><strong>Welcome for featured requests</strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>If you have any suggestions or any featured requests then don't hesitate to <a href="https://maheshwaghmare.com/say-hello/">contact me</a>.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong>Add new image style</strong></p>
<!-- /wp:paragraph -->

<!-- wp:preformatted -->
<pre class="wp-block-preformatted">add_filter( 'k2cbis_get_styles', 'prefix_add_new_style' );

function prefix_add_new_style( $styles = array() ) {
    $styles[] = array(
        'name' => 'prefix-new-style',
        'label' => 'New Style',
        'inline_style' => '.wp-block-image.is-style-prefix-new-style img { clip-path: polygon(40% 10%, 30% 50%, 83%  25%); }',
    );

    return $styles;
}</pre>
<!-- /wp:preformatted -->

<!-- wp:heading -->
<h2>Bug reports</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Bug reports for "<strong>K2 Core Block Image Styles</strong>" are welcomed in our <a href="https://github.com/maheshwaghmare/k2-core-block-image-styles/">repository on GitHub</a>. Please note that GitHub is not a support forum and that issues that are not properly qualified as bugs will be closed.</p>
<!-- /wp:paragraph -->
