<?php
namespace TLAFAGND\PortfoliotLafagnd\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Antoine Foré <fore.antoine@gmail.com>
 * @author Tanguy Laveau <tang.laveau@hotmail.fr>
 * @author Alexandre Gouguet <alexandregouguet@gmail.com>
 * @author Nicolas Diot <nicolasdiot65@gmail.com>
 */
class ProfileTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \TLAFAGND\PortfoliotLafagnd\Domain\Model\Profile
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \TLAFAGND\PortfoliotLafagnd\Domain\Model\Profile();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getName()
        );
    }

    /**
     * @test
     */
    public function setNameForStringSetsName()
    {
        $this->subject->setName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'name',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getFirstNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getFirstName()
        );
    }

    /**
     * @test
     */
    public function setFirstNameForStringSetsFirstName()
    {
        $this->subject->setFirstName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'firstName',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getBirthDateReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getBirthDate()
        );
    }

    /**
     * @test
     */
    public function setBirthDateForStringSetsBirthDate()
    {
        $this->subject->setBirthDate('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'birthDate',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDrivingLicenceReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDrivingLicence()
        );
    }

    /**
     * @test
     */
    public function setDrivingLicenceForStringSetsDrivingLicence()
    {
        $this->subject->setDrivingLicence('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'drivingLicence',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPhoneReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPhone()
        );
    }

    /**
     * @test
     */
    public function setPhoneForStringSetsPhone()
    {
        $this->subject->setPhone('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'phone',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getMailReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getMail()
        );
    }

    /**
     * @test
     */
    public function setMailForStringSetsMail()
    {
        $this->subject->setMail('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'mail',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAddressReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getAddress()
        );
    }

    /**
     * @test
     */
    public function setAddressForStringSetsAddress()
    {
        $this->subject->setAddress('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'address',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPhotoReturnsInitialValueForFileReference()
    {
        self::assertEquals(
            null,
            $this->subject->getPhoto()
        );
    }

    /**
     * @test
     */
    public function setPhotoForFileReferenceSetsPhoto()
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setPhoto($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            'photo',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getProjectsReturnsInitialValueForProject()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getProjects()
        );
    }

    /**
     * @test
     */
    public function setProjectsForObjectStorageContainingProjectSetsProjects()
    {
        $project = new \TLAFAGND\PortfoliotLafagnd\Domain\Model\Project();
        $objectStorageHoldingExactlyOneProjects = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneProjects->attach($project);
        $this->subject->setProjects($objectStorageHoldingExactlyOneProjects);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneProjects,
            'projects',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addProjectToObjectStorageHoldingProjects()
    {
        $project = new \TLAFAGND\PortfoliotLafagnd\Domain\Model\Project();
        $projectsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $projectsObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($project));
        $this->inject($this->subject, 'projects', $projectsObjectStorageMock);

        $this->subject->addProject($project);
    }

    /**
     * @test
     */
    public function removeProjectFromObjectStorageHoldingProjects()
    {
        $project = new \TLAFAGND\PortfoliotLafagnd\Domain\Model\Project();
        $projectsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $projectsObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($project));
        $this->inject($this->subject, 'projects', $projectsObjectStorageMock);

        $this->subject->removeProject($project);
    }

    /**
     * @test
     */
    public function getJobReturnsInitialValueForJob()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getJob()
        );
    }

    /**
     * @test
     */
    public function setJobForObjectStorageContainingJobSetsJob()
    {
        $job = new \TLAFAGND\PortfoliotLafagnd\Domain\Model\Job();
        $objectStorageHoldingExactlyOneJob = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneJob->attach($job);
        $this->subject->setJob($objectStorageHoldingExactlyOneJob);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneJob,
            'job',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addJobToObjectStorageHoldingJob()
    {
        $job = new \TLAFAGND\PortfoliotLafagnd\Domain\Model\Job();
        $jobObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $jobObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($job));
        $this->inject($this->subject, 'job', $jobObjectStorageMock);

        $this->subject->addJob($job);
    }

    /**
     * @test
     */
    public function removeJobFromObjectStorageHoldingJob()
    {
        $job = new \TLAFAGND\PortfoliotLafagnd\Domain\Model\Job();
        $jobObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $jobObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($job));
        $this->inject($this->subject, 'job', $jobObjectStorageMock);

        $this->subject->removeJob($job);
    }

    /**
     * @test
     */
    public function getSocialReturnsInitialValueForSocial()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getSocial()
        );
    }

    /**
     * @test
     */
    public function setSocialForObjectStorageContainingSocialSetsSocial()
    {
        $social = new \TLAFAGND\PortfoliotLafagnd\Domain\Model\Social();
        $objectStorageHoldingExactlyOneSocial = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneSocial->attach($social);
        $this->subject->setSocial($objectStorageHoldingExactlyOneSocial);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneSocial,
            'social',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addSocialToObjectStorageHoldingSocial()
    {
        $social = new \TLAFAGND\PortfoliotLafagnd\Domain\Model\Social();
        $socialObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $socialObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($social));
        $this->inject($this->subject, 'social', $socialObjectStorageMock);

        $this->subject->addSocial($social);
    }

    /**
     * @test
     */
    public function removeSocialFromObjectStorageHoldingSocial()
    {
        $social = new \TLAFAGND\PortfoliotLafagnd\Domain\Model\Social();
        $socialObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $socialObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($social));
        $this->inject($this->subject, 'social', $socialObjectStorageMock);

        $this->subject->removeSocial($social);
    }

    /**
     * @test
     */
    public function getTrainingReturnsInitialValueForTraining()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getTraining()
        );
    }

    /**
     * @test
     */
    public function setTrainingForObjectStorageContainingTrainingSetsTraining()
    {
        $training = new \TLAFAGND\PortfoliotLafagnd\Domain\Model\Training();
        $objectStorageHoldingExactlyOneTraining = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneTraining->attach($training);
        $this->subject->setTraining($objectStorageHoldingExactlyOneTraining);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneTraining,
            'training',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addTrainingToObjectStorageHoldingTraining()
    {
        $training = new \TLAFAGND\PortfoliotLafagnd\Domain\Model\Training();
        $trainingObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $trainingObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($training));
        $this->inject($this->subject, 'training', $trainingObjectStorageMock);

        $this->subject->addTraining($training);
    }

    /**
     * @test
     */
    public function removeTrainingFromObjectStorageHoldingTraining()
    {
        $training = new \TLAFAGND\PortfoliotLafagnd\Domain\Model\Training();
        $trainingObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $trainingObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($training));
        $this->inject($this->subject, 'training', $trainingObjectStorageMock);

        $this->subject->removeTraining($training);
    }
}
