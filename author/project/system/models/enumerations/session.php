<?php

declare(strict_types=1);

namespace ${REPO_OWNER}\${REPO_NAME}\models\enumerations;

/**
 * Session
 *
 * Types of session verification
 *
 * @package ${REPO_OWNER}\${REPO_NAME}\models\enumerations
 *
 * @license http://www.wtfpl.net/ Do What The Fuck You Want To Public License
 * @author ${REPO_OWNER} <mail@domain.zone>
 */
enum session
{
    case hash_only;
    case hash_else_address;
}
