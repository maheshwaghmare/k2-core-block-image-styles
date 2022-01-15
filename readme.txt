=== K2 Core Block Image Styles ===
Contributors: Mahesh901122
Donate link: https://www.paypal.me/mwaghmare7/
Tags: image styles, image designs, image variation, block image, image
Requires at least: 5.8
Tested up to: 5.8.3
Stable tag: 1.0.0
Requires PHP: 7.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

This plugin adds a new image styles for the Core Image block.

== Description ==

This plugin adds a new image styles for the Core Image block.

Read more in [one page quick documentation](https://maheshwaghmare.com/k2-core-block-image-styles/).

= Features: =

- Zero configuration
- Easy to use.
- 25+ image styles.
    - Triangle
    - Trapezoid
    - Parallelogram
    - Rhombus
    - Pentagon
    - Hexagon
    - Heptagon
    - Octagon
    - Nonagon
    - Decagon
    - Bevel
    - Rabbet
    - Left Arrow
    - Right Arrow
    - Left Point
    - Right Point
    - Left Chevron
    - Right Chevron
    - Star
    - Cross
    - Message
    - Close
    - Frame
    - Inset
    - Custom Polygon
    - Circle
    - Ellipse
- Add new styles with filter.
- Remove existing styles with filter.
- Modify existing styles with filter.
- Quick support

**Welcome for featured requests**

If you have any suggestion or any featured request then don't hesitate to [contact](https://maheshwaghmare.com/say-hello/).

=== Add new image style

<code>
add_filter( 'k2cbis_get_styles', 'prefix_add_new_style' );

function prefix_add_new_style( $styles = array() ) {
    $styles[] = array(
        'name' => 'prefix-new-style',
        'label' => 'New Style',
        'inline_style' => '.wp-block-image.is-style-prefix-new-style img { clip-path: polygon(40% 10%, 30% 50%, 83%  25%); }',
    );

    return $styles;
}
</code>

=== Bug reports

Bug reports for "K2 Core Block Image Styles" are welcomed in our [repository on GitHub](https://github.com/maheshwaghmare/k2-core-block-image-styles/). Please note that GitHub is not a support forum, and that issues that are not properly qualified as bugs will be closed.

=== Further reading

For more info check out the following:

* The [maheshwaghmare.com](https://maheshwaghmare.com/) official website.
* The [Contact Me](https://maheshwaghmare.com/say-hello/).
* The [Getting started guide](https://maheshwaghmare.com/k2-core-block-image-styles/).
* Other my [WordPress Plugins](https://wordpress.org/plugins/search/mahesh901122/).
* Contribute with [development](https://github.com/maheshwaghmare/k2-core-block-image-styles/).
* Make a [small donation](https://www.paypal.me/mwaghmare7/).

== Frequently Asked Questions ==

= Can I use this plugin with any Gutenberg Block =

Nope, For now this plugin add the styles only for the Core Image Gutenberg blocks. We may add those styles for other Gutenberg blocks in future.

= Can I enable or disable any styles? =

Yes. For now you can use the filter `k2cbis_get_styles` to add, remove or modify styles.

E.g.

<code>
add_filter( 'k2cbis_get_styles', 'prefix_add_new_style' );
function prefix_add_new_style( $styles = array() ) {
    $styles[] = array(
        'name' => 'prefix-new-style',
        'label' => 'New Style',
        'inline_style' => '.wp-block-image.is-style-prefix-new-style img { clip-path: polygon(40% 10%, 30% 50%, 83%  25%); }',
    );

    return $styles;
}
</code>

== Screenshots ==

1. Image Styles.

== Changelog ==

= 1.0 =
* Initial release.
