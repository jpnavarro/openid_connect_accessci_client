<?php

namespace Drupal\example\Plugin\OpenIDConnectClient;

use Drupal\Core\Form\FormStateInterface;
use Drupal\openid_connect\Plugin\OpenIDConnectClientBase;

/**
 * Access CI OpenID Connect client.
 *
 * @OpenIDConnectClient(
 *   id = "accessci",
 *   label = @Translation("ACCESS CI")
 * )
 */
class Accessci extends OpenIDConnectClientBase {

  /**
   * {@inheritdoc}
   */
  public function buildConfigurationForm(array $form, FormStateInterface $form_state) {
    $form = parent::buildConfigurationForm($form, $form_state);
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function getEndpoints() {
    return array(
      'authorization' => 'https://cilogon.org/authorize',
      'token' => 'https://cilogon.org/oauth2/token',
      'userinfo' => 'https://cilogon.org/oauth2/userinfo',
    );
  }

}
