<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20150901\Models;

use AlibabaCloud\Tea\Model;

class GetStackPolicyRequest extends Model
{
    /**
     * @description headers
     *
     * @var array
     */
    public $headers;
    protected $_name = [
        'headers' => 'headers',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res            = [];
        $res['headers'] = $this->headers;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetStackPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['headers'])) {
            $model->headers = $map['headers'];
        }

        return $model;
    }
}
