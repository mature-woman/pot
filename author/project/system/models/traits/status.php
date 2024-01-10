<?php

declare(strict_types=1);

namespace ${REPO_OWNER}\${REPO_NAME}\models\traits;

// Built-in libraries
use exception;

/**
 * Trait fo initialization of a status
 *
 * @package ${REPO_OWNER}\${REPO_NAME}\models\traits
 *
 * @author ${REPO_OWNER} < mail >
 */
trait status
{
	/**
	 * Initialize of a status
	 *
	 * @param array &$errors Registry of errors
	 *
	 * @return ?bool Status, if they are found
	 */
	public function status(array &$errors = []): ?bool
	{
		try {
			// Read from ArangoDB and exit (success)
			return $this->document->active ?? false;
		} catch (exception $e) {
			// Write to the registry of errors
			$errors[] = [
				'text' => $e->getMessage(),
				'file' => $e->getFile(),
				'line' => $e->getLine(),
				'stack' => $e->getTrace()
			];
		}

		// Exit (fail)
		return null;
	}
}

