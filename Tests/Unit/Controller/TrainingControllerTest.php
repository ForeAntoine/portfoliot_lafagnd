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
class TrainingControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Pottfoliotlafagnd\PortfoliotLafagnd\Controller\TrainingController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Pottfoliotlafagnd\PortfoliotLafagnd\Controller\TrainingController::class)
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
    public function listActionFetchesAllTrainingsFromRepositoryAndAssignsThemToView()
    {

        $allTrainings = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $trainingRepository = $this->getMockBuilder(\::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $trainingRepository->expects(self::once())->method('findAll')->will(self::returnValue($allTrainings));
        $this->inject($this->subject, 'trainingRepository', $trainingRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('trainings', $allTrainings);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenTrainingToView()
    {
        $training = new \Pottfoliotlafagnd\PortfoliotLafagnd\Domain\Model\Training();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('training', $training);

        $this->subject->showAction($training);
    }
}
