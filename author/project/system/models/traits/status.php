<?php

declare(strict_types=1);

namespace ${REPO_OWNER}\${REPO_NAME}\models\traits;

// Files of the project
use ${REPO_OWNER}\${REPO_NAME}\models\traits\document as document_trait,
	${REPO_OWNER}\${REPO_NAME}\models\interfaces\document as document_interface;

// Built-in libraries
use exception;

/**
 * Status (DUMB SHIT)
 *
 * Trait for initialization of a status
 * 
 * @uses document_trait
 * @uses document_interface
 *
 * @method bool|null status(array &$$errors) Check document by its status
 *
 * @package ${REPO_OWNER}\${REPO_NAME}\models\traits
 *
 * @license http://www.wtfpl.net/ Do What The Fuck You Want To Public License
 * @author ${REPO_OWNER} <mail@domain.zone>
 */
trait status
{
	/**
	 * Status
	 *
	 * Check document by its status
	 *
	 * @param array &$$errors Registry of errors
	 *
	 * @return ?bool Status, if found
	 */
	public function status(array &$$errors = []): ?bool
	{
		try {
			// Read from ArangoDB and exit (success)
			return $$this->document->active ?? false;
		} catch (exception $$e) {
			// Writing to the registry of errors
			$$errors[] = [
				'text' => $$e->getMessage(),
				'file' => $$e->getFile(),
				'line' => $$e->getLine(),
				'stack' => $$e->getTrace()
			];
		}

		// Exit (fail)
		return null;
	}
}

