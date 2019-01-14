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
class ProjetTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Pottfoliotlafagnd\PortfoliotLafagnd\Domain\Model\Projet
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Pottfoliotlafagnd\PortfoliotLafagnd\Domain\Model\Projet();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getTitleReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTitle()
        );
    }

    /**
     * @test
     */
    public function setTitleForStringSetsTitle()
    {
        $this->subject->setTitle('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'title',
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
    public function getPhotoReturnsInitialValueForFileReference()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getPhoto()
        );
    }

    /**
     * @test
     */
    public function setPhotoForFileReferenceSetsPhoto()
    {
        $photo = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $objectStorageHoldingExactlyOnePhoto = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOnePhoto->attach($photo);
        $this->subject->setPhoto($objectStorageHoldingExactlyOnePhoto);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOnePhoto,
            'photo',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addPhotoToObjectStorageHoldingPhoto()
    {
        $photo = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $photoObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $photoObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($photo));
        $this->inject($this->subject, 'photo', $photoObjectStorageMock);

        $this->subject->addPhoto($photo);
    }

    /**
     * @test
     */
    public function removePhotoFromObjectStorageHoldingPhoto()
    {
        $photo = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $photoObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $photoObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($photo));
        $this->inject($this->subject, 'photo', $photoObjectStorageMock);

        $this->subject->removePhoto($photo);
    }

    /**
     * @test
     */
    public function getUrlDepotReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getUrlDepot()
        );
    }

    /**
     * @test
     */
    public function setUrlDepotForStringSetsUrlDepot()
    {
        $this->subject->setUrlDepot('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'urlDepot',
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
}
