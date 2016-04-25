<?php
namespace Mageplaza\Seo\Model\Source;

class Robots extends \Magento\Eav\Model\Entity\Attribute\Source\AbstractSource
{

	const DEFAULT_ROBOTS = 'INDEX,FOLLOW';

	public function getAllOptions()
	{
		$result = array();
		foreach ($this->toOptionArray() as $k => $v) {
			$result[] = array(
				'value' => $v,
				'label' => $v,
			);
		}

		return $result;
	}

	public function toOptionArray()
	{
		return array(
			'INDEX,FOLLOW',
			'NOINDEX,FOLLOW',
			'INDEX,NOFOLLOW',
			'NOINDEX,NOFOLLOW'
		);
	}

}
