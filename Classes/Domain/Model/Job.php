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
 * Job
 */
class Job extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * jobName
     *
     * @var string
     * @validate NotEmpty
     */
    protected $jobName = '';

    /**
     * companyName
     *
     * @var string
     * @validate NotEmpty
     */
    protected $companyName = '';

    /**
     * description
     *
     * @var string
     * @validate NotEmpty
     */
    protected $description = '';

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
     */
    protected $dateFin = null;

    /**
     * contract
     *
     * @var int
     * @validate NotEmpty
     */
    protected $contract = 0;

    /**
     * localisation
     *
     * @var string
     * @validate NotEmpty
     */
    protected $localisation = '';

    /**
     * compétences de l'emploie
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Pottfoliotlafagnd\PortfoliotLafagnd\Domain\Model\Skill>
     */
    protected $skills = null;

    /**
     * Returns the jobName
     *
     * @return string $jobName
     */
    public function getJobName()
    {
        return $this->jobName;
    }

    /**
     * Sets the jobName
     *
     * @param string $jobName
     * @return void
     */
    public function setJobName($jobName)
    {
        $this->jobName = $jobName;
    }

    /**
     * Returns the companyName
     *
     * @return string $companyName
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Sets the companyName
     *
     * @param string $companyName
     * @return void
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;
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
     * Returns the contract
     *
     * @return int $contract
     */
    public function getContract()
    {
        return $this->contract;
    }

    /**
     * Sets the contract
     *
     * @param int $contract
     * @return void
     */
    public function setContract($contract)
    {
        $this->contract = $contract;
    }

    /**
     * Returns the localisation
     *
     * @return string $localisation
     */
    public function getLocalisation()
    {
        return $this->localisation;
    }

    /**
     * Sets the localisation
     *
     * @param string $localisation
     * @return void
     */
    public function setLocalisation($localisation)
    {
        $this->localisation = $localisation;
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
     * @param \Pottfoliotlafagnd\PortfoliotLafagnd\Domain\Model\Skill $skill
     * @return void
     */
    public function addSkill(\Pottfoliotlafagnd\PortfoliotLafagnd\Domain\Model\Skill $skill)
    {
        $this->skills->attach($skill);
    }

    /**
     * Removes a Skill
     *
     * @param \Pottfoliotlafagnd\PortfoliotLafagnd\Domain\Model\Skill $skillToRemove The Skill to be removed
     * @return void
     */
    public function removeSkill(\Pottfoliotlafagnd\PortfoliotLafagnd\Domain\Model\Skill $skillToRemove)
    {
        $this->skills->detach($skillToRemove);
    }

    /**
     * Returns the skills
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Pottfoliotlafagnd\PortfoliotLafagnd\Domain\Model\Skill> $skills
     */
    public function getSkills()
    {
        return $this->skills;
    }

    /**
     * Sets the skills
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Pottfoliotlafagnd\PortfoliotLafagnd\Domain\Model\Skill> $skills
     * @return void
     */
    public function setSkills(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $skills)
    {
        $this->skills = $skills;
    }
}
