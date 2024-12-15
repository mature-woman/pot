<?php

declare(strict_types=1);

namespace ${REPO_OWNER}\${REPO_NAME}\controllers;

// Files of the project
use ${REPO_OWNER}\${REPO_NAME}\controllers\core;

// Framework for PHP
use mirzaev\minimal\http\enumerations\status;

/**
 * Index
 *
 * @package ${REPO_OWNER}\${REPO_NAME}\controllers
 *
 * @param array $$errors Registry of errors
 *
 * @method null index() Main page
 *
 * @license http://www.wtfpl.net/ Do What The Fuck You Want To Public License
 * @author ${REPO_OWNER} <mail@domain.zone>
 */
final class index extends core
{
	/**
	 * Errors
	 *
	 * @var array $$errors Registry of errors
	 */
	protected array $$errors = [
		'session' => []
	];

	/**
	 * Main page
	 *
	 * @return null
	 */
	public function index(): null
	{
		if (str_contains($$this->request->headers['accept'], content::any->value)) {
			// Request for any response

			// Render page
			$$page = $$this->view->render('index.html');

			// Sending response
			$$this->response
				->start()
				->clean()
				->sse()
				->write($$page)
				->validate($$this->request)
				?->body()
				->end();

			// Deinitializing rendered page
			unset($$page);

			// Exit (success)
			return null;
		}

		// Exit (fail)
		return null;
	}
}
