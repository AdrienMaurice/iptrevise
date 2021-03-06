<?php
/**
 * This file is part of the IP-Trevise Application.
 *
 * PHP version 7.1
 *
 * (c) Alexandre Tranchant <alexandre.tranchant@gmail.com>
 *
 * @category Entity
 *
 * @author    Alexandre Tranchant <alexandre.tranchant@gmail.com>
 * @copyright 2017 Cerema
 * @license   CeCILL-B V1
 * @see       http://www.cecill.info/licences/Licence_CeCILL-B_V1-en.txt
 *
 */

/**
 * HomeCest class.
 *
 * @category Testing
 *
 * @author  Alexandre Tranchant <alexandre.tranchant@gmail.com>
 * @license CeCILL-B V1
 *
 */
class HomeCest
{
    /**
     * Test to try.
     *
     * @param FunctionalTester $I
     */
    public function tryToTest(FunctionalTester $I)
    {
        $I->wantToTest('The Homepage is well displayed');
        $I->amOnPage('/');
        $I->see('IP-Manager', '.navbar-brand');

        $I->wantToTest('Menu is well displayed');
        $I->see('Accueil', '.active');
        $I->see('Connexion', '.nav');
        $I->dontSee('Connexion', '.active');

    }
}
