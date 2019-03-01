<?php
namespace BitMike\YoutubeWidget\Model\Config\Source;
 
class IncludeCss implements \Magento\Framework\Option\ArrayInterface
{
    public function toOptionArray()
    {
        return [
          ['value' => 'yes', 'label' => __('Yes')],
          ['value' => 'no', 'label' => __('No')]            
        ];
    }
}