<?php

namespace Drupal\bline_login\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Provides automated tests for the bline_login module.
 */
class BlineLoginControllerTest extends WebTestBase {


  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return [
      'name' => "bline_login BlineLoginController's controller functionality",
      'description' => 'Test Unit for module bline_login and controller BlineLoginController.',
      'group' => 'Other',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function setUp() {
    parent::setUp();
  }

  /**
   * Tests bline_login functionality.
   */
  public function testBlineLoginController() {
    // Check that the basic functions of module bline_login.
    $this->assertEquals(TRUE, TRUE, 'Test Unit Generated via Drupal Console.');
  }

}
