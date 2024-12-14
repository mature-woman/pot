<?php

declare(strict_types=1);

namespace ${REPO_OWNER}\${REPO_NAME}\models\enumerations;

/**
 * Language
 *
 * Types of languages by ISO 639-1 standart
 *
 * @package ${REPO_OWNER}\${REPO_NAME}\models\enumerations
 *
 * @license http://www.wtfpl.net/ Do What The Fuck You Want To Public License
 * @author Arsen Mirzaev Tatyano-Muradovich <arsen@mirzaev.sexy>
 * @author ${REPO_OWNER} <mail@domain.zone>
 */
enum language
{
	case en;
	case ru;

	/**
   * Label
   *
	 * Initialize label of the language
	 *
	 * @param language|null $language Language into which to translate
	 *
	 * @return string Translated label of the language
   *
	 * @todo
	 * 1. More languages
	 * 2. Cases???
	 */
	public function label(?language $language = language::en): string
	{
		// Exit (success)
		return match ($this) {
			language::en =>	match ($language) {
				language::en => 'English',
				language::ru => 'Английский'
			},
			language::ru => match ($language) {
				language::en => 'Russian',
				language::ru => 'Русский'
			}
		};
	}
}
