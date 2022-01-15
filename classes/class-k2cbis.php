<?php
/**
 * Init
 *
 * @package K2CBIS
 * @since 1.0.0
 */

if ( ! class_exists( 'K2CBIS' ) ) :

	/**
	 * Init
	 *
	 * @since 1.0.0
	 */
	class K2CBIS {

		/**
		 * Instance
		 *
		 * @access private
		 * @var  $instance
		 * @since 1.0.0
		 */
		private static $instance;

		/**
		 * Initiator
		 *
		 * @since 1.0.0
		 * @return object initialized object of class.
		 */
		public static function set_instance() {
			if ( ! isset( self::$instance ) ) {
				self::$instance = new self();
			}
			return self::$instance;
		}

		/**
		 * Constructor
		 *
		 * @since 1.0.0
		 */
		public function __construct() {
			add_action( 'init', array( $this, 'register_styles' ) );
		}

		/**
		 * Register Image Styles
		 *
		 * @since 1.0.0
		 * @return array
		 */
		public function register_styles() {

			$styles = $this->get_styles();

			if ( empty( $styles ) ) {
				return;
			}

			foreach ( $styles as $style ) {
				register_block_style(
					'core/image',
					array(
						'name'         => $style['name'],
						'label'        => $style['label'],
						'inline_style' => $style['inline_style'],
					)
				);
			}
		}

		/**
		 * Get Image Styles
		 *
		 * @since 1.0.0
		 * @return array
		 */
		public function get_styles() {
			return apply_filters(
				'k2cbis_get_styles',
				array(
					array(
						'name'         => 'k2cbis-triangle',
						'label'        => 'Triangle',
						'inline_style' => '.wp-block-image.is-style-k2cbis-triangle img { clip-path: polygon(50% 0%, 0% 100%, 100% 100%); }',
					),
					array(
						'name'         => 'k2cbis-trapezoid',
						'label'        => 'Trapezoid',
						'inline_style' => '.wp-block-image.is-style-k2cbis-trapezoid img { clip-path: polygon(20% 0%, 80% 0%, 100% 100%, 0% 100%); }',
					),
					array(
						'name'         => 'k2cbis-parallelogram',
						'label'        => 'Parallelogram',
						'inline_style' => '.wp-block-image.is-style-k2cbis-parallelogram img { clip-path: polygon(25% 0%, 100% 0%, 75% 100%, 0% 100%); }',
					),
					array(
						'name'         => 'k2cbis-rhombus',
						'label'        => 'Rhombus',
						'inline_style' => '.wp-block-image.is-style-k2cbis-rhombus img { clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%); }',
					),
					array(
						'name'         => 'k2cbis-pentagon',
						'label'        => 'Pentagon',
						'inline_style' => '.wp-block-image.is-style-k2cbis-pentagon img { clip-path: polygon(50% 0%, 100% 38%, 82% 100%, 18% 100%, 0% 38%); }',
					),
					array(
						'name'         => 'k2cbis-hexagon',
						'label'        => 'Hexagon',
						'inline_style' => '.wp-block-image.is-style-k2cbis-hexagon img { clip-path: polygon(25% 0%, 75% 0%, 100% 50%, 75% 100%, 25% 100%, 0% 50%); }',
					),
					array(
						'name'         => 'k2cbis-heptagon',
						'label'        => 'Heptagon',
						'inline_style' => '.wp-block-image.is-style-k2cbis-heptagon img { clip-path: polygon(50% 0%, 90% 20%, 100% 60%, 75% 100%, 25% 100%, 0% 60%, 10% 20%); }',
					),
					array(
						'name'         => 'k2cbis-octagon',
						'label'        => 'Octagon',
						'inline_style' => '.wp-block-image.is-style-k2cbis-octagon img { clip-path: polygon(30% 0%, 70% 0%, 100% 30%, 100% 70%, 70% 100%, 30% 100%, 0% 70%, 0% 30%); }',
					),
					array(
						'name'         => 'k2cbis-nonagon',
						'label'        => 'Nonagon',
						'inline_style' => '.wp-block-image.is-style-k2cbis-nonagon img { clip-path: polygon(50% 0%, 83% 12%, 100% 43%, 94% 78%, 68% 100%, 32% 100%, 6% 78%, 0% 43%, 17% 12%); }',
					),
					array(
						'name'         => 'k2cbis-decagon',
						'label'        => 'Decagon',
						'inline_style' => '.wp-block-image.is-style-k2cbis-decagon img { clip-path: polygon(50% 0%, 80% 10%, 100% 35%, 100% 70%, 80% 90%, 50% 100%, 20% 90%, 0% 70%, 0% 35%, 20% 10%); }',
					),
					array(
						'name'         => 'k2cbis-bevel',
						'label'        => 'Bevel',
						'inline_style' => '.wp-block-image.is-style-k2cbis-bevel img { clip-path: polygon(20% 0%, 80% 0%, 100% 20%, 100% 80%, 80% 100%, 20% 100%, 0% 80%, 0% 20%); }',
					),
					array(
						'name'         => 'k2cbis-rabbet',
						'label'        => 'Rabbet',
						'inline_style' => '.wp-block-image.is-style-k2cbis-rabbet img { clip-path: polygon(0% 15%, 15% 15%, 15% 0%, 85% 0%, 85% 15%, 100% 15%, 100% 85%, 85% 85%, 85% 100%, 15% 100%, 15% 85%, 0% 85%); }',
					),
					array(
						'name'         => 'k2cbis-left-arrow',
						'label'        => 'Left Arrow',
						'inline_style' => '.wp-block-image.is-style-k2cbis-left-arrow img { clip-path: polygon(40% 0%, 40% 20%, 100% 20%, 100% 80%, 40% 80%, 40% 100%, 0% 50%); }',
					),
					array(
						'name'         => 'k2cbis-right-arrow',
						'label'        => 'Right Arrow',
						'inline_style' => '.wp-block-image.is-style-k2cbis-right-arrow img { clip-path: polygon(0% 20%, 60% 20%, 60% 0%, 100% 50%, 60% 100%, 60% 80%, 0% 80%); }',
					),
					array(
						'name'         => 'k2cbis-left-point',
						'label'        => 'Left Point',
						'inline_style' => '.wp-block-image.is-style-k2cbis-left-point img { clip-path: polygon(25% 0%, 100% 0%, 100% 100%, 25% 100%, 0% 50%); }',
					),
					array(
						'name'         => 'k2cbis-right-point',
						'label'        => 'Right Point',
						'inline_style' => '.wp-block-image.is-style-k2cbis-right-point img { clip-path: polygon(0% 0%, 75% 0%, 100% 50%, 75% 100%, 0% 100%); }',
					),
					array(
						'name'         => 'k2cbis-left-chevron',
						'label'        => 'Left Chevron',
						'inline_style' => '.wp-block-image.is-style-k2cbis-left-chevron img { clip-path: polygon(100% 0%, 75% 50%, 100% 100%, 25% 100%, 0% 50%, 25% 0%); }',
					),
					array(
						'name'         => 'k2cbis-right-chevron',
						'label'        => 'Right Chevron',
						'inline_style' => '.wp-block-image.is-style-k2cbis-right-chevron img { clip-path: polygon(75% 0%, 100% 50%, 75% 100%, 0% 100%, 25% 50%, 0% 0%); }',
					),
					array(
						'name'         => 'k2cbis-star',
						'label'        => 'Star',
						'inline_style' => '.wp-block-image.is-style-k2cbis-star img { clip-path: polygon(50% 0%, 61% 35%, 98% 35%, 68% 57%, 79% 91%, 50% 70%, 21% 91%, 32% 57%, 2% 35%, 39% 35%); }',
					),
					array(
						'name'         => 'k2cbis-cross',
						'label'        => 'Cross',
						'inline_style' => '.wp-block-image.is-style-k2cbis-cross img { clip-path: polygon(10% 25%, 35% 25%, 35% 0%, 65% 0%, 65% 25%, 90% 25%, 90% 50%, 65% 50%, 65% 100%, 35% 100%, 35% 50%, 10% 50%); }',
					),
					array(
						'name'         => 'k2cbis-message',
						'label'        => 'Message',
						'inline_style' => '.wp-block-image.is-style-k2cbis-message img { clip-path: polygon(0% 0%, 100% 0%, 100% 75%, 75% 75%, 75% 100%, 50% 75%, 0% 75%); }',
					),
					array(
						'name'         => 'k2cbis-close',
						'label'        => 'Close',
						'inline_style' => '.wp-block-image.is-style-k2cbis-close img { clip-path: polygon(20% 0%, 0% 20%, 30% 50%, 0% 80%, 20% 100%, 50% 70%, 80% 100%, 100% 80%, 70% 50%, 100% 20%, 80% 0%, 50% 30%); }',
					),
					array(
						'name'         => 'k2cbis-frame',
						'label'        => 'Frame',
						'inline_style' => '.wp-block-image.is-style-k2cbis-frame img { clip-path: polygon(0% 0%, 0% 100%, 25% 100%, 25% 25%, 75% 25%, 75% 75%, 25% 75%, 25% 100%, 100% 100%, 100% 0%); }',
					),
					array(
						'name'         => 'k2cbis-inset',
						'label'        => 'Inset',
						'inline_style' => '.wp-block-image.is-style-k2cbis-inset img { clip-path: inset(5% 20% 15% 10%); }',
					),
					array(
						'name'         => 'k2cbis-custom-polygon',
						'label'        => 'Custom Polygon',
						'inline_style' => '.wp-block-image.is-style-k2cbis-custom-polygon img { clip-path: polygon(10% 75%, 10% 25%, 35% 0%, 100% 10%, 90% 30%, 50% 30%, 40% 40%, 40% 60%, 50% 70%, 90% 70%, 100% 90%, 35% 100%); }',
					),
					array(
						'name'         => 'k2cbis-circle',
						'label'        => 'Circle',
						'inline_style' => '.wp-block-image.is-style-k2cbis-circle img { clip-path: circle(50% at 50% 50%); }',
					),
					array(
						'name'         => 'k2cbis-ellipse',
						'label'        => 'Ellipse',
						'inline_style' => '.wp-block-image.is-style-k2cbis-ellipse img { clip-path: ellipse(25% 40% at 50% 50%); }',
					),
				)
			);
		}
	}

	/**
	 * Kicking this off by calling 'set_instance()' method
	 */
	K2CBIS::set_instance();

endif;

