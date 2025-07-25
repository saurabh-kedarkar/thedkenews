<?php

namespace Smush\Core\Parser;

class Style implements Replaceable {
	/**
	 * @var string
	 */
	private $css;
	/**
	 * @var Image_URL[]
	 */
	private $image_urls;
	/**
	 * @var int
	 */
	private $position;

	public function __construct( $css, $image_urls, $position = - 1 ) {
		$this->css        = $css;
		$this->image_urls = $image_urls;
		$this->position   = $position;
	}

	/**
	 * @return string
	 */
	public function get_css() {
		return $this->css;
	}

	public function get_image_urls() {
		return $this->image_urls;
	}

	public function has_updates() {
		foreach ( $this->image_urls as $image_url ) {
			if ( $image_url->has_updates() ) {
				return true;
			}
		}

		return false;
	}

	public function get_updated() {
		$updated = $this->css;
		foreach ( $this->image_urls as $image_url ) {
			if ( $image_url->has_updates() ) {
				$updated = str_replace(
					$image_url->get_previous_url(),
					esc_url_raw( $image_url->get_url() ),
					$updated
				);
			}
		}

		return $updated;
	}

	public function get_original() {
		return $this->get_css();
	}

	public function get_position() {
		return $this->position;
	}
}
