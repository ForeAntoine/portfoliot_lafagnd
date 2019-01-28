<?php
namespace TLAFAGND\PortfoliotLafagnd\Domain\Model;

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
 * Formation de la personne dans un domaine
 */
class Training extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * domaine d'activité de la formation
     *
     * @var int
     * @validate NotEmpty
     */
    protected $domain = 0;

    /**
     * dateDebut
     *
     * @var \DateTime
     * @validate NotEmpty
     */
    protected $dateDebut = null;

    /**
     * dateFin
     *
     * @var \DateTime
     * @validate NotEmpty
     */
    protected $dateFin = null;

    /**
     * degree
     *
     * @var int
     * @validate NotEmpty
     */
    protected $degree = '';

    /**
     * location
     *
     * @var string
     */
    protected $location = '';

    /**
     * title
     *
     * @var string
     */
    protected $title = '';

    /**
     * description
     *
     * @var string
     */
    protected $description = '';

    /**
     * compétences de formation
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TLAFAGND\PortfoliotLafagnd\Domain\Model\Skill>
     * @lazy
     */
    protected $skills = null;

    /**
     * Returns the domain
     *
     * @return int $domain
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * Sets the domain
     *
     * @param int $domain
     * @return void
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;
    }

    /**
     * Returns the dateDebut
     *
     * @return \DateTime $dateDebut
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Sets the dateDebut
     *
     * @param \DateTime $dateDebut
     * @return void
     */
    public function setDateDebut(\DateTime $dateDebut)
    {
        $this->dateDebut = $dateDebut;
    }

    /**
     * Returns the dateFin
     *
     * @return \DateTime $dateFin
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Sets the dateFin
     *
     * @param \DateTime $dateFin
     * @return void
     */
    public function setDateFin(\DateTime $dateFin)
    {
        $this->dateFin = $dateFin;
    }

    /**
     * Returns the location
     *
     * @return string $location
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets the location
     *
     * @param string $location
     * @return void
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }

    /**
     * Returns the title
     *
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title
     *
     * @param string $title
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Returns the description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     *
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Returns the degree
     *
     * @return int degree
     */
    public function getDegree()
    {
        return $this->degree;
    }

    /**
     * Sets the degree
     *
     * @param string $degree
     * @return void
     */
    public function setDegree($degree)
    {
        $this->degree = $degree;
    }

    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->skills = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a Skill
     *
     * @param \TLAFAGND\PortfoliotLafagnd\Domain\Model\Skill $skill
     * @return void
     */
    public function addSkill(\TLAFAGND\PortfoliotLafagnd\Domain\Model\Skill $skill)
    {
        $this->skills->attach($skill);
    }

    /**
     * Removes a Skill
     *
     * @param \TLAFAGND\PortfoliotLafagnd\Domain\Model\Skill $skillToRemove The Skill to be removed
     * @return void
     */
    public function removeSkill(\TLAFAGND\PortfoliotLafagnd\Domain\Model\Skill $skillToRemove)
    {
        $this->skills->detach($skillToRemove);
    }

    /**
     * Returns the skills
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TLAFAGND\PortfoliotLafagnd\Domain\Model\Skill> skills
     */
    public function getSkills()
    {
        return $this->skills;
    }

    /**
     * Sets the skills
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TLAFAGND\PortfoliotLafagnd\Domain\Model\Skill> $skills
     * @return void
     */
    public function setSkills(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $skills)
    {
        $this->skills = $skills;
    }
}
