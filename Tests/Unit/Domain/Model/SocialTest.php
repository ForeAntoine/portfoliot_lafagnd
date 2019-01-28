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
class SocialTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \TLAFAGND\PortfoliotLafagnd\Domain\Model\Social
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \TLAFAGND\PortfoliotLafagnd\Domain\Model\Social();
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
    public function getIdentityReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getIdentity()
        );
    }

    /**
     * @test
     */
    public function setIdentityForStringSetsIdentity()
    {
        $this->subject->setIdentity('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'identity',
            $this->subject
        );
    }
}
