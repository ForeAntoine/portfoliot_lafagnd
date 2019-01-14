<?php
namespace Pottfoliotlafagnd\PortfoliotLafagnd\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Antoine Foré <fore.antoine@gmail.com>
 * @author Tanguy Laveau <tang.laveau@hotmail.fr>
 * @author Alexandre Gouguet <alexandregouguet@gmail.com>
 * @author Nicolas Diot <nicolasdiot65@gmail.com>
 */
class ProfilControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Pottfoliotlafagnd\PortfoliotLafagnd\Controller\ProfilController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Pottfoliotlafagnd\PortfoliotLafagnd\Controller\ProfilController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllProfilsFromRepositoryAndAssignsThemToView()
    {

        $allProfils = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $profilRepository = $this->getMockBuilder(\Pottfoliotlafagnd\PortfoliotLafagnd\Domain\Repository\ProfilRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $profilRepository->expects(self::once())->method('findAll')->will(self::returnValue($allProfils));
        $this->inject($this->subject, 'profilRepository', $profilRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('profils', $allProfils);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenProfilToView()
    {
        $profil = new \Pottfoliotlafagnd\PortfoliotLafagnd\Domain\Model\Profil();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('profil', $profil);

        $this->subject->showAction($profil);
    }
}
