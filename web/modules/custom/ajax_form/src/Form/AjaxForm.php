<?php
namespace Drupal\ajax_form\Form;
use Drupal\Component\Utility\Html;
use Drupal\Core\Ajax\AlertCommand;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Ajax\AjaxResponse;




class AjaxForm extends FormBase {

  /**
   * {@inheritDoc}
   */
  public function getFormId()
  {
    return 'ajax_form_ywd';
  }
  /**
   * {@inheritDoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state)
  {
    $form['first_name']= [
      '#type'=>'textfield',
      '#attributes'=> [
        'placeholder'=> t('prénom'),
        'class'=> [
          'ywd-input'
        ]
      ]
    ];
    $form['last_name']= [
      '#type'=>'textfield',
      '#attributes'=> [
        'placeholder'=> t('nom'),
        'class'=> [
          'ywd-input'
        ]
      ]
    ];
    $form['email']= [
      '#type'=>'email',
      '#attributes'=> [
        'placeholder'=> t('E-mail'),
        'class'=> [
          'ywd-input'
        ]
      ]
    ];

    $form['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Envoyer'),
      '#attributes'=> [
        'class'=> [
          'ywd-btn'
        ]
      ],
      '#ajax' => [
        'callback' => '::validateEmailAjax',
      ]
    ];

    $form['#attached']['library']= [
      'core/jquery',
      'core/drupal.ajax',
      'core/jquery.once',
      'core/jquery.form',
    ];
    return $form;
  }

  /**
   * Ajax collback to validate form.
   */

  public  function validateEmailAjax (array &$form, FormStateInterface $form_state) {
    $response = new AjaxResponse();
    $firstname = Html::escape($form_state->getValue('firstname'));
    $lastname = Html::escape($form_state->getValue('lastname'));
    $email = Html::escape($form_state->getValue('email'));

    $emailValid = $this->validateEmail($email);
    if ($emailValid && !empty($firstname) && !empty($lastname)){
      $response->addCommand(new AlertCommand($this->t('Vous passez !')));
    }else{
      $response->addCommand(new AlertCommand($this->t('Vous ne passez pas !')));
    }
    return $response;
  }

  /**
   * @param $email
   * @return bool
   */

  protected  function validateEmail($emeil){
    if (filter_var($emeil,FILTER_VALIDATE_EMAIL)){
      return TRUE;
    }
    return  FALSE;
  }

  /**
   * {@inheritDoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state)
  {
    // TODO: Implement submitForm() method.
  }
}
