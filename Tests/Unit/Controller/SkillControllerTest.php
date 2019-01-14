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
class SkillControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Pottfoliotlafagnd\PortfoliotLafagnd\Controller\SkillController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Pottfoliotlafagnd\PortfoliotLafagnd\Controller\SkillController::class)
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
    public function showActionAssignsTheGivenSkillToView()
    {
        $skill = new \Pottfoliotlafagnd\PortfoliotLafagnd\Domain\Model\Skill();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('skill', $skill);

        $this->subject->showAction($skill);
    }
}
