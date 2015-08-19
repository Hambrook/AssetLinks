<?php

/**
 *
 * @package     AssetLinks
 * @version     Version 1.0
 * @author      Rick Hambrook
 * @copyright   Copyright (c) 2015
 * @link        github.com/Hambrook/AssetLinks
 *
 */

namespace Craft;

class AssetLinksPlugin extends BasePlugin {
	public function getName() {
		return Craft::t("AssetLinks");
	}

	public function getVersion() {
		return "1.0";
	}

	public function getDeveloper() {
		return "Rick Hambrook";
	}

	public function getDeveloperUrl() {
		return "http://github.com/Hambrook/AssetLinks";
	}

	public function hasCpSection() {
		return false;
	}

	function init() {
		if (craft()->request->isCpRequest() && craft()->userSession->isLoggedIn()) {
			craft()->templates->includeJsResource("assetlinks/js/assetlinks.js");
			craft()->templates->includeCssResource("assetlinks/css/assetlinks.css");
		}
	}
}