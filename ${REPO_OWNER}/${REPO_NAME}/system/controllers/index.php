<?php

declare(strict_types=1);

namespace {$REPO_OWNER}\{$REPO_NAME}\controllers;

// Files of the project
use {$REPO_OWNER}\{$REPO_NAME}\controllers\core;

/**
 * Index controller
 *
 * @package {$REPO_OWNER}\{$REPO_NAME}\controllers
 * @author {$REPO_OWNER} < mail >
 */
final class index extends core
{
	/**
	 * Render the main page
	 *
	 * @param array $parameters Parameters of the request (POST + GET)
	 */
	public function index(array $parameters = []): ?string
	{
		// Exit (success)
		if ($_SERVER['REQUEST_METHOD'] === 'GET') return $this->view->render(DIRECTORY_SEPARATOR . 'index.html');
		else if ($_SERVER['REQUEST_METHOD'] === 'POST') return $main;

		// Exit (fail)
		return null;
	}
}
