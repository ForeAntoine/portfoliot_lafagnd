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
 * Projet
 */
class Project extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * Titre du projet
     *
     * @var string
     * @validate NotEmpty
     */
    protected $title = '';

    /**
     * Description du projet
     *
     * @var string
     * @validate NotEmpty
     */
    protected $description = '';

    /**
     * photo associées au projet
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
     * @cascade remove
     */
    protected $photo = null;

    /**
     * urlDepot
     *
     * @var string
     * @validate NotEmpty
     */
    protected $urlDepot = '';

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
     * compétences
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Pottfoliotlafagnd\PortfoliotLafagnd\Domain\Model\Skill>
     * @lazy
     */
    protected $skill = null;

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
        $this->photo = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->skill = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
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
     * Adds a FileReference
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $photo
     * @return void
     */
    public function addPhoto(\TYPO3\CMS\Extbase\Domain\Model\FileReference $photo)
    {
        $this->photo->attach($photo);
    }

    /**
     * Removes a FileReference
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $photoToRemove The FileReference to be removed
     * @return void
     */
    public function removePhoto(\TYPO3\CMS\Extbase\Domain\Model\FileReference $photoToRemove)
    {
        $this->photo->detach($photoToRemove);
    }

    /**
     * Returns the photo
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $photo
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Sets the photo
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $photo
     * @return void
     */
    public function setPhoto(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $photo)
    {
        $this->photo = $photo;
    }

    /**
     * Returns the urlDepot
     *
     * @return string $urlDepot
     */
    public function getUrlDepot()
    {
        return $this->urlDepot;
    }

    /**
     * Sets the urlDepot
     *
     * @param string $urlDepot
     * @return void
     */
    public function setUrlDepot($urlDepot)
    {
        $this->urlDepot = $urlDepot;
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
     * Adds a Skill
     *
     * @param \Pottfoliotlafagnd\PortfoliotLafagnd\Domain\Model\Skill $skill
     * @return void
     */
    public function addSkill(\Pottfoliotlafagnd\PortfoliotLafagnd\Domain\Model\Skill $skill)
    {
        $this->skill->attach($skill);
    }

    /**
     * Removes a Skill
     *
     * @param \Pottfoliotlafagnd\PortfoliotLafagnd\Domain\Model\Skill $skillToRemove The Skill to be removed
     * @return void
     */
    public function removeSkill(\Pottfoliotlafagnd\PortfoliotLafagnd\Domain\Model\Skill $skillToRemove)
    {
        $this->skill->detach($skillToRemove);
    }

    /**
     * Returns the skill
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Pottfoliotlafagnd\PortfoliotLafagnd\Domain\Model\Skill> $skill
     */
    public function getSkill()
    {
        return $this->skill;
    }

    /**
     * Sets the skill
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Pottfoliotlafagnd\PortfoliotLafagnd\Domain\Model\Skill> $skill
     * @return void
     */
    public function setSkill(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $skill)
    {
        $this->skill = $skill;
    }
}
