<html>
<head>
	<meta charset="UTF-8"/>
</head>
<?php

	require_once 'vendor/autoload.php';
	use Symfony\Component\Serializer\Serializer;
	use Symfony\Component\Serializer\Encoder\XmlEncoder;
	use Symfony\Component\Serializer\Encoder\JsonEncoder;
	use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
	use PM\Components\Person;
	use PM\Components\PersonalSerializer;

	$encoders = array(new XmlEncoder(), new JsonEncoder());
	$normalizers = array(new GetSetMethodNormalizer());

	$serializer = new PersonalSerializer($normalizers, $encoders);

	$person = new Person();
	$person->setName("Maciek");
	$person->setTelephone("678-123-987");
	$person->setGender("Mezczyzna");
	$person->setEmail("fajnymejl@onet.pl");

	echo 'Format Tekstowy:<br>';
	$txtContent = $serializer->personSerialize($person, 'txt');
	$jsonContent = $serializer->personSerialize($person, 'json');
	echo '<br>Format XML:<br>';
	$xmlContent = $serializer->personSerialize($person, 'xml');
	echo '<textarea>';
	echo $xmlContent;
	echo '</textarea>';
	echo '<br>Format JSON:<br>';
	echo $jsonContent;
	
