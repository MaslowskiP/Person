<?php

namespace PM\Components;

use Symfony\Component\Serializer\Serializer;


class PersonalSerializer extends Serializer {

	final public function personSerialize($data, $format, array $contest = array()) {

		if($format == 'txt') {
			echo 'Imie: ';
			echo $data->getName();
			echo '<br>';
			echo 'Telefon: ';
			echo $data->getTelephone();
			echo '<br>';
			echo 'Plec: ';
			echo $data->getGender();
			echo '<br>';
			echo 'Adres mailowy: ';
			echo $data->getEmail();

		}


		else {
			return parent::serialize($data, $format, $contest);
		}
	}


}