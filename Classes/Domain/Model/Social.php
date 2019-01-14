<?php
namespace Pottfoliotlafagnd\PortfoliotLafagnd\Domain\Model;

/***
 *
 * This file is part of the "Portfolio TL AF AG ND" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019 Antoine Foré <fore.antoine@gmail.com>
 *           Tanguy Laveau <tang.laveau@hotmail.fr>
 *           Alexandre Gouguet <alexandregouguet@gmail.com>
 *           Nicolas Diot <nicolasdiot65@gmail.com>
 *
 ***/

/**
 * Social
 */
class Social extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * name
     *
     * @var string
     * @validate NotEmpty
     */
    protected $name = '';

    /**
     * identity
     *
     * @var string
     * @validate NotEmpty
     */
    protected $identity = '';

    /**
     * Returns the name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     *
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Returns the identity
     *
     * @return string $identity
     */
    public function getIdentity()
    {
        return $this->identity;
    }

    /**
     * Sets the identity
     *
     * @param string $identity
     * @return void
     */
    public function setIdentity($identity)
    {
        $this->identity = $identity;
    }
}
