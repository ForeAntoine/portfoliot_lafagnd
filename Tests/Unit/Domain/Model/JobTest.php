<?php
namespace Pottfoliotlafagnd\PortfoliotLafagnd\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Antoine Foré <fore.antoine@gmail.com>
 * @author Tanguy Laveau <tang.laveau@hotmail.fr>
 * @author Alexandre Gouguet <alexandregouguet@gmail.com>
 * @author Nicolas Diot <nicolasdiot65@gmail.com>
 */
class JobTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Pottfoliotlafagnd\PortfoliotLafagnd\Domain\Model\Job
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Pottfoliotlafagnd\PortfoliotLafagnd\Domain\Model\Job();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getJobNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getJobName()
        );
    }

    /**
     * @test
     */
    public function setJobNameForStringSetsJobName()
    {
        $this->subject->setJobName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'jobName',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getCompanyNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getCompanyName()
        );
    }

    /**
     * @test
     */
    public function setCompanyNameForStringSetsCompanyName()
    {
        $this->subject->setCompanyName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'companyName',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDescriptionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDescription()
        );
    }

    /**
     * @test
     */
    public function setDescriptionForStringSetsDescription()
    {
        $this->subject->setDescription('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'description',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDateDebutReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getDateDebut()
        );
    }

    /**
     * @test
     */
    public function setDateDebutForDateTimeSetsDateDebut()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setDateDebut($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'dateDebut',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDateFinReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getDateFin()
        );
    }

    /**
     * @test
     */
    public function setDateFinForDateTimeSetsDateFin()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setDateFin($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'dateFin',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getContractReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getContract()
        );
    }

    /**
     * @test
     */
    public function setContractForIntSetsContract()
    {
        $this->subject->setContract(12);

        self::assertAttributeEquals(
            12,
            'contract',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getLocalisationReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getLocalisation()
        );
    }

    /**
     * @test
     */
    public function setLocalisationForStringSetsLocalisation()
    {
        $this->subject->setLocalisation('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'localisation',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getSkillsReturnsInitialValueForSkill()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getSkills()
        );
    }

    /**
     * @test
     */
    public function setSkillsForObjectStorageContainingSkillSetsSkills()
    {
        $skill = new \Pottfoliotlafagnd\PortfoliotLafagnd\Domain\Model\Skill();
        $objectStorageHoldingExactlyOneSkills = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneSkills->attach($skill);
        $this->subject->setSkills($objectStorageHoldingExactlyOneSkills);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneSkills,
            'skills',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addSkillToObjectStorageHoldingSkills()
    {
        $skill = new \Pottfoliotlafagnd\PortfoliotLafagnd\Domain\Model\Skill();
        $skillsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $skillsObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($skill));
        $this->inject($this->subject, 'skills', $skillsObjectStorageMock);

        $this->subject->addSkill($skill);
    }

    /**
     * @test
     */
    public function removeSkillFromObjectStorageHoldingSkills()
    {
        $skill = new \Pottfoliotlafagnd\PortfoliotLafagnd\Domain\Model\Skill();
        $skillsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $skillsObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($skill));
        $this->inject($this->subject, 'skills', $skillsObjectStorageMock);

        $this->subject->removeSkill($skill);
    }
}
