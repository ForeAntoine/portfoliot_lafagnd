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
 * Profil de l'utilisateur
 */
class Profile extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * name
     *
     * @var string
     * @validate NotEmpty
     */
    protected $name = '';

    /**
     * firstName
     *
     * @var string
     * @validate NotEmpty
     */
    protected $firstName = '';

    /**
     * birthDate
     *
     * @var string
     * @validate NotEmpty
     */
    protected $birthDate = '';

    /**
     * drivingLicence
     *
     * @var string
     */
    protected $drivingLicence = '';

    /**
     * phone
     *
     * @var string
     */
    protected $phone = '';

    /**
     * mail
     *
     * @var string
     */
    protected $mail = '';

    /**
     * address
     *
     * @var string
     */
    protected $address = '';

    /**
     * photo
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @validate NotEmpty
     * @cascade remove
     */
    protected $photo = null;

    /**
     * liste des projets du profil
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Pottfoliotlafagnd\PortfoliotLafagnd\Domain\Model\Project>
     * @cascade remove
     * @lazy
     */
    protected $projects = null;

    /**
     * emplois réalisés
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Pottfoliotlafagnd\PortfoliotLafagnd\Domain\Model\Job>
     * @cascade remove
     * @lazy
     */
    protected $job = null;

    /**
     * réseaux sociaux
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Pottfoliotlafagnd\PortfoliotLafagnd\Domain\Model\Social>
     * @cascade remove
     * @lazy
     */
    protected $social = null;

    /**
     * fomations de la personne
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Pottfoliotlafagnd\PortfoliotLafagnd\Domain\Model\Training>
     * @lazy
     */
    protected $training = null;

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
     * Returns the firstName
     *
     * @return string $firstName
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Sets the firstName
     *
     * @param string $firstName
     * @return void
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * Returns the birthDate
     *
     * @return string $birthDate
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Sets the birthDate
     *
     * @param string $birthDate
     * @return void
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;
    }

    /**
     * Returns the drivingLicence
     *
     * @return string $drivingLicence
     */
    public function getDrivingLicence()
    {
        return $this->drivingLicence;
    }

    /**
     * Sets the drivingLicence
     *
     * @param string $drivingLicence
     * @return void
     */
    public function setDrivingLicence($drivingLicence)
    {
        $this->drivingLicence = $drivingLicence;
    }

    /**
     * Returns the phone
     *
     * @return string $phone
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Sets the phone
     *
     * @param string $phone
     * @return void
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * Returns the mail
     *
     * @return string $mail
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Sets the mail
     *
     * @param string $mail
     * @return void
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    /**
     * Returns the address
     *
     * @return string $address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets the address
     *
     * @param string $address
     * @return void
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * Returns the photo
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $photo
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Sets the photo
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $photo
     * @return void
     */
    public function setPhoto(\TYPO3\CMS\Extbase\Domain\Model\FileReference $photo)
    {
        $this->photo = $photo;
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
        $this->projects = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->job = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->social = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->training = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a Project
     *
     * @param \Pottfoliotlafagnd\PortfoliotLafagnd\Domain\Model\Project $project
     * @return void
     */
    public function addProject(\Pottfoliotlafagnd\PortfoliotLafagnd\Domain\Model\Project $project)
    {
        $this->projects->attach($project);
    }

    /**
     * Removes a Project
     *
     * @param \Pottfoliotlafagnd\PortfoliotLafagnd\Domain\Model\Project $projectToRemove The Project to be removed
     * @return void
     */
    public function removeProject(\Pottfoliotlafagnd\PortfoliotLafagnd\Domain\Model\Project $projectToRemove)
    {
        $this->projects->detach($projectToRemove);
    }

    /**
     * Returns the projects
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Pottfoliotlafagnd\PortfoliotLafagnd\Domain\Model\Project> $projects
     */
    public function getProjects()
    {
        return $this->projects;
    }

    /**
     * Sets the projects
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Pottfoliotlafagnd\PortfoliotLafagnd\Domain\Model\Project> $projects
     * @return void
     */
    public function setProjects(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $projects)
    {
        $this->projects = $projects;
    }

    /**
     * Adds a Job
     *
     * @param \Pottfoliotlafagnd\PortfoliotLafagnd\Domain\Model\Job $job
     * @return void
     */
    public function addJob(\Pottfoliotlafagnd\PortfoliotLafagnd\Domain\Model\Job $job)
    {
        $this->job->attach($job);
    }

    /**
     * Removes a Job
     *
     * @param \Pottfoliotlafagnd\PortfoliotLafagnd\Domain\Model\Job $jobToRemove The Job to be removed
     * @return void
     */
    public function removeJob(\Pottfoliotlafagnd\PortfoliotLafagnd\Domain\Model\Job $jobToRemove)
    {
        $this->job->detach($jobToRemove);
    }

    /**
     * Returns the job
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Pottfoliotlafagnd\PortfoliotLafagnd\Domain\Model\Job> $job
     */
    public function getJob()
    {
        return $this->job;
    }

    /**
     * Sets the job
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Pottfoliotlafagnd\PortfoliotLafagnd\Domain\Model\Job> $job
     * @return void
     */
    public function setJob(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $job)
    {
        $this->job = $job;
    }

    /**
     * Adds a Social
     *
     * @param \Pottfoliotlafagnd\PortfoliotLafagnd\Domain\Model\Social $social
     * @return void
     */
    public function addSocial(\Pottfoliotlafagnd\PortfoliotLafagnd\Domain\Model\Social $social)
    {
        $this->social->attach($social);
    }

    /**
     * Removes a Social
     *
     * @param \Pottfoliotlafagnd\PortfoliotLafagnd\Domain\Model\Social $socialToRemove The Social to be removed
     * @return void
     */
    public function removeSocial(\Pottfoliotlafagnd\PortfoliotLafagnd\Domain\Model\Social $socialToRemove)
    {
        $this->social->detach($socialToRemove);
    }

    /**
     * Returns the social
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Pottfoliotlafagnd\PortfoliotLafagnd\Domain\Model\Social> $social
     */
    public function getSocial()
    {
        return $this->social;
    }

    /**
     * Sets the social
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Pottfoliotlafagnd\PortfoliotLafagnd\Domain\Model\Social> $social
     * @return void
     */
    public function setSocial(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $social)
    {
        $this->social = $social;
    }

    /**
     * Adds a Training
     *
     * @param \Pottfoliotlafagnd\PortfoliotLafagnd\Domain\Model\Training $training
     * @return void
     */
    public function addTraining(\Pottfoliotlafagnd\PortfoliotLafagnd\Domain\Model\Training $training)
    {
        $this->training->attach($training);
    }

    /**
     * Removes a Training
     *
     * @param \Pottfoliotlafagnd\PortfoliotLafagnd\Domain\Model\Training $trainingToRemove The Training to be removed
     * @return void
     */
    public function removeTraining(\Pottfoliotlafagnd\PortfoliotLafagnd\Domain\Model\Training $trainingToRemove)
    {
        $this->training->detach($trainingToRemove);
    }

    /**
     * Returns the training
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Pottfoliotlafagnd\PortfoliotLafagnd\Domain\Model\Training> $training
     */
    public function getTraining()
    {
        return $this->training;
    }

    /**
     * Sets the training
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Pottfoliotlafagnd\PortfoliotLafagnd\Domain\Model\Training> $training
     * @return void
     */
    public function setTraining(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $training)
    {
        $this->training = $training;
    }
}
