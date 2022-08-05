<?php

namespace Drupal\openid_connect_accessci_client\Plugin\OpenIDConnectClient;

use Drupal\Core\Form\FormStateInterface;
use Drupal\openid_connect\Plugin\OpenIDConnectClientBase;

/**
 * ACCESS CI OpenID Connect client.
 *
 * @OpenIDConnectClient(
 *   id = "accessci",
 *   label = @Translation("ACCESS CI")
 * )
 */
class ACCESSCI extends OpenIDConnectClientBase {

  /**
   * {@inheritdoc}
   */
  public function buildConfigurationForm(array $form, FormStateInterface $form_state) {
    $form = parent::buildConfigurationForm($form, $form_state);

    $form['authorization_endpoint'] = [
       '#title' => $this->t('Authorization endpoint'),
       '#type' => 'textfield',
       '#default_value' => $this->configuration['authorization_endpoint'],
    ];
    $form['token_endpoint'] = [
       '#title' => $this->t('Token endpoint'),
       '#type' => 'textfield',
       '#default_value' => $this->configuration['token_endpoint'],
    ];
    $form['userinfo_endpoint'] = [
       '#title' => $this->t('UserInfo endpoint'),
       '#type' => 'textfield',
       '#default_value' => $this->configuration['userinfo_endpoint'],
    ];

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
