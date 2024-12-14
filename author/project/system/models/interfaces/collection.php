<?php

declare(strict_types=1);

namespace ${REPO_OWNER}\${REPO_NAME}\models\interfaces;

// Framework for ArangoDB
use mirzaev\arangodb\enumerations\collection\type;

/**
 * Collection
 *
 * Interface for implementing a collection from ArangoDB
 *
 * @package ${REPO_OWNER}\${REPO_NAME}\models\interfaces
 *
 * @license http://www.wtfpl.net/ Do What The Fuck You Want To Public License
 * @author ${REPO_OWNER} <mail@domain.zone>
 */
interface collection
{
	/**
	 * Name of the collection in ArangoDB
	 */
	public const string COLLECTION = 'THIS_COLLECTION_SHOULD_NOT_EXIST';

	/**
	 * Type of the collection in ArangoDB
	 */
	public const type TYPE = type::document;
}
