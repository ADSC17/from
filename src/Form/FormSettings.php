<?php

namespace ContactForm\src\Form;

use Drupal\core\Form\FormBase;
use Drupal\core\Form\FormStateInteface;

Class FormSettings extends FormBase {
	
	public function getFormId() {
		return 'form_contact';
	}
	
	public function buildForm(array $form, FormStateInteface $form_state) {
		
			$form['fullname'] = array(
			'#type' => 'textfield',
			'#title' => $this->t('Firstname'),
			'#size' => 50,
			'#maxlength' => 50,
			'#requried' => TRUE,
			);
				
			$form['message'] = array(
			'#type' => 'textarea',
			'#title' => 'Message',
			'#size' => 300,
			'#maxlength' => 30,
			'#requried' => TRUE,
			);
			
			$form['checkbox'] = array(
			'#type' => 'boolean',
			'#title' => 'Call me back?',
			'#options' => array('Yes' => $this->t('Yes'), 'No' =>t('No')),
			'#requried' => TRUE,
			);
			
			$form['list'] = array)
			'#type' => 'List',
			'#title' => 'How did you find us?',
			'#size' => 300,
			'#requried' => TRUE,
			
			return $form;
		}
		
		public function validateForm(array $form, FormStateInteface $form_state) {
			if(strlen($formstate->getVlaue('fullname')) < 5 {
				$form_state->setErrorByName('fullname', $this->t('fullname is too shor, please enter again'));
			}
			
		}
		
		public function submitForm(array $form, FormStateInteface $form_state) {
			drupal_set_message($this->t('Thank you for your messsage @fullname', array('@fullname' => $form_state->getValue('fullname'))));
			}
}	
?>